<?php
    namespace App\Core;
    
    use \PDO;

    abstract class Model {

        private $dbc;

        public function __construct(DbConnection &$dbConnection){
            $this->dbc = $dbConnection;
        }

        public function getConnection(){
            return $this->dbc->getConnection();
        }
        public function getFields(): array {
            return [];
        }

        public function getTableName(): string {
            $matches = [];
            preg_match('/^.*\\\((?:[A-Z][a-z0-9]+)+)Model$/', static::class, $matches);
            return substr(strtolower(preg_replace('|[A-Z]|', '_$0', $matches[1])), 1);
        }

        public function getAll(){

            $tableName = $this->getTableName();
            $sql = "SELECT * FROM $tableName";
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res = $prep->execute();
            $items = [];
            if($res){
                $items = $prep->fetchAll(PDO::FETCH_OBJ);
            }

            return $items;
        }

        public function getById($id){

            $tableName = $this->getTableName();
            $sql = "SELECT * FROM $tableName WHERE " . $tableName  . "_id = ?";
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res = $prep->execute([ $id ]);
            $item = null;
            if($res){
                $item = $prep->fetch(PDO::FETCH_OBJ);
            }

            return $item;
        }

        public function getAllByFieldName(string $fieldName, $value){

            $tableName = $this->getTableName();
            $sql = "SELECT * FROM $tableName WHERE " . $fieldName . " = " . "'$value'";
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res = $prep->execute();
            $item = null;
            if($res){
                $item = $prep->fetch(PDO::FETCH_OBJ);
            }
            return $item;

        }

        public function add(array $data){

            $tableName = $this->getTableName();

            $sqlFieldNames = implode(', ', array_keys($data));
            $sqlValueField = str_repeat('?, ', count($data));
            $sqlValueField = substr($sqlValueField,0, -2);
            
            $sql = "INSERT INTO {$tableName} ({$sqlFieldNames}) VALUES ({$sqlValueField})";
    
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res = $prep->execute(array_values($data));
         
                if(!$res){
                    return false;
                } 

                return $this->dbc->getConnection()->lastInsertId();

        }

        public function editById(int $id, array $data) {

            $tableName = $this->getTableName();

            $listKeys = [];
            $values = [];

            foreach($data as $key => $value){

                $listKeys[] =  "{$key}  =  ?"; 
                $values[] = $value;
            }

                $editString = implode(', ', $listKeys);
                $values[] = $id;

                $sql = "UPDATE {$tableName} SET {$editString} WHERE {$tableName}_id = ?";


            $prep = $this->dbc->getConnection()->prepare($sql);

            return $prep->execute($values);
    }

    public function deleteById(int $id){

        $tableName = $this->getTableName();
        $sql = "DELETE FROM {$tableName} WHERE {$tableName}_id = ?";
        $prep = $this->dbc->getConnection()->prepare($sql);
        return $prep->execute([$id]);

    }

}
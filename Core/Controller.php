<?php
    namespace App\Core;

    use App\Models\EmployeeModel;

    class Controller {
        private $dbc;
        private $data = [];
        
        public function __construct(DbConnection &$dbConnection){
            $this->dbc = $dbConnection;
        }

        public function &getDbConnection(): \App\Core\DbConnection{
            return $this->dbc;
        }

        public function set(string $name, $value): bool {
            $result = false;

            if(preg_match('/^([a-z]+)(?:[A-Z][a-z0-9]+)*$/', $name)){
                $this->data[$name] = $value;
                $result = true;
            }
            return $result;
        }

        public function getData(): array {
            return $this->data;
        }

        public function confirmSession(){
            $sesija = $_SESSION['employee_id'];
           
            $employeeModel = new EmployeeModel($this->getDbConnection());
            $employee = $employeeModel->getById($sesija); 
            $this->set('employee', $employee);
        }

        public function redirect($path, $code = 303){
            ob_start();
            header('Location: ' . $path, true, $code);
            exit;
        }
    }
<?php
    namespace App\Models;

    use App\Core\Model;

    class CartModel extends Model {
        
        public function getFields(): array {

            return [

                'cart_id'           => '',
                'items'             => '',
                'expiry_date'       => '',
                'paid'              => '',
                'shipped'           => '',

            ];
        }
        
        
        public function getLastInsertedId() {

            $sql = 'SELECT * FROM `cart` ORDER BY `cart_id` DESC LIMIT 1';
            $prep = $this->getConnection()->prepare($sql);
            $res = $prep->execute();
            $item = [];
            if($res){
                $item = $prep->fetch(\PDO::FETCH_ASSOC);
            } 
            return $item;
        }

        public function paid1(){
            $tableName = 'cart';
        $sql = "SELECT c.paid, c.shipped, c.cart_id, t.transaction_id, t.fullname, t.email, t.items, t.grand_total, t.transaction_date
        FROM cart as c
        INNER JOIN `transaction` as t ON c.cart_id=t.cart_id WHERE c.paid = 1 AND c.shipped = 0";
        $prep = $this->getConnection()->prepare($sql);
        $res = $prep->execute();
        $items = [];
        if($res){
            $items = $prep->fetchall(\PDO::FETCH_OBJ);
        }

        return $items;

        }
    }
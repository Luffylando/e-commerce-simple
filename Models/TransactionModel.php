<?php
    namespace App\Models;

    use App\Core\Model;

    class TransactionModel extends Model {
        
        public function getFields(): array {

            return [

                'transaction_id'        => '',
                'cart_id '              => '',
                'fullname'              => '',
                'email'                 => '',
                'country'               => '',
                'city'                  => '',
                'street'                => '',
                'zipcode'               => '',
                'items'                 => '',
                'sub_total'             => '',
                'tax'                   => '',
                'grand_total'           => '',
                'transaction_date'      => '',

            ];
        }
    }
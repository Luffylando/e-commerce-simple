<?php
    namespace App\Models;

    use App\Core\Model;

    class CategoryModel extends Model {
        
        public function getFields(): array {

            return [

                'category_id'       => '',
                'category_name'     => '',
                'category_parent'   => '',

            ];
        }
    }
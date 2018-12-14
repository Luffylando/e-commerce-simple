<?php
    namespace App\Models;

    use App\Core\Model;

    class FlowersModel extends Model {
        
        public function getFields(): array {

            return [

                'flowers_id'        => '',
                'flower_id'         => '',
                'old_price'         => '',
                'actual_price'      => '',
                'flower_img'        => '',
                'availability'      => '',
                
            ];
        }
    }
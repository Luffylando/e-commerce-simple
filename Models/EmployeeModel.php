<?php
    namespace App\Models;

    use App\Core\Model;

    class EmployeeModel extends Model {
        
        public function getFields(): array {

            return [

                'employee_id'       => '',
                'username'          => '',
                'fullname'          => '',
                'email'             => '',
                'password'          => '',
                'role'              => '',
                
            ];
        }
    }
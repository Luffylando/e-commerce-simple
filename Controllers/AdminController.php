<?php
    namespace App\Controllers;

    use App\Core\Controller;
    use App\Models\EmployeeModel;
    use App\Models\CategoryModel;
    use App\Models\FlowersModel;
    use App\Models\TransactionModel;
    use App\Models\CartModel;



    class AdminController extends Controller{


        public function index(){

            $this->confirmSession();

        }

        /*
        ///
        // Auth Methods
        ///
        */


        public function login(){


           if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
               
            $employeeModel = new EmployeeModel($this->getDbConnection());
            $employee = $employeeModel->getAllByFieldName('email', $email);
        
            if($employee){


                if($employee->email != $email || $employee->password != $password){
                    //umesto errora redirekcija
                    $this->redirect(\Configuration::BASE . 'login');

                } else{
                
                    $_SESSION['employee_id'] = $employee->employee_id;
                    $this->redirect(\Configuration::BASE . 'admin/products');

                }
            } else {
                $this->redirect(\Configuration::BASE . 'login');

            }                  
        }
    }

        public function logout(){

            session_unset();
            session_destroy();
            $this->redirect(\Configuration::BASE . 'login');
        }



        /*
        ///
        // Categories Methods
        ///
        */


        public function categories() {

            if(!isset($_SESSION['employee_id'])){
                $this->redirect(\Configuration::BASE);
            }
            $this->confirmSession();
           


          $categoryModel = new CategoryModel($this->getDbConnection());
          $categories = $categoryModel->getAll();
          $this->set('categories', $categories);

          if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $name = filter_input(INPUT_POST, 'category_name', FILTER_SANITIZE_STRING);
            $parent = filter_input(INPUT_POST, 'category_parent', FILTER_SANITIZE_NUMBER_INT);

            $categoryModel = new CategoryModel($this->getDbConnection());
            $categories = $categoryModel->add([

                'category_name' => $name,
                'category_parent' => $parent,

            ]);

            if($categories){
                $this->redirect(\Configuration::BASE . 'admin/categories');
                }
            }
        }

        public function editCategories() {

            if(!isset($_SESSION['employee_id'])){
                $this->redirect(\Configuration::BASE);
            }
            $this->confirmSession();
           


            $id = $_GET['URL'];
            preg_match('!\d+!', $id, $matches);
            $id = $matches[0];

            $categoryModel = new CategoryModel($this->getDbConnection());
            $category = $categoryModel->getById($id);
            $this->set('category', $category);

            $categoryModel = new CategoryModel($this->getDbConnection());
            $categories = $categoryModel->getAll();
            $this->set('categories', $categories);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $category_name  = filter_input(INPUT_POST, 'category_name', FILTER_SANITIZE_STRING);
                $category_parent  = filter_input(INPUT_POST, 'category_parent', FILTER_SANITIZE_NUMBER_INT);

                $categoryModel = new CategoryModel($this->getDbConnection());
                $categories = $categoryModel->editById($id,[

                    'category_name' => $category_name,
                    'category_parent'  => $category_parent

                ]);

                if($categories){

                    $this->redirect(\Configuration::BASE . 'admin/categories');
                }
          
            }
        }

      
        public function deleteCategories(){

            $id = $_GET['URL'];
            preg_match('!\d+!', $id, $matches);
            $id = $matches[0];

            $categoryModel = new CategoryModel($this->getDbConnection());
            $category = $categoryModel->deleteById($id);
  
            if($category){

                $this->redirect(\Configuration::BASE . 'admin/categories');
            }
        }


        /*
        ///
        // Employees Methods
        ///
        */

        public function employees(){

            if(!isset($_SESSION['employee_id'])){
                $this->redirect(\Configuration::BASE);
            }
            $this->confirmSession();
            

            $employeeModel = new EmployeeModel($this->getDbConnection());
            $employees = $employeeModel->getAll();
            $this->set('employees', $employees);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $username   = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $fullname   = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
                $email      = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                $password   = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                $role       = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);

                $employeeModel = new EmployeeModel($this->getDbConnection());
                $employee = $employeeModel->add([

                    'username'      => $username,
                    'fullname'      => $fullname,
                    'email'         => $email,
                    'password'      => $password,
                    'role'          => $role,

                ]);

                if($employee){

                    $this->redirect(\Configuration::BASE . 'admin/employees');
                }
            }
        }

        public function editEmployees(){

            $id = $_GET['URL'];
            preg_match('!\d+!', $id, $matches);
            $id = $matches[0];

            $employeeModel = new EmployeeModel($this->getDbConnection());
            $employee = $employeeModel->getById($id);
            $this->set('employee', $employee);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $username   = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $fullname   = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
                $email      = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                $password   = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                $role       = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);


                
                $employeeModel = new EmployeeModel($this->getDbConnection());
                $employee = $employeeModel->editById($id, [


                    'username'      => $username,
                    'fullname'      => $fullname,
                    'email'         => $email,
                  //'password'      => $password,
                    'role'          => $role,

                ]);

                if($employee){
                    $this->redirect(\Configuration::BASE . 'admin/employees');
                }
            }
        }

        public function deleteEmployee(){

            $id = $_GET['URL'];
            preg_match('!\d+!', $id, $matches);
            $id = $matches[0];

            $employeeModel = new EmployeeModel($this->getDbConnection());
            $employee = $employeeModel->deleteById($id);
            
            if($employee){
                $this->redirect(\Configuration::BASE . 'admin/employees');
            }
        }



        /*
        ///
        // Flowers/Products Methods
        ///
        */

        public function products() {

            if(!isset($_SESSION['employee_id'])){
                $this->redirect(\Configuration::BASE);
            }
            $this->confirmSession();
            

            $flowersModel = new FlowersModel($this->getDbConnection());
            $flowers = $flowersModel->getAll();
            $this->set('flowers', $flowers);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $flower_name  = filter_input(INPUT_POST, 'flower_name', FILTER_SANITIZE_STRING);
                $list_price   = filter_input(INPUT_POST, 'list_price', FILTER_SANITIZE_STRING);
                $actual_price = filter_input(INPUT_POST, 'actual_price', FILTER_SANITIZE_STRING);
                $availability = filter_input(INPUT_POST, 'availability', FILTER_SANITIZE_STRING);

                $uploadPath = '/e-commerce/Assets/img/flowers/';
                $imageName = $_FILES['image']['name'];
                $fullImageName = $uploadPath . $imageName;
                $tmpName = $_FILES['image']['tmp_name'];
                $moveDestination = '/var/www/html/e-commerce/Assets/img/flowers/' . $imageName;

                
                $flowersModel = new FlowersModel($this->getDbConnection());
                $flower = $flowersModel->add([

                    'flower_name'       => $flower_name,
                    'old_price'         => $list_price,
                    'actual_price'      => $actual_price,
                    'flower_img'        => $fullImageName,
                    'availability'      => $availability
                ]);

                if($flower){
                    if($_FILES['image']['name'] != ''){

                         move_uploaded_file($tmpName, $moveDestination);
                         $this->redirect(\Configuration::BASE . 'admin/products');

                    }
                }
            }
        }

        public function editProducts(){

            if(!isset($_SESSION['employee_id'])){
                $this->redirect(\Configuration::BASE);
            }
            $this->confirmSession();
            


            $id = $_GET['URL'];
            preg_match('!\d+!', $id, $matches);
            $id = $matches[0];

            $flowerModel = new FlowersModel($this->getDbConnection());
            $flower = $flowerModel->getById($id);
            $this->set('flower', $flower);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $flower_name  = filter_input(INPUT_POST, 'flower_name', FILTER_SANITIZE_STRING);
                $list_price   = filter_input(INPUT_POST, 'list_price', FILTER_SANITIZE_NUMBER_INT);
                $actual_price = filter_input(INPUT_POST, 'actual_price', FILTER_SANITIZE_NUMBER_INT);
                $availability  = filter_input(INPUT_POST, 'availability', FILTER_SANITIZE_STRING);


                if($_FILES['image']['name'] != ''){
                    $image = '/e-commerce/Assets/img/flowers/' . $_FILES['image']['name'];
                } else {
                    $image = $flower->flower_img;
                }
          
                $moveDestination = '/var/www/html/e-commerce/Assets/img/flowers/' . $_FILES['image']['name'];

                $flowerModel = new FlowersModel($this->getDbConnection());
                $flower = $flowerModel->editById($id, [

                    'flower_name'    => $flower_name,
                    'old_price'      => $list_price,
                    'actual_price'   => $actual_price,
                    'availability'   => $availability,
                    'flower_img'     => $image,

                ]);

                if($flower){
                    if($_FILES['image']['name'] != ''){
                        move_uploaded_file($_FILES['image']['tmp_name'], $moveDestination);
                        
                    }
                    $this->redirect(\Configuration::BASE . 'admin/products');
                }                
            }
        }

        public function deleteProducts() {

            $id = $_GET['URL'];
            preg_match('!\d+!', $id, $matches);
            $id = $matches[0];

            $flowerModel = new FlowersModel($this->getDbConnection());
            $flower = $flowerModel->deleteById($id);
           
            if($flower){
                $this->redirect(\Configuration::BASE . 'admin/products');
            }
        }


        /*
        //
        / Transaction Methods
        //
        */

        public function cart() {

            if(!isset($_SESSION['employee_id'])){
                $this->redirect(\Configuration::BASE);
            }
           
            $this->confirmSession();
            
            $cartModel = new CartModel($this->getDbConnection());
            $carts = $cartModel->paid1();
            $this->set('carts', $carts);


    }

    public function cartShip(){
        $id = $_GET['URL'];
        preg_match('!\d+!', $id, $matches);
        $id = $matches[0];

        $cartModel = new CartModel($this->getDbConnection());
        $carts = $cartModel->editById($id, [

            'shipped'   => 1
        ]);

        if($carts){
            $this->redirect(\Configuration::BASE . 'admin/cart');
        }

    }
}

  
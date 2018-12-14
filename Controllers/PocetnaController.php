<?php
    namespace App\Controllers;

    use App\Core\Controller;
    use App\Models\CategoryModel;
    use App\Models\FlowersModel;



    class PocetnaController extends Controller{

        public function index(){

            $categoryModel = new CategoryModel($this->getDbConnection());
            $categories = $categoryModel->getAll();
            $this->set('categories', $categories);

            $flowersModel = new FlowersModel($this->getDbConnection());
            $flowers = $flowersModel->getAll();
            $this->set('flowers', $flowers);

           

        }


        public function about() {

        }

        public function contact() {
            
        }
    }
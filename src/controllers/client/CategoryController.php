<?php

namespace controllers\client;

use models\Category;
use models\Product;

class CategoryController
{
    public $modelObject;
    public $productObject;
    public function __construct(){
        $this->modelObject = new Category();
        $this->productObject = new Product();
    }

    public function getCategory(){
        $categories = $this->modelObject->getAllCategory();
        require_once './config/head.php';
    }
    public function index(){
            $id = $_GET['IDCatagory'];
            $courses = $this->modelObject->getCategoryById($id);
            require_once './src/views/client/danhmuc/index.php';
    }
}

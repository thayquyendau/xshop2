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
        if (isset($_GET['id'])) {
            $id = $_GET['IDCatagory'];
            $courses = $this->modelObject->getCategoryById($id);
            require_once './src/views/client/danhmuc/index.php';
        } else {
            echo "Không có tham số 'id' trong URL.";
        }
    }
}

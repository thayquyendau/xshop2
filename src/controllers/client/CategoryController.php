<?php

namespace controllers\client;

use models\Category;
use models\Course;

class CategoryController{
    public $modelObject;
    public $courseObject;
    public function __construct(){
        $this->modelObject = new Category();
        $this->courseObject = new Course();
    }

    public function getCategory(){
        $categories = $this->modelObject->getAllCategory();
        require_once './config/head.php';
    }
    public function index(){

            $id = $_GET['IDCatagory'];
            $categories = $this->modelObject->getCategoryById($id);
            // debug($categories); 
            $courses = $this->modelObject->getCourseById($id);
            require_once './src/views/client/danhmuc/index.php';
    }
    
}

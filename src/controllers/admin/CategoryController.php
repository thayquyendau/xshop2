<?php
namespace controllers\admin;

use models\Category;

class CategoryController
    {
    public $modelObject;
    public $base = BASE_URL;
    public function __construct()
    {
    $this->modelObject = new Category();
    }
    public function index()
        {
        $_SESSION['admin_ift'] = '1';
        $Danhmucs = $this->modelObject->getAllCategory();
        require_once './src/views/admin/danhmuc/index.php';
        }
   

    public function delete(){
        $_SESSION['admin_ift'] = '1';
        $id = $_GET['id'];
        $this->modelObject->deleteCategory($id);
        header("location: $this->base/admin/category");
        }

    public function create()
        {
            $_SESSION['admin_ift'] = '1';
            if($_SERVER['REQUEST_METHOD'] =='POST'){
            $this->modelObject->createCategory($_POST);
            header("location: $this->base/admin/category");
            } else {
            require_once './src/views/admin/danhmuc/create.php';
            }
        }

    public function update(){
        $_SESSION['admin_ift'] = '1';
        $id = $_GET['id'];
            if($_SERVER['REQUEST_METHOD'] =='POST'){
            $this->modelObject->updateCategory($_POST, $id);
            header("location: $this->base/admin/category");
            } else {
            $category = $this->modelObject->getCategoryById($id);
            require_once './src/views/admin/danhmuc/edit.php';
            }
        }
        
    }

?>
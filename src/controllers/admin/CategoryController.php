<?php
namespace controllers\admin;

use models\Category;

class CategoryController
    {
    
    public $modelObject;
    public $categories;

    public $base = BASE_URL;
    public function index()
        {
        require_once './src/views/admin/category/index.php';
        }
    public function __construct()
        {
        $this->modelObject = new Category();
        }

    public function getAllCate()
        {
        $this->categories = $this->modelObject->getAllCategory();
        }

    public function create()
    {
    if (isset($_POST['submit'])) {
        $ma_loai = $_POST['ma_loai'];
        $ten_loai = $_POST['ten_loai'];
        $this->modelObject->createCategory( $ma_loai,$ten_loai);
        header("location: $this->base/admin/category");
        } else {
        require_once './src/views/admin/category/create.php';
        }
    }

    public function update()
    {
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $ma_loai = $_POST['ma_loai'];
        $ten_loai = $_POST['ten_loai'];
        $this->modelObject->updateCategory($id, $ma_loai, $ten_loai);
        header("location: $this->base/admin/category");
        }
        else {
        $id = $_GET['id'];
        $category = $this->modelObject->getCategoryById($id);
        require_once './src/views/admin/category/update.php';
        }
    }

    public function delete()
        {
        $id = $_GET['id'];
        $this->modelObject->deleteCategory($id);
        header('Location: '.BASE_URL.'/admin/category');
        }
        
    }


?>
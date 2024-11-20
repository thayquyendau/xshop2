<?php
namespace controllers\admin;

use models\Product;

class ProductController
    {
    
    public $modelObject;
    public $products;

    public $base = BASE_URL;
    public function index()
        {
        require_once './src/views/admin/product/index.php';
        }
    public function __construct()
        {
        $this->modelObject = new Product();
        }

    public function getAllPro()
        {
        $this->products = $this->modelObject->getAllProduct();
        }
        public function create() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST['hinh_anh'] = "./img/".$_FILES['hinh_anh']['name'];
                $tmp_name = $_FILES['hinh_anh']['tmp_name'];
                $dir = "./img/".$_FILES['hinh_anh']['name'];
                move_uploaded_file($tmp_name, $dir);
                (new Product)->create();
                header("location: $this->base/admin/product"); 
    
            } else {
                require_once './src/views/admin/product/create.php';
            }
        }

        public function update() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['size'] > 0) {
                    $_POST['hinh_anh'] = "./img/".$_FILES['hinh_anh']['name'];
                }
                $tmp_name = $_FILES['hinh_anh']['tmp_name'];
                $dir = "./img/".$_FILES['hinh_anh']['name'];
                move_uploaded_file($tmp_name, $dir);
                (new Product)->edit();
            header("location: $this->base/admin/product");
    
            } else {
                $id = $_GET['id'] ?? "";
                $product = (new Product)->find($id);
                require_once './src/views/admin/product/update.php';
            }
            
        }

        public function delete()
        {
        $id = $_GET['id'];
        $this->modelObject->deleteProduct($id);
        header('Location: '.BASE_URL.'/admin/product');
        }

    }
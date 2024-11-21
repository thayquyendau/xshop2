<?php 
    namespace controllers\client;
    use models\Product;
    use models\Comment;
    
    class ProductController {
        public $modelObject;
        public $modelObjects;
        public $base = BASE_URL;
        public function __construct()
        {
        $this->modelObject = new Product();
        $this->modelObjects = new Comment();
        }
        public function detail() {
            // $id = $_GET['id'] ;
            // $products = $this->modelObject->getProductById($id);
            // $comments = $this->modelObjects->getAllCommentbyId($id);
            // debug($products);
            require_once './src/views/client/danhmuc/detail.php';
        }

        //xu li comment
        // public function create(){
        //     if ($_SERVER['REQUEST_METHOD'] =='POST') {
        //         // debug($_POST);
        //         $id = $_POST['ma_san_pham'];     
        //         $_POST['user']= $_SESSION['id'];  
        //         $this->modelObjects->createComment($_POST);
        //         header("location: $this->base/productDetail?id=$id");
        //         } else {
        //         require_once './src/views/client/products/detail.php';
        //         }
        //     }

    }
?>
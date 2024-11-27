<?php 
namespace controllers\client;
use models\Home;


    class HomeController {
        public $modelObject;
        public $baseUrl = BASE_URL;

        public function __construct()
        {
            $this->modelObject = new Home();

        }

        public function indexHandle() {
            unset($_SESSION['admin_itf']);
            header("location: $this->baseUrl/indexHandle");
        }

        public function index() {
            // $id = $_GET['IDCatagory'];
            $homes = $this->modelObject->getAllHome();
            $homes1 = $this->modelObject->getAllHome1();
            $homes2 = $this->modelObject->getAllHome2();
            $homes3 = $this->modelObject->getAllHome3();
            require_once './src/views/client/home/home.php';
        }

    }
?>
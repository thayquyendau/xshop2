<?php 
namespace controllers\client;
use models\Home;


    class HomeController {
        public $modelObject;

        public function __construct()
        {
            $this->modelObject = new Home();

        }

        public function index() {
            // $id = $_GET['IDCatagory'];
            $homes = $this->modelObject->getAllHome();
            $homes1 = $this->modelObject->getAllHome1();
            require_once './src/views/client/home/home.php';
        }
    }
?>
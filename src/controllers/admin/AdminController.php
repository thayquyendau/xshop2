<?php 
    namespace controllers\admin;

    use models\Home;

    class AdminController {
        public $baseUrl = BASE_URL;
        public $modelObject;
        public function __construct()
        {
        $this->modelObject = new Home();
        }
        public function dashboard() {
            // $_SESSION['admin'] = 1;
            require_once './src/views/login/home/login.php';
        }
        public function admin() {
            $_SESSION['admin_itf'] = '1';
            header("location: $this->baseUrl/adminHandle");
        }
        public function adminHandle(){
            // $_SESSION['admin'] = 1;
            $id = $_SESSION['UserID'];
            $thongke = $this -> modelObject-> thongkeUser();
            $tong = $this->modelObject->getSum();
            $tongTC = $this->modelObject->getSumTC();
            $tongST = $this->modelObject->getSumST();
            $max = $this->modelObject->MaxTC();
            $user = $this -> modelObject->getUserById($id);
            require_once './src/views/admin/home/home.php';
        }

        public function updateMK(){
                $id = $_SESSION['UserID'];
                $pass = $_POST['Password'];
                $this -> modelObject-> updateMK($pass, $id);
                $this -> modelObject-> updateUser($_POST, $id);
                $_SESSION['HoVaTen'] = $_POST['HoVaTen'];
                header("location: $this->baseUrl/adminHandle");
        }
    }
?>
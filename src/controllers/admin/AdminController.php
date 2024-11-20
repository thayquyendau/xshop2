<?php 
    namespace controllers\admin;
    class AdminController {
        public $baseUrl = BASE_URL;
        public function dashboard() {
            // $_SESSION['admin'] = 1;
            require_once './src/views/admin/dashboard.php';
        }
        public function adminHandle(){
            $_SESSION['admin'] = 1;
            header("location: $this->baseUrl/admin");
        }
    }
?>
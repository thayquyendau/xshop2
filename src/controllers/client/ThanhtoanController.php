<?php 
namespace controllers\client;

use models\Cart;

class ThanhtoanController {
    public $cartModel;
    public $baseUrl = BASE_URL;

    public function __construct() {
        // Ngăn chặn lỗi hiển thị
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $this->cartModel = new Cart();
    }

    public function index(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $selectedCourses = [];
            // Nếu có dữ liệu từ giỏ hàng
            if (!empty($_POST['IDKhoaHoc']) && is_array($_POST['IDKhoaHoc'])) {
                $selectedCourses = $_POST['IDKhoaHoc'];
            }
            // Nếu có dữ liệu từ chi tiết khóa học
            if (!empty($_POST['IDKhoaHoc']) && !is_array($_POST['IDKhoaHoc'])) {
                $selectedCourses[] = $_POST['IDKhoaHoc'];
            }
        
            // Kiểm tra nếu không có khóa học nào được chọn
            if (empty($selectedCourses)) {
                $error_message = "Vui lòng chọn ít nhất một khóa học để thanh toán.";
                $cartItems = $this->cartModel->getCartItems();  
                // header("location: $this->baseUrl/giohang ");
                require_once './src/views/client/giohang/giohang.php';  
            } else {
                $id = $_POST['IDKhoaHoc'];
                // debug($id);
                $cartItems = $this->cartModel->getthanhtoanbyId($id);
                require_once './src/views/client/thanhtoan/thanhtoan.php';
            }
        }
        
    }
}

?>
<?php 
namespace controllers\client;

use models\Cart;

class ThanhtoanController {
    public $cartModel;

    public function __construct() {
        // Ngăn chặn lỗi hiển thị
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $this->cartModel = new Cart();
    }

    public function index(): void {
        if (!empty($_POST['IDKhoaHoc']) && is_array($_POST['IDKhoaHoc']) && count($_POST['IDKhoaHoc']) > 0) {
            $idList = $_POST['IDKhoaHoc'];
            $cartItems = $this->cartModel->getthanhtoanbyId($idList);
            require_once './src/views/client/thanhtoan/thanhtoan.php';
        } else {
            $error_message = "Vui lòng chọn ít nhất một khóa học!";
            $cartItems = $this->cartModel->getCartItems(); // Lấy lại giỏ hàng
            require_once './src/views/client/giohang/giohang.php';
        }
    }
}

?>
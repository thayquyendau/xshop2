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

    public function index(): void{
        if (isset($_POST['IDKhoaHoc']) && is_array($_POST['IDKhoaHoc']) && count($_POST['IDKhoaHoc']) > 0) {
            // Lấy danh sách ID sản phẩm đã chọn
            $idList = $_POST['IDKhoaHoc'];
            
            // Gọi hàm trong model để lấy thông tin sản phẩm dựa trên ID
            $cartItems = $this->cartModel->getthanhtoanbyId($idList);
    
            // Tải trang thanh toán
            require_once './src/views/client/thanhtoan/thanhtoan.php';
        } else {
            header("Location: " . BASE_URL . "/giohang?error=1");   
            exit();
        }
            
    }
}

?>
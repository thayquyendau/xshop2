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
        
            $id = $_POST['IDKhoaHoc'];
            
            $cartItems= $this->cartModel->getthanhtoanbyId($id);
            require_once './src/views/client/thanhtoan/thanhtoan.php';
            // Loại bỏ các biến ko phải mảng
            // $cartItems = array_filter($cartItems, 'is_array');
            // debug($cartItems);
           
        // } else {
        //     $cartItems = $this->cartModel->getCartItems();
        //     // debug($cartItems);
        //     $cartItems = array_filter($cartItems, 'is_array');
        //     require_once './src/views/client/thanhtoan/thanhtoan.php';
        
    }
}

?>
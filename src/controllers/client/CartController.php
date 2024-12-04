<?php

namespace controllers\client;

use models\Cart;
use models\Category;

class CartController
{
    public $cartModel;
    public $courseModel;
    public $baseUrl = BASE_URL;
    public function __construct(){               
        //Ngan chan loi
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        $this->cartModel = new Cart();
        $this->courseModel = new Category();
    }
    // Thêm sản phẩm vào giỏ hàng
    public function index(): void{
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['IDKhoaHoc'];
            $this->cartModel->addToCartById([],$id);
            $cartItems = $this->cartModel->getCartItems();
            // Loại bỏ các biến ko phải mảng
            $cartItems = array_filter($cartItems, 'is_array');
            // debug($cartItems);
            $_SESSION['message'] = 'Thêm giỏ hàng thành công!';
            
            header("location: $this->baseUrl/detailCourse?IDKhoaHoc={$id}");
            
        } else {
            // Ấn vào giỏ hàng
            $cartItems = $this->cartModel->getCartItems();
            // debug($cartItems);
            $cartItems = array_filter($cartItems, 'is_array');
            require_once './src/views/client/giohang/giohang.php';
        }
    }

    // Xóa một sản phẩm khỏi giỏ hàng
    public function delete(): never{
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        $id = $_GET['IDKhoaHoc']?? null;
        if ($id) {
            $this->cartModel->removeFromCart($id);
        }
        header("location: $this->baseUrl/giohang");
        exit;
    }


    // Xóa toàn bộ giỏ hàng
    public function deleteAll(): never{
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        $this->cartModel->clearCart();
        header("Location: $this->baseUrl/giohang");
        exit;
    }
}

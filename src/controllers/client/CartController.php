<?php

namespace controllers\client;

use models\Cart;
use models\Category;

class CartController{
    public $cartModel;
    public $courseModel;
    public $BASE_URL = BASE_URL;
    public function __construct(){
        $this->cartModel = new Cart();
        $this->courseModel = new Category();
    }
    // Thêm sản phẩm vào giỏ hàng
    public function index(): void{
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            ini_set('display_errors', 0);
            ini_set('log_errors', 1);
            //Ngan chan loi
            $id = $_POST['IDKhoaHoc'];
            $this->cartModel->addToCartById($_POST, $id);
            $cartItems = $this->cartModel->getCartItems();
            // header("Location: $this->BASE_URL/giohang");
            require_once './src/views/client/giohang/giohang.php';
        } else{
            $cartItems = $this->cartModel->getCartItems();
            require_once './src/views/client/giohang/giohang.php';
        }   
    }

    // Xóa một sản phẩm khỏi giỏ hàng
    public function removeCart()
    {
        $id = $_GET['IDKhoaHoc'] ?? null;
        if ($id) {
            $this->cartModel->removeFromCart($id);
        }
        header("Location: " . BASE_URL . "/giohang");
        exit;
    }


    // Xóa toàn bộ giỏ hàng
    public function clearCart()
    {
        $this->cartModel->clearCart();
        header("Location: " . BASE_URL . "/giohang");
        exit;
    }
}

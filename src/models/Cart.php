<?php

namespace models;

use commons\baseModel;

class Cart extends baseModel {
    public function __construct() {
        parent::__construct();
        if (session_status() === PHP_SESSION_NONE) {
            session_start(); 
        }
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = $_POST; 
        }   
    }

    public function addToCartById($param, $id) {
        // debug($id);
        $course = $this->pdoQuery("SELECT * FROM khoahoc WHERE IDKhoaHoc = ?", [$id]);
        // debug($course);
            
        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = [
                'IDKhoaHoc' => $course['IDKhoaHoc'],
                'TenKhoaHoc' => $course['TenKhoaHoc'],
                'Gia' => $course['Gia'],
                'IDCatagory'=> $course['IDCatogory'],
                'GiaoVien' => $course['GiaoVien'],
                'HinhAnh' => $course['HinhAnh']
            ];
            // debug($_SESSION['cart'][$id]);
            
        }
    
        // Trả về toàn bộ giỏ hàng sau khi thêm
        return $_SESSION['cart'];
    }
    public function getCartItems() {
        return $_SESSION['cart'] ?? [];
    }

    // Xóa một sản phẩm khỏi giỏ hàng
    public function removeFromCart($id) {
        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }
    }

    // Cập nhật số lượng sản phẩm
    public function updateCartItem($id, $quantity) {
        if (isset($_SESSION['cart'][$id])) {
            if ($quantity > 0) {
                $_SESSION['cart'][$id]['quantity'] = $quantity;
            } else {
                $this->removeFromCart($id); // Xóa sản phẩm nếu số lượng <= 0
            }
        }
    }

    // Xóa toàn bộ giỏ hàng
    public function clearCart() {
        $_SESSION['cart'] = [];
    }
}
?>

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
            $_SESSION['cart'] = []; 
        }   
    }

    public function addToCartById($param,$id): array {
        // Truy vấn thông tin khóa học từ CSDL
        $course = $this->pdoQuery("SELECT * FROM khoahoc WHERE IDKhoaHoc = ?", [$id]);
        // debug($course);      
        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = [
                'IDKhoaHoc' => $course['IDKhoaHoc'] ?? null,
                'TenKhoaHoc' => $course['TenKhoaHoc'] ?? '',
                'Gia' => $course['Gia'] ?? 0,
                'GiaoVien' => $course['GiaoVien'] ?? '',
                'HinhAnh' => $course['HinhAnh'] ?? ''
            ];
        }
        return $_SESSION['cart'];
    }
    // public function getthanhtoanbyId($id){
    //     foreach($param as $parms) {

    //     }
    //     debug($sql);
    //     $sql = "SELECT * FROM khoahoc WHERE IDKhoaHoc = $id";
    //     debug($sql);
    //     return $this->pdoQueryAll($sql, [$id]);
    // }

    public function getthanhtoanbyId($ids) {
        // Kiểm tra xem $ids có phải là một mảng không
        if (!is_array($ids) || empty($ids)) {
            return []; // Trả về rỗng nếu $ids không hợp lệ
        }
    
        // Tạo chuỗi điều kiện IN trong SQL
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
    
        // Truy vấn SQL
        $sql = "SELECT * FROM khoahoc WHERE IDKhoaHoc IN ($placeholders)";
        
        // Debug SQL và mảng giá trị
        // debug($sql);
        // debug($ids);
    
        // Thực hiện truy vấn với các giá trị từ mảng
        return $this->pdoQueryAll($sql, $ids);
    }
    
    
    public function getCartItems(): array{
        return isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? $_SESSION['cart'] : [];
    }
    
    

    // Xóa một sản phẩm khỏi giỏ hàng
    public function removeFromCart($id) {
        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }
    }

    // Xóa toàn bộ giỏ hàng
    public function clearCart() {
        $_SESSION['cart'] = [];
    }
}
?>

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

    public function addToCartById($param, $id): array {
        // Truy vấn thông tin khóa học từ CSDL
        $course = $this->pdoQuery("SELECT * FROM khoahoc WHERE IDKhoaHoc = ?", [$id]);
        // debug($course);
        if (!is_array($course) || empty($course)) {
            // Nếu không có kết quả hợp lệ, trả về mảng rỗng
            return [];
        }
        unset($_SESSION['cart']);
        // Kiểm tra nếu khóa học chưa có trong giỏ hàng
        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = [
                'IDKhoaHoc' => $course['IDKhoaHoc'],
                'TenKhoaHoc' => $course['TenKhoaHoc'],
                'Gia' => $course['Gia'],
                'GiaoVien' => $course['GiaoVien'],
                'HinhAnh' => $course['HinhAnh'],
                'TimeKhoaHoc' => $course['TimeKhoaHoc'],
                'GiaoTrinh' => $course['GiaoTrinh'],
            ];
        }
        // debug($_SESSION['cart']);
        // Trả về giỏ hàng (mảng)
        return $_SESSION['cart'];
    }
    
    

    public function getthanhtoanbyId($id) {
        if (!is_array($id) || empty($id)) {
            return []; 
        }
        $placeholders = implode(',', array_fill(0, count($id), '?'));
        $sql = "SELECT * FROM khoahoc WHERE IDKhoaHoc IN ($placeholders)";
        // debug($sql); 
        return $this->pdoQueryAll($sql, $id);
    }
    
    
    public function getCartItems(): array {
        return isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? $_SESSION['cart'] : [];
    }
    
    public function getCartItemsbyIDKhoaHoc($id): array {
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            return array_filter($_SESSION['cart'], function($item) use ($id) {
                return isset($item['IDKhoaHoc']) && $item['IDKhoaHoc'] == $id;
            });
        }
        return [];
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

    //Thêm đơn hàng
    public function insertOrder($orderData) {
        $columns = implode(",", array_keys($orderData));
        $placeholders = ":" . implode(", :", array_keys($orderData));
        
        $sql = "INSERT INTO orders ($columns) VALUES ($placeholders)";
        $this->pdoQuery($sql, $orderData); 
        return $this->conn->lastInsertId(); // Lấy ID đơn hàng vừa tạo
    }
    
    public function insertOrderItem($orderItemData) {
        $columns = implode(",", array_keys($orderItemData));
        $placeholders = ":" . implode(", :", array_keys($orderItemData));
    
        $sql = "INSERT INTO order_items ($columns) VALUES ($placeholders)";
        $this->pdoQuery($sql, $orderItemData); // Gọi đúng kiểu tham số
    }
    
}
?>

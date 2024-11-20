<?php 
    namespace models;

    use commons\baseModel;
    
    class Order extends baseModel {
        public $data;
        public function getAllOrder()
        {
            $sql = "SELECT * FROM don_hang";
            return $this->pdoQueryAll($sql, []);
        }
        public function detailOrder($id) 
        {
            $sql = "SELECT * FROM don_hang where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch();
        } 

        public function createOrder($data) {
            $ten_san_pham = $data['ten_san_pham'];
            $gia = $data['gia'];
            $so_luong = $data['so_luong'];
            $sql = "INSERT INTO don_hang (ten_san_pham, gia, so_luong) VALUES (?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$ten_san_pham, $gia, $so_luong]);
        }
        public function delAll($id) 
        {
            $sql = "DELETE FROM don_hang where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
        }
        public function getProductById($id) {
            $sql = "SELECT * FROM products WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch();
        }
        
        public function getAllProducts() {
            $sql = "SELECT * FROM products";
            return $this->pdoQueryAll($sql, []);
        }
    }
?>
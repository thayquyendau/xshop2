<?php 
namespace models;

use commons\baseModel;
use PDO;
class Thongke extends baseModel {

    public function getUserCount() {
        $sql = "SELECT COUNT(*) AS user_id FROM users";
        $stmt = $this->conn->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC)['user_id'];
    }

    public function getProductCount() {
        $sql = "SELECT SUM(so_luong) AS so_luong FROM san_pham";
        $stmt = $this->conn->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC)['so_luong'];
    }

    public function getCategoryCount() {
        $sql = "SELECT COUNT(DISTINCT ma_loai) AS ma_loai FROM loai";
        $stmt = $this->conn->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC)['ma_loai'];
    }
    public function getCommentCount() {
        $sql = "SELECT COUNT(DISTINCT id) AS id FROM binh_luan";
        $stmt = $this->conn->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC)['id'];
    }
    public function getMaxPrice() {
        $sql = "SELECT MAX(gia) AS max_price FROM san_pham";
        $stmt = $this->conn->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC)['max_price'];
    }

    public function getMinPrice() {
        $sql = "SELECT MIN(gia) AS min_price FROM san_pham";
        $stmt = $this->conn->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC)['min_price'];
    }
    
}
?>

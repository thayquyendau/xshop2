<?php

namespace models;

use commons\baseModel;

class Comment extends baseModel
{
    public function getProduct(){ 
        $sql = "SELECT *FROM binh_luan";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getAllComment() {
        $sql = "SELECT b.*, sp.ma_san_pham as ma_san_pham1 
                FROM binh_luan b, san_pham sp 
                WHERE b.ma_san_pham = sp.id";
        return parent::pdoQueryAll($sql, []);
    }

    public function deleteComment($id) {
        $sql = "DELETE FROM binh_luan where id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }


    public function createComment($param) {
        $sql = "INSERT INTO binh_luan (user_name, ma_san_pham, noi_dung, ngay_bl) 
                VALUES (:user_name, :ma_san_pham, :noi_dung, now())";
        parent::pdoUpdate($sql, $param);
    }

    public function getAllCommentT($param) {
        $sql = "SELECT * FROM binh_luan WHERE ma_san_pham = :id";
        return parent::pdoQueryAll($sql, $param);
    }

    public function deleteCommentByProductID($ma_san_pham) {
        $sql = "DELETE FROM binh_luan WHERE ma_san_pham = :ma_san_pham";
        return parent::pdoUpdate($sql, ['ma_san_pham' => $ma_san_pham]);
    }
   
}
 
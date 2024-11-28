<?php

namespace models;

use commons\baseModel;

class Khoahoc extends baseModel
{
    public function getAllKhoahoc()
    {
        $sql = "SELECT * FROM khoahoc";

        $sql2 = "SELECT 
                    chitietkh.IDChiTietKH,
                    chitietkh.MoTa,
                    khoahoc.IDKhoaHoc,
                    khoahoc.TenKhoaHoc,
                    khoahoc.Gia,
                    khoahoc.GiaoVien,
                    khoahoc.HinhAnh,
                    danhmuc.IDCatagory,
                    danhmuc.TenDanhMuc
                FROM 
                    chitietkh
                JOIN 
                    khoahoc ON chitietkh.IDKhoaHoc = khoahoc.IDKhoaHoc
                JOIN 
                    danhmuc ON khoahoc.IDCatagory = danhmuc.IDCatagory;
                ";
        return $this->pdoQueryAll($sql2, []);
    }

    // public function getAllDanhmuc()
    // {
    //     $sql = "SELECT * FROM danhmuc";
    //     return $this->pdoQueryAll($sql, []);
    // }

    public function getAllUser()
    {
        $sql = "SELECT * FROM user WHERE LoaiTK = 2";
        return $this->pdoQueryAll($sql, []);
    }

    public function getAllDanhmuc()
    {
        $sql = "SELECT * FROM danhmuc";
        return $this->pdoQueryAll($sql, []);
    }

    public function getAllProductbyId($id){
        $sql = "SELECT * FROM khoahoc WHERE IDKhoahoc = ?";
        return $this->pdoQueryAll($sql, [$id]);
    }
    public function createProduct($param)
    {
        $columns = [];
        foreach($param as $key => $value) {
            $columns[]  = ":$key";
        }
        $sql = "INSERT INTO `khoahoc` (". implode(",", array_keys($param)) .") VALUES (". implode(",", $columns) .")";
        parent::pdoQuery($sql,$param);
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM khoahoc WHERE IDKhoahoc = ?";

        $sql2 = "SELECT 
                    chitietkh.IDChiTietKH,
                    chitietkh.MoTa,
                    khoahoc.IDKhoaHoc,
                    khoahoc.TenKhoaHoc,
                    khoahoc.Gia,
                    khoahoc.GiaoVien,
                    khoahoc.HinhAnh
                FROM 
                    chitietkh
                JOIN 
                    khoahoc ON chitietkh.IDKhoaHoc = khoahoc.IDKhoaHoc
                WHERE khoahoc.IDKhoahoc = ?
    ";
        return $this->pdoQuery($sql2, [$id]);
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM khoahoc WHERE IDKhoahoc = ?";
        // debug($sql);
        $this->pdoQuery($sql, [$id]);
    }

    public function updateKhoahoc($param, $id){
        $columns = [];
        foreach ($param as $key => $value) {
            if ($key != 'IDKhoahoc') {
                $columns[] = "$key = :$key";
            }
        }
        $sql = "UPDATE khoahoc SET " . implode(", ", $columns) . " WHERE IDKhoahoc = $id     
        ";
         parent::pdoUpdate($sql, $param);
    }

    public function updateChitietKH($mota, $id){
        $sql = "UPDATE chitietkh SET MoTa = '$mota'  WHERE IDKhoahoc = $id ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
}

}
 
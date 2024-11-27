<?php

namespace models;

use commons\baseModel;

class Khoahoc extends baseModel
{
    public function getAllKhoahoc()
    {
        $sql = "SELECT * FROM khoahoc";

        $sql2 = "SELECT 
                    khoahoc.IDKhoaHoc,
                    khoahoc.TenKhoaHoc,
                    khoahoc.Gia,
                    khoahoc.HinhAnh,
                    danhmuc.IDCatagory,
                    danhmuc.TenDanhMuc,
                    user.UserID,
                    user.HoVaTen
                    chitietkh.MoTa
                FROM 
                    khoahoc
                JOIN 
                    danhmuc 
                ON 
                    khoahoc.IDCatagory = danhmuc.IDCatagory
                JOIN 
                    user 
                ON 
                    khoahoc.GiaoVien = user.UserID
                JOIN
                    chitietkh
                ON
                    khoahoc.IDKhoaHoc = chitietkh.IDKhoaHoc
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
        return $this->pdoQuery($sql, [$id]);
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
        $sql = "UPDATE khoahoc SET " . implode(", ", $columns) . " WHERE IDKhoahoc = $id";

         parent::pdoUpdate($sql, $param);
}

}
 
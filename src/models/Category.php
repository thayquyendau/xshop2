<?php

namespace models;

use commons\baseModel;

class Category extends baseModel{
    public function getAllCategory()
    {
        $sql = "SELECT * FROM danhmuc LIMIT 5";
        return $this->pdoQueryAll($sql, []);
    }

    public function getCategoryById($id)
    {
        $sql = "SELECT TenDanhMuc FROM danhmuc WHERE IDCatagory  = ?";
        return $this->pdoQuery($sql, [$id]);
    }
    public function getCourseById($id)
    {
        $sql = "SELECT * FROM khoahoc WHERE IDCatagory = ?";
        return $this->pdoQueryAll($sql, [$id]);
    }
    public function getdetailCourseById($id)
    {
        $sql = "SELECT * FROM khoahoc WHERE IDKhoaHoc = ?";
        return $this->pdoQuery($sql, [$id]);
    }
    
}

<?php

namespace models;

use commons\baseModel;

class Category extends baseModel{
    public function getAllCategory5()
    {
        $sql = "SELECT * FROM danhmuc LIMIT 5";
        return $this->pdoQueryAll($sql, []);
    }

    public function getCategoryById5($id)
    {
        $sql = "SELECT TenDanhMuc FROM danhmuc WHERE IDCatagory = $id";
          
        return $this->pdoQuery($sql, []);
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

    //phong
    public function getAllCategory()
    {
        $sql = "SELECT * FROM danhmuc";
        return $this->pdoQueryAll($sql, []);
    }

    public function createCategory($param)
    {
        $columns = [];
        foreach($param as $key => $value) {
            $columns[]  = ":$key";
        }
        $sql = "INSERT INTO `danhmuc` (". implode(",", array_keys($param)) .") VALUES (". implode(",", $columns) .")";
        parent::pdoQuery($sql,$param);
    }

    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM danhmuc WHERE IDCatagory = ?";
        return $this->pdoQuery($sql, [$id]);
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM danhmuc WHERE IDCatagory = ?";
        $this->pdoQuery($sql, [$id]);
    }

    public function updateCategory($param, $id)
    {
        $columns = [];
        foreach($param as $key => $value) {  
                $columns[] = "$key = :$key";
        }
        $sql = "UPDATE danhmuc SET " . implode(", ", $columns) . " WHERE IDCatagory = $id";
        // debug($sql);
        parent::pdoUpdate($sql, $param);
    }
}

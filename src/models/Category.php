<?php

namespace models;

use commons\baseModel;

class Category extends baseModel{
    public function getAllCategory()
    {
        $sql = "SELECT * FROM danhmuc";
        return $this->pdoQueryAll($sql, []);
    }

    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM khoahoc WHERE IDCatagory  = ?";
        return $this->pdoQueryAll($sql, [$id]);
    }
}

<?php

namespace models;

use commons\baseModel;

class Category extends baseModel
{
    public function getAllCategory()
    {
        $sql = "SELECT * FROM loai";
        return $this->pdoQueryAll($sql, []);
    }

    public function createCategory($ma_loai,$ten_loai)
    {
        $sql = "INSERT INTO loai (ma_loai,ten_loai) VALUES (?,?)";
        $this->pdoQuery($sql, [$ma_loai,$ten_loai]);
    }

   

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM loai WHERE id = ?";
        $this->pdoQuery($sql, [$id]);
    }

    public function updateCategory($id,$ma_loai,$ten_loai)
    {
        $sql = "UPDATE loai SET id = ?, ma_loai = ?, ten_loai = ? WHERE id = ?";
        $this->pdoQuery($sql, [$id, $ma_loai, $ten_loai, $id]);
    }
     public function getCategoryById($id)
    {
        $sql = "SELECT * FROM loai WHERE id = ?";
        return $this->pdoQuery($sql, [$id]);
    }
}
 
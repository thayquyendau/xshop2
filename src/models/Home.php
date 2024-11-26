<?php 
namespace models;
use commons\baseModel;
    class Home extends baseModel {
    
        public function getAllHome()
        {
            $sql = "SELECT * FROM khoahoc LIMIT 8";
            return $this->pdoQueryAll($sql, []);
        }
        public function getAllHome1()
        {
            $sql = "SELECT * FROM khoahoc LIMIT 8 OFFSET 8";
            return $this->pdoQueryAll($sql, []);
        }
        public function getAllHome2()
        {
            $sql = "SELECT * FROM khoahoc LIMIT 8 OFFSET 16";
            return $this->pdoQueryAll($sql, []);
        }
    }
?>
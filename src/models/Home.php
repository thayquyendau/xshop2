<?php 
namespace models;
use commons\baseModel;
    class Home extends baseModel {
    
        public function getAllHome()
        {
            $sql = "SELECT * FROM khoahoc LIMIT 8";
            // return $this->pdoQueryAll($sql, []);
            // $sql = "SELECT 
            //         khoahoc.IDKhoaHoc,
            //         khoahoc.TenKhoaHoc,
            //         khoahoc.Gia,
            //         khoahoc.HinhAnh,
            //         danhmuc.IDCatagory,
            //         danhmuc.TenDanhMuc,
            //         user.UserID,
            //         user.HoVaTen
            //     FROM 
            //         khoahoc
            //     JOIN 
            //         danhmuc 
            //     ON 
            //         khoahoc.IDCatagory = danhmuc.IDCatagory
            //     JOIN 
            //         user 
            //     ON 
            //         khoahoc.GiaoVien = user.UserID
            //     LIMIT 8";
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
        public function getAllHome3()
        {
            $sql = "SELECT * FROM danhmuc LIMIT 8 OFFSET 5";
            return $this->pdoQueryAll($sql, []);
        }

        //phong

        public function getSum()
    {
        $sql = "SELECT COUNT(*) AS tong FROM user";
        return $this->pdoQuery($sql, []);
    }

    public function MaxTC()
    {
        $sql = "SELECT GiaoVien, COUNT(GiaoVien) AS count
                    FROM khoahoc
                    GROUP BY GiaoVien
                    ORDER BY count DESC
                    LIMIT 3;
                ";
        return $this->pdoQueryAll($sql, []);
    }


    public function getSumTC()
    {
        $sql = "SELECT COUNT(*) AS tongTC FROM user WHERE LoaiTK=2";
        return $this->pdoQuery($sql, []);
    }

    public function getSumST()
    {
        $sql = "SELECT COUNT(*) AS tongST FROM user WHERE LoaiTK=3";
        return $this->pdoQuery($sql, []);
    }

      public function getAllUser()
    {
        $sql = "SELECT * FROM user ";
        return $this->pdoQueryAll($sql, []);
    }   

        public function thongkeUser() {
            $sql = "SELECT LoaiTK, COUNT(*) AS thongke
                    FROM user
                    GROUP BY LoaiTK;";
            return $this ->pdoQueryAll($sql,[]);
        }
    }
?>
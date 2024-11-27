<?php 
namespace models;

use commons\baseModel;

    class Login extends baseModel{
        public function findUser($data) {
            $sql = "SELECT * FROM user WHERE UserName = :username AND Password = :password";
            return parent::pdoQuery($sql, $data);
            
        }
        public function createUser($data) {
            $sql = "INSERT INTO user (UserName, Password, HoVaTen, image, Email, Address, Phone, LoaiTK) VALUES (:UserName, :Password, :HoVaTen, :image, :Email, :Address, :Phone, :LoaiTK)";
            return parent::pdoUpdate($sql, $data);
        }
        // public function checkOldPassword($data) {
        //     $sql = "SELECT * FROM USERS WHERE USER_ID = :user_id AND PASSWORD = :password";
        //     return parent::pdoQuery($sql, $data);
        // }
    
        // public function updatePassword($data) {
        //     $sql = "UPDATE USERS SET PASSWORD = :password WHERE USER_ID = :user_id";
        //     return parent::pdoUpdate($sql, $data);
        // }
        
        
        // public function updateAccount($data) {
        //     $sql = "UPDATE USERS SET user_name = :user_name, email = :email, IMAGE = :image WHERE user_id = :user_id";
        //     return parent::pdoUpdate($sql, $data);
        // }
    }
?>
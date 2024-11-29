<?php 
    namespace models;
    use commons\baseModel;

class Course extends baseModel{
    public function getDetailCourseById($id){
        $sql = "SELECT * FROM chitietkh where IDKhoaHoc = ?";
        return $this->pdoQuery($sql,[$id]);
    }
    public function getCoursePayById($id){
        $sql = "SELECT * FROM khoahoc WHERE IDKhoaHoc = ?";
        return $this->pdoQueryAll($sql, [$id]);
    }
}
?>
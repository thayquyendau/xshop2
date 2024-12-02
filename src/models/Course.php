<?php 
    namespace models;
    use commons\baseModel;

class Course extends baseModel{
    public function __construct() {
        parent::__construct();
        if (session_status() === PHP_SESSION_NONE) {
            session_start(); 
        }
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = []; 
        }   
    }
    public function getDetailCourseById($id){
        $sql = "SELECT * FROM chitietkh where IDKhoaHoc = ?";
        return $this->pdoQuery($sql,[$id]);
    }
    public function getCoursePayById($param,$id){
        $course = $this->pdoQuery("SELECT * FROM khoahoc WHERE IDKhoaHoc = ?", [$id]);
        // debug($course);      
        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = [
                'IDKhoaHoc' => $course['IDKhoaHoc'] ?? null,
                'TenKhoaHoc' => $course['TenKhoaHoc'] ?? '',
                'Gia' => $course['Gia'] ?? 0,
                'GiaoVien' => $course['GiaoVien'] ?? '',
                'HinhAnh' => $course['HinhAnh'] ?? ''
            ];
        }
        return $_SESSION['cart'];
    }
}
?>
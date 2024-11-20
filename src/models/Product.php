<?php 
    namespace models;
    use commons\baseModel;

class Product extends baseModel
{
    public function getAllProduct()
    {
        // $sql = "SELECT * FROM san_pham";
        // return $this->pdoQueryAll($sql, []);
        $sql = "SELECT *FROM san_pham";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
    }
    public function create(){
        $sql = "INSERT INTO san_pham (ma_loai,ma_san_pham,ten_san_pham,hinh_anh,noi_dung,so_luong,mo_ta,gia,sale) values (?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute([$_POST['ma_loai'],$_POST['ma_san_pham'],$_POST['ten_san_pham'],$_POST['hinh_anh'],$_POST['noi_dung'],$_POST['so_luong'],$_POST['mo_ta'],$_POST['gia'],$_POST['sale']]);
    }

    public function edit() {
        if (isset($_POST['hinh_anh'])) {
            $sql = "update san_pham set id = ?, ma_loai = ?, ma_san_pham = ?, ten_san_pham = ?,hinh_anh = ?, noi_dung = ?, so_luong = ?, mo_ta =?, gia = ?, sale = ? where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$_POST['id'], $_POST['ma_loai'], $_POST['ma_san_pham'], $_POST['ten_san_pham'], $_POST['hinh_anh'], $_POST['noi_dung'], $_POST['so_luong'], $_POST['mo_ta'], $_POST['gia'], $_POST['sale'], $_GET['id']]);
        } else {
            $sql = "update san_pham set id = ?, ma_loai = ?, ma_san_pham = ?, ten_san_pham = ?, noi_dung = ?, so_luong = ?, mo_ta = ?, gia = ?, sale = ?  where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$_POST['id'], $_POST['ma_loai'], $_POST['ma_san_pham'], $_POST['ten_san_pham'], $_POST['noi_dung'], $_POST['so_luong'], $_POST['mo_ta'], $_POST['gia'], $_POST['sale'],$_GET['id']]);
        }
        
    }
    public function find($id){
        $sql = "SELECT * FROM san_pham WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt ->execute([$id]);
        return $stmt->fetch();
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM san_pham WHERE id = ?";
        $this->pdoQuery($sql, [$id]);
    }
    public function detail($id) 
    {
        $sql = "SELECT * FROM san_pham where id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function getProductById($id){
        $sql = "SELECT * FROM san_pham where id = ?";
        return $this->pdoQuery($sql,[$id]);
    }
    public function getProductByMaLoai($id){
        $sql = "SELECT * FROM san_pham where ma_loai = ?";
        return $this->pdoQueryAll($sql,[$id]);
    }
}
?>
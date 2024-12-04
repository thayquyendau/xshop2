<?php 
    namespace models;
    use commons\baseModel;
    use PDO;
class Oder extends baseModel
{
    
    public function getAllOder()
    {
        $sql = "SELECT * FROM orders ";
        return $this->pdoQueryAll($sql, []);
    }

    public function getOderById($id)
    {
        $sql = "SELECT * FROM orders  WHERE id = ?";
        return $this->pdoQuery($sql, [$id]);
    }

    public function getOderItem()
    {
        $sql = "SELECT * FROM order_items ";
        return $this->pdoQueryAll($sql, []);
    }

    public function searchAllUser($name)
    {
        $sql = "SELECT * FROM user WHERE HoVaTen LIKE :name or UserName like :name or LoaiTK like :name";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':name', "%$name%", PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }


    public function createUser($param)
    {
        foreach($param as $key => $value) {
            $columns[]  = ":$key";
        }
        $sql = "INSERT INTO `user` (". implode(",", array_keys($param)) .") VALUES (". implode(",", $columns) .")";
        parent::pdoQuery($sql, $param);
       
    }

    public function chitietOderbyID($id)
    {
        $sql = "SELECT * FROM order_items  WHERE order_id = ?";
        return $this->pdoQueryAll($sql, [$id]);
    }

    public function getUserByRole($id)
    {
        $sql = "SELECT * FROM user  WHERE LoaiTK = ?";
        return $this->pdoQueryAll($sql, [$id]);
    }

    public function deleteOder($id)
    {
        $sql = "DELETE FROM orders WHERE id = ?";
        $this->pdoQuery($sql, [$id]);
    }

    public function deleteOderChitiet($id)
    {
        $sql = "DELETE FROM order_items WHERE id = ?";
        $this->pdoQuery($sql, [$id]);
    }

    public function updateOder($param, $id)
    {
        $columns = [];
        foreach($param as $key => $value) {
            if ($key != 'id') {
                $columns[] = "$key = :$key";
            }
        }
        $sql = "UPDATE `orders` SET " . implode(", ", $columns) . " WHERE id = $id";
        // debug($sql);
        parent::pdoUpdate($sql, $param);
       
    }
}
?>

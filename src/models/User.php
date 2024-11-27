<?php 
    namespace models;
    use commons\baseModel;

class User extends baseModel
{
    
    public function getAllUser()
    {
        $sql = "SELECT * FROM user ";
        return $this->pdoQueryAll($sql, []);
    }

    public function searchAllUser($id)
    {   
        $sql = "SELECT * FROM user WHERE UserName LIKE '%$id%'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();  
        return $stmt->fetch();
    }


    public function createUser($param)
    {
        foreach($param as $key => $value) {
            $columns[]  = ":$key";
        }
        $sql = "INSERT INTO `user` (". implode(",", array_keys($param)) .") VALUES (". implode(",", $columns) .")";
        parent::pdoQuery($sql, $param);
       
    }

    public function getUserById($id)
    {
        $sql = "SELECT * FROM user  WHERE UserID = ?";
        return $this->pdoQuery($sql, [$id]);
    }

    public function getUserByRole($id)
    {
        $sql = "SELECT * FROM user  WHERE LoaiTK = ?";
        return $this->pdoQueryAll($sql, [$id]);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE UserID = ?";
        $this->pdoQuery($sql, [$id]);
    }

    public function updateUser($param, $id)
    {
        $columns = [];
        foreach($param as $key => $value) {
            if ($key != 'UserID') {
                $columns[] = "$key = :$key";
            }
        }
        $sql = "UPDATE `user` SET " . implode(", ", $columns) . " WHERE UserID = $id";
        // debug($sql);
        parent::pdoUpdate($sql, $param);
       
    }
}
?>
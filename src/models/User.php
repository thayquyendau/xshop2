<?php 
    namespace models;
    use commons\baseModel;

class User extends baseModel
{
    public function getAlluser()
    {
        $sql = "SELECT * FROM users";
        return $this->pdoQueryAll($sql, []);
    }
    
   
}
?>
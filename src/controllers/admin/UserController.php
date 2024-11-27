<?php
namespace controllers\admin;

use models\User;


class UserController
    {
    public $modelObject;
    public $base = BASE_URL;
    public function __construct()
    {
    $this->modelObject = new User();
    }
    public function index()
        {  
        //$_SESSION['admin'] = 1;
        if($_SERVER['REQUEST_METHOD'] =='POST') {
            $users = $this->modelObject->searchAllUser($_POST['name']); 
            header("location: $this->base/admin/user");
        }else{
            $users = $this->modelObject->getAllUser();
            require_once './src/views/admin/user/user.php';
        }
        }

    public function indexRole()
        {
        //$_SESSION['admin'] = 1;
        $id = $_GET['id'];
        $users = $this->modelObject->getUserByRole($id);
        require_once './src/views/admin/user/user.php';
        }
    
   

    public function delete(){
        $id = $_GET['id'];
        $this->modelObject->deleteUser($id);
        header("location: $this->base/admin/user");
        }

    public function create()
        {
        if ($_SERVER['REQUEST_METHOD'] =='POST') {       
            if(isset($_FILES) && $_FILES['image']['size'] > 0){
                $fileExtension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                if (in_array($fileExtension,['jpg', 'png', 'gif'])) {
                $dir = "asset/img";
                $tmp_name = $_FILES['image']['tmp_name'];
                $file_name = $_FILES['image']['name'];
                $_POST['image'] = "$dir/$file_name";
                // debug($_POST['image']);
                move_uploaded_file($tmp_name, $_POST['image']);

            }else{
                    echo "<h1>Lỗi: Định dạng file tải lên không hợp lệ<h1>";
                    return;    
            } 
            }
            $this->modelObject->createUser($_POST);
            header("location: $this->base/admin/user");
            } else {
            require_once './src/views/admin/user/create.php';
            }
        }

    public function update()
        {
            if ($_SERVER['REQUEST_METHOD'] =='POST') {       
                if(isset($_FILES) && $_FILES['image']['size'] > 0){
                    $fileExtension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                    if (in_array($fileExtension,['jpg', 'png', 'gif'])) {
                    $dir = "asset/img";
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $file_name = $_FILES['image']['name'];
                    $_POST['image'] = "$dir/$file_name";
                    // debug($_POST['image']);
                    move_uploaded_file($tmp_name, $_POST['image']);
    
                }else{
                        echo "<h1>Lỗi: Định dạng file tải lên không hợp lệ<h1>";
                        return;    
                } 
                }
            $id = $_GET['id'];
            $this->modelObject->updateUser($_POST,$id);
            header("location: $this->base/admin/user");
            } else {
            $id = $_GET['id'];
            $users = $this->modelObject->getUserById($id);
            require_once './src/views/admin/user/edit.php';
            }
        }
    }

?>
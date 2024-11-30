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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'] ?? ''; 
            $users = $this->modelObject->searchAllUser($name); 
        } else {
            $users = $this->modelObject->getAllUser();
        }
        require_once './src/views/admin/user/user.php';
    }
    

    public function indexRole()
        {
            // debug($_SESSION);
        $_SESSION['admin_ift'] = '1';
        $id = $_GET['id'];
        $users = $this->modelObject->getUserByRole($id);
        require_once './src/views/admin/user/user.php';
        }
    
   

    public function delete(){
        $_SESSION['admin_ift'] = '1';
        $id = $_GET['id'];
        $this->modelObject->deleteUser($id);
        header("location: $this->base/admin/user");
        }

    public function create()
        {
            $_SESSION['admin_ift'] = '1';
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
            $_SESSION['admin_ift'] = '1';
            if ($_SERVER['REQUEST_METHOD'] =='POST') {       
                if(isset($_FILES) && $_FILES['image']['size'] > 0){
                    $fileExtension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                    if (in_array($fileExtension,['jpg', 'png', 'gif'])) {
                    $dir = "./img";
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
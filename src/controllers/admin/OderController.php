<?php
namespace controllers\admin;

use models\Oder;


class OderController
    {
    public $modelObject;
    public $base = BASE_URL;
    public function __construct()
    {
    $this->modelObject = new Oder();
    }
    public function index()
    {
       
        $oders = $this->modelObject->getAllOder();
        require_once './src/views/admin/oder/index.php';
    }
    

    public function chitietOder()
        { 
        $id = $_GET['id'];
        $oders = $this->modelObject->chitietOderbyID($id);
        require_once './src/views/admin/Oder/chitiet.php';
        }
    
   

    public function delete(){
        $id = $_GET['id'];
        $this->modelObject->deleteOder($id);
        header("location: $this->base/admin/Oder");
        }

    public function deleteChitiet(){
            $id = $_GET['id'];
            $this->modelObject->deleteOderChitiet($id);
            header("location: $this->base/admin/Oder");
            }   

    public function create()
        {
            // $_SESSION['admin_ift'] = '1';
        if ($_SERVER['REQUEST_METHOD'] =='POST') {       
            if(isset($_FILES) && $_FILES['image']['size'] > 0){
                $fileExtension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                if (in_array($fileExtension,['jpg', 'png', 'gif'])) {
                $dir = "assets/image/img";
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
            $id = $_GET['id'];
            if ($_SERVER['REQUEST_METHOD'] =='POST') {       
            
            $this->modelObject->updateOder($_POST,$id);
            header("location: $this->base/admin/Oder");
            } else {
           
            $oders = $this->modelObject->getOderById($id);
            // debug($oders);
            $datetimeInput = $oders['created_at']; // Định dạng: Y-m-dTH:i
            $Timeee = date('Y-m-d H:i:s', strtotime($datetimeInput));
            require_once './src/views/admin/oder/edit.php';
            }
        }
    }

    
?>
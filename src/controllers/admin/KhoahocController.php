<?php
namespace controllers\admin;

use models\Khoahoc;


class KhoahocController
    {
    public $modelObject;
    public $base = BASE_URL;
    public function __construct()
    {
    $this->modelObject = new Khoahoc();
    // $this->modelObject1 = new Khoahoc();
    // $this->modelObject2 = new Khoahoc();
    }
    public function index()
        {
            
                $Khoahocs = $this->modelObject->getAllKhoahoc();
                $danhmucs =$this->modelObject->getAllDanhmuc();
                $users = $this -> modelObject -> getAllUser();
                  
        require_once './src/views/admin/Khoahoc/index.php';
        // debug($Khoahocs);
        }

    public function delete(){
        // $_SESSION['admin_ift'] = '1';
        $id = $_GET['id'];
        $this->modelObject->deleteProduct($id);
        header("location: $this->base/admin/Khoahoc");
        }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] =='POST'){
        if(isset($_FILES) && $_FILES['HinhAnh']['size'] > 0){
            $fileExtension = strtolower(pathinfo($_FILES['HinhAnh']['name'], PATHINFO_EXTENSION));
            if (in_array($fileExtension,['jpg', 'png', 'jfif'])) {
            $dir = "assets/image/khoahoc";
            $tmp_name = $_FILES['HinhAnh']['tmp_name'];
            $file_name = $_FILES['HinhAnh']['name'];
            $_POST['HinhAnh'] = "$dir/$file_name";
            // debug($_POST['HinhAnh']);
            move_uploaded_file($tmp_name, $_POST['HinhAnh']);

        }else{
                echo "<h1>Lỗi: Định dạng file tải lên không hợp lệ<h1>";
                return;    
        } 
        }  
        
            $this->modelObject->createProduct($_POST);
            header("location: $this->base/admin/Khoahoc");
        } else {
            $users = $this -> modelObject -> getAllUser();
            $danhmucs = $this -> modelObject -> getAllDanhmuc();
            require_once './src/views/admin/khoahoc/create.php';
        }
    }
    public function updateCTKH()
    {
        
        if (isset($_POST['id']) && isset($_POST['MoTa'])) {
            $id = $_POST['id'];
            unset($_POST['id']);
            $this->modelObject->updateCT($_POST,$id);
            header("location: $this->base/admin/Khoahoc");
        }else{

            $name = $_POST['name'] ?? ''; 
            $Khoahocs = $this->modelObject->searchKhoahoc($name);
           
         
            require_once './src/views/admin/Khoahoc/index.php';
        }
    }  
        

    public function update(){
        // $_SESSION['admin_ift'] = '1';
        $id = $_GET['id'];
            if($_SERVER['REQUEST_METHOD'] =='POST'){
                if(isset($_FILES) && $_FILES['HinhAnh']['size'] > 0){
                    $fileExtension = strtolower(pathinfo($_FILES['HinhAnh']['name'], PATHINFO_EXTENSION));
                    if (in_array($fileExtension,['jpg', 'png', 'jfif'])) {
                        $dir = "assets/image/img";
                        $tmp_name = $_FILES['HinhAnh']['tmp_name'];
                        $file_name = $_FILES['HinhAnh']['name'];
                        $_POST['HinhAnh'] = "$dir/$file_name";
                        // debug($_POST['HinhAnh']);
                        move_uploaded_file($tmp_name, $_POST['HinhAnh']);
    
                    }else{
                        echo "<h1>Lỗi: Định dạng file tải lên không hợp lệ<h1>";
                        return;    
                    } 
                }
                // debug($_POST);
                $this->modelObject->updateKhoahoc($_POST,$id);
                header("location: $this->base/admin/Khoahoc");
            } else {
                $Khoahocs = $this -> modelObject -> getProductById($id);
                $users = $this -> modelObject -> getAllUser();
                $danhmucs = $this -> modelObject -> getAllDanhmuc();
                require_once './src/views/admin/Khoahoc/edit.php';
            }
        }
    }
?>
<?php 
    namespace controllers\client;
    use models\Login;
    class LoginController
    {
    public $modelObject;
    public $baseUrl = BASE_URL;
    public function __construct()
        {
            $this->modelObject = new Login();
        }
    public function login()
        {
            require_once './src/views/client/login/login.php';
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [
                    'username' => $_POST['UserName'],
                    'password' => $_POST['Password']
                ];
                
                // Xử lý đăng nhập ở đây, ví dụ gọi hàm findUser hoặc so sánh mật khẩu
                $accountInfo = $this->modelObject->findUser($data);
                if ($accountInfo === false) {
                    $loginFailMess = "Sai tên truy cập hoặc mật khẩu";
                    require_once './src/views/client/login/login.php';
                } else {
                    $_SESSION['UserName'] = $accountInfo['UserName'];
                    $_SESSION['image'] = $accountInfo['image'];
                    $_SESSION['LoaiTK'] = $accountInfo['LoaiTK'];
                    $_SESSION['HoVaTen'] = $accountInfo['HoVaTen'];
                    $_SESSION['UserID'] = $accountInfo['UserID'];
                    header("location: $this->baseUrl/");
                }
            }
        }
    public function logout() {
        session_unset();
        header("Location: $this->baseUrl/");
    }
    
    public function uploadImage($file) {
        if (isset($file) && $file['size'] > 0) {
            $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            if (in_array($fileExtension, ['jpg', 'png', 'gif'])) {
                $dir = "./img";
                $tmp_name = $file['tmp_name'];
                $file_name = $file['name'];
                $filePath = "$dir/$file_name";
                if (move_uploaded_file($tmp_name, $filePath)) {
                    return $filePath;
                }
            } else {
                echo "<h1>Lỗi: Định dạng file tải lên không hợp lệ</h1>";
                return false;
            }
        }
        return false;
    }
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $imagePath = $this->uploadImage($_FILES['image']);
            if ($imagePath) {
                $registerData = [
                    ':UserName' => $_POST['UserName'],
                    ':Password' => ($_POST['Password']),
                    ':HoVaTen' => $_POST['HoVaTen'],
                    ':image' => $imagePath,
                    ':Email' => $_POST['Email'],
                    ':Address' => $_POST['Address'],
                    ':Phone' => $_POST['Phone'],
                    ':LoaiTK' => $_POST['LoaiTK'],
                ];
                $isRegistered = $this->modelObject->createUser($registerData);
                if ($isRegistered) {
                    $registerFailMess = "Đăng ký không thành công, vui lòng thử lại.";
                    require_once './src/views/login/register.php';
                } else {
                    header("location: $this->baseUrl/login");
                }
            } else {
                $registerFailMess = "Tải lên ảnh không thành công.";
                require_once './src/views/client/login/register.php';
            }
        } else {
            require_once './src/views/client/login/register.php';
        }
    }

    
    public function resetpass()
        {
        require_once './src/views/client/login/resetpass.php';
        }

    }
?>
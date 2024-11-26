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
                    header("location: $this->baseUrl/");
                }
            }
        }
    public function logout() {
        session_unset();
        header("Location: $this->baseUrl/");
    }
    
    public function dangky()
        {
        require_once './src/views/client/login/dangky.php';
        }

    
    public function resetpass()
        {
        require_once './src/views/client/login/resetpass.php';
        }

    }
?>
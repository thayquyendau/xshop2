<?php 
namespace controllers\client;
    class LoginController
    {
    public function login()
        {
        require_once './src/views/client/login/login.php';
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
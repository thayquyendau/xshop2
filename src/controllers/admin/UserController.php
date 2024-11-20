<?php
namespace controllers\admin;

use models\User;

class UserController
    {
    
    public $modelObject;
    public $users;

    public $base = BASE_URL;
    public function index()
        {
        //$_SESSION['admin'] = 1;
        require_once './src/views/admin/users/index.php';
        }
    public function __construct()
        {
        $this->modelObject = new User();
        }

    public function getAlluser()
        {
        $this->users = $this->modelObject->getAllUser();
        }

    }
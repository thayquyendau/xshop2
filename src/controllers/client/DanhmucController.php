<?php 
namespace controllers\client;
    class DanhmucController
    {
    public function index()
        {
        require_once './src/views/client/danhmuc/index.php';
        }
    
    public function detail()
        {
        require_once './src/views/client/danhmuc/detail.php';
        }
    }
?>
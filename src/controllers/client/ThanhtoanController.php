<?php 
namespace controllers\client;
    use models\Cart;
    class ThanhtoanController{
    public $cartModel;
    public function __construct(){               
        //Ngan chan loi
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        $this->cartModel = new Cart();
    }
    public function index()
        {
            $cartItems = $this->cartModel->getCartItems();
            $cartItems = array_filter($cartItems, 'is_array');
        require_once './src/views/client/thanhtoan/thanhtoan.php';
        }

    }
?>
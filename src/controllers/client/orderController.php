<?php 
namespace controllers\client;

use models\Cart;

class orderController {
    public $cartModel;
    public $baseUrl = BASE_URL;

    public function __construct() {
        // Ngăn chặn lỗi hiển thị
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $this->cartModel = new Cart();
    }

    public function index(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Kiểm tra session giỏ hàng
            // debug($_SESSION['cart']);
            if (!empty($_SESSION['cart'])) {
                $cartItems = $_SESSION['cart'];
                // Tính tổng tiền
                $totalPrice = array_sum(array_column($cartItems, 'Gia'));
                // Lưu đơn hàng vào bảng `orders`
                $orderData = [
                    'total_price' => $totalPrice,
                    'status' => 'pending',
                    'created_at' => date('Y-m-d H:i:s')
                ];
                $orderId = $this->cartModel->insertOrder($orderData);
    
                // Lưu từng chi tiết đơn hàng vào bảng `order_items`
                foreach ($cartItems as $item) {
                    $orderItemData = [
                        'order_id' => $orderId,
                        'course_id' => $item['IDKhoaHoc'],
                        'course_name' => $item['TenKhoaHoc'],
                        'price' => $item['Gia'],
                        'teacher' => $item['GiaoVien'],
                        'image' => $item['HinhAnh']
                    ];
                    $this->cartModel->insertOrderItem($orderItemData);
                }
                unset($_SESSION['cart']);
                echo "thành cộng";
            } else {
                echo "Giỏ hàng trống, không thể đặt hàng.";
            }
            // header("location: $this->baseUrl/");
        }
    }

 
    
    
}

?>
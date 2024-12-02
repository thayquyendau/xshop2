<?php

namespace controllers\client;

use models\Cart;
use models\Course;


class ThanhtoanController
{
    public $cartModel;
    public $modelCours;
    public $baseUrl = BASE_URL;

    public function __construct()
    {
        // Ngăn chặn lỗi hiển thị
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $this->cartModel = new Cart();
        $this->modelCours = new Course();
    }

    public function index(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy giá trị từ POST
            $id = $_POST['IDKhoaHoc'];
    
            // Xử lý từ giỏ hàng (IDKhoaHoc là một mảng)
            if (is_array($id) && !empty($id)) {
                $cartItems = $this->cartModel->getthanhtoanbyId($id);
                require_once './src/views/client/thanhtoan/thanhtoan.php';
                return;
            }

            // Xử lý từ chi tiết khóa học (IDKhoaHoc là một giá trị đơn lẻ)
            if (!is_array($id) && !empty($id)) {
                $course = $this->modelCours->getCoursePaybyId([],$id);          
                $cartItems = $this->cartModel->getCartItemsbyIDKhoaHoc($id);
                // debug($cartItems);
                require_once './src/views/client/thanhtoan/thanhtoan.php';
                return;
            }
    
            $error_message = "Vui lòng chọn ít nhất một khóa học để thanh toán.";
            $cartItems = $this->cartModel->getCartItems();
            header("location: $this->baseUrl/giohang");
            return;
        }
        echo "Không thể xử lý yêu cầu!";
    }
    

    public function addOrder()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Kiểm tra session giỏ hàng
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
                // $this->addOrder();
                unset($_SESSION['cart']);

                // header("location: $this->baseUrl/thanhtoan");
                // require_once './src/views/client/thanhtoan/thanhtoan.php';
            } else {
                echo "Giỏ hàng trống, không thể đặt hàng.";
            }
        }
    }
}

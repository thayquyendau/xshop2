<?php 
    namespace controllers\client;
    use models\Course;
    use models\Category;
    use models\Cart;
    
    class CourseController {
        public $modelObject;
        public $modelObjects;
        public $modelCart;
        public $baseUrl = BASE_URL;
        public function __construct()
        {
        $this->modelObject = new Course();
        $this->modelObjects = new Category();
        $this->modelCart = new Cart();

        }
        public function detail() {
            $id = $_GET['IDKhoaHoc'] ;
            $detailCourse = $this->modelObject->getDetailCourseById($id);
            $courses = $this->modelObjects->getdetailCourseById($id);
            require_once './src/views/client/danhmuc/detail.php';
        }

        public function addOrder(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Kiểm tra session giỏ hàng
                if (!empty($cartItems)) {
                    $cartItems = $_SESSION['cart'];
                    // Tính tổng tiền
                    $totalPrice = array_sum(array_column($cartItems, 'Gia'));
                    // Lưu đơn hàng vào bảng `orders`
                    $orderData = [
                        'total_price' => $totalPrice,
                        'status' => 'pending',
                        'created_at' => date('Y-m-d H:i:s')
                    ];
                    $orderId = $this->modelCart->insertOrder($orderData);
        
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
                        $this->modelCart->insertOrderItem($orderItemData);
                    }    
                    unset($_SESSION['cart']);      
                } else {
                    echo "Giỏ hàng trống, không thể đặt hàng.";
                }
                header("location: $this->baseUrl/");
            }
        }
    }
?>
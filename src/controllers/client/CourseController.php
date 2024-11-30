<?php 
    namespace controllers\client;
    use models\Course;
    use models\Category;
    use models\Cart;
    
    class CourseController {
        public $modelObject;
        public $modelObjects;
        public $modelCart;
        public $base = BASE_URL;
        public function __construct()
        {
        $this->modelObject = new Course();
        $this->modelObjects = new Category();
        $this->modelCart = new Cart();

        }
        public function detail() {
            $id = $_GET['IDKhoaHoc'] ;
            $detailCourse = $this->modelObject->getDetailCourseById($id);
            // debug($detailCourse);
            $courses = $this->modelObjects->getdetailCourseById($id);
            // debug($courses);
            require_once './src/views/client/danhmuc/detail.php';
        }

        public function dangky(){
            $id = $_GET['IDKhoaHoc'];
            // debug($id);
            $cartItems = $this->modelObject->getCoursePaybyId($id);
            // debug( $cartItems);
            require_once './src/views/client/thanhtoan/thanhtoan.php';
        }
    }
?>
<?php 
    namespace controllers\client;
    use models\Course;
    use models\Category;
    
    class CourseController {
        public $modelObject;
        public $modelObjects;
        public $base = BASE_URL;
        public function __construct()
        {
        $this->modelObject = new Course();
        $this->modelObjects = new Category();
        }
        public function detail() {
            $id = $_GET['IDKhoaHoc'] ;
            $detailCourse = $this->modelObject->getDetailCourseById($id);
            // debug($detailCourse);
            $courses = $this->modelObjects->getdetailCourseById($id);
            // debug($courses);
            require_once './src/views/client/danhmuc/detail.php';
        }

        //xu li comment
        // public function create(){
        //     if ($_SERVER['REQUEST_METHOD'] =='POST') {
        //         // debug($_POST);
        //         $id = $_POST['ma_san_pham'];     
        //         $_POST['user']= $_SESSION['id'];  
        //         $this->modelObjects->createComment($_POST);
        //         header("location: $this->base/productDetail?id=$id");
        //         } else {
        //         require_once './src/views/client/products/detail.php';
        //         }
        //     }

    }
?>
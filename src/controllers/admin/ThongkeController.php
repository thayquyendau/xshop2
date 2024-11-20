<?php 
    namespace  controllers\admin;

    use models\Thongke;
    class ThongkeController{
        public $modelObject;
        
        public function __construct()
        {
        $this->modelObject = new Thongke();
        }
        public function index()
        {
        $userCount = $this->modelObject->getUserCount();
        $productCount = $this->modelObject->getProductCount();
        $categoryCount = $this->modelObject->getCategoryCount();
        $commentCount = $this->modelObject->getCommentCount();
        $maxPrice = $this->modelObject->getMaxPrice();
        $minPrice = $this->modelObject->getMinPrice();
        
        require_once './src/views/admin/thongke/index.php';
        }
    }
?>
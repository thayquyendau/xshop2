<?php
session_start();
require_once './src/commons/functions.php';
require_once './src/commons/evr.php';
require_once './src/commons/baseModel.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
require_once './config/head.php';
?>

<body>
    <div class="grid wide">
        <?php
            require_once './src/models/Category.php';
            use models\Category;    
            // Lấy danh mục từ model
            $modelCategory = new Category();
            $categories = $modelCategory->getAllCategory();
            require_once './config/header.php';
        ?>
        <div class="row">
            <?php
            require_once './router/index.php';
            ?>
        </div>
        <!-- footer -->
        <?php
        require_once './config/footer.php';
        ?>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>
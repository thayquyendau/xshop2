<?php 
    session_start();
    ob_start();
            require_once './src/commons/functions.php';
            require_once './src/commons/evr.php';
            require_once './src/commons/baseModel.php';
             use models\Category;
?>

            <!DOCTYPE html>
            <html lang="en">
            <?php
            require_once './config/head.php';
            ?>

            <body>
                
                <?php if (empty($_SESSION['admin_itf'])) :?>
                    <div class="grid wide">   
                        <?php 
                            require_once './src/models/Category.php';
                            // Lấy danh mục từ model
                            $modelCategory = new Category();
                            $categories = $modelCategory->getAllCategory();
                            require_once './config/header.php';
                        ?>
                        <div class="row">
                            <?php
                            //echo $_SESSION['admin_itf'] . 'jhgjuyghhghghghghghgh';
                            require_once './router/index.php';
                            ?>
                        </div>
                        <!-- footer -->
                        <?php 
                        require_once './config/footer.php';
                        ?>
                    </div>

                <?php else:?>

                <div class="main">
                    <div class="row p-0 m-0" style="height: 100vh;">
                    <?php 
                    //echo $_SESSION['admin_itf'] . 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii';
                        require_once './config/list.php';
                        require_once './config/header2.php';
                        require_once './router/index.php';
                    ?>        
                    </div>
                <?php endif;?>

    </div>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
                <script src="<?= BASE_URL ?>/assets/js/script.js"></script>
            </body>
            </html>
<?php ob_end_flush(); ?>
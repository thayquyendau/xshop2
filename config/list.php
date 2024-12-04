<div class="col-2 p-0 list m-0 d-flex flex-column">
                <div class="row mb-5 m-0 ">
                    <a class="row" style="text-decoration: none;" href="<?= BASE_URL . '/' ?>">
                        <div class="col m-0">
                            <img width="100%" src="<?=BASE_URL?>/assets/image/img/logo_mau.png" alt="">
                        </div>
                    </a>
                </div>
                <?php 
                    if($_SESSION['LoaiTK']==1):
                ?>
                <div class="row m-0 mb-4">
                    <a class="row" style="text-decoration: none;" href="<?=BASE_URL?>/admin">
                        <img class="col-3 p-0" src="<?=BASE_URL?>/assets/image/img/dashboard-3-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Dashboard</h5>
                    </a>
                </div>
                <div class="row m-0 mb-4">
                    <a class="row" style="text-decoration: none;" href="<?=BASE_URL?>/admin/category">
                        <img class="col-3 p-0" src="<?=BASE_URL?>/assets/image/img/category-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Danh mục</h5>
                    </a>
                </div>
                <div class="row m-0 mb-4">
                    <a class="row" style="text-decoration: none;" href="<?=BASE_URL?>/admin/Khoahoc">
                        <img class="col-3 p-1" src="<?=BASE_URL?>/assets/image/img/book-open-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Khóa học</h5>
                    </a>
                </div>
                <div class="row m-0 mb-4">
                    <a class="row" style="text-decoration: none;" href="<?=BASE_URL?>/admin/user">
                        <img class="col-3 p-1" src="<?=BASE_URL?>/assets/image/img/user-search-alt-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">User</h5>
                    </a>
                </div>    
                <div class="row m-0 mb-4">
                    <a class="row" style="text-decoration: none;" href="<?=BASE_URL?>/admin/Oder">
                        <img class="col-3 p-1" src="<?=BASE_URL?>/assets/image/img/cart-check-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Đơn hàng</h5>
                    </a>
                </div>           
                <div class="row m-0 mb-4 mt-auto">
                    <a class="row" style="text-decoration: none;" href="<?= BASE_URL . '/logout' ?>">
                        <img class="col-3 p-1" src="<?=BASE_URL?>/assets/image/img/log-out-outlined-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Log Out</h5>
                    </a>
                </div>
                <?php 
                    elseif($_SESSION['LoaiTK']==2):
                ?>
                 <div class="row m-0 mb-4">
                    <a class="row" style="text-decoration: none;" href="<?=BASE_URL?>/admin">
                        <img class="col-3 p-0" src="<?=BASE_URL?>/assets/image/img/dashboard-3-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Dashboard</h5>
                    </a>
                </div>
                <div class="row m-0 mb-4">
                    <a class="row" style="text-decoration: none;" href="<?=BASE_URL?>/admin/Oder">
                        <img class="col-3 p-1" src="<?=BASE_URL?>/assets/image/img/cart-check-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Đơn hàng</h5>
                    </a>
                </div>          
                <div class="row m-0 mb-4 mt-auto">
                    <a class="row" style="text-decoration: none;" href="<?= BASE_URL . '/logout' ?>">
                        <img class="col-3 p-1" src="<?=BASE_URL?>/assets/image/img/log-out-outlined-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Log Out</h5>
                    </a>
                </div>
                <?php 
                    elseif($_SESSION['LoaiTK']==3):
                ?> 
                 <div class="row m-0 mb-4">
                    <a class="row" style="text-decoration: none;" href="<?=BASE_URL?>/admin">
                        <img class="col-3 p-0" src="<?=BASE_URL?>/assets/image/img/dashboard-3-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Dashboard</h5>
                    </a>
                </div>
                <div class="row m-0 mb-4">
                    <a class="row" style="text-decoration: none;" href="<?=BASE_URL?>/admin/category">
                        <img class="col-3 p-0" src="<?=BASE_URL?>/assets/image/img/category-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Danh mục</h5>
                    </a>
                </div>          
                <div class="row m-0 mb-4 mt-auto">
                    <a class="row" style="text-decoration: none;" href="<?= BASE_URL . '/logout' ?>">
                        <img class="col-3 p-1" src="<?=BASE_URL?>/assets/image/img/log-out-outlined-svgrepo-com.svg" alt="">
                        <h5 class="col-9 m-0 d-flex justify-content-center align-items-center list-text ">Log Out</h5>
                    </a>
                </div>
                <?php 
                    endif;
                ?>
            </div> 
            
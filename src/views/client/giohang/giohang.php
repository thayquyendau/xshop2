<div class="col xl-12">
    <div class="detail-bgr">
        <div class="detail-main">
            <div class="title-category">Giỏ hàng</div>
            <form class="" action="<?= BASE_URL ?>/thanhtoan" method="post">
                <div class="detail-course-main-body">
                    <div class="form-pay-left">
                        <div class="d-flex pb-3 justify-content-between align-items-end">
                            <div class="detail-course-main-body-left">
                                <div class="detail-course-left">
                                    <div class="cart-flex-base-line">
                                        <div class="cart-flex-left">
                                            <input type="checkbox" id="select-all" name="rating" onchange="toggleAllProducts(this)">
                                        </div>
                                        <div class="price">CHỌN TẤT CẢ (<span id="selected-count">0</span> SẢN PHẨM)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="category-content-main">
                                <div class="star-big">
                                    <a href="<?= BASE_URL ?>/deleteAllCart"><img class="icon" src="assets\image\icon\icon_trash.svg" alt=""></a>
                                </div>
                                <div class="price">
                                    <a href="<?= BASE_URL ?>/deleteAllCart">XÓA</a>
                                </div>
                            </div>
                        </div>
                        <!-- Khung cho khóa học đc thêm vào giỏ hàng -->
                        <?php foreach ($cartItems as $item): ?>
                            <div class="category-form-space">
                                <div class="top-star d-flex justify-content-between">
                                    <div class="cart-pading">
                                        <div class="category-content-main">
                                            <div class="cart-flex-left">

                                                <input type="checkbox" class="product-checkbox" onchange="updateSelectAll()" name="IDKhoaHoc[]" value="<?= $item['IDKhoaHoc'] ?>">
                                            </div>
                                            <div class="cart-flex-right">
                                                <div class="category-content-main">
                                                    <div class="category-image">
                                                        <img src="<?= $item['HinhAnh'] ?>" alt="">
                                                    </div>
                                                    <div class="category-nd">
                                                        <div class="price"><?= $item['TenKhoaHoc'] ?></div>
                                                        <div class="rating">Giáo viên: <i><?= $item['GiaoVien'] ?></i></div>
                                                        <div class="top-star">
                                                            <span class="count">5.0</span>
                                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                                            <span class="count">(231)</span>
                                                        </div>
                                                        <span><span class="count">74 bài giảng - 07 giờ 07 phút</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-star d-flex justify-content-between">
                                        <div class="cart-trash">
                                            <a href="<?= BASE_URL ?>/deleteCart?IDKhoaHoc=<?= $item['IDKhoaHoc'] ?>">Xóa</a>
                                        </div>
                                        <div class="title-product">
                                            <p class="price"><span class="price-value"><?= $item['Gia'] ?></span>đ</p>
                                            <p><del><?= $item['Gia'] ?>đ</del></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Tinh tong tien   -->
                    <div class="form-pay-right">
                        <div>
                            <div class="price">Thông tin đơn hàng</div>
                            <div class="top-star d-flex justify-content-between align-items-baseline">
                                <div class="cart-pading">
                                    <div class="rating">Tạm tính (<span id="selected-counts">0</span> sản phẩm):</div>
                                </div>
                                <div class="price"><span id="total-price">0</span>đ</div>
                            </div>
                        </div>
                        <hr>
                        <div class="detail-course-main-body">
                            <div class="cart-pading">
                                <div class="price">Tổng cộng</div>
                            </div>
                            <p class="price text-danger"><span id="total-allprice">0</span>đ</p>
                        </div>
                        <div class="d-grid gap-2 col-auto mx-auto">
                            <a class="d-grid gap-2 text-decoration-none" href="<?= BASE_URL ?>/thanhtoan">
                                <button class="btn btn-danger btn-lg p-3 fs-3  " type="submit">
                                    THANH TOÁN
                                </button>
                            </a>

                            <div id="error-message" class="rating text-danger" style="display: <?= isset($_GET['error']) ? 'block' : 'none'; ?>;">
                                Vui lòng chọn ít nhất một sản phẩm!
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col xl-12 lg-12 md-12">
    <div class="banner"></div>
    <div class="detail-bgr">
        <detail>
            <h6 class="title-category"><?= $categories['TenDanhMuc'] ?></h6>
            <div class="product-slider mb-5">
                <button id="prevButton" class="btn btn-outline-secondary btn-lg rounded-circle p-4 mr-2">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="row product-list-slide flex-nowrap overflow-hidden">
                    <?php foreach ($courses as $course): ?>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <a href="<?= BASE_URL ?>/detailCourse?IDKhoaHoc=<?= $course['IDKhoaHoc'] ?>">
                                <img style="width: 100%; height: 145px;" src="<?= $course['HinhAnh'] ?>" alt="">
                            </a>
                            <p class="title-product pt-3"><?= $course['TenKhoaHoc'] ?></p>
                            <p class="rating"><i><?= $course['GiaoVien'] ?></i></p>
                            <p class="top-star">
                                <span class="count pr-3">5.0</span>
                                <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                <span class="count">(231)</span>
                            </p>
                            <p class="price">
                                <span><?= number_format($course['Gia'] * (1 - 0.25), 0, '.', '.') ?>đ</span>
                                <del style="font-size:12px;">
                                    <?= number_format($course['Gia'], 0, '.', '.') ?>đ
                                </del>
                                <span class="count btn btn-danger">Giảm 25%</span>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button id="nextButton" class="btn btn-outline-secondary btn-lg rounded-circle p-4 mr-2">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            <!-- Tat ca khoas học -->
            <div class="header-container ">
                <h6 class="title-category">Tất cả khóa học</h6>
                <div class="button-group">
                    <button id="filterButton" class="category-button">Bộ lọc
                        <img class="detail_pl " width="20px" height="20px" src="assets\image\icon\logo_filter.svg" alt="">
                    </button>
                    <button class="category-button d-flex align-items-center">Sắp xếp theo
                        <img class="detail_pl" width="20px" height="20px" src="assets\image\icon\icon-checklists.svg" alt="">
                    </button>
                </div>
            </div>
            <hr>
            <div class="header-container ">
                <div class="category-top">
                    <div class="category-top-form">
                        <input type="checkbox" id="radio">
                        <h6><label for="radio" class="category-title">Đánh giá</label></h6>
                        <div class="category-content-wrapper">
                            <div class="category-content">
                                <input type="radio" name="rating">
                                <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                <span class="count">4.5 trở lên</span>
                            </div>
                            <div class="category-content">
                                <input type="radio" name="rating">
                                <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                                <span class="count">4.0 trở lên</span>
                            </div>
                            <div class="category-content">
                                <input type="radio" name="rating">
                                <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                                <span class="count">3.5 trở lên</span>
                            </div>
                            <div class="category-content">
                                <input type="radio" name="rating">
                                <span class="stars">&#9733; &#9733; &#9733; &#9734; &#9734;</span>
                                <span class="count">3.0 trở lên</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="category-top-form">
                        <input type="checkbox" id="toggleCheckbox">
                        <h6><label for="toggleCheckbox" class="category-title">Thời lượng khóa học</label></h6>
                        <div class="category-content-wrapper">
                            <div class="category-content">
                                <input type="checkbox" name="rating">
                                <span class="count">Từ 1 đến 3 giờ</span>
                            </div>
                            <div class="category-content">
                                <input type="checkbox" name="rating">
                                <span class="count">Từ 3 đến 6 giờ</span>
                            </div>
                            <div class="category-content">
                                <input type="checkbox" name="rating">
                                <span class="count">Từ 6 đến 12 giờ</span>
                            </div>
                            <div class="category-content">
                                <input type="checkbox" name="rating">
                                <span class="count">Từ 12h</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category-main">
                    <div class="category-top-form">
                        <?php foreach ($courses as $course): ?>
                            <div class="category-form-space">
                                <div class="step-flex justify-content-between">
                                    <div class="category-content-left">
                                        <div class="category-image">
                                            <a href="<?= BASE_URL ?>/detailCourse?IDKhoaHoc=<?= $course['IDKhoaHoc'] ?>"><img style="width: 100%; height: 155px;" src="<?= $course['HinhAnh'] ?>" alt=""></a>
                                        </div>
                                        <div class="category-nd">
                                            <p class="title-product"><?= $course['TenKhoaHoc'] ?></p>
                                            <div class="rating">Giáo viên: <i><?= $course['GiaoVien'] ?></i></div>
                                            <div class="top-star">
                                                <span class="count">5.0</span>
                                                <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                                <span class="count">(231)</span>
                                            </div>
                                            <div><span class="count"><?= $course['GiaoTrinh'] ?> - <?= $course['TimeKhoaHoc'] ?></span></div>
                                        </div>
                                    </div>
                                    <div class="category-content-right">
                                        <div class="price"><?= number_format($course['Gia'] * (1 - 0.25), 0, '.', '.') ?>đ</div>
                                        <div>
                                            <del>
                                                <?= number_format($course['Gia'], 0, '.', '.') ?>đ
                                            </del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </detail>
    </div>

</div>
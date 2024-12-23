    <div class="col xl-12 ">
        <div class="detail-bgr">
            <div class="detail">
                <div class="detailProduct">
                    <div class="detailProduct-left">
                        <div class="container mt-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item count">
                                        <span class="fas fa-home"></span>
                                        <a class="text-white" href="<?= BASE_URL ?>/">Trang Chủ</a>
                                    </li>
                                    <li class="breadcrumb-item count">
                                        <a class="text-white" href="<?= BASE_URL ?>/danhmuc?IDCatagory=<?= $courses['IDCatagory'] ?>">Danh Mục</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="title-detail pb-5"><?= $courses['TenKhoaHoc'] ?></div>
                        <div class="count pb-3"><?= $detailCourse['MoTa'] ?></div>
                        <p class="top-star">
                            <span class="count">4.5</span>
                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                            <span class="detail_pl">(26 đánh giá )</span>
                            <span class="detail_pl">497 Học viên</span>
                        </p>
                        <span class="count">Giảng viên: <?= $courses['GiaoVien'] ?></span>
                    </div>
                    <div class="detailProduct-right">
                        <div class="detalProduct-right-course">
                            <div class="cart-pading">
                                <div class="top-star d-flex align-items-start">
                                    <p><img class="icon" src="assets\image\icon\icon_zoom.svg" alt="">
                                    </p>
                                    <p class="detail_pl">Thời lượng: <?= $courses['TimeKhoaHoc'] ?></p>
                                </div>
                                <div class="top-star d-flex align-items-start">
                                    <p><img class="icon" src="assets\image\icon\task-svgrepo-com.svg" alt="">
                                    </p>
                                    <p class="detail_pl">Giáo Trình: <?= $courses['GiaoTrinh'] ?></p>
                                </div>
                                <div class="top-star d-flex align-items-start">
                                    <p><img class="icon" src="assets\image\icon\icon_time.svg" alt="">
                                    </p>
                                    <p class="detail_pl">Sở hữu khóa học trọn đời</p>
                                </div>
                                <div class="top-star d-flex align-items-start">
                                    <p><img class="icon" src="assets\image\icon\icon_chung_chi.svg" alt="">
                                    </p>
                                    <p class="detail_pl">Cấp chứng nhận hoàn thành</p>
                                </div>
                            </div>
                            <div class="price">
                                <span><?= number_format($courses['Gia'] * (1 - 0.25), 0, '.', '.') ?>đ</span>
                                <del>
                                    <?= number_format($courses['Gia'], 0, '.', '.') ?>đ
                                </del>
                                <span class="count">Giảm 25%</span>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <a class="d-grid gap-2" href="<?= BASE_URL ?>/giohang">
                                <?php if (isset($_SESSION['message'])) {
                                    echo '<button class="btn btn-success text-white rating ">' . $_SESSION['message'] . '</button>';
                                    unset($_SESSION['message']); // Xóa thông báo sau khi đã hiển thị
                                } ?>
                            </a>
                            <form class=" d-grid " action="<?= BASE_URL ?>/giohang" method="post">
                                <input type="hidden" name="IDKhoaHoc" value="<?= $courses['IDKhoaHoc'] ?>">
                                <button class="btn btn-secondary btn-lg " type="submit">
                                    THÊM VÀO GIỎ HÀNG
                                </button>
                            </form>

                            <form class="d-grid gap-2" action="<?= BASE_URL ?>/thanhtoan" method="post">
                                <input type="hidden" name="source" value="detail">
                                <input type="hidden" name="IDKhoaHoc" value="<?= $courses['IDKhoaHoc'] ?>">
                                <button type="submit" class="btn btn-warning btn-lg p-3 fs-3">ĐĂNG KÝ NGAY</button>
                            </form>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="detail-main">
                <div class="detail_space">
                    <div class="detail-course">
                        <div class="detail-course-main">
                            <h6 class="title-course">Kiến thức nhận được</h6>
                            <div class="d-flex justify-content-between">
                                <div class="detail-course-main-body-left">
                                    <div class="detail-boder">
                                        <span><img class="icon" src="assets\image\icon\icon_select.svg" alt="">
                                        </span>
                                        <span class="count">Nắm được lý thuyết và kiến thức nền tảng để có thể thuyết trình tốt</span>
                                    </div>
                                    <div class="detail-boder">
                                        <span><img class="icon" src="assets\image\icon\icon_select.svg" alt="">
                                        </span>
                                        <span class="count">Trình bày được sức mạnh thuyết phục</span>
                                    </div>
                                    <div class="detail-boder">
                                        <span><img class="icon" src="assets\image\icon\icon_select.svg" alt="">
                                        </span>
                                        <span class="count">Thiết kế bài thuyết trình chuyên nghiệp</span>
                                    </div>
                                    <div class="detail-boder">
                                        <span><img class="icon" src="assets\image\icon\icon_select.svg" alt="">
                                        </span>
                                        <span class="count">Tăng sự tự tin và làm chủ của bản thân đối với chính mình, người khác</span>
                                    </div>
                                </div>
                                <div class="detail-course-main-body-right">
                                    <div class="detail-boder">
                                        <span><img class="icon" src="assets\image\icon\icon_select.svg" alt="">
                                        </span>
                                        <span class="count">Tăng sự tự tin và làm chủ của bản thân đối với chính mình và đối với đối phương</span>
                                    </div>
                                    <div class="detail-boder">
                                        <span><img class="icon" src="assets\image\icon\icon_select.svg" alt="">
                                        </span>
                                        <span class="count">Biết cách kích hoạt tâm thế người thuyết trình xuất sắc</span>
                                    </div>
                                    <div class="detail-boder">
                                        <span><img class="icon" src="assets\image\icon\icon_select.svg" alt="">
                                        </span>
                                        <span class="count">Thực hành thành thạo 10 phi ngôn từ</span>
                                    </div>
                                    <div class="detail-boder">
                                        <span><img class="icon" src="assets\image\icon\icon_select.svg" alt="">
                                        </span>
                                        <span class="count">Ứng dụng các công cụ hỗ trợ hiện đại tạo sự sinh động, cuốn hút cho bài thuyết trình</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail_space">
                    <div class="detail-course">
                        <div class="detail-course-main">
                            <h6 class="title-course">Giới thiệu khóa học</h6>
                            <div class="detail-content">
                                <?= $detailCourse['Noidung'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail_space">
                    <div class="title-category">Nội dung khóa học</div>
                    <div class="detail-course-main">
                        <span class="count">5 phần - <?= $courses['GiaoTrinh'] ?> - 5 buổi</span>
                    </div>
                    <div class="detail-course">
                        <div class="detail-boder-bottom">
                            <div class="d-flex justify-content-between">
                                <div class="detail-course-main-body-left">
                                    <div class="detail-boder">

                                        </span>
                                        <span class="count">Phần 1: Tầm quan trọng của Kỹ năng giao tiếp trong ngoại ngữ trình</span>
                                    </div>
                                </div>
                                <div class="detail-course-main-body-right">
                                    <div class="detail-boder">
                                        <span class="count">Thời gian:
                                            2 bài giảng - 0 giờ 14 phút</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-boder-bottom">
                            <div class="d-flex justify-content-between">
                                <div class="detail-course-main-body-left">
                                    <div class="detail-boder">

                                        </span>
                                        <span class="count">Phần 2: Thiết kế bài học ngoại ngữ hoàn hảo</span>
                                    </div>
                                </div>
                                <div class="detail-course-main-body-right">
                                    <div class="detail-boder">
                                        <span class="count">Thời gian:
                                            7 bài giảng - 0 giờ 42 phút</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-boder-bottom">
                            <div class="d-flex justify-content-between">
                                <div class="detail-course-main-body-left">
                                    <div class="detail-boder">

                                        </span>
                                        <span class="count">Phần 3: Kỹ năng giao tiếp và thuyết trình trong ngoại ngữ</span>
                                    </div>
                                </div>
                                <div class="detail-course-main-body-right">
                                    <div class="detail-boder">
                                        <span class="count">Thời gian:
                                            2 bài giảng - 0 giờ 13 phút</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-boder-bottom">
                            <div class="d-flex justify-content-between">
                                <div class="detail-course-main-body-left">
                                    <div class="detail-boder">

                                        </span>
                                        <span class="count">Phần 4: Tăng cường khả năng nghe và phát âm</span>
                                    </div>
                                </div>
                                <div class="detail-course-main-body-right">
                                    <div class="detail-boder">
                                        <span class="count">Thời gian:
                                            9 bài giảng - 1 giờ 13 phút</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-course-main-body">
                            <div class="detail-course-main-body-left">
                                <div class="detail-boder">
                                    </span>
                                    <span class="count">Phần 5: Quản lý môi trường học và tạo động lực học ngoại ngữ</span>
                                </div>
                            </div>
                            <div class="detail-course-main-body-right">
                                <div class="detail-boder">
                                    <span class="count">Thời gian: 3 bài giảng - 0 giờ 21 phút</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail_space">
                    <div class="title-category">Giảng viên</div>
                    <div class="detail-course-main">
                        <span class="count">Diễn giả - CEO Tâm Việt Group</span>
                    </div>
                    <div class="detail-course-main-body">
                        <div class="detail-course-main-body-left">
                            <div class="detail-course-main-body">
                                <div class="detail-course-main-body-left">
                                    <div class="rounded-circle overflow-hidden border" style="width: 150px; height: 150px;">
                                        <img src="assets\image\account\anhphong.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Circular Image">
                                    </div>
                                    <p class="detail-name" style="margin-left: 10px;"><i><?= $courses['GiaoVien'] ?></i></p>
                                </div>
                                <div class="detail-course-main-body-right">
                                    <div class="category-content-wrapper">
                                        <p class="top-star">
                                            <span><img class="icon" src="assets\image\icon\icon_half_star.svg" alt="">
                                            </span>
                                            <span class="detail_pl">4.6 xếp hạng</span>
                                        </p>
                                        <p class="top-star">
                                            <span><img class="icon" src="assets\image\icon\icon_comment.svg" alt="">
                                            </span>
                                            <span class="detail_pl">72.0 đánh giá</span>
                                        </p>
                                        <p class="top-star">
                                            <span><img class="icon" src="assets\image\icon\icon_people.svg" alt="">
                                            </span>
                                            <span class="detail_pl">1262 học viên</span>
                                        </p>
                                        <p class="top-star">
                                            <span><img class="icon" src="assets\image\icon\icon_video.svg" alt="">
                                            </span>
                                            <span class="detail_pl">2 khóa học</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-course-main-body-right">
                            <div class="detail-content">
                                <p><strong><?= $courses['GiaoVien'] ?></strong> :Người sáng lập, Chủ tịch HĐQT Tâm Việt Group.</p>
                                <p>Tác giả - Diễn giả, MC truyền hình.</p>
                                <p>Phó Chủ tịch thứ nhất Hiệp hội Phát triển Văn hóa Doanh nghiệp Việt Nam.</p>
                                <p>Tiến sĩ Toán - Lý Đại học tổng hợp Lomonosov - Moscow.</p>
                                <p><strong><?= $courses['GiaoVien'] ?></strong> từng đào tạo cho Đại học Sol Bridge tại Hàn Quốc về Tự lãnh đạo và tạo dựng Nhân Hiệu.</p>
                                <p>Đội trưởng đội bán hàng đầu tiên của FPT.</p>
                                <p>Chánh văn phòng tổng công ty dầu khí Việt Nam (nay là tập đoàn dầu khí quốc gia Việt Nam).</p>
                                <p>Giám đốc công ty Hà Nội Petro.</p>
                                <p>Giải nhất bán hàng của công ty bảo hiểm AIA miền Bắc năm 2001</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail_space">
                    <div class="top-star">
                        <div class="star-big">
                            <img class="icon" src="assets\image\icon\icon_star_yellow.svg" alt="">
                        </div>
                        <div class="title-category">
                            4.6 xếp hạng khóa học - 4 đánh giá
                        </div>
                    </div>
                    <div class="detail-comment-top">
                        <div class="d-flex justify-content-between">
                            <!-- Phần bên trái -->
                            <div class="detail-course-left flex-fill">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets/image/icon/icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"><i><strong>Tô Thị Hoài</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">
                                    Thật tuyệt vời khi được học cùng thầy <?= $courses['GiaoVien'] ?>! Cảm ơn thầy và đội ngũ đã mang đến khóa học hữu ích. Chúc thầy và các bạn sức khỏe và hạnh phúc!
                                </span>
                            </div>

                            <!-- Phần bên phải -->
                            <div class="detail-course-main-body-right flex-fill">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets/image/icon/icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"><i><strong>Lê Minh Thọ</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">
                                    Một lần nữa cảm ơn thầy <?= $courses['GiaoVien'] ?> và đội ngũ PTQ edu đã tạo ra môi trường học tập tuyệt vời! Chúc thầy và các bạn luôn bình an, mạnh khỏe!
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="detail-comment-top">
                        <div class="d-flex justify-content-between">
                            <!-- Phần bên trái -->
                            <div class="detail-course-left flex-fill">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets/image/icon/icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"><i><strong>Nguyễn Việt Hoàng</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">
                                    Xin chân thành cảm ơn thầy <?= $courses['GiaoVien'] ?> và đội ngũ PTQ edu đã giúp tôi nâng cao kiến thức trong khóa học này. Chúc thầy luôn khỏe mạnh và hạnh phúc!
                                </span>
                            </div>

                            <!-- Phần bên phải -->
                            <div class="detail-course-main-body-right flex-fill">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets/image/icon/icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"><i><strong>Bùi Hoàng Anh</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">
                                    Cảm ơn thầy <?= $courses['GiaoVien'] ?> và PTQ edu đã tổ chức khóa học chất lượng. Chúc thầy và các bạn mạnh khỏe và thành công trên con đường học tập!
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
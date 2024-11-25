    <div class="col xl-12">
        <div class="detail-bgr">
            <div class="detail">
                <div class="detailProduct">
                    <div class="detailProduct-left">
                        <div class="title-detail"><?= $courses['TenKhoaHoc'] ?></div>
                        <br>
                        <div class="count"><?= $detailCourse['MoTa'] ?></div>
                        <br>
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
                                    <p class="detail_pl">Thời lượng: 02 giờ 44 phút</p>
                                </div>
                                <div class="top-star d-flex align-items-start">
                                    <p><img class="icon" src="assets\image\icon\task-svgrepo-com.svg" alt="">
                                    </p>
                                    <p class="detail_pl">Giáo Trình: 28 Bài giảng</p>
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
                            <div class="price">599.000đ
                                <del>899.000đ</del>
                                <span class="count ">Giảm 25%</span>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <div class="d-grid gap d-md-flex justify-content-start">
                                <div class="d-grid gap-2">
                                    <form class="form-detail" action="<?= BASE_URL ?>/giohang" method="post">   
                                        <input type="hidden" name="IDKhoaHoc" value="<?= $courses['IDKhoaHoc'] ?>">
                                        <input type="hidden" name="TenKhoaHoc" value="<?= $courses['TenKhoaHoc'] ?>">
                                        <input type="hidden" name="GiaoVien" value="<?= $courses['GiaoVien'] ?>">
                                        <input type="hidden" name="HinhAnh" value="<?= $courses['HinhAnh'] ?>">   
                                        <input type="hidden" name="Gia" value="<?= $courses['Gia'] ?>">   
                                        <button class="btn btn-secondary btn-lg" type="submit">THÊM VÀO GIỎ HÀNG</button>
                                    </form>
                                </div>
                                <div class="d-grid gap-2  mx-1 ">
                                    <button class="btn btn-light btn-lg"><img src="assets\image\icon\icon_heart.svg" alt="" class="icon"></button>
                                </div>
                            </div>
                            <a class="d-grid gap-2 text-decoration-none" href="<?= BASE_URL ?>/thanhtoan">
                                <button class="btn btn-warning btn-lg p-3 fs-3" type="button">ĐĂNG KÝ NGAY</button>
                            </a>
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
                            <div class="detail-course-main-body">
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
                                <p>Bạn có biết:</p>
                                <p>"<strong>Suy cho cùng, cuộc đời là một chuỗi liên tục những cuộc thuyết trình</strong>”.</p>
                                <p>Từ việc giảng dạy, bán hàng, giao tiếp… đến việc nuôi con, tâm sự bạn bè; từ chính trị gia đến những người bán hàng chợ quê, từ diễn giả chuyên nghiệp đến học sinh tiểu học,…ai ai cũng cần kỹ năng thuyết trình như một kỹ năng không thể thiếu trong cả cuộc sống và công việc.</p>
                                Thuyết trình được sử dụng: “Mọi lúc, mọi nơi, suốt đời, cho mọi người, cho chính mình”.  Và nếu cuộc đời bạn chưa được như những gì bạn mơ ước thì có thể một trong những lý do vô cùng lớn đó là bạn chưa có sự điêu luyện trong nghệ thuật thuyết trình.
                                Nhận thức được vai trò đặc biệt quan trọng của kỹ năng nói chuyện - thuyết trình này Unica đã hợp tác cùng Diễn giả hàng đầu Việt Nam, TS  Phan Quốc Việt thực hiện khóa học "Nghệ thuật thuyết trình" để giúp bạn trở thành trở thành bậc thầy thuyết trình chỉ trong một thời gian ngắn.
                                <p>
                                    <strong>Về khóa học "Nghệ thuật thuyết trình" của giảng viên Phan Quốc Việt</strong>
                                    Khóa học gồm có 27 bài giảng trực tuyến với thời gian học 2 giờ 44 phút có các nội dung nhỏ sau:
                                </p>
                                <p>Phần 1: Tầm quan trọng của Kỹ năng thuyết trình</p>
                                <p>Phần 2: Thiết kế bài thuyết trình hoàn hảo</p>
                                <p>Phần 3: Thuyết trình chuyên nghiệp</p>
                                <p>Phần 4: Sử dụng cơ thể cuốn hút</p>
                                <p>
                                    Mỗi một bài giảng trong học phát triển bản thân gồm các phần học không chỉ có các nội dung lý thuyết mà còn có những phần học thuyết trình có thể ứng dụng thực hành và áp dụng ngay vào giao tiếp thuyết trình trong cuộc sống - công việc, từ cách gây ấn tượng khi mở đầu buổi thuyết trình, bí quyết để chuẩn bị cho bài thuyết trình thêm hiệu quả và thành công, cách để thuyết trình trước đám đông sao cho chuyên nghiệp không chỉ bằng lời nói, bí quyết để sử dụng ngôn ngữ cơ thể như một ngôn ngữ thứ 2 khi bạn thuyết trình...
                                    Và còn rất rất nhiều nội dung cực hay mà bạn sẽ khám giá ra khi tham gia khóa học này! Còn chờ đợi gì nữa, tham gia khóa học "<strong>Nghệ thuật thuyết trình</strong>" ngay hôm nay thôi!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail_space">
                    <div class="title-category">Nội dung khóa học</div>
                    <div class="detail-course-main">
                        <span class="count">5 phần - 28 bài giảng - 5 buổi</span>
                    </div>
                    <div class="detail-course">
                        <div class="detail-boder-bottom">
                            <div class="detail-course-main-body">
                                <div class="detail-course-main-body-left">
                                    <div class="detail-boder">

                                        </span>
                                        <span class="count">Phần 1: Tầm quan trọng của Kỹ năng thuyết trình</span>
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
                            <div class="detail-course-main-body">
                                <div class="detail-course-main-body-left">
                                    <div class="detail-boder">

                                        </span>
                                        <span class="count">Phần 2: Thiết kế bài thuyết trình hoàn hảo</span>
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
                            <div class="detail-course-main-body">
                                <div class="detail-course-main-body-left">
                                    <div class="detail-boder">

                                        </span>
                                        <span class="count">Phần 3: Thuyết trình chuyên nghiệp</span>
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
                            <div class="detail-course-main-body">
                                <div class="detail-course-main-body-left">
                                    <div class="detail-boder">

                                        </span>
                                        <span class="count">Phần 4: Sử dụng cơ thể cuốn hút</span>
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
                                    <span class="count">Phần 5: Quản lý hội trường & khích lệ đám đông</span>
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
                                        <img src="assets\image\detailCourse\phan_quoc_viet.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Circular Image">
                                    </div>
                                    <p class="detail-name"><i>Phan Quốc Việt</i></p>
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
                                <p><strong>Phan Quốc Việt</strong> :Người sáng lập, Chủ tịch HĐQT Tâm Việt Group.</p>
                                <p>Tác giả - Diễn giả, MC truyền hình.</p>
                                <p>Phó Chủ tịch thứ nhất Hiệp hội Phát triển Văn hóa Doanh nghiệp Việt Nam.</p>
                                <p>Tiến sĩ Toán - Lý Đại học tổng hợp Lomonosov - Moscow.</p>
                                <p><strong>Phan Quốc Việt</strong> từng đào tạo cho Đại học Sol Bridge tại Hàn Quốc về Tự lãnh đạo và tạo dựng Nhân Hiệu.</p>
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
                            4.6 xếp hạng khóa học - 10 đánh giá
                        </div>
                    </div>
                    <div class="detail-comment-top">
                        <div class="detail-course-main-body">
                            <div class="detail-course-left">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets\image\icon\icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"> <i><strong>Lê Anh Phong</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">
                                    Cảm ơn thầy Phan Quốc Việt, đội phụng sự và PTQ edu đã đem đến cho tôi một khóa học hữu dụng! Chúc thầy và các bạn luôn mạnh khỏe, an vui!</span>
                            </div>
                            <div class="detail-course-main-body-right">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets\image\icon\icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"> <i><strong>Bùi Hoàng Anh</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">Cảm ơn thầy Phan Quốc Việt, đội phụng sự và PTQ edu đã đem đến cho tôi một khóa học hữu dụng! Chúc thầy và các bạn luôn mạnh khỏe, an vui!</span>
                            </div>
                        </div>
                    </div>
                    <div class="detail-comment-top">
                        <div class="detail-course-main-body">
                            <div class="detail-course-left">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets\image\icon\icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"> <i><strong>Lê Anh Phong</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">
                                    Cảm ơn thầy Phan Quốc Việt, đội phụng sự và PTQ edu đã đem đến cho tôi một khóa học hữu dụng! Chúc thầy và các bạn luôn mạnh khỏe, an vui!</span>
                            </div>
                            <div class="detail-course-main-body-right">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets\image\icon\icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"> <i><strong>Bùi Hoàng Anh</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">Cảm ơn thầy Phan Quốc Việt, đội phụng sự và PTQ edu đã đem đến cho tôi một khóa học hữu dụng! Chúc thầy và các bạn luôn mạnh khỏe, an vui!</span>
                            </div>
                        </div>
                    </div>
                    <div class="detail-comment-top">
                        <div class="detail-course-main-body">
                            <div class="detail-course-left">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets\image\icon\icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"> <i><strong>Lê Anh Phong</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">
                                    Cảm ơn thầy Phan Quốc Việt, đội phụng sự và PTQ edu đã đem đến cho tôi một khóa học hữu dụng! Chúc thầy và các bạn luôn mạnh khỏe, an vui!</span>
                            </div>
                            <div class="detail-course-main-body-right">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets\image\icon\icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"> <i><strong>Bùi Hoàng Anh</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">Cảm ơn thầy Phan Quốc Việt, đội phụng sự và PTQ edu đã đem đến cho tôi một khóa học hữu dụng! Chúc thầy và các bạn luôn mạnh khỏe, an vui!</span>
                            </div>
                        </div>
                    </div>
                    <div class="detail-comment-top">
                        <div class="detail-course-main-body">
                            <div class="detail-course-left">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets\image\icon\icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"> <i><strong>Lê Anh Phong</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">
                                    Cảm ơn thầy Phan Quốc Việt, đội phụng sự và PTQ edu đã đem đến cho tôi một khóa học hữu dụng! Chúc thầy và các bạn luôn mạnh khỏe, an vui!</span>
                            </div>
                            <div class="detail-course-main-body-right">
                                <div class="category-content-main">
                                    <div class="detail-course-main-body-left">
                                        <div class="rounded-circle bg-dark" style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                                            <img src="assets\image\icon\icon_user.svg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                    </div>
                                    <div class="detail-course-main-body-right">
                                        <span class="count"> <i><strong>Bùi Hoàng Anh</strong></i></span>
                                        <p class="top-star">
                                            <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                                            <span class="count">3 tuần trước</span>
                                        </p>
                                    </div>
                                </div>
                                <span class="count">Cảm ơn thầy Phan Quốc Việt, đội phụng sự và PTQ edu đã đem đến cho tôi một khóa học hữu dụng! Chúc thầy và các bạn luôn mạnh khỏe, an vui!</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
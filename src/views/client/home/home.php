<style>
    .menu {
        margin-bottom: 20px;
    }

    del {
        color: #999;
        text-decoration: line-through;
        font-size: 1.5em;
    }

    .span-sale {
        color: green;
        font-weight: bold;
        font-size: 1.5em;
        margin-left: 20px;
    }

    .add-to-cart {
        display: inline-block;
        float: right;
        margin-right: 5px;
        font-size: 24px;
        color: #000;
        text-decoration: none;

    }

    .add-to-cart:hover {
        color: #f00;
    }

    .h3_noidung {
        color: rgb(92, 88, 88);
        font-size: 1.5em;
        transition: color 0.3s ease;
    }

    .h3_noidung:hover {
        color: orangered;
    }

    a{
        color: #000;
        text-decoration: none;
    }
    .row.product-list1 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    /* gap: 10px;  */
    width: 1150px; 
    max-width: 100%;
    margin: 0 auto; 
    /* justify-content: center; Căn giữa các cột nếu cần */
}
    .col {
        box-sizing: border-box;
    }

</style>
<div class="col xl-12 lg-12 md-12">
    <div class="banner">
        <div class="slider">
            <div class="slides">
                <div class="slide"><img class="banner-img" src="assets/image/banner/Frame 75.png" alt=""></div>
                <div class="slide"><img class="banner-img" src="assets/image/banner/Frame 427319557.png" alt=""></div>
                <div class="slide"><img class="banner-img" src="assets/image/banner/Frame 74.png" alt=""></div>
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>
    </div>
    <div class="row product-list">
        <div class="list-product">
            <h1 class="title1">Top Bán chạy</h1>
            <div class="row product-list1">
                <?php foreach ($homes as $home): ?>
                <div class="col xl-3 lg-3 md-6" style="margin-bottom: 20px;">
                    <a href="<?= BASE_URL ?>/detailCourse?IDKhoaHoc=<?= $home['IDKhoaHoc'] ?>"><img style="width: 100%; height: 175px" src="<?= $home['HinhAnh'] ?>" alt=""></a>
                    <p class="title-product"><?= $home['TenKhoaHoc'] ?></p>
                    <p class="rating"> <i><?= $home['GiaoVien'] ?></i></p>
                    <p>
                        <span class="rating">5.0</span>
                        <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                        <span class="count">(231)</span>
                    </p>
                    <p style="font-size: 16px;margin-top:10px;"><?= $home['Gia'] ?><del style="font-size:12px;"><?= $home['Gia'] ?></del></p>
                </div>
                <?php endforeach; ?>
            </div>
            <h1 class="title1">học viên đang theo dõi</h1>
            <div class="row product-list1">
            <?php foreach ($homes1 as $home1): ?>
                <div class="col xl-3 lg-3 md-6" style="margin-bottom: 20px;">
                    <a href="<?= BASE_URL ?>/detailCourse?IDKhoaHoc=<?= $home1['IDKhoaHoc'] ?>">
                    <img style="width: 100%; height: 175px" src="<?= $home1['HinhAnh'] ?>" alt=""></a>
                    <p class="title-product"><?= $home1['TenKhoaHoc'] ?></p>
                    <p class="rating"> <i><?= $home1['GiaoVien'] ?></i></p>
                    <p>
                        <span class="rating">5.0</span>
                        <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                        <span class="count">(231)</span>
                    </p>
                    <p style="font-size: 16px;margin-top:10px;"><?= $home1['Gia'] ?><del style="font-size:12px;"><?= $home1['Gia'] ?></del></p>
                </div>
                <?php endforeach; ?>
            </div>
            <h1 class="title1">Mới ra mắt</h1>
            <div class="row product-list1">
            <?php foreach ($homes2 as $home2): ?>
                <div class="col xl-3 lg-3 md-6" style="margin-bottom: 20px;">
                    <a href="<?= BASE_URL ?>/detailCourse?IDKhoaHoc=<?= $home2['IDKhoaHoc'] ?>"><img style="width: 100%; height: 175px" src="<?= $home2['HinhAnh'] ?>" alt=""></a>
                    <p class="title-product"><?= $home2['TenKhoaHoc'] ?></p>
                    <p class="rating"> <i><?= $home2['GiaoVien'] ?></i></p>
                    <p>
                        <span class="rating">5.0</span>
                        <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                        <span class="count">(231)</span>
                    </p>
                    <p style="font-size: 16px;margin-top:10px;"><?= $home2['Gia'] ?><del style="font-size:12px;"><?= $home2['Gia'] ?></del></p>
                </div>
                <?php endforeach; ?>
            </div>
            <h1 class="title1">Chủ đề có thể bạn quan tâm</h1>
            <div class="chudeqqt">
                <div class="row product-list1">
                    <div class="col xl-3 lg-3 md-6">
                        <input class="chu-de-qt" type="button" value="Facebook Marketing">
                    </div>
                    <div class="col xl-3 lg-3 md-6">
                        <input class="chu-de-qt" type="button" value="Dữ liệu">
                    </div>
                    <div class="col xl-3 lg-3 md-6">
                        <input class="chu-de-qt" type="button" value="Bán hàng online">
                    </div>
                    <div class="col xl-3 lg-3 md-6">
                        <input class="chu-de-qt" type="button" value="Phát triển bản thân">
                    </div>
                </div>
                <div class="row product-list1" style="margin-top: 30px;">
                    <div class="col xl-3 lg-3 md-6">
                        <input class="chu-de-qt" type="button" value="Handmade">
                    </div>
                    <div class="col xl-3 lg-3 md-6">
                        <input class="chu-de-qt" type="button" value="Chăm sóc trẻ">
                    </div>
                    <div class="col xl-3 lg-3 md-6">
                        <input class="chu-de-qt" type="button" value="Zalo Marketing">
                    </div>
                    <div class="col xl-3 lg-3 md-6">
                        <input class="chu-de-qt" type="button" value="Nuôi dạy con">
                    </div>
                </div>
            </div>
            <h1 class="title1">Giảng viên tiêu biểu</h1>
            <div class="row product-list1">
                <div class="col xl-3 lg-3 md-6">
                    <div class="giangvientb-1">
                        <img class="giangvientb-img" src="./assets/image/account/anhphong.jpg" alt="">
                        <h2>Lê Anh Phong</h2>
                        <p>Giáo viên hóa học</p>
                    </div>
                </div>
                <div class="col xl-3 lg-3 md-6">
                    <div class="giangvientb-1">
                        <img class="giangvientb-img" src="./assets/image/account/image1.png" alt="">
                        <h2>Liêu Hà Trinh</h2>
                        <p>Nhà văn, MC Truyền hình</p>
                    </div>
                </div>
                <div class="col xl-3 lg-3 md-6">
                    <div class="giangvientb-1">
                        <img class="giangvientb-img" src="./assets/image/account/image2.png" alt="">
                        <h2>Phạm Thành Long</h2>
                        <p>Luật sư - Diễn giả</p>
                    </div>
                </div>
                <div class="col xl-3 lg-3 md-6">
                    <div class="giangvientb-1">
                        <img class="giangvientb-img" src="./assets/image/account/image3.png" alt="">
                        <h2>Huy Quần Hoa</h2>
                        <p>Chuyên gia Đào tạo Photoshop</p>
                    </div>
                </div>
            </div>
            <div class="row product-list2">
                <div class="col xl-6 md-6">
                    <div class="dkgiangvien">
                        <h2>Trở thành giảng viên QTPedu</h2>
                        <p>Giúp mọi người trở nên tốt hơn - bao gồm cả chính bạn</p>
                        <button>Đăng ký ngay</button>
                    </div>
                </div>
                <div class="col xl-6 md-6">
                    <div class="dkgiangvien">
                        <img class="dkgiangvien-img" src="./assets/image/account/image4.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
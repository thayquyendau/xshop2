<div class="header">
    <ul class="header-list">
        <li>
            <a href="<?= BASE_URL . '/' ?>">
                <img class="header-img" src="./assets/image/header/QTPedu.png" alt="QTPedu Logo">
            </a>
        </li>
        <li class="search-container">
            <input type="text" placeholder="Tìm khóa học, giảng viên">
            <button type="submit">&#128269;</button>
        </li>
        <?php if(isset($_SESSION['UserName']) ): ?>
        <a href="<?= BASE_URL . '/admin' ?>">
            <li class="header-item">Quản trị</li>
        </a>
        <li class="header-item">Học viên</li>
        <li class="header-item">
            <a href="<?= BASE_URL . '/giohang' ?>" class="add-to-cart" title="Thêm vào giỏ hàng">
                <i class="material-icons">shopping_cart</i>
            </a>
        </li>
        
            <a style="color: black; text-decoration:none" href="">
            <li class="header-item"><span>Xin chào <?= $_SESSION['UserName'] ?>!</span></li>
            </a>
        <?php endif; ?>
        <?php if(empty($_SESSION['UserName']) ): ?>
            <a style="color: black; text-decoration:none" href="<?= BASE_URL . '/login' ?>">
            <li class="header-item">Đăng nhập</li>
            </a>
            <a href="<?= BASE_URL . '/dangky' ?>">
            <li>
                <button class="button-dk" id="showRegisterModal">Đăng ký</button>
            </li>
            </a>
        <?php else: ?>
            <a href="<?= BASE_URL.'/logout' ?>"><li>
                <button class="button-dk" >Đăng xuất</button>
            </li></a>
        <?php endif; ?>
    </ul>
</div>
<div class="menu-bar">
    <ul class="menu-list">
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-toggle">
                <svg width="25" height="25" viewBox="0 0 18 18" fill="none">
                    <path d="M7.27502 1.125H3.15002C2.5287 1.125 2.02502 1.62868 2.02502 2.25V6.375C2.02502 6.99632 2.5287 7.5 3.15002 7.5H7.27502C7.89634 7.5 8.40002 6.99632 8.40002 6.375V2.25C8.40002 1.62868 7.89634 1.125 7.27502 1.125Z" fill="#6CC4F5"></path>
                    <path d="M17.3017 3.53205L14.4679 0.698172C14.2608 0.49139 13.9801 0.375244 13.6875 0.375244C13.3949 0.375244 13.1142 0.49139 12.9071 0.698172L10.0732 3.53205C9.86627 3.73902 9.75 4.01973 9.75 4.31242C9.75 4.60512 9.86627 4.88583 10.0732 5.0928L12.9071 7.92667C13.1143 8.13318 13.3949 8.24914 13.6875 8.24914C13.98 8.24914 14.2607 8.13318 14.4679 7.92667L17.3017 5.0928C17.5087 4.88583 17.625 4.60512 17.625 4.31242C17.625 4.01973 17.5087 3.73902 17.3017 3.53205Z" fill="#F2C94C"></path>
                    <path d="M15.7501 9.59985H11.6251C11.0038 9.59985 10.5001 10.1035 10.5001 10.7249V14.8499C10.5001 15.4712 11.0038 15.9749 11.6251 15.9749H15.7501C16.3714 15.9749 16.8751 15.4712 16.8751 14.8499V10.7249C16.8751 10.1035 16.3714 9.59985 15.7501 9.59985Z" fill="#6CC4F5"></path>
                    <path d="M7.27502 9.59985H3.15002C2.5287 9.59985 2.02502 10.1035 2.02502 10.7249V14.8499C2.02502 15.4712 2.5287 15.9749 3.15002 15.9749H7.27502C7.89634 15.9749 8.40002 15.4712 8.40002 14.8499V10.7249C8.40002 10.1035 7.89634 9.59985 7.27502 9.59985Z" fill="#6CC4F5"></path>
                </svg><span style="margin-left: 5px;">Danh mục</span>
            </a>
            <ul class="danhmuc-list">
                <?php foreach($categories as $category):?>
                    <li class="danhmuc-item">
                        <a href="<?= BASE_URL ?>/danhmuc?IDCatagory=<?= $category['IDCatagory'] ?>">
                            <?= $category['TenDanhMuc']?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="menu-item1"><a href="<?= BASE_URL . '/' ?>">Trang chủ</a></li>
        <li class="menu-item1"><a href="<?= BASE_URL . '/gioithieu' ?>">Giới thiệu</a></li>
        <li class="menu-item1"><a href="<?= BASE_URL . '/tintuc' ?>">Tin tức</a></li>
        <li class="menu-item1"><a href="<?= BASE_URL . '/lienhe' ?>">Liên hệ</a></li>
    </ul>
</div>

<style>
.input-title {
    font-size: 15px;
    margin-top: 15px;
    font-weight: normal;
}

input.big-input {
    font-size: 18px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    width: 100%;
    box-sizing: border-box;
}

.form-control {
    height: 30px;
    font-size: 13px;
}

button {
    font-size: 16px;
    padding: 15px 25px;
    border: none;
    border-radius: 8px;
    color: white;
    cursor: pointer;
}

button:hover {
    background-color: darkred;
}

.modal-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    justify-content: center;
    align-items: center;
}

.modal-content {
    padding: 20px;
    border-radius: 8px;
    width: 80%;
    box-shadow: 10px;
    position: relative;
    display: flex; 
}
.border-danger {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important;
    background-color: white;
    border-radius: 10px;
}
.login-back{
    border-radius: 10px 0 0 10px;
}

.forgot-pass{
    text-decoration: none;
    margin: 0 10px;
    font-size: 16px;
    line-height: 1.5;
    cursor: pointer;
    white-space: nowrap;
}
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuToggle = document.querySelector(".menu-toggle");
        const menuItem = document.querySelector(".menu-item");

        menuToggle.addEventListener("click", () => {
            menuItem.classList.toggle("active");
        });

        // Đóng menu khi click bên ngoài
        document.addEventListener("click", (event) => {
            if (!menuItem.contains(event.target) && !menuToggle.contains(event.target)) {
                menuItem.classList.remove("active");
            }
        });
    });
    const showRegisterButton = document.getElementById("showRegisterModal");
    const registerModal = document.getElementById("registerModal");
</script>
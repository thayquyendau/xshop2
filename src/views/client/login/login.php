<div class="container">
    <div class="row m-2"></div>
    <div class="row justify-content-md-center">
        <div class="col-8 justify-content-md-center border border-danger">
            <div class="row">
                <div class="col-6 d-flex justify-content-center align-items-center login">
                    <div class="row d-flex justify-content-center align-items-center">
                        <img style="width: 75%;" src="./asset/img/logo1.png" alt="">
                        <p class="col-9 d-flex justify-content-center align-items-center fs-1 p-0" style="color:red;">Welcome Back !!</p>
                        <p class="col-9 d-flex justify-content-center align-items-center fs-6" style="color: black; font-size: 15px;">Nhập thông tin đăng nhập</p> 
                        <div class="col-9 form-floating rounded-5">
                        <h2">Tên đăng nhập</h2>
                        <input type="email" class="form-control" id="floatingPassword" placeholder="Nhập tên hoặc email">
                        </div>
                        <div style="margin-top: 10px;" class="col-9 form-floating rounded-5">
                        <h2">Mật khẩu</h2>
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Nhập mật khẩu">
                        </div>
                        <p class="col-9 d-flex fs-6 mt-2" style="color: black; font-size: 15px;">Quên mật khẩu?</p>
                        <button type="button" class="col-6 btn btn-primary" style="background-color: red;">Đăng nhập</button>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center login-back rounded-start-5">
                    <div class="row d-flex justify-content-center align-items-">
                        <img style="width: 75%;" src="./asset/img/logo_mau.png" alt="">
                        <p class="col-9 d-flex justify-content-center align-items-center fs-2 m-0 p-0" style="color:white;">Online School</p>
                        <p class="col-9 d-flex justify-content-center align-items-center fs-6" style="color:white;">Bạn chưa có tài khoản? <a href="<?= BASE_URL . '/dangky' ?>">Đăng ký ngay</a></p>
                        <button type="button" class="col-6 btn btn-primary" style="background-color: red;">
                            <a href="<?= BASE_URL . '/dangky' ?>">Đăng ký</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

/* Toàn bộ form mặc định */
.login, .login * {
    font-family: Arial, sans-serif; /* Font chữ hiện đại, dễ đọc */
    font-size: 15px; /* Kích thước chữ mặc định */
    box-sizing: border-box; /* Đảm bảo padding không làm thay đổi kích thước */
}

/* Tiêu đề form (Welcome Back!!) */
.login h2 {
    font-size: 20px; /* Kích thước tiêu đề nhỏ hơn */
    margin-bottom: 10px; /* Tạo khoảng cách với input */
    color: black;
}

/* Nhập thông tin đăng nhập */
.login p {
    margin-bottom: 10px; /* Khoảng cách dưới mỗi đoạn text */
}

/* Input cơ bản */
.login input {
    width: 100%; /* Input rộng đầy đủ */
    padding: 10px; /* Khoảng cách bên trong input */
    font-size: 15px; /* Font chữ của input */
    border: 1px solid #ccc; /* Viền xám nhạt */
    border-radius: 5px; /* Bo góc nhẹ */
    outline: none; /* Xóa viền xanh mặc định khi focus */
    margin-top: 5px; /* Tạo khoảng cách giữa h2 và input */
    transition: all 0.3s ease-in-out; /* Hiệu ứng mượt */
}

/* Hiệu ứng khi input được focus */
.login input:focus {
    border-color: red; /* Đổi màu viền khi focus */
    box-shadow: 0 0 5px rgba(255, 0, 0, 0.5); /* Đổ bóng viền */
}

/* "Quên mật khẩu" */
.login p.fs-6 {
    margin-top: 10px; /* Khoảng cách với input trên */
    color: black; /* Màu chữ */
    text-align: left; /* Căn trái */
}

/* Nút đăng nhập */

</style>

<div class="container">
    <div class="row m-2"></div>
    <div class="row justify-content-md-center">
        <div class="col-8 justify-content-md-center border border-danger">
            <div class="row">
                <div class="col-6 d-flex justify-content-center align-items-center login">
                    <div class="row d-flex justify-content-center align-items-center">
                        <img style="width: 75%;" src="./asset/img/logo1.png" alt="">
                        <p class="col-9 d-flex justify-content-center align-items-center p-0" style="color:red; font-size: 22px;">Welcome Back !!</p>
                        <p class="col-9 d-flex justify-content-center align-items-center" style="color: black; font-size: 15px;">Nhập thông tin đăng nhập</p> 
                        <form action="" method="post" style="padding-left: 50px;"> 
                            <div class="col-9 form-floating rounded-5">
                            <h2">Tên đăng nhập</h2>
                            <input type="username" class="form-control" id="floatingPassword" placeholder="Tên đăng nhập" name="UserName">
                            </div>
                            <div style="margin-top: 10px;" class="col-9 form-floating rounded-5">
                            <h2">Mật khẩu</h2>
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Nhập mật khẩu" name="Password">
                            </div>
                            <p class="col-9 d-flex mt-2" style="color: black; font-size: 13px;">Quên mật khẩu?</p>
                            <?php 
                            if (isset($loginFailMess)) {
                            echo "<p>$loginFailMess</p>";
                            }
                            ?>
                        <button class="col-6 btn btn-primary" style="background-color: red;">Đăng nhập</button>
                        </form>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center login-back rounded-start-5">
                    <div class="row d-flex justify-content-center align-items-">
                        <img style="width: 75%;" src="./asset/img/logo_mau.png" alt="">
                        <p class="col-9 d-flex justify-content-center align-items-center m-0 p-0" style="color:white; font-size: 20px;">Online School</p>
                        <p class="col-9 d-flex justify-content-center align-items-center " style="color:white; font-size: 15px; ">Bạn chưa có tài khoản?<a style="color: #ffffff; padding-left: 5px;" href="<?= BASE_URL . '/register' ?>">Đăng ký ngay</a></p>
                        <button type="button" class="col-6 btn btn-primary" style="background-color: red; border: 1px solid white">
                            <a href="<?= BASE_URL . '/register' ?>">Đăng ký</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

.login, .login * {
    font-family: Arial, sans-serif; 
    font-size: 15px; 
    box-sizing: border-box; 
}

.login h2 {
    font-size: 20px; 
    margin-bottom: 10px; 
    color: black;
}

.login p {
    margin-bottom: 10px; 
}

.login input {
    width: 100%; 
    padding: 10px; 
    font-size: 15px; 
    border: 1px solid #ccc; 
    border-radius: 5px; 
    outline: none; 
    margin-top: 5px; 
    transition: all 0.3s ease-in-out;
}

.login input:focus {
    border-color: red;
    box-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
}

.login p.fs-6 {
    margin-top: 10px; 
    color: black; 
    text-align: left; 
}

button> a{
    color: white;
    text-decoration: none;
    font-size: 15px;
}

</style>

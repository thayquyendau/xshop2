<div class="container">
    <div class="row m-2"></div>
    <div class="row  justify-content-md-center ">
        <div class="col-8 justify-content-md-center border border-danger">
            <div class="row">
                <div class="col-6 d-flex justify-content-center align-items-center login-back rounded-end-5">
                    <div class="row  d-flex justify-content-center align-items-">
                        <img style="width: 75%;" src="./asset/img/logo_mau.png" alt="">
                        <p class="col-9 d-flex justify-content-center align-items-center  m-0 p-0" style="color:white; font-size: 22px;">Online School</p>
                        <p class="col-9 d-flex justify-content-center align-items-center " style="color:white; font-size: 15px;">"Your Top Online School to Learn"</p>
                        
                    </div>
                </div>
                <div class="col-6  d-flex justify-content-center align-items-center login">
                    <div class="row  d-flex justify-content-center align-items-center">
                        <img style="width: 75%;" src="./asset/img/logo1.png" alt="">
                        <p class="col-9 d-flex justify-content-center align-items-center p-0" style="color:red; font-size: 20px;">Welcome Back !!</p>
                        <p class="col-9 d-flex justify-content-center align-items-center " style="color: black; font-size: 15px;">Nhập thông tin đăng ký</p>
                        <form class="dk-form" action="" method="post" enctype="multipart/form-data">
                        <div class="col-12">
                        <div class="row">
                            <div class="col-6 m-0">
                                <h2 class="input-title">Họ và tên</h2>
                                <input type="text" class="form-control" name="HoVaTen" placeholder="Họ và tên">
                            </div>
                            <div class="col-6 m-0">
                                <h2 class="input-title">Tên đăng nhập</h2>
                                <input type="text" class="form-control" name="UserName" placeholder="Tên đăng nhập">
                            </div>
                            <div class="col-6 m-0">
                                <h2 class="input-title">Mật khẩu</h2>
                                <input type="password" class="form-control" name="Password" placeholder="Mật khẩu">
                            </div>
                            <div class="col-6 m-0">
                                <h2 class="input-title">Email</h2>
                                <input type="email" class="form-control" name="Email" placeholder="Email">
                            </div>
                            <div class="col-6 m-0">
                                <h2 class="input-title">Số điện thoại</h2>
                                <input type="tel" class="form-control" name="Phone" placeholder="Số điện thoại">
                            </div>
                            <div class="col-6 m-0">
                                <h2 class="input-title">Ảnh đại diện</h2>
                                <input type="file" class="form-control" name="image" placeholder="Ảnh đại diện">
                            </div>
                        </div>
                        <?php 
                            if (isset($registerFailMess)) {
                                echo "<p>$registerFailMess</p>";
                            }
                        ?>
                        <button class="btn btn-primary mt-3 buttondk" style="background-color: red;font-size: 15px">Đăng Ký</button>
                        </form>
                    </div>

                    </div>
                </div>
        </div>
    </div>
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

.form-control{
    height: 30px;
    font-size: 13px;
}

.buttondk {
    font-size: 16px; 
    border: none; 
    border-radius: 8px; 
    color: white; 
    cursor: pointer; 
}

.buttondk:hover {
    background-color: darkred; 
}
</style>
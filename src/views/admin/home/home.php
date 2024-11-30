<?php 
    if($_SESSION['LoaiTK']==1):
?>
<div class="row m-0 main-body">  
    <div class="col-6 justify-content-center">

            <canvas id="myChart" style="width:100%; max-width:700px"></canvas>

    </div>
    <div class="col-6">
        <div class="row m-0 align-items-center">
            <div class="col-6 m-0 p-0 ">
                <div class="row box m-2 rounded-3">
                    <div class="col-4 align-content-center p-0">
                        <div class="box-1">
                            <img width="70%" src="./assets/image/img/user-svgrepo-com.svg">
                        </div>
                    </div>
                    <div class="col-8 align-content-center">
                        <h1 style="color: red; font-weight: 900;"><?= $tong['tong'] ?></h1>
                        <p style="color: red;"> Tổng số người</p>
                    </div>
                </div>
                <div class="row box m-2 rounded-3">
                    <div class="col-4 align-content-center p-0">
                        <div class="box-1">
                            <img width="70%" src="./assets/image/img/user-svgrepo-com.svg">
                        </div>
                    </div>
                    <div class="col-8 align-content-center">
                        <h1 style="color: red; font-weight: 900;"><?= $tongTC['tongTC'] ?></h1>
                        <p style="color: red;">Số giáo viên</p>
                    </div>
                </div>
                <div class="row box m-2 rounded-3">
                    <div class="col-4 align-content-center p-0">
                        <div class="box-1">
                            <img width="70%" src="./assets/image/img/user-svgrepo-com.svg">
                        </div>
                    </div>
                    <div class="col-8 align-content-center">
                        <h1 style="color: red; font-weight: 900;"><?= $tongST['tongST'] ?></h1>
                        <p style="color: red;">Số học sinh</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="box-gv-2">
                    <p style="margin: 10px; color: red;  font-weight: bold; font-size:20px;">Giáo viên nhiều khóa học</p>
                    <?php foreach($max as $maxs):?>
                        <div class="row m-4 border border-danger rounded-2">
                            <div class="col-4 align-content-center p-0">
                                <div class="box-1">
                                    <img width="70%" src="./assets/image/img/teacher-svgrepo-com.svg">
                                </div>
                            </div>
                                            
                            <div class="col-8 align-content-center">
                                <h5 style="color: red; font-weight: bold;"><?= $maxs['GiaoVien'] ?></h5>
                                <p style="color: red;">Số lượng khóa học = <?= $maxs['count'] ?> </p>
                            </div>               
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>  
        <div class="row">
                        <p>hêl</p>
            </div>                      
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const LoaiTKNames = [
    'Admin', 'Giáo viên', 'Học sinh'
    ];

       // Nhận mảng dữ liệu từ PHP
   const phpData = <?php echo json_encode($thongke)?>;
   // Chuyển đổi dữ liệu thành định dạng của Chart.js
   const labels = phpData.map(item => LoaiTKNames[item.LoaiTK-1]); // Lấy tên tháng
   const sales = phpData.map(item => item.thongke); // Lấy giá trị doanh số

   // Cấu hình biểu đồ
   const chartData = {
       labels: labels,
       datasets: [{
           label: 'Thống kê số tài khoản',
           data: sales,
           backgroundColor: ['rgba(75, 192, 192, 0.2)','rgba(252, 74, 43, 0.2)','rgba(43, 102, 262, 0.2)'],
           borderColor: ['rgba(75, 192, 192, 1)','rgba(252, 74, 43, 1)','rgba(43, 102, 262, 1)'],
           borderWidth: 1
       }]
   };

   const config = {
       type: 'bar', // Loại biểu đồ (cột)
       data: chartData,
       options: {
           scales: {
               y: {
                   beginAtZero: true
               }
           }
       }
   };

   // Vẽ biểu đồ
   const myChart = new Chart(
       document.getElementById('myChart'),
       config
   );
</script>

<?php 
    elseif($_SESSION['LoaiTK']!== 1):
?>
    <div class="row m-0 p-4 main-body">
        <div class="row justify-content-around">
             <div class="col-md-5">
                <div class="service-info">
                    <img style=" width:200px" src="assets/image/img/z5376636394927_98d1e326e733d6c55363f947443a59f5.jpg" alt="User Image">
                    <h2 class="mt-4" style="font-weight:bold;"><?= $_SESSION['HoVaTen'] ?></h2>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                        Đổi mật khẩu
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Header của Modal -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="formModalLabel">Nhập Thông Tin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Body của Modal -->
                                <div class="modal-body">
                                <form id="passwordForm" method="post">
                                    <!-- Trường nhập mật khẩu -->
                                    <div class="mb-3 row">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="password" name="Password" required>
                                        </div>
                                    </div>

                                    <!-- Trường nhập lại mật khẩu -->
                                    <div class="mb-3 row">
                                        <label for="confirmPassword" class="col-sm-2 col-form-label">Nhập lại Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="confirmPassword" required>
                                        </div>
                                    </div>
                                    <!-- Nút gửi -->
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                    <p class="mt-2">Thời hạn sử dụng dịch vụ: <br> <strong>29/11/2026 18:07</strong></p>
                </div>
            </div>
            <!-- Thông tin cá nhân -->
            <div class="col-md-6">
                <h1>Quản lý tài khoản</h1>
                <form method="post">
                   
                    <div class="mb-2">
                        <label for="accountId" class="form-label">ID tài khoản</label>
                        <input type="text" class="form-control" id="accountId" value="<?= $user['UserID'] ?>" readonly>
                    </div>
                    <div class="mb-2" id="pass">
                        <label for="accountId" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="Password" value="<?= $user['Password'] ?>" readonly>
                    </div>
                    <div class="mb-2">
                        <label for="fullName" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" id="fullName" name="HoVaTen" value=" <?= $user['HoVaTen'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="phone" name="Phone" value=" <?= $user['Phone'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" name="Email" value="<?= $user['Email'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="country" class="form-label">Địa chỉ</label>
                        <input class="form-control" id="country" name="Address" value="<?= $user['Address'] ?>">    
                        </input>
                    </div>
                    <button type="submit" class="btn btn-success">Cập nhật thông tin</button>
                </form>
            </div>
            <!-- Thông tin dịch vụ -->
            
        </div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
             window.onload = function anGiaoDien() {
             document.getElementById('pass').style.display = 'none';

        }
 

            // Lấy form và các trường input
            const form = document.getElementById('passwordForm');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');

            // Xử lý sự kiện khi form được gửi
            form.addEventListener('submit', function (event) {
                // Kiểm tra nếu mật khẩu không khớp
                if (password.value !== confirmPassword.value) {
                    event.preventDefault(); // Ngăn form không được gửi
                    alert('Mật khẩu và Nhập lại mật khẩu không khớp!'); // Hiển thị thông báo lỗi
                    return;
                }else if(password.value == confirmPassword.value){
                    alert('Đổi mật khẩu thành công!');
                };
            });
           
            
        </script>
    </div>

<?php endif;?>
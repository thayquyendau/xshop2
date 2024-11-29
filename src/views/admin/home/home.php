<?php 
    //  debug($_SESSION);
    
?>
<div class="row m-0 main-body">  
    <div class="col-6 justify-content-center">
            <canvas id="myChart" style="width:100%; max-width:700px"></canvas>
            <div class="row">
                        <p>hêl</p>
            </div> 
        <!-- <canvas id="myChart" style="width:100%; max-width:700px"></canvas> -->
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

        <div class="col-10 p-0 d-flex flex-column align-items-center"> 
                <div class="row m-0 main-top">
                    <div class="col-1  d-flex justify-content-center align-items-center">
                        <img width="50%" src="<?=BASE_URL?>/assets/image/img/account-svgrepo-com.svg" alt="">
                    </div>
                    
                    <div class="col-1 justify-content-center align-content-center">
                       <h4 style="margin: 0px; font-weight: bold;"><?=$_SESSION['HoVaTen']?></h4>
                       <?php if($_SESSION['LoaiTK']==1):?>
                            <p style="margin: 0px;">Admin</p>
                        <?php elseif($_SESSION['LoaiTK']==2):?>
                            <p style="margin: 0px;">Giáo viên</p>
                        <?php elseif($_SESSION['LoaiTK']==3):?>
                            <p style="margin: 0px;">Học sinh</p>
                        <?php endif;?>
                    </div>
                    <div class="col-8"></div>
                    <!-- <div class="col-1 justify-content-center align-content-center">
                       <h5 style="margin: 0px;">20:00 PM</h5>
                       <p style="margin: 0px;">Oct, 14,2024 </p>
                    </div> -->
                    <div class="col-1 justify-content-center align-content-center">
                        <div  style="margin: 0px;" class="time" id="time">00:00 PM</div>
                        <div style="margin: 0px;" class="date" id="date">Oct, 14, 2024</div>
                    </div>
                    <div class="col-1  d-flex justify-content-center align-items-center">
                        <img width="50%" src="<?=BASE_URL?>/assets/image/img/settings-svgrepo-com.svg" alt="">
                    </div>
                </div>

                <script>
        function updateClock() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();
            var ampm = hours >= 12 ? 'PM' : 'AM';

            // Chuyển sang định dạng 12 giờ
            hours = hours % 12;
            hours = hours ? hours : 12; // nếu giờ là 0 thì thay thế bằng 12

            // Đảm bảo phút và giây có 2 chữ số
            minutes = (minutes < 10 ? "0" : "") + minutes;
            seconds = (seconds < 10 ? "0" : "") + seconds;

            // Cập nhật giờ và phút
            document.getElementById('time').textContent = hours + ":" + minutes + " " + ampm;

            // Cập nhật ngày tháng
            var options = { year: 'numeric', month: 'short', day: 'numeric' };
            document.getElementById('date').textContent = currentTime.toLocaleDateString('en-US', options);
        }

        // Cập nhật mỗi giây
        setInterval(updateClock, 1000);

        // Gọi hàm ngay khi trang tải
        updateClock();
    </script>
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
                    <div class="col-1 justify-content-center align-content-center">
                       <h5 style="margin: 0px;">20:00 PM</h5>
                       <p style="margin: 0px;">Oct, 14,2024 </p>
                    </div>
                    <div class="col-1  d-flex justify-content-center align-items-center">
                        <img width="50%" src="<?=BASE_URL?>/assets/image/img/settings-svgrepo-com.svg" alt="">
                    </div>
                </div>

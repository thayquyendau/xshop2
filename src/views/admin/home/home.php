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
                    <h3 style="margin: 10px; color: red;">Giáo viên nhiều khóa học</h3>
                    <?php foreach($max as $maxs):?>
                        <div class="row m-4 border border-danger rounded-2">
                            <div class="col-4 align-content-center p-0">
                                <div class="box-1">
                                    <img width="70%" src="./assets/image/img/teacher-svgrepo-com.svg">
                                </div>
                            </div>
                                            
                            <div class="col-8 align-content-center">
                                <h5 style="color: red; font-weight: bold;"><?= $maxs['HoVaTen'] ?></h5>
                                <p style="color: red;">Mã số giáo viên: ID = <?= $maxs['UserID'] ?> </p>
                            </div>               
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>                        
    </div>
</div>

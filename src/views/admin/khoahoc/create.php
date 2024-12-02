<div class="main-body p-3">
   
    <h3 class="mb-5">Thêm mới Khoa học</h3>
 
    <form class="row g-3" action="" method = "post" enctype="multipart/form-data">
    
        <div class="col-md-6">
            <label for="input" class="form-label">Tên Khóa học</label>
            <input type="text" class="form-control" id="TenKhoaHoc" name="TenKhoaHoc" value="">
        </div>
        <div class="col-md-6">
            <label for="input" class="form-label">Thời gian khóa học</label>
            <input type="text" class="form-control" id="" name="TimeKhoaHoc" placeholder="Giờ: .....  Phút .....">
        </div>
        <div class="col-md-6">
            <label for="input" class="form-label">Giáo trình</label>
            <input type="text" class="form-control" id="" name="GiaoTrinh" value="">
        </div>
        <div class="col-md-6">
            <label for="input" class="form-label">Giá</label>
            <input type="text" class="form-control" id="Gia" name="Gia" value="">
        </div>
        <div class="col-md-4">
            <label for="form" class="form-label">Hình ảnh</label>
            <input class="form-control " id="HinhAnh" name="HinhAnh" type="file"  value="">
         </div>
         <div class="col-md-4">
            <label for="input" class="form-label">Giáo viên</label>
            <select id="GiaoVien" name="GiaoVien" class="form-select">
                     <option disabled >Tên Giáo viên</option>
                <?php foreach($users as $user): ?>
                     <option value="<?= $user['HoVaTen'] ?>"><?= $user['HoVaTen'] ?></option>
                <?php endforeach;?>
            </select>
        </div>
       
        <div class="col-md-4">
            <label for="input" class="form-label">Danh mục</label>
            <select id="IDCatagory" name="IDCatagory" class="form-select">
                    <option disabled >Tên Danh mục</option>
                <?php foreach($danhmucs as $danhmuc): ?>
                     <option value="<?= $danhmuc['IDCatagory']?>" ><?= $danhmuc['TenDanhMuc'] ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
        
    </form>
</div>    
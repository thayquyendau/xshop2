<div class="main-body p-3">
   
    <h3 class="mb-5">Sửa thông tin Khoa học</h3>
 
    <form class="row g-3" action="" method = "post" enctype="multipart/form-data">
    
        <div class="col-md-6">
            <label for="input" class="form-label">Tên Khóa học</label>
            <input type="text" class="form-control" id="TenKhoaHoc" name="TenKhoaHoc" value="<?= $Khoahocs['TenKhoaHoc'] ?>">
        </div>
     
        <div class="form-floating col-md-10">
            <textarea class="form-control pt-5" id="floatingTextarea2" style="height: 100px" name="MoTa"><?=$Khoahocs['MoTa']?></textarea>
            <label for="floatingTextarea2" class="font-size:12px;">Mô tả</label>
            
        </div>
        <div class="col-md-6">
            <label for="input" class="form-label">Giá</label>
            <input type="text" class="form-control" id="Gia" name="Gia" value="<?= $Khoahocs['Gia'] ?>">
        </div>
        <div class="col-md-4">
            <label for="form" class="form-label">Hình ảnh</label>
            <input class="form-control " id="HinhAnh" name="HinhAnh" type="file"  value="<?= $Khoahocs['HinhAnh'] ?>">
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
            <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
        
    </form>
</div>    
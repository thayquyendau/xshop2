<div class="main-body p-3">
    <h3 class="mb-5">Sửa thông tin tài khoản</h3>
 
    <form class="row g-3" action="" method = "post" enctype="multipart/form-data">
    
        <div class="col-md-6">
            <label for="input" class="form-label">Username</label>
            <input type="text" class="form-control" id="UserName" name="UserName" value="<?= $users['UserName'] ?>">
        </div>
        <div class="col-md-6">
            <label for="input" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" name="Password" >
        </div>
        <div class="col-md-6">
            <label for="input" class="form-label">Họ và Tên</label>
            <input type="text" class="form-control" id="HoVaTen" name="HoVaTen" value="<?= $users['HoVaTen'] ?>">
        </div>
        <div class="col-md-6">
            <label for="input" class="form-label">Email</label>
            <input type="text" class="form-control" id="Email" name="Email" value="<?= $users['Email'] ?>">
        </div>
        <div class="col-md-6">
            <label for="input" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="Phone" name="Phone" value="<?= $users['Phone'] ?>">
        </div>
        <div class="col-md-6">
            <label for="input" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="Address" name="Address" value="<?= $users['Address'] ?>">
        </div>
        <div class="col-md-4">
            <label for="form" class="form-label">Hình ảnh</label>
            <input class="form-control " id="image" name="image" type="file"  value="<?= $users['image'] ?>">
         </div>
        <div class="col-md-4">
            <label for="input" class="form-label">Loại tài khoản</label>
            <select id="LoaiTK" name="LoaiTK" class="form-select" value="<?= $users['LoaiTK'] ?>">
                <option value="1" selected>Admin</option>
                <option value="2">Giáo viên</option>
                <option value="3">Học sinh</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
        
    </form>
</div>    
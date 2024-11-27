<div class="main-body p-3">
    <h3 class="mb-5">Sửa Danh mục</h3>
 
    <form class="row g-3" action="" method = "post" enctype="multipart/form-data">
    
        <div class="col-md-6">
            <label for="input" class="form-label">Tên Danh mục</label>
            <input type="text" class="form-control" id="TenDanhMuc" name="TenDanhMuc" value="<?= $category['TenDanhMuc'] ?>">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
        
    </form>
</div>    
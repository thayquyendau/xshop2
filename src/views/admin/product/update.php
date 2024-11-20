<h2 class="admin-title">chỉnh sửa sản phẩm</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" name="id" value="<?= $product['id'] ?>" readonly>
        <label for="ma_loai">Mã Loai</label>
        <input type="text" class="form-control" id="ma_loai" name="ma_loai" value="<?= $product['ma_loai'] ?>">
        <label for="ma_san_pham">Mã sản phẩm</label>
        <input type="text" class="form-control" id="ma_san_pham" name="ma_san_pham" value="<?= $product['ma_san_pham'] ?>">
        <label for="ten_san_pham">Tên sản phẩm</label>
        <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" value="<?= $product['ten_san_pham'] ?>">
        <label for="hinh_anh">Hình ảnh</label>
        <input type="file" class="form-control" id="hinh_anh" name="hinh_anh" value="<?= $product['hinh_anh'] ?>">
        <label for="noi_dung">Nội dung</label>
        <input type="text" class="form-control" id="noi_dung" name="noi_dung" value="<?= $product['noi_dung'] ?>">
        <label for="mo_ta">Mô tả</label>
        <input type="text" class="form-control" id="mo_ta" name="mo_ta" value="<?= $product['mo_ta'] ?>">
        <label for="so_luong">Số lượng</label>
        <input type="number" class="form-control" id="so_luong" name="so_luong" value="<?= $product['so_luong'] ?>">
        <label for="gia">Đơn giá</label>
        <input type="text" class="form-control" id="gia" name="gia" value="<?= $product['gia'] ?>">
        <label for="sale">Sale</label>
        <input type="text" class="form-control" id="sale" name="sale" value="<?= $product['sale'] ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
</form>
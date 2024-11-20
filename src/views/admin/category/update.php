
<form action="" method="post">
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" name="id" value="<?= $category['id'] ?>" readonly>
        <label for="ma_loai">Mã Loại</label>
        <input type="text" class="form-control" id="ma_loai" name="ma_loai" value="<?= $category['ma_loai'] ?>">
        <label for="ten_loai">Tên loại</label>
        <input type="text" class="form-control" id="ten_loai" name="ten_loai" value="<?= $category['ten_loai'] ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
</form>
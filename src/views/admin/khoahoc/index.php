
<div class="row m-0 main-button">
    <div class="col-4 btn-group me-2 h-50" role="group" aria-label="First group">
    </div>
    
    <form action="" method="post" class="col-2 input-group h-50 w-auto" id="searchForm">
        <button type="button" class="btn btn-primary me-2 "><a style="color: white; text-decoration: none;" href="<?= BASE_URL ?>/admin/khoahoc/create">Thêm mới</a></button>
        <button type="submit" class="btn btn-outline-danger"><img width="50%" src="./assets/img/search-svgrepo-com.svg" alt="">Tìm kiếm</button>
        <input type="text" class="form-control is-invalid" aria-label="Example text with button addon" aria-describedby="button-addon1" name="name">
    </form>
</div>

<div class="main-body" style="overflow: auto;">
    <table class="table table-hover border-danger-subtle mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Khóa học</th>
                <th scope="col">Giá</th>
                <th scope="col">Giáo viên</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Time</th>
                <th scope="col">Bài giảng</th>
                <th scope="col">Ảnh</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>

        <?php foreach($Khoahocs as $Khoahoc): ?>
         <tbody>
            <tr>
                <th scope="row"><?= $Khoahoc['IDKhoaHoc'] ?></th>
                <td><?= $Khoahoc['TenKhoaHoc'] ?></td>
                <td><?= $Khoahoc['MoTa'] ?></td>
                <td><?= $Khoahoc['Gia'] ?></td>
                <td><?= $Khoahoc['GiaoVien'] ?></td>
                <td><?= $Khoahoc['TenDanhMuc'] ?></td>
                <td><img width="50px" src="<?= $Khoahoc['HinhAnh']?>" alt=""></td>
                <?php 
                    if($_SESSION['LoaiTK']==1):
                ?>
                <td><a href="<?= BASE_URL ?>/admin/Khoahoc/update?id=<?= $Khoahoc['IDKhoaHoc'] ?>"><button type="button" class="btn btn-primary me-2 ">Sửa</button></a></td>
                <td><a href="<?= BASE_URL ?>/admin/Khoahoc/delete?id=<?= $Khoahoc['IDKhoaHoc'] ?>"><button type="button" class="btn btn-primary me-2 ">Xóa</button></a></td>
                <?php endif;?>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal riêng cho từng khóa học -->
<?php foreach ($Khoahocs as $Khoahoc): ?>
<div class="modal fade" id="detailModal<?= $Khoahoc['IDKhoaHoc'] ?>" tabindex="-1" aria-labelledby="detailModalLabel<?= $Khoahoc['IDKhoaHoc'] ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel<?= $Khoahoc['IDKhoaHoc'] ?>">Chi tiết khóa học</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="detailForm<?= $Khoahoc['IDKhoaHoc'] ?>" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?=$Khoahoc['IDKhoaHoc']?>">
                        <label for="descriptionInput<?= $Khoahoc['IDKhoaHoc'] ?>" class="form-label"><strong>Mô tả</strong></label>
                        <input type="text" name="MoTa" class="form-control" id="descriptionInput<?= $Khoahoc['IDKhoaHoc'] ?>" value="<?= htmlspecialchars($Khoahoc['MoTa']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="contentInput<?= $Khoahoc['IDKhoaHoc'] ?>" class="form-label"><strong>Nội dung</strong></label>
                        <div id="editableContent<?= $Khoahoc['IDKhoaHoc'] ?>" contenteditable="true" class="form-control" style="min-height: 200px; border: 1px solid #ced4da; padding: 10px;">
                            <?= htmlspecialchars_decode($Khoahoc['Noidung']) ?>
                        </div>
                        <input type="hidden" name="Noidung" id="hiddenContent<?= $Khoahoc['IDKhoaHoc'] ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary" name="post1">Sửa</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>


<script>
// Đồng bộ nội dung từ contenteditable vào input ẩn trong modal
<?php foreach ($Khoahocs as $Khoahoc): ?>
    document.getElementById('detailForm<?= $Khoahoc['IDKhoaHoc'] ?>').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn form gửi dữ liệu ngay lập tức

        // Đồng bộ nội dung từ div contenteditable vào input ẩn
        const editableContent = document.getElementById('editableContent<?= $Khoahoc['IDKhoaHoc'] ?>').innerHTML;
        document.getElementById('hiddenContent<?= $Khoahoc['IDKhoaHoc'] ?>').value = editableContent;

        // Tắt modal
        const modal = bootstrap.Modal.getInstance(document.querySelector('#detailModal<?= $Khoahoc['IDKhoaHoc'] ?>'));
        modal.hide();

        // Gửi form sau khi đồng bộ
        this.submit();
    });
<?php endforeach; ?>
</script>
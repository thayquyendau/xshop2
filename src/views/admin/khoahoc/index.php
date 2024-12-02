
<div class="main-body" style=" overflow: auto;">
    <table class="table table-hover border-danger-subtle mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Khóa học</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Giá</th>
                <th scope="col">Giáo viên</th>
                <th scope="col">Danh mục</th>
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
        <?php 
            endforeach;
        ?>
    </table>
</div>    
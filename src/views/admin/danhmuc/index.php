<div class=" row m-0 main-button">
    <div class=" col-4 btn-group me-2 h-50" role="group" aria-label="First group">
       
    </div>
    
    <div  class="col-2 input-group h-50 w-auto">
        <button type="button" class="btn btn-primary me-2 "><a style="color: white; text-decoration: none;" href="<?= BASE_URL ?>/admin/danhmuc/create">Thêm mới</a></button>
        <button class="btn btn-outline-danger " type="button" id="button-addon1"><img width="50%" src="./asset/img/search-svgrepo-com.svg" alt="">
            <a style="text-decoration: none;" href="<?= BASE_URL ?>/admin/user/search/id=">Tìm kiếm</a>
        </button>
        <input type="text" class="form-control is-invalid " placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="id" >
    </div>
</div>

<div class="main-body" style=" overflow: auto; ">
    <table class="table table-hover border-danger-subtle mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Danh mục</th>
                <th scope="col">Chi tiết</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php foreach($Danhmucs as $Danhmuc): ?>
           
         <tbody>
            <tr>
                <th scope="row"><?= $Danhmuc['IDCatagory'] ?></th>
                <td><?= $Danhmuc['TenDanhMuc'] ?></td>
                <td><a href=""><button type="button" class="btn btn-primary me-2 ">Chi tiết</button></a></td>
                <?php 
                    if($_SESSION['LoaiTK']==1):
                ?>
                <td><a href="<?= BASE_URL ?>/admin/danhmuc/update?id=<?= $Danhmuc['IDCatagory'] ?>"><button type="button" class="btn btn-primary me-2 ">Sửa</button></a></td>
                <td><a href="<?= BASE_URL ?>/admin/danhmuc/delete?id=<?= $Danhmuc['IDCatagory'] ?>"><button type="button" class="btn btn-primary me-2 ">Xóa</button></a></td>
                <?php endif;?>
            </tr>
        </tbody>
        <?php 
            endforeach;
        ?>
    </table>
</div>    
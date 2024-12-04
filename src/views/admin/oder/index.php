<div class=" row m-0 main-button">
    <div class=" col-4 btn-group me-2 h-50" role="group" aria-label="First group">
       
        
    </div>
    
    <form action="" method="post" class="col-2 input-group h-50 w-auto">
         <button type="button" class="btn btn-primary me-2 "><a style="color: white; text-decoration: none;" href="<?= BASE_URL ?>/admin/khoahoc/create">Thêm mới</a></button>
        <button class="btn btn-outline-danger "><img width="50%" src="./assets/img/search-svgrepo-com.svg" alt="" name="post2">Tìm kiếm
        </button>
        <input type="text" class="form-control is-invalid " aria-label="Example text with button addon" aria-describedby="button-addon1" name="name">
    </form>
</div>


<div class="main-body" style=" overflow: auto;">
    <table class="table table-hover border-danger-subtle mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Ngày tạo đơn</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                
               
            </tr>
        </thead>

        <?php foreach($oders as $oder): ?>
        <tbody>
        <tr>
            <th scope="row"><?= $oder['id'] ?></th>
            <td><?= $oder['total_price'] ?></td>
            <td><?= $oder['status'] ?></td>
            <td><?= $oder['created_at'] ?></td>
            <td><a href="<?= BASE_URL ?>/admin/Oder/chitiet?id=<?= $oder['id'] ?>"><button type="button" class="btn btn-primary">Chi tiết</button></a></td>
            <td><a href="<?= BASE_URL ?>/admin/Oder/update?id=<?= $oder['id'] ?>"><button type="button" class="btn btn-primary me-2">Cập nhật trạng thái</button></a></td>
            <td><a href="<?= BASE_URL ?>/admin/Oder/delete?id=<?= $oder['id'] ?>"><button type="button" class="btn btn-danger me-2">Xóa</button></a></td>
            
        </tr>
        </tbody>
             <?php endforeach;?>

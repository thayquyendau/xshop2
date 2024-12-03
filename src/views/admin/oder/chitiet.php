<a href="<?= BASE_URL ?>/admin/Oder"><button type="button" class="btn btn-primary m-2">Quay lại đơn hàng</button></a>
<div class="main-body" style=" overflow: auto;">
    <table class="table table-hover border-danger-subtle mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Khóa học</th>
                <th scope="col">Giá</th>
                <th scope="col">Giáo viên</th>
                <th scope="col">Ảnh</th>
                <th scope="col"> Thao tác</th>
              
                
               
            </tr>
        </thead>

        <?php foreach($oders as $oder): ?>
        <tbody>
        <tr>
            <td scope="row"><?= $oder['order_id'] ?></td>
            <td><?= $oder['course_id'] ?></td>
            <td><?= $oder['course_name'] ?></td>
            <td><?= $oder['price'] ?></td>
            <td><?= $oder['teacher'] ?></td>
            <td><img style="width: 100px;" src="<?= $oder['image'] ?>" alt=""></td>
            <td>
          
                <a href="<?= BASE_URL ?>/admin/Oder/deleteChitiet?id=<?= $oder['id'] ?>"><button type="button" class="btn btn-danger me-2">Hủy đơn</button></a>
            </td>  
        </tr>
        </tbody>
             <?php endforeach;?>

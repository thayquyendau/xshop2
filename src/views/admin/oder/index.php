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
           <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal<?= $oder['id'] ?>">
                Chi tiết
            </button>
            </td>
            <td><a href="<?= BASE_URL ?>/admin/Oder/update?id=<?= $oder['id'] ?>"><button type="button" class="btn btn-primary me-2">Sửa</button></a></td>
            <td><a href="<?= BASE_URL ?>/admin/Oder/delete?id=<?= $oder['id'] ?>"><button type="button" class="btn btn-danger me-2">Xóa</button></a></td>
            
        </tr>
        </tbody>
             <?php endforeach;?>
        <!-- // Modal riêng cho từng khóa học  -->
        <?php foreach ($oders_items as $oders_item): ?>
    

    <div class="modal fade" id="detailModal<?= $oders_item['id'] ?>" tabindex="-1" aria-labelledby="detailModalLabel<?= $oders_item['id'] ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel<?= $oders_item['id'] ?>">Chi tiết đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="detailForm<?= $oders_item['id'] ?>">
                        <input type="hidden" name="id" value="<?= $oders_item['id'] ?>">
                        <div class="mb-3">
                            <label for="courseNameInput<?= $oders_item['id'] ?>" class="form-label"><strong>Tên Khóa học</strong></label>
                            <input type="text" name="course_name" class="form-control" id="courseNameInput<?= $oders_item['id'] ?>" value="<?= htmlspecialchars($oders_item['course_name']) ?>">
                        </div>
                        <div class="mb-3">
                            <label for="priceInput<?= $oders_item['id'] ?>" class="form-label"><strong>Giá</strong></label>
                            <input type="text" name="price" class="form-control" id="priceInput<?= $oders_item['id'] ?>" value="<?= htmlspecialchars($oders_item['price']) ?>">
                        </div>
                        <div class="mb-3">
                            <label for="teacherInput<?= $oders_item['id'] ?>" class="form-label"><strong>Giáo viên</strong></label>
                            <input type="text" name="teacher" class="form-control" id="teacherInput<?= $oders_item['id'] ?>" value="<?= htmlspecialchars($oders_item['teacher']) ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Ảnh hiện tại</strong></label>
                            <img src="<?= htmlspecialchars($oders_item['image']) ?>" alt="Ảnh khóa học" class="img-fluid" style="max-width: 100%; height: auto; border: 1px solid #ced4da; padding: 5px;">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
<script>
    document.querySelectorAll('form[id^="detailForm"]').forEach(form => {
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Ngăn việc gửi form mặc định

        // Gửi dữ liệu qua POST
        const formData = new FormData(this);
        
        // Sử dụng Fetch API nếu cần (có thể bỏ qua và sử dụng form.submit() nếu không cần API)
        fetch('process_order.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Hiển thị phản hồi từ server
            const modal = bootstrap.Modal.getInstance(this.closest('.modal'));
            modal.hide(); // Đóng modal
            alert('Cập nhật thành công!');
        })
        .catch(error => console.error('Error:', error));
    });
});

</script>
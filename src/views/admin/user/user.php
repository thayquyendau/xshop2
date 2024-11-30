<style>
        /* Ẩn modal mặc định */
        .modal {
            display: none; /* Modal sẽ ẩn ban đầu */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8); /* Màu nền đen mờ */
        }

        /* Nội dung của modal */
        .modal-content {
            margin: 15% auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Nút đóng */
        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            color: white;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
        }

        /* Nút "Xem" */
        
        .btn:hover {
            background-color: #0056b3;
        }
    </style>


<div class=" row m-0 main-button">
    <div class=" col-4 btn-group me-2 h-50" role="group" aria-label="First group">
        <button type="button" class="btn btn-primary me-2 "><a style="color: white; text-decoration: none;" href="<?= BASE_URL ?>/admin/user/role?id=2">Giáo viên</a></button>
        <button type="button" class="btn btn-primary me-2 "><a style="color: white; text-decoration: none;" href="<?= BASE_URL ?>/admin/user/role?id=3">Học sinh</a></button>
        <button type="button" class="btn btn-primary me-2 "><a style="color: white; text-decoration: none;" href="<?= BASE_URL ?>/admin/user/role?id=1">Admin</a></button>
        <button type="button" class="btn btn-primary me-2 "><a style="color: white; text-decoration: none;" href="<?= BASE_URL ?>/admin/user">Tất cả</a></button>
        <button type="button" class="btn btn-primary me-2 "><a style="color: white; text-decoration: none;" href="<?= BASE_URL ?>/admin/user/create">Thêm mới</a></button>
    </div>
    
    <form action="" method="post" class="col-2 input-group h-50 w-auto">
        <button class="btn btn-outline-danger "><img width="50%" src="./asset/img/search-svgrepo-com.svg" alt="">Tìm kiếm
        </button>
        <input type="text" class="form-control is-invalid " aria-label="Example text with button addon" aria-describedby="button-addon1" name="name">
    </form>
</div>


<div class="main-body">
    <table class="table table-hover border-danger-subtle mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">User</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Email</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Loại</th>
                <th scope="col">Ảnh</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
     
        <?php foreach($users as $user): ?>
          
         <tbody>
            <tr>
                <th scope="row"><?= $user['UserID'] ?></th>
                <td><?= $user['HoVaTen'] ?></td>
                <td><?= $user['UserName'] ?></td>
                <td><?= $user['Address'] ?></td>
                <td><?= $user['Email'] ?></td>
                <td><?= $user['Phone'] ?></td>
                <td><?= $user['LoaiTK'] ?></td>
                <td> 
                        <button id="viewBtn-<?= $user['UserID'] ?>" class="btn">Xem</button>
                        <!-- Modal với id duy nhất -->
                        <div id="myModal-<?= $user['UserID'] ?>" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="imgInModal-<?= $user['UserID'] ?>" src="<?=BASE_URL?>/<?= $user['image'] ?>" alt="Ảnh mẫu">
                        </div>
                </td>
                <td><a href="<?= BASE_URL ?>/admin/user/update?id=<?= $user['UserID'] ?>"><button type="button" class="btn btn-primary me-2 ">Sửa</button></a></td>
                <td><a href="<?= BASE_URL ?>/admin/user/delete?id=<?= $user['UserID'] ?>"><button type="button" class="btn btn-primary me-2 ">Xóa</button></a></td>
            </tr>
        </tbody>
       
        <?php 
            endforeach;
        ?>
    </table>
</div>    
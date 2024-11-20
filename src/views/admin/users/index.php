<div class="col xl-12">
    <h2 class="admin-title">quản lý khách hàng</h2>
    <table>
        <thead>
            <th>ID khách hàng</th>
            <th>Tên người dùng</th>
            <th>Tên tài khoản</th>
            <th>Mật khẩu</th>
            <th>Vai trò</th>
            <th>Email</th>
            <th>Hình ảnh</th>
        </thead>
        <tbody style="text-align: center;">
            <?php
            $userController = new \controllers\admin\UserController();
            $userController->getAlluser();
            $users = $userController->users;
          
            foreach ($users as $user) {
                ?>
                <tr>
                    <td><?=$user['id'] ?></td>
                    <td><?=$user['user_id'] ?></td>
                    <td><?=$user['user_name'] ?></td>
                    <td><?=$user['password'] ?></td>
                    <td><?=$user['role'] ?></td>
                    <td><?=$user['email'] ?></td>
                    <td><img width="100px" height="80px" style="margin-top:10px" src="<?= BASE_URL. "/" .$user['image'] ?>" alt=""></td>
                </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>
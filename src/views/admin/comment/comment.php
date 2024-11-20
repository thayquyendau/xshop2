<div class="col xl-12">
    <h2 class="admin-title">quản lý bình luận</h2>
    <table>
        <thead>
            <th>ID bình luận</th>
            <th>Mã sản phẩm</th>
            <th>Tên khách hàng</th>
            <th>Nội dung</th>
            <th>Ngày bình luận</th>
            <th>Thao tác</th>
        </thead>
        <tbody style="text-align: center;">
            <?php
            // $commentController = new \controllers\admin\CommentController();
            // $commentController->index();
            // $comments = $commentController->comments;
            foreach ($comments as $comment) {
                ?>
                <tr>
                    <td><?=$comment['id'] ?></td>
                    <td><?=$comment['ma_san_pham'] ?></td>
                    <td><?=$comment['user_name'] ?></td>
                    <td><?=$comment['noi_dung'] ?></td>
                    <td><?=$comment['ngay_bl'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/admin/comment/delete?id=<?= $comment['id'] ?>"><button>Xóa</button></a>
                    </td>
                </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>
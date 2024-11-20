<div class="col xl-12">
    <h2 class="admin-title">quản lý loại hàng</h2>
    <a href="<?= BASE_URL ?>/admin/category/create"><button>Thêm mới</button></a>
    <table>
        <thead>
            <th>ID loại hàng</th>
            <th>Mã loại hàng</th>
            <th>Tên loại hàng</th>
            <th>Thao tác</th>
        </thead>
        <tbody style="text-align: center;">
            <?php
            $categoryController = new \controllers\admin\CategoryController();
            $categoryController->getAllCate();
            $categories = $categoryController->categories;
            foreach ($categories as $category) {
                ?>
                <tr>
                    <td><?=$category['id'] ?></td>
                    <td><?=$category['ma_loai'] ?></td>
                    <td><?=$category['ten_loai'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/admin/category/update?id=<?= $category['id'] ?>"><button>Sửa</button></a>
                        <a href="<?= BASE_URL ?>/admin/category/delete?id=<?= $category['id'] ?>"><button>Xóa</button></a>
                    </td>
                </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>
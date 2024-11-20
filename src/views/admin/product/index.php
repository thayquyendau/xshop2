<div class="col xl-12">
    <h2 class="admin-title">quản lý sản phẩm</h2>
    <a href="<?= BASE_URL ?>/admin/product/create"><button>Thêm mới</button></a>
    <table>
        <thead>
            <th>ID sản phẩm</th>
            <th>Mã loại</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Nội dung</th>
            <th>Mô tả</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Sale</th>
            <th>Thao tác</th>
        </thead>
        <tbody style="text-align: center;">
            <?php
            $productController = new \controllers\admin\ProductController();
            $productController->getAllPro();
            $products = $productController->products;
          
            foreach ($products as $product) {
                ?>
                <tr>
                    <td><?=$product['id'] ?></td>
                    <td><?=$product['ma_loai'] ?></td>
                    <td><?=$product['ma_san_pham'] ?></td>
                    <td><?=$product['ten_san_pham'] ?></td>
                    <td><img width="100px" height="80px" style="margin-top:10px" src="<?= BASE_URL. "/" .$product['hinh_anh'] ?>" alt=""></td>
                    <td><?=$product['noi_dung'] ?></td>
                    <td><?=$product['mo_ta'] ?></td>
                    <td><?=$product['so_luong'] ?></td>
                    <td><?=$product['gia'] ?></td>
                    <td><?=$product['sale'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/admin/product/update?id=<?= $product['id'] ?>"><button>Sửa</button></a>
                        <a href="<?= BASE_URL ?>/admin/product/delete?id=<?= $product['id'] ?>"><button>Xóa</button></a>
                    </td>
                </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>
<div class="main-body p-3">
   
    <h3 class="mb-5">Sửa đơn hàng</h3>
 
    <form class="row g-3" action="" method = "post" enctype="multipart/form-data">
    
        <div class="col-md-6">
            <label for="input" class="form-label">STT</label>
            <input type="text" class="form-control" id="TenKhoaHoc"  value="<?= $oders['id'] ?>"  readonly>
        </div>

        <div class="col-md-6">
            <label for="input" class="form-label">Giá</label>
            <input type="text" class="form-control" id="Gia" name="total_price" value="<?= $oders['total_price'] ?>" readonly>
        </div>
        <div class="col-md-4">
            <label for="form" class="form-label">Trạng thái</label>
            <input class="form-control " id="status" name="status" type="text"  value="<?= $oders['status'] ?>">
         </div>
         <div class="col-md-4">
            <label for="form" class="form-label">Ngày tạo đơn</label>
            <input type="datetime-local" class="form-control " id="created_at" name="created_at" type="text"  value="<?=$Timeee?>">
         </div>
       
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
        
    </form>
</div>    
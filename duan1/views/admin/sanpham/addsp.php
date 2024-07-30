<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Thêm sản phẩm</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="admin.php?act=addsp" enctype="multipart/form-data" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Tên sản phẩm</label>
        <input type="text" name="ten_san_pham" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
        <br>
        <label for="exampleInputPassword1">Mã loại hàng</label>
        <select name="ma_loai_hang">
          <?php foreach ($listlh as $loaihang) {
            extract($loaihang);
            echo "<option value='.$ma_loai_hang.'>$ten_loai_hang</option>";
          } ?>
        </select>
        <br>
        <label for="exampleInputEmail1">Mô tả</label>
        <input type="text" name="mo_ta" class="form-control" id="exampleInputEmail1" placeholder="Nội dung mô tả">
        <br>
        <label for="exampleInputEmail1">Ngày thêm</label>
        <input type="date" name="ngay_them" class="form-control" id="exampleInputEmail1" >
        <br>
        <label for="exampleInputEmail1">Đơn giá</label>
        <input type="number" name="don_gia" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá">
        <br>
        <label for="exampleInputEmail1">Số lượng </label>
        <input type="text" name="so_luong" class="form-control" id="exampleInputEmail1" placeholder="Số lượng">
        <br>
        <label for="exampleInputEmail1">Ảnh</label>
        <input type="file" name="hinh" class="form-control" id="exampleInputEmail1" >
        <label for="anh1">Hình ảnh 1:</label>
        <input type="file" name="anh1" class="form-control" accept="image/*" required>

        <label for="anh2">Hình ảnh 2:</label>
        <input type="file" name="anh2" class="form-control" accept="image/*" required>

        <label for="anh3">Hình ảnh 3:</label>
        <input type="file" name="anh3" class="form-control" accept="image/*" required>

        <!-- <label for="anh4">Hình ảnh 4:</label>
        <input type="file" name="anh4" class="form-control" accept="image/*" required>

        <label for="anh5">Hình ảnh 5:</label>
        <input type="file" name="anh5" class="form-control" accept="image/*" required> -->
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type="submit" name="themsp" class="btn btn-primary" value="Thêm sản phẩm"></input>
    </div>
  </form>
</div>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm sản phẩm</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="admin.php?act=suasp&ma_san_pham=<?php echo $ma_san_pham; ?>" enctype="multipart/form-data" method="post">
      <div class="card-body">
        <div class="form-group"></div>
        <label for="exampleInputEmail1">Tên sản phẩm</label>
        <input type="text" value="<?php echo $hiensp['ten_san_pham']  ?>" name="ten_san_pham" class="form-control" id="exampleInputEmail1">
        <br>
        
        <label for="exampleInputPassword1">Loại hàng</label>
<select name="ma_loai_hang" class="form-control">
    <?php foreach ($listlh as $loaihang) {
        extract($loaihang);
        $selected = ($ten_loai_hang == $hiensp['ten_loai_hang']) ? 'selected' : '';
        echo "<option value='$ma_loai_hang' $selected>$ten_loai_hang</option>";
    } ?>
</select>
          <br>
        <label for="exampleInputEmail1">Mô tả</label>
        <input type="text" value="<?php echo $hiensp['mo_ta']  ?>" name="mo_ta" class="form-control" id="exampleInputEmail1" >
        <br>
        <label for="exampleInputEmail1">Ngày thêm</label>
        <input type="date" value="<?php echo $hiensp['ngay_them']  ?>" name="ngay_them" class="form-control" id="exampleInputEmail1">
        <br>
        <label for="exampleInputEmail1">Đơn giá</label>
        <input type="number" value="<?php echo $hiensp['don_gia']  ?>" name="don_gia" class="form-control" id="exampleInputEmail1">
        <br>
        <label for="exampleInputEmail1">Số lượng </label>
        <input type="text" value="<?php echo $hiensp['so_luong']  ?>" name="so_luong" class="form-control" id="exampleInputEmail1">
        <br>
        <label for="exampleInputEmail1">Ảnh</label>
        <input type="file" value="<?php echo $hiensp['anh']  ?>" name="hinh" class="form-control" id="exampleInputEmail1" >
        <label for="anh1">Hình ảnh 1:</label>
        <input type="file" name="anh1" class="form-control" accept="image/*">

        <label for="anh2">Hình ảnh 2:</label>
        <input type="file" name="anh2" class="form-control" accept="image/*">

        <label for="anh3">Hình ảnh 3:</label>
        <input type="file" name="anh3" class="form-control" accept="image/*" >

      </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <input type="submit" name="suasp" class="btn btn-primary" value="Lưu "></input>
  </div>
  </form>
  </div>
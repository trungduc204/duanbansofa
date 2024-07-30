<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Sửa người dùng</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="admin.php?act=suand&ma_nhan_vien=<?php echo $ma_nhan_vien; ?>" enctype="multipart/form-data" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Tên người dùng</label>
        <input type="text" value="<?php echo $hiennd['ten_nhan_vien']  ?>" name="ten_nhan_vien" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
        <br>
        <label for="exampleInputPassword1">Email</label>
        <input type="text" value="<?php echo $hiennd['email']  ?>" name="email" class="form-control" id="exampleInputPassword1" placeholder="Mô tả">
        <br>
        <label for="exampleInputEmail1">Mật khẩu</label>
        <input type="text" value="<?php echo $hiennd['mat_khau']  ?>" name="mat_khau" class="form-control" id="exampleInputEmail1" placeholder="Tên loại hàng">
        <br>
        <label for="exampleInputEmail1">Ảnh</label>
        <input type="file" value="<?php echo $hiennd['avt']  ?>" name="avt" class="form-control" id="exampleInputEmail1" placeholder="Tên loại hàng">
        <br>
        <label for="exampleInputEmail1">Quyền</label>
        <select name="quyen" class="form-control" id="exampleInputEmail1">
          <option value="1" <?php echo ($hiennd['quyen'] == 1) ? 'selected' : ''; ?>>Admin</option>
          <option value="2" <?php echo ($hiennd['quyen'] == 2) ? 'selected' : ''; ?>>Nhân viên</option>
        </select>
        <br>
        <br>
        <label for="exampleInputEmail1">Số điện thoại </label>
        <input type="text" value="<?php echo $hiennd['sdt']  ?>" name="sdt" class="form-control" id="exampleInputEmail1" placeholder="Tên loại hàng">
        <br>
        <label for="exampleInputEmail1">Địa chỉ</label>
        <input type="text" value="<?php echo $hiennd['dia_chi']  ?>" name="dia_chi" class="form-control" id="exampleInputEmail1" placeholder="Tên loại hàng">
        <br>
        <label for="exampleInputEmail1">Ngày sinh</label>
        <input type="date" value="<?php echo $hiennd['ngay_sinh']  ?>" name="ngay_sinh" class="form-control" id="exampleInputEmail1" placeholder="Tên loại hàng">
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type="submit" name="suand" class="btn btn-primary" value="Cập nhật"></input>
    </div>
  </form>
</div>
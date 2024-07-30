<?php
if (is_array($listht)) {
  extract($listht);
}

$hinhpath = "public/dist/img/hethong/.." . $logo;
if (is_file($hinhpath)) {
  $hinhpath = "<img src='" . $hinhpath . "' width='100px' height='100px'>";
} else {
  $hinhpath = "No file img!";
}
?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Sửa thông tin hệ thống</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="post" enctype="multipart/form-data" action="admin.php?act=updateht&id_ht=<?php echo $id_ht; ?>">

    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Tên cửa  hàng</label>
        <input value="<?php echo $listht['ten_cua_hang']  ?>" type="text" name="ten_cua_hang" class="form-control" id="ten_cua_hang" required>

        <br>
        <label for="exampleInputEmail1">Số điện thoại</label>
        <input value="<?php echo $listht['sdt'] ?>" type="text" name="sdt" class="form-control" id="sdt" required>
        <br>
        <label for="exampleInputEmail1">Email</label>
        <input value="<?php echo $listht['email'] ?>" type="text" name="email" class="form-control" id="email" required>
        <br>
        <label for="exampleInputEmail1">Địa chỉ</label>
        <input value="<?php echo $listht['dia_chi'] ?>" type="text" name="dia_chi" class="form-control" id="dia_chi" required>
        <br>
        <label for="exampleInputPassword1">Logo hệ thống</label>
      
                <input type="file" id=logo" name="logo" accept="image/*">
                <br>
                <?php echo $hinhpath ?>

      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
    </div>
  </form>
</div>
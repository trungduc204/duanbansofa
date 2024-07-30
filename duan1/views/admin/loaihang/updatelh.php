<?php
if (is_array($hienlh)) {
  extract($hienlh);
}

$hinhpath = "public/dist/img/loaihang/.." . $anh;
if (is_file($hinhpath)) {
  $hinhpath = "<img src='" . $hinhpath . "' width='100px' height='100px'>";
} else {
  $hinhpath = "No file img!";
}
?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Update loại hàng</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="post" enctype="multipart/form-data" action="admin.php?act=sualh&ma_loai_hang=<?php echo $ma_loai_hang; ?>">

    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Tên loại hàng</label>
        <input value="<?php echo $hienlh['ten_loai_hang']  ?>" type="text" name="ten_loai_hang" class="form-control" id="ten_loai_hang" required>

        <br>
        <input value="<?php echo $hienlh['mo_ta'] ?>" type="text" name="mo_ta" class="form-control" id="mo_ta" required>
        <br>
        <label for="exampleInputPassword1">Ảnh loại hàng</label>
      
                <input type="file" id="anh" name="anh" accept="image/*">
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
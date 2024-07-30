<?php
if (is_array($banner)) {
    extract($banner);
}
$hinhpath = "public/dist/img/banner/.." . $anh;
if (is_file($hinhpath)) {
    $anh = "<img id='previewImage' src='" . $hinhpath . "' height='80'>";
} else {
    $anh = "no photo";
}
?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cập Nhật Banner</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" enctype="multipart/form-data" action="admin.php?act=updatebanner">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Tên banner</label>
                <input type="text" name="ten_banner" class="form-control" id="exampleInputPassword1" required value="<?php echo $ten_banner ?>">
                <br>

                <label for="exampleInputPassword1">Ảnh</label>
                <input type="file" name="anh" class="form-control" id="exampleInputPassword1"  onchange="previewImage(this)">
                <!-- Hiển thị đường dẫn ảnh -->
                <?php echo $anh ?>
                <br>

                <label for="exampleInputPassword1">Link ảnh</label>
                <input type="text" name="link" class="form-control" id="exampleInputPassword1" required value="<?php echo $link ?> ">
                <br>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" class="btn btn-primary" name="btn-capnhat" value="Cập Nhật Banner">
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>

<script>
function previewImage(input) {
    var preview = document.getElementById('previewImage');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

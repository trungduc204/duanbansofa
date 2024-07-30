<?php
if(is_array( $listlh)){
    extract( $listlh);
}
$hinhpath="public/dist/img/loaihang".$anh;
if(is_file($hinhpath)){
    $hinhpath="<img src='".$hinhpath."' width='100px' height='100px'>";
}else{
    $hinhpath="No file img!";
}
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cập nhật loai hàng</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data" action="?act=capnhatlh&ma_loai_hang=<?php echo $ma_loai_hang; ?>">
  
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên loại hàng</label>
                <input value="<?=$ten_loai_hang?>" type="text" name="ten_loai_hang" class="form-control" id="ten_loai_hang" required >
                <br>
                <label for="name" class="form-label">Mô tả</label>
                <input value="<?=$mo_ta?>" type="text" class="form-control" id="mo_ta"  name="mo_ta" >
                <br>
             
                <label for="exampleInputPassword1">Ảnh</label>
                <input type="file" name="anh" >
                <br>
                <?php echo $hinhpath ?>
                
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="btnsubmit">Cập nhật</button>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao!=""))echo $thongbao;

        ?>
    </form>
</div>
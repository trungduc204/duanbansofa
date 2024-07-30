<?php
if(is_array( $hienkh)){
    extract( $hienkh);
}
$hinhpath="public/dist/img/khachhang/..".$avt;
if(is_file($hinhpath)){
    $hinhpath="<img src='".$hinhpath."' width='100px' height='100px'>";
}else{
    $hinhpath="No file img!";
}
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cập nhật khách hàng</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data" action="?act=suakh&ma_khach_hang=<?php echo $ma_khach_hang; ?>">
  
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên khách hàng</label>
                <input value="<?=$ten_khach_hang?>" type="text" name="ten_khach_hang" class="form-control" id="exampleInputEmail1" required >
                <br>
                <label for="name" class="form-label">Mật khẩu</label>
                <input value="<?=$mat_khau?>" type="text" class="form-control" id="mat_khau" placeholder="Nhập mật khẩu" name="mat_khau" >
                <br>
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input value="<?=$dia_chi?>" type="text" name="dia_chi" class="form-control" id="exampleInputEmail1" required >
                <br>

                <label for="exampleInputPassword1">Ngày sinh</label>
                <input value="<?=$ngay_sinh?>"type="date" name="ngay_sinh" class="form-control" id="exampleInputPassword1" required >
                <br>
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input value="<?=$sdt?>" type="text" name="sdt" class="form-control" id="exampleInputEmail1" required >
                <br>
                <label for="exampleInputPassword1">Email</label>
                <input value="<?=$email?>" type="text" name="email" class="form-control" id="exampleInputPassword1" required >
                <br>
                <label for="exampleInputPassword1">Avatar</label>
                <input type="file" id="avt" name="avt" accept="image/*">
                <br>
                <?php echo $hinhpath ?>
                
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="btnsubmit">Cập nhật</button>
        </div>
    </form>
</div>
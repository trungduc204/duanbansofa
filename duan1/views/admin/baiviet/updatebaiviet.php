<?php
    if(is_array($baiviet)){
        extract($baiviet);
    }
    $hinhpart = "img/".$anh1;
        if(is_file($hinhpart)){
            $hinh="<img src='".$hinhpart."' height='80'>";                
        } else{           
            $hinh= "no photo";
        }     
?>

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập Nhật Bài Viết</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="admin.php?act=updatebaiviet">
                <div class="card-body">
                  <div class="form-group">                  
                    <label for="exampleInputPassword1">Tên bài viết</label>
                    <input type="text" name="tenbaiviet" class="form-control" id="exampleInputPassword1" required placeholder="Mã khuyến mãi" value="<?=$ten_bai_viet?>">
                    <br>

                    <label for="exampleInputPassword1">Nội dung</label>
                    <input type="textarea" name="noidung" class="form-control" id="exampleInputPassword1" required placeholder="Nội dung" value="<?=$noi_dung?>">
                    <br>

                    <label for="exampleInputPassword1">Ngày đăng</label>
                    <input type="date" name="ngaydang" class="form-control" id="exampleInputPassword1" required placeholder="Mô tả" value="<?=$ngaydang?>">
                    <br>

                    <label for="exampleInputPassword1">Ảnh</label>
                    <input type="file" name="anh1" class="form-control" id="exampleInputPassword1" required placeholder="Mô tả" value="<?=$anh?>">
                    <br>
                                       
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="idbaiviet" value="<?=$id_bai_viet ?>">
                <input type="submit" class="btn btn-primary" name="btn-capnhat" value="Cập Nhật Bài Viết">
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
              </form>
            </div>
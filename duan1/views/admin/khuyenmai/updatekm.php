<?php
    if(is_array($khuyenmai)){
        extract($khuyenmai);
    }
?>

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập Nhật Khuyến Mãi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="admin.php?act=updatekm">
                <div class="card-body">
                  <div class="form-group">                  
                    <label for="exampleInputPassword1">Mã khuyến mãi</label>
                    <input type="text" name="makm" class="form-control" id="exampleInputPassword1" required placeholder="Mã khuyến mãi" value="<?=$makm ?>">
                    <br>

                    <label for="exampleInputPassword1">Nội dung</label>
                    <input type="text" name="noidung" class="form-control" id="exampleInputPassword1" required placeholder="Nội dung" value="<?=$noidung?>">
                    <br>

                    <label for="exampleInputPassword1">Ngày tạo</label>
                    <input type="date" name="ngaytao" class="form-control" id="exampleInputPassword1" required placeholder="Mô tả" value="<?=$ngaytao?>">
                    <br>

                    <label for="exampleInputPassword1">Ngày hết hạn</label>
                    <input type="date" name="ngayhethan" class="form-control" id="exampleInputPassword1" required placeholder="Mô tả" value="<?=$ngayhethan?>">
                    <br>
                                       
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="idkm" value="<?=$id_km ?>">
                <input type="submit" class="btn btn-primary" name="btn-capnhat" value="Cập Nhật khuyến mãi">
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
              </form>
            </div>
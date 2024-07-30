
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm Banner</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="admin.php?act=addbanner">
                <div class="card-body">
                  <div class="form-group">                  
                    <label for="exampleInputPassword1">Tên banner</label>
                    <input type="text" name="ten_banner" class="form-control" id="exampleInputPassword1" required placeholder="Tên banner">
                    <br>

                    <label for="exampleInputPassword1">Ảnh</label>
                    <input type="file" name="anh" class="form-control" id="exampleInputPassword1" required placeholder="Chọn ảnh">
                    <br>
                    <label for="exampleInputPassword1">Link ảnh</label>
                    <input type="text" name="link" class="form-control" id="exampleInputPassword1" required placeholder="Link ảnh">
                    <br>
                                       
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="submit" class="btn btn-primary" name="btn-thembn" value="Thêm Banner">
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
              </form>
            </div>
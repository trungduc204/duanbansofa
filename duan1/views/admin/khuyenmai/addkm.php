<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm Khuyến Mãi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="admin.php?act=addkm">
                <div class="card-body">
                  <div class="form-group">                  
                    <label for="exampleInputPassword1">Mã khuyến mãi</label>
                    <input type="text" name="makm" class="form-control" id="exampleInputPassword1" required placeholder="Mã khuyến mãi">
                    <br>

                    <label for="exampleInputPassword1">Nội dung</label>
                    <input type="text" name="noidung" class="form-control" id="exampleInputPassword1" required placeholder="Nội dung">
                    <br>

                    <label for="exampleInputPassword1">Ngày tạo</label>
                    <input type="date" name="ngaytao" class="form-control" id="exampleInputPassword1" required placeholder="Ngày tạo">
                    <br>

                    <label for="exampleInputPassword1">Ngày hết hạn</label>
                    <input type="date" name="ngayhethan" class="form-control" id="exampleInputPassword1" required placeholder="Ngày hết hạn">
                    <br>
                                       
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="submit" class="btn btn-primary" name="btn-themkm" value="Thêm khuyến mãi">
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
              </form>
            </div>
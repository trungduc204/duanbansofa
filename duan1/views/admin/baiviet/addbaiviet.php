<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm Bài Viết</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="admin.php?act=addbaiviet">
                <div class="card-body">
                  <div class="form-group">                  
                    <label for="exampleInputPassword1">Tên bài viết</label>
                    <input type="text" name="tenbaiviet" class="form-control" id="exampleInputPassword1" required placeholder="Tên bài viết">
                    <br>

                    <label for="exampleInputPassword1">Nội dung</label>
                    <input type="textarea" name="noidung" class="form-control" id="exampleInputPassword1" required placeholder="Nội dung">
                    <br>

                    <label for="exampleInputPassword1">Ngày đăng</label>
                    <input type="date" name="ngaydang" class="form-control" id="exampleInputPassword1" required placeholder="Ngày tạo">
                    <br>

                    <label for="exampleInputPassword1">Ảnh</label>
                    <input type="file" name="anh1" class="form-control" id="exampleInputPassword1" required placeholder="Chọn ảnh">
                    <br>
                                       
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="submit" class="btn btn-primary" name="btn-thembv" value="Thêm Bài viết">
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
              </form>
            </div>
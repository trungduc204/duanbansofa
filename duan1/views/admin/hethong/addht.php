<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm thông tin hệ thống</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="admin.php?act=addhethong">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên cửa hàng</label>
                    <input type="text" name="ten_cua_hang" class="form-control" id="exampleInputEmail1" required placeholder="Tên cửa hàng">
                    <br>
                    
                    <label for="exampleInputPassword1">Số điện thoại</label>
                    <input type="text" name="sdt" class="form-control" id="exampleInputPassword1" required placeholder="Số điện thoại">
                    <br>
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" required placeholder="Email">
                    <br>
                    <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" name="dia_chi" class="form-control" id="exampleInputPassword1" required placeholder="Địa chỉ">
                    <br>
                    <label for="exampleInputPassword1">Logo cửa hàng</label>
                <input type="file" id="logo" name="logo" accept="image/*">
                   
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
                </div>
              </form>
            </div>
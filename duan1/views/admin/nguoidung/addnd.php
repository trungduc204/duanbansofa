<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm người dùng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="admin.php?act=addnd" enctype="multipart/form-data" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên người dùng</label>
                    <input type="text" name="ten_nhan_vien" class="form-control" id="exampleInputEmail1"  placeholder="Tên nhân viên">
                    <br>
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1"  placeholder="Email">
                    <br>
                    <label for="exampleInputEmail1">Mật khẩu</label>
                    <input type="text" name="mat_khau" class="form-control" id="exampleInputEmail1"  placeholder="Mật khẩu">
                    <br>
                    <label for="exampleInputEmail1">Ảnh</label>
                    <input type="file" name="avt" class="form-control" id="exampleInputEmail1"  >
                    <br>
                    <label for="exampleInputEmail1">Quyền</label>
<select name="quyen" class="form-control" id="exampleInputEmail1">
    <option value="1">Admin</option>
    <option value="2">Nhân viên</option>
</select>
<br>
                    <br>
                    <label for="exampleInputEmail1">Số điện thoại </label>
                    <input type="text" name="sdt" class="form-control" id="exampleInputEmail1"  placeholder="Số điện thoại">
                    <br>
                    <label for="exampleInputEmail1">Địa chỉ</label>
                    <input type="text" name="dia_chi" class="form-control" id="exampleInputEmail1" placeholder="Địa chỉ">
                    <br>
                    <label for="exampleInputEmail1">Ngày sinh</label>
                    <input type="date" name="ngay_sinh" class="form-control" id="exampleInputEmail1" placeholder="Ngày sinh">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="submit" name="themnd"class="btn btn-primary" value="Thêm người dùng"></input>
                </div>
              </form>
            </div>
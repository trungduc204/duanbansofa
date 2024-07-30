<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm khách hàng</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data" action="?act=addkhachhang">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên khách hàng</label>
                <input type="text" name="ten_khach_hang" class="form-control" id="exampleInputEmail1" required placeholder="Tên khách hàng">
                <br>
                <label for="name" class="form-label">Mật khẩu</label>
                <input type="text" class="form-control" id="mat_khau" placeholder="Nhập mật khẩu" name="mat_khau" />
                <br>
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input type="text" name="dia_chi" class="form-control" id="exampleInputEmail1" required placeholder="Địa chỉ">
                <br>

                <label for="exampleInputPassword1">Ngày sinh</label>
                <input type="date" name="ngay_sinh" class="form-control" id="exampleInputPassword1" required placeholder="Ngày sinh">
                <br>
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" name="sdt" class="form-control" id="exampleInputEmail1" required placeholder="Số điện thoại">
                <br>
                <label for="exampleInputPassword1">Email</label>
                <br>
                <input type="text" name="email" class="form-control" id="exampleInputPassword1" required placeholder="Email">
                <br>
                <label for="exampleInputPassword1">Avatar</label>
                <input type="file" id="avt" name="avt" accept="image/*">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="btnsubmit">Thêm tài khoản</button>
        </div>
    </form>
</div>
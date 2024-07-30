<div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách người dùng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Ảnh</th>
                    <th>Quyền</th>
                    <th>SDT</th>
                    <th>Địa chỉ</th>
                    <th>Ngày sinh</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
              
                  <tr>
                  <?php
foreach ($listnd as $nguoidung) {
    extract($nguoidung);
    $xoand = "admin.php?act=soft_deletend&ma_nhan_vien=".$ma_nhan_vien;
    $suand = "admin.php?act=suand&ma_nhan_vien=".$ma_nhan_vien;

    // Chuyển đổi giá trị quyền thành văn bản tương ứng
    $quyenText = ($quyen == 1) ? 'Admin' : 'Nhân viên';

    echo '<tr>
            <td>'.$ma_nhan_vien.'</td>
            <td>'.$ten_nhan_vien.'</td>
            <td>'.$email.'</td>
            <td>'.$mat_khau.'</td>
            <td>'.$avt.'</td>
            <td>'.$quyenText.'</td>
            <td>'.$sdt.'</td>
            <td>'.$dia_chi.'</td>
            <td>'.$ngay_sinh.'</td>
            <td class="project-actions text-right">
                <a class="btn btn-info btn-sm" href="'.$suand.'">
                    <i class="fas fa-pencil-alt"></i> Sửa
                </a>
                <a class="btn btn-danger btn-sm" href="'.$xoand.'">
                    <i class="fas fa-trash"></i> Xóa
                </a>
            </td>
          </tr>';
}
?>

                    <!-- <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="index.php?act=updatebaiviet">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                                </i>
                              Xóa
                          </a>
                      </td>
                  </tr> -->
                
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
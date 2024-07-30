<div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách bình luận</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Mã sản phẩm</th>
                    <th>Mã khách hàng</th>
                    <th>Ngày bình luận</th>
                    <!-- <th>Vote</th> -->
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($listbl as $binhluan) {
                        extract($binhluan);
                       
                        $deletebl = "admin.php?act=deletebl&ma_binh_luan=" . $ma_binh_luan;
                echo '  <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $ma_binh_luan . '</td>
                <td>' . $noi_dung . '</td>
                <td>' . $ma_san_pham . '</td>
                <td>' . $ma_khach_hang . '</td>
                <td>' . $ngay_binh_luan. '</td>
           
                <td class="project-actions text-right">
                      
                <a class="btn btn-danger btn-sm" href="' . $deletebl .'"onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')">
                          <i class="fas fa-trash">
                          </i>
                          Xóa
                      </a>
                  </td>
              </tr>
              ';
             
            
                    }
                   
                ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
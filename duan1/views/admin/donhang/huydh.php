<div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách đơn hàng bị hủy</h3>
              </div>
              <!-- /.card-header -->
              <form action="index.php?act=listsp" method="POST">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>MÃ ĐƠN HÀNG </th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>MÃ KHÁCH HÀNG</th>
                    <th>TRẠNG THÁI ĐƠN</th>
                    <th>THÀNH TIỀN </th>
                    <th>HỌ TÊN</th>
                    <th>SDT</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      foreach ( $listdhhuy as $donhang) {
                          extract($donhang);
                          $suadh="admin.php?act=suadh&ma_don_hang=".$ma_don_hang;
                          echo'<tr>
                            <td>'.$ma_don_hang.'</td>
                            <td>'.$ngay_dat_hang.'</td>
                            <td>'.$ma_khach_hang.'</td>
                            <td>'.$trang_thai_don.'</td>
                            <td>'.$thanh_tien.'</td>
                            <td>'.$ho_ten.'</td>
                            <td>'.$sdt.'</td>
                            <td>'.$email.'</td>
                            <td>'.$dia_chi.'</td>
                          
                            <td class="project-actions text-right">
                                  <a class="btn btn-info btn-sm" href="'.$suadh.'">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                      Cập nhật
                                  </a><br><br>
                                  </a><br><br>
                              </td>
                          </tr>';

                         
                      } 
                  ?>
              
                  
                
                  </tfoot>
                </table>
              </div>
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
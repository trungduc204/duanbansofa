<div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách đơn hàng</h3>
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
                      foreach ($listdonhang as $donhang) {
                          extract($donhang);
                          $suadh="admin.php?act=suadh&ma_don_hang=".$ma_don_hang;?>
                          <tr>
                            <td><?=$ma_don_hang ?></td>
                            <td><?=$ngay_dat_hang?></td>
                            <td><?=$ma_khach_hang?></td>
                             <?php
                                    if ($trang_thai_don == 0) {
                                        ?>
                                        <td>
                                            <span class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-warning border-0 text-capitalize fs-12">Chờ xử lí</span>
                                        </td>
                                        <?php
                                    } if($trang_thai_don == 4){?>
                                          <td>
                                            <span class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-warning border-0 text-capitalize fs-12">Đã xác nhận</span>
                                        </td>
                                        <?php
                                    } elseif ($trang_thai_don == 1) {
                                        ?>
                                        <td>
                                            <span class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-success border-0 text-capitalize fs-12">Đang giao hàng</span>
                                        </td>
                                        <?php
                                    } elseif ($trang_thai_don == 2) {
                                        ?>
                                        <td>
                                            <span class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-danger border-0 text-capitalize fs-12">Đã nhận hàng</span>
                                        </td>
                                        <?php
                                    } elseif ($trang_thai_don == 3) {
                                        ?>
                                        <td>
                                            <span class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-danger border-0 text-capitalize fs-12">Đơn hàng đã bị hủy</span>
                                        </td>
                                        <?php
                                    }
                                    ?>
                            <td><?php echo number_format($thanh_tien,0, ',', '.') . 'đ' ?></td>
                            <td><?=$ho_ten?></td>
                            <td><?=$sdt?></td>
                            <td><?=$email?></td>
                            <td><?=$dia_chi?></td>
                          
                          
                            <td class="project-actions text-right">
                                  <a class="btn btn-info btn-sm" href="<?=$suadh?>">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                      Chi tiết
                                  </a><br><br>
                                  </a><br><br>
                              </td>
                          </tr>

                         
                    <?php  } 
                  ?>
              
                  
                
                  </tfoot>
                </table>
              </div>
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
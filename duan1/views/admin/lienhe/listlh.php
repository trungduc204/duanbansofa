<div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách liên hệ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>MÃ KHÁCH HÀNG</th>
                    <th>NỘI DUNG</th>
                    <th>TRANG THÁI</th>
                    <!-- <th>Ngày hết hạn</th> -->
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach ($listlienhe as $lienhe) {
                          extract($lienhe);
                          
                          $xoalh="index.php?act=deletelienhe&id=".$id;
                          echo'
                              <tr>
                                <td>'.$id.'</td>
                                <td>'.$ma_khach_hang.'</td>
                                <td>'.$noi_dung.'</td>
                                <td>'.$trang_thai.'</td>
                              
                                <td class="project-actions text-right">
                                    
                                      <a class="btn btn-danger btn-sm" href="'.$xoalh.'">
                                          <i class="fas fa-trash">
                                          </i>
                                          Xóa
                                      </a>
                                  </td>
                              </tr>';
                        }                  
                    ?>
              
                  
                
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
<div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách khuyến mãi</h3>
              </div>
              <!-- /.card-header -->
              <form action="#" method="POST">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Mã khuyến mãi</th>
                    <th>Nội dung</th>
                    <th>Ngày tạo</th>
                    <th>Ngày hết hạn</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      foreach ($listkhuyenmai as $khuyenmai) {
                          extract($khuyenmai);
                          $suakm="admin.php?act=suakm&id_km=".$id_km;
                          $xoakm="admin.php?act=xoakm&id_km=".$id_km;
                          echo '<tr>
                                <td>'.$id_km.'</td>
                                <td>'.$ma_km.'</td>
                                <td>'.$noi_dung.'</td>
                                <td>'.$ngay_tao.'</td>
                                <td>'.$ngay_het_han.'</td>
                                <td class="project-actions text-right">
                                      <a class="btn btn-info btn-sm" href="'.$suakm.'">
                                          <i class="fas fa-pencil-alt">
                                          </i>
                                          Sửa
                                      </a>
                                      <a class="btn btn-danger btn-sm" href="'.$xoakm.'">
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
                  </form>    
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
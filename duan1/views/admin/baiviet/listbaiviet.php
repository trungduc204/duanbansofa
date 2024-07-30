<div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách bài viết</h3>
              </div>
              <!-- /.card-header -->
              <form action="#" method="POST">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên bài viết</th>
                    <th>Nội dung</th>
                    <th>Ngày đăng</th>
                    <th>Ảnh</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      foreach ($listbaiviet as $baiviet) {
                          extract($baiviet);
                          $suabv="admin.php?act=suabv&id_bai_viet=".$id_bai_viet;
                          $xoabv="admin.php?act=xoabv&id_bai_viet=".$id_bai_viet;
                          $hinhpart = "img/".$anh1;
                          if(is_file($hinhpart)){
                              $hinh="<img src='".$hinhpart."' height='80'>";
                          } else{
                              $hinh= "no photo";
                          }
                          echo '<tr>
                                <td>'.$id_bai_viet.'</td>
                                <td>'.$ten_bai_viet.'</td>
                                <td>'.$noi_dung.'</td>
                                <td>'.$ngay_dang.'</td>
                                <td>'.$anh1.'</td>
                                <td class="project-actions text-right">
                                      <a class="btn btn-info btn-sm" href="'.$suabv.'">
                                          <i class="fas fa-pencil-alt">
                                          </i>
                                          Sửa
                                      </a>
                                      <a class="btn btn-danger btn-sm" href="'.$xoabv.'">
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
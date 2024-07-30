<div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Thông tin hệ thống</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>TÊN CỬA HÀNG</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>LOGO</th>
                    <!-- <th>Ngày hết hạn</th> -->
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach ( $listht as $ht) {
                          extract($ht);
                          // $logo = $ht['logo'];
                          $hinhpath = "public/dist/img/hethong/.." . $logo;
                            if (is_file($hinhpath)) {
                             $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
                         } else {
                             $hinhpath = "No file img!";
                         }
                          
                          $suaht="admin.php?act=updateht&id_ht=".$id_ht;
                          echo'
                              <tr>
                                <td>'.$id_ht.'</td>
                                <td>'.$ten_cua_hang.'</td>
                                <td>'.$sdt.'</td>
                                <td>'.$email.'</td>
                                <td>'.$dia_chi.'</td>
                                <td>'. $hinhpath.'</td>                                                                    
                              
                                <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="admin.php?act=addhethong">
                                <i class="fas fa-folder">
                                </i>
                                Thêm
                            </a>
                            
                                <a class="btn btn-info btn-sm" href="'. $suaht .'">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Sửa
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
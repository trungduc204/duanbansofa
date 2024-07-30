<div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách khách hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>SĐT</th>
                    <th>Email</th>
                 
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
              
                  <?php  foreach($arr as $khachhang){
                  extract($khachhang);
                  $khoiphuc = "admin.php?act=khoiphuckh&ma_khach_hang=" . $ma_khach_hang;
                  $delete_khachhang = "admin.php?act=delete_khachhang&ma_khach_hang=" . $ma_khach_hang;
                //   $hinhpath = "../../upload/" . $avt;
                //   if (is_file($hinhpath)) {
                //     $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
                // } else {
                //     $hinhpath = "No file img!";
                // }
                   echo ' <tr>
                   <td><input type="checkbox" name="" id=""></td>
                   <td>' .$ma_khach_hang. '</td>
                   <td>' .$ten_khach_hang. '</td>
                   <td>' .$dia_chi. '</td>
                   <td>' .$sdt. '</td>
                   <td>' .$email. '</td>
                 

                   <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="' . $khoiphuc .'""onclick="return confirm(\'Bạn có chắc chắn muốn khôi phục\')">
                             <i class="fas fa-folder">
                             </i>
                             Khôi phục
                         </a>
                         <a class="btn btn-info btn-sm" href"">
                             <i class="fas fa-pencil-alt">
                             </i>
                             Sửa
                         </a> 
                         <a class="btn btn-danger btn-sm" href="' . $delete_khachhang .'"onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')">
                             <i class="fas fa-trash">
                             </i>
                             Xóa
                         </a>
                     </td>
                 </tr>';
                
                }?>  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
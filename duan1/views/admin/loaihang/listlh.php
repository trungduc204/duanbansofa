
<div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách loại hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên loại hàng</th>
                    <th>Mô tả</th>
                    
                    <!-- <th>Ngày hết hạn</th> -->
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
              
                 <?php foreach ($listlh as $key =>$value): ?>
                  <?php 
                    $anh = $value['anh'];
                     $hinhpath = "public/dist/img/loaihang/.." . $anh;
                       if (is_file($hinhpath)) {
                        $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
                    } else {
                        $hinhpath = "No file img!";
                    }?>
                  <tr>
                    <th><?php echo $key + 1; ?></th>
                    <td><?php echo $value['ten_loai_hang']; ?></td>
                    <td><?php echo $value['mo_ta']; ?></td>
                    <td><?php echo $hinhpath ?></td>
                    <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="admin.php?act=addloaihang">
                              <i class="fas fa-folder">
                              </i>
                              Thêm
                          </a>
                      
                          <a class="btn btn-info btn-sm" href="?act=capnhatlh&ma_loai_hang=<?php echo $value['ma_loai_hang']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                          <a class="btn btn-danger btn-sm" href="?act=deleteloaihang&ma_loai_hang=<?php echo $value['ma_loai_hang']?>">
                              <i class="fas fa-trash">
                              </i>
                              Xóa
                          </a>
                      </td>
                  </tr>
                 <?php endforeach; ?>
                
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
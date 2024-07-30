<div class="col-12">

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Danh sách sản phẩm</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Mã loại hàng</th>
            <th>Mô tả </th>
            <th>Ngày thêm </th>
            <th>Đơn giá</th>
            <th>Số lượng </th>
            <th>Ảnh </th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <?php
          foreach ($listsp as $sanpham) {
            extract($sanpham);
            $anh = $sanpham['anh'];
            $hinhpath = "public/dist/img/" . $anh;
            if (is_file($hinhpath)) {
                $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
            } else {
                $hinhpath = "No file img!";
            }
            $xoasp = "admin.php?act=soft_deletesp&ma_san_pham=" . $ma_san_pham;
            $suasp = "admin.php?act=suasp&ma_san_pham=" . $ma_san_pham;
            echo '<tr>
                    <td>' . $ma_san_pham . '</td>
                    <td>' . $ten_san_pham . '</td>
                    <td>' . $ten_loai_hang . '</td>
                    <td>' . $mo_ta . '</td>
                    <td>' . $ngay_them . '</td>
                    <td>' . $don_gia . '</td>
                    <td>' . $so_luong . '</td>
                    <td>' . $hinhpath . '</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="admin.php?act=addsp">
                            <i class="fas fa-folder"></i> Thêm
                        </a>
                        <a class="btn btn-info btn-sm" href="' . $suasp . '">
                            <i class="fas fa-pencil-alt"></i> Sửa
                        </a>
                        <a class="btn btn-danger btn-sm" href="' . $xoasp . '">
                            <i class="fas fa-trash"></i> Xóa
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
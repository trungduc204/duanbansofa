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
            foreach ($listsp as $sp) {
              extract($sp);
              $xoasp = "admin.php?act=deletesp&ma_san_pham=" . $ma_san_pham;
              $khoiphucsp = "admin.php?act=khoiphucsp&ma_san_pham=" . $ma_san_pham;
              echo '<tr>
                                <td>' . $ma_san_pham . '</td>
                                <td>' . $ten_san_pham . '</td>
                                <td>' . $ma_loai_hang . '</td>
                                <td>' . $mo_ta . '</td>
                                <td>' . $ngay_them . '</td>
                                <td>' . $don_gia . '</td>
                                <td>' . $so_luong . '</td>
                                <td>' . $anh . '</td>
                                <td><a class="btn btn-primary btn-sm" href="'.$khoiphucsp.'">Khôi phục</a>
                                <a class="btn btn-danger btn-sm" href="'.$xoasp.'">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a></td>
                 
                      </tr>
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
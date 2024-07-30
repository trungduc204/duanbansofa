<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách banner</h3>
        </div>
        <!-- /.card-header -->
        <form action="#" method="POST">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên banner</th>
                            <th>Ảnh</th>
                            <th>Link</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbanner as $bn) {
                            extract($bn);
                            $anh = $bn['anh'];
                            $hinhpath = "public/dist/img/banner/.." . $anh;
                            $suabn = "admin.php?act=suabn&id=" . $id;
                            $xoabn = "admin.php?act=xoabn&id=" . $id;

                            echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $ten_banner . '</td>
                                <td><img src="' . $hinhpath . '" height="80"></td>
                                <td>' . $link . '</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="' . $suabn . '">
                                        <i class="fas fa-pencil-alt"></i> Sửa
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="' . $xoabn . '">
                                        <i class="fas fa-trash"></i> Xóa
                                    </a>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                    </tfoot>
                </table>
            </div>
        </form>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

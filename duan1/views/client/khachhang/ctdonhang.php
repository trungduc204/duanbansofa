<?php
// foreach($data as $value){
//     extract($value);
// }
// ShowArray($data);
$data3 = hiensp($ma_san_pham);
foreach($data3 as $value){

}
$data=donhang_list($ma_don_hang);
foreach($data as $vl){
  extract($vl);
}
// $data1=hien_kh();
// foreach($data1 as $vl){
//   extract($vl);
// }


?>
<style>
.avatar-lg {
    width: 100px;
    height: 100px;
}

</style>
<main id="content" class="bg-body-tertiary-01 d-flex flex-column main-content">
<a href="index.php?act=account">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6"height=30px>
<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"></path>
                                                                        </svg>
                                                                        <span>Trở lại</span>
</a>
  <div class="dashboard-page-content">
    <div class="row mb-9 align-items-center justify-content-between">
      <div class="col-sm-6 mb-8 mb-sm-0">
        <h2 class="fs-4 mb-0">Chi tiết đơn hàng</h2>
        <p class="mb-0">Chi tiết đơn mà bạn đã đặt.</p>
      </div>
    </div>
    <div class="card rounded-4">
      <header class="card-header bg-transparent p-7">
        <div class="row align-items-center">
          <div class="col-md-6 mb-lg-0 mb-6">
            <span class="d-inline-block">
              <i class="far fa-calendar me-3"></i>Ngày Đặt <?php echo $ngay_dat_hang ?> </span>
            <br>
            <small class="text-muted">Mã Đơn hàng: #<?php echo $ma_don_hang?></small>
            <span class="d-inline-block w-50 text-end fs-20 fw-semibold">
                            <?php
                                    if ($trang_thai_don == 0) {
                                        ?>
                                        <td>
                                            <span class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-warning border-0 text-capitalize fs-12">Chờ xử lí</span>
                                        </td>
                                        <?php
                                    } elseif ($trang_thai_don == 1) {
                                        ?>
                                        <td>
                                            <span class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-success border-0 text-capitalize fs-12">Đang giao hàng</span>
                                        </td>
                                        <?php
                                    }elseif($trang_thai_don == 4){?>
                                      <td>
                                      <span class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-success border-0 text-capitalize fs-12">Đã xác nhận</span>
                                  </td>
                                    <?php }
                                     elseif ($trang_thai_don == 2) {
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
                            </span>
          </div>
          <div class="col-md-6 ml-auto d-flex justify-content-md-end flex-wrap">
            <a class="btn btn-dark print ms-5 my-3" href="#">
              <i class="far fa-print"></i>
            </a>
          </div>
        </div>
      </header>
      <div class="card-body p-7">
        <div class="row mb-8 mt-4 order-info-wrap">
          <div class="col-md-4 mb-md-0 mb-7">
            <div class="d-flex flex-nowrap">
              <div class="icon-wrap">
                <span class="rounded-circle px-6 py-5 bg-green-light me-6 text-green d-inline-block">
                  <i class="fas fa-user px-1"></i>
                </span>
              </div>
             
              <div class="media-body">
                <h6 class="mb-4">Thông tin khách hàng</h6>
                <p class="mb-4"> <?php echo $ho_ten?> <br><?php echo $email?> <br> <?php echo $sdt?> </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-md-0 mb-7">
            <div class="d-flex flex-nowrap">
              <div class="icon-wrap">
                <span class="rounded-circle p-5 bg-green-light me-6 text-green d-inline-block">
                  <i class="fas fa-truck px-2"></i>
                </span>
              </div>
              <div class="media-body">
                <h6 class="mb-4">Địa chỉ thanh toán</h6>
                <p class="mb-4"> <?php echo $dia_chi?> </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="d-flex flex-nowrap">
              <div class="icon-wrap">
                <span class="rounded-circle p-5 bg-green-light me-6 text-green d-inline-block">
                  <i class="fas fa-truck px-2"></i>
                </span>
              </div>
              <div class="media-body">
                <h6 class="mb-4">Địa chỉ giao hàng</h6>
                <p class="mb-4"> <?php echo $dia_chi?> <br> <?php echo $sdt?>  </p>
              </div>
            </div>
          </div>
        </div>
     
        <div class="row">
          <div class="col-lg-7">
            <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>Sản Phẩm</th>
                    <th>Đơn Giá</th>
                    <th>Số lượng</th>
                    <th class="text-end">Thành Tiền</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                 <?php   
                         foreach($data2 as $vl){
                          extract($vl);
                        
                            // addOrderDetail($idBill, $item['id'], $item['price'], $item['quantity'], $item['price'] * $item['quantity']);
                                                                       
                ?> 
                    <td>
                      <div class="d-flex align-items-center flex-nowrap">
                        <!-- <a href="index.php?act=ctsp&ma_san_pham=<?php echo $ma_san_pham ?>"> -->
                          <img src="public/dist/img/<?=$anh?>" alt="" width="60px" height="60px">
                        </a>
                        <a href="index.php?act=ctsp&ma_san_pham=<?php echo $ma_san_pham ?>"class="ms-6">
                          <p class="fw-semibold text-body-emphasis mb-0"><?php echo $ten_san_pham ?></p>
                        </a>
                      </div>
                    </td>
                    <td><span><?php echo number_format($don_gia, 0, ',', '.').'đ'?></span></td>
                    <td><?php echo $so_luong?></td>
                    <td class="text-end"><span><?php echo number_format($thanh_tien, 0, ',', '.').'đ'?></span></td>
                    
                  </tr>
                  <?php

}
?>  
                  <tr>
                    <td colspan="4">
                      <div class="d-flex flex-column align-items-end justify-content-end">
                        <div class="mw-40 w-40">
                          <div class="d-flex w-100">
                          <?php foreach($data as $item){
                              extract($item);

                          ?>
          

                          </div>
                          <div class="d-flex w-100 mb-5">
                            <span class="d-inline-block w-50">Tổng tiền phải thanh toán:</span>
                            <span class="d-inline-block w-50 text-end fs-5 fw-semibold"><b><?=number_format($thanh_tien, 0, ",", "."); ?> ₫</b></span>
                          </div>
                          <div class="d-flex w-100">
                          </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
         <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="box shadow-sm bg-body-tertiary p-6">
              <h6 class="mb-6">Phương thức thanh toán</h6>
              <div>
              <div class="d-flex">
    <?php
    // if ($phuong_thuc_thanh_toan == 0) {
    ?>
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <span class="avatar avatar-rounded avatar-lg" data-avatar-size="100">
                    <img class="avatar avatar-rounded avatar-lg" src="public/dist/img//shipcod.png" loading="lazy" alt="COD">
                </span>
                <div class="ltr:ml-2 rtl:mr-2">
                    <h6>COD</h6>
                    <span>Thanh Toán Khi nhận Hàng</span>
                </div>
            </div>
        </div>
    <?php
    // } elseif ($phuong_thuc_thanh_toan == 1) {
    ?>
        <!-- <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <span class="avatar avatar-rounded avatar-lg" data-avatar-size="100">
                    <img class="avatar avatar-rounded avatar-lg" src="admin/img/others/cc.png" loading="lazy" alt="Credit Card">
                </span>
                <div class="ltr:ml-2 rtl:mr-2">
                    <h6>CC</h6>
                    <span>Thẻ Tín Dụng</span>
                </div>
            </div>
        </div> -->
    <?php
    // } else {
    ?>
        <!-- <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <span class="avatar avatar-rounded avatar-lg" data-avatar-size="100">
                    <img class="avatar avatar-rounded avatar-lg" src="admin/img/others/vnpay.png" loading="lazy" alt="VNpay">
                </span>
                <div class="ltr:ml-2 rtl:mr-2">
                    <h6>VNpay</h6>
                    <span>VNpay QR</span>
                </div>
            </div>
        </div> -->
    <?php
    // }
    ?>
</div>


              </div>
            </div>
            <div class="h-25 pt-8">
              <div class="mb-6">
                <!-- <label class="mb-5 fs-13px ls-1 fw-semibold text-uppercase">Ghi Chú</label>
                <textarea class="form-control" name="notes" id="notes" placeholder="" readonly><?php echo $ghi_chu_kh?></textarea> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="pt-6 pb-10 footer-dashboard mt-auto">
    <div class="row">
      <div class="col-sm-6 text-sm-start text-center">
        <script>
          document.write(new Date().getFullYear());
        </script> © Glowing - Beauty & Cosmetics Shop HTML Template .
      </div>
      <div class="col-sm-6 text-sm-end text-center"> All rights reserved </div>
    </div>
  </footer>
</main>
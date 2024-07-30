<?php
    if(isset($_SESSION['ma_khach_hang'])){
      $ma_khach_hang=$_SESSION['ma_khach_hang'];
        $data = hienkh($ma_khach_hang);
        extract($data);  
    }
?> 
<main id="content" class="wrapper layout-page">
  <section class="z-index-2 position-relative pb-2 mb-12">
    <div class="bg-body-secondary mb-3">
      <div class="container">
        <nav class="py-4 lh-30px" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center py-1 mb-0">
            <li class="breadcrumb-item">
              <a title="Home" href="index.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
              <a title="Shop" href="shop-layout-v2.html">Cửa hàng</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <section class="container pb-14 pb-lg-19">
    <div class="text-center">
      <h2 class="mb-6">Thanh Toán</h2>
    </div>
    <!-- <div class="sub-order">
        <h2>Đơn hàng</h2>
        <table >
            <tr>
                <th>Sản phẩm</th>
                <th>Thành tiền</th>
            </tr>
            <?php 
                // print_r($cart);
                foreach ($cart as $item) {
                  extract($item);
            ?>
            <tr>
                <td>
                <a href="#" name="ten_san_pham" class><?=$ten_san_pham?> <span class="text-body"> x<?=$quantity?></span>
                    </a>
                <td>       <div class="ms-auto">
                    <p class="fs-14px text-body-emphasis mb-0 fw-bold"><?=$don_gia?></p>
                  </div>₫</td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td><b>Tổng tiền</b></td>
                <td><b><?=number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</b></td>
            </tr>
        </table>
    </div>
    -->
    
    <form class="pt-12" action="index.php?act=checkout" method="POST">
      <div class="row .$mr.">
        <div class="col-lg-4 pb-lg-0 pb-14 order-lg-last">
          <div class="card border-0 rounded-0 shadow">
            
            <div class="card-header px-0 mx-10 bg-transparent py-8">
            <h4 class="fs-4 mb-8">Tổng quan đơn hàng</h4>
            <table >
            <tr>
                <th>Sản phẩm</th>
                <th>Thành tiền</th>
            </tr>
            <?php 
                // print_r($cart);
                foreach ($cart as $item) {
                  extract($item);
            ?>
            <tr>
                <td>
                <a href="#" name="ten_san_pham" class><?=$ten_san_pham?> <span class="text-body"> x<?=$quantity?></span>
                    </a>
                <td>       <div class="ms-auto">
                    <p class="fs-14px text-body-emphasis mb-0 fw-bold"><?=$don_gia?></p>
                  </div>₫</td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td><b>Tổng tiền</b></td>
                <td><b><?=number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</b></td>
            </tr>
        </table>
           
            
            </div>
          
            <div class="card-footer bg-transparent py-5 px-0 mx-10">
              <div class="d-flex align-items-center fw-bold mb-6">
                <span class="text-body-emphasis p-0">Total pricre:</span>
                <span class="d-block ms-auto text-body-emphasis fs-4 fw-bold"><?=number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</b></span>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-lg-8 order-lg-first pe-xl-20 pe-lg-6">
          <div class="checkout">
            <p>Bạn có mã giảm giá? <a data-bs-toggle="collapse" href="#collapsecoupon" role="button" aria-expanded="false" aria-controls="collapsecoupon">Bấm vào đây để áp dụng</a>
            </p>
            <div class="collapse" id="collapsecoupon">
              <div class="card mw-60 border-0">
                <div class="card-body py-10 px-8 my-10 border">
                  <p class="card-text text-body-emphasis mb-8"> Nếu bạn có mã giảm giá hãy nhập nó.</p>
                  <div class="input-group position-relative">
                    <input type="code" class="form-control bg-body rounded-end" placeholder="Mã giảm giá">
                    <button type="submit" name="code" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary"> Áp dụng mã giảm giá </button>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="fs-4 pt-4 mb-7">Thông tin nhân hàng</h4>
           <?php
           if(empty($data)){
           
           ?>
            <div class="mb-7">
              <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Họ Và tên</label>
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-7">
                  <input type="text" class="form-control" id="first-name" name="name" placeholder="First Name" required>
                </div>
              </div>
            </div>
            <div class="mb-7">
              <div class="row">
                <div class="col-md-8 mb-md-0 mb-7">
                  <label for="street-address" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Địa Chỉ</label>
                  <input type="text" class="form-control" id="street-address" name="diachi" required>
                </div>
              </div>
            </div>
            <div class="mb-7">
              <div class="row">
                <div class="col-md-4 mb-md-0 mb-7">
                  <label for="city" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Huyện/Xã</label>
                  <input type="text" class="form-control" id="city" name="huyen" required>
                </div>
                <div class="col-md-4 mb-md-0 mb-7">
                  <label for="state" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Tỉnh</label>
                  <input type="text" class="form-control" id="state" name="tinh" required>
                </div>
                <div class="col-md-4">
                  <label for="zip" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Mã bưu chính</label>
                  <input type="text" class="form-control" id="zip" name="zip" required>
                </div>
              </div>
            </div>
            <div class="mb-7">
              <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Thông Tin liên hệ</label>
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-7">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control" id="phone" name="sdt" placeholder="Số điện thoại" required>
                </div>
              </div>
            </div>
            <div class="mt-6 mb-5 form-check">
              <input type="checkbox" class="form-check-input rounded-0 me-4" name="customCheck6" id="customCheck5">
              <label class="text-body-emphasis" for="customCheck5">
                <span class="text-body-emphasis">Địa chỉ thanh toán cùng với địa chỉ nhận hàng</span>
              </label>
            </div>
          </div>
            <?php
            }else{
            ?>
            <div class="mb-7">
              <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Họ Và tên</label>
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-7">
                  <input type="text" class="form-control" id="first-name" name="ten_khach_hang"  value="<?php  echo $ten_khach_hang ?>"  >
                </div>
              </div>
            </div>  
            <div class="mb-7">
              <div class="row">
                <div class="col-md-8 mb-md-0 mb-7">
                  <label for="street-address" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Địa Chỉ</label>
                  <input type="text" class="form-control" id="street-address" name="dia_chi"  value="<?php  echo $dia_chi ?>">
                </div>
              </div>    
            </div>
            <div class="mb-7">
              <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Thông Tin liên hệ</label>
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-7">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php  echo $email ?>"  >
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control" id="phone" name="sdt" placeholder="Số điện thoại"  value="<?php  echo $sdt ?>">
                </div>
              </div>
            </div>
            <div class="mt-6 mb-5 form-check">
              <input type="checkbox" class="form-check-input rounded-0 me-4" name="customCheck6" id="customCheck5">
              <label class="text-body-emphasis" for="customCheck5">
                <span class="text-body-emphasis">Địa chỉ thanh toán cùng với địa chỉ nhận hàng</span>
              </label>
            </div>
        </div>
            <?php
            }
            ?>

          <div class="checkout mb-7">
            <div class="mb-7">
              <h4 class="fs-4 mb-8 mt-12 pt-lg-1">Phương thức thanh toán</h4>
              <div class="nav nav-tabs border-0">
                <a class="btn btn-payment px-12 mx-2 py-6 me-7 my-3 nav-link" data-bs-toggle="tab" data-bs-target="#cod-tab">
                  <svg class="icon icon-paylay fs-32px text-body-emphasis">
                    <use xlink:href="#icon-delivery-1"></use>
                  </svg>
                  <span class="ms-3 text-body-emphasis fw-semibold fs-6">COD</span>
                </a>
                <!-- <a class="btn btn-payment px-12 mx-2 py-6 me-7 my-3 nav-link active" data-bs-toggle="tab" data-bs-target="#credit-card-tab">
               
                  <span class="ms-3 text-body-emphasis fw-semibold fs-6">Thẻ Tín dụng</span>
                </a> -->
                <!-- <a class="btn btn-payment px-12 mx-2 py-6 me-7 my-3 nav-link" data-bs-toggle="tab" data-bs-target="#vnpay-tab">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6" height="2em">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 6.75h.75v.75h-.75v-.75zM6.75 16.5h.75v.75h-.75v-.75zM16.5 6.75h.75v.75h-.75v-.75zM13.5 13.5h.75v.75h-.75v-.75zM13.5 19.5h.75v.75h-.75v-.75zM19.5 13.5h.75v.75h-.75v-.75zM19.5 19.5h.75v.75h-.75v-.75zM16.5 16.5h.75v.75h-.75v-.75z"></path>
                  </svg>
                  <span class="ms-3 text-body-emphasis fw-semibold fs-6">VNPay QR</span>
                </a> -->
              </div>
              <div class="tab-content mt-7">
                <div class="tab-pane active show fade" id="credit-card-tab">
                  <div class>
                    <!-- <div class="mb-7">
                      <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Mã số thẻ</label>
                      <div class="row align-items-center">
                        <div class="col-md-6 mb-md-0 mb-7">
                          <input name="creditCardText" type="text" class="form-control" placeholder="**** **** **** ****">
                        </div>
                        <div class="col-md-6"></div>
                      </div>
                    </div> -->
                    <!-- <div class="mb-7">
                      <div class="row align-items-end">
                        <div class="col-md-8">
                          <div class="row align-items-end">
                            <div class="col-md-6 mb-md-0 mb-7">
                              <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Tháng hết hạn</label>
                              <select name="inputMonth" id="inputMonth" class="form-select px-6 border-0">
                                <option selected>Month </option>
                                <option>01 </option>
                                <option>02 </option>
                                <option>03 </option>
                                <option>04 </option>
                                <option>05 </option>
                                <option>06 </option>
                                <option>07 </option>
                                <option>08 </option>
                                <option>09 </option>
                                <option>10 </option>
                                <option>11 </option>
                                <option>12 </option>
                              </select>
                            </div>
                            <div class="col-md-6 mb-md-0 mb-7">
                              <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase opacity-0 d-md-block d-none">Năm hết hạn</label>
                              <select name="inputYear" id="inputYear" class="form-select border-0 px-6">
                                <option selected>Year </option>
                                <option>2023 </option>
                                <option>2024 </option>
                                <option>2025 </option>
                                <option>2026 </option>
                                <option>2027 </option>
                                <option>2028 </option>
                                <option>2029 </option>
                                <option>2030 </option>
                                <option>2031 </option>
                                <option>2032 </option>
                                <option>2033 </option>
                                <option>2034 </option>
                                <option>2035 </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-md-4 mb-md-0 mb-7">
                          <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">CCV</label>
                          <input type="password" name="ccv" class="form-control bg-body-secondary">
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- <div class="tab-pane show fade" id="cod-tab">
                  <div class>
                    <div class="mb-7">
                      <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Bằng cách thanh toán khi nhận hàng nhân viên sẽ tự động liên hệ tới bạn trong thời gian sớm nhất</label>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="tab-pane show fade" id="vnpay-tab">
                  <div class>
                    <div class="mb-7">
                      <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Sau khi bấm đặt hàng thanh toán sẽ chuyển sang trang QR thanh toán</label>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <button type="submit" name="order_confirm" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary px-11 mt-md-7 mt-4">Đặt Hàng</button>
        </div>
      </div>
      </div>
    </form>
  </section>
</main>
<?php
// session_start();
//   $listlh = ds_loaihang();
// if(isset( $_SESSION['ten_khach_hang'] )){
//   $ten_khach_hang = $_SESSION['ten_khach_hang'] ;
// }
// if(isset( $_SESSION['email'] )){
//   $email = $_SESSION['email'] ;
// }
// if(isset( $_SESSION['sdt'] )){
//   $sdt = $_SESSION['sdt'] ;
// } 
// if(isset( $_SESSION['ma_khach_hang'] )){
//   $dia_chi = $_SESSION['ma_khach_hang'] ;
// }  
// if(isset( $_SESSION['dia_chi'] )){
//   $dia_chi = $_SESSION['dia_chi'] ;
// }

// ShowArray($data);
// foreach($data as $value){
//     extract($value);
// }

?> <main id="content" class="wrapper layout-page">
  <section class="z-index-2 position-relative pb-2 mb-12">
    <div class="bg-body-secondary mb-3">
      <div class="container">
        <nav class="py-4 lh-30px" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center py-1 mb-0">
            <li class="breadcrumb-item active" aria-current="page">
           <?php foreach ($listlh as $key=>$value) {
             if($ma_loai_hang==$value['ma_loai_hang']){
               echo ''.$value['ten_loai_hang'].'';
             }
      
            } ?>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <section class="container container-xxl pt-6 pb-13 pb-lg-20">
    <div class="row ">
      <div class="col-md-6 pe-lg-13">
        <div class="position-sticky top-0">
          <div class="row">
            <div class="col-xl-2 pe-xl-0 order-1 order-xl-0 mt-5 mt-xl-0">
              <div id="slide-thumb-5" class="slick-slider slick-slider-thumb ps-1 ms-n3 me-n4 mx-xl-0" data-slick-options="{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#slide-5&#34;,&#34;dots&#34;:false,&#34;focusOnSelect&#34;:true,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1260,&#34;settings&#34;:{&#34;vertical&#34;:false}}],&#34;slidesToShow&#34;:4,&#34;vertical&#34;:true}">
                <img src="#" data-src="public/dist/img/<?php echo $anh ?>
									" class="cursor-pointer lazy-image h-auto mx-3 mx-xl-0 px-0 mb-xl-7" width="540" height="720" alt>
                <img src="#" data-src="public/dist/img/<?php echo $anh1 ?>
									" class="cursor-pointer lazy-image h-auto mx-3 mx-xl-0 px-0 mb-xl-7" width="540" height="720" alt>
                <img src="#" data-src="public/dist/img/<?php echo $anh2 ?>
										" class="cursor-pointer lazy-image h-auto mx-3 mx-xl-0 px-0 mb-xl-7" width="540" height="720" alt>
                <img src="#" data-src="public/dist/img/<?php echo $anh3 ?>
											" class="cursor-pointer lazy-image h-auto mx-3 mx-xl-0 px-0 mb-xl-7" width="540" height="720" alt>
              </div>
            </div>
            <div class="col-xl-10 ps-xl-8 pe-xl-0 order-0 order-xl-1">
              <div class="position-relative">
                <div class="position-absolute z-index-2 w-100 d-flex justify-content-end">
                  <div class="p-6">
                    <a href="#" class="d-flex align-items-center justify-content-center product-gallery-action rounded-circle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Add to wishlist">
                      <svg class="icon fs-4">
                        <use xlink:href="#icon-star-light"></use>
                      </svg>
                    </a>
                    </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div id="slide-5" class="slick-slider slick-slider-arrow-inside slick-slider-dots-inside slick-slider-dots-light g-0" data-slick-options="{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#slide-thumb-5&#34;,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1,&#34;vertical&#34;:true}">
              
              <a href="" data-gallery="gallery5">
                  <img src="#" data-src=" public/dist/img/<?php echo $anh ?>" class="h-auto lazy-image" width="540" height="720" alt>
                </a>
                <a href="image/
											" data-gallery="gallery5">
                  <img src="#" data-src="public/dist/img/<?php echo $anh1 ?>
									" class="h-auto lazy-image" width="540" height="720" alt>
                </a>
                <a href="image/
												" data-gallery="gallery5">
                  <img src="#" data-src="public/dist/img/<?php echo $anh2 ?>
													" class="h-auto lazy-image" width="540" height="720" alt>
                </a>
                <a href="image/
													" data-gallery="gallery5">
                  <img src="#" data-src="public/dist/img/<?php echo $anh3 ?>
															" class="h-auto lazy-image" width="540" height="720" alt>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      extract($onesp);
      ?>
      <div class="col-md-6 pt-md-0 pt-10">
        <p class="d-flex align-items-center mb-6">
          <!-- <span class="text-decoration-line-through"> <?php echo number_format($don_gia, 0, ',', '.').'đ' ?> </span> -->
          <span class="fs-18px text-body-emphasis ps-6 fw-bold"> <?php echo number_format($don_gia, 0, ',', '.').'đ' ?> </span>
          <!-- <span class="badge text-bg-primary fs-6 fw-semibold ms-7 px-6 py-3"> 30%</span> -->
        </p>
        <h1 class="mb-4 pb-2 fs-4"><?php echo $ten_san_pham ?></h1>
        <div class="d-flex align-items-center fs-15px mb-6">
          <p class="mb-0 fw-semibold text-body-emphasis"><?php echo number_format($don_gia, 0, ',', '.').'đ' ?></p>
          <div class="d-flex align-items-center fs-12px justify-content-center mb-0 px-6 rating-result">
            <div class="rating">
              <div class="empty-stars">
                <span class="star">
                  <svg class="icon star-o">
                    <use xlink:href="#star-o"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon star-o">
                    <use xlink:href="#star-o"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon star-o">
                    <use xlink:href="#star-o"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon star-o">
                    <use xlink:href="#star-o"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon star-o">
                    <use xlink:href="#star-o"></use>
                  </svg>
                </span>
              </div>
              <div class="filled-stars" style="width: 100%">
                <span class="star">
                  <svg class="icon star text-primary">
                    <use xlink:href="#star"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon star text-primary">
                    <use xlink:href="#star"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon star text-primary">
                    <use xlink:href="#star"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon star text-primary">
                    <use xlink:href="#star"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon star text-primary">
                    <use xlink:href="#star"></use>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <a href="#" class="border-start ps-6 text-body">Có khách hàng bình Luận </a>
          <a href="#" class="border-start ps-6 text-body">Có khách hàng đã xem </a>
        </div>
        <!-- <form class="pb-8" action="" method="post"> -->
          <div class="row align-items-end">
          <!-- <form class="add-to-cart-form" action="index.php?act=cart" method="POST"> -->
                    <!-- Hidden input to store product ID -->
                    <input type="hidden" name="ma_san_pham" value="PH32">
                    <!-- Hidden input to store product name -->
                    <input type="hidden" name="ten_san_pham" value="sofa">
                    <!-- Hidden input to store product price -->
                    <!-- <input type="hidden" name="giam_gia" value="Giam 20%"> -->
                    <!-- Hidden input to store product image -->
                    <input type="hidden" name="anh" value="#">
            <div class="form-group col-sm-4">
              <div class="input-group position-relative w-100 input-group-lg">
                <a href="#" class="shop-down position-absolute translate-middle-y top-50 start-0 ps-7 product-info-2-minus">
                  <!-- <i class="far fa-minus"></i> -->
                </a>
                <input name="so_luong" type="number" id="number" class="product-info-2-quantity form-control w-100 px-6 text-center" value="1" required max="1">
                <a href="#" class="shop-up position-absolute translate-middle-y top-50 end-0 pe-7 product-info-2-plus">
                  <!-- <i class="far fa-plus"></i> -->
                </a>
              </div>
            </div>
            <?php
      if(isset($_SESSION['ten_khach_hang'])){
        ?>
            <div class="col-sm-8 pt-9 mt-2 mt-sm-0 pt-sm-0">
              <button type="" data-id="<?= $ma_san_pham ?>" class="btn-hover-bg-primary btn-hover-border-primary btn btn-lg btn-dark w-100" onclick="addtocart(<?= $ma_san_pham ?>,'<?= $ten_san_pham ?>',<?= $don_gia ?>)">Thêm Vào Giỏ Hàng </button>
            </div>
            <?php }else{?>
              <div class="col-sm-8 pt-9 mt-2 mt-sm-0 pt-sm-0">
              <button type="" data-id=""  class="btn-hover-bg-primary btn-hover-border-primary btn btn-lg btn-dark w-100" onclick="add()"><a href="index.php?act=login"></a>Thêm Vào Giỏ Hàng </button>
            </div>
            <?php   } ?>
          </div>
        <!-- </form> -->
        <!-- </form> -->
        <div class="d-flex align-items-center flex-wrap">
          <a href="#" class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
            <svg class="icon fs-5">
              <use xlink:href="#icon-star-light"></use>
            </svg>
            <span class="ms-4 ps-2">Thêm vào danh sách mong muốn</span>
          </a>
          <a href="#" class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
            <svg class="icon fs-5">
              <use xlink:href="#icon-ShareNetwork"></use>
            </svg>
            <span class="ms-4 ps-2">Chia Sẻ</span>
          </a>
        </div>
        <ul class="single-product-meta list-unstyled border-top pt-7 mt-7">
          <li class="d-flex mb-4 pb-2 align-items-center">
            <!-- <span class="text-body-emphasis fw-semibold fs-14px">Sô lượng trong kho:</span> -->
            <!-- <span class="ps-4"><?php echo $so_luong ?></span> -->
          </li>
          <li class="d-flex mb-4 pb-2 align-items-center">
            <!-- <span class="text-body-emphasis fw-semibold fs-14px">Thương Hiệu:</span>
            <span class="ps-4">W </span> -->
          </li>
        </ul>
        <div class="mt-13">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item pb-4">
              <h2 class="accordion-header" id="flush-headingOne">
                <a class="product-info-accordion text-decoration-none" href="#" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <span class="fs-4">Chi Tết sản phẩm</span>
                </a>
              </h2>
            </div>
            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="pt-8 pb-3"><?php echo $mo_ta ?> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <div class="border-top w-100 h-1px"></div>
  <section class="container container-xxl pt-15 pb-15 pt-lg-17 pb-lg-20">
    <div class="text-center">
      <h2 class="mb-12">Sản phẩm cùng loại</h2>
    </div>
    <div class="slick-slider" data-slick-options="{&#34;arrows&#34;:true,&#34;centerMode&#34;:true,&#34;centerPadding&#34;:&#34;calc((100% - 1440px) / 2)&#34;,&#34;dots&#34;:true,&#34;infinite&#34;:true,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:576,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:4}">
       <?php
        //  $i=0;
         foreach ($listspcl as $spcl){
           extract($spcl);
           $linksp="index.php?act=ctsp&ma_san_pham=".$ma_san_pham;
          //  $anh=$img_path.$anh;
        //    if(($i==2)||($i==5)||($i==8)){
        //     $mr="";
        // }else{
        //     $mr="mr";
        // }
          //  echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
              ?> 
              <div class="mb-6">
        <div class="card card-product grid-2 bg-transparent border-0">
          <figure class="card-img-top position-relative mb-7 overflow-hidden">
            <a href="index.php?act=ctsp&ma_san_pham=<?php echo $ma_san_pham?>" class="hover-zoom-in d-block" title="Shield Conditioner">
              <img src="#" data-src="public/dist/img/<?php echo $anh ?>" class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330" height="440">
            </a>
            <div class="position-absolute product-flash z-index-2 ">
              <span class="badge badge-product-flash on-sale bg-primary"><?php echo number_format($don_gia, 0, ',', '.').'đ' ?></span>
            </div>
            <div class="position-absolute d-flex z-index-2 product-actions  vertical">
              <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Add To Wishlist">
                <svg class="icon icon-star-light">
                  <use xlink:href="#icon-star-light"></use>
                </svg>
              </a>
              <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare" href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Compare">
                <svg class="icon icon-arrows-left-right-light">
                  <use xlink:href="#icon-arrows-left-right-light"></use>
                </svg>
              </a>
            </div>
            <a href="#" class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap">Thêm vào giỏ hàng</a>
          </figure>
          <div class="card-body text-center p-0">
            <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
              <!-- <del class=" text-body fw-500 me-4 fs-13px">200d</del> -->
              <ins class="text-decoration-none"><?php echo number_format($don_gia, 0, ',', '.').'đ' ?></ins>
            </span>
            <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
              <a class="text-decoration-none text-reset" href="index.php?act=ctsp&ma_san_pham=<?php echo $ma_san_pham?>"><?php echo $ten_san_pham?></a>
            </h4>
            <div class="d-flex align-items-center fs-12px justify-content-center">
              <div class="rating">
                <div class="empty-stars">
                  <span class="star">
                    <svg class="icon star-o">
                      <use xlink:href="#star-o"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star-o">
                      <use xlink:href="#star-o"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star-o">
                      <use xlink:href="#star-o"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star-o">
                      <use xlink:href="#star-o"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star-o">
                      <use xlink:href="#star-o"></use>
                    </svg>
                  </span>
                </div>
                <div class="filled-stars" style="width: 80%">
                  <span class="star">
                    <svg class="icon star text-primary">
                      <use xlink:href="#star"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star text-primary">
                      <use xlink:href="#star"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star text-primary">
                      <use xlink:href="#star"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star text-primary">
                      <use xlink:href="#star"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star text-primary">
                      <use xlink:href="#star"></use>
                    </svg>
                  </span>
                </div>
              </div>
              <span class="reviews ms-4 pt-3 fs-14px"><?php echo $luot_xem ?>lượt xem</span>
            </div>
          </div>
        </div>
      </div>
      
      <?php
      // $i+=1;
         }
      ?>
     
    </div>
  </section>
  <div class="border-top w-100 h-1px"></div>
  <section class="container container-xxl pt-15 pb-15 pt-lg-17 pb-lg-20">
    <div class="text-center">
   
    <h2 class="mb-16 fs-3">Khách hàng đánh giá</h2>
    </div>
      <?php
      if(isset($_SESSION['ten_khach_hang'])){
        ?>
    
    <div class="row">
      
              <a href="#customer-review" class="btn btn-outline-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="customer-review">
                <svg class="icon">
                  <use xlink:href="#icon-Pencil"></use>
                </svg>Viết Đánh Giá </a>
            </div>
  </section>
          </div>
        </div>
      </div>
      <div class="ps-lg-12 ps-auto col-xl-9 col-md-7">
        <div class="collapse mb-14" id="customer-review">
          <form class="product-review-form" action="index.php?act=ctsp&ma_san_pham=<?php echo $_GET['ma_san_pham']?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group mb-7">
                  <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewName">Name</label>
                  <input id="reviewName" class="form-control" type="show" name="ten_khach_hang" value="<?php echo $_SESSION['ten_khach_hang']?>" readonly>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group mb-4">
                  <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewEmail">Email</label>
                  <input id="reviewEmail" type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']?>" readonly>
                </div>
              </div>
            </div>
            <div class="form-group mb-10">
              <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewMessage">Trải nhiệm của bạn như thế nào </label>
              <textarea id="reviewMessage" class="form-control" name="noi_dung" rows="5"></textarea>
            </div>
            <div class="d-flex">
              <div class="me-4">
                <div class="input-group align-items-center">
                  <input type="file" name="img" class="form-control border" id="reviewrAddPhoto">
                </div>
              </div>
            </div>
            <br>
            <div class="d-flex">
              <div class="me-4">
                <div class="input-group align-items-center">
                <br>
                <input type="hidden" name="masp" value="<?php echo $_GET['ma_san_pham']?>">
                    
                <input type="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary ms-0" value="Bình Luận" name="binhluan"><br>
                </div>
              </div>
            </div>
      <?php    
      }
    ?>
          </form>
          
        </div>
        <div class=" mt-12">
          <!-- <h3 class="fs-5"><?php echo $data2 ?> Lượt Bình luận</h3> -->
          <?php
            foreach($data1 as $value){
                extract($value);
                $hinhpath = "public/dist/img/binhluan/" . $anhbl;
               
          ?>
          <div class="border-bottom pb-7 pt-10">
            <div class="d-flex align-items-center mb-6">
              <div class="d-flex align-items-center fs-15px ls-0">
                <div class="rating">
                  <div class="empty-stars">
                    <span class="star">
                      <svg class="icon star-o">
                        <use xlink:href="#star-o"></use>
                      </svg>
                    </span>
                    <span class="star">
                      <svg class="icon star-o">
                        <use xlink:href="#star-o"></use>
                      </svg>
                    </span>
                    <span class="star">
                      <svg class="icon star-o">
                        <use xlink:href="#star-o"></use>
                      </svg>
                    </span>
                    <span class="star">
                      <svg class="icon star-o">
                        <use xlink:href="#star-o"></use>
                      </svg>
                    </span>
                    <span class="star">
                      <svg class="icon star-o">
                        <use xlink:href="#star-o"></use>
                      </svg>
                    </span>
                  </div>
                  <div class="filled-stars" style="width: 100%">
                    <span class="star">
                      <svg class="icon star text-primary">
                        <use xlink:href="#star"></use>
                      </svg>
                    </span>
                    <span class="star">
                      <svg class="icon star text-primary">
                        <use xlink:href="#star"></use>
                      </svg>
                    </span>
                    <span class="star">
                      <svg class="icon star text-primary">
                        <use xlink:href="#star"></use>
                      </svg>
                    </span>
                    <span class="star">
                      <svg class="icon star text-primary">
                        <use xlink:href="#star"></use>
                      </svg>
                    </span>
                    <span class="star">
                      <svg class="icon star text-primary">
                        <use xlink:href="#star"></use>
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
              <span class="fs-3px mx-5">
                <i class="fas fa-circle"></i>
              </span>
              <span class="fs-14"><?php echo date("d/m/Y", strtotime($value['ngay_binh_luan'])) ?></span>
            </div>
    

            
            <div class="d-flex justify-content-start align-items-center mb-5">
        
              <p class="mb-10 fs-6"><?php echo $value['ten_khach_hang']?></p><br>
              <div class>
                <h5 class="mt-0 mb-4 fs-14px text-uppercase ls-1"><?php  ?></h5>
              </div>
            </div>  
            <p class="mb-10 fs-6"><?php echo $value['noi_dung']?></p><br>
            <h6>Ảnh từ khách hàng</h6>
            <img src="<?php echo  $hinhpath ?>" data-src="" width="60" height="60"> 
           
          </div>
          
                  
              <?php
            }
                ?>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section>
</main>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addtocart(productId, productName, productPrice) {
    
      console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './views/client/extension/addtocart.php',
            data: {
                ma_san_pham: productId,
                ten_san_pham: productName,
                don_gia: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
    function add(){
      alert('bạn cần đăng nhập');
      window.location="index.php?act=login";
    }
</script>
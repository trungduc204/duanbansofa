<?php 
session_start();
ob_start();
include '../../../model/khachhang.php';
include '../../../model/PDO.php';
if(isset($_POST['submit'])){
    $err = [];
      $email=$_POST['email'];
      $mat_khau=$_POST['mat_khau'];
    //   echo $email;
    // //  var_dump($email,$mat_khau);
      $quyen = user_login($email,$mat_khau);
      if(empty($quyen)){
        echo "Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập!";
        $err['error'] = 'Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập!';
      }
      if(empty($err)){
        // Showarray($quyen);
        extract($quyen);
        if ($quyen == 1) {
          $_SESSION['quyen'] = array($quyen);
          $_SESSION['ten_nhan_vien']= $ten_nhan_vien;
          $_SESSION['avt']= $avt;
          header('Location:../../../admin.php');
          exit();  
      } elseif($quyen == 2) {
        $_SESSION['quyen'] = array($quyen);
        $_SESSION['ten_nhan_vien']= $ten_nhan_vien;
        $_SESSION['avt']= $avt;
        header('Location:../../../admin.php');
        exit(); 
      
    //       echo "Chuyển hướng không thành công!";
      }
      
      }
     
    //   // else{
    //   //   $txt_erro="Tài khoản không tồn tại";
    //   // }
    // echo "login";
}



?>

<!doctype html>
<html lang="en" data-bs-theme="light">
<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 10:38:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Trang chủ</title>
  <!-- <script src="views/client/cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
  <link rel="icon" href="views/client/assets/images/others/favicon.ico">
  <link rel="stylesheet" href="views/client/assets/vendors/lightgallery/css/lightgallery-bundle.min.css">
  <link rel="stylesheet" href="views/client/assets/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="views/client/assets/vendors/animate/animate.min.css">
  <link rel="stylesheet" href="views/client/assets/vendors/slick/slick.css">
  <link rel="stylesheet" href="views/client/assets/vendors/mapbox-gl/mapbox-gl.min.css">
  <link rel="stylesheet" href="views/client/cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../../views/client/assets/css/theme.css">
</head>

<body>
<main id="content" class="wrapper layout-page">
  <section class="pb-lg-20 pb-16">
    <div class="bg-body-secondary py-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
          <li class="breadcrumb-item">
            <a class="text-decoration-none text-body" href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Đăng nhập </li>
        </ol>
        
      </nav>
    </div>
    <?php
     if(isset($error)){
        echo "<div class='alert alert-danger' role='alert'>";
        foreach($error as $err){
            echo $err."<br>";
        }
        echo "</div>";
    }
    if(isset ($_SESSION['sussec'])){
        echo "<div class='alert alert-success' role='alert'>";
        echo $_SESSION['sussec'];
        echo "</div>";
        unset($_SESSION['sussec']);
    }
    if(isset ($_SESSION['faill_login'])){
        echo "<div class='alert alert-danger' role='alert'>";
        echo $_SESSION['faill_login'];
        echo "</div>";
        unset($_SESSION['faill_login']);
    }
    
    ?>
    <div class="container">
      <div class=" text-center pt-13 mb-12 mb-lg-15">
        <div class="text-center">
          <h2 class="fs-36px mb-11 mb-lg-14">Đăng nhập</h2>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-10 mx-auto">
          <div class="row no-gutters">
            <div class="col-lg-6 mb-15 mb-lg-0 pe-xl-2">
              <h3 class="fs-4 mb-10">Đăng Nhập</h3>
              <form class action="" method="post">
                <div class="form-group mb-6">
                  <label for="user_login_email" class="visually-hidden">Địa Chỉ Email</label>
                  <input 
                  type="email" 
                  class="form-control" 
                  id="user_login_email" 
                  name="email" 
                  placeholder="Email Address">
                </div>
                <div class="form-group mb-6">
                  <label for="user_login_password" class="visually-hidden">Mật Khẩu</label>
                  <input 
                  type="password" 
                  class="form-control" 
                  id="user_login_password" 
                  placeholder="Password" 
                  name="mat_khau">
                </div>
                <a href="#" class="d-inline-block fs-15 lh-12 mb-7">Quên mật khẩu ?</a>
                <button type="submit" class="btn btn-primary w-100 mb-7" name="submit">Đăng Nhập</button>
                <div class="form-check mb-7 d-flex">
                  <input type="checkbox" class="form-check-input rounded-0" id="customCheck1" name="remember">
                  <label class="form-check-label fs-15 ps-4 text-body-emphasis" for="customCheck1">Luôn luôn đăng nhập</label>
                </div>
              </form>
            </div>
            <div class="col-lg-6 ps-lg-6 ps-xl-12">
              <h3 class="fs-4 mb-8">Vui lòng đăng nhập để vào trang quản trị</h3>
              <p class="mb-8">Chào mừng đến với Sofa Shop - Nơi trải nghiệm không gian sống đẳng cấp!

Chúng tôi tự hào giới thiệu một bộ sưu tập đa dạng và phong phú về sofa, từ những chiếc sofa hiện đại, sang trọng cho đến những mẫu sofa đơn giản và ấm cúng. Với chất liệu chất lượng cao và thiết kế độc đáo, chúng tôi cam kết mang đến cho bạn không gian sống thoải mái và tinh tế nhất.</p>
<a href="../../../index.php"><button type="submit" class="btn btn-primary w-100 mb-7" name="">Đóng</button></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
</main>
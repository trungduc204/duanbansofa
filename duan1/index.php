<?php
session_start();
ob_start();
include "model/PDO.php";
include "model/loaihang.php";
include "model/khachhang.php";
include "model/binhluan.php";
include "model/nguoidung.php";
include "model/sanpham.php";
include "model/donhang.php";
include "model/lienhe.php";
include "model/hethong.php";
include "model/order.php";
include "model/baiviet.php";
include "model/banner.php";
include "global.php";
include "views/client/header.php";
$listlh = ds_loaihang();
// $data = hienkh($ma_khach_hang);
$listsp = load_sp_top();
$listbaiviet = loadall_baiviet();
$listbanner = loadall_banner();
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act){  
        case "listcart":
            // Kiểm tra xem giỏ hàng có dữ liệu hay không
            if (!empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];

                // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                $productId = array_column($cart, 'ma_san_pham');
                // var_dump($productId);
                
                // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
                $idlist = implode(',', $productId);
                // Lấy sản phẩm trong bảng sản phẩm theo id
                $dataDb = loadone_sanphamCart($idlist);
                // var_dump($dataDb);
            }
            include "views/client/cart.php";
            break;
            case 'ctsp':{
                // if(isset($_GET['ma_san_pham'])){
                //     $ma_san_pham = $_GET['ma_san_pham'];
                //     $data = sanphamct_get_byid($ma_san_pham);
                //     $data1 = sanpham_load_ctbl($ma_san_pham);
                //     $data2 = sanpham_count_ctbl($ma_san_pham);
                //     sanpham_add_luotxem($ma_san_pham);
                if (isset($_GET['ma_san_pham']) && ($_GET['ma_san_pham'] > 0)) {
                    $ma_san_pham= $_GET['ma_san_pham'];
                    $listspcl = load_sp_cungloai($ma_san_pham, $ma_loai_hang);
                    $onesp = load_spone($ma_san_pham);
                    extract($onesp);
                    $listlh = ds_loaihang();
                 
                    $data1= loadall_binhluan($ma_san_pham);
                    
              
                } 
                
                if(isset($_POST['binhluan'])){
                    $ma_san_pham=$_POST['masp'];
                    $ma_khach_hang=$_SESSION['ma_khach_hang'];
                    $noi_dung=$_POST['noi_dung'];
                    $ngay_binh_luan= date('Y-m-d');
                    $anhbl=$_FILES['img']['name'];
                    $target_dir = "public/dist/img/binhluan/";
                      $target_file = $target_dir . basename($_FILES['img']['name']);
                      if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
      
                     }else{
                        $anhbl=" ";
                     }
                              insert_binhluan($ma_san_pham,$ma_khach_hang,$noi_dung,$anhbl,$ngay_binh_lua);
                              header('Location: index.php?act=ctsp&ma_san_pham=' . $_GET['ma_san_pham']);
                            
                        
                }
                include "views/client/chitietsp/chitetsp.php";
                break;
            }
        case 'cart':{
            include "views/client/cart.php";
            break;
        }
        case 'checkout':{
            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                print_r($cart);
                if (isset($_POST['order_confirm'])) {
                    $ma_khach_hang =$_SESSION['ma_khach_hang'];
                    $hoten = $_POST['ten_khach_hang'];
                    $tel = $_POST['sdt'];
                    $email = $_POST['email'];
                    $address = $_POST['dia_chi'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $currentDateTime = date('Y-m-d H:i:s');
                    // if (isset($_SESSION['ten_khach_hang'])) {
                    //     $ma_khach_hang = $_SESSION['ten_khach_hang']['ma_khach_hang'];
                    // } else {
                    //     $ma_khach_hang = 0;
                    // }
                    $idBill = addOrder($ma_khach_hang, $hoten, $tel, $email, $address, $_SESSION['resultTotal'],$currentDateTime);
                   $listdh= listdon_hang();
foreach($listdh as $vl){extract($vl);}
                    foreach ($cart as $item) {
                        addOrderDetail($ma_don_hang, $item['ma_san_pham'], $item['don_gia'], $item['quantity'], $item['don_gia'] * $item['quantity']);
                    }
                    unset($_SESSION['cart']);
                    $_SESSION['success'] = $idBill;
                    header("Location: index.php?act=success");
                }
                include "views/client/payment/checkout.php";
            } else {
                header("Location: index.php?act=listCart");
            }
            break;
        }
        case 'login':{
            if(isset($_POST['submit'])){
                $error = [];
                if(empty($_POST['email'])){
                    $error['email'] = "Bạn chưa nhập email";
                }
                if(empty($_POST['password'])){
                    $error['password'] = "Bạn chưa nhập mật khẩu";
                }
                if(empty($error)){
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $data = account_user_login($email,$password);
            if($data){
                   extract($data);
                if($email == $email && $mat_khau == $password){
                    $_SESSION['ten_khach_hang'] = $ten_khach_hang;
                    $_SESSION['email'] = $email;
                    $_SESSION['ma_khach_hang'] = $ma_khach_hang;    
                    $_SESSION['$avt'] = $avt;
                    header("location:index.php");
                } else {
                    $error['login'] = "Mật khẩu hoặc tài khoản không đúng";
                }
            } else {
                $error['login'] = "Mật khẩu hoặc tài khoản không đúng";
            }
        
                }
            }   
            include "views/client/khachhang/login.php";
            break;
        }
        case 'register':{
            if(isset($_POST['submit'])){
                $error = [];
                if(empty($_POST['email'])){
                    $error['email'] = "Bạn chưa nhập email";
                }
                if(empty($_POST['mat_khau'])){
                    $error['mat_khau'] = "Bạn chưa nhập mật khẩu";
                }
                if(empty($_POST['re_mat_khau'])){
                    $error['re_mat_khau'] = "Bạn chưa nhập lại mật khẩu";
                }
                if(empty($_POST['dia_chi'])){
                    $error['dia_chi'] = "Bạn chưa nhập lại địa chỉ";
                }
                if(empty($_POST['ten_khach_hang'])){
                    $error['ten_khach_hang'] = "Bạn chưa nhập họ tên";
                }
                if(empty($_POST['sdt'])){
                    $error['sdt'] = "Bạn chưa nhập số điện thoại";
                }
                if(empty($_POST['agree'])){
                    $error['agree'] = "Bạn chưa đồng ý điều khoản";
                }
                if(empty($error)){
                    $email = $_POST['email'];
                    $password = $_POST['mat_khau'];
                    $repassword = $_POST['re_mat_khau'];
                    $hoten = $_POST['ten_khach_hang'];
                    $phone = $_POST['sdt'];
                    $diachi = $_POST['dia_chi'];
                    
                   
                        if($password != $repassword){
                            $error['re_mat_khau'] = "Mật khẩu không trùng khớp";
                        } else {
                             account_user_register($email,$password,$hoten,$phone,$diachi);
                        
                                $_SESSION['sussec'] = "Đăng ký thành công";
                                header("location:index.php?act=login");
                            }
                        }
                    }
        
            
            include "views/client/khachhang/register.php";
            break;
        }
        case 'account':{
            if(!isset($_SESSION['ten_khach_hang'])){
                $_SESSION['faill_login'] = "Bạn chưa đăng nhập";
                header("location:index.php?act=login");

            }
            if(isset($_POST['submit'])){
                $error = [];
                if(empty($_POST['name'])){
                    $error['hoten'] = "Bạn chưa nhập họ tên";
                }
                if(empty($_POST['sdt'])){
                    $error['phonenumber'] = "Bạn chưa nhập số điện thoại";
                }
                if(empty($_POST['diachi'])){
                    $error['diachi'] = "Bạn chưa nhập địa chỉ";
                }
                if(empty($_POST['email'])){
                    $error['email'] = "Bạn chưa nhập email";
                }
                if(empty($error)){
                    $ten_khach_hang = $_POST['name'];
                    $sdt = $_POST['sdt'];
                    $dia_chi = $_POST['diachi'];
                    $email = $_POST['email'];
                    $ma_khach_hang = $_POST['makh'];;
                    $anh= $_FILES['anh']['name'];
                    //check image
                                $target_dir = "public/dist/img/khachhang/..";  
                                $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                                if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                                    // echo "File " . htmlspecialchars(basename($_FILES["avt"]["name"])) . " đã được tải lên.";
                                } else {
                                    // echo "deafut = noimage.jpg";
                                }
                            
                         capnhat_kh($ma_khach_hang, $ten_khach_hang,$email, $anh,$sdt,$dia_chi);
                  
                        $_SESSION['sussec'] = "Cập nhật thành công";
                        header("location:index.php?act=account");
                }
                

            }

            if(isset($_POST['updatepassword'])){
                $error = [];
                if(empty($_POST['oldpass'])){
                    $error['password'] = "Bạn chưa nhập mật khẩu";
                }   
                if(empty($_POST['newpass'])){
                    $error['newpassword'] = "Bạn chưa nhập mật khẩu mới";
                }
                if(empty($_POST['repass'])){
                    $error['repassword'] = "Bạn chưa nhập lại mật khẩu";
                }
                if(empty($error)){
                    $oldpass = $_POST['oldpass'];
                    $newpassword = $_POST['newpass'];
                    $repassword = $_POST['repass'];
                    $ma_khach_hang = $_SESSION['ma_khach_hang'];
                    $data = hienkh($ma_khach_hang);
                    if($data){
                        extract($data);
                        if($oldpass == $mat_khau){
                            if($newpassword != $repassword){
                                $error['repassword'] = "Mật khẩu không trùng khớp";
                            } else {
                                $data = account_update_password($newpassword,$ma_khach_hang);
                                if($data){
                                    $_SESSION['sussec'] = "Cập nhật thành công";
                                    header("location:index.php?act=account");
                                }
                            }
                        } else {
                            $error['oldpass'] = "Mật khẩu không đúng";
                        }
                    }
                }

                $data1=donhang_list_by_customer($ma_khach_hang); 
            }
            include "views/client/khachhang/account.php";
            break;
        }
        case 'ctdh':{
            if(isset($_GET['ma_don_hang'])){
                $ma_don_hang=$_GET['ma_don_hang'];
                $data2 = donhang_get_chi_tiet($ma_don_hang);
              
               
            }
            include "views/client/khachhang/ctdonhang.php";
            break;  
        }
        case 'huydh':{
            if (isset($_GET['ma_don_hang'])) {
                huydh($_GET['ma_don_hang']);
            }
            // $listsp = load_sp_delete();
            
            include "views/client/khachhang/account.php";
            break;
        }
        case 'danhan':{
            if (isset($_GET['ma_don_hang'])) {
                nhandh($_GET['ma_don_hang']);
            }
            // $listsp = load_sp_delete();
            
            include "views/client/khachhang/account.php";
            break;
        }
        case 'timkiem':{
            if (isset($_POST['submit'])) {
                $key1 = $_POST['key'];
            }else{
                $key1="";
               // Update $key with the new value
            }

            $sp = san_pham_search($key1);
            include "views/client/search/timkiem.php";
            break;
        }
        case 'search': {
            // $key = ''; // Set a default value for $key
        
            // if (isset($_POST['timkiem']) && ($_POST['timkiem'] != "")) {
            //     $kyw = $_POST['kyw'];
            // } else {
            //     $kyw = "";
            // }
            // if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
            //     $iddm = $_GET['iddm'];
            // } else {
            //     $iddm = 0;
            // }
            // $dssp = load_sp($kyw, $iddm);
            // $tendm = load_ten_dm($iddm);
            // include "view/sanpham.php";
            // break;

            // if (isset($_POST['submit'])) {
            //     $key1 = $_POST['key'];
            // }else{
            //     $key1="";
            //    // Update $key with the new value
            // }

            // $sp = san_pham_search($key1);
        
            // if (isset($_GET['odercode'])) {
            //     $key = ''; // Set a default value for $key
            //     $odercode = $_GET['odercode'];
            //     $key = $_SESSION['kwords'];
            //     $data = sanpham_search_orderby($key, $odercode);
            // } 
            if (isset($_POST['loc']) && ($_POST['loc'])) {
                $orderby = $_POST['orderby'];
                // var_dump($orderby);
               if($orderby == 0){
                   $data4 =load_sp();
               }
                if($orderby ==1){
                   $data =loadsp_luotxem();
                }
                elseif($orderby ==2){
                    $data1 = loadsp_ngaymoi();
                }elseif($orderby ==3){
                    $data2 = loadsp_giatang();
                }
                elseif($orderby ==4){
                    $data3 = loadsp_giagiam();
                }
            } 
            include "views/client/search/list.php";
            break;
        }
        case 'listspdm':{
            if (isset($_GET['ma_loai_hang']) && ($_GET['ma_loai_hang'] > 0)) {
                $ma_loai_hang = $_GET['ma_loai_hang'];
            } else {
                $ma_loai_hang = 0;
            }
            
            $tendm = load_ten_dm($ma_loai_hang);
            $listsp = list_sp($ma_loai_hang);
            include "views/client/listsanpham/list.php";
            break;
        }
        case '':{
            if (isset($_GET['submit']) && ($_GET['submit'] > 0)) {
                $orderby = $_Post['orderby'];
            } else {
                $ma_loai_hang = 0;
            }
            include "views/client/payment/checkout.php";
            break;
        }
        case 'logout':{
            session_destroy();
            header("location:index.php");
            break;
        }
        case '404':{
            include "views/client/404.php";
            break;
        
        }
        
        default:{
            include "views/client/body.php";
            break;
        }   
    }
} else {
    include "views/client/body.php";
}
include "views/client/footer.php";
ob_end_flush();
?>
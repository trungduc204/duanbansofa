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
    include "model/khuyenmai.php";
    include "model/baiviet.php";
    include "model/banner.php";
    include "views/admin/header.php";
    include "views/admin/sidebar.php";
    if(!isset($_SESSION['quyen'])){
        
        header("Location: views/admin/login/login.php");
    } else {
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            // case 'login':

            //     include "views/admin/login/login.php";

                //     Loại Hàng
            case "loaihang":
                $listlh = ds_loaihang();
                include "views/admin/loaihang/listlh.php";
                break;

            case "addloaihang":


                if (isset($_POST['btnsubmit'])) {


                    $ten_loai_hang =   $_POST['ten_loai_hang'];
                    $mo_ta = $_POST['mo_ta'];

                    $anh = $_FILES['anh']['name'];
                    //                    echo $hinh;
                    $target_dir = "public/dist/img/loaihang/..";
                    $target_file = $target_dir . basename($_FILES['anh']['name']);
                    //                    echo $target_file;
                    if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                        //                        echo "Bạn đã upload ảnh thành công";
                    } else {
                        //                        echo "Upload ảnh không thành công";
                    }
                    //                    echo $iddm;
                    add_loaihang($ten_loai_hang, $mo_ta, $anh);

                    // $thanhcong = "Thêm thành công";
                    echo '<script>window.location.href="?act=loaihang";</script>';
                }

                include "views/admin/loaihang/addlh.php";
                break;


            case "capnhatlh":
                $ma_loai_hang = $_GET['ma_loai_hang'];
                $listlh = hien($ma_loai_hang);

                if (isset($_POST['btnsubmit'])) {
                    $ten_loai_hang = $_POST['ten_loai_hang'];
                    $mo_ta = $_POST['mo_ta'];
                    $anh = $_FILES['anh']['name'];
                    $target_dir = "public/dist/img/loaihang/..";
                    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                    if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                        echo "The file " . htmlspecialchars(basename($_FILES["anh"]["name"])) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    update($ma_loai_hang, $ten_loai_hang, $mo_ta, $anh);
                    $thongbao = "Cập nhật thành công!";
                    echo '<script>window.location.href="?act=loaihang";</script>';
                }
                // $listsp = load_sp();
                include "views/admin/loaihang/sualh.php";
                break;

            case "deleteloaihang": {

                    if (isset($_GET['ma_loai_hang'])) {
                        delete_loaihang($_GET['ma_loai_hang']);
                    }
                    echo '<script>window.location.href="?act=loaihang";</script>';
                    break;
                }

                // Khách hàng
            case "khachhang":
                $arr = listkhachhang();
                include "views/admin/khachhang/listkh.php";
                break;

            case "addkhachhang":


                if (isset($_POST['btnsubmit'])) {


                    $ten_khach_hang =   $_POST['ten_khach_hang'];
                    $mat_khau = $_POST['mat_khau'];
                    $dia_chi = $_POST['dia_chi'];
                    $ngay_sinh = $_POST['ngay_sinh'];
                    $sdt =   $_POST['sdt'];
                    $email =   $_POST['email'];
                    $avt = $_FILES['avt']['name'];
                    //                    echo $hinh;
                    $target_dir = "public/dist/img/khachhang/..";
                    $target_file = $target_dir . basename($_FILES['avt']['name']);
                    //                    echo $target_file;
                    if (move_uploaded_file($_FILES['avt']['tmp_name'], $target_file)) {
                        //                        echo "Bạn đã upload ảnh thành công";
                    } else {
                        //                        echo "Upload ảnh không thành công";
                    }
                    //                    echo $iddm;
                    addkhachhang($ten_khach_hang, $mat_khau, $dia_chi, $ngay_sinh, $sdt, $email, $avt);

                    // $thanhcong = "Thêm thành công";
                    echo '<script>window.location.href="?act=khachhang";</script>';
                }

                include "views/admin/khachhang/addkh.php";
                break;
            case "suakh":
                $ma_khach_hang = $_GET['ma_khach_hang'];
                $hienkh = hienkh($ma_khach_hang);

                if (isset($_POST['btnsubmit'])) {
                    $ten_khach_hang = $_POST['ten_khach_hang'];
                    $mat_khau = $_POST['mat_khau'];
                    $dia_chi = $_POST['dia_chi'];
                    $ngay_sinh = $_POST['ngay_sinh'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];


                    update_kh($ma_khach_hang, $ten_khach_hang, $mat_khau, $dia_chi, $ngay_sinh, $sdt, $email);
                    echo '<script>window.location.href="?act=khachhang";</script>';
                }
                // $listsp = load_sp();
                include "views/admin/khachhang/updatekh.php";
                break;
                // case "suakh":
                //     if (isset($_GET['ma_khach_hang']) && ($_GET['ma_khach_hang'] > 0)) {
                //         $khach_hang = loadone_khachhang($_GET['ma_khach_hang']);
                //     }

                //         include "views/admin/khachhang/updatekh.php";
                //         break;
                // case "updatekhachhang":
                //     if (isset($_GET['ma_khach_hang']) && ($_GET['ma_khach_hang'] > 0)) {
                //         $khach_hang = loadone_khachhang($_GET['ma_khach_hang']);
                //     }

                //     // include "views/admin/khachhang/updatekh.php";
                //     if (isset($_POST['btnsubmit']) && ($_POST['btnsubmit'])) {


                //         $ten_khach_hang = $_POST['ten_khach_hang'];
                //         $mat_khau = $_POST['mat_khau'];
                //         $dia_chi = $_POST['dia_chi'];
                //         $ngay_sinh = $_POST['ngay_sinh'];
                //         $sdt = $_POST['sdt'];
                //         $email = $_POST['email'];

                //         update_khachhang( $ten_khach_hang, $mat_khau, $dia_chi, $ngay_sinh, $sdt,$email,$ma_khach_hang  );
                //         echo '<script>window.location.href="?act=khachhang";</script>';

                //     }
                //     $arr = listkhachhang("", 0);
                //     include "views/admin/khachhang/updatekh.php";
                //     break;

            case "soft_delete":
                if (isset($_GET['ma_khach_hang'])) {
                    soft_delete($_GET['ma_khach_hang']);
                    echo '<script>window.location.href="?act=khachhang";</script>';
                }
                include "views/admin/khachhang/listkh.php";
                break;
            case "khoiphuckh":
                if (isset($_GET['ma_khach_hang'])) {
                    khoiphuc($_GET['ma_khach_hang']);
                    echo '<script>window.location.href="?act=khachhangdaxoa";</script>';
                }
                include "views/admin/khachhang/listkh.php";
                break;
            case "delete_khachhang":
                if (isset($_GET['ma_khach_hang'])) {
                    delete_khachhang($_GET['ma_khach_hang']);
                }
                echo '<script>window.location.href="?act=khachhangdaxoa";</script>';
                include "views/admin/khachhang/khachhangdaxoa.php";
                break;
            case "khachhangdaxoa":
                $arr = listkhdaxoa();
                include "views/admin/khachhang/khachhangdaxoa.php";
                break;
                // Bình luận
            case "binhluan":
                $listbl = load_binhluan(0);
                include "views/admin/binhluan/listbl.php";
                break;
            case "deletebl":
                if (isset($_GET['ma_binh_luan'])) {
                    delete_binhluan($_GET['ma_binh_luan']);
                }
                echo '<script>window.location.href="?act=binhluan";</script>';

                break;


                case "listsp":
                    $listsp = load_sp();
                    $listlh = ds_loaihang();
                    include "views/admin/sanpham/listsp.php";
                    break;
                case "xoasp":
                    $listsp = load_sp_delete();
                    include "views/admin/sanpham/xoasp.php";
                    break;
                case "addsp":
                    if ((isset($_POST['themsp']) && ($_POST['themsp']))) {
                        $tensp = $_POST['ten_san_pham'];
                        $idlh = $_POST['ma_loai_hang'];
                        $mota = $_POST['mo_ta'];
                        $ngaythem = $_POST['ngay_them'];
                        $giasp = $_POST['don_gia'];
                        $soluong = $_POST['so_luong'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "public/dist/img/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        } else {
                        }
                        $anh1 = $_FILES['anh1']['name'];
                        $target_dir = "public/dist/img/";
                        $target_file = $target_dir . basename($_FILES["anh1"]["name"]);
                        if (move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file)) {
                        } else {
                        }
                        $anh2 = $_FILES['anh2']['name'];
                        $target_dir = "public/dist/img/";
                        $target_file = $target_dir . basename($_FILES["anh2"]["name"]);
                        if (move_uploaded_file($_FILES["anh2"]["tmp_name"], $target_file)) {
                        } else {
                        }
                        $anh3 = $_FILES['anh3']['name'];
                        $target_dir = "public/dist/img/";
                        $target_file = $target_dir . basename($_FILES["anh3"]["name"]);
                        if (move_uploaded_file($_FILES["anh3"]["tmp_name"], $target_file)) {
                        } else {
                        }
                        
                        them_sp($tensp, $idlh, $mota, $ngaythem, $giasp, $soluong, $hinh,$anh1, $anh2, $anh3);
                        $thongbao = "Thêm thành công";
                        echo '<script>window.location.href="admin.php?act=listsp";</script>';
                    }
                    $listlh = ds_loaihang();
                    include "views/admin/sanpham/addsp.php";
                    break;
                case "soft_deletesp":
                    if (isset($_GET['ma_san_pham'])) {
                        xoa_mem($_GET['ma_san_pham']);
                    }
                    $listsp = load_sp();
                    include "views/admin/sanpham/listsp.php";
                    break;
                case "khoiphucsp":
                    if (isset($_GET['ma_san_pham'])) {
                        khoiphucsp($_GET['ma_san_pham']);
                    }
                    $listsp = load_sp_delete();
                    include "views/admin/sanpham/xoasp.php";
                    break;
                case "deletesp":
                    if (isset($_GET['ma_san_pham'])) {
                        delete_sanpham($_GET['ma_san_pham']);
                    }
                    $listsp = load_sp_delete();
                    include "views/admin/sanpham/xoasp.php";
                    break;
                case "suasp":
                    $ma_san_pham = $_GET['ma_san_pham'];
                    $hiensp = hiensp($ma_san_pham);
                    $listlh = ds_loaihang();
                    if (isset($_POST['suasp'])) {
                        $tensp = $_POST['ten_san_pham'];
                        $idlh = $_POST['ma_loai_hang'];
                        $mota = $_POST['mo_ta'];
                        $ngaythem = $_POST['ngay_them'];
                        $giasp = $_POST['don_gia'];
                        $soluong = $_POST['so_luong'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "public/dist/img/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        } else {
                        }
                        $anh1 = $_FILES['anh1']['name'];
                        $target_dir = "public/dist/img/";
                        $target_file = $target_dir . basename($_FILES["anh1"]["name"]);
                        if (move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file)) {
                        } else {
                        }
                        $anh2 = $_FILES['anh2']['name'];
                        $target_dir = "public/dist/img/";
                        $target_file = $target_dir . basename($_FILES["anh2"]["name"]);
                        if (move_uploaded_file($_FILES["anh2"]["tmp_name"], $target_file)) {
                        } else {
                        }
                        $anh3 = $_FILES['anh3']['name'];
                        $target_dir = "public/dist/img/";
                        $target_file = $target_dir . basename($_FILES["anh3"]["name"]);
                        if (move_uploaded_file($_FILES["anh3"]["tmp_name"], $target_file)) {
                        } else {
                        }
                        update_sp($ma_san_pham, $tensp, $idlh, $mota, $ngaythem, $giasp, $soluong, $hinh,$anh1,$anh2,$anh3);
                        echo '<script>window.location.href="?act=listsp";</script>';
                    }
                    // $listsp = load_sp();
                    include "views/admin/sanpham/updatesp.php";
                    break;
    
            case "listnd":
                $listnd = load_nd();
                include "views/admin/nguoidung/listnguoidung.php";
                break;
            case "addnd":
                if ((isset($_POST['themnd']) && ($_POST['themnd']))) {
                    $tennv = $_POST['ten_nhan_vien'];
                    $email = $_POST['email'];
                    $matkhau = $_POST['mat_khau'];
                    $quyen = $_POST['quyen'];
                    $sdt = $_POST['sdt'];
                    $diachi = $_POST['dia_chi'];
                    $ngaysinh = $_POST['ngay_sinh'];
                    $hinh = $_FILES['avt']['name'];
                    $target_dir = "public/dist/img/";
                    $target_file = $target_dir . basename($_FILES["avt"]["name"]);
                    if (move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    them_nd($tennv, $email, $matkhau, $quyen, $sdt, $diachi, $ngaysinh, $hinh);
                    echo '<script>window.location.href="?act=listnd";</script>';
                }
                $listnd = load_nd();
                include "views/admin/nguoidung/addnd.php";
                break;
            case "xoand":
                $listnd = load_nd_delete();
                include "views/admin/nguoidung/xoand.php";
                break;
            case "soft_deletend":
                if (isset($_GET['ma_nhan_vien'])) {
                    xoa_memnd($_GET['ma_nhan_vien']);
                }
                $listnd = load_nd();
                include "views/admin/nguoidung/listnguoidung.php";
                break;
            case "khoiphucnd":
                if (isset($_GET['ma_nhan_vien'])) {
                    khoiphucnd($_GET['ma_nhan_vien']);
                }
                $listnd = load_nd_delete();
                include "views/admin/nguoidung/xoand.php";
                break;
            case "delete_nguoidung":
                if (isset($_GET['ma_nhan_vien'])) {
                    delete_nguoidung($_GET['ma_nhan_vien']);
                }
                $listnd = load_nd_delete();
                include "views/admin/nguoidung/xoand.php";
                break;
            case "suand":
                $ma_nhan_vien = $_GET['ma_nhan_vien'];
                $hiennd = hiennd($ma_nhan_vien);

                if (isset($_POST['suand'])) {
                    $tennv = $_POST['ten_nhan_vien'];
                    $email = $_POST['email'];
                    $matkhau = $_POST['mat_khau'];
                    $quyen = $_POST['quyen'];
                    $sdt = $_POST['sdt'];
                    $diachi = $_POST['dia_chi'];
                    $ngaysinh = $_POST['ngay_sinh'];
                    $hinh = $_FILES['avt']['name'];
                    $target_dir = "public/dist/img/";
                    $target_file = $target_dir . basename($_FILES["avt"]["name"]);
                    if (move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    update_nd($ma_nhan_vien, $tennv, $email, $matkhau, $quyen, $sdt, $diachi, $ngaysinh, $avt);
                    echo '<script>window.location.href="?act=listnd";</script>';
                }
                // $listsp = load_sp();
                include "views/admin/nguoidung/updatend.php";
                break;


                // case "sanpham":
                //     include "views/admin/sanpham/listsp.php";
                //     break;
            case "ctsanpham":
                include "views/admin/sanpham/chitietsanpham.php";
                break;
            case "listdonhang":
                $listdonhang = loadall_donhang();
                include "views/admin/donhang/listdonhang.php";
                break;
            case "listlienhe":
                $listlienhe = loadall_lienhe();
                include "views/admin/lienhe/listlh.php";
                break;
            case "deletelienhe": {

                    if (isset($_GET['id'])) {
                        delete_lh($_GET['id']);
                    }
                    echo '<script>window.location.href="?act=listlienhe";</script>';
                    break;
                }
            case "hethong":
                $listht = listhethong();
                include "views/admin/hethong/listht.php";
                break;
            case "addhethong":


                if (isset($_POST['btnsubmit'])) {


                    $ten_cua_hang =   $_POST['ten_cua_hang'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $dia_chi = $_POST['dia_chi'];
                    $logo = $_FILES['logo']['name'];
                    //                    echo $hinh;
                    $target_dir = "public/dist/img/hethong/..";
                    $target_file = $target_dir . basename($_FILES['logo']['name']);
                    //                    echo $target_file;
                    if (move_uploaded_file($_FILES['logo']['tmp_name'], $target_file)) {
                        //                        echo "Bạn đã upload ảnh thành công";
                    } else {
                        //                        echo "Upload ảnh không thành công";
                    }
                    add_hethong($ten_cua_hang, $sdt, $email, $dia_chi, $logo);

                    // $thanhcong = "Thêm thành công";
                    echo '<script>window.location.href="?act=hethong";</script>';
                }

                include "views/admin/hethong/addht.php";
                break;
            case "updateht":
                $id_ht = $_GET['id_ht'];
                $listht = hienht($id_ht);

                if (isset($_POST['btnsubmit'])) {
                    $ten_cua_hang = $_POST['ten_cua_hang'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $dia_chi = $_POST['dia_chi'];
                    $logo = $_FILES['logo']['name'];
                    $target_dir = "public/dist/img/hethong/..";
                    $target_file = $target_dir . basename($_FILES["logo"]["name"]);
                    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
                        echo "The file " . htmlspecialchars(basename($_FILES["logo"]["name"])) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }






                    updateht($id_ht, $ten_cua_hang, $sdt, $email, $dia_chi, $logo);
                    $thongbao = "Cập nhật thành công!";
                    echo '<script>window.location.href="?act=hethong";</script>';
                }
                // $listsp = load_sp();
                include "views/admin/hethong/updateht.php";
                break;
            case 'addbaiviet':
                if (isset($_POST['btn-thembv']) && ($_POST['btn-thembv'])) {
                    $tenbaiviet = $_POST['tenbaiviet'];
                    $noidung = $_POST['noidung'];
                    $ngaydang = date('d/m/y');
                    $anh = $_FILES['anh1']['name'];
                    $target_dir = "public/dist/img/baiviet/..";
                    $target_file = $target_dir . basename($_FILES["anh1"]["name"]);
                    if (move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file)) {
                        echo "the file" . htmlspecialchars(basename($_FILES["anh1"]["name"])) . " has been uploaded";
                    } else {
                        echo "Sorry, there was an error uploading your file";
                    }
                    insert_baiviet($tenbaiviet, $noidung, $ngaydang, $anh);
                    $thongbao = "Thêm thành công";
                }
                //var_dump($listdanhmuc);
                include "views/admin/baiviet/addbaiviet.php";
                break;
            case 'listbaiviet':

                $listbaiviet = loadall_baiviet();
                include "views/admin/baiviet/listbaiviet.php";
                break;


            case 'suabv':
                if (isset($_GET['id_bai_viet']) && ($_GET['id_bai_viet'] > 0)) {
                    $baiviet = loadone_baiviet($_GET['id_bai_viet']);
                }
                $listbaiviet = loadall_baiviet();
                include "views/admin/baiviet/updatebaiviet.php";
                break;


            case 'updatebaiviet':
                if (isset($_POST['btn-capnhat']) && ($_POST['btn-capnhat'])) {
                    $idbaiviet = $_POST['idbaiviet'];
                    $tenbaiviet = $_POST['tenbaiviet'];
                    $noidung = $_POST['noidung'];
                    $ngaydang = date('d/m/y');
                    $anh = $_FILES['anh1']['name'];
                    $target_dir = "public/dist/img/baiviet/..";
                    $target_file = $target_dir . basename($_FILES["anh1"]["name"]);
                    if (move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file)) {
                        echo "the file" . htmlspecialchars(basename($_FILES["anh1"]["name"])) . " has been uploaded";
                    } else {
                        echo "Sorry, there was an error uploading your file";
                    }
                    update_baiviet($idbaiviet, $tenbaiviet, $noidung, $ngaydang, $anh);
                    $thongbao = "Cập nhập thành công";
                }
                $listbaiviet = loadall_baiviet();
                include "views/admin/baiviet/listbaiviet.php";
                break;

            case 'xoabv':
                if (isset($_GET['id_bai_viet']) && ($_GET['id_bai_viet'] > 0)) {
                    delete_baiviet($_GET['id_bai_viet']);
                }
                $listbaiviet = loadall_baiviet();
                include "views/admin/baiviet/listbaiviet.php";
                break;
            case 'addkm':
                if (isset($_POST['btn-themkm']) && ($_POST['btn-themkm'])) {
                    $makm = $_POST['makm'];
                    $noidung = $_POST['noidung'];
                    $ngaytao = date('d/m/y');
                    $ngayhethan = date('d/m/y');
                    insert_khuyenmai($makm, $noidung, $ngaytao, $ngayhethan);
                    $thongbao = "Thêm thành công";
                }
                $listkhuyenmai = loadall_khuyenmai();
                //var_dump($listdanhmuc);    
                include "views/admin/khuyenmai/addkm.php";
                break;

            case 'listkm':
                $listkhuyenmai = loadall_khuyenmai();

                include "views/admin/khuyenmai/listkhuyenmai.php";
                break;

            case 'suakm':
                if (isset($_GET['id_km']) && ($_GET['id_km'] > 0)) {
                    $khuyenmai = loadone_khuyenmai($_GET['id_km']);
                }
                $listkhuyenmai = loadall_khuyenmai();
                include "views/admin/khuyenmai/updatekm.php";
                break;

            case 'updatekm':
                if (isset($_POST['btn-capnhat']) && ($_POST['btn-capnhat'])) {
                    $idkm = $_POST['idkm'];
                    $makm = $_POST['makm'];
                    $noidung = $_POST['noidung'];
                    $ngaytao = date('d/m/y');
                    $ngayhethan = date('d/m/y');
                    update_khuyenmai($idkm, $makm, $noidung, $ngaytao, $ngayhethan);
                    $thongbao = "Cập nhập thành công";
                }
                $listkhuyenmai = loadall_khuyenmai();

                include "views/admin/khuyenmai/updatekm.php";
                break;

            case 'xoakm':
                if (isset($_GET['id_km']) && ($_GET['id_km'] > 0)) {
                    delete_khuyenmai($_GET['id_km']);
                }
                $listkhuyenmai = loadall_khuyenmai();
                include "views/admin/khuyenmai/listkhuyenmai.php";
                break;
            case 'suadh':
                if(isset($_GET['ma_don_hang'])){
                    $ma_don_hang=$_GET['ma_don_hang'];
                    $data2 = donhang_get_chi_tiet($ma_don_hang);
                  
                $hiendh = donhang_list($ma_don_hang);
                if (isset($_POST['suadh']) && ($_POST['suadh'])) {
                    $trang_thai_don=$_POST['trang_thai_don'];
                    update_donhang($trang_thai_don,$ma_don_hang);
                    $thongbao = "Cập nhập thành công";
                    header('location: admin.php?act=listdonhang');
                    
                }
            }
                include "views/admin/donhang/suadh.php";
                break;
            case 'listdhhuy':
                $listdhhuy=listdhhuy();
                include "views/admin/donhang/huydh.php";
            case 'thoat':
                if (isset($_SESSION['quyen'])) unset($_SESSION['quyen']);
                header('Location: views/admin/login/login.php');
                case 'listbanner':

                    $listbanner = loadall_banner();
                    include "views/admin/banner/listbn.php";
                    break;
                case 'addbanner':
                    if (isset($_POST['btn-thembn']) && ($_POST['btn-thembn'])) {
                        $ten_banner = $_POST['ten_banner'];
                        $link = $_POST['link'];
    
                        $anh = $_FILES['anh']['name'];
                        $target_dir = "public/dist/img/banner/..";
                        $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                        if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                            echo "the file" . htmlspecialchars(basename($_FILES["anh"]["name"])) . " has been uploaded";
                        } else {
                            echo "Sorry, there was an error uploading your file";
                        }
                        insert_banner($ten_banner, $anh, $link);
                        $thongbao = "Thêm thành công";
                    }
                    //var_dump($listdanhmuc);
                    include "views/admin/banner/addbn.php";
                    break;
                case 'suabn':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $banner = loadone_banner($_GET['id']);
                    }
                    $listbanner = loadall_banner();
                    include "views/admin/banner/updatebn.php";
                    break;
    
                case 'updatebanner':
                    if (isset($_POST['btn-capnhat']) && ($_POST['btn-capnhat'])) {
                        $id= $_POST['id'];
                        $ten_banner = $_POST['ten_banner'];
                        $link = $_POST['link'];
    
                        $anh = $_FILES['anh']['name'];
                        $target_dir = "public/dist/img/banner/..";
                        $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                        if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                            echo "the file" . htmlspecialchars(basename($_FILES["anh"]["name"])) . " has been uploaded";
                        } else {
                            echo "Sorry, there was an error uploading your file";
                        }
                        update_banner($id,$ten_banner,$anh,$link);
                        $thongbao = "Cập nhập thành công";
                    }
                    $listbanner = loadall_banner();
                    include "views/admin/banner/listbn.php";
                    break;
    
                case 'xoabn':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_banner($_GET['id']);
                    }
                    $listbanner = loadall_banner();
                    include "views/admin/banner/listbn.php";
                    break;
        }
    } else {
        include "views/admin/home.php";
    }

    include "views/admin/footer.php";
} 

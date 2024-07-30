<?php
    function insert_donhang($ten_bai_viet,$ngay_dang,$hinh){
        $sql="insert into bai_viet(ten_bai_viet,ngay_dang,anh1) values('$ten_bai_viet','$ngay_dang','$hinh')";
        pdo_execute($sql);
    }

    function loadall_donhang(){
        $sql="select * from don_hang order by ma_don_hang desc";
        $listdonhang=pdo_query($sql);
        return $listdonhang;
    }
    function donhang_list_by_customer($ma_khach_hang){
        $sql = "SELECT * from don_hang WHERE ma_khach_hang = $ma_khach_hang ";
        $listdonhang=pdo_query($sql);
        return $listdonhang;
    }   
    // function donhang_get_chi_tiet($ma_don_hang){
    //     $sql = "SELECT * from chi_tiet_don_hang where ma_don_hang=$ma_don_hang";
      
    //     $listdonhang=pdo_query($sql);
    //     return $listdonhang;
    // }
    function donhang_get_chi_tiet($ma_don_hang) {
        $sql = "SELECT chi_tiet_don_hang.*, san_pham.ten_san_pham, san_pham.anh
                FROM chi_tiet_don_hang
                INNER JOIN san_pham ON chi_tiet_don_hang.ma_san_pham = san_pham.ma_san_pham
                WHERE chi_tiet_don_hang.ma_don_hang = $ma_don_hang";
    
        $listdonhang = pdo_query($sql);
        return $listdonhang;
    }
    
    function donhang_list($ma_don_hang){
        $sql = "SELECT * from don_hang WHERE ma_don_hang = $ma_don_hang ";
        $listdonhang=pdo_query($sql);
        return $listdonhang;
    }   
    function dh_list(){
        $sql = "SELECT * from don_hang  ";
        $listdonhang=pdo_query($sql);
        return $listdonhang;
    }   
    function update_donhang($trang_thai_don,$ma_don_hang){
        $sql = "UPDATE don_hang SET trang_thai_don='$trang_thai_don' where ma_don_hang=$ma_don_hang";
        pdo_execute($sql);
    }
    function listdhhuy(){
    $sql = "SELECT * from don_hang WHERE don_hang.trang_thai_don = 3 ";
    $listsp = pdo_query($sql);
    return $listsp;
    }
    function huydh($ma_don_hang){
        $sql = "UPDATE don_hang SET trang_thai_don= 3 where ma_don_hang=$ma_don_hang";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function nhandh($ma_don_hang){
        $sql = "UPDATE don_hang SET trang_thai_don= 2  where ma_don_hang=$ma_don_hang";
        $listsp = pdo_query($sql);
        return $listsp;
    }
?>
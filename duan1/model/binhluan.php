<?php 
function loadall_binhluan($ma_san_pham){
    $sql = "
        SELECT binh_luan.ma_binh_luan, binh_luan.noi_dung,binh_luan.anhbl, khach_hang.ten_khach_hang, binh_luan.ngay_binh_luan FROM `binh_luan` 
        LEFT JOIN khach_hang ON binh_luan.ma_khach_hang = khach_hang.ma_khach_hang
        LEFT JOIN san_pham ON binh_luan.ma_san_pham = san_pham.ma_san_pham
        WHERE san_pham.ma_san_pham = $ma_san_pham;
    ";
    $result =  pdo_query($sql);
    return $result;
}
function load_binhluan($ma_san_pham)
{
    $sql = "select * from binh_luan where 1";
    if ($ma_san_pham > 0) $sql .= " AND ma_san_pham=.'" . $ma_san_pham . "'";
    $sql .= " order by ma_binh_luan desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
// function loadall_binhluan($id_sanpham){
//     $sql = "select * from binh_luan where 1";
//     if($id_sanpham>0) $sql.=" AND id_sanpham =.'".$id_sanpham."'";
//     $sql.=" order by id_binh_luan desc";
//     $listbinhluan=pdo_query($sql);
//     return $listbinhluan;
// }
function delete_binhluan($ma_binh_luan){
    $sql = "delete from binh_luan where ma_binh_luan=" . $ma_binh_luan;
    pdo_execute($sql);
}

// model/binhluan.php

function insert_binhluan($ma_san_pham, $ma_khach_hang, $noi_dung,$anhbl) {
    $ngay_binh_luan = date('Y-m-d');

    // Chuan bi cau truy van
    $sql = "
        INSERT INTO `binh_luan`(`ma_san_pham`, `ma_khach_hang`, `noi_dung`, `anhbl`, `ngay_binh_luan`) 
        VALUES ('$ma_san_pham', '$ma_khach_hang', '$noi_dung', '$anhbl', '$ngay_binh_luan');
    ";

    // Thực hiện truy vấn
    pdo_execute($sql);
}
?>


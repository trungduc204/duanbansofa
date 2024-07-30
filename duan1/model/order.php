<?php
function addOrder($ma_khach_hang, $hoten, $sdt, $email, $diachi, $sum_total,$currentDateTime){
    $sql="INSERT INTO don_hang (ma_khach_hang, ho_ten, sdt, email, dia_chi, thanh_tien,ngay_dat_hang) VALUES ($ma_khach_hang, '$hoten', '$sdt', '$email', '$diachi', '$sum_total','$currentDateTime')";
    $id=pdo_query($sql);
    return $id;
}
function addOrderDetail($id_order, $id_pro, $giamua, $soluong, $thanhtien){
    $sql="INSERT INTO chi_tiet_don_hang (ma_don_hang,ma_san_pham,so_luong,don_gia,thanh_tien) VALUES ($id_order, $id_pro, $soluong,$giamua, $thanhtien );";
    pdo_execute($sql);
}
function listdon_hang(){
    $sql = "SELECT * from don_hang ";
    $listnd = pdo_query($sql);
    return $listnd;
}

?>
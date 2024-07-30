<?php
function load_nd()
{
    $sql = "SELECT * from nguoi_dung where nguoi_dung.trang_thai = 0";
    $listnd = pdo_query($sql);
    return $listnd;
}
function   them_nd($tennv, $email, $matkhau, $quyen, $sdt, $diachi, $ngaysinh,$hinh)
{
    $sql = "INSERT INTO nguoi_dung(ten_nhan_vien,email,mat_khau,avt,quyen,sdt,dia_chi,ngay_sinh) VALUES ('$tennv', '$email', '$matkhau','$hinh', '$quyen', '$sdt', '$diachi', '$ngaysinh')";
 pdo_execute($sql);
   
}
function load_nd_delete()
{
    $sql = "SELECT * from nguoi_dung WHERE nguoi_dung.trang_thai = 1 ";
    $listnd = pdo_query($sql);
    return $listnd;
}
function xoa_memnd($ma_nhan_vien){
    $sql = "UPDATE `nguoi_dung` SET `trang_thai` = 1 WHERE `nguoi_dung`.`ma_nhan_vien` = $ma_nhan_vien";
    pdo_execute($sql);
}
function khoiphucnd($ma_nhan_vien){
    $sql = "UPDATE `nguoi_dung` SET `trang_thai` = 0 WHERE `nguoi_dung`.`ma_nhan_vien` = $ma_nhan_vien";
    pdo_execute($sql);
}
function delete_nguoidung($ma_nhan_vien){
    $sql = "delete from nguoi_dung where ma_nhan_vien=" . $ma_nhan_vien;
    pdo_execute($sql);
}

function update_nd($ma_nhan_vien,$tennv, $email, $matkhau, $quyen, $sdt, $diachi, $ngaysinh, $hinh){
    if($hinh!=""){
        $sql = "UPDATE nguoi_dung SET ten_nhan_vien='$tennv', email='$email', mat_khau='$matkhau',quyen='$quyen',sdt='$sdt',dia_chi='$diachi',ngay_sinh='$ngaysinh'avt='$hinh' WHERE ma_nhan_vien=$ma_nhan_vien";
    }else{
        $sql = "UPDATE nguoi_dung SET ten_nhan_vien='$tennv', email='$email', mat_khau='$matkhau',quyen='$quyen',sdt='$sdt',dia_chi='$diachi',ngay_sinh='$ngaysinh' WHERE ma_nhan_vien=$ma_nhan_vien";

    pdo_execute($sql);
    }
}
function hiennd($ma_nhan_vien){
    $sql = "SELECT * FROM nguoi_dung WHERE ma_nhan_vien = $ma_nhan_vien";
    $arr = pdo_query_one($sql);
    return $arr;
}
function htquyen(){
    $sql = "SELECT*FROM quyen";
    $result = pdo_query($sql);
    return $result;
}
?>
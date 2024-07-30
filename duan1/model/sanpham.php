<?php
function them_sp($tensp,$idlh,$mota,$ngaythem,$giasp,$soluong,$hinh,$anh1,$anh2,$anh3)
{
    $sql = "INSERT INTO san_pham(ten_san_pham, ma_loai_hang, mo_ta, ngay_them, don_gia, so_luong, anh,anh1,anh2,anh3) VALUES ('$tensp', '$idlh', '$mota', '$ngaythem', '$giasp', '$soluong', '$hinh','$anh1','$anh2','$anh3')";
 pdo_execute($sql);
   
}
function load_sp()
{
    $sql = "SELECT san_pham.*, loai_hang.ten_loai_hang
            FROM san_pham
            INNER JOIN loai_hang ON san_pham.ma_loai_hang = loai_hang.ma_loai_hang
            WHERE san_pham.trang_thai = 0
            ORDER BY san_pham.ma_san_pham DESC";
    $listsp = pdo_query($sql);
    return $listsp;
}


function load_sp_delete()
{
    $sql = "SELECT * from san_pham WHERE san_pham.trang_thai = 1 ";
    $listsp = pdo_query($sql);
    return $listsp;
}
function xoa_mem($ma_san_pham){
    $sql = "UPDATE `san_pham` SET `trang_thai` = 1 WHERE `san_pham`.`ma_san_pham` = $ma_san_pham";
    pdo_execute($sql);
}
function khoiphucsp($ma_san_pham){
    $sql = "UPDATE `san_pham` SET `trang_thai` = 0 WHERE `san_pham`.`ma_san_pham` = $ma_san_pham";
    pdo_execute($sql);
}
function delete_sanpham($ma_san_pham){
    $sql = "delete from san_pham where ma_san_pham=" . $ma_san_pham;
    pdo_execute($sql);
}
function update_sp($ma_san_pham,$tensp, $idlh, $mota, $ngaythem, $giasp, $soluong, $hinh,$anh1,$anh2,$anh3){
    if($hinh!=""){
        $sql = "UPDATE san_pham SET ten_san_pham='$tensp', ma_loai_hang='$idlh', mo_ta='$mota',ngay_them='$ngaythem',don_gia='$giasp',so_luong='$soluong',anh='$hinh',anh1='$anh1',anh2='$anh2',anh3='$anh3' WHERE ma_san_pham=$ma_san_pham";
    }else{
        $sql = "UPDATE san_pham SET ten_san_pham='$tensp', ma_loai_hang='$idlh', mo_ta='$mota',ngay_them='$ngaythem',don_gia='$giasp',so_luong='$soluong' WHERE ma_san_pham=$ma_san_pham";
      
    }
    pdo_execute($sql);
}
function hiensp($ma_san_pham) {
    $sql = "SELECT * FROM san_pham WHERE ma_san_pham = $ma_san_pham";
    $arr = pdo_query_one($sql);
    return $arr;
}
function load_sp_top()
{
    $sql = "SELECT * from san_pham where 1 order by luot_xem desc limit 0,5";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_sp_top1()
{
    $sql = "SELECT * from san_pham where 1 order by luot_xem desc limit 0,7";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_spone($ma_san_pham)
{
    $sql = "SELECT * from san_pham where ma_san_pham =". $ma_san_pham;
    $onesp = pdo_query_one($sql);
    return $onesp;
}
function load_ten_dm($ma_loai_hang)
{
    if($ma_loai_hang>0){
        $sql = "SELECT * from loai_hang where ma_loai_hang =" . $ma_loai_hang;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_loai_hang;
    }
    else{
        return "";
    }
}
function list_sp($ma_loai_hang = 0)
{
    $sql = "SELECT * FROM san_pham WHERE trang_thai = 0";
    if ($ma_loai_hang > 0) {
        $sql .= " AND ma_loai_hang = '$ma_loai_hang'";
    }
    $listsp = pdo_query($sql);
    return $listsp;
}

function load_sp_cungloai($ma_san_pham, $ma_loai_hang)
{
    $sql = "SELECT * FROM san_pham WHERE ma_loai_hang = $ma_loai_hang AND ma_san_pham <> $ma_san_pham";
    $listspcl = pdo_query($sql);
    return $listspcl;
}

function loadone_sanphamCart($idlist){
    $sql = "SELECT * from san_pham where ma_san_pham IN ($idlist)";
    $listsp = pdo_query($sql);
    return $listsp;
}
function san_pham_search($key1=""){
    
    $sql = "SELECT * from san_pham where trang_thai = 0";
    if ($key1 != "") {
        $sql .= " and ten_san_pham like '%" . $key1 . "%'";
    }
    // $sql .=" order by ma_san_pham desc";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadsp_luotxem(){
    $sql = "SELECT * from san_pham order by luot_xem desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadsp_ngaymoi(){
    $sql = "SELECT * from san_pham order by ngay_them desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadsp_giagiam(){
    $sql = "SELECT * from san_pham order by don_gia desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadsp_giatang(){
    $sql = "SELECT * from san_pham order by don_gia asc";
    $listsp = pdo_query($sql);
    return $listsp;
}
?>
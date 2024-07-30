<?php 
function ds_loaihang(){
    $sql = "SELECT*FROM loai_hang";
    $sql.=" order by ma_loai_hang desc";
    $result = pdo_query($sql);
    return $result;
}
function add_loaihang($ten_loai_hang,$mo_ta,$anh){
    $sql = "INSERT INTO loai_hang(ten_loai_hang,mo_ta,anh)VALUES('$ten_loai_hang','$mo_ta','$anh')";
    pdo_execute($sql);
}
// function update($ma_loai_hang, $ten_loai_hang, $mo_ta,$anh) {
//     $sql = "UPDATE loai_hang SET ten_loai_hang='$ten_loai_hang', mo_ta='$mo_ta',anh='$anh' WHERE ma_loai_hang=$ma_loai_hang";
//     pdo_query($sql);
//     echo '<script>window.location.href="?act=loaihang";</script>';
// }
function update($ma_loai_hang,$ten_loai_hang, $mo_ta, $anh){
    if($anh!=""){
        $sql = "UPDATE loai_hang SET ten_loai_hang='$ten_loai_hang', mo_ta='$mo_ta',anh='$anh' WHERE ma_loai_hang=$ma_loai_hang";
    }else{
        $sql = "UPDATE loai_hang SET ten_loai_hang='$ten_loai_hang', mo_ta='$mo_ta' WHERE ma_loai_hang=$ma_loai_hang";
        
    }
    pdo_execute($sql);
       echo '<script>window.location.href="?act=loaihang";</script>';
}
// function update($ma_loai_hang, $ten_loai_hang, $mo_ta, $anh) {
//     if ($anh != "") {
//         $sql = "UPDATE loai_hang SET ten_loai_hang=?, mo_ta=?, anh=? WHERE ma_loai_hang=?";
//         pdo_execute($sql, array($ten_loai_hang, $mo_ta, $anh, $ma_loai_hang));
//     } else {
//         $sql = "UPDATE loai_hang SET ten_loai_hang=?, mo_ta=? WHERE ma_loai_hang=?";
//         pdo_execute($sql, array($ten_loai_hang, $mo_ta, $ma_loai_hang));
//     }
// }

function hien($ma_loai_hang) {
    $sql = "SELECT * FROM loai_hang WHERE ma_loai_hang = $ma_loai_hang";
    $arr = pdo_query_one($sql);
    return $arr;
}
function delete_loaihang($ma_loai_hang){
    $sql = "delete from loai_hang where ma_loai_hang=" . $ma_loai_hang;
    pdo_execute($sql);
}
function loadspdm($ma_loai_hang){
    if($ma_loai_hang>0){
        $sql="select * from san_pham where ma_san_pham=".$ma_loai_hang;//Nối chuỗi
        $lh=pdo_query_one($sql);
        extract($lh);//Dạng mảng về dạng biến
        return $ten_san_pham;
    }else{
        return "";
    }
}
?>
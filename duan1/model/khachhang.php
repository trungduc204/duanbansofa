<?php 
function listkhachhang(){
    $sql="SELECT*FROM khach_hang WHERE khach_hang.trang_thai = 0";
    $sql.=" order by ma_khach_hang desc";
$arr=pdo_query($sql);
return $arr;
}
function addkhachhang($ten_khach_hang,$mat_khau,$dia_chi,$ngay_sinh,$sdt,$email,$avt){
   
    $sql = "INSERT INTO khach_hang(ten_khach_hang,mat_khau,dia_chi,ngay_sinh,sdt,email,avt) VALUES ('$ten_khach_hang', '$mat_khau', '$dia_chi', '$ngay_sinh','$sdt', '$email','$avt')";
    pdo_query($sql);

}
function listkhdaxoa(){
    $sql="SELECT*FROM khach_hang WHERE khach_hang.trang_thai = 1";
$arr=pdo_query($sql);
return $arr;
}
function soft_delete($ma_khach_hang){
    $sql = "UPDATE `khach_hang` SET `trang_thai` = 1 WHERE `khach_hang`.`ma_khach_hang` = $ma_khach_hang";
    pdo_execute($sql);
}
function khoiphuc($ma_khach_hang){
    $sql = "UPDATE `khach_hang` SET `trang_thai` = 0 WHERE `khach_hang`.`ma_khach_hang` = $ma_khach_hang";
    pdo_execute($sql);
}
function delete_khachhang($ma_khach_hang){
    $sql = "delete from khach_hang where ma_khach_hang=" . $ma_khach_hang;
    pdo_execute($sql);
}
// function update_khachhang($ma_khach_hang, $ten_khach_hang, $mat_khau,$dia_chi,$ngay_sinh,$sdt,$email,$avt) {
//     $sql = "UPDATE loai_hang SET ten_khach_hang='$ten_khach_hang', mat_khau='$mat_khau', dia_chi='$dia_chi',ngay_sinh='$ngay_sinh',sdt='$sdt',email='$email',avt='$avt' WHERE ma_khach_hang=$ma_khach_hang";
//     pdo_query($sql);
//     echo '<script>window.location.href="?act=khachhang";</script>';
// }
// function update_khachhang($ten_khach_hang, $mat_khau,$dia_chi,$ngay_sinh,$sdt,$email,$ma_khach_hang){
//     $sql = "UPDATE khach_hang SET ten_khach_hang=?, mat_khau=?, dia_chi=?, ngay_sinh=?, sdt=?, email=? WHERE ma_khach_hang=?";
//     $params = [$ten_khach_hang, $mat_khau, $dia_chi, $ngay_sinh, $sdt, $email, $ma_khach_hang];
    
//   $result=  pdo_execute($sql, $params);
//     return $result;

// }

// function loadone_khachhang($ma_khach_hang){
//     $sql = "SELECT * FROM khach_hang WHERE ma_khach_hang = '$ma_khach_hang'";
//     $result= pdo_query_one($sql);
//     return $result;

// }
function  update_kh($ma_khach_hang, $ten_khach_hang, $mat_khau, $dia_chi, $ngay_sinh, $sdt, $email){
   
        $sql = "UPDATE khach_hang SET ten_khach_hang='$ten_khach_hang',  mat_khau='$mat_khau',dia_chi='$dia_chi', ngay_sinh='$ngay_sinh',sdt='$sdt', email='$email' WHERE ma_khach_hang=$ma_khach_hang ";
    
    pdo_execute($sql);
    }

function hienkh($ma_khach_hang){
    $sql = "SELECT * FROM khach_hang WHERE ma_khach_hang = $ma_khach_hang";
    $arr = pdo_query_one($sql);
    return $arr;
}
function account_user_register($email, $password, $hoten, $phone, $diachi)
{
    $sql = "INSERT INTO `khach_hang` ( `email`, `ten_khach_hang`, `mat_khau`,`sdt`,`dia_chi`) VALUES ( '$email', '$hoten','$password','$phone','$diachi')";
    pdo_execute($sql);
}

function account_user_login($email,$password){
    $sql = "SELECT * FROM khach_hang WHERE email='$email' and mat_khau='$password'";
    $arr= pdo_query_one($sql);
    return $arr;
}
function load_kh($email){
    $sql="select * from khach_hang where email='$email'";
    $arr=pdo_query_one($sql);
    return $arr; 

}
function capnhat_kh($ma_khach_hang, $ten_khach_hang, $email,$anh,$sdt,$dia_chi){
    $sql = "UPDATE khach_hang SET ten_khach_hang='$ten_khach_hang',dia_chi='$dia_chi',sdt='$sdt', email='$email',avt='$anh' WHERE ma_khach_hang=$ma_khach_hang ";
    pdo_execute($sql);
}

function account_update_password($newpassword,$ma_khach_hang){
    $sql = "UPDATE khach_hang SET mat_khau='$newpassword' WHERE ma_khach_hang=$ma_khach_hang";
    $arr= pdo_query_one($sql);
    return $arr;
}
function user_login($email,$mat_khau){
    $sql = "SELECT * FROM nguoi_dung WHERE email='$email' and mat_khau='$mat_khau'";
    $arr= pdo_query_one($sql);
    return $arr;
}
function hien_kh(){
    $sql = "SELECT * FROM khach_hang ";
    $arr = pdo_query($sql);
    return $arr;
}
?>
<?php 
function listhethong(){
    $sql="SELECT*FROM he_thong";
    // $sql.=" order by ma_khach_hang desc";
$arr=pdo_query($sql);
return $arr;
}
function add_hethong($ten_cua_hang,$sdt,$email,$dia_chi,$logo){
    $sql = "INSERT INTO he_thong(ten_cua_hang,sdt,email,dia_chi,logo)VALUES('$ten_cua_hang','$sdt','$email','$dia_chi','$logo')";
    pdo_execute($sql);
}
function hienht($id_ht) {
    $sql = "SELECT * FROM he_thong WHERE id_ht = $id_ht";
    $arr = pdo_query_one($sql);
    return $arr;
}
function updateht($id_ht,$ten_cua_hang,$sdt,$email,$dia_chi,$logo){
    if($logo!=""){
        $sql = "UPDATE he_thong SET ten_cua_hang='$ten_cua_hang', sdt='$sdt',email='$email', dia_chi='$dia_chi',logo='$logo' WHERE id_ht=$id_ht";
    }else{
        $sql = "UPDATE he_thong SET ten_cua_hang='$ten_cua_hang', sdt='$sdt', email='$email',dia_chi='$dia_chi'  WHERE id_ht=$id_ht";
        
    }
    pdo_execute($sql);
       echo '<script>window.location.href="?act=hethong";</script>';
}
?>
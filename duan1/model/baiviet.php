<?php

    function insert_baiviet($tenbaiviet,$noidung,$ngaydang,$anh){
        $sql="insert into bai_viet(ten_bai_viet,noi_dung,ngay_dang,anh1) values('$tenbaiviet','$noidung','$ngaydang','$anh')";
        pdo_execute($sql);
    }

    function loadall_baiviet(){
        $sql="select * from bai_viet order by id_bai_viet desc";
        $listbaiviet=pdo_query($sql);
        return $listbaiviet;
    }

    function update_baiviet($idbaiviet,$tenbaiviet,$noidung,$ngaydang,$anh){
        if($anh!="")
            $sql="update bai_viet set ten_bai_viet='".$tenbaiviet."',noi_dung='".$noidung."',ngay_dang='".$ngaydang."',anh1='".$anh."' where id_bai_viet=".$idbaiviet;
        else 
            $sql="update bai_viet set ten_bai_viet='".$tenbaiviet."',noi_dung='".$noidung."',ngay_dang='".$ngaydang."' where id_bai_viet=".$idbaiviet;
        pdo_execute($sql);
    }

    function loadone_baiviet($id_bai_viet){
        $sql="select * from bai_viet where id_bai_viet=".$id_bai_viet;
        $baiviet=pdo_query_one($sql);
        return $baiviet;
    }

    function delete_baiviet($id_bai_viet){
        $sql="delete from bai_viet where id_bai_viet=".$id_bai_viet;
        pdo_execute($sql);
    }
?>

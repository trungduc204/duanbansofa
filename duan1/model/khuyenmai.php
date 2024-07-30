<?php

    function insert_khuyenmai($makm,$noidung,$ngaytao,$ngayhethan){
        $sql="insert into khuyen_mai(ma_km,noi_dung,ngay_tao,ngay_het_han) values('$makm','$noidung','$ngaytao','$ngayhethan')";
        pdo_execute($sql);
    }

    function loadall_khuyenmai(){
        $sql="select * from khuyen_mai order by id_km desc";
        $listkhuyenmai=pdo_query($sql);
        return $listkhuyenmai;
    }

    function update_khuyenmai($idkm,$makm,$noidung,$ngaytao,$ngayhethan){
        $sql="update khuyen_mai set ma_km='".$makm."',noi_dung='".$noidung."',ngay_tao='".$ngaytao."',ngay_het_han='".$ngayhethan."' where id_km=".$idkm;
        pdo_execute($sql);
    }

    function loadone_khuyenmai($id_km){
        $sql="select * from khuyen_mai where id_km=".$id_km;
        $km=pdo_query_one($sql);
        return $km;
    }

    function delete_khuyenmai($id_km){
        $sql="delete from khuyen_mai where id_km=".$id_km;
        pdo_execute($sql);
    }

?>
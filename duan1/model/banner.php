<?php 
  function insert_banner($ten_banner,$anh,$link){
    $sql="insert into banner_anh(ten_banner,anh,link) values('$ten_banner','$anh','$link')";
    pdo_execute($sql);
}

function loadall_banner(){
    $sql="select * from banner_anh order by id desc";
    $listbanner=pdo_query($sql);
    return $listbanner;
}

function update_banner($id,$ten_banner,$anh,$link){
    if($anh!="")
        $sql="update banner_anh set ten_banner='".$ten_banner."',anh='".$anh."',link='".$link."' where id=".$id;
    else 
    $sql="update banner_anh set ten_banner='".$ten_banner."',link='".$link."' where id=".$id;
    pdo_execute($sql);
}

function loadone_banner($id){
    $sql="select * from banner_anh where id=".$id;
    $banner=pdo_query_one($sql);
    return $banner;
}

function delete_banner($id){
    $sql="delete from banner_anh where id=".$id;
    pdo_execute($sql);
}

?>
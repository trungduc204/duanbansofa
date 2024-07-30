<?php
     function loadall_lienhe(){
        $sql="select * from lien_he order by id desc";
        $listlienhe=pdo_query($sql);
        return $listlienhe;
    }
    function delete_lh($id){
        $sql = "delete from lien_he where id=" . $id;
        pdo_execute($sql);
    }
?>
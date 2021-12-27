<?php
    include('../../config/config.php');

    $tenth = $_POST['tenthuonghieu'];
    if(isset($_POST['themthuonghieu'])){
        $sql_them = "INSERT INTO tbl_thuonghieu(tenthuonghieu) VALUE('".$tenth."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php?action=quanlythuonghieu&query=them');
    }elseif(isset($_POST['suathuonghieu'])){
        $sql_update = "UPDATE tbl_thuonghieu SET tenthuonghieu='".$tenth."'
        WHERE id_thuonghieu='$_GET[idthuonghieu]'";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=quanlythuonghieu&query=them');
    }else{
        $id=$_GET['idthuonghieu'];
        $sql_xoa = "DELETE FROM tbl_thuonghieu WHERE id_thuonghieu='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlythuonghieu&query=them');
    }
?>
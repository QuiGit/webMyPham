<?php
    include('../../config/config.php');

    $tenkh = $_POST['tenkhachhang'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $dt = $_POST['dienthoai'];
    if(isset($_POST['suakhachhang'])){
        $sql_update = "UPDATE tbl_dangky SET tenkhachhang='".$tenkh."',email='".$email."',diachi='".$diachi."'
        ,dienthoai='".$dt."' WHERE id_dangky='$_GET[iddangky]'";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=quanlyngdung&query=lietke');
    }else{
        $id=$_GET['iddangky'];
        $sql_xoa = "DELETE FROM tbl_dangky WHERE id_dangky='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        // header('Location:../../index.php?action=quanlyngdung&query=lietke');
    }
?>
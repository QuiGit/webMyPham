<?php
    include('../../config/config.php');
    if(isset($_GET['code'])){
        $code_cart = $_GET['code'];
        $sql = "UPDATE tbl_cart SET cart_status=0 WHERE code_cart='".$code_cart."'";
        $query = mysqli_query($mysqli,$sql);
        header('Location:../../index.php?action=quanlydonhang&query=lietke');
    }else{
        $id=$_GET['idcart'];
        $sql_xoa = "DELETE FROM tbl_cart WHERE id_cart='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlydonhang&query=lietke');
    }
?>
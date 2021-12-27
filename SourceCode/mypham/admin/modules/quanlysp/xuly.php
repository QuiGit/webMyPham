<?php
    include('../../config/config.php');

    $tensanpham = $_POST['tensanpham'];
    $giasp = $_POST['giasp'];
    $noidung = $_POST['noidung'];
    $danhmuc = $_POST['danhmuc'];
    $thuonghieu = $_POST['thuonghieu'];
    
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp =$_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;

    if(isset($_POST['themsanpham'])){

        $sql_them = "INSERT INTO tbl_sanpham(tensanpham,giasp,hinhanh,noidung,id_danhmuc,id_thuonghieu) 
        VALUE('".$tensanpham."','".$giasp."','".$hinhanh."','".$noidung."','".$danhmuc."','".$thuonghieu."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanlysanpham&query=them');
        
    }elseif(isset($_POST['suasanpham'])){
        
        if($hinhanh!=''){
            
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }

            $sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',giasp='".$giasp."'
            ,hinhanh='".$hinhanh."',noidung='".$noidung."',id_danhmuc='".$danhmuc."',id_thuonghieu='".$thuonghieu."'
            WHERE id_sanpham='$_GET[idsanpham]'"; 

        }else{
          
            $sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',giasp='".$giasp."'
            ,hinhanh='".$hinhanh."',noidung='".$noidung."',id_danhmuc='".$danhmuc."',id_thuonghieu='".$thuonghieu."'
            WHERE id_sanpham='$_GET[idsanpham]'"; 
        }
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }elseif(isset($_POST['trove'])){
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }else{
        $id = $_GET['idsanpham'];
        $sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa ="DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
    
?>
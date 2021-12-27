<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
    $sql_th = "SELECT * FROM tbl_thuonghieu ORDER BY id_thuonghieu DESC";
    $query_th = mysqli_query($mysqli,$sql_th);
?>
<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    }
?>

<ul class="menu">
    <li><a href="index.php"><p  ><i class="fa fa-bars"></i> Danh Mục Sản Phẩm<p></a>
        <ul class="menu_mini">
            <?php
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC LIMIT 13";
                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                while($row = mysqli_fetch_array($query_danhmuc)){
            ?>
                <li><a href="sanpham.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></a></li>
            <?php
                }
            ?>
		</ul>    
    </li>
	<li ><a href="index.php"><p>Trang chủ<p></a></li>
		
	<li ><a href=""><p>Thương hiệu</p></a>
		<ul class="menu_mini">
            <?php
                $sql_th = "SELECT * FROM tbl_thuonghieu ORDER BY id_thuonghieu DESC LIMIT 14";
                $query_th = mysqli_query($mysqli,$sql_th);
                while($row = mysqli_fetch_array($query_th)){
            ?>
                <li><a href="thuonghieu.php?quanly=danhmucsanpham&id=<?php echo $row['id_thuonghieu']?>"><?php echo $row['tenthuonghieu']?></a></li>
            <?php
                }
            ?>
		</ul>
	</li>
    <li><a href="giohang.php?quanly=giohang"><p>Giỏ hàng<p></a>
            
    </li> 
</ul>


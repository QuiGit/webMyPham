<!-- <link rel="stylesheet" type="text/css" href="/sanpham.css">   
<h3>Sản phẩm mới nhất</h3>    


<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    AND id_sanpham LIMIT 2";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);

    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>

                <a href="chitiet.php?quanly=sanpham&id=<?php echo $row_chitiet['id_sanpham']?>">
                    <img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>"> 
                </a>
                <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                <ul>
                <li>
                <a href="chitiet.php?quanly=sanpham&id=<?php echo $row_chitiet['id_sanpham']?>">
                <h1><?php echo $row_chitiet['tensanpham']?></h1>
                
                <p><b>Giá sản phẩm:</b> <?php echo number_format( $row_chitiet['giasp'],0,',','.').' '.'vnđ'?></p>
                <p><b>Số lượng:</b> <?php echo  $row_chitiet['soluong'].' '.'sản phẩm'?></p>
                </a>
                
                <p><b>Danh mục:</b> <?php echo $row_chitiet['tendanhmuc']?></p>
                <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm vào giỏ hàng"></p>
            
                </form>
                <?php
                    }
                ?>        -->

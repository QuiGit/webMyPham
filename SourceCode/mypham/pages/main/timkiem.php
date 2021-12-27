<!-- <?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND
     tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli,$sql_pro);
?>
<h3>Từ khóa tìm kiếm: <?php echo $_POST['tukhoa'] ?></h3>
    <ul class="product_list">
                    <?php
                        while($row = mysqli_fetch_array($query_pro)){
                    ?>
                     <li style="height:350px"> 
                        <a href="timkiem.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                            <img style="height:200px" src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>">
                            <p>Ten san pham: <?php echo $row['tensanpham'] ?></p>
                            <p>Gia: <?php echo number_format($row['giasp'],0,',','.').'vnd'?></p>
                            <p><?php echo $row['tendanhmuc'] ?></p>
                        </a> 
                    </li>
                    <?php
                        }
                    ?>
                </ul>
                -->

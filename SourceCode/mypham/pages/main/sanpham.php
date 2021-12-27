<!-- Chi tiết sản phẩm

<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
    AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div>
    <div class="hinhanh_chitiet">
        <img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>"> 
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
    <div class="thongtin">
        <h1><?php echo $row_chitiet['tensanpham']?></h1>
        <p><b>Mã sản phẩm:</b> <?php echo $row_chitiet['masp']?></p>
        <p><b>Giá sản phẩm:</b> <?php echo number_format( $row_chitiet['giasp'],0,',','.').' '.'vnđ'?></p>
        <p><b>Số lượng:</b> <?php echo  $row_chitiet['soluong'].' '.'sản phẩm'?></p>
        <p><b><?php echo $row_chitiet['tensanpham']?></b></p>
        <h3 style="font-weight: unset; margin-left:40px; margin-top:10px; margin-bottom:10px"><?php echo $row_chitiet['tomtat']?></h3>
        <hr>
        <h3 style="font-weight: unset; margin-left:40px; margin-top:10px"><?php echo $row_chitiet['noidung']?></h3>
        <p><b>Danh mục:</b> <?php echo $row_chitiet['tendanhmuc']?></p>
        <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm vào giỏ hàng"></p>
    </div>
    </form>
    <?php
        }
    ?>
</div> -->

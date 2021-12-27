<!-- <?php
    session_start();
    include("admin/config/config.php");
?>
<?php
    
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE ('".$id_khachhang."','".$code_order."',1)";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){
        //them chi tiet
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua)
            VALUE('".$id_sanpham."','".$code_order."','".$soluong."') ";
            mysqli_query($mysqli,$insert_order_details);
        }
    } 
    unset($_SESSION['cart']);
?> 

<?php

$sql_xem = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham
AND tbl_cart_details.code_cart='$_GET[code]'";
$query_xem = mysqli_query($mysqli,$sql_xem);
?>
<h3>Xem đơn hàng</h3>
<table border="1" style="border-collapse: collapse; width:100%; font-size:20px">
<tr>
    <th>ID</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
</tr>
<?php
$i = 0;
$tong = 0;
while($row = mysqli_fetch_array( $query_xem)){
  $i++;
  $tong += $row['dagiam']*$row['soluongmua'];
?>

<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['code_cart'] ?></td>
<td><?php echo $row['tensanpham'] ?></td>
<td><?php echo $row['soluongmua'] ?></td>
<td><?php echo number_format( $row['dagiam'],0,',','.').' '.'vnđ' ?></td>
<td><?php echo number_format($row['dagiam']*$row['soluongmua'],0,',','.').' '.'vnđ'?>
</tr>
<?php
}
?>
<tr>
<td colspan="6">
        <p>Tổng tiền: <?php echo number_format($tong,0,',','.').' '.'vnđ'?> </p>
</td>
</tr>
</table> -->
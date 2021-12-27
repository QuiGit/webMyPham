
<?php

    $sql_xem = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham
    AND tbl_cart_details.code_cart='$_GET[code]'";
    $query_xem = mysqli_query($mysqli,$sql_xem);
?>
<h3 style="text-align:center;padding:20px">Xem đơn hàng</h3>
<table border="1" style="border-collapse: collapse; width:99%; font-size:20px;;margin-bottom:10px;margin-left:10px">
  <tr>
        <th>STT</th>
        <th>Mã</th>
       
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
      $tong += $row['giasp']*$row['soluongmua'];
  ?>

  <tr>
    <td style="width:10px;text-align:center"><?php echo $i ?></td>
    <td style="width:50px;text-align:center"><?php echo $row['code_cart'] ?></td>
    <td style="width:500px">
      <table>
          <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="50px"></td>
          <td style="padding:0 5px"><?php echo $row['tensanpham'] ?></td>
      </table>  
    </td>
    <td style="width:10px;text-align:center"><?php echo $row['soluongmua'] ?></td>
    <td style="width:150px;text-align:center"><?php echo number_format( $row['giasp'],0,',','.').' '.'vnđ' ?></td>
    <td style="width:150px;text-align:center"><?php echo number_format($row['giasp']*$row['soluongmua'],0,',','.').' '.'vnđ'?>
  </tr>
  <?php
  }
  ?>
  <tr>
    <td colspan="6">
      <table>
        <tr>
          <td><a style="text-decoration: none;color:#8C512D;margin-left:10px" href="index.php?action=quanlydonhang&query=lietke">
          <i class="fas fa-angle-double-left"></i> </a> </td>
          <td><p style="margin-left:690px;width:250px">Tổng tiền: <?php echo number_format($tong,0,',','.').' '.'vnđ'?> </p></td>
        </tr>
      </table>
            
    </td>
  </tr>
</table>

<?php
    $sql_lietke_donhang = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky 
    ORDER BY tbl_cart.id_cart DESC";
    $query_lietke_donhang = mysqli_query($mysqli,$sql_lietke_donhang);
?>
<h3 style="text-align:center;padding:20px">Tất cả đơn hàng</h3>
<table border="1" style="border-collapse: collapse; width:980px; font-size:20px;margin-left:10px;margin-bottom:10px">
  <tr style="height:50px">
    <th>STT</th>
    <th>Mã</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>SĐT</th>
    <th>Email</th>
    <th>Tình trạng</th>
    <th>  </th>
    <th></th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array( $query_lietke_donhang)){
      $i++;
  ?>
  <tr>
    <td style="width:10px; text-align:center"><?php echo $i ?></td>
    <td style="padding:0 5px"><?php echo $row['code_cart'] ?></td>
    <td style="padding:0 5px"><?php echo $row['tenkhachhang'] ?></td>
    <td style="padding:0 5px"><?php echo $row['diachi'] ?></td>
    <td style="padding:0 5px"><?php echo $row['dienthoai'] ?></td>
    <td style="padding:0 5px"><?php echo $row['email'] ?></td>
    <td style="padding:0 5px">
        <?php if($row['cart_status']==1){
            echo '<a style="text-decoration: none;" href="modules/quanlydonhang/xuly.php?cart_status=0&code='.$row['code_cart'].'">Đơn hàng mới</a>';
        }else{
            echo '<p>Đã xem</p>';
        }
        
        ?>
    </td>
    <td style="width:50px;">
        <a style="text-decoration: none;padding:0 5px" href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">
        Xem
        </a> 
    </td>
    <td style=" text-align:center;width:20px">
          <a href="modules/quanlydonhang/xuly.php?idcart=<?php echo $row['id_cart']?>">
            <i class="fas fa-times" style="color:red"></i>
          </a>
      </td> 
  </tr>
  <?php
  }
  ?>
  
</table>
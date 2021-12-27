<?php
    $sql_lietke_khachhang = "SELECT * FROM tbl_dangky ORDER BY id_dangky DESC";
    $query_lietke_khachhang = mysqli_query($mysqli,$sql_lietke_khachhang);
?>
<div class="lietke">
  <table class="lietke-1" border="1" style="border-collapse: collapse;width:100%;margin-bottom:10px">
    <tr >
      <th>STT</th>
      <th>Tên khách hàng</th>
      <th>Email</th>
      <th>Địa chỉ</th>
      <th>Điện thoại</th>
      <th></th>
      <th></th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_khachhang)){
        $i++;
    ?>
    <tr>
      <td style="width:10px; text-align:center"><?php echo $i ?></td>
      <td style="padding:0 10px"><?php echo $row['tenkhachhang'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['diachi'] ?></td>
      <td><?php echo $row['dienthoai'] ?></td>
      <td style=" text-align:center;width:40px">
            <a href="index.php?action=quanlyngdung&query=sua&iddangky=<?php echo $row['id_dangky']?>">
                <i class="fas fa-user-edit" style="color:#8C512D"></i>
            </a>
        </td>
      <td style=" text-align:center;width:20px">
            <a href="modules/quanlyngdung/xuly.php?iddangky=<?php echo $row['id_dangky']?>">
                <i class="fas fa-times" style="color:red"></i>
            </a>
        </td> 
    </tr>
    <?php
    }
    ?>
    
  </table>
  </div>
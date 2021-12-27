<?php
    $sql_lietke_danhmucth = "SELECT * FROM tbl_thuonghieu ORDER BY thutu ASC ";
    $query_lietke_danhmucth = mysqli_query($mysqli,$sql_lietke_danhmucth);
?>
<div class="lietke">
<table class="lietke-1" border="1" style="border-collapse: collapse;width:100%;margin-bottom:10px ">
  <tr style="height:50px">
    <th>STT</th>
    <th>Tên thương hiệu</th>
    <th></th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array( $query_lietke_danhmucth)){
      $i++;
  ?>
  <tr>
    <td style="width:10px; text-align:center"><?php echo $i ?></td>
    <td style="padding:0 10px"><?php echo $row['tenthuonghieu'] ?></td>
    <td style=" text-align:center;width:40px"><a href="index.php?action=quanlythuonghieu&query=sua&idthuonghieu=<?php echo $row['id_thuonghieu']?>">
          <i class="fas fa-user-edit" style="color:#8C512D"></i>
        </a>
    </td>
    <td style=" text-align:center;width:20px">
        <a href="modules/quanlythuonghieu/xuly.php?idthuonghieu=<?php echo $row['id_thuonghieu']?>">
          <i class="fas fa-times" style="color:red"></i>
        </a>

    </td>
    
  </tr>
  <?php
  }
  ?>
  
</table>
</div>
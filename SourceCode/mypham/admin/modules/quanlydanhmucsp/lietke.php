<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<div class="lietke">
  <table class="lietke-1" border="1" style="border-collapse: collapse;width:100%;margin-bottom:10px">
    <tr >
      <th>STT</th>
      <th>Tên danh mục</th>
      <th></th>
      <th></th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array( $query_lietke_danhmucsp)){
        $i++;
    ?>
    <tr>
      <td style="width:10px; text-align:center"><?php echo $i ?></td>
      <td style="padding:0 10px"><?php echo $row['tendanhmuc'] ?></td>
      <td style=" text-align:center;width:40px">
          <a href="index.php?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">
            <i class="fas fa-user-edit" style="color:#8C512D"></i>
          </a>
      </td>
      <td style=" text-align:center;width:20px">
          <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">
            <i class="fas fa-times" style="color:red"></i>
          </a>
      </td> 
    </tr>
    <?php
    }
    ?>
    
  </table>
  </div>
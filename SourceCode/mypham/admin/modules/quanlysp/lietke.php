<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_thuonghieu WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
    AND tbl_sanpham.id_thuonghieu=tbl_thuonghieu.id_thuonghieu ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<table  border="1" style="border-collapse: collapse;width:99%;margin:auto;margin-bottom:10px;margin-top:10px">
    <tr style="font-size: 18px; height:50px">
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Hình</th>
        <th></th>
    </tr>
    <?php
        $i =0;
        while($row = mysqli_fetch_array($query_lietke_sp)){
        $i++;
       
    ?>
    <tr style="text-align: center; font-size:18px">
        <td style="width:50px;"><?php echo $i ?></td>
        <td style=""><?php echo $row['tensanpham']?></td>
        <td style="width: 150px;"><?php echo number_format( $row['giasp'],0,',','.').' '.'vnđ' ?></td>
        <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="50px"></td>
        <td style=" text-align:center;width:40px">
            <a href="index.php?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">
                <i class="fas fa-user-edit" style="color:#8C512D"></i>
            </a>
        </td>
        <td style=" text-align:center;width:20px">
            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">
                <i class="fas fa-times" style="color:red"></i>
            </a>
        </td> 
        
    </tr>
    <?php
        }
    ?>
</table>
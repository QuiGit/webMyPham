<?php
    $sql_sua_th = "SELECT * FROM tbl_thuonghieu WHERE id_thuonghieu = '$_GET[idthuonghieu]'LIMIT 1";
    $query_sua_th = mysqli_query($mysqli,$sql_sua_th);
?>
<div class="SUA">
<h3>Sửa thương hiệu</h3>
<table class="sua" style="border-collapse: collapse;  width:500px">
    <form method="POST" action="modules/quanlythuonghieu/xuly.php?idthuonghieu=<?php echo $_GET['idthuonghieu']?>">
        <?php
            while($dong = mysqli_fetch_array( $query_sua_th)){
        ?>
        <tr>
            <td>Tên danh muc</td>
            <td></td>
        </tr>
        <tr>
            <td><input style="width:98.3%" type="text" value="<?php echo $dong['tenthuonghieu']?>" name="tenthuonghieu"></td>
            <td colspan="2"><input type="submit" name="suathuonghieu" value="Sửa"></td>
        </tr>
        <?php
            }
        ?>
    </form>
</table>
</div>
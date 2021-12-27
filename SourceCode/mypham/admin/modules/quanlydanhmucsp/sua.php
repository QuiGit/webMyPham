<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]'LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<div class="SUA">
<h3>Sửa danh mục sản phẩm</h3>
<table class="sua" style="border-collapse: collapse; width:500px">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
        <?php
            while($dong = mysqli_fetch_array( $query_sua_danhmucsp)){
        ?>
        <tr>
            <td>Tên danh muc</td>
            <td></td>
        </tr>
        <tr>
            <td><input style="width:400px" type="text" value="<?php echo $dong['tendanhmuc']?>" name="tendanhmuc"></td>
            <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa"></td>
        </tr>
        <?php
            }
        ?>
    </form>
</table>
</div>
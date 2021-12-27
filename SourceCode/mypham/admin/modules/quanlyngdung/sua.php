<?php
    $sql_sua_kh = "SELECT * FROM tbl_dangky WHERE id_dangky = '$_GET[iddangky]'LIMIT 1";
    $query_sua_kh = mysqli_query($mysqli,$sql_sua_kh);
?>
<div class="SUA">
<h3>Sửa thương hiệu</h3>
<table class="sua" style="border-collapse: collapse;  width:500px">
    <form method="POST" action="modules/quanlyngdung/xuly.php?iddangky=<?php echo $_GET['iddangky']?>">
        <?php
            while($dong = mysqli_fetch_array($query_sua_kh)){
        ?>
        <tr>
            <td>Tên Khách hàng</td>
            <td><input style="width:98.3%" type="text" value="<?php echo $dong['tenkhachhang']?>" name="tenkhachhang"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input style="width:98.3%" type="text" value="<?php echo $dong['email']?>" name="email"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input style="width:98.3%" type="text" value="<?php echo $dong['diachi']?>" name="diachi"></td>
        </tr>
        <tr>
            <td>SĐT</td>
            <td><input style="width:98.3%" type="text" value="<?php echo $dong['dienthoai']?>" name="dienthoai"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><input type="submit" name="suakhachhang" value="Sửa"></td>
        </tr>
        <?php
            }
        ?>
    </form>
</table>
</div>
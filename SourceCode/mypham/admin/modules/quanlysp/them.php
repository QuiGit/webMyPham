<h3 style="text-align:center;padding:20px">Thêm sản phẩm</h3>
<table class="themsanpham-1" style="border-collapse: collapse;width:80%">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td style="width:1000px;">
                <table>
                    <tr>
                        <td style="width:80px">Tên</td>
                        <td><input style="width:700px" type="text" name="tensanpham"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="width:80px">Giá</td> 
                        <td><input style="width:400px" type="text" name="giasp"></td>
                        <td> <input type="file" name="hinhanh">
                    </tr>
                </table>    
            
           </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="width:80px">Nội dung</td>
                        <td><textarea style="width:700px;height: 100px;resize:none; font-size:18px" type="text" name="noidung"></textarea></td>
                    </tr>
                </table>
            </td>
           
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="width:100px;">Danh mục</td>
                        <td>
                            <select name="danhmuc" style="font-size: 18px;width:290px">
                                <?php
                                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                ?>
                                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
                                    <?php echo $row_danhmuc['tendanhmuc']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                        <td style="width:120px;text-align:center">Thương hiệu</td>
                        <td>
                            <select name="thuonghieu" style="font-size: 18px;width:270px">
                                <?php
                                    $sql_th = "SELECT * FROM tbl_thuonghieu ORDER BY id_thuonghieu DESC";
                                    $query_th = mysqli_query($mysqli,$sql_th);
                                    while($row_th = mysqli_fetch_array($query_th)){
                                ?>
                                    <option value="<?php echo $row_th['id_thuonghieu'] ?>">
                                    <?php echo $row_th['tenthuonghieu']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>

                    </tr>
                </table>
            </td>            
        </tr>
        <tr>
        <tr>
            <td colspan="2"><input style="font-size: 20px; height:30px; width:100px;margin-left:400px;
            margin-top:20px;color:#8C512D" type="submit" name="themsanpham" value="Thêm"></td>
        </tr>
    </form>
</table>

<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]'LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<h3>Sửa sản phẩm</h3>
<table class="themsanpham-1" style="border-collapse: collapse; width:80%; margin-bottom:10px">
<?php
     while($row = mysqli_fetch_array( $query_sua_sp)){
?>
    <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham']?>"
     enctype="multipart/form-data">
    
        <tr>
            <td style="width:1000px;">
                    <table>
                        <tr>
                            <td style="width:80px">Tên</td>
                            <td><input style="width:700px" type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>
                        </tr>
                    </table>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="width:80px">Giá</td> 
                        <td><input style="width:300px" type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
                        <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"width="50px"></td> 
                        <td><input type="file" name="hinhanh"></td>
                    </tr>
                </table>    
           </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="width:80px">Nội dung</td>
                        <td><textarea style="width:700px;height: 100px;resize:none; font-size:18px" name="noidung" ><?php echo $row['noidung']?></textarea></td>
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
                                    if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
                            ?>
                                <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
                                <?php echo $row_danhmuc['tendanhmuc']?></option>
                            <?php
                                }else{
                            ?>
                                <option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
                                <?php echo $row_danhmuc['tendanhmuc']?></option>
                            <?php
                                }
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
                                    if($row_th['id_thuonghieu']==$row['id_thuonghieu']){
                            ?>
                                <option selected value="<?php echo $row_th['id_thuonghieu'] ?>">
                                <?php echo $row_th['tenthuonghieu']?></option>
                            <?php
                                }else{
                            ?>
                                <option  value="<?php echo $row_th['id_thuonghieu'] ?>">
                                <?php echo $row_th['tenthuonghieu']?></option>
                            <?php
                                }
                            }
                            ?>
                            </select>
                        </td>

                    </tr>
                </table>
            </td>            
        <tr>
            <td>
                <table>
                    <tr>
                        <td><input style="font-size: 20px; height:30px; width:100px;" type="submit" name="trove" value="Trở về"></td>
                        <td><input style="font-size: 20px; height:30px; width:100px;margin-left:300px;" type="submit" name="suasanpham" value="Sửa"></td>
                    </tr>
                </table>
            </td>
            
            
        </tr>
        
    </form>
    <?php
            }
        ?>
</table>
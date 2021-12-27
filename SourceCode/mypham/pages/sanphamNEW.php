<?php
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page='';
    }
    if($page==''||$page==1){
        $begin=0;
    }else{
        $begin = ($page*30)-30;
    }
?>
<h2 >Sản phẩm mới</h2>
<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_thuonghieu WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc
        AND tbl_sanpham.id_thuonghieu=tbl_thuonghieu.id_thuonghieu ORDER BY id_sanpham DESC LIMIT $begin,30 ";
        $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
        while($row_chitiet = mysqli_fetch_array($query_chitiet)){
    ?>
<div class="sanpham-new">
    <div class="sp-content">
        <table>
            <tr>
                <td>
                    <a href="chitiet.php?quanly=sanpham&id=<?php echo $row_chitiet['id_sanpham']?>">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="chitiet.php?quanly=sanpham&id=<?php echo $row_chitiet['id_sanpham']?>">
                        <p><?php echo $row_chitiet['tensanpham']?></p> 
                    </a>
                </td>
            </tr>
            <tr class="vnd">
                <td>
                    <div>
                        <?php echo number_format( $row_chitiet['giasp'],0,',','.').' '.'đ̳'?></div>
                    <div>
                        <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                            <input class="themgiohang" name="themgiohang" type="submit" value="BUY">
                        </form>
                    </div>
                </td>
            </tr>
        </table>

    </div>
    <?php
        }
    ?>   
</div>
<div class="clear"></div>
    <?php
        $sql_trang=mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
        $row_count= mysqli_num_rows($sql_trang);
            $trang= ceil($row_count/30);
    ?>   
    <ul class="list-page">
    <?php
        for($i=1;$i<=$trang;$i++){
    ?>
    <li><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php
        }
    ?>
   
</ul>     


                   
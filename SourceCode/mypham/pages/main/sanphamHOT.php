<!-- <div class="sanpham-hot" style="height: 900px;">
    <div>
    <?php
            $sql_pro = "SELECT * FROM tbl_sanpham,tbl_thuonghieu WHERE tbl_sanpham.id_danhmuc=1 AND 
            tbl_sanpham.id_thuonghieu=tbl_thuonghieu.id_thuonghieu ORDER BY id_sanpham DESC LIMIT 8";

            $query_pro = mysqli_query($mysqli,$sql_pro);
            
            $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc=1 LIMIT 1";
            $query_cate = mysqli_query($mysqli,$sql_cate);
            $row_title = mysqli_fetch_array($query_cate);
            
        ?>
    

    <ul class="beauty-hot">
    <h2 style="margin-left: 20px; margin-top:10px;margin-bottom:10px; color:teal;">
            Sản phẩm: <?php echo $row_title['tendanhmuc'] ?></h2>
            <?php
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC LIMIT 0,14";
                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                while($row = mysqli_fetch_array($query_danhmuc)){
            ?>
                <li><a href="sanpham.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></a></li>
            <?php
                }
            ?>
        </ul>
        
            
         <?php
             while($row_pro = mysqli_fetch_array($query_pro)){
        ?>
    <div class="sanpham-HOT">
       <div>
            <h4><?php echo  '-'.$row_pro['giamgia'].'%' ?></h4>
            <a href="chitiet.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
            <img width="100px" src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>"> 
            </a>
            <ul class="list-sanpham-hot">
            <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_pro['id_sanpham'] ?>">
               
            <a href="chitiet.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
            <h3><?php echo $row_pro['tensanpham']?></h3>
                <ul class="sao">☆☆☆☆☆</ul>
                <ul class="giasp">
                    <li> <p style="color: red;"><?php echo number_format($row_pro['dagiam'],0,',','.').' '.'đ̳'?></p></li>
                    <li><p style="color:darkgrey;text-decoration:line-through; "><?php echo number_format( $row_pro['giasp'],0,',','.').' '.'đ̳'?></p></li>
                </ul>   
            </a>
            </ul>
            <ul class="list-giohang-hot">
                <p><input class="themgiohanghot" name="themgiohang" type="submit" value="Thêm vào giỏ hàng"></p>
            </ul>
            
            </form>
        </div>
           
    </div>
        <?php
            }
        ?>
    </div>
</div> -->
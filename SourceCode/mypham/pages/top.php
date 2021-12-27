<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    }
?>
<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
    }
?>
<table>
    <tr>
        <td style="width:200px;font-size:25px"><a href="https://vi-vn.facebook.com/" class="fab fa-facebook" style="color:#FFFACD;text-decoration: none;margin-left:150px"></a>
            <a href="https://www.instagram.com/" class="fab fa-instagram" style="color:#FFFACD;text-decoration: none;margin-left:5px"></a></td>
        <td class="search">
            <form action="timkiem.php?quanly=timkiem" method="POST">
                <input type="text" placeholder="Từ khóa" name="tukhoa">
                <button type="submit" name="timkiem" class="fa fa-search"></button>
            </form> 
        </td>
        <td class="account">
            <?php      
            if(isset($_SESSION['dangky'])&&isset($_SESSION['dangky'])){
            ?>	
                <li ><a style="border-right: 1px solid rgba(237,202,131,1) ;" href="index.php?dangxuat=1"><p >Đăng xuất<p></a></li>
                <li ><a href="doimatkhau.php?quanly=doimatkhau"><p>Đổi mật khẩu<p></a></li>
            <?php
                }else{
            ?>
            <div>
                <a style="border-right: 1px solid rgba(237,202,131,1) ;" href="dangky.php?quanly=dangky"><p>Đăng ký<p></a>
                <a href="dangnhap.php?quanly=dangnhap"><p>Đăng nhập<p></a>
            </div>
            <?php
                }
            ?>
        </td>
        <td class="CART">
            <div class="cart_list">
                <ul class="cart">
                    <li style="margin-left:-20px"><i class="fa fa-shopping-cart" style="color:#FFFACD"></i>
                        <ul class="cart_mini">
                            <li>
                                <a>
                                <?php
                                    if(isset($_SESSION['cart'])){
                                
                                    }
                                ?>
                                    <table>
                                        <?php
                                        if(isset($_SESSION['cart'])){
                                            $i = 0;
                                            $tongtien = 0;
                                            foreach($_SESSION['cart'] as $cart_item){
                                                $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                                                $tongtien += $thanhtien;
                                                $i++;
                                        ?>
                                        <tr>
                                           <td>
                                               <table style="line-height:15px;">
                                                   <tr>
                                                       <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'];?>"></td>
                                                       <td style="line-height:15px;text-align:center"><?php echo $cart_item['tensanpham'];?></td>
                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td><?php echo $cart_item['soluong'];?> x
                                                       <?php echo number_format($cart_item['giasp'],0,',','.').' '.'đ̳';?>
                                                    </td>
                                                   </tr>
                                               </table>
                                           </td>
                                        </tr>
                                        
                                            <?php
                                                }
                                            ?>
                                            <tr style="text-align: left;" >
                                            <td>
                                                <p style="margin-left: 50px; float:left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' '.'đ̳' ;?></p>
                                                <div style="clear: both;"></div>
                                            </td>
                                        </tr>
                                            <?php
                                            }else{
                                            ?>
                                        <tr>
                                            <td><img style="width:300px;height:300px;margin-top:50px" src="images/cart.png"></td>
                                        </tr>
                                            <?php
                                                }
                                            ?>
                                     </table>
    
                                    </a>
                                
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </div>
        </td>
    </tr>
</table>
    

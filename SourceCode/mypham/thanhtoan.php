<?php
    session_start();
    include("admin/config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm của shop</title>
    <link rel="stylesheet" type="text/css" href="css/indexhome.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    
</head>

<body>  
    <script>
        $(document).ready(function() {
            $(window).scroll(function(){
                if($(this).scrollTop()){
                    
                    $('header').addClass('sticky');
                }else{
                    $('header').removeClass('sticky');
                    
                }
            });
        });
    </script>
    <div class="full_home">
        <header>
            <div class="top_home container">
                <?php
                    include('pages/top.php');
                ?>
            </div>
            
            <div class="menu_list container">
                <?php
                    include('pages/menu.php');
                ?> 
            </div>
        </header>

        <div id="banner">
            <div class="banr"></div>
            <div class="next">
                <i><p>Hôm nay bạn đã chăm sóc làn da của mình chưa nhỉ? Đừng lo, sợ xấu!. Hãy dùng ngay.<p></i>
            </div>
            <div class="NEW-content">
				<div class="carst">
					<h2>Đặt hàng thành công <i class="far fa-check-circle"></i> <i class="fas fa-ellipsis-h"></i><i class="fas fa-ellipsis-h"></i>
                     <i class="fas fa-shipping-fast"></i></h2>
					<table border="1" style="border-collapse: collapse;margin:auto;width:1000px;font-size:20px;
						color:#8C512D;">
						<tr> 
							
							<th colspan="2" style="width:600px;padding:10px">Sản phẩm</th>
							<th style="width:100px">Số lượng</th>
							<th style="width:auto">Giá</th>
							<th>Thành tiền</th>
							
						</tr>
						<?php
						if(isset($_SESSION['cart'])){
					
							}
						?>
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
							<td style="width:50px">
								<img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'];?>"width="50px" height="50px">
							</td>
							<td style="width: 550px;padding:0 5px"><?php echo $cart_item['tensanpham'];?></td>
							<td style="text-align:center;">
								
								<?php echo $cart_item['soluong'];?>
								
								
							</td>
							<td style="padding:0 5px"><?php echo number_format($cart_item['giasp'],0,',','.').' '.'đ̳';?></td>
							<td style="padding:0 5px"><?php echo number_format($thanhtien,0,',','.').' '.'đ̳';?></td>
							
						</tr>
						<?php
							}
						?>
						<tr style="text-align: left;" >
							<td colspan="8">
								<p style="margin-left: 50px; float:left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' '.'đ̳' ;?></p>
								
								
							</td>
						</tr>
				
						<?php
							}
						?>

					</table>
					<?php
				
						$id_khachhang = $_SESSION['id_khachhang'];
						$code_order = rand(0,9999);
						$insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE ('".$id_khachhang."','".$code_order."',1)";
						$cart_query = mysqli_query($mysqli,$insert_cart);
						if($cart_query){
							//them chi tiet
							foreach($_SESSION['cart'] as $key => $value){
								$id_sanpham = $value['id'];
								$soluong = $value['soluong'];
								$insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua)
								VALUE('".$id_sanpham."','".$code_order."','".$soluong."') ";
								mysqli_query($mysqli,$insert_order_details);
							}
						} 
						unset($_SESSION['cart']);
					?> 
				</div>
            <div style="clear: both;"></div>
    
            <div class="bottom" style="margin-top:500px;width:1360px">
                <table>
                    <tr>
                        <td><h3>LIÊN HỆ VỚI SHOP</h3></td>
                        <td><h3>CHĂM SÓC KHÁCH HÀNG</h3></td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <br>
                                <li><p>Địa chỉ: 783 Phạm Hửu Lầu, P.6, TP.Cao Lãnh, Đồng Tháp</p></li>
                                <li><p>Số điện thoại:<a href="tel:000 000 0000">000 000 0000</a></p></li>
                                <li><p>Email:<a href="mailto:mypham000@email.com.vn">lamthao000@email.com.vn</a></p></li>
                                <li><img style="margin-left: 40px;" src="images/logolk.jpg" /></li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li><a href="">Chính sách đổi trả</a></li>
                                <li><a href="">Chính sách bảo mật</a></li>
                                <li><a href="">Chính sách thanh toán</a></li>
                                <li><a href="">Chính sách bảo hành</a></li>
                                <li><a href="">Hướng dẫn mua đồ</a></li>
                                <li><a href="">Điều khoảng dịch vụ</a></li>
                                <li><a href="">Vẫn chuyển</a></li>
                            </ul>
                        </td>
                            
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>



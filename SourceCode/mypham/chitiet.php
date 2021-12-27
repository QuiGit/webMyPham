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
    <title>Chi tiết sản phẩm của shop</title>
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
				<?php
					$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_thuonghieu WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc
					AND tbl_sanpham.id_thuonghieu=tbl_thuonghieu.id_thuonghieu AND  tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";

					$query_chitiet = mysqli_query($mysqli,$sql_chitiet);

				
					while($row_chitiet = mysqli_fetch_array($query_chitiet)){
				?>
                <div class="sanpham-new">
                <h2><?php echo $row_chitiet['tensanpham']?></h2>
                <div class="chitiet">
                    <table>
                        <tr>
                            <td>
                                <img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
							</td>
							<td></td>
							<td>
								<ul>
									<li>
										<p><?php echo $row_chitiet['tensanpham']?></p> 
									</li>
									<li style="text-align: center"><?php echo number_format( $row_chitiet['giasp'],0,',','.').' '.'đ̳'?></div></li>
									<li>
										<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                                        	<input class="themgiohang" name="themgiohang" type="submit" value="BUY">
										</form>
									</li>
								</ul>
							</td>
                        </tr>
                    </table>
                    <div class="noidung">
                        <h1>Thông tin sản phẩm</h1>
                        <?php echo $row_chitiet['noidung']?>
                    </div>
                </div>

                    <?php
                        }
                    ?>
            </div>

            <div class="bottom-img">
                <img src="images/bottom.jpg" alt="">
            </div>
            <div style="clear: both;"></div>
    
            <div class="bottom">
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



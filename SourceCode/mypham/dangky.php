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
    <title>Đăng ký thành viên</title>
	<link rel="stylesheet" type="text/css" href="css/indexdkdn.css">
	<link rel="stylesheet" type="text/css" href="css/indexhome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="dkdn_top">
        <table>
            <tr>
                <td><a href="http://localhost/mypham/index.php" >Shop</a></td>
                <td style="color: #282828">Đăng ký</td>
            </tr>
        </table>
    </div>
    <div class="dkdn_content">
            <div class="content">
                <?php
                    include('pages/dangky.php');
                ?>
            </div>
    </div>
    <div class="bottom" style="margin-left:0px">
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

</body>

</html>

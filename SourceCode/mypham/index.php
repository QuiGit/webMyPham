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
    <title>Trang chủ của shop</title>
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

            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">

                    <div class="slide first">
                        <img src="images/hinh-1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/hinh-2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/hinh-3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/hinh-4.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/hinh-5.jpg" alt="">
                    </div>
                    <div class="navi_auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                        <div class="auto-btn5"></div>
                    </div>
                </div>
                <div class="navi_manual" style="text-align:center">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                </div>
            </div>
            <div class="fas" style="text-align: center;">
                    <h3>
                        <i class="fas fa-quote-right"></i>
                        <i>Phụ nữ đẹp không hẳn đã hạnh phúc nhưng phụ nữ hạnh phúc chắc chắn đều đẹp.</i>
                        <i class="fas fa-quote-right"></i>
                    </h3>
                </div>
            <div class="NEW-content">
                <?php
                    include('pages/sanphamNEW.php')
                ?>
            </div>
            <div class="clear"></div>
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

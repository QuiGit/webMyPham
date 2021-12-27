<?php
    include("config/config.php");
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css\index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="top">
    <table>
        <td><i class="fas fa-cogs" style="font-size:80px;padding:10px 10px"></i></td>
        <td><h2>HỆ THỐNG CẬP NHẬT DỮ LIỆU</h2></td>
    </table>
    
</div>
<div class="content">
    <div class="content1">
        <ul>
            <li>
                <table>
                    <td><i class="fas fa-user-alt" style="font-size:80px; padding:0 10px;margin-left:-10px"></i></td>
                    <td>
                    <p class="dangxuat"><a href="http://localhost/mypham/admin/login.php"><b>Tài Khoản</b>
                    <?php if(isset($_SESSION['dangnhap'])){
                            echo $_SESSION['dangnhap']; 
                        } ?>
                        </a>
                    </p> 
                    </td>
                </table>
                   
            </li>
            <li><a href="index.php?action=quanlyngdung&query=lietke">Danh mục người dùng</a></li>

            <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Danh mục sản phẩm</a></li>

            <li><a href="index.php?action=quanlythuonghieu&query=them">Danh mục thương hiệu</a></li>

            <li><a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>

            <li><a href="index.php?action=quanlydonhang&query=lietke">Đơn hàng</a></li>
        </ul>
    </div>
    <div class="content2">
        <div class="content2-1">
            <?php
                 include("modules/main.php");
            ?>
        </div>
    </div>
</body>
</html>
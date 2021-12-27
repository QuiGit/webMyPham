<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql ="SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='". $matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location:index.php");
        }else{
            echo '<script>alert("Email hoặc mật khẩu sai, vui lòng nhập lại.");</script>';
            //header("Location:login.php");
        }
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <style type="text/css">
        body{
            
            background-image: url(../images/gd-dk.jpg);
        }
        .wrapper_login{
           width: 40%;
           margin: 0 auto;
           margin-top: 180px;
           border: 1px solid #f2f2f2;
           height: 300px;
           background:linear-gradient(
             90deg, rgba(240,240,240,1) 0%,  rgba(255,255,255,1)20%, rgba(240,240,240,1) 100%);
            border-radius:10px;
            
        }
        h2{
            color: #8C512D;
            font-size: 30px;
            text-align: center;
        }
        

    </style>
</head>
<body>
    <div class="wrapper_login">
        <form action="" autocomplete="off" method="POST">
            <table style="border-collapse: collapse; width:70%;margin:auto; height:200px; font-size:20px">
                <tr style="height: 100px;">
                    <td colspan="2"><h2>ĐĂNG NHẬP HỆ THỐNG</h2></td>
                </tr>
                <tr class="taikhoan">
                    <td  style="margin-left:100px;color:#8C512D">Tài khoản</td>
                    <td><input style="font-size:18px;color: #8C512D;" type="text" name="username"></td>
                </tr>
                <tr>
                    <td style="color:#8C512D">Mật khẩu</td>
                    <td><input style="font-size:18px;color: #8C512D;" type="password" name="password"></td>
                </tr>
                <tr style="height: 100px;">
                    <td colspan="2">
                        <input style="font-size:20px; margin-left:130px;color: #8C512D;background: rgba(237,202,131);" type="submit" name="dangnhap" value="Đăng nhập">
                    </td>
                </tr>
            </table>
        </form>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
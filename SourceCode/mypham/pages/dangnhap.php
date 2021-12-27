<?php
   
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql ="SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='". $matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header('Location:index.php?quanly=index');
        }else{
            echo '<p style="color:red">Tài khoản hoặc mật khẩu sai, vui lòng nhập lại.</p>';
        }
    }
    
?>
<form action="" autocomplete="off" method="POST">
    <table>
        <tr>
            <td><h1>Đăng nhập</h1></td>
        </tr>
        <tr>    
            <td><input type="text" size="40" name="email" placeholder="Email..."></td>
        </tr>
        <tr>
            <td><input type="password" size="40" name="password" placeholder="Mật khẩu..."></td>
        </tr>
        <tr class="dkdn">
            <td>
                <input type="submit" name="dangnhap" value="Đăng nhập">
                
            </td>
        </tr>
        <tr>
            <td >
                <table>
                        <td style="width:130px;"><hr></td>
                        <td style="color:#808080">Hoặc</td>
                        <td style="width:130px"><hr></td>
                    </tr>
                </table>
                
            </td>
        </tr>
        <tr class="dangnhap">
            <td>
                <table>
                    <tr>
                        <td style="width:165px;color:#808080"><p>Bạn có tài khoản?</p></td>
                        <td><a href="dangky.php?quanly=dangky">Đăng ký</a></td>
                    </tr>
                </table>
            </td>
        </tr>
            </table>
        </form>
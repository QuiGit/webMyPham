<!-- <?php
   
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
        }else{
            echo '<p style="color:red">Tài khoản hoặc mật khẩu sai, vui lòng nhập lại.</p>';
        }
    }
    
   
?>
<form action="" autocomplete="off" method="POST" style="margin-left: 400px;">
            <table style="text-align:center;height:200px; font-size:20px; color:teal; border:1px solid rgb(43, 226, 186);
            width:500px" border="1" width="40%">
                <tr>
                    <td colspan="2"><h2>Đăng nhập khách hàng</h2></td>
                </tr>
                <tr>
                    <td>Tài khoản</td>
                    <td><input style="font-size: 20px; border:1px solid teal;" type="text" size="30" row="5" name="email" placeholder="Email..."></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input style="font-size: 20px;border:1px solid teal" type="password" size="30" name="password" placeholder="Mật khẩu..."></td>
                </tr>
                <tr>
                    <td colspan="2"><input style="text-decoration: none; color:teal; font-size:20px; border:1px solid teal" type="submit" name="dangnhap" value="Đăng nhập"></td>
                </tr>
            </table>
        </form> -->
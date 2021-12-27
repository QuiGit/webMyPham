<!-- <?php
    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai)
         VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
        if($sql_dangky){
            $_SESSION['dangky'] = $tenkhachhang;
             $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            header('Location:giohang.php?quanly=giohang');
        }
    }
?>
<p style="text-align:center;  font-weight: bold; font-size:30px; color:teal; margin-top:20px;">Đăng ký thành viên</p>
<form style="margin-left:350px; height:200px; " action="" method="POST">
    <table class="dangky" style="text-align:center;height:200px; font-size:20px; color:teal; border:1px solid rgb(43, 226, 186);
    width:600px" border="1">
        <tr >
            <td>Họ và tên</td>
            <td><input style="font-size: 20px;" type="text"  size="40" name="hovaten"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input style="font-size: 20px;" type="text" size="40" name="email"></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><input style="font-size: 20px;" type="text" size="40" name="dienthoai"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input style="font-size: 20px;" type="text" size="40" name="diachi"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input  style="font-size: 20px;"type="text" size="40" name="matkhau"></td>
        </tr>
        <tr>
            <td style="text-align: center; font-size:20px"><input style="text-decoration: none; color:teal; font-size:20px" type="submit" name="dangky" value="Đăng ký"></td>
            <td style="text-align: center;"><a style="text-decoration: none; color:teal" href="dangnhap.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>
        </tr>
    </table>
</form> -->

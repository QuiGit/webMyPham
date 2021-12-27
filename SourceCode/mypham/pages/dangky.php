<?php
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
<form method="POST" style="padding:0 10px">
    <table>
        <tr>
            <td><h1>Đăng ký</h1 ></td>
        </tr>
        <tr>
            <td><input placeholder="Họ và Tên" type="text"  size="40" name="hovaten"></td>
        </tr>
        <tr>
            <td><input placeholder="Số điện thoại" type="text" size="40" name="dienthoai"></td>
        </tr>
        <tr>
            <td><input placeholder="Mail" type="text" size="40" name="email"></td>
        </tr>
        <tr>
            <td><input placeholder="Địa chỉ" type="text" size="40" name="diachi"></td>
        </tr>
        <tr>
            <td><input placeholder="Password" type="text" size="40" name="matkhau"></td>
        </tr>
        <tr class="dkdn">
            <td><a href="dangnhap.php?quanly=dangnhap">
                <input type="submit" name="dangky" value="Đăng ký">
                </a>
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
                        <td><a href="dangnhap.php?quanly=dangnhap">Đăng nhập</a></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>

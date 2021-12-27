<!-- <?php
    session_start();
    include('../../admin/config/config.php');
    if(isset($_POST['doimatkhau'])){
        $taikhoan = $_POST['email'];
        $matkhau_cu = md5($_POST['matkhau']);
        $matkhau_moi = md5($_POST['matkhau_moi']);
        $sql ="SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='". $matkhau_cu."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
           $sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'" );
        }else{
            echo '<script>alert("Email hoặc mật khẩu cũ sai, vui lòng nhập lại.");</script>';
        }
    }
   
?>

    <div class="wrapper_login">
        <form action="" autocomplete="off" method="POST">
            <table style="text-align: center;" border="1">
                <tr>
                    <td colspan="2"><h2>Đổi mật khẩu</h2></td>
                </tr>
                <tr class="taikhoan">
                    <td>Tài khoản</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="password" name="matkhau"></td>
                </tr>
                <tr>
                    <td>Mật khẩu mới</td>
                    <td><input type="password" name="matkhau_moi"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
                </tr>
            </table>
        </form>
   
 -->

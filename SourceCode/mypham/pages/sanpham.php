<!-- <div class="clear"></div>
        <div class="main">
            <div class="maincontent">
            <?php
                    if(isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }else{
                        $tam = '';
                    }
                    if($tam=='danhmucsanpham'){
                        include('main/danhmuc.php');
                    // }elseif($tam=='giohang'){
                    //     include('main/giohang.php');
                    }elseif($tam=='sanpham'){
                        include('main/sanpham.php');
                    }elseif($tam=='dangky'){
                        include('main/dangky.php');
                    }elseif($tam=='thanhtoan'){
                        include('main/thanhtoan.php');
                    }elseif($tam=='dangnhap'){
                        include('main/dangnhap.php');
                    }elseif($tam=='timkiem'){
                        include('main/timkiem.php');
                    }
                ?>
               
            </div>

         </div> -->
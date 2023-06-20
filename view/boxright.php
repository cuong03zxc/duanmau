<div class="row mb">
                <div class="boxtitle "> tài khoản</div>
             <div class="boxcontent formtaikhoan">
                
                <form action="#" method="post"><div class="row mb">Tên Đăng Nhập <br>
                <input type="text" name="user"></div>
                    <br>
                    <div class="row mb">   Mật Khẩu <br>
        <input type="password" name="pass"> </div>
                    <div class="row mb"><br>
    <input type="checkbox">Ghi Nhớ Tài Khoản? </div>
                    <div class="row mb">  <br>
    <input type="submit" value="Đăng nhập"></div>
</form>
 <li>
        <a href="#">Quên Mật Khẩu</a>
    </li>
    <li>
        <a href="#">Đăng ký thành viên</a>
    </li>
             </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">danh mục </div>
             <div class="boxcontent2 menudoc">
                <ul>
                    <?php
                    foreach ($dsdm as $dm){
                        extract($dm);
                        $lkdm="index.php?act=sanpham&iddm=".$iddm;
                        echo '<li><a href="'.$lkdm.'">'.$name.'</a></li>';
                    }
                    
                    ?>
                    <!-- <li><a href="#">iphone</a></li>
                    <li><a href="#">sam sung</a></li>
                    <li><a href="#">vivo</a></li>
                    <li><a href="#">remi</a></li>
                    <li><a href="#">oppo</a></li> -->
                </ul>
             </div>
            <div class="boxfoodter searbox">
                <form action="#" method="post">
                    <input type="text" name="">
                </form>
            </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">Top 10 yêu thích</div>
             <div class="row boxcontent">
                <?php 
                
                foreach ($dstop10 as $sp){
                    extract($sp);
                    $linksp="index.php?act=sanphamchitiet&idsp=".$idsp;
                    $img=$img_path.$anh;
                    echo '<div class="row mb10 top">
                    <img src="'.$img.'" alt="">
                    <a href="'.$linksp.'">'.$name.'</a>
                </div>';
                }
                ?>
                <!-- <div class="row mb10 top">
                    <img src="view/img/anh3.jpg" alt="">
                    <a href="#">Samsung Galaxy S23 Ultra</a>
                </div>
                <div class="row mb10 top">
                    <img src="view/img/anh4.png" alt="">
                    <a href="#">Samsung Galaxy S23 Ultra</a>
                </div>
                <div class="row mb10 top">
                    <img src="view/img/anh5.png" alt="">
                    <a href="#">Samsung Galaxy S23 Ultra</a>
             </div>
             <div class="row mb10 top">
                <img src="view/img/anh5.png" alt="">
                <a href="#">Samsung Galaxy S23 Ultra</a>
         </div>
         <div class="row mb10 top">
            <img src="view/img/anh5.png" alt="">
            <a href="#">Samsung Galaxy S23 Ultra</a>
     </div>
     <div class="row mb10 top">
        <img src="view/img/anh5.png" alt="">
        <a href="#">Samsung Galaxy S23 Ultra</a>
 </div>
 <div class="row mb10 top">
    <img src="view/img/anh5.png" alt="">
    <a href="#">Samsung Galaxy S23 Ultra</a>
</div>
<div class="row mb10 top">
    <img src="view/img/anh5.png" alt="">
    <a href="#">Samsung Galaxy S23 Ultra</a>
</div>
<div class="row mb10 top">
    <img src="view/img/anh5.png" alt="">
    <a href="#">Samsung Galaxy S23 Ultra</a>
</div> -->


            </div>
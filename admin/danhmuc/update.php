<?php 
if(is_array($dm)){
    extract($dm);
}

?>


<div class="row">
    <div class="row formtitle">
              <h1>Cập nhập loại hàng</h1>  
            </div>
            <div class="row formcoten">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb20">
                    Mã Loại <br>
                        <input type="text" name="maloai" disabled>   
                    </div>
                    <div class="row mb20"> 
                        Tên Loại <br>  
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
                    </div>
                    <div class="row mb20"> 
                        <input type="hidden" name="id" value="<?php if(isset($iddm)&&($iddm>0)) echo $iddm;?>">
                       <input type="submit" name="capnhap" value="Cập nhập">
                       <input type="reset" value="Nhập Lại">
                       <a href="index.php?act=listdm"><input type="button" value="Danh sách">
                    </a>
                    </div>
                   
                    <?php 
                    if(isset($thongbao)&&($thongbao="")) echo $thongbao;
                    ?>
                    </form>
            </div>
        </div>

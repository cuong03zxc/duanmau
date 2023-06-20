<div class="row">
    <div class="row formtitle">
              <h1>Thêm Mới Loại Hàng Hóa</h1>  
            </div>
            <div class="row formcoten">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb20">
                    Mã Loại <br>
                        <input type="text" name="maloai" disabled>   
                    </div>
                    <div class="row mb20"> 
                        Tên Loại <br>  
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb20"> 
                       <input type="submit" name="themmoi" value="Thêm Mới">
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

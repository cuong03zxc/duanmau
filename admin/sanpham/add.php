<div class="row">
    <div class="row formtitle">
              <h1>Thêm Mới Sản Phẩm</h1>  
            </div>
            <div class="row formcoten">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" >
                    <div class="row mb20">
                    danh mục <br>
                        <select name="iddm">
                            <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo "<option value='".$iddm."'>$name</option>";
                            }
                             ?>
                        </select> 
                    </div>
                    <div class="row mb20"> 
                        Tên sản phẩm <br>  
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb20"> 
                        Giá <br>  
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb20"> 
                        Hình sản phẩm <br>  
                        <input type="file" name="hinh">
                    </div>
                    <div class="row mb20"> 
                        Mô tả <br>  
                        <textarea name="motasp" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb20"> 
                       <input type="submit" name="themmoi" value="Thêm Mới">
                       <input type="reset" value="Nhập Lại">
                       <a href="index.php?act=listsp"><input type="button" value="Danh sách">
                    </a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao="")) echo $thongbao;
                    ?>
                    </form>
            </div>
        </div>

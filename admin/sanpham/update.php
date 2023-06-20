<?php 
if(is_array($sp)){
    extract($sp);
}
$hinhpath="../upload/".$anh;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
}
else{
    $hinh="no photo";
}
?>


<div class="row">
    <div class="row formtitle">
              <h1>Cập nhập loại hàng</h1>  
            </div>
            <div class="row formcoten">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data" >
                    <div class="row mb20">
                    <select name="iddm">
                    <option value="0" selected>Tất Cả</option>
                            <?php
                            foreach($listdanhmuc as $danhmuc){
                                if($iddm==$danhmuc['iddm']) $s="selected"; else $s="";
                                echo "<option value='$danhmuc[iddm]' $s>$danhmuc[name]</option>";
                            }
                             ?>
                        </select> 
                    Mã Sản phẩm <br>
                        <input type="text" name="idsp" value="<?=$idsp?>" readonly>   
                    </div>
                    <div class="row mb20"> 
                        Tên sản phẩm <br>  
                        <input type="text" name="tensp" value="<?=$name?>" >
                    </div>
                    <div class="row mb20"> 
                        Giá <br>  
                        <input type="text" name="giasp"  value="<?=$gia?>">
                    </div>
                    <div class="row mb20"> 
                        Hình sản phẩm <br>  
                        <input type="file" name="hinh">
                        <?=$hinh ?>
                    </div>
                    <div class="row mb20"> 
                        Mô tả <br>  
                        <textarea name="motasp" id="" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row mb20"> 
                        <input type="hidden" name="id" value="<?$idsp?>">
                       <input type="submit" name="capnhap" value=" Cập nhập">
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

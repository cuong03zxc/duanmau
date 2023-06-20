<div class="boxtrai mr ">
<div class="row mb">
    <?php
    extract($onesp);
    ?>
                <div class="boxtitle"><?=$name?></div>
             <div class="row boxcontent">
             
             <?php
             
             $hinh=$img_path.$anh;
             echo '<div class="row mb ctsp">
              <img src="'.$hinh.'" width=350px> <br> 
              </div>';
             echo $mota;
             ?>
            </div>
        </div>  

        <div class="row mb">
                <div class="boxtitle">Bình Luận</div>
             <div class="row boxcontent">
             
            </div>
        </div>  

        <div class="row mb">
                <div class="boxtitle">Sản Phẩm cùng loại</div>
             <div class="row boxcontent">
             
            </div>
        </div>  
 </div>
            
        <div class="boxphai mr ">
       <?php 
       include "boxright.php";
       ?>
        
        </div>
        
          
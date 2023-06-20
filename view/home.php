<div class="boxtrai mr ">
              <div class="row">
                <div class="banner">
                <div class="slideshow-container">


<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="view/img/banner.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="view/img/banner3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="view/img/banner4.jpg" style="width:100%">
  <div class="text"></div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
                </div>
              </div>
              <div class="row">
                <?php
                $i=0;
                foreach ($spnew as $sp){
                    extract($sp);
                    $hinh=$img_path.$anh;
                    if(($i==2)||($i==5)||($i==8)){
                        $mr="";
                    }else {
                        $mr="mr";
                    }
                    echo '<div class="boxsp '.$mr.'">
                    <div class="row img"> 
                        <img src="'.$hinh.'" alt="">
                    </div>
                    <p>$'.$gia.'</p>
                    <a href="#">'.$name.'</a>
                </div>';
                $i+=1;
                }
                ?>
                <!-- <div class="boxsp mr">
                    <div class="row img"> 
                        <img src="view/img/anh3.jpg" alt="">
                    </div>
                   
                    <p>$100</p>
                    <a href="#">điện thoại</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img"> 
                        <img src="view/img/anh3.jpg" alt="">
                    </div>
                   
                    <p>$100</p>
                    <a href="#">điện thoại</a>
                </div>
                <div class="boxsp ">
                    <div class="row img"> 
                        <img src="view/img/anh3.jpg" alt="">
                    </div>
                   
                    <p>$100</p>
                    <a href="#">điện thoại</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img"> 
                        <img src="view/img/anh3.jpg" alt="">
                    </div>
                   
                    <p>$100</p>
                    <a href="#">điện thoại</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img"> 
                        <img src="view/img/anh3.jpg" alt="">
                    </div>
                   
                    <p>$100</p>
                    <a href="#">điện thoại</a>
                </div>
                <div class="boxsp ">
                    <div class="row img"> 
                        <img src="view/img/anh3.jpg" alt="">
                    </div>
                   
                    <p>$100</p>
                    <a href="#">điện thoại</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img"> 
                        <img src="view/img/anh3.jpg" alt="">
                    </div>
                   
                    <p>$100</p>
                    <a href="#">điện thoại</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img"> 
                        <img src="view/img/anh3.jpg" alt="">
                    </div>
                   
                    <p>$100</p>
                    <a href="#">điện thoại</a>
                </div>
                <div class="boxsp ">
                    <div class="row img"> 
                        <img src="view/img/anh3.jpg" alt="">
                    </div>
                   
                    <p>$100</p>
                    <a href="#">điện thoại</a>
                </div> -->
                
              </div> 
            </div>
            <div class="boxphai mr">

            <?php 
       include "boxright.php";
       ?>

            </div>
             
        </div>  
        
        
        
            </div>
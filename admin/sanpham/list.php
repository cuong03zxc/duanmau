<div class="row"> 
                <div class="row formtitle mb">
              <h1>Danh Sách Loại Hàng Hóa</h1>  
            </div>
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                <select name="iddm">
                    <option value="0" selected>Tất Cả</option>
                            <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo "<option value='".$iddm."'>$name</option>";
                            }
                             ?>
                        </select> 
                        <input type="submit" name="listok" value="ok">
            </form>
            <div class="row formcoten">
                <form action="index.php?act=listsp" method="post" enctype="multipart/form-data">
                    <div class="row mb20 formdsloai"> 

                     <table>
                        <tr>
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Gía sản phẩm</th>
                            <th>ảnh sản phẩm</th>
                            <th>lượt xem</th>
                            <th></th>
                        </tr>
                        
                        <?php 
                         foreach($listsanpham as $sanpham){
                            extract($sanpham); 
                            $suasp="index.php?act=suasp&id=".$idsp;
                            $xoasp="index.php?act=xoasp&id=".$idsp;
                            $hinhpath="../upload/".$anh;
                            if(is_file($hinhpath)){
                                $hinh="<img src='".$hinhpath."' height='80'>";
                            }
                            else{
                                $hinh="no photo";
                            }
                             echo '<tr>
                             <td><input type="checkbox" name=""></td>
                             <td>'.$idsp.'</td>
                             <td>'.$name.'</td>
                             <td>'.$gia.'</td>
                             <td>'.$hinh.'</td>
                             <td>'.$luotxem.'</td>

                             <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                         </tr>';
                         }
                         ?>
                        
                        
                       
                     </table>
                    </div>
                    <div class="row mb20"> 
                        <input type="button" value="Chọn Tất cả">
                        <input type="button" value="Bỏ Chọn Tất Cả">
                        <input type="button" value="Xóa các mục đã chọn">
                       <a href="index.php?act=addsp"><input type="button" value="Nhập thêm">
                    </a>
                    </div>
                   
                    </form>
            </div>
        </div>
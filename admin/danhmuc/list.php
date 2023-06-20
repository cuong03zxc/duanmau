<div class="row"> 
                <div class="row formtitle">
              <h1>Danh Sách Loại Hàng Hóa</h1>  
            </div>
            <div class="row formcoten">
                <form action="#" method="post">
                   
                    <div class="row mb20 formdsloai"> 
                     <table>
                        <tr>
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Tên loại</th>
                            <th></th>
                        </tr>
                        <?php 
                         foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc); 
                            $suadm="index.php?act=suadm&id=".$iddm;
                            $xoadm="index.php?act=xoadm&id=".$iddm;
                             echo '<tr>
                             <td><input type="checkbox" name=""></td>
                             <td>'.$iddm.'</td>
                             <td>'.$name.'</td>
                             <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                         </tr>';
                         }
                         ?>
                        
                        
                       
                     </table>
                    </div>
                    <div class="row mb20"> 
                        <input type="button" value="Chọn Tất cả">
                        <input type="button" value="Bỏ Chọn Tất Cả">
                        <input type="button" value="Xóa các mục đã chọn">
                       <a href="index.php?act=adddm"><input type="button" value="Nhập thêm">
                    </a>
                    </div>
                   
                    </form>
            </div>
        </div>
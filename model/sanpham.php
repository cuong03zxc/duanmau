<?php 
function insert_sanpham($tensp,$giasp,$hinh,$motasp,$iddm){
    $sql="INSERT INTO `sanpham` (`idsp`, `name`, `gia`, `anh`, `mota`, `luotxem`, `iddm`) VALUES (NULL,'$tensp',$giasp,'$hinh','$motasp', '0', '$iddm')";
    
     pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where idsp=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";  
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by idsp desc limit 0,9";  
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1";  
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by idsp desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql="select * from sanpham where idsp=".$id;   
            $sp=pdo_query_one($sql);
            return $sp;
}
function update_sanpham($id,$tensp,$giasp,$hinh,$motasp, $iddm){
    if($hinh!=""){
    $sql="UPDATE sanpham SET name='".$tensp."',gia='".$giasp."',anh='".$hinh."',mota='".$motasp."',iddm = '".$iddm."' where idsp=".$id;
    }
    else 
    $sql="UPDATE sanpham SET name='".$tensp."',gia='".$giasp."',mota='".$motasp."',iddm = '".$iddm."' where idsp=".$id;
    pdo_execute($sql);
}



?>
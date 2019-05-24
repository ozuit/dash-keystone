<?php 
	$sql = "Select * from loaitin order by thutu asc";
	$loaitin = mysql_query($sql);
	
?>


<div id="menu"> 
  	<ul>
    	
        <a href="index.php"><li>Trang chủ</li></a>
        
        
<?php
	while($dong = mysql_fetch_array($loaitin)){
?>	
	
    	<a	href="index.php?xem=loaitin&id=<?php echo $dong["idloaitin"]?>">
			<li><?php echo $dong["tenloaitin"]?></li>
        </a>


<?php		
		}
?>
        
      <!-- <li>Giới thiệu</li>
        <li><a href="index.php?xem=loaitin&id=1">Tin tức</a></li>
        <li>Sản phẩm</li>
        <li>Khách hàng</li>
        <li>Liên hệ</li>-->
    </ul>
  </div>
  
  
  
  
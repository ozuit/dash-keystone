<?php
	$sql = "select * from baiviet, loaitin where baiviet.idloaitin = loaitin.idloaitin and loaitin.tenloaitin = 'Tin tức' order by idbaiviet desc limit 2,6 ";
	$baiviet = mysql_query($sql);
?>

<div class="box no-padding no-border" style="margin-top:10px;">
	<div class="tieudebox">
    	Tin tức
    </div>

        <div class="box-left">
<?php 
	$dong = mysql_fetch_array($baiviet);
?>        	
			<a href="index.php?xem=baiviet&id=<?php echo $dong["idbaiviet"]?>">
        	<img src="<?php echo $dong["anhminhhoa"]?>">
            </a>
            <p align="justify" class="tieu_de_tin">
            <a href="index.php?xem=baiviet&id=<?php echo $dong["idbaiviet"]?>">
            <b><?php echo $dong["tenbaiviet"]?></b>
            </a></p>
            <p align="justify" class="tom_tat_tin"><?php echo $dong["tomtat"]?></p>
        </div>
        
        
        <div class="box-right-a">
<?php
	while($dong = mysql_fetch_array($baiviet)){
?>        
        	<div class="box-tin">
            	<a href="index.php?xem=baiviet&id=<?php echo $dong["idbaiviet"]?>">
            	<img src="<?php echo $dong["anhminhhoa"]?>" />
                </a>
                <a href="index.php?xem=baiviet&id=<?php echo $dong["idbaiviet"]?>">
                <p>
				<a href="index.php?xem=baiviet&id=<?php echo $dong["idbaiviet"]?>">
				<?php echo $dong["tenbaiviet"]?>
                </p></a>
                
            	<div class="xoa"></div>
            </div>
<?php 
	}
?>            
          
          </div>
          <div class="xoa"></div>
      </div>

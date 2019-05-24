<?php
	$sql = "select * from baiviet order by idbaiviet desc limit 15";
	$baiviet = mysql_query($sql);
	
?>

<div class="box">
<?php
	$dong = mysql_fetch_array($baiviet);
?>
        <div class="box-left">
        	<a href="index.php?xem=baiviet&id=<?php echo $dong["idbaiviet"]?>">
        	<img src="<?php echo $dong["anhminhhoa"]?>">
            </a>
            
            <p align="justify" class="tieu_de_tin">
            <a href="index.php?xem=baiviet&id=<?php echo $dong["idbaiviet"]?>">
            	<b>
		            <?php echo $dong["tenbaiviet"]?>
        	    </b>
            </a>
            </p>
            <p align="justify" class="tom_tat_tin"><?php echo $dong["tomtat"]?></p>
        </div>
        
        <div class="box-right">
        	<ul>
            	<?php 
					while($dong = mysql_fetch_array($baiviet)){
				?>
                
                <li>
				<a href="index.php?xem=baiviet&id=<?php echo $dong["idbaiviet"]?>">
				<?php echo $dong["tenbaiviet"]?>
                </a>
                </li>
               
               <?php 
					}
			   ?>
            </ul>
          </div>
          <div class="xoa"></div>
      </div>

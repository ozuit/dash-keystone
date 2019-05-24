<?php
	$sql = "select * from baiviet order by idbaiviet desc limit 10";
	$baiviet = mysql_query($sql);
	
?>

<div class="box no-padding no-border">
	<div class="tieudebox">
    	Tin cập nhật        
    </div>
    
    <div class="box-right" style="width:auto">
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
    <!--<div class="box-tin">
            	<img src="img/b1.jpg" />
                <p>Doflamingo placed the highest price of 500 million Beli on Usopp's head</p>
            	<div class="xoa"></div>
            </div>
            <div class="box-tin">
            	<img src="img/b2.jpg" />
                <p>Doflamingo placed the highest price of 500 million Beli on Usopp's head</p>
            	<div class="xoa"></div>
            </div>
            <div class="box-tin">
            	<img src="img/b3.jpg" />
                <p>Doflamingo placed the highest price of 500 million Beli on Usopp's head</p>
            	<div class="xoa"></div>
            </div>
            <div class="box-tin">
            	<img src="img/b4.jpg" />
                <p>Doflamingo placed the highest price of 500 million Beli on Usopp's head</p>
            	<div class="xoa"></div>
            </div>
        	<div class="box-tin">
            	<img src="img/b5.jpg" />
                <p>Doflamingo placed the highest price of 500 million Beli on Usopp's head</p>
            	<div class="xoa"></div>
            </div>
            <div class="box-tin">
            	<img src="img/b6.jpg" />
                <p>Doflamingo placed the highest price of 500 million Beli on Usopp's head</p>
            	<div class="xoa"></div>
            </div>
            <div class="box-tin">
            	<img src="img/b7.jpg" />
                <p>Doflamingo placed the highest price of 500 million Beli on Usopp's head</p>
            	<div class="xoa"></div>
            </div>
            <div class="box-tin">
            	<img src="img/b8.jpg" />
                <p>Doflamingo placed the highest price of 500 million Beli on Usopp's head</p>
            	<div class="xoa"></div>
            </div>
             <div class="box-tin">
            	<img src="img/b9.jpg" />
                <p>Doflamingo placed the highest price of 500 million Beli on Usopp's head</p>
            	<div class="xoa"></div>
            </div>-->
        
          </div>
</div>
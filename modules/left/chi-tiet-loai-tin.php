<?php
	$num = 6; //Thiet lap so bai viet tren mot trang
	if(isset($_GET["trang"])){
		$trang = $_GET["trang"];
		}else{
			$trang = 1;
			}
	$batdau = ($trang-1)* $num;
	$sql = "select * from baiviet where idloaitin = '$_GET[id]' limit $batdau, $num";
	//$sql = "select * from baiviet where idloaitin = '$_GET[id]'";
	$baiviet = mysql_query($sql);
	
	?>
<div class="box-right" style="width:95%; padding: 10px; border:#999 solid 1px">

<?php
	while($dong = mysql_fetch_array($baiviet)){
?>
    <div class="box-tin">
            	<img src="<?php echo $dong["anhminhhoa"]?>" />
                <p>
                	<a href="index.php?xem=baiviet&id=<?php echo $dong["idbaiviet"]?>">
						<?php echo $dong["tenbaiviet"]?>
                	</a>
                </p>
                <p><?php echo $dong["tomtat"]?></p>
            	<!--<div class="xoa"></div>-->
    </div>
<?php
	}
?>            
        
    </div>
    <?php
    	include("modules/left/trang.php");
	?>
    <div class="xoa"></div>
</div>
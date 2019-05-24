<?php
	$sql = "select * from baiviet where idbaiviet = '$_GET[id]'";
	$baiviet = mysql_query($sql);
	$dong = mysql_fetch_array($baiviet);
?>
<div class="box anhchitiet">
	<p class="tieu_de_tin">
        <a href="#">
        	<?php echo $dong["tenbaiviet"]?>
        </a>
    </p>
    <img src="<?php echo $dong["anhminhhoa"]?>">
    
    <?php echo $dong["noidung"]?>
    
    <?php
    	include("modules/left/tin-lien-quan.php");
	?>
</div>
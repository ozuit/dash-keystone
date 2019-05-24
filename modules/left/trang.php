<?php
	$sql = "select * from baiviet where idloaitin = '$_GET[id]'";
	$baiviet = mysql_query($sql);
	$sobaiviet = mysql_num_rows($baiviet);
	
	$sotrang = ceil($sobaiviet/$num);
?>

<div class="trang">
<?php 
	$i = 1;
	while($i <= $sotrang){
?>
	<a href="index.php?xem=loaitin&id=<?php echo $_GET["id"]?>&trang=<?php echo $i?>">
	<div class="box-trang">
    <?php 
		echo $i;
	?>
    </div>
    </a>
<?php
	$i++;
	}
?>    
</div>
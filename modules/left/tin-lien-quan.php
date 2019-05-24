<?php
	$sql = "select * from baiviet where idloaitin='$dong[idloaitin]' and idbaiviet not in ($_GET[id])";
	$baiviet = mysql_query($sql);
	
?>


<div class="tin-lien-quan">
	<p style="font-size:14px; margin-top:20px;"><b>Tin liên quan:</b></p>
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
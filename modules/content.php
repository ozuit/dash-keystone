<div id="content">
  	<div id="content-left">
    <?php
		$tam = @$_GET["xem"];
		if($tam == "baiviet"){
			include("modules/left/chi-tiet-tin.php");
		} else if($tam == "loaitin"){
			include("modules/left/chi-tiet-loai-tin.php");
		} else{
			include("modules/left/tin-moi.php");
			$sql = "select * from loaitin where trangchu = 'Hiển thị' order by thutu asc";
			$loaitin = mysql_query($sql);
			while($dong_loaitin = mysql_fetch_array($loaitin)){
				include("modules/left/box-tin-a.php");
			}
			//include("modules/left/box-tin.php");
		//include("modules/left/chi-tiet-loai-tin.php");
		}
	?>
   	      </div>
           
  	<div id="content-right">
    <?php		
		include("modules/right/tin-cap-nhat.php");
	?>
    </div>
    <div class="xoa"></div>
  </div>
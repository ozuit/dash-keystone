<div id="content">
<?php
	if(isset($_GET["quanly"])){
		
		$tam = @$_GET["quanly"];
		
	} else{
		$tam = "";
	}
	if($tam == "loaitin"){
		
		include("modules/loaitin/main.php");
		
	}else if($tam == "baiviet"){
		
		include("modules/baiviet/main.php");
		
	}else if($tam == "lienhe"){
		
		include("modules/lienhe/main.php");
		
	}else if($tam == "quangcao"){
		
		include("modules/quangcao/main.php");
		
	}else if($tam == "nguoidung"){
		
		include("modules/nguoidung/main.php");
		
	}


?>

</div>
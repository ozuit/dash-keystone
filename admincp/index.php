<?php
	session_start();
	if($_SESSION["tendangnhap"] == ""){
		header("location: login.php");
		exit();
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Control Panel</title>
<link rel="icon" type="image/png" href="img/qlnguoidung.png">
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<?php
		include("modules/config.php");
		include("modules/banner.php");
		include("modules/menu.php");
		include("modules/content.php");
		include("modules/footer.php");
	?>



</body>
</html>
<?php 
	include("modules/config.php");
	session_start();
	if(isset($_POST['dangnhap'])){
		$tendangnhap = $_POST['tendangnhap'];
		$matkhau = $_POST['matkhau'];
		
		$sql = "select * from user where tendangnhap = '$tendangnhap' and matkhau = '$matkhau'";
		$ketqua = mysql_query($sql);
		if(mysql_num_rows($ketqua) > 0){
				//session_register("tendangnhap");
				
				$_SESSION["tendangnhap"] = $tendangnhap;
				header("location: index.php");
			}
		}else if(isset($_POST["thoat"])){
			session_destroy();
			header("location: ../index.php");
			}else if(@$_GET['ac'] == "thoat"){
				session_destroy();
			header("location: login.php");
				}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập hệ thống</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="login">
<form action="login.php" method="post">
<table width="422" border="0">
  <tr>
    <td height="46" colspan="3"><div align="center">ĐĂNG NHẬP HỆ THỐNG QUẢN TRỊ</div></td>
  </tr>
  <tr>
    <td width="138" height="34">Tên đăng nhập:</td>
    <td colspan="2">
    	<input type="text" name="tendangnhap" size="30"/>
    </td>
  </tr>
  <tr>
    <td height="33">Mật khẩu:</td>
    <td colspan="2"><input type="password" name="matkhau" size="30"/></td>
  </tr>
  <tr>
    <td height="37">&nbsp;</td>
    <td width="130"><input type="submit" name="dangnhap" value="  Đăng nhập  "/></td>
    <td width="140"><input type="submit" name="thoat" value="     Thoát     "/></td>
  </tr>
</table>
</form>
</div>
</body>
</html>
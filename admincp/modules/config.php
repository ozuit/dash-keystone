<?php
	$tenmaychu = "localhost";
	$taikhoan = "root";
	$matkhau = "";
	$csdl = "thietkeweb";
	/*mysql_connect("localhost","root","") or die(mysql_error());*/
	$con = mysql_connect($tenmaychu,$taikhoan,$matkhau);
	mysql_select_db($csdl,$con);
?>
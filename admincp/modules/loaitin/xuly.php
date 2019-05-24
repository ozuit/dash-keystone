<?php
	include("../config.php");
	/*echo "<pre>";
print_r($_POST);
	die();*/	
	$tenloaitin = $_POST["tenloaitin"];
	$thutu = $_POST["thutu"]; 
	$trangthailoaitin = $_POST["trangthailoaitin"];
	$trangchu = $_POST["trangchu"];
	$id = $_GET["id"]; 
	if(isset($_POST["them"])){
		//Thuc hien them du lieu
		$sql = "insert into loaitin (tenloaitin, thutu, trangthai, trangchu) values('$tenloaitin', '$thutu', '$trangthailoaitin', '$trangchu')";
		mysql_query($sql);
		
		header("location: ../../index.php?quanly=loaitin&ac=them");
		}else if(isset($_POST["sua"])){
			//Thuc hien sua
		$sql = "update loaitin set tenloaitin = '$tenloaitin' , thutu = '$thutu', trangthai= '$trangthailoaitin', trangchu = '$trangchu' where idloaitin = '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=loaitin&ac=sua&id=".$id);
		}else{
			//Thuc hien xoa
			$sql= "delete from loaitin where idloaitin = '$id'";
			mysql_query($sql);
			header("location: ../../index.php?quanly=loaitin&ac=them");
			}
?>
<?php
	include("../config.php");

	$tenbaiviet = $_POST["tenbaiviet"];
	$tomtat = $_POST["tomtat"];
	$noidung = $_POST["noidung"];
	$thutu = $_POST["thutu"]; 
	$loaitin = $_POST["loaitin"];
	$trangthai = $_POST["trangthai"];
	
	if(isset($_POST["them"])){
		//Thuc hien them du lieu vao bai viet
		$tenanh = $_FILES["anhminhhoa"]["name"]; //Lay ten cua anh duoc chon
		if($tenanh != ""){
			$time = date("Ymdhms");
			$tenanh = $time.$tenanh;
			$dich = "../../../uploads/".$tenanh; //Dinh nghia duong dan toi thu muc chua anh
			copy($_FILES["anhminhhoa"]["tmp_name"],$dich);
			$dich = substr($dich,9);
			}			
			$sql = "insert into baiviet (tenbaiviet, anhminhhoa, tomtat, noidung, idloaitin,  trangthai, thutu) values ('$tenbaiviet','$dich','$tomtat','$noidung','$loaitin','$trangthai','$thutu')";
				
			mysql_query($sql);
			header("location: ../../index.php?quanly=baiviet&ac=them");
	}else if($_POST["sua"]){
		//Thuc hien sua du lieu bai viet duoc chon
		$tenanh = $_FILES["anhminhhoa"]["name"]; //Lay ten cua anh duoc chon
		if($tenanh != ""){
			$time = date("Ymdhis");
			$tenanh = $time.$tenanh;
			$dich = "../../../uploads/".$tenanh; //Dinh nghia duong dan toi thu muc chua anh
			copy($_FILES["anhminhhoa"]["tmp_name"],$dich);
			$dich = substr($dich,9);
			
			$sql = "select anhminhhoa from baiviet where idbaiviet = '$_GET[id]'";
			$baiviet = mysql_query($sql);
			$dong = mysql_fetch_array($baiviet);
			//Xoa tap tin dung lenh php
			if($dong["anhminhhoa"]!=""){
				unlink("../../../".$dong["anhminhhoa"]);
				}
											
			$sql = "UPDATE baiviet SET tenbaiviet='$tenbaiviet', anhminhhoa='$dich',tomtat='$tomtat', noidung='$noidung', trangthai='$trangthai', idloaitin='$loaitin', thutu='$thutu' where idbaiviet= '$_GET[id]' ";
						
			}else{
				$sql = "UPDATE baiviet SET tenbaiviet='$tenbaiviet', anhminhhoa='$dich',tomtat='$tomtat', noidung='$noidung', trangthai='$trangthai', idloaitin='$loaitin', thutu='$thutu' where idbaiviet= '$_GET[id]' ";
				}
			mysql_query($sql);		
			header("location: ../../index.php?quanly=baiviet&ac=sua&id=".$_GET['id']);
		}else{
			//Thuc hien xoa
			$sql = "select anhminhhoa from baiviet where idbaiviet = '$_GET[id]'";
			$baiviet = mysql_query($sql);
			$dong = mysql_fetch_array($baiviet);
			//Xoa tap tin dung lenh php
			if($dong["anhminhhoa"]!=""){
				unlink("../../../".$dong["anhminhhoa"]);
				}
			
			$sql = "DELETE FROM baiviet where idbaiviet = '$_GET[id]'";
			mysql_query($sql);
			header("location: ../../index.php?quanly=baiviet&ac=them");
			
			
			}
	
	
?>
















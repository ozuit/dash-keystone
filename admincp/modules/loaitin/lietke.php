<?php
	$sql = "SELECT * from loaitin order by thutu asc";
	$loaitin = mysql_query($sql);
?>
<div class="right">
  <table width="555" border="1" id="custom">
    <tr>
      <td width="40" height="36"><div align="center"><strong>STT</strong></div></td>
      <td width="150"><div align="center"><strong>Tên loại tin</strong></div></td>
      <td width="90"><div align="center"><strong>Trạng thái</strong></div></td>
      <td width="83"><strong>Trang chủ</strong></td>
      <td width="56"><div align="center"><strong>Thứ tự</strong></div></td>
      <td colspan="2"><div align="center"><strong>Quản lý</strong></div></td>
    </tr>
<?php
	$i = 1;
	while ($dong = mysql_fetch_array($loaitin)){ 
	if($dong["idloaitin"] == @$_GET["id"]){
?>
    <tr class="doimaunen">
      <td height="40"><div align="center"><?php echo $i?></div></td>
      <td><?php echo $dong["tenloaitin"]?></td>
      <td><?php echo $dong["trangthai"]?></td>
      <td><?php echo $dong["trangchu"]?></td>
      <td><?php echo $dong["thutu"]?></td>
      <td width="39">
      <a href="index.php?quanly=loaitin&ac=sua&id=<?php echo $dong["idloaitin"]?>">
      <img src="img/edit.png"/>
      </a>
      </td>
      <td width="51">
      <a href="modules/loaitin/xuly.php?xoa=loaitin&id=<?php echo $dong["idloaitin"]?>">
      <img src="img/delete.png"/>
      </a>
      </td>
    </tr>
<?php		
	}else{
?>
	<tr>
      <td height="40"><div align="center"><?php echo $i?></div></td>
      <td><?php echo $dong["tenloaitin"]?></td>
      <td><?php echo $dong["trangthai"]?></td>
      <td><?php echo $dong["trangchu"]?></td>
      <td><?php echo $dong["thutu"]?></td>
      <td width="39">
      <a href="index.php?quanly=loaitin&ac=sua&id=<?php echo $dong["idloaitin"]?>">
      <img src="img/edit.png"/>
      </a>
      </td>
      <td width="51">
      <a href="modules/loaitin/xuly.php?xoa=loaitin&id=<?php echo $dong["idloaitin"]?>">
      <img src="img/delete.png"/>
      </a>
      </td>
    </tr>
<?php	
	}
	$i++;
	}
?>
  </table>
</div>
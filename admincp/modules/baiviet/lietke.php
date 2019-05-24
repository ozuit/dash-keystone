<?php
	$sql = "SELECT idbaiviet, tenbaiviet, anhminhhoa, tenloaitin, baiviet.trangthai, baiviet.thutu from baiviet, loaitin where baiviet.idloaitin = loaitin.idloaitin order by idbaiviet desc";
	/*$sql = "SELECT * from baiviet order by thutu asc";*/
	$baiviet = mysql_query($sql);
?>
<div class="right">
  <table width="831" border="1" id="custom">
    <tr>
      <td width="40" height="36"><div align="center"><strong>STT</strong></div></td>
      <td width="269"><div align="center"><strong>Tên bài viết</strong></div></td>
      <td width="100"><strong>Ảnh minh họa</strong></td>
      <td width="80"><div align="center"><strong>Loại tin</strong></div></td>
      <td width="80"><div align="center"><strong>Trạng thái</strong></div></td>
      <td width="70"><div align="center"><strong>Thứ tự</strong></div></td>
      <td colspan="2"><div align="center"><strong>Quản lý</strong></div></td>
    </tr>
<?php
	$i = 1;
	while ($dong = mysql_fetch_array($baiviet)){
	if($dong["idbaiviet"] == @$_GET['id']){
?>
    <tr class="doimaunen">
      <td height="40"><div align="center"><?php echo $i?></div></td>
      <td><?php echo $dong["tenbaiviet"]?></td>
      <td><img src="../<?php echo $dong["anhminhhoa"]?>" width="60"/>      </td>
      <td><?php echo $dong["tenloaitin"]?></td>
      <td><?php echo $dong["trangthai"]?></td>
      <td><?php echo $dong["thutu"]?></td>
      <td width="70">
      <a href="index.php?quanly=baiviet&ac=sua&id=<?php echo $dong["idbaiviet"]?>">
      <img src="img/edit.png"/>
      </a>
      </td>
      <td width="70">
      <a href="modules/baiviet/xuly.php?xoa=baiviet&id=<?php echo $dong["idbaiviet"]?>">
      <img src="img/delete.png"/>
      </a>
      </td>
    </tr>
<?php		
	}else{
?>
	<tr>
      <td height="40"><div align="center"><?php echo $i?></div></td>
      <td><?php echo $dong["tenbaiviet"]?></td>
      <td><img src="../<?php echo $dong["anhminhhoa"]?>" width="60"/></td>
      <td><?php echo $dong["tenloaitin"]?></td>
      <td><?php echo $dong["trangthai"]?></td>
      <td><?php echo $dong["thutu"]?></td>
      <td width="70">
      <a href="index.php?quanly=baiviet&ac=sua&id=<?php echo $dong["idbaiviet"]?>">
      <img src="img/edit.png"/>
      </a>
      </td>
      <td width="70">
      <a href="modules/baiviet/xuly.php?xoa=baiviet&id=<?php echo $dong["idbaiviet"]?>">
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
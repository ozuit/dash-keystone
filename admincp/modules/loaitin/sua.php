<?php
	$sql = "select * from loaitin where idloaitin ='$_GET[id]'";
	
	$loaitin = mysql_query($sql); 
	
	$dong = mysql_fetch_array($loaitin);
	
?>
<form action="modules/loaitin/xuly.php?id=<?php echo $dong["idloaitin"]?>" method="post">
<div class="left">
<table width="337" border="0">
  <tr>
    <td height="32" colspan="3"><div align="center"><strong>CHỨC NĂNG SỬA LOẠI TIN</strong></div></td>
  </tr>
  <tr>
    <td width="104">Tên loại tin</td>
    <td colspan="2">
      <input type="text" name="tenloaitin" id="tenloaitin" value="<?php echo $dong["tenloaitin"]?>">
    </td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td colspan="2">
      <input type="text" name="thutu" id="thutu" value="<?php echo $dong["thutu"]?>">
    </td>
  </tr>
  <tr>
    <td>Trang chủ</td>
    <td colspan="2">
    	<select name="trangchu">
        	<option value="Hiển thị" selected="selected">Hiển thị</option>
        	<option value="Không hiển thị">Không hiển thị</option>
        </select>
    </td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td colspan="2"><select name="trangthailoaitin" id="trangthailoaitin">
    
    <?php
    	if($dong["trangthai"] == "Hiển thị"){
	?>
      <option value="Hiển thị" selected="selected">Hiển thị</option>
      <option value="Không hiển thị">Không hiển thị</option>
     <?php
     } else{
	 ?>
      <option value="Hiển thị">Hiển thị</option>
      <option value="Không hiển thị" selected="selected">Không hiển thị</option>
      <?php
     }
	 ?>
    </select></td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td width="73"><input type="submit" name="sua" id="sua" value=" Cập nhật "></td>
    <td width="146"><input type="reset" name="reset" id="reset" value=" Nhập lại "></td>
  </tr>
</table>
</div>
</form>

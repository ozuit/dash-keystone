<?php
	include("modules/editor/editor1.php");
?>

<form action="modules/baiviet/xuly.php" method="post" enctype="multipart/form-data">
<div class="left">
<table width="100%" border="0">
  <tr>
    <td height="32" colspan="3"><div align="center"><strong>CHỨC NĂNG THÊM MỚI BÀI VIẾT</strong></div></td>
  </tr>
  <tr>
    <td width="83">Tên bài viết</td>
    <td colspan="2">
      <input type="text" name="tenbaiviet" id="tenbaiviet" style="width:50%">
    </td>
  </tr>
  <tr>
    <td>Ảnh minh họa</td>
    <td colspan="2">
    <input type="file" name="anhminhhoa"/>
    </td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td colspan="2">
    <textarea cols="40" rows="10" name="tomtat">
    </textarea>
    </td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td colspan="2">
    <textarea cols="40" rows="10" name="noidung">
    </textarea>
    </td>
  </tr>
  <tr>
    <td>Loại tin</td>
    <td colspan="2">
    <?php
    	$sql = "select * from loaitin";
		$loaitin = mysql_query($sql);
	?>
    
    <select name="loaitin">
    <?php
    	while($dong_loaitin = mysql_fetch_array($loaitin)){
	?>
    <option value="<?php echo $dong_loaitin["idloaitin"]?>"><?php echo $dong_loaitin["tenloaitin"]?></option>
    <?php
    	}
	?>
    </select>
    </td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td colspan="2">
    <select name="trangthai">
    <option value="Hiển thị" selected="selected">Hiển thị</option>
    <option value="Không hiển thị" >Không hiển thị</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td colspan="2">
    <input type="text" name="thutu" size="20" />
    </td>
  </tr>
  <tr>
    
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td width="73"><input type="submit" name="them" id="them" value="   Thêm   "></td>
    <td width="643"><input type="reset" name="reset" id="reset" value=" Nhập lại "></td>
  </tr>
</table>
</div>
</form>
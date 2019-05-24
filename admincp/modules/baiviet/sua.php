<?php
	$sql = "select * from baiviet where idbaiviet = '$_GET[id]'";
	$baiviet = mysql_query($sql);
	$dong = mysql_fetch_array($baiviet);
?>

<?php
	include("modules/editor/editor1.php");
?>

<form action="modules/baiviet/xuly.php?id=<?php echo $dong["idbaiviet"]?>" method="post" enctype="multipart/form-data">
<div class="left">
<table width="815" border="0">
  <tr>
    <td height="32" colspan="3"><div align="center"><strong>CHỨC NĂNG THÊM MỚI BÀI VIẾT</strong></div></td>
  </tr>
  <tr>
    <td width="80">Tên bài viết</td>
    <td colspan="2">
      <input type="text" name="tenbaiviet" id="tenbaiviet" value="<?php echo $dong["tenbaiviet"]?>" size="50">
    </td>
  </tr>
  <tr>
    <td>Ảnh minh họa</td>
    <td colspan="2">
    <input type="file" name="anhminhhoa"/>
    <img src="../<?php echo $dong["anhminhhoa"] ?>" width="50"/>
    </td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td colspan="2">
    <textarea cols="40" rows="10" name="tomtat">
    <?php echo $dong["tomtat"]?>
    </textarea>
    </td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td colspan="2">
    <textarea cols="40" rows="10" name="noidung">
    <?php echo $dong["noidung"]?>
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
		if($dong_loaitin["idloaitin"] == $dong["idloaitin"]){
	?>
    <option value="<?php echo $dong_loaitin["idloaitin"]?>" selected="selected"><?php echo $dong_loaitin["tenloaitin"]?></option>
    <?php
    	}else{
	?>
    <option value="<?php echo $dong_loaitin["idloaitin"]?>" ><?php echo $dong_loaitin["tenloaitin"]?></option>
    <?php
		}
		}
		?>
    </select>
    </td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td colspan="2">
    <select name="trangthai">
    <?php 
		if($dong["trangthai"] == "Hiển thị"){
	?>
    <option value="Hiển thị" selected="selected">Hiển thị</option>
    <option value="Không hiển thị" >Không hiển thị</option>
    <?php }else{ ?>
    <option value="Hiển thị">Hiển thị</option>
    <option value="Không hiển thị" selected="selected" >Không hiển thị</option>
    <?php }?>
    </select>
    </td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td colspan="2">
    <input type="text" name="thutu" size="20" value="<?php $dong["thutu"]?>" />
    </td>
  </tr>
  <tr>
    
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td width="91"><input type="submit" name="sua" id="sua" value="   Cập nhật   "></td>
    <td width="630"><input type="reset" name="reset" id="reset" value=" Nhập lại "></td>
  </tr>
</table>
</div>
</form>
<form action="modules/loaitin/xuly.php" method="post" >
<div class="left">
<table width="337" border="0">
  <tr>
    <td height="32" colspan="3"><div align="center"><strong>CHỨC NĂNG THÊM MỚI LOẠI TIN</strong></div></td>
  </tr>
  <tr>
    <td width="104">Tên loại tin</td>
    <td colspan="2">
      <input type="text" name="tenloaitin" id="tenloaitin">
    </td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td colspan="2">
      <input type="text" name="thutu" id="thutu">
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
      <option value="Hiển thị" selected="selected">Hiển thị</option>
      <option value="Không hiển thị">Không hiển thị</option>
    </select></td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td width="73"><input type="submit" name="them" id="them" value="   Thêm   "></td>
    <td width="146"><input type="reset" name="reset" id="reset" value=" Nhập lại "></td>
  </tr>
</table>
</div>
</form>
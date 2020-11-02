<div>
<h2><span><a href="adminManager.php?mod=category&act=edit&id=<?php echo $id; ?>">Chỉnh sửa thề loại</a></span></h2>

<form action="adminManager.php?mod=category&act=edit&id=<?php echo $id; ?>" method="post" class="form">
	<p><label>Tên thể loại</label><input type="text" name="txtCategoryName" id="txtCategoryName" value="<?php echo $row['CategoryName']; ?>"/></p>
    <p><label>Vị trí</label><input type="text" name="txtPosition" id="txtPosition" value="<?php echo $row['Position'] ?>" /></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>

</div>
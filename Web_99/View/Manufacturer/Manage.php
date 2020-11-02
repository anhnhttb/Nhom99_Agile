<h1 class="mt-4">Quản lý nhà cung cấp </h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="~/View/Products/Manage.php">Quản lý nhà cung cấp </a></li>
    <li class="breadcrumb-item active">Quản lý nhà cung cấp</li>
</ol>

<div>
<h2><a href="adminManager.php?mod=manufacturer&act=manage">Quản lý nhà cung cấp</a></h2>

	<table class="table" style="margin-top: 40px;">
  		<thead class="thead-dark">
    	<tr>
      		<th scope="col">Mã nhà cung cấp</th>
      		<th scope="col">Tên nhà cung cấp</th>
      		<th scope="col">Xóa</th>
      		<th scope="col">Sửa</th>
    	</tr>
  		</thead>
    <?php
	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['ManufacturerID']."</td><td>";
		echo $row['ManufacturerName']."</td><td>";
		echo "<a href=\"adminManager.php?mod=manufacturer&act=delete&id=$row[ManufacturerID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"adminManager.php?mod=manufacturer&act=edit&id=$row[ManufacturerID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>

<p class="btn-more box noprint"><strong><a href="adminManager.php?mod=manufacturer&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">
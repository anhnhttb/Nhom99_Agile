<h1 class="mt-4">Quản lý thể loại</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="~/View/Products/Manage.php">Quản lý thể loại</a></li>
    <li class="breadcrumb-item active">Quản lý thể loại</li>
</ol>

<div>

	<table class="table" style="margin-top: 40px;">
  		<thead class="thead-dark">
    	<tr>
      		<th scope="col">Mã thể loại</th>
      		<th scope="col">Tên thể loại</th>
      		<th scope="col">Xóa</th>
      		<th scope="col">Sửa</th>
    	</tr>
  		</thead>
    <?php
	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['CategoryID']."</td><td>";
		echo $row['CategoryName']."</td><td>";
		echo "<a href=\"adminManager.php?mod=category&act=delete&id=$row[CategoryID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"adminManager.php?mod=category&act=edit&id=$row[CategoryID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>

<p class="btn-more box noprint"><strong><a href="adminManager.php?mod=category&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">
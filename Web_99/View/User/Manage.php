 <h1 class="mt-4">Quản lý thành viên</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="~/View/Products/Manage.php">Quản lý thành viên</a></li>
    <li class="breadcrumb-item active">Quản lý thành viên</li>
</ol>

 <!-- Article --><div class="article">
<h2><span><a href="adminManager.php?mod=user&act=manage">Quản lý thành viên</a></span></h2>
<p>
	<table class="table" style="margin-top: 40px;">
  		<thead class="thead-dark">
    	<tr>
      		<th scope="col">Họ tên</th>
      		<th scope="col">Tên đăng nhập</th>
      		<th scope="col">Nhóm</th>
      		<th scope="col">Email</th>
      		<th scope="col">Xóa</th>
      		<th scope="col">Sửa</th>
    	</tr>
  		</thead>
    <?php

	foreach($ret as $row)
	{
			echo "<tr><td>";
			echo $row['FullName']."</td><td>";
			echo $row['UserName']."</td><td>";
			echo $row['GroupName']."</td><td>";
			echo $row['Email']."</td><td>";
			echo "<a href=\"adminManager.php?mod=user&act=delete&id={$row["UserID"]}\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
			echo "<a href=\"adminManager.php?mod=user&act=edit&id={$row["UserID"]}\"><img src=\"Images/Edit.gif\" /></a>";
			echo "</td></tr>";
	}
	?>
    </table>
</p>
</div> <!-- /article --><hr class="noscreen">
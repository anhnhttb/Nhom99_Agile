
<table class="table" style="margin-top: 40px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Nhóm thành viên</th>
      <th scope="col">Xóa</th>
      <th scope="col">Sửa</th>
    </tr>
  </thead>
  <tbody>
  <?php
	$count = 1;
	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $count++."</td><td>";
		echo $row['GroupName']."</td><td>";
		echo "<a href=\"adminManager.php?mod=group&act=delete&id=$row[GroupID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"adminManager.php?mod=group&act=edit&id=$row[GroupID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
  </tbody>
</table>

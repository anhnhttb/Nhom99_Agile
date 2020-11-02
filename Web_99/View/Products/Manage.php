<h1 class="mt-4">Quản lý sản phẩm</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="~/View/Products/Manage.php">Quản lý sản phẩm</a></li>
    <li class="breadcrumb-item active">Quản lý sản phẩm</li>
</ol>

<div>
	<table class="table" style="margin-top: 40px;">
  		<thead class="thead-dark">
    	<tr>
      		<th scope="col">Tên sản phẩm</th>
      		<th scope="col">Nhà cung cấp</th>
      		<th scope="col">Thể loại</th>
      		<th scope="col">Giá</th>
      		<th scope="col">Số lượng</th>
      		<th scope="col">Hình</th>
      		<th scope="col">Xóa</th>
      		<th scope="col">Sửa</th>
    	</tr>
  		</thead>
    	<?php

		foreach($ret as $row)
		{
			echo "<tr><td>";
			echo $row['ProductName']."</td><td>";
			echo $row['ManufacturerName']."</td><td>";
			echo $row['CategoryName']."</td><td>";
			echo "Giá ".number_format($row["Price"],0)." VND</td><td>";
			echo $row['Quantity']."</td><td>";
			echo "<img src=\"Upload/$row[ImageUrl]\" width=\"30\" /></td><td>";
			echo "<a href=\"adminManager.php?mod=products&act=delete&id=$row[ProductID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
			echo "<a href=\"adminManager.php?mod=products&act=edit&id=$row[ProductID]\"><img src=\"Images/Edit.gif\" /></a>";
			echo "</td></tr>"; 
		}
		?>
    </table>

<p class="btn-more box noprint"><strong><a href="adminManager.php?mod=products&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">
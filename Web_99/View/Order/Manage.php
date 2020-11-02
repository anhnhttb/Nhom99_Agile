<h1 class="mt-4">Quản lý đơn hàng</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="~/View/Products/Manage.php">Quản lý đơn hàng</a></li>
    <li class="breadcrumb-item active">Quản lý đơn hàng</li>
</ol>

<div>
<h2><span><a href="adminManager.php?mod=order&act=manage">Quản lý đơn hàng</a></span></h2>
<p>
    <?php
	 
	foreach($order as $row)
	{
		$count = 0;
		echo "<p>Mã đơn hàng: $row[OrderID]</p>";
		echo "<p>Tên khách hàng: $row[FullName]</p>";
		echo "<p>Ngày đặt hàng: $row[AddedDate]</p>";
		$item = $oi->GetOrderItemByOrder($row['OrderID']);
		echo "<table>";
		echo "<tr><td>Tên sản phẩm</td><td>Số lượng</td><td>Giá</td></tr>";
		$sum=0;
		foreach($item as $rowitem)
		{
			echo "<tr><td>";
			echo $rowitem['ProductName']."</td><td>";
			echo $rowitem['Quantity']."</td><td>";
			echo $rowitem['Price']."</td>";
			echo "</tr>";
			$sum+=$rowitem['Quantity']*$rowitem['Price'];
		}
		echo "</table>";
		echo "Tổng đơn hàng là: ".$sum. "(VNĐ)";
		echo "<br>";
		echo "<a href=\"adminManager.php?mod=order&act=delete&id=$row[OrderID]\" onclick=\"return IsDelete()\">Xóa đơn hàng<img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<hr/>";
	}
	?>
    </table>
</p>
</div> <!-- /article --><hr class="noscreen">
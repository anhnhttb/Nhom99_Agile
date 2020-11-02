<?php
	foreach ($result as $row) {
		echo "<li><a class=\"dropdown-item\" href=\"index.php?mod=products&act=resultcategory&id={$row['CategoryID']}&name={$row['CategoryName']}\">{$row['CategoryName']}</a></li>";
	}
?>
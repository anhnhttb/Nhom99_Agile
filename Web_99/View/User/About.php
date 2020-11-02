<div>
	<center><h2>Thông tin cá nhân</h2></center>
	<table>
	  <?php
	  	echo "<tr><td>Tên đăng nhập:</td><td>".$row['UserName']."</td></tr>";
	  	echo "<tr><td>Họ tên:</td><td>". $row['FullName']. "</td></tr>";
		
		echo "<tr><td>Email:</td><td>".$row['Email']."</td></tr>";
	  ?>
  	</table>
</div>
<hr/>
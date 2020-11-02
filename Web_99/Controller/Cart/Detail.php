<?php
if(isset($_SESSION["mycart"])){
	include_once ("Model/Products.php");
	$pro = new Products();
	include_once ("View/Cart/Detail.php");
}
?> 
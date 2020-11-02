<?php
	include_once("Model/Products.php");
	$pro = new Products();
	$result = $pro->getAllOther();
	include_once("View/Products/Other.php");
?>
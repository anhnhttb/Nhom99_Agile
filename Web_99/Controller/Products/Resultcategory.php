<?php
	include_once("Model/Products.php");
	$pro = new Products();
	if(isset($_GET['id'])&&isset($_GET['name'])){
		$id=$_GET['id'];
		$name=$_GET['name'];
	}

	$res = $pro->resultCategory($id);
	include_once("View/Products/Resultcategory.php");
?>
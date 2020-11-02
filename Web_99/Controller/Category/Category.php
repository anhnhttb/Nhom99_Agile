<?php
	
	include_once("Model/Category.php");
	$cate = new Category();
	$result = $cate->getCategoryName();
	// echo var_dump($result);
	include_once("View/Category/Category.php");
?>
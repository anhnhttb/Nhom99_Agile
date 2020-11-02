<?php
	include_once ("Model/Products.php");
	include_once ("Model/Pages.php");
	define("MAX",8);
	$pro = new Products();
	$count = $pro->CountProducts();
	
	$findStart = Pages::findStart(MAX);
	$findPage = Pages::findPages($count,MAX);
	// echo $count;
	$rs = $pro->GetProducts($findStart,MAX);


	include_once ("View/Products/New.php");
?>
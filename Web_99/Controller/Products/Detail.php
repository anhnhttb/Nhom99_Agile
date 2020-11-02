<?php
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		include_once("Model/Products.php");
		$pro = new Products();
		$res = $pro->detailProduct($id);
	
		if($res){
			$categoryID = $res['CategoryID'];
			$resOther = $pro->getCategoryOther($id,$categoryID);
			include_once("View/Products/Detail.php");
		}
	}
	
?>
<?php
	include_once("DataProvider.php");
	class Products{
		private $da;
		function __construct(){
			$this->da = new DataProvider();
		}
		function getProductById($id){
			$sql = "Select CategoryID,ProductID,ProductName,ImageUrl,Price,Quantity, Description, Body from Products where ProductID = $id";
			return $this->da->Fetch($sql);
		}
		function GetProducts($start,$end){
			$sql="Select ProductID,ProductName,ImageUrl,Price,Quantity from Products order by ProductID desc limit $start,$end";
			return $this->da->FetchAll($sql);
		}
		function CountProducts(){
			$sql="Select ProductID from Products";
			return $this->da->NumRows($sql);
		}
		function Search($txtSearch){
			$sql = "Select ProductID,ProductName,ImageUrl,Price,Quantity from Products where ProductName like '%$txtSearch%' or Price like '%$txtSearch%'";
			return $this->da->FetchAll($sql);
		}
	 	function resultCategory($idcate){
	 		$sql = "Select * from products p join categories o on p.CategoryID=o.CategoryID and o.CategoryID=$idcate";
	 		return $this->da->FetchAll($sql);
	 	}
		function getAllOther(){
			$sql = "Select ProductID,ProductName,ImageUrl,Price,Quantity from Products where CategoryID =2 or (CategoryID>3 and CategoryID <>5)";
			return $this->da->FetchAll($sql);
		}
		function detailProduct($id){
			$sql = "Select CategoryID,ProductID,ProductName,ImageUrl,Price,Quantity, Description, Body from Products where ProductID = $id";
			return $this->da->Fetch($sql);
		}
		function getCategoryOther($id,$CategoryID){
			$sql = "Select ProductID,ProductName,ImageUrl,Price,Quantity, Description, Body from Products where ProductID <> $id and CategoryID = $CategoryID";
			return $this->da->FetchAll($sql);
		}
		function getProductsManage(){
			$sql = "Select ProductID, ProductName, ImageUrl, Price, Quantity, ManufacturerName, CategoryName from Products p join Categories c on p.CategoryID=c.CategoryID join Manufacturers m on p.ManufacturerID=m.ManufacturerID order by ProductID";
			return $this->da->FetchAll($sql); 
		}
		function DeleteProducts($id){
			$sql = "Delete from products where ProductID=$id";
			return $this->da->ExecuteQuery($sql);
		}
		function InsertProduct($manuID,$cateID,$proName,$Image,$Price,$Quantity,$Description,$Body){
			$sql = "Insert into products(ManufacturerID,CategoryID,ProductName,ImageUrl,Price,Quantity,Description,Body) values ($manuID,$cateID,'$proName','$Image',$Price,$Quantity,'$Description','$Body')";

			return $this->da->ExecuteQuery($sql);
		}
		function UpdateProduct($productID,$manufacturerID,$categoryID,$productName,$price,$quantity,$description,$body,$imageUrl=""){
			if($imageUrl=="")
			{
				$sql="Update Products set ManufacturerID=$manufacturerID, CategoryID=$categoryID,ProductName='$productName',Price=$price,Quantity=$quantity, Description='$description', Body='$body' where ProductID=$productID";
			}else
				$sql="Update Products set ManufacturerID=$manufacturerID, CategoryID=$categoryID,ProductName='$productName', ImageUrl='$imageUrl', Price=$price, Quantity=$quantity, Description='$description', Body='$body' where ProductID=$productID";
			return $this->da->ExecuteQuery($sql);
		}
		function __destruct(){
			unset($this->da);
		}
	}
?>
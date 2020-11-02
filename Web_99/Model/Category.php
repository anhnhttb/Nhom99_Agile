<?php
include_once("DataProvider.php");
class Category{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}
	function getCategoryManage(){
		$sql = "Select * from categories";
		return $this->da->FetchAll($sql);
	}
	function getCategory(){
		return $this->da->FetchAll("Select * from categories");
	}
	function getCategoryName(){
		$sql = "Select CategoryName,CategoryID from categories order by Position";
		return $this->da->FetchAll($sql);
	}
	function GetCategoryByID($id){
		$sql="Select * from categories where CategoryID='$id' order by Position";
		return $this->da->Fetch($sql);
	}
	function InsertCategory($categoryName,$position){
		$sql="Insert into Categories (CategoryName,Position) Values('$categoryName',$position)";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateCategory($id,$categoryName,$position){
		$sql="Update Categories set CategoryName='$categoryName',Position=$position where CategoryID=$id";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteCategory($id){
		$sql="Delete from categories where CategoryID=$id";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct(){
		unset($this->da);
	}
}
?>
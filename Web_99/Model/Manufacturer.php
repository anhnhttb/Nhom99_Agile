<?php
include_once("DataProvider.php");
class Manufacturer{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}
	function GetManufacturerByID($id){
		$sql="Select * from Manufacturers where ManufacturerID='$id'";
		return $this->da->Fetch($sql);
	}
	function UpdateManufacturer($manufacturerID,$manufacturerName){
		$sql="Update Manufacturers set ManufacturerName='$manufacturerName' where ManufacturerID=$manufacturerID";
		return $this->da->ExecuteQuery($sql);
	}
	function getManufacturerManage(){
		$sql = "Select * from manufacturers";
		return $this->da->FetchAll($sql);
	}
	function getManufacturer(){
		return $this->da->FetchAll("Select * from manufacturers");
	}
	function DeleteManufacturer($manufacturerID){
		$sql="Delete from Manufacturers where ManufacturerID=$manufacturerID";
		return $this->da->ExecuteQuery($sql);
	}
	function InsertManufacturer($manufacturerName){
		$sql="Insert into Manufacturers (ManufacturerName) Values('$manufacturerName')";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct(){
		unset($this->da);
	}
}
?>
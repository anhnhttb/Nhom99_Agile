<?php
include_once("DataProvider.php");
class OrderItem{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}
	function GetOrderItemByOrder($orderID){
		$sql="Select OrderItems.ProductID,ProductName,Price, OrderItems.Quantity from OrderItems inner join Products on OrderItems.ProductID=Products.ProductID where OrderID=$orderID";
		return $this->da->FetchAll($sql);
	}
	function InsertOrderItem($orderID,$id,$quantity){
		// echo "tao vo đây rồi nè";
		$sql="Insert into OrderItems (OrderID,ProductID,Quantity) values($orderID,$id,$quantity)";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteOrderItem($orderID){
		$sql="Delete from OrderItems where OrderID=$orderID";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct(){
		unset($this->da);
	}
}
?>
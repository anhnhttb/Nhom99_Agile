<?php
include_once("DataProvider.php");
include_once("OrderItem.php");
class Order{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}
	function getOrders(){
		$sql = "Select * from orders o join users u on o.UserID = u.UserID";
		return $this->da->FetchAll($sql);
	}
	function InsertOrder($userID,$address,$phone){
		$sql="Insert into Orders(UserID,AddedDate,Address,Phone) values('$userID',now(),'$address','$phone')";
		return $this->da->ExecuteQueryInsert($sql);
	}
	function UpdateSum($orderID,$sum){
		$sql = "Update orders set Sum = $sum where OrderID = $orderID";
		return $this->da->ExecuteQuery($sql);	
	}
	function DeleteOrder($orderID){
		$item = new OrderItem();
		$item->DeleteOrderItem($orderID);
		$sql="Delete from Orders where OrderID=$orderID";
		return $this->da->ExecuteQuery($sql);
	}
	// select mã đơn hàng trả, trả về số hàng chứa ngày hiện tại. 
	function CountOrderInDayDone()
	{
		$sql="SELECT OrderID FROM `orders` WHERE CAST(AddedDate AS DATE) = CURDATE()";
		return $this->da->NumRows($sql);
	}

	function GetTotalDay()
	{
		$sql="SELECT SUM(Sum) as TotalDay FROM `orders` WHERE CAST(AddedDate AS DATE) = CURDATE()";
		return $this->da->Fetch($sql);
	}
	// select mã đơn hàng trong tháng , năm hiện tại từ cột addedDate , extract trả về tháng năm.
	function CountOrderInMonthDone()
	{
		$sql="SELECT OrderID FROM `orders` WHERE EXTRACT(YEAR_MONTH FROM CAST(AddedDate AS DATE)) = EXTRACT(YEAR_MONTH FROM CURDATE())";
		return $this->da->NumRows($sql);
	}

	//  select tổng doanh thu lấy tháng năm hiện tại, trả về 1 giá trị .
	function GetTotalMonth()
	{
		$sql="SELECT SUM(Sum) as TotalMonth FROM `orders` WHERE EXTRACT(YEAR_MONTH FROM CAST(AddedDate AS DATE)) = EXTRACT(YEAR_MONTH FROM CURDATE())";
		return $this->da->Fetch($sql);
	}

	function GetList7Day()
	{
		$sql="SELECT DATE_FORMAT(AddedDate, '%M %d %Y') as TimeShow, SUM(dt.Sum) as Money FROM `orders` as dt GROUP BY DATE_FORMAT(AddedDate, '%M %d %Y') ORDER BY AddedDate DESC"; // sắp xếp thời gian tăng dần .
		return $this->da->FetchAll($sql);
	}

	function __destruct(){
		unset($this->da);
	}
}
?>  
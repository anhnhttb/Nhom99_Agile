<?php
include_once("DataProvider.php");
class User{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}
	function Login($user,$pass){
		$sql = "SELECT * FROM users WHERE  UserName = '".$user."' AND PassWord = '". md5($pass)."'";
		return $this->da->Fetch($sql);
	}
	function createNewUser($fullName,$userName,$passWord,$email){
		$sql = "Insert into users(GroupID,FullName,UserName,PassWord,Email) values (3,'$fullName','$userName',md5('$passWord'),'$email')";
		return $this->da->ExecuteQuery($sql);
	}
	function getUserById($id){
		$sql = "SELECT * FROM users WHERE UserID = $id";
		return $this->da->Fetch($sql);
	}
	function getUserManage(){
		$sql = "Select UserID, FullName, UserName, Email, GroupName from users u join groups g on u.GroupID = g.GroupID";
		return $this->da->FetchAll($sql);
	}
	function DeleteUser($id){
		$sql = "Delete from users where UserID=$id";
		return $this->da->ExecuteQuery($sql);
	}
	function EditUser($userID,$groupID){
		$sql="Update Users set GroupID=$groupID where UserID=$userID";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct(){
		unset($this->da);
	}
}
?>
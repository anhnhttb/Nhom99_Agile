<?php
	class DataProvider{
		private $link;//bien ket noi csdl
		// hàm khởi tạo mặc định 
		function __construct()
		{
			$this->link=mysqli_connect("localhost","root","","storedb");
		}
		// Execute
		function  ExecuteQuery($sql)
		{
			mysqli_query($this->link,"set names utf8");
			return mysqli_query($this->link, $sql);
		}

		function ExecuteQueryInsert($sql){
			$result=$this->ExecuteQuery($sql);
			if($result >0){
				return mysqli_insert_id($this->link);// tra ve id vua moi insert
			}
			else
				return 0;
		}
		// lấy 1 thằng
		function Fetch($sql){
			$rs = $this->ExecuteQuery($sql);
			return mysqli_fetch_assoc($rs);
		}
		// lấy hết
		function FetchAll($sql){
			$arr=array();
			$r = $this->ExecuteQuery($sql);
			while($row = mysqli_fetch_assoc($r)){
				$arr[]=$row;
			}
			mysqli_free_result($r);
			return $arr;
		}		
		//
		function NumRows($sql){
			$result=$this->ExecuteQuery($sql);
			return mysqli_num_rows($result);
		}
		function __destruct()
		{
			mysqli_close($this->link);
		}
	}
?>
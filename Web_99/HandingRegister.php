<?php
	include_once("Model/User.php");
	
	if(isset($_POST["btnRegister"])){
        echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng');</script>";
		$fullName = trim($_POST["txtFullName"]);
		$userName = trim($_POST["txtUserName"]);
		$passWord = trim($_POST["txtPassWord"]);
		$email = trim($_POST["txtEmail"]);
		echo$fullName;
		echo $email;
		if($fullName!="" && $userName!="" && $passWord!="" && $email!=""){
			echo"YES ne";
			$user = new User();
			$res = $user->createNewUser($fullName,$userName,$passWord,$email);
			if($res){
				header("location: login.php");
			}
			else{
				echo "<p class=\"error\">Tên đăng nhập bị trùng<p>";
			}
		}
    }
    else
    {
        echo "<script>alert('flase');</script>";
    }
?>
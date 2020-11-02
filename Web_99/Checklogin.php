<?php
	if(isset($_POST["btnLogin"]))
	{
        session_start();
        // echo "<script>alert('BtnClickOkk');</script>";
		$userName=trim($_POST["txtUserName"]);
        $passWord=trim($_POST["txtPassWord"]);
        // echo "<script>console.log('" .$passWord . "');</script>";
		if($userName!="" && $passWord!="")
		{
			include_once("Model/User.php");
			$user = new User();
			$row=$user->Login($userName,$passWord);
			if($row)
			{
				$_SESSION["lgUserName"]=$userName;
				$_SESSION["lgUserID"]=$row["UserID"];
                $_SESSION["lgGroupID"]=$row["GroupID"];
                echo "<script>alert('ok');</script>";
				header("location:index.php");
			}
			else
			{
				
				echo '<script language="javascript">';
				echo 'alert("message successfully sent")';
				echo '</script>';
               echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng');</script>";
                // echo "<p class=\"error\">Tên đăng nhập hoặc mật khẩu không đúng</p>";
                header("location:login.php");
			}
		}
    }
    else
    {
        echo "<script>alert('ok false');</script>";
    }
?>
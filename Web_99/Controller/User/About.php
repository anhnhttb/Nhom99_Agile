<?php
	include_once("Model/User.php");
	$user = new User();
	$id = $_SESSION["lgUserID"];
	$row = $user->getUserById($id);
	include_once ("View/User/About.php");
?>
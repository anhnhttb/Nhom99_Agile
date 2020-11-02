<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Cake Coffee -Store </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet" type="text/css" href="css/main2.css">

	<script language="javascript" type="text/javascript" src="js/function.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script>
  		$( function() {
    		$( "#menu" ).menu();
  		} );
  	</script>
  	<style>
  		.ui-menu { width: 270px; }
  	</style>

</head>
<body>
	<!--Start Navbar-->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="background-color:  #ff66a3 !important;">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="background-color:  #ff66a3">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				
				<!--Start Search-->
				 
	    		<?php
	    			include_once("Controller/Products/Search.php");
	    		?>
	    		
	    		<!--End Search-->
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Trang chủ<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item dropdown" >
				        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Sản phẩm
				        </a>
				        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: rgb(153, 0, 204) !important;">
				          <?php
				          	include_once("Controller/Category/Category.php");
				          ?>
				        </ul>
				    </li>				
			      	<?php
			      		if(isset($_SESSION["lgUserID"])){
			      			$chuoi1 = <<<EOD
			      			<li class="nav-item">
						        <a class="nav-link" href="index.php?mod=user&act=about">Cá nhân</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="index.php?mod=user&act=logout">Thoát</a>
						    </li>

EOD;
			      			echo $chuoi1;
			      			if($_SESSION['lgGroupID']==1){
						    	echo "<li class=\"nav-item\">
						        <a class=\"nav-link\" href=\"adminManager.php\">Admin</a>
						    </li>";
						    }
			      		}
			      		else{
			      			$chuoi1 = <<<EOD
			      			<li class="nav-item">
						        <a class="nav-link" href="login.php">Đăng nhập</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="Register.php?mod=user&act=register">Đăng ký</a>
						    </li>
EOD;
			      			echo $chuoi1;
			      		}
			      	?>
			    </ul>
			    <!--Cart-->
			    <?php
			    	include_once("Controller/Cart/Cart.php");
			    ?>
			</div>            
	  	</div>
	</nav>
	<!--End Navbar-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>99 - CAKE COFFEE</title>
<a href= "http://localhost/Web_99/index.html"></a>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='http://fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- //end-smooth-scrolling --> 
<!-- Khúc này TA thêm -->
<!-- <script>
	function increase(){
		var tmp = document.getElementById('soluongmonhang').innerHTML;
    	document.getElementById('soluongmonhang').innerHTML = parseInt(tmp) + 1;
		return false;
	}
</script> 
-->


</head> 
<body>
<?php

	include_once("View/Header.php");
?>
	
	<!-- //team -->	
	<!--Start Content-->
<!-- index.php?mod=products&act=resultsearch -->


	<?php
		if(isset($_GET['mod'])){
			include_once("Controller/".$_GET['mod']."/".$_GET['act'].".php");
			// echo "Controller/".$_GET['mod']."/".$_GET['act'].".php";
		}
		if(@($_GET['mod']!=="cart"))
			include_once("Controller/Products/New.php");
?>
	<!--End content-->
<hr/>
<!-- team -->
	<!-- //team -->
	<div class="team">
		<div class="container">
			<h3>Nhóm 99</h3>
			<div class="wthree_team_grids">
				<div class="col-md-2 wthree_team_grid">
					<img src="images/anh.jpg" style ="height :150px; width : 150px" alt=" " class="img-responsive" />
					<h4><span>Trâm Anh<span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href= "https://www.facebook.com/profile.php?id=100009513638998"class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-2 wthree_team_grid">
					<img src="images/duy.jpg" style ="height :150px; width : 150px" alt=" " class="img-responsive" />
					<h4><span>Ngọc Duy</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href= "https://https://www.facebook.com/duy.tran.8597"class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-2 wthree_team_grid">
					<img src="images/nhu.jpg" style ="height :150px; width : 150px" alt=" " class="img-responsive" />
					<h4><span>Yến Như</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href= "https://www.facebook.com/ynhup1999"class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-2 wthree_team_grid">
					<img src="images/dat.jpg" alt=" "  style ="height :150px; width : 150px" class="img-responsive" />
					<h4><span>Công Đạt</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href= "https://www.facebook.com/profile.php?id=100009306317866"class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
							
						</ul>
					</div>
				</div>
				
				<div class="col-md-2 wthree_team_grid">
					<img src="images/vy.jpg" alt=" "  style ="height :150px; width : 150px" class="img-responsive" />
					<h4><span>Thùy Vy</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href= "https://www.facebook.com/thuyvy9919"class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-2 wthree_team_grid">
					<img src="images/huong.jpg" style ="height :150px; width : 150px" alt=" " class="img-responsive" />
					<h4><span>Thúy Hường<span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href= "https://www.facebook.com/thuyhuong0210"class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
							
						</ul>
					</div>
				</div>
			
				<div class="clearfix"> </div>
				<p>
					Khoa Công nghệ thông tin - Đại học Sư phạm TP Hồ Chí Minh.
				</p>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- //team -->	
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Liên hệ </h3>
					<p> 99 - CAKE COFFEE</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>280 An Dương Vương <span>Đại học Sư Phạm TP.HCM</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">taotao@shop.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Về chúng tôi</h3>
					<ul class="info"> 
						<li><a href="about.html">Về chúng tôi</a></li>
						<li><a href="mail.html">Liên hệ</a></li>
						<li><a href="codes.html">Hỗ trợ kĩ thuật</a></li>
						<li><a href="faq.html">Câu hỏi thường gặp</a></li>
						<li><a href="products.html">Sản phẩm đặc biệt</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Sản phẩm</h3>
					<ul class="info"> 
						<li><a href="https://localhost/Web_99/index.php?mod=products&act=resultcategory&id=2&name=D%C3%A9p">DIET </a></li>
						<li><a href="https://localhost/Web_99/index.php?mod=products&act=resultcategory&id=1&name=Gi%C3%A0y">BIRTHDAY</a></li>
						<li><a href="https://localhost/Web_99/index.php?mod=products&act=resultcategory&id=3&name=Sandal">CUP CAKE</a></li>
						<li><a href="https://localhost/Web_99/index.php?mod=products&act=resultcategory&id=5&name=Gu%E1%BB%91c">DRINK</a></li>
						<li><a href="products4.html">Khác</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Tin tức</h3>
					<ul class="info"> 
						<li><a href="https://www.facebook.com/C-A-K-E-COFFEE-100542205051848/?modal=admin_todo_tour">Mã giảm giá</a></li>
						<li><a href="products.html">Đăng kí hội viên</a></li>
					</ul>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
	
	<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>Copyright &copy; ©2020 99 - CAKE COFFEE. All rights reserved | Design by</p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</body>
</html>
<?php ob_end_flush();?>


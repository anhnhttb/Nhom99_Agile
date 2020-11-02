<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/banner7.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/banner9.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/banner8.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="main-ver2">
	<div class="fs-ihotslale hsalebotpro">
		<div class="owl-carousel fsihots owl-loaded owl-drag">
			<div class="owl-stage-outer">
				<div class="owl-stage">

<?php
	foreach($rs as $row){
		// $chuoi = <<<EOD
			echo	"<div class=\"owl-item active\" style=\"width: 240px;\">";
			echo	"<div class=\"item center\" style=\"text-align:center\">"	;
			echo		"<p class=\"fs-icimg\">";
			echo			"<img class=\"lazy\" src=\"upload/{$row['ImageUrl']}\" title=\"{$row['ProductName']}\">";
			echo		"</p>";
			echo		"<div class=\"fs-hsif\">";
			echo		"<p><b>{$row['ProductName']}</b></p>";
			echo		"<p class=\"fs-icpri\">Giá: {$row['Price']}đ</p>";
			echo			"<div class=\"button\">";
			echo				"<a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\">";
			echo				"<button type=\"button\" class=\"btn btn-dark\" id>Chi tiết</button>";
			echo				"</a>";
			echo 				"<a href=\"Controller/Cart/Add.php?id={$row['ProductID']}\"  onclick=\"return insertCart({$row['ProductID']})\">";
			echo					"<button type=\"button\" class=\"btn btn-dark\" onclick=\"return increase();\">Mua</button>";
			echo				"</a>";
			echo			"</div>";
			echo		"</div>";
			echo	"</div>";
			echo"</div>";				

						// echo $chuoi;
	}
?>
				</div>
			</div>		
		</div>
	</div>
</div>


<?php
	if($findPage>1){
		echo "<div><center>".Pages::PreNext($_GET['page'],"?",$findPage)."</center></div>";
	}
?>
</body>
</html>


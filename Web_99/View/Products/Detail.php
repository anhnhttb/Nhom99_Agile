<div class="section product-detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">

				<?php
				$chuoi=<<<EOD
				<a class="prettyphoto" data-rel="prettyPhoto[gallery]" href="#">
					<img src="upload/{$res['ImageUrl']}" alt="{$res['ProductName']}" class="fullwidth">
				</a>
			</div>
			<div class="col-sm-4">
				<h1 class="product-title">{$res['ProductName']}</h1>	
				<div class="price mt-1">
					Giá: <ins>{$res['Price']}đ</ins>
				</div>
				<p>{$res['Description']}</p>
				<div class="mb-3"></div>
						<a class="btn btn-rounded btn-dark" href="Controller/Cart/Add.php?id={$res['ProductID']}"  onclick="return insertCart({$res['ProductID']})" ><span>Thêm vào giỏ hàng</span></a>
			
			</div>
			<div class="col-sm-5">
				<h3 class="product-title">Thông tin sản phẩm</h3>
				{$res['Body']}
			</div>
EOD;		
	echo $chuoi;
				?>
		</div>
	</div>
</div>
						

<hr>

<center><h2>Sản phẩm cùng loại</h2></center>
<br/>
<div class="main-ver2">
	<div class="fs-ihotslale hsalebotpro">
		<div class="owl-carousel fsihots owl-loaded owl-drag">
			<div class="owl-stage-outer">
				<div class="owl-stage">

<?php
	foreach($resOther as $row){
		$chuoi = <<<EOD
				<div class="owl-item active" style="width: 240px;">
					<div class="item center" style="text-align:center">	
						<p class="fs-icimg">
							<img class="lazy" src="upload/{$row['ImageUrl']}" title="{$row['ProductName']}">
						</p>
						<div class="fs-hsif">
						<p><b>{$row['ProductName']}</b></p>
						<p class="fs-icpri">Giá: {$row['Price']}đ</p>
							<div class="button">
								<a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
									<button type="button" class="btn btn-info" id>Chi tiết</button>
								</a>
								<a href="Controller/Cart/Add.php?id={$row['ProductID']}"  onclick="return insertCart({$row['ProductID']})">
									<button type="button" class="btn btn-info">Mua</button>
								</a>
							</div>
						</div>
					</div>
				</div>				
EOD;
						echo $chuoi;
	}
?>
				</div>
			</div>		
		</div>
	</div>
</div>
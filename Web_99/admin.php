<?php
	include_once("View/Header.php");
?>
	<!--Start Content-->
		<div id="page" class="box">
	    <div id="page-in" class="box">
	    	<!-- Right column -->
	        <div id="col" class="noprint">
	            <div id="col-in">
	                
	                <!-- Archive -->
	                <ul id="menu">
  						<li><div><h3><span>Danh mục quản lý</span></h3></div>
    						<ul>
      							<li><a href="admin.php?mod=products&act=manage">Quản lý sản phẩm</a></li>
      							<li><a href="admin.php?mod=user&act=manage">Quản lý thành viên</a></li>
      							<li><a href="admin.php?mod=category&act=manage">Quản lý thể loại</a></li>
      							<li><a href="admin.php?mod=manufacturer&act=manage">Quản lý nhà cung cấp</a></li>
      							<li><a href="admin.php?mod=group&act=manage">Quản lý nhóm thành viên</a></li>
      							<li><div>Quản lý đơn hàng</div>
      								<ul>
      									<li><a href="admin.php?mod=order&act=manage">Chi tiết đơn hàng</a></li>
      									<li>Thống kê đơn hàng</li>
									</ul>
      							</li>
    						</ul>
  						</li>
  					</ul>
	                <hr class="noscreen"> 
	                
	            </div> <!-- /col-in -->
	        </div> <!-- /col -->
	        <!-- Content -->
	        <div id="content">
	        <?php
					if(isset($_GET["mod"]))
					{
						include_once("Controller/".$_GET['mod']."/".$_GET['act'].'.php');
					}
					else
					{
						include_once("Controller/Products/Manage.php");
					}
			?>
	        </div> <!-- /content -->

	        

	    </div> <!-- /page-in -->
	    </div> <!-- /page -->

	    <div id="page" class="box">
	    <div id="page-in" class="box">
	    	<!-- Right column -->
	        <div id="col" class="noprint">
	            <div id="col-in">
	                
	                <!-- Archive -->
	                <ul id="menu">
  						<li><div><h3><span>Danh mục quản lý</span></h3></div>
    						<ul>
      							<li><a href="admin.php?mod=products&act=manage">Quản lý sản phẩm</a></li>
      							<li><a href="admin.php?mod=user&act=manage">Quản lý thành viên</a></li>
      							<li><a href="admin.php?mod=category&act=manage">Quản lý thể loại</a></li>
      							<li><a href="admin.php?mod=manufacturer&act=manage">Quản lý nhà cung cấp</a></li>
      							<li><a href="admin.php?mod=group&act=manage">Quản lý nhóm thành viên</a></li>
      							<li><div>Quản lý đơn hàng</div>
      								<ul>
      									<li><a href="admin.php?mod=order&act=manage">Chi tiết đơn hàng</a></li>
      									<li>Thống kê đơn hàng</li>
									</ul>
      							</li>
    						</ul>
  						</li>
  					</ul>
	                <hr class="noscreen"> 
	                
	            </div> <!-- /col-in -->
	        </div> <!-- /col -->
	        <!-- Content -->
	        <div id="content">
	        <?php
					if(isset($_GET["mod"]))
					{
						include_once("Controller/".$_GET['mod']."/".$_GET['act'].'.php');
					}
					else
					{
						include_once("Controller/Products/Manage.php");
					}
			?>
	        </div> <!-- /content -->

	        

	    </div> <!-- /page-in -->
	    </div> <!-- /page -->
	<!--End content-->
<hr/>
	<div class="go-to-top-parent">
    	<a href="#" class="go-to-top">
    		<span>
    			<i class="penci-faicon fa fa-angle-up"></i>
    				<br>Lên đầu trang
    			</span></a>
    </div> 
	<!--Start footer-->
	<?php
	include_once("View/Footer.php")
	?>
    <!--End footer-->
<?php ob_end_flush();?>
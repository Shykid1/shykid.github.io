<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sell anythign: Premium Responsive Template develope by bootstrappage.com (bootstrap 2.3.1 version)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- styles -->
	<link rel="stylesheet/less" type="text/css" href="themes/less/bootstrap.less">
	<script src="themes/js/less/less.js" type="text/javascript"></script>

	<!-- favicon-icons -->
    <link rel="shortcut icon" href="themes/images/favicon.ico">
  </head>
<body>
<header class="header">
<h1 class="seo">Welcome to sell anything! :<em class="blink"> 50% </em> discount is available for more than <span class="blink"> 400 </span> items.</h1>
<div class="container">
<div class="row">
	<div class="offset6 span6 right-align loginArea">
		<a href="#login" role="button" data-toggle="modal"><span class="btn btn-mini"> Login  </span></a> 
		<a href="register.php"><span class="btn btn-mini btn-success"> Register  </span></a> 
		<a href="checkout.php"><span class="btn btn-mini btn-danger"> Cart [2] </span></a> 
	</div>
</div>

<!-- Login Block -->
<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
  <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3>Sell Anythings : Login Block</h3>
  </div>
  <div class="modal-body">
	<form class="form-horizontal loginFrm">
	  <div class="control-group">								
		<input type="text" id="inputEmail" placeholder="Email">
	  </div>
	  <div class="control-group">
		<input type="password" id="inputPassword" placeholder="Password">
	  </div>
	  <div class="control-group">
		<label class="checkbox">
		<input type="checkbox"> Remember me
		</label>
	  </div>
	</form>		
	<button type="submit" class="btn btn-success">Sign in</button>
	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

<div class="navbar">
<div class="navbar-inner">
	<a class="brand" href="index.php"><img src="themes/images/new_logo.png" alt="Bootsshop"></a>
	<div class="nav-collapse">
		<ul id="topMenu" class="nav pull-right">
		 <li class="">
		 <form class="form-inline navbar-search" method="post" action="products.php" style="padding-top:5px;">
			<select class="span3" style="padding:11px 4px; height:auto">
				<option>All</option>
				<option>Clothes </option>
				<option>Women's Wear </option>
				<option>Men's Wear </option>
				<option>Kids Wear </option>
			</select> 
			<input class="span4" type="text" placeholder="eg. T-shirt" style="padding:11px 4px;">
			<button type="submit" class="btn btn-warning btn-large" style="margin-top:0"> GO </button>
		</form>
		</li>
		</ul>
	</div>
	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
  </div>
</div>
</div>
</header>
<!-- ======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<div class="row">
<div id="sideBar" class="span3">

	<h3 class="title"><span>CART [ 2 ] </span></h3>
	<div class="row-fluid cartItem">
		<div class="span4"><a href="products.php"><img src="themes/images/clothes/1.jpg" alt="#"></a></div>
		<div class="span7"><h5> Women's Wear </h5><span>Qty. 1</span><br><span>Price:$12.00</span></div>
		<a class="close span1" data-dismiss="alert" href="#">&times;</a>
	</div>
	<div class="row-fluid cartItem">
		<div class="span4"><a href="products.php"><img src="themes/images/clothes/2.jpg" alt="#"></a></div>
		<div class="span7"><h5> Women's Wear </h5><span>Qty. 1</span><br><span>Price:$8.00</span></div>
		<a class="close span1" data-dismiss="alert" href="#">&times;</a>
	</div>
	
		<a class="btn btn-warning btn-large btn-block" href="checkout.php">Check out [ Total: $20.00 ]</a>

		<h3 class="title"><span>QUICK MENU  </span></h3>
		<div>
		<a class="btn btn-block" href="products.php">Women's Clothing (45)</a>
		<a class="btn btn-block" href="products.php">Women's Shoes (8)</a>											
		<a class="btn btn-block" href="products.php">Women's Hand Bags (5)</a>	
		<a class="btn btn-block" href="products.php">Men's Clothings  (45)</a>												
		<a class="btn btn-block" href="products.php">Men's Shoes  (20)</a>												
		<a class="btn btn-block" href="products.php">Kids Clothing (5)</a>											
		<a class="btn btn-block" href="products.php">Kids Shoes (3)</a>												
		</div>
		<h3 class="title"><span>SPECIAL </span></h3>
		<div class="indexItems">
		<div class=" displayStyle">
		<div class="itemBlock">
			<span class="indexItemsImageMask"></span>
			<span class="itemBlockAction">
				<a class="aniBtn" href="#" ><i class="icon-search"></i></a>
				<a class="aniBtn" data-my-tooltip="tooltip" href="details.php" data-original-title="Details"><i class="icon-link"></i></a>
			</span>
			<a href="#" class="indexProductsImage">
				<img src="themes/images/clothes/special-women-ware.jpg" alt="Women's Clothing" title=" Women's Clothing ">
			</a>
		</div>
		</div>
		</div>
		
		<h3 class="title"><span>New  </span></h3>
		<div id="newCarousel" class="carousel slide">
		<div class="carousel-inner">
				<div class="item">
					<div class="well">
						<a class="displayStyle" href="#"><img src="themes/images/clothes/1.jpg" alt="#"/></a>
						<h5>Clothings</h5>
						<p>
							<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
							<a class="btn" href="details.php">view details</a>
						</p>
						<p><span class="price"><small>$</small>400.00</span></p>
					</div>
				</div>
				<div class="item active">
					<div class="well">
						<a class="displayStyle" href="#"><img src="themes/images/clothes/1.jpg" alt="#"/></a>
						<h5>Clothings</h5>
						<p>
							<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
							<a class="btn" href="details.php">view details</a>
						</p>
						<p><span class="price"><small>$</small>400.00</span></p>
					</div>
				</div>
				<div class="item">
					<div class="well">
						<a class="displayStyle" href="#"><img src="themes/images/clothes/1.jpg" alt="#"/></a>
						<h5>Clothings</h5>
						<p>
							<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
							<a class="btn" href="details.php">view details</a>
						</p>
						<p><span class="price"><small>$</small>400.00</span></p>
					</div>
				</div>
				<div class="item">
					<div class="well">
						<a class="displayStyle" href="#"><img src="themes/images/clothes/1.jpg" alt="#"/></a>
						<h5>Clothings</h5>
						<p>
							<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
							<a class="btn" href="details.php">view details</a>
						</p>
						<p><span class="price"><small>$</small>400.00</span></p>
					</div>
				</div>
				<div class="item">
					<div class="well">
						<a class="displayStyle" href="#"><img src="themes/images/clothes/1.jpg" alt="#"/></a>
						<h5>Clothings</h5>
						<p>
							<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
							<a class="btn" href="details.php">view details</a>
						</p>
						<p><span class="price"><small>$</small>400.00</span></p>
					</div>
				</div>
				<div class="item">
					<div class="well">
						<a class="displayStyle" href="#"><img src="themes/images/clothes/1.jpg" alt="#"/></a>
						<h5>Clothings</h5>
						<p>
							<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
							<a class="btn" href="details.php">view details</a>
						</p>
						<p><span class="price"><small>$</small>400.00</span></p>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#newCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#newCarousel" data-slide="next">›</a>
		</div>

		<h3 class="title"><span>POPULAR </span></h3>
		<ul class="thumbnails">
			  <li class="span3">
				<div class="thumbnail">
					<img src="themes/images/clothes/2.jpg" alt="#">
					<div class="caption">
					<p>
						<a href="details.php">view details</a>
					</p>
				  </div>
				</div>
			  </li>
			  <li class="span3">
				<div class="thumbnail">
					<img src="themes/images/clothes/6.jpg" alt="#">
					<div class="caption">
					<p>
						<a href="details.php">view details</a>
					</p>
				  </div>
				</div>
			  </li>
		</ul>
		<h3 class="title"><span>FEATURED </span></h3>
		<ul class="media-list">
			<li class="media">
				<a class="pull-left" href="#"><img src="themes/images/clothes/2.jpg" alt="Women's Clothing" title=" Women's Clothing " ></a>
				<div class="media-body">
					<h4 class="media-heading"><a href="#">Women's Clothing</a></h4>
					<span>$14.00</span>
				</div>
			</li>
			<li class="media">
				<a class="pull-left" href="#"><img src="themes/images/clothes/3.jpg" alt="Women's Clothing" title=" Women's Clothing "></a>
				<div class="media-body">
					<h4 class="media-heading"><a href="#">Women's Clothing</a></h4>
					<span class="normalprice">$18.00 </span>&nbsp;<span class="specialPrice">$9.00</span>
					<span class="discount"><br>Save:&nbsp;50% off</span>
				</div>
			</li>
		</ul>
		
</div>

<div class="span9">
<div class="products">
<h3 class="title"><span>Women's Clothing</span></h3>
<div class="row">
<div class="span3">
<div class="indexItems">
	<div class="indexItems">
		<div class=" displayStyle">
		<div class="itemBlock">
			<span class="indexItemsImageMask"></span>
			<span class="itemBlockAction">
				<a class="aniBtn" href="#" ><i class="icon-search"></i></a>
				<a class="aniBtn" data-my-tooltip="tooltip" href="details.php" data-original-title="Details"><i class="icon-link"></i></a>
			</span>
			<a href="#" class="indexProductsImage">
				<img src="themes/images/clothes/special-women-ware.jpg" alt="Women's Clothing" title=" Women's Clothing ">
			</a>
		</div>
		</div>
	</div>
</div>
</div>
<div class="span3">
<div class="indexItems">
	<div class="indexItems">
		<div class=" displayStyle">
		<div class="itemBlock">
			<span class="indexItemsImageMask"></span>
			<span class="itemBlockAction">
				<a class="aniBtn" href="#" ><i class="icon-search"></i></a>
				<a class="aniBtn" data-my-tooltip="tooltip" href="details.php" data-original-title="Details"><i class="icon-link"></i></a>
			</span>
			<a href="#" class="indexProductsImage">
				<img src="themes/images/clothes/special-women-ware.jpg" alt="Women's Clothing" title=" Women's Clothing ">
			</a>
		</div>
		</div>
	</div>
</div>
</div>
<div class="span3">
<div class="indexItems">
	<div class="indexItems">
		<div class=" displayStyle">
		<div class="itemBlock">
			<span class="indexItemsImageMask"></span>
			<span class="itemBlockAction">
				<a class="aniBtn" href="#" ><i class="icon-search"></i></a>
				<a class="aniBtn" data-my-tooltip="tooltip" href="details.php" data-original-title="Details"><i class="icon-link"></i></a>
			</span>
			<a href="#" class="indexProductsImage">
				<img src="themes/images/clothes/special-women-ware.jpg" alt="Women's Clothing" title=" Women's Clothing ">
			</a>
		</div>
		</div>
	</div>
</div>
</div>

</div>
<h3 class="title"><span>Most selling Women's Clothing</span></h3>
<ul class="thumbnails">
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/women/bootstrap-women-ware3.jpg" alt="#">
			<div class="caption">
			<h3>Women's Clothing</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/women/bootstrap-women-ware1.jpg" alt="#">
			<div class="caption">
			<h3>Women's Clothing</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/women/bootstrap-women-ware4.jpg" alt="#">
			<div class="caption">
			<h3>Women's Clothing</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/women/bootstrap-women-ware5.jpg" alt="#">
			<div class="caption">
			<h3>Women's Clothing</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/women/bootstrap-women-ware2.jpg" alt="#">
			<div class="caption">
			<h3>Women's Clothing</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/women/bootstrap-women-ware6.jpg" alt="#">
			<div class="caption">
			<h3>Women's Clothing</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  </ul>
	<div class="cntr"><a class="btn" href="#">view more <i class="icon-repeat"></i></a><br><hr class="soften"></div>
	
	<h3 class="title"><span>Kids Wear</span></h3>
	<ul class="thumbnails">
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/kids/bootstrap-kids-ware1.png" alt="#">
			<div class="caption">
			<h3>Kids Wear</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/kids/bootstrap-kids-ware2.png" alt="#">
			<div class="caption">
			<h3>Kids Wear</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/kids/bootstrap-kids-ware3.png" alt="#">
			<div class="caption">
			<h3>Kids Wear</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/kids/bootstrap-kids-ware4.png" alt="#">
			<div class="caption">
			<h3>Kids Wear</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/kids/bootstrap-kids-ware5.png" alt="#">
			<div class="caption">
			<h3>Kids Wear</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/kids/bootstrap-kids-ware6.png" alt="#">
			<div class="caption">
			<h3>Kids Wear</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  </ul>
	
	<div class="cntr"><a class="btn" href="#">view more <i class="icon-repeat"></i></a><br><hr class="soften"></div>
	
	<h3 class="title"><span>Men's Clothing</span></h3>
	<ul class="thumbnails">
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/a3.jpg" alt="#">
			<div class="caption">
			<h3>Men's Clothing</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  <li class="span3">
		<div class="thumbnail">
			<img src="themes/images/clothes/a6.jpg" alt="#">
			<div class="caption">
			<h3>Men's Clothing</h3>
			<p class="detailNprice">
				<small class="oldPrice">&nbsp;</small>$<span>8.00</span>
			</p>
			<p>
				<a class="btn btn-warning" href="#"> Add to <i class="icon-shopping-cart"></i></a> 
				<a class="btn" href="details.php">view details</a>
			</p>
		  </div>
		</div>
	  </li>
	  
</ul>	  
</div>
</div>
</div>

<!-- ======================================================================================================================== -->
<!-- ======================================================================================================================== -->
<section id="featuredProduct">
<h3 class="title"><span>Related Products</span></h3> 
<div id="showCase" class="row">
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma6.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item active left">
			<a href="details.php"><img src="themes/images/clothes/sma5.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item next left">
			<a href="details.php"><img src="themes/images/clothes/sma4.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma3.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma2.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma1.jpg" alt="#">
			View Details</a>
			</div>
	</div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma5.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma4.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item active">
			<a href="details.php"><img src="themes/images/clothes/sma3.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma2.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma1.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma6.jpg" alt="#">
			View Details</a>
			</div>
	</div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma4.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma3.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item active">
			<a href="details.php"><img src="themes/images/clothes/sma2.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma1.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma6.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma5.jpg" alt="#">
			View Details</a>
			</div>
	</div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma3.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma2.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item active left">
			<a href="details.php"><img src="themes/images/clothes/sma1.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item next left">
			<a href="details.php"><img src="themes/images/clothes/sma6.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma5.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma4.jpg" alt="#">
			View Details</a>
			</div>
	</div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma2.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma1.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item active left">
			<a href="details.php"><img src="themes/images/clothes/sma6.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item next left">
			<a href="details.php"><img src="themes/images/clothes/sma5.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma4.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma3.jpg" alt="#">
			View Details</a>
			</div>
	</div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma1.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma6.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma5.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item active left">
			<a href="details.php"><img src="themes/images/clothes/sma4.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item next left">
			<a href="details.php"><img src="themes/images/clothes/sma3.jpg" alt="#">
			View Details</a>
			</div>
			<div class="item">
			<a href="details.php"><img src="themes/images/clothes/sma2.jpg" alt="#">
			View Details</a>
			</div>
	</div>
</div>
</div>
</div>
</section>
</div>
</section>
<!-- Footer
================================================== -->
<footer class="footer">
	<div class="container">
	<h5>Accepted Payment Methods </h5>
	<p><a href="#"><img src="themes/images/payment_methods.png" alt="payment methods"/></a></p>
	<hr class="soften"/>
	<div class="footerMenu">
		<a href="register.php"> REGISTRATION</a> | 
		<a href="about_us.php"> ABOUT US</a> | 
		<a  href="topology.php" >TOPOLOGY</a> | 
		<a href="contact_us.php">CONTACT </a>
		<p class="pull-right"><a href="#">Terms and condition.php</a> &copy; Copyright 2013 Sell Anything. </p>
	</div>
	</div>
</footer>
<span id="toTop" style="display: none;"><span><i class="icon-angle-up"></i></span></span>
    <!--  javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="themes/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/smart.js"></script>
  </body>
</html>
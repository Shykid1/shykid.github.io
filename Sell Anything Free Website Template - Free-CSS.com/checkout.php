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
<h3 class="title"><span>Shopping Cart</span></h3>
<ul class="breadcrumb">
  <li><a href="#">Home</a> <span class="divider">/</span></li>
  <li class="active">Checkout</li>
</ul>

<h3 class="title"><span>Member login</span></h3>
<div class="well">
<div class="row-fluid">
	<form>
		<div class="span4">
			<label>Username *</label>
			<input class="span11" type="text">
		</div>
		<div class="span4">	
			<label>Password *</label>
			<input class="span11" type="password">
		</div>
		<div class="span4">
			<br>
			<button class="btn btn-warning">Login</button> &nbsp; &nbsp; <a href="#">Lost your password?</a>
		</div>
	</form>
</div>
</div>

<div class="row">
		<div class="span12">
		<h3 class="title"><span>Cart item details</span></h3>
		<div class="well">
		<table class="table table-bordered table-striped">
			  <thead>
				  <tr>
					<th>Remove</th>
					<th>Image</th>
					<th>Item Name</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					<th>Total</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td class=""><input type="checkbox" value="" id="optionsCheckbox"></td>
					<td class="cntr"><a href="products.html"><img src="themes/images/clothes/1.jpg" alt="#"></a></td>
					<td>Women's Wear </td>
					<td><input type="text" placeholder="1" class="input-mini"></td>
					<td>$12.00</td>
					<td>$12.00</td>
				  </tr>			  
				  <tr>
					<td class=""><input type="checkbox" value="" id="optionsCheckbox1"></td>
					<td class="cntr"><a href="products.html"><img src="themes/images/clothes/2.jpg" alt="#"></a></td>
					<td>Women's Wear </td>
					<td><input type="text" placeholder="2" class="input-mini"></td>
					<td>$9.00</td>
					<td>$18.00</td>
				  </tr>				 
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><strong>$30.00</strong></td>
				  </tr>		  
				</tbody>
			  </table>
		</div>
		</div>
		<div class="span12"><h3 class="title"><span>Address details</span></h3></div>
		<div class="span6">
		<form>
			<h4>Billing Address</h4>
			<div class="well">
			<label>Country *</label>
			<select><option>Select a country…</option> <option>United Kingdom</option></select>
			<label>First Name *</label>
			<input type="text">
			<label>Last Name *</label>
			<input type="text">
			<label>Company Name</label>
			<input type="text">
			<label>Address *</label>
			<input type="text">

			<label>Town / City *</label>
			<input type="text">
			<label>County </label>
			<input type="text">
			<label>Postcode *</label>
			<input type="text">
			<label>Email Address *</label>
			<input type="email">
			<label>Phone *</label>
			<input type="tel"><br><br>
			<button class="btn btn-success">Save</button>
			</div>
		</form>
		</div>
		
		<div class="span6">
		<form>
			<h4>Shipping Address</h4>
			<div class="well">
			<label>Country *</label>
			<input type="text">

			<label>First Name *</label>
			<input type="text">
			<label>Last Name *</label>
			<input type="text">
			<label>Company Name</label>
			<input type="text">
			<label>Address *</label>
			<input type="text">

			<label>Town / City *</label>
			<input type="text">
			<label>County </label>
			<input type="text">
			<label>Postcode *</label>
			<input type="text">
			<label>Email Address *</label>
			<input type="email">
			<label>Phone *</label>
			<input type="tel">
			<br><br>
			<button class="btn btn-success">Save</button>
			</div>
		</form>	
		</div>
		<div class="span12">
		<h3 class="title"><span>Have a coupon?</span></h3>
		<div class="well">
			<input  class="span10" placeholder="Coupon code" type="text">
			<button class="btn btn-success pull-right">Submit</button> 
			<br class="clr">
		</div>
		</div>
		<div class="span12">
		<h3 class="title"><span>Payment type selection</span></h3>
		<div class="well">	
			
		<label><input type="radio"  name="pm"> <strong>Direct Bank Transfer </strong></label>
		<p><em>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</em></p>

		<label><input type="radio"  name="pm"> <strong>Cheque Payment </strong></label>
		<p><em>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</em></p>
		<label><input type="radio" name="pm"> <strong>PayPal </strong></label>
		<p><em>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account</em></p>
		<br>

		<button class="btn btn-success btn-large pull-right">Place an order</button>
		<a href="#" class="btn btn-large btn-warning">Continue shopping</a>
		</div>
		</div>

		
	
</div>
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

</div><!-- /container -->
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
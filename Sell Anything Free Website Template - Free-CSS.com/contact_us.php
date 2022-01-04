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
<h3 class="title"><span>Contact us</span></h3>
<ul class="breadcrumb">
  <li><a href="#">Home</a> <span class="divider">/</span></li>
  <li class="active">Contact us</li>
</ul>
<div class="row">
	<div class="span6">
		<iframe id="gMap" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14&amp;output=embed"></iframe>
		<h4>1. Contact via Phone and Fax</h4>
		<p>	<strong>Company name</strong><br/>
			Address here, Post code/ Zip code<br/>
			Country<br/>
			Phone: xxxxxxxxx<br/>
			Fax: xxxxxxxxxxx<br/>
			E: <a href="mailto:developer.sba@gmail.com">info@bootstrappage.com</a><br/>
			web: <a href="http://www.bootstrappage.com">www.bootstrappage.com</a>
		</p>
	</div>	

	<div class="span6">
		<h4>2. Contact via email</h4><br/>
		
		<div class="alert alert-error">( * )Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a class="close" data-dismiss="alert" href="#">&times;</a></div>
		<form class="form-horizontal">
			<fieldset>
			  <div class="control-group">
				<label class="control-label" for="input01">Name</label>
				<div class="controls">
				  <input type="text" class="input-xlarge" id="input01">
				 
				</div>
			  </div>
			   <div class="control-group">
				<label class="control-label" for="input11">Email</label>
				<div class="controls">
				  <input type="text" class="input-xlarge" id="input11">
				 
				</div>
			  </div>
			   <div class="control-group">
				<label class="control-label" for="textarea">Messages</label>
				<div class="controls">
				  <textarea class="input-xlarge" id="textarea" rows="6" style="height:200px"></textarea>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="optionsCheckbox">Send me a copy</label>
				<div class="controls">
				  <label class="checkbox">
					<input type="checkbox" id="optionsCheckbox" value="option1">
				  </label>
				</div>
			  </div>
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">send messages</button>
				<button class="btn">Cancel</button>
			  </div>
			</fieldset>
		  </form>
		  <br/>
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
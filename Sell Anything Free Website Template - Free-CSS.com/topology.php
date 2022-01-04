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

<h1>Components used in sell anythings are:</h1>

<section>
	<div class="page-header">
	 <h3 class="title"><span>A. Navigation</span></h3>
	</div>
	<!-- Navbar
    ================================================== -->
<section id="navbar">
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Project name</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-search pull-left" action="#">
            <input type="text" class="search-query span2" placeholder="Search">
          </form>
          <ul class="nav pull-right">
            <li><a href="#">Link</a></li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
</section>
</section>
	
<!-- Heading
================================================== -->
<section>
<div class="page-header">
 <h3 class="title"><span>B.  Headings </span></h3>
</div>
<div class="row-fluid">
<div class="span4">
	<h6>h6. Heading 6</h6>
	<h5>h5. Heading 5</h5>
	<h4>h4. Heading 4</h4>
	<h3>h3. Heading 3</h3>
	<h2>h2. Heading 2</h2>
	<h1>h1. Heading 1</h1>
</div>
<div class="span4">
	<h6><a href="#">h6. Heading 6</a></h6>
	<h5><a href="#">h5. Heading 5</a></h5>
	<h4><a href="#">h4. Heading 4</a></h4>
	<h3><a href="#">h3. Heading 3</a></h3>
	<h2><a href="#">h2. Heading 2</a></h2>
	<h1><a href="#">h1. Heading 1</a></h1>
</div>
<div class="span4">
	<h6><a href="#">h6. Heading 6 <small>Small text</small></a></h6>
	<h5><a href="#">h5. Heading 5 <small>Small text</small> </a></h5>
	<h4><a href="#">h4. Heading 4 <small>Small text</small> </a></h4>
	<h3><a href="#">h3. Heading 3 <small>Small text</small> </a></h3>
	<h2><a href="#">h2. Heading 2 <small>Small text</small></a></h2>
	<h1><a href="#">h1. Heading 1 <small>Small text</small></a></h1>
</div>
</div>
</section>
<!-- Heading
================================================== -->
<section>
<div class="page-header">
 <h3 class="title"><span>C.  Grids </span></h3>
</div>
<div id="grids">
<ul class="nav nav-tabs" id="myTab">
  <li><a href="#one" data-toggle="tab">1 Column page</a></li>
  <li class="active"><a href="#two" data-toggle="tab">2 Column page</a></li>
  <li><a data-toggle="tab" href="#three">3 Comumn page</a></li>
  <li><a href="#four" data-toggle="tab">4 Comumn page</a></li>
</ul>
 
<div class="tab-content">
  <div class="tab-pane" id="one">
  <div class="row-fluid">
	 <div class="span12">
	  <h4>Lorem Ipsum is simply dummy text ... </h4>
	  <p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	  </p>
	  </div>
  </div>
  </div>
  <div class="tab-pane active" id="two">
  <div class="row-fluid">
	  <div class="span6">
	  <h4>Lorem Ipsum is simply dummy text ... </h4>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	  </div>
	  <div class="span6">
	  <h4>Lorem Ipsum is simply dummy text ... </h4>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	  </div>
  </div>
  </div>
  <div class="tab-pane" id="three">
  <div class="row-fluid">
	<div class="span4">
	  <h4>Lorem Ipsum is simply dummy text ... </h4>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	  </div>
	  <div class="span4">
		<h4>Lorem Ipsum is simply dummy text ... </h4>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	  </div>
	  <div class="span4">
		<h4>Lorem Ipsum is simply dummy text ... </h4>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	  </div>
	 </div>
  </div>
  <div class="tab-pane" id="four">
  <div class="row-fluid">
	<div class="span3">
		<h4>Lorem Ipsum is simply dummy text ... </h4>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	 </div>
	  <div class="span3">
		<h4>Lorem Ipsum is simply dummy text ... </h4>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	  </div>
	  <div class="span3">
		<h4>Lorem Ipsum is simply dummy text ... </h4>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	  </div>
	  <div class="span3">
		<h4>Lorem Ipsum is simply dummy text ... </h4>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	  </div>
  
  </div>
</div>
</div>
</div>
</section>

<!-- Button Groups
================================================== -->
<section>
  <div class="page-header">
    <h3 class="title"><span>D. Button <small>button groups and buttons</small></span></h3>
  </div>
  <div class="row-fluid">
  <div class="span6">
	<section id="buttonGroups">
      <h4>Button groups</h4><br>
		<div class="btn-group" style="margin: 9px 0;">
          <button class="btn">Left</button>
          <button class="btn">Middle</button>
          <button class="btn">Right</button>
        </div>
      <h4>Toolbar example</h4>
     
      <div class="btn-toolbar">
        <div class="btn-group">
          <button class="btn">1</button>
          <button class="btn">2</button>
          <button class="btn">3</button>
          <button class="btn">4</button>
        </div>
        <div class="btn-group">
          <button class="btn">5</button>
          <button class="btn">6</button>
          <button class="btn">7</button>
        </div>
        <div class="btn-group">
          <button class="btn">8</button>
        </div>
      </div>
	</section>
      </div>

<!-- Split button dropdowns
================================================== -->
<div class="span6">
<section id="buttonDropdowns">
  <h4>Button dropdowns</h4>
      <div class="btn-toolbar" style="margin-top: 18px;">
        <div class="btn-group">
          <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
		
        <div class="btn-group">
          <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->

        <div class="btn-group">
          <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
		<div class="btn-toolbar" style="margin-top: 18px;">
        <div class="btn-group">
          <button class="btn btn-large dropdown-toggle" data-toggle="dropdown">Large button <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">Small button <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">Mini button <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div>
	  <div class="btn-toolbar" style="margin-top: 18px;">
        <div class="btn-group">
          <button class="btn">Action</button>
          <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn btn-primary">Action</button>
          <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn btn-danger">Danger</button>
          <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
		
        <div class="btn-group">
          <button class="btn btn-warning">Warning</button>
          <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn btn-success">Success</button>
          <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button class="btn btn-info">Info</button>
          <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div>
      </div>
</section>
      </div>
      <div class="12">
	  <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Button</th>
                <th>class=""</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><button type="button" class="btn">Default</button></td>
                <td><code>btn</code></td>
                <td>Standard gray button with gradient</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-primary">Primary</button></td>
                <td><code>btn btn-primary</code></td>
                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-info">Info</button></td>
                <td><code>btn btn-info</code></td>
                <td>Used as an alternative to the default styles</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-success">Success</button></td>
                <td><code>btn btn-success</code></td>
                <td>Indicates a successful or positive action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-warning">Warning</button></td>
                <td><code>btn btn-warning</code></td>
                <td>Indicates caution should be taken with this action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-danger">Danger</button></td>
                <td><code>btn btn-danger</code></td>
                <td>Indicates a dangerous or potentially negative action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                <td><code>btn btn-inverse</code></td>
                <td>Alternate dark gray button, not tied to a semantic action or use</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-link">Link</button></td>
                <td><code>btn btn-link</code></td>
                <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
              </tr>
            </tbody>
          </table>
      </div>
	</div>
</section>
<!-- Using Icon
================================================== -->
<section id="navs">
  <div class="page-header">
    <h3 class="title"><span>E. Using Icon</span></h3>
  </div>
  <div class="row-fluid">
  <div class="span6">
  <div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list">
          <li class="nav-header">List header</li>
          <li class="active"><a href="#"><i class="icon-white icon-home"></i> Home</a></li>
          <li><a href="#"><i class="icon-book"></i> Library</a></li>
          <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
          <li class="nav-header">Another list header</li>
          <li><a href="#"><i class="icon-user"></i> Profile</a></li>
          <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="icon-flag"></i> Help</a></li>
        </ul>
      </div>
      </div>
      <div class="span6">
	  <h4>Stacked tabs</h4><br>
	  <ul class="nav nav-tabs nav-stacked">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 2</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
	 </div>
	 </div>
</section>
<!-- Breadcrumbs
================================================== -->
<section id="breadcrumbs">
  <div class="page-header">
   <h3 class="title"><span>F. Breadcrumbs </span></h3>
  </div>
  <ul class="breadcrumb">
        <li class="active">Home</li>
      </ul>
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li class="active">Library</li>
      </ul>
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Library</a> <span class="divider">/</span></li>
        <li class="active">Data</li>
      </ul>
</section>

<!-- Pagination
================================================== -->
<section id="pagination">
  <div class="page-header">
    <h3 class="title"><span>G. Pagination </span></h3>
  </div>
    <div class="row-fluid">
    <div class="span3">
      <div class="pagination">
        <ul>
          <li class="disabled"><a href="#">«</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
      </div>
      <div class="span3">
      <div class="pagination">
        <ul>
          <li><a href="#">«</a></li>
          <li><a href="#">10</a></li>
          <li class="active"><a href="#">11</a></li>
          <li><a href="#">12</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
      </div>
	   <div class="span3">
      <div class="pagination">
        <ul>
          <li><a href="#">«</a></li>
          <li class="active"><a href="#">10</a></li>
          <li class="disabled"><a href="#">...</a></li>
          <li><a href="#">20</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
      </div>
	   <div class="span3">
      <div class="pagination pagination-centered">
        <ul>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
      </div>
      </div>
      </div>
</section>
<!-- Labels
================================================== -->
<section id="labels">
  <div class="page-header">
    <h3 class="title"><span>H. Labels </span></h3>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Labels</th>
        <th>Markup</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <span class="label">Default</span>
        </td>
        <td>
          <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>
          <span class="label label-success">Success</span>
        </td>
        <td>
          <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>
          <span class="label label-warning">Warning</span>
        </td>
        <td>
          <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>
          <span class="label label-important">Important</span>
        </td>
        <td>
          <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>
          <span class="label label-info">Info</span>
        </td>
        <td>
          <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>
          <span class="label label-inverse">Inverse</span>
        </td>
        <td>
          <code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>
        </td>
      </tr>
    </tbody>
  </table>
</section>

<!-- Badges
================================================== -->
<section id="badges">
  <div class="page-header">
    <h3 class="title"><span>I. Badges </span></h3>
  </div>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Example</th>
            <th>Markup</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              Default
            </td>
            <td>
              <span class="badge">1</span>
            </td>
            <td>
              <code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              Success
            </td>
            <td>
              <span class="badge badge-success">2</span>
            </td>
            <td>
              <code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              Warning
            </td>
            <td>
              <span class="badge badge-warning">4</span>
            </td>
            <td>
              <code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              Important
            </td>
            <td>
              <span class="badge badge-important">6</span>
            </td>
            <td>
              <code>&lt;span class="badge badge-important"&gt;6&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              Info
            </td>
            <td>
              <span class="badge badge-info">8</span>
            </td>
            <td>
              <code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              Inverse
            </td>
            <td>
              <span class="badge badge-inverse">10</span>
            </td>
            <td>
              <code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
            </td>
          </tr>
        </tbody>
      </table>
</section>

<!-- Typographic components
================================================== -->
<section id="typography">
  <div class="page-header">
    <h3 class="title"><span>J. Typographic components </span></h3>
  </div>

      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p><a class="btn btn-primary btn-large">Learn more</a></p>
      </div>
</section>

<!-- Thumbnails
================================================== -->
<section id="thumbnails">
  <div class="page-header">
   <h3 class="title"><span>K. Thumbnails </span></h3>
  </div>

  <div class="row-fluid">
    <div class="span6">
      <ul class="thumbnails">
        <li class="span3">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
          </a>
        </li>
      </ul>
	  <br>
	  <ul class="thumbnails">
        <li class="span4">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/360x268" alt="">
          </a>
        </li>
        <li class="span2">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/160x120" alt="">
          </a>
        </li>
        <li class="span2">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/160x120" alt="">
          </a>
        </li>
        <li class="span2">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/160x120" alt="">
          </a>
        </li>
        <li class="span2">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/160x120" alt="">
          </a>
        </li>
        <li class="span2">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/160x120" alt="">
          </a>
        </li>
      </ul>
    </div>
    <div class="span6">
       <ul class="thumbnails">
        <li class="span6">
          <div class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
            <div class="caption">
              <h5>Thumbnail label</h5>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
            </div>
          </div>
        </li>
        <li class="span6">
          <div class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
            <div class="caption">
              <h5>Thumbnail label</h5>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>

</section>

<!-- Alerts
================================================== -->
<section id="alerts">
  <div class="page-header">
    <h3 class="title"><span>L. Alerts </span></h3>
  </div>

<div class="row-fluid">
    <div class="span4">
      <h4>Error or danger</h4>
      <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>
<pre class="prettyprint linenums">&lt;div class="alert alert-error"&gt;
  ...
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
      <h4>Success</h4>
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
<pre class="prettyprint linenums">&lt;div class="alert alert-success"&gt;
  ...
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
      <h4>Information</h4>
      <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
      </div>
<pre class="prettyprint linenums">&lt;div class="alert alert-info"&gt;
  ...
&lt;/div&gt;
</pre>
    </div>
  </div>

</section>

<!-- Progress bars
================================================== -->
<section id="progress">
  <div class="page-header">
    <h3 class="title"><span>M. Progress bars </span></h3>
  </div>
	<div class="row-fluid">
	<div class="span4">
      <h4>Basic</h4><br>
      <div class="progress">
        <div class="bar" style="width: 60%;"></div>
      </div>
<pre class="prettyprint linenums">&lt;div class="progress"&gt;
	&lt;div class="bar"
	style="width: 60%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
      <h4>Striped (no-IE)</h4><br>
      <div class="progress progress-striped">
        <div class="bar" style="width: 20%;"></div>
      </div>
		<pre class="prettyprint linenums">&lt;div class="progress progress-striped"&gt;
	&lt;div class="bar"
	style="width: 20%;"&gt;&lt;/div&gt;
&lt;/div&gt;
		</pre>
    </div>
    <div class="span4">
      <h4>Animated (no IE)</h4><br>
      <div class="progress progress-striped active">
        <div class="bar" style="width: 45%"></div>
      </div>
<pre class="prettyprint linenums">&lt;div class="progress progress-striped
     active"&gt;
  &lt;div class="bar"
       style="width: 40%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="progress progress-info" style="margin-bottom: 9px;">
        <div class="bar" style="width: 20%"></div>
      </div>
      <div class="progress progress-success" style="margin-bottom: 9px;">
        <div class="bar" style="width: 40%"></div>
      </div>
      <div class="progress progress-warning" style="margin-bottom: 9px;">
        <div class="bar" style="width: 60%"></div>
      </div>
      <div class="progress progress-danger" style="margin-bottom: 9px;">
        <div class="bar" style="width: 80%"></div>
      </div>
    </div>
     <div class="span6">
      <div class="progress progress-info progress-striped" style="margin-bottom: 9px;">
        <div class="bar" style="width: 20%"></div>
      </div>
      <div class="progress progress-success progress-striped" style="margin-bottom: 9px;">
        <div class="bar" style="width: 40%"></div>
      </div>
      <div class="progress progress-warning progress-striped" style="margin-bottom: 9px;">
        <div class="bar" style="width: 60%"></div>
      </div>
      <div class="progress progress-danger progress-striped" style="margin-bottom: 9px;">
        <div class="bar" style="width: 80%"></div>
      </div>
    </div>
    </div>

</section>


<!-- Miscellaneous
================================================== -->
<section id="form">
  <div class="page-header">
    <h3 class="title"><span>N. Form </span></h3>
  </div>
  <div class="row-fluid">
    <div class="span12">
	<form class="bs-docs-example" style="padding-bottom: 15px;">
            <div class="controls">
              <input class="span5" type="text" placeholder=".span5">
            </div>
            <div class="controls controls-row">
              <input class="span4" type="text" placeholder=".span4">
              <input class="span1" type="text" placeholder=".span1">
            </div>
            <div class="controls controls-row">
              <input class="span3" type="text" placeholder=".span3">
              <input class="span2" type="text" placeholder=".span2">
            </div>
            <div class="controls controls-row">
              <input class="span2" type="text" placeholder=".span2">
              <input class="span3" type="text" placeholder=".span3">
            </div>
            <div class="controls controls-row">
              <input class="span1" type="text" placeholder=".span1">
              <input class="span4" type="text" placeholder=".span4">
            </div>
          </form>
	</div>
</div>
  <div class="row-fluid">
    <div class="span6">
		<form class="well form-inline">
		  <input type="text" class="input-small" placeholder="Email">
		  <input type="password" class="input-small" placeholder="Password">
		  <label class="checkbox">
			<input type="checkbox"> Remember me
		  </label>
		  <button type="submit" class="btn">Sign in</button>
		</form>
	</div>
    <div class="span6">
		<form class="well form-search">
		  <input type="text" class="input-medium search-query">
		  <button type="submit" class="btn">Search</button>
		</form>
	</div>
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span6">
		<form class="form-inline">
        <fieldset>
		 <div class="control-group">
			<label class="control-label" for="input14">Text input</label>
			<div class="controls">
			  <input type="text" class="input-small" id="input14">
			</div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input12">Text input</label>
            <div class="controls">
              <input type="text" class="input-medium" id="input12">
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input13">Text input</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="input13">
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input_1">Text input</label>
            <div class="controls">
              <input type="text" class="input-xxlarge" id="input_1">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="select01">Select list</label>
            <div class="controls">
              <select id="select01">
                <option>something</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="fileInput">File input</label>
            <div class="controls">
              <input class="input-file" id="fileInput" type="file">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="textarea">Textarea</label>
            <div class="controls">
              <textarea class="input-xxlarge" id="textarea1" rows="3"></textarea>
            </div>
          </div>		  
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
	</div>
	<div class="span6">
	<form class="form-horizontal">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="input01">Text input</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="input01">
             
            </div>
          </div>
		   <div class="control-group">
            <label class="control-label" for="input11">Text input</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="input11">
             
            </div>
          </div>
		   <div class="control-group">
            <label class="control-label" for="textarea">Textarea</label>
            <div class="controls">
              <textarea class="input-xlarge" id="textarea" rows="3" style="height:65px"></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="optionsCheckbox">Checkbox</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="optionsCheckbox" value="option1">
              </label>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="select11">Select list</label>
            <div class="controls">
              <select class="span9" id="select11">
                <option>something</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="multiSelect">Multicon-select</label>
            <div class="controls">
              <select class="span9" multiple="multiple" id="multiSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
         
		  <div class="control-group">
            <label class="control-label" for="appendedInputButton">Append with button</label>
            <div class="controls">
              <div class="input-append">
                <input class="span10" id="appendedInputButton" size="44" type="text"><button class="btn" type="button">Go!</button>
              </div>
            </div>
          </div>
		  
		  <div class="control-group">
            <label class="control-label">Radio buttons</label>
            <div class="controls">
              <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                Option one is this and that�be sure to include why it's great
              </label>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
		
	</div>
</div>
</section>
<!-- 
================================================== -->
<section id="Table">
  <div class="page-header">
    <h3 class="title"><span>O. Table </span></h3>
  </div>
  <div class="row-fluid">
    <div class="span6">
		<table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
	</div>
	<div class="span6">
		<table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
	</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
		<table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2">1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootstrap</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
		  <tr>
            <td>3</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
		  <tr>
            <td>4</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
		  <tr>
            <td>5</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>6</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
	  <br>
	  <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product</th>
                  <th>Payment Taken</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr class="success">
                  <td>1</td>
                  <td>TB - Monthly</td>
                  <td>01/04/2012</td>
                  <td>Approved</td>
                </tr>
                <tr class="error">
                  <td>2</td>
                  <td>TB - Monthly</td>
                  <td>02/04/2012</td>
                  <td>Declined</td>
                </tr>
                <tr class="warning">
                  <td>3</td>
                  <td>TB - Monthly</td>
                  <td>03/04/2012</td>
                  <td>Pending</td>
                </tr>
                <tr class="info">
                  <td>4</td>
                  <td>TB - Monthly</td>
                  <td>04/04/2012</td>
                  <td>Call in to confirm</td>
                </tr>
              </tbody>
            </table>
		</div>
		<div class="span6">
		<table class="table table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
		  
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
	  <br>
	  <table class="table table-striped table-bordered table-condensed">
        <thead>
          <tr>
            <th></th>
            <th colspan="2">Full name</th>
            <th></th>
          </tr>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
	  <br>
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
		</div>
	</div>
</section>
<!-- 
================================================== -->
<section id="icons">
          <div class="page-header">
            <h3 class="title"><span>P. Icons <small>by <a href="http://glyphicons.com" target="_blank">Glyphicons</a></small></span></h3>
          </div>

          <h2>Icon glyphs</h2>
          <p>140 icons in sprite form, available in dark gray (default) and white, provided by <a href="http://glyphicons.com" target="_blank">Glyphicons</a>.</p>
          <ul class="the-icons clearfix">
            <li><i class="icon-glass"></i> icon-glass</li>
            <li><i class="icon-music"></i> icon-music</li>
            <li><i class="icon-search"></i> icon-search</li>
            <li><i class="icon-envelope"></i> icon-envelope</li>
            <li><i class="icon-heart"></i> icon-heart</li>
            <li><i class="icon-star"></i> icon-star</li>
            <li><i class="icon-star-empty"></i> icon-star-empty</li>
            <li><i class="icon-user"></i> icon-user</li>
            <li><i class="icon-film"></i> icon-film</li>
            <li><i class="icon-th-large"></i> icon-th-large</li>
            <li><i class="icon-th"></i> icon-th</li>
            <li><i class="icon-th-list"></i> icon-th-list</li>
            <li><i class="icon-ok"></i> icon-ok</li>
            <li><i class="icon-remove"></i> icon-remove</li>
            <li><i class="icon-zoom-in"></i> icon-zoom-in</li>
            <li><i class="icon-zoom-out"></i> icon-zoom-out</li>
            <li><i class="icon-off"></i> icon-off</li>
            <li><i class="icon-signal"></i> icon-signal</li>
            <li><i class="icon-cog"></i> icon-cog</li>
            <li><i class="icon-trash"></i> icon-trash</li>
            <li><i class="icon-home"></i> icon-home</li>
            <li><i class="icon-file"></i> icon-file</li>
            <li><i class="icon-time"></i> icon-time</li>
            <li><i class="icon-road"></i> icon-road</li>
            <li><i class="icon-download-alt"></i> icon-download-alt</li>
            <li><i class="icon-download"></i> icon-download</li>
            <li><i class="icon-upload"></i> icon-upload</li>
            <li><i class="icon-inbox"></i> icon-inbox</li>

            <li><i class="icon-play-circle"></i> icon-play-circle</li>
            <li><i class="icon-repeat"></i> icon-repeat</li>
            <li><i class="icon-refresh"></i> icon-refresh</li>
            <li><i class="icon-list-alt"></i> icon-list-alt</li>
            <li><i class="icon-lock"></i> icon-lock</li>
            <li><i class="icon-flag"></i> icon-flag</li>
            <li><i class="icon-headphones"></i> icon-headphones</li>
            <li><i class="icon-volume-off"></i> icon-volume-off</li>
            <li><i class="icon-volume-down"></i> icon-volume-down</li>
            <li><i class="icon-volume-up"></i> icon-volume-up</li>
            <li><i class="icon-qrcode"></i> icon-qrcode</li>
            <li><i class="icon-barcode"></i> icon-barcode</li>
            <li><i class="icon-tag"></i> icon-tag</li>
            <li><i class="icon-tags"></i> icon-tags</li>
            <li><i class="icon-book"></i> icon-book</li>
            <li><i class="icon-bookmark"></i> icon-bookmark</li>
            <li><i class="icon-print"></i> icon-print</li>
            <li><i class="icon-camera"></i> icon-camera</li>
            <li><i class="icon-font"></i> icon-font</li>
            <li><i class="icon-bold"></i> icon-bold</li>
            <li><i class="icon-italic"></i> icon-italic</li>
            <li><i class="icon-text-height"></i> icon-text-height</li>
            <li><i class="icon-text-width"></i> icon-text-width</li>
            <li><i class="icon-align-left"></i> icon-align-left</li>
            <li><i class="icon-align-center"></i> icon-align-center</li>
            <li><i class="icon-align-right"></i> icon-align-right</li>
            <li><i class="icon-align-justify"></i> icon-align-justify</li>
            <li><i class="icon-list"></i> icon-list</li>

            <li><i class="icon-indent-left"></i> icon-indent-left</li>
            <li><i class="icon-indent-right"></i> icon-indent-right</li>
            <li><i class="icon-facetime-video"></i> icon-facetime-video</li>
            <li><i class="icon-picture"></i> icon-picture</li>
            <li><i class="icon-pencil"></i> icon-pencil</li>
            <li><i class="icon-map-marker"></i> icon-map-marker</li>
            <li><i class="icon-adjust"></i> icon-adjust</li>
            <li><i class="icon-tint"></i> icon-tint</li>
            <li><i class="icon-edit"></i> icon-edit</li>
            <li><i class="icon-share"></i> icon-share</li>
            <li><i class="icon-check"></i> icon-check</li>
            <li><i class="icon-move"></i> icon-move</li>
            <li><i class="icon-step-backward"></i> icon-step-backward</li>
            <li><i class="icon-fast-backward"></i> icon-fast-backward</li>
            <li><i class="icon-backward"></i> icon-backward</li>
            <li><i class="icon-play"></i> icon-play</li>
            <li><i class="icon-pause"></i> icon-pause</li>
            <li><i class="icon-stop"></i> icon-stop</li>
            <li><i class="icon-forward"></i> icon-forward</li>
            <li><i class="icon-fast-forward"></i> icon-fast-forward</li>
            <li><i class="icon-step-forward"></i> icon-step-forward</li>
            <li><i class="icon-eject"></i> icon-eject</li>
            <li><i class="icon-chevron-left"></i> icon-chevron-left</li>
            <li><i class="icon-chevron-right"></i> icon-chevron-right</li>
            <li><i class="icon-plus-sign"></i> icon-plus-sign</li>
            <li><i class="icon-minus-sign"></i> icon-minus-sign</li>
            <li><i class="icon-remove-sign"></i> icon-remove-sign</li>
            <li><i class="icon-ok-sign"></i> icon-ok-sign</li>

            <li><i class="icon-question-sign"></i> icon-question-sign</li>
            <li><i class="icon-info-sign"></i> icon-info-sign</li>
            <li><i class="icon-screenshot"></i> icon-screenshot</li>
            <li><i class="icon-remove-circle"></i> icon-remove-circle</li>
            <li><i class="icon-ok-circle"></i> icon-ok-circle</li>
            <li><i class="icon-ban-circle"></i> icon-ban-circle</li>
            <li><i class="icon-arrow-left"></i> icon-arrow-left</li>
            <li><i class="icon-arrow-right"></i> icon-arrow-right</li>
            <li><i class="icon-arrow-up"></i> icon-arrow-up</li>
            <li><i class="icon-arrow-down"></i> icon-arrow-down</li>
            <li><i class="icon-share-alt"></i> icon-share-alt</li>
            <li><i class="icon-resize-full"></i> icon-resize-full</li>
            <li><i class="icon-resize-small"></i> icon-resize-small</li>
            <li><i class="icon-plus"></i> icon-plus</li>
            <li><i class="icon-minus"></i> icon-minus</li>
            <li><i class="icon-asterisk"></i> icon-asterisk</li>
            <li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
            <li><i class="icon-gift"></i> icon-gift</li>
            <li><i class="icon-leaf"></i> icon-leaf</li>
            <li><i class="icon-fire"></i> icon-fire</li>
            <li><i class="icon-eye-open"></i> icon-eye-open</li>
            <li><i class="icon-eye-close"></i> icon-eye-close</li>
            <li><i class="icon-warning-sign"></i> icon-warning-sign</li>
            <li><i class="icon-plane"></i> icon-plane</li>
            <li><i class="icon-calendar"></i> icon-calendar</li>
            <li><i class="icon-random"></i> icon-random</li>
            <li><i class="icon-comment"></i> icon-comment</li>
            <li><i class="icon-magnet"></i> icon-magnet</li>

            <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
            <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
            <li><i class="icon-retweet"></i> icon-retweet</li>
            <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
            <li><i class="icon-folder-close"></i> icon-folder-close</li>
            <li><i class="icon-folder-open"></i> icon-folder-open</li>
            <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
            <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
            <li><i class="icon-hdd"></i> icon-hdd</li>
            <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
            <li><i class="icon-bell"></i> icon-bell</li>
            <li><i class="icon-certificate"></i> icon-certificate</li>
            <li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
            <li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
            <li><i class="icon-hand-right"></i> icon-hand-right</li>
            <li><i class="icon-hand-left"></i> icon-hand-left</li>
            <li><i class="icon-hand-up"></i> icon-hand-up</li>
            <li><i class="icon-hand-down"></i> icon-hand-down</li>
            <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
            <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
            <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
            <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
            <li><i class="icon-globe"></i> icon-globe</li>
            <li><i class="icon-wrench"></i> icon-wrench</li>
            <li><i class="icon-tasks"></i> icon-tasks</li>
            <li><i class="icon-filter"></i> icon-filter</li>
            <li><i class="icon-briefcase"></i> icon-briefcase</li>
            <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
          </ul>

          <h3>Glyphicons attribution</h3>
          <p><a href="http://glyphicons.com/">Glyphicons</a> Halflings are normally not available for free, but an arrangement between Bootstrap and the Glyphicons creators have made this possible at no cost to you as developers. As a thank you, we ask you to include an optional link back to <a href="http://glyphicons.com/">Glyphicons</a> whenever practical.</p>


          <hr class="bs-docs-separator">


          <h2>How to use</h2>
          <p>All icons require an <code>&lt;i&gt;</code> tag with a unique class, prefixed with <code>icon-</code>. To use, place the following code just about anywhere:</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-search"</span><span class="tag">&gt;&lt;/i&gt;</span></li></ol></pre>
          <p>There are also styles available for inverted (white) icons, made ready with one extra class. We will specifically enforce this class on hover and active states for nav and dropdown links.</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-search icon-white"</span><span class="tag">&gt;&lt;/i&gt;</span></li></ol></pre>
          <p>
            <span class="label label-info">Heads up!</span>
            When using beside strings of text, as in buttons or nav links, be sure to leave a space after the <code>&lt;i&gt;</code> tag for proper spacing.
          </p>


          <hr class="bs-docs-separator">


          <h2>Icon examples</h2>
          <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>

          <h4>Buttons</h4>

          <h5>Button group in a button toolbar</h5>
          <div class="bs-docs-example">
            <div class="btn-toolbar">
              <div class="btn-group">
                <a class="btn" href="#"><i class="icon-align-left"></i></a>
                <a class="btn" href="#"><i class="icon-align-center"></i></a>
                <a class="btn" href="#"><i class="icon-align-right"></i></a>
                <a class="btn" href="#"><i class="icon-align-justify"></i></a>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-group"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-align-left"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-align-center"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-align-right"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;</span></li><li class="L5"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-align-justify"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;</span></li><li class="L6"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L7"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

          <h5>Dropdown in a button group</h5>
          <div class="bs-docs-example">
            <div class="btn-group">
              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="i"></i> Make admin</a></li>
              </ul>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-group"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-primary"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-user icon-white"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> User</span><span class="tag">&lt;/a&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-primary dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;&lt;/a&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-pencil"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Edit</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-trash"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Delete</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-ban-circle"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Ban</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L7"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span></li><li class="L8"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"i"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Make admin</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L9"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L0"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

          <h5>Button sizes</h5>
          <div class="bs-docs-example">
            <a class="btn btn-large" href="#"><i class="icon-star"></i> Star</a>
            <a class="btn btn-small" href="#"><i class="icon-star"></i> Star</a>
            <a class="btn btn-mini" href="#"><i class="icon-star"></i> Star</a>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-large"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-star"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Star</span><span class="tag">&lt;/a&gt;</span></li><li class="L1"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-small"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-star"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Star</span><span class="tag">&lt;/a&gt;</span></li><li class="L2"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-mini"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-star"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Star</span><span class="tag">&lt;/a&gt;</span></li></ol></pre>

          <h4>Navigation</h4>
          <div class="bs-docs-example">
            <div class="well" style="padding: 8px 0; margin-bottom: 0;">
              <ul class="nav nav-list">
                <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
                <li><a href="#"><i class="icon-book"></i> Library</a></li>
                <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
                <li><a href="#"><i class="i"></i> Misc</a></li>
              </ul>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-list"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-home icon-white"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Home</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-book"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Library</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-pencil"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Applications</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"i"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Misc</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>

          <h4>Form fields</h4>
          <form class="bs-docs-example form-horizontal">
            <div class="control-group">
              <label class="control-label" for="inputIcon">Email address</label>
              <div class="controls">
                <div class="input-prepend">
                  <span class="add-on"><i class="icon-envelope"></i></span><input class="span2" id="inputIcon" type="text">
                </div>
              </div>
            </div>
          </form>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-group"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"inputIcon"</span><span class="tag">&gt;</span><span class="pln">Email address</span><span class="tag">&lt;/label&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"controls"</span><span class="tag">&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"input-prepend"</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln">      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"add-on"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-envelope"</span><span class="tag">&gt;&lt;/i&gt;&lt;/span&gt;</span></li><li class="L5"><span class="pln">      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span2"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"inputIcon"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="tag">&gt;</span></li><li class="L6"><span class="pln">    </span><span class="tag">&lt;/div&gt;</span></li><li class="L7"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L8"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

        </section>

<!-- 
================================================== -->	
<section id="gridSystem">
  <div class="page-header">
	<h3 class="title"><span>Q. Default grid system</span></h3>
  </div>		
<div class="span12">
            <div class="row show-grid">
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1" data-original-title="" title="">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
            </div>
            <div class="row show-grid">
              <div class="span2">2</div>
              <div class="span3">3</div>
              <div class="span4">4</div>
            </div>
            <div class="row show-grid">
              <div class="span4">4</div>
              <div class="span5">5</div>
            </div>
            <div class="row show-grid">
              <div class="span9" data-original-title="" title="">9</div>
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
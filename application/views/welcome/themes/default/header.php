<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Online Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

	<!-- Less styles  
	<link rel="stylesheet/less" type="text/css" href="<?=base_url()?>assets/frontend/less/bootsshop.less">
	<script src="<?=base_url()?>assets/frontend/less.js" type="text/javascript"></script>
	 -->
	 
    <!-- Le styles  -->
    <link href="<?=base_url()?>assets/frontend/assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/frontend/assets/css/bootstrap-responsive.css" rel="stylesheet"/>
	<link href="<?=base_url()?>assets/frontend/assets/css/docs.css" rel="stylesheet"/>
	 
    <link href="<?=base_url()?>assets/frontend/style.css" rel="stylesheet"/>
	<link href="<?=base_url()?>assets/frontend/assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>

	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/frontend/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/frontend/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/frontend/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/frontend/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/frontend/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body>
  <!-- Navbar
    ================================================== -->
<div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <div class="container">
					<a id="logoM" href="<?=base_url()?>"><img src="<?=base_url()?>assets/frontend/assets/img/logo.png" alt="Bootsshop"/></a>
                  <a data-target="#sidebar" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <div class="nav-collapse">
                    <ul class="nav">
					  <li class="<?=($current_page == 'home') ? 'active' : ''?>"><a href="<?=base_url()?>">Home	</a></li>
					  <li class="<?=($current_page == 'about-us') ? 'active' : ''?>"><a href="<?=base_url()?>about-us">About Us</a></li>
                      <li class="<?=($current_page == 'products') ? 'active' : ''?>"><a href="<?=base_url()?>products">Products</a></li>
					  <li class="<?=($current_page == 'delivery') ? 'active' : ''?>"><a href="<?=base_url()?>delivery">Delivery</a></li>
					  <li class="<?=($current_page == 'contact-us') ? 'active' : ''?>"><a href="<?=base_url()?>contact-us">Contact Us</a></li>
					</ul>
                    <form action="#" class="navbar-search pull-left">
                     <input id="srchFld" type="text" placeholder="I'm looking for ..." class="search-query span5"/>
                    </form>
                    <ul class="nav pull-right">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Login <b class="caret"></b></a>
						<div class="dropdown-menu">
						<form class="form-horizontal loginFrm">
						  <div class="control-group">								
							<input type="text" class="span2" id="inputEmail" placeholder="Email">
						  </div>
						  <div class="control-group">
							<input type="password" class="span2" id="inputPassword" placeholder="Password">
						  </div>
						  <div class="control-group">
							<label class="checkbox">
							<input type="checkbox"> Remember me
							</label>
							<button type="submit" class="btn pull-right">Sign in</button>
						  </div>
						</form>					
						</div>
					</li>
					</ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
<!-- ======================================================================================================================== -->	
<div id="mainBody" class="container">
<header id="header">
<div class="row">
<div class="span12">
	<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/frontend/assets/img/logo.png" alt="Bootsshop"/></a>
<div class="pull-right"> <br/>
	<a href="product_summary.html"> <span class="btn btn-mini btn-warning"> <i class="icon-shopping-cart icon-white"></i> [ 3 ] </span> </a>
	<a href="product_summary.html"><span class="btn btn-mini active">$155.00</span></a>
	<span class="btn btn-mini">&pound;</span>
	<span class="btn btn-mini">&euro;</span> 
</div>
</div>
</div>
<div class="clr"></div>
</header>
<!-- ==================================================Header End====================================================================== -->
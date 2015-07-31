<div class="row">
<div id="sidebar" class="span3">
	<ul class="nav nav-list bs-docs-sidenav" style="display: block;">											
		<li class="subMenu"><a> ELECTRONICS [230]</a>
			<ul>
			<li><a class="active" href="products.html">Cameras (100)</a></li>
			<li><a href="products.html">Computers, Tablets & laptop (30)</a></li>
			<li><a href="products.html">Mobile Phone (80)</a></li>
			<li><a href="products.html">Sound & Vision (15)</a></li>
			</ul>
		</li>
		<li class="subMenu"><a> CLOTHES [840] </a>
		<ul>
			<li><a href="products.html">Women's Clothing (45)</a></li>
			<li><a href="products.html">Women's Shoes (8)</a></li>												
			<li><a href="products.html">Women's Hand Bags (5)</a></li>	
			<li><a href="products.html">Men's Clothings  (45)</a></li>
			<li><a href="products.html">Men's Shoes (6)</a></li>												
			<li><a href="products.html">Kids Clothing (5)</a></li>												
			<li><a href="products.html">Kids Shoes (3)</a></li>												
		</ul>
		</li>
		<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
			<ul>
			<li><a href="products.html">Angoves  (35)</a></li>
			<li><a href="products.html">Bouchard Aine & Fils (8)</a></li>												
			<li><a href="products.html">French Rabbit (5)</a></li>	
			<li><a href="products.html">Louis Bernard  (45)</a></li>
			<li><a href="products.html">BIB Wine (Bag in Box) (8)</a></li>												
			<li><a href="products.html">Other Liquors & Wine (5)</a></li>												
			<li><a href="products.html">Garden (3)</a></li>												
			<li><a href="products.html">Khao Shong (11)</a></li>												
		</ul>
		</li>
		<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
		<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
		<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
		<li style="border:0"> &nbsp;</li>						
		<li> <a href="product_summary.html"><strong>3 Items in your cart  <span class="badge badge-warning pull-right" style="line-height:18px;">$155.00</span></strong></a></li>
		<li style="border:0"> &nbsp;</li>	
		<li>
		  <div class="thumbnail">
			<img src="assets/products/1.jpg" alt="">
			<div class="caption">
			  <h5>Product name</h5>
			  <p> 
				Lorem Ipsum is simply dummy text. 
			  </p>
			  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
			</div>
		  </div>
		</li>
		<li style="border:0"> &nbsp;</li>		
		<li class="last">
		  <div class="thumbnail">
			<img src="assets/products/2.jpg" alt="">
			<div class="caption">
			  <h5>Product name</h5>
			  <p> 
				Lorem Ipsum is simply dummy text. 
			  </p>
			  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
			</div>
		  </div>
		</li> 
	  </ul>
</div>

	<div class="span9">
    <ul class="breadcrumb">
        <li><a href="<?=  base_url()?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>CREATE YOUR ACCOUNT</h5><br/>
			Enter your e-mail address to create an account.<br/><br/><br/>
            <form action="<?=  base_url()?>user/register" method="POST">
			  <div class="control-group">
				<label class="control-label" for="inputEmail">E-mail address</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail" placeholder="Email">
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" class="btn block">Create Your Account</button>
			  </div>
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form action="<?=  base_url()?>user/login" method="POST">
			  <div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				  <input type="password" class="span3"  id="inputPassword" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Sign in</button> <a href="<?=  base_url()?>user/reset-password">Forget password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>	
	
</div>
</div>
<div class="row">
    <div id="sidebar" class="span3">
        <ul class="nav nav-list bs-docs-sidenav" style="display: block;">											
            <?php if (count($product_categories)): ?>
                <?php foreach ($product_categories as $key => $list): ?>
                    <li class="subMenu"><a> <?= $list['category_description'] ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>

    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="<?= base_url() ?>">Home</a> <span class="divider">/</span></li>
            <li><a href="<?= base_url() ?>products">Products</a> <span class="divider">/</span></li>
            <li class="active">product Details</li>
        </ul>	
        <div class="row">	  
            <div id="gallery" class="span3">
                <style>
                    #jquery-overlay {position: absolute;top: 0;left: 0;z-index: 90;width: 100%;height: 500px;}
                    #jquery-lightbox {position: absolute;top: 0;left: 0;width: 100%;z-index: 100;text-align: center;line-height: 0;}
                    #jquery-lightbox a img { border: none; }#lightbox-container-image-box {position: relative;background-color: #fff;width: 250px;height: 250px;margin: 0 auto;}
                    #lightbox-container-image { padding: 10px; }#lightbox-loading {position: absolute;top: 40%;left: 0%;height: 25%;width: 100%;text-align: center;line-height: 0;}
                    #lightbox-nav {	position: absolute;top: 0;left: 0;height: 100%;width: 100%;z-index: 10;}#lightbox-container-image-box > #lightbox-nav { left: 0; }#lightbox-nav a { outline: none;}
                    #lightbox-nav-btnPrev, #lightbox-nav-btnNext {width: 49%;height: 100%;zoom: 1;display: block;}
                    #lightbox-nav-btnPrev { left: 0; float: left;}#lightbox-nav-btnNext { right: 0; float: right;}
                    #lightbox-container-image-data-box {font: 10px Verdana, Helvetica, sans-serif;background-color: #fff;margin: 0 auto;line-height: 1.4em;overflow: auto;width: 100%;padding: 0 10px 0;}
                    #lightbox-container-image-data {	padding: 0 10px; 	color: #666; }
                    #lightbox-container-image-data #lightbox-image-details {width: 70%; float: left; text-align: left; }	
                    #lightbox-image-details-caption { font-weight: bold; }#lightbox-image-details-currentNumber {display: block; clear: left; padding-bottom: 1.0em;}
                    #lightbox-secNav-btnClose {width: 66px; float: right;padding-bottom: 0.7em;	}
                </style>
                <a href="<?= base_url() . $featured_image['image_path'] ?>" title="<h4><?= $product['product_name'] ?> </h4>">
                    <img src="<?= base_url() . $featured_image['image_path'] ?>" width="100%" alt="<?= $product['product_name'] ?> "/>
                </a>
                <div id="myCarousel" class="moreOptopm carousel slide">
                    <div class="carousel-inner">
                        <?php if (count($product_images)): ?>
                            <div class="item active">
                                <?php foreach ($product_images as $key => $list): ?>

                                    <a href="<?= base_url() . $list['image_path'] ?>"> <img width="29%" src="<?= base_url() . $list['image_path'] ?>" alt=""/></a>

                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!--  
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
                    -->
                </div>

                <div class="btn-toolbar">
                    <div class="btn-group">
                        <span class="btn"><i class="icon-envelope"></i></span>
                        <span class="btn" ><i class="icon-print"></i></span>
                        <span class="btn" ><i class="icon-zoom-in"></i></span>
                        <span class="btn" ><i class="icon-star"></i></span>
                        <span class="btn" ><i class=" icon-thumbs-up"></i></span>
                        <span class="btn" ><i class="icon-thumbs-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="span6">
                <h3><?= $product['product_name'] ?>  </h3>
                <small><?= $product['tag_line'] ?></small>
                <hr class="soft"/>
                <form class="form-horizontal qtyFrm">
                    <div class="control-group">
                        <label class="control-label"><span>$<?= $product['product_price'] ?></span></label>
                        <div class="controls">
                            <input type="number" class="span1" placeholder="Qty."/>
                            <button type="submit" class="btn btn-large pull-right"><i class=" icon-shopping-cart"></i> Add to cart</button>
                        </div>
                    </div>
                </form>

                <hr class="soft"/>
                <h4>100 items in stock</h4>
                <form class="form-horizontal qtyFrm pull-right">
                    <div class="control-group">
                        <label class="control-label"><span>Color</span></label>
                        <div class="controls">
                            <select class="span2">
                                <option>Black</option>
                                <option>Red</option>
                                <option>Blue</option>
                                <option>Brown</option>
                            </select>
                        </div>
                    </div>
                    <!--  <div class="control-group">
                        <label class="control-label"><span>Materials</span></label>
                        <div class="controls">
                          <select class="span2">
                              <option>Slik</option>
                              <option>Cotton</option>
                              <option>Mix</option>
                              <option>Ruby</option>
                            </select>
                        </div>
                      </div> -->
                </form>
                <hr class="soft clr"/>
                <p>
                    <?= $product['features_description'] ?>

                </p>
                <a class="btn btn-small pull-right" href="#detail">More Details</a>
                <br class="clr"/>
                <a name="detail"></a>
                <hr class="soft"/>
            </div>

            <div class="span9">
                <ul id="productDetail" class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
                    <li><a href="#profile" data-toggle="tab">Related Products</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <h4>Product Information</h4>
                        <table class="table table-bordered" cellspacing="0">
                            <tbody>
                                <tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
                                <tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2"><?= $product['brand_name'] ?></td></tr>
                                <tr class="techSpecRow"><td class="techSpecTD1">Model:</td><td class="techSpecTD2"><?= $product['product_model'] ?></td></tr>
                            </tbody>
                        </table>

                        <h5>Features</h5>
                        <p>
                            <?= $product['features_description'] ?>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div id="myTab" class="pull-right">
                            <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
                            <a href="#blockView" data-toggle="tab"><span class="btn btn-large active"><i class="icon-th-large icon-white"></i></span></a>
                        </div>
                        <br class="clr"/>
                        <hr class="soft"/>
                        <div class="tab-content">
                            <div class="tab-pane" id="listView">
                                <div class="row">	  
                                    <div id="productView" class="span2">
                                        <img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>				
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large"><i class=" icon-shopping-cart"></i> Add to cart</a>
                                                <a href="product_details.html" class="btn btn-large">VIEW</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                                <div class="row">	  
                                    <div id="productView" class="span2">
                                        <img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>				
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large"><i class=" icon-shopping-cart"></i> Add to cart</a>
                                                <a href="product_details.html" class="btn btn-large">VIEW</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                                <div class="row">	  
                                    <div id="productView" class="span2">
                                        <img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>				
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large"><i class=" icon-shopping-cart"></i> Add to cart</a>
                                                <a href="product_details.html" class="btn btn-large">VIEW</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                                <div class="row">	  
                                    <div id="productView" class="span2">
                                        <img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>				
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large"><i class=" icon-shopping-cart"></i> Add to cart</a>
                                                <a href="product_details.html" class="btn btn-large">VIEW</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <hr class="soft"/>
                                <div class="row">	  
                                    <div id="productView" class="span2">
                                        <img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>				
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large"><i class=" icon-shopping-cart"></i> Add to cart</a>
                                                <a href="product_details.html" class="btn btn-large">VIEW</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                                <div class="row">	  
                                    <div id="productView" class="span2">
                                        <img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>				
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large"><i class=" icon-shopping-cart"></i> Add to cart</a>
                                                <a href="product_details.html" class="btn btn-large">VIEW</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                            </div>
                            <div class="tab-pane active" id="blockView">
                                <ul class="thumbnails">
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p> 
                                                    Lorem Ipsum is simply dummy text. 
                                                </p>
                                                <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p> 
                                                    Lorem Ipsum is simply dummy text. 
                                                </p>
                                                <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p> 
                                                    Lorem Ipsum is simply dummy text. 
                                                </p>
                                                <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p> 
                                                    Lorem Ipsum is simply dummy text. 
                                                </p>
                                                <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p> 
                                                    Lorem Ipsum is simply dummy text. 
                                                </p>
                                                <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="<?= base_url() ?>assets/frontend/assets/products/4.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p> 
                                                    Lorem Ipsum is simply dummy text. 
                                                </p>
                                                <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <hr class="soft"/>
                            </div>
                        </div>
                        <br class="clr">
                    </div>
                </div>
            </div>

        </div>
    </div>
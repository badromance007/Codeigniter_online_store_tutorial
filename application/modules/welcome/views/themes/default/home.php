
<div id="myCarousel" class="carousel slide homCar">
    <div class="carousel-inner">
        <div class="item active">
            <img style="width:100%" src="<?= base_url() ?>assets/frontend/assets/carousel/1.jpg" alt=""/>
            <div class="carousel-caption">
                <h4>Second Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
        </div>
        <div class="item">
            <img style="width:100%" src="<?= base_url() ?>assets/frontend/assets/carousel/2.jpg" alt=""/>
            <div class="carousel-caption">
                <h4>Second Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
        </div>
        <div class="item">
            <img src="<?= base_url() ?>assets/frontend/assets/carousel/3.jpg" alt=""/>
            <div class="carousel-caption">
                <h4>Second Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>

        </div>
        <div class="item">
            <img src="<?= base_url() ?>assets/frontend/assets/carousel/4.jpg" alt=""/>
            <div class="carousel-caption">
                <h4>Second Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>

        </div>
        <div class="item">
            <img src="<?= base_url() ?>assets/frontend/assets/carousel/5.jpg" alt=""/>
            <div class="carousel-caption">
                <h4>Second Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
        </div>
    </div>
    <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a> -->
    <a href="<?=  base_url()?>" id="spcialBtn" class="btn btn-large pull-right btn-success" >Special Offer</a> 
</div>

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
        <div>
            <h3>Products listing</h3>
            <div class="row-fluid">
                <div id="myCarousel1" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <?php if (count($products)): ?>
                                    <?php foreach ($products as $key => $list): ?>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="#" class="tag" src="<?= base_url() ?>assets/frontend/assets/products/new.png"></a>
                                                <a  href="<?= base_url() ?>products/details/<?=$list['product_id']?>"><img src="<?= base_url().$list['featured_image']?>" alt=""/></a>
                                                <div class="caption">
                                                    <h5><?=$list['product_name']?></h5>
                                                    <p> 
                                                        <?=$list['tag_line']?> 
                                                    </p>
                                                    <h4><a class="btn" href="<?=base_url()?>products/details/<?=$list['product_id']?>">VIEW</a> <span class="pull-right">$<?=$list['product_price']?></span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>


                    </div>
                    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#myCarousel1" data-slide="next">&rsaquo;</a>
                </div>		  
            </div>	
        </div>
    </div>
</div>
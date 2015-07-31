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

    <div class="span9" id="mainCol">
        <ul class="breadcrumb">
            <li><a href="<?= base_url() ?>">Home</a> <span class="divider">/</span></li>
            <li class="active"><?= $content['meta_title'] ?></li>
        </ul>
        <h3> <?= $content['meta_title'] ?></h3>	
        <hr class="soft"/>
        <?= $content['content'] ?>
    </div>
</div>
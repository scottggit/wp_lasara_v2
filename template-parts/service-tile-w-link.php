<?php global $services;?>
<div class="service-tile-container" style="--grid-column-count: 6;">
    <?php foreach($services as $link => $title):?>
        <div class="service-tile p-2 p-lg-4">
            <a href="<?php echo get_site_url() ?><?php echo '/services/'.$link;?>">
                <span class="service-img me-1 me-md-3 service-img-svg">
                    <img src="<?php bloginfo('template_directory') ?>/img/service/icon-check.svg" alt="Service Icon" />
                </span>
                <span class="h5 font-bold service-title"><?php echo $title;?></span>
            </a>
        </div>
    <?php endforeach;?>
</div>
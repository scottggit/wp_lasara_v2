<section class="banner-n hero-section single-banner banner-backdrop d-flex align-items-center ">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);  ?>" class="img-fluid bg_img">
   
        <div class="container py-lg-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 order-lg-2 mb-5 mb-lg-0">
                    <div class="image-container">
                    <?php
                    $hero_title = get_field('hero_section_title');
                    $hero_subtitle = get_field('hero_section_subtitle');
                    $hero_logo = get_field('hero_section_logo');
                    ?>
                    <?php if ($hero_subtitle != '') : ?>
                        <span class="h3 text-white d-block mb-4 header-inner-subtitle">
                            <?= $hero_subtitle ?>
                        </span>
                    <?php endif; ?>
                    <?php if ($hero_title == '' && $hero_logo == '') : ?>
                        <h1 class="font-dashiell-bright display-2 text-white  font-normal mb-0 text-center">
                            <?php the_title(); ?>
                        </h1>
                    <?php elseif ($hero_logo != '') : ?>
                        <img src="<?= $hero_logo['url'] ?>" alt="<?= $hero_logo['alt'] ?>" class="header-inner-logo">
                    <?php elseif ($hero_title != '') : ?>
                        <h1 class="font-dashiell-bright display-2 text-white  font-normal mb-0 text-center">
                            <?= $hero_title ?>
                        </h1>
                    <?php endif; ?>
                    </div> 
                </div>
            </div>
        </div>
   
</section>
<?php
//Template Name: Simple Template

get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        <?php the_title(); ?>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                        <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                	<?php  the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/locations'); ?>
</div>
<?php get_footer(); ?>
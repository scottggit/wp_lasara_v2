<?php get_header(); 
    $pargs = array(
        'posts_per_page' => '4',
        'post_type' => 'blog',
        'order'=>'DESC',
        'orderby'=>'ID',
    );
  
    $query = new WP_Query($pargs);
?>

<div class="main-container mt-4r">
        <section class="bg-img bg-overlay  bg-overlay-left-full py-5  bg-overlay-left-full"
            data-background-image="<?php echo get_the_post_thumbnail_url(get_the_id(),'blog-inner'); ?>">
            <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
                <div class="row py-lg-5">
                    <div class="col-xl-4 col-md-6 offset-md-1">
                        <h1 class="text-white mb-5">       <?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="blogs py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>


  </body>


<?php get_footer();?>

<style>
    .blog-image.blog-banner img{
        width: 100%;
        height: auto;
    }   
</style>
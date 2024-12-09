<?php
//Template Name: blogs

get_header();

/* Truncate Words instead of letters */
function trunc($phrase, $max_words) {
  $phrase_array = explode(' ',$phrase);
  if(count($phrase_array) > $max_words && $max_words > 0)
     $phrase = implode(' ',array_slice($phrase_array, 0, $max_words)).'...';
  return $phrase;
}


$pargs = array(
 's' => isset($_GET['search']) ? $_GET['search'] : '',
 'posts_per_page' => '-1',
 'post_type' => 'post',
 'orderby' => 'menu_order',
 'tax_query' => isset($_GET['field']) ? array(
   array(
     'taxonomy' => 'category',
     'field'    => 'slug',
     'terms' => $_GET['field']
   ),
 ) : '',
 'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
);

$query = new WP_Query($pargs);

?>
<div class="main-container mt-4r">
      <section
        class="bg-img bg-overlay bg-top bg-overlay-left-full py-5 bg-top bg-overlay-left-full"
        data-background-image="<?php bloginfo('template_directory') ?>/img/old-man-with-cane.jpg"
      >
        <div class="container-fluid py-5 mb-xl-5 z-1 cross-vertical-right">
          <div class="row py-lg-5">
            <div class="col-xl-4 col-md-6 offset-md-1">
              <h1 class="text-white mb-5">News and Updates</h1>
            </div>
            <div class="w-100"></div>
            <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
              <h4 class="font-light text-white line-height-lg">
              We help you regenerate & optimize your sexual and physical health.
              </h4>
            </div>
          </div>
        </div>
      </section>

      <section class="blogs py-5">
        <div class="container py-lg-5">
          <div class="row justify-content-center">

          <?php
      $count = 0;
      if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
          $count++;
       
      ?>
            <div
              class="col-lg-4 col-md-6 mb-5 animate__animated"
              data-animate="slideInUp"
            >
              <a
                href="     <?php echo get_the_permalink(); ?>"
                class="card blog-card"
              >
              <?php the_post_thumbnail('blog-list', array('class' => 'card-img-top')); ?>  
                <span class="card-body p-4">
                  <h5 class="card-title">
                  <?php the_title(); ?>
                  </h5>
                  <span class="card-text d-block"
                    ><?php the_excerpt(); ?></span
                  >
                  <small class="text-black-50"><?php echo get_the_date(); ?></small>
                </span>
              </a>
            </div>
         
                <?php
                   
                  endwhile;
              

                  wp_reset_postdata();
                 endif;
      ?>
          </div>
        </div>
      </section>
    </div>

    
<?php get_footer(); ?>
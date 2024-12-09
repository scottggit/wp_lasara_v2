<?php
get_header();

/* Truncate Words instead of letters */
function trunc($phrase, $max_words) {
  $phrase_array = explode(' ',$phrase);
  if(count($phrase_array) > $max_words && $max_words > 0)
     $phrase = implode(' ',array_slice($phrase_array, 0, $max_words)).'...';
  return $phrase;
}


?>

<div class="main-container mt-4r">
      <section class="hero-section ">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-6 offset-lg-1 order-lg-2 mb-5 mb-lg-0">
                    <div class="video-container">
                     
                            <img src="<?php bloginfo('template_directory')?>/dist/img/hugging.jpg" alt="Laughing" class="img-fluid hero-img">
                    
                        <div class="badge-b-r">
                            <img src="<?php bloginfo('template_directory')?>/dist/asset/badge.svg" alt="Badge">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 order-lg-1">
                    <h1 class="text-primary font-head display-4 mb-4">Blog</h1>
                    <h4 class="text-d-light font-normal mb-5">Welcome to our blog</h4>
                    <?php echo do_shortcode('[searchandfilter id="34"]'); ?>
                 

                </div>

            </div>
        </div>
    </section>
      <section class="py-5 mt-lg-5">
        <div class="container">
          <h2 class="display-4 font-head mb-5 text-uppercase">
          Highlights
          </h2>

          <?php
         
          $pargs = array(
           's' => isset($_GET['search']) ? $_GET['search'] : '',
           'posts_per_page' =>'2',	
           'post_type' => 'post',
    
           'orderby' => 'meta_value',
           'order' => 'DESC',
           'tax_query' => isset($_GET['field']) ? array(
             array(
               'taxonomy' => 'category',
               'field'    => 'slug',
               'terms' => $_GET['field'],
             ),
           ) : '',
        
          );
          
          $query = new WP_Query($pargs);

      $count = 0;
      if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        
         if($count==0){
      ?>

          <div class="row align-items-start pb-5 mb-md-5">
            <div class="col-lg-7 col-md-6 position-md-sticky">
              <div class="cross-horiz cross-horiz-bl">
                <img
                  src="<?php bloginfo('template_directory')?>/dist/img/looking.jpg"
                  alt="Kyle"
                  class="img-fluid hero-img"
                />
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="ps-md-5">
                <p class=" text-d-light h1 font-head mb-4 mt-lg-0 mt-md-0 mt-sm-5"><?php echo get_the_title(); ?></p>
                <p class="mb-5">
                <?php  echo excerpt(55);?>
                </p>
                <a href="courses.php" class="btn btn-kyle">Learn More</a>
              </div>
            </div>
          </div>

<?php }else{ ?>
  
          <div class="row align-items-start pb-5 mb-md-5">
            <div class="col-lg-7 col-md-6 order-md-2 position-md-sticky">
              <div class="cross-horiz cross-horiz-br">
                <img
                  src="<?php bloginfo('template_directory')?>/dist/img/calling.jpg"
                  alt="Kyle"
                  class="img-fluid hero-img"
                />
              </div>
            </div>
            <div class="col-lg-4 col-md-6 order-md-1">
              <div class="pe-md-5">
                <p class=" text-d-light h1 font-head mb-4"><?php echo get_the_title(); ?></p>
                <p class="mb-5">
                <?php  echo excerpt(55);?>
                </p>
                <a href="courses.php" class="btn btn-kyle">Learn More</a>
              </div>
            </div>
          </div>

          <?php
}
$count++;
              endwhile;
          

              wp_reset_postdata();
             endif;
  ?>
        </div>
      </section>

      <section class="py-5 mt-lg-5" id="blog-news">
        <div class="container">
            <h2 class="display-4 font-head mb-5 text-center">Blog News</span></h2>
            <h4 class="text-d-light font-normal mb-5 text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h4>
          
      
            <?php echo do_shortcode('[searchandfilter id="34" show="results"]'); ?>

            

                  </div>
      </section>
    </div>
    
<?php get_footer(); ?>
<?php get_header();?>
<div class="main-container mt-4r">
      <section
        class="bg-img bg-overlay bg-top bg-overlay-left-full py-5 bg-top bg-overlay-left-full"
      >
        <div class="container-fluid  z-1 cross-vertical-right">
          <div class="row justify-content-center">
            <div class="col-auto text-center">
              <h1 class="text-white mb-5">Testimonials</h1>
              <h4 class="font-light text-white line-height-lg">We’ve changed the lives of countless patients and we can change yours too</h4>
            </div>
          </div>
        </div>
      </section>

    <section class="py-5 tabs-section">
<div class="container">

 <div class="testimonial_slick">
     
          <?php

// Check rows exists.
if( have_rows('testimonials','options') ):

    // Loop through rows.
    while( have_rows('testimonials','options') ) : the_row();
?>
                 <div class="card testimonial-item p-4 p-md-5">

                <img src="<?php bloginfo('template_directory')?>/img/quote.svg" alt="" class="testimonial-icon"> 
              <div class="testimonial-author">
                <div class="testimonial-img mb-4">
                <?php 
$image = get_sub_field('image');

if( $image ) {
    echo wp_get_attachment_image( $image, 'testimonials-img', "", ["class" => "","alt"=>"Icon"]);
}
?>
                  <p class="display-6 font-bold"> <?php echo get_sub_field('title');?></p>
                </div>
                <p>
             <?php echo get_sub_field('description',false);?>
                </p>
                <a
                  href=" <?php echo get_sub_field('read_more');?>"
                  class="text-secondary font-bold videoPopup"
                  >Watch Video</a
                >
              </div>
            </div>
        
<?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

?>
  
          </div>
<div class="py-5 mt-md-5">
    <?php echo do_shortcode('[trustindex no-registration=google]'); ?></div>
	<div class="d-flex justify-content-center">
		
	<a class="btn btn-grad mb-4" href="https://g.co/kgs/uxfYgj7" target=_blank>
		Read More
	</a>
	
	</div>
    </section>

    </div>
    </div>
<?php get_footer();?>
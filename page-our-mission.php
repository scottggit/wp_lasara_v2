<?php get_header();?>
<style>
  .wrap{
        position: relative;

    overflow: hidden;
    height: 100%;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    align-items: start;

  }
  .wrap>img{
        object-fit: cover;
    height: 90%;
    object-position: center;
  }
</style>
<div class="main-container mt-4r">
      <section
        class="bg-img bg-overlay bg-top bg-overlay-left-full"
      >
        <div class="container-fluid py-5 mb-xl-5 z-1 cross-vertical-right">
          <div class="row py-lg-5 text-center justify-content-center" >
            <div class="col-xl-12 col-md-12">
              <h1 class="display-4 text-white mb-5 ">
               Our Mission
              </h1>
            </div>
            <div class="w-100"></div>
    
          </div>
        </div>
      </section>
      <section class="py-5 mt-lg-5">
        <div class="container-fluid">
          <div class="row align-items-center">

            <div class="col-md-5 offset-md-1 pe-lg-5">
              <div
                class="wrap bg-img-overlay bg-img-overlay-right-small bg-img-overlay-sm-right  border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right  border-r-1 mb-5 mb-md-0   "
              >
                <img
                  src="<?php bloginfo('template_directory')?>/img/mission-1.jpg"
                  alt="mission"
                  class="img-fluid border-r-1 w-100 m-auto"
                />
              </div>
            </div>
            <div class="col-xl-5 col-md-6 ps-md-5">
      <div class="wrap">
       <p>   Welcome to LaSara Medical Group, where science and research fuel human performance. We are pioneers in human body regeneration and optimization, dedicated to enhancing your vitality and unlocking your true potential. Harnessing cutting-edge focused shockwave technology, peptides, and performance medicines, we rejuvenate and revitalize every aspect of your being. Whether you're aiming to lose weight, enhance physical or sexual performance, optimize your hormones, or recover from an injury, our team offers effective and research-based treatments.</p>  
<p>  
Committed to helping our patients regenerate and optimize their health, LaSara Medical Group specializes in Focused Shockwave Therapy, a revolutionary, non-invasive, and non-surgical solution addressing the root cause of dysfunctions, pain, and signs of aging. Our regenerative medicine works to heal and grow human cells, tissues, and organs, restoring normal function with over a decade of proven research.</p>  

            </div>  </div>
          </div>
        </div>
      </section>
      

      <section class="py-5 mt-lg-5">
        <div class="container-fluid">
          <div class="row align-items-center">
          <div class="col-md-5 offset-md-1 pe-lg-5 order-lg-1 order-2">
          
       <p>Additionally, we offer two additional arms of our practice to address specific health concerns. Our medical weight loss treatments utilize GLP1 medications, providing safe and effective options for individuals seeking to achieve their weight loss goals. Furthermore, our testosterone replacement therapy for men focuses on optimizing hormone levels to enhance vitality and overall well-being.</p>  
<p>  
Since 2017, we've completed over 11,000 Shockwave treatments, transforming the lives of countless men and women. Our approach, bolstered by innovative treatments like peptides and hormone therapies, triggers profound changes in the body and mind, delivering lasting results. At LaSara Medical Group, we serve as catalysts for the remarkable transformations the human body is capable of achieving. We're honored to have the opportunity to help you realize your full potential, just as we've done for countless patients before you.
</p>  

       
            </div>
            <div class="col-xl-5 col-md-6 ps-md-5 order-lg-2 order-1">
              <div
                class="bg-img-overlay bg-img-overlay-left-small bg-img-overlay-sm-left  border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-left position-relative"
              >
<div class="wrap">
                <img
                  src="<?php bloginfo('template_directory')?>/img/mission-2.jpg"
                  alt="misson2"
                  class="img-fluid border-r-1 w-100 m-auto"
                />
</div>
              </div>
            </div>
          
          </div>
        </div>
      </section>
      <section
        class="testimonial-section bg-secondary-light py-5 rad-bor-bottom rad-top animate__animated"
        data-animate="slideInUp"
      >
        <div class="container py-lg-5">
          <div
            class="d-flex flex-column flex-lg-row mb-5"
          >
            <div class="col-auto">
              <h2 class="me-5">Testimonials</h2>
            </div>
            <div class="col-lg-8 ps-lg-5 border-lg-left">
              <h3 class="font-extralight text-primary w-75">
                We’ve Changed The Lives Of Countless Patients We Can Change Yours Too
              </h3>
            </div>
          </div>
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
          <div class="text-center pt-5 mt-5">
            <a href="<?php echo get_site_url() ?>/about/testimonials" class="btn btn-grad"
              >MORE PATIENT STORIES</a
            >
          </div>
        </div>
      </section>

    <?php get_template_part('template-parts/locations'); ?>  
    </div>

<?php get_footer();?>
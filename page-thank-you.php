<?php get_header(); ?>
<style>
    .img-thank-you{
        max-width: 100px;
        margin-right: 1rem;
    }
    @media screen and (min-width: 992px){
        .img-thank-you{
            max-width: 150px;
            margin-right: 2rem;
        }
    }
</style>
<div class="main-container mt-4r">
    <section class="bg-grad-2 pt-5">
        <div class="container pt-lg-5">
            <div class="row align-items-end align-items-lg-center pt-lg-5">
                <div class="col-xxl-6 col-md-6 ps-sm-4 pb-5">
                    <div class="d-lg-flex align-items-start">
                        <img src="<?php bloginfo('template_directory') ?>/img/thank-you.svg" alt="Thank You" class="img-fluid img-thank-you mb-4 mb-lg-0" />
                        <div>
                            <h1 class="display-4 mb-5 text-white font-black">Your form has been submitted successfully. </h1>
                            <a href="tel: 949-520-1551" class="btn btn-grad mb-lg-5">Call Us: 949-520-1551</a>

                        </div>
                    </div>
                </div>
                <div class="offset-xxl-1 col-lg-5 col-md-6 align-self-end">
                    <img src="<?php bloginfo('template_directory') ?>/img/slider-img-2.png" alt="Slider Image" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section bg-secondary-light py-5 rad-bor-bottom rad-top animate__animated" data-animate="slideInUp">
        <div class="container py-lg-5">
            <div class="d-flex flex-column flex-lg-row mb-5">
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
                if (have_rows('testimonials', 'options')) :

                    // Loop through rows.
                    while (have_rows('testimonials', 'options')) : the_row();
                ?>
                    <div class="card testimonial-item p-4 p-md-5">

                        <img src="<?php bloginfo('template_directory') ?>/img/quote.svg" alt="" class="testimonial-icon">
                        <div class="testimonial-author">
                            <div class="testimonial-img mb-4">
                                <?php
                                $image = get_sub_field('image');

                                if ($image) {
                                    echo wp_get_attachment_image($image, 'testimonials-img', "", ["class" => "", "alt" => "Icon"]);
                                }
                                ?>
                                <p class="display-6 font-bold"> <?php echo get_sub_field('title'); ?></p>
                            </div>
                            <p>
                                <?php echo get_sub_field('description', false); ?>
                            </p>
                            <a href=" <?php echo get_sub_field('read_more'); ?>" class="text-secondary font-bold videoPopup">Watch Video</a>
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
                <a href="<?php echo get_site_url() ?>/about/testimonials" class="btn btn-grad">MORE PATIENT STORIES</a>
            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5 what-we-offer">
        <div class="container">
            <?php get_template_part('template-parts/what-we-offer'); ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>
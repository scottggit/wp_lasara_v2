<?php get_header();?>
<div class="main-container mt-4r">
      <section
        class="bg-img bg-overlay bg-top bg-overlay-left-full py-5 bg-top bg-overlay-left-full"
        data-background-image="<?php bloginfo('template_directory')?>/img/old-man-with-cane.jpg"
      >
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
          <div class="row py-lg-5">
            <div class="col-xl-4 col-md-6 offset-md-1">
              <h1 class="text-white mb-5">About LaSara Medical Group</h1>
            </div>
            <div class="w-100"></div>
            <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
              <h4 class="font-light text-white line-height-lg">
                LaSara Medical Group specializes in helping men who suffer from
                erectile dysfunction (ED).
              </h4>
            </div>
          </div>
        </div>
      </section>

      <section class="our-practice mt-5 py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div
                class="img-container-w-caption bg-img bg-img-overlay bg-img-overlay bg-img-overlay-sm-right"
                data-background-image="<?php bloginfo('template_directory')?>/img/about-lasara.png"
              >
                <div class="img-caption bg-grad p-5">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <span class="h2 text-white"> LaSara Medical Group </span>
                    </div>
                    <div class="col-md-6">
                      <span class="font-extralight text-white"
                        >Erectile Dysfunction Health Clinic located in Orange
                        County, Los Angeles, & San Diego, CA</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
              <h2>About LaSara Medical Group</h2>

              <p>
                We offer our patients the latest in ED treatment, known as low
                intensity focused shockwave therapy. As pioneers of this
                treatment, we’ve seen unimaginable results and have treated more
                men than any clinic in our region.Focused shockwave therapy is
                the only clinically studied medical treatment that is known to
                reverse ED for the long-term. The foremost advanced medical
                communities around the world consider it to be the potential
                medical answer of rehabilitating or even curing ED. For over 10
                years, successful use throughout Europe, Canada, Asia, and
                Australia, as well as numerous studies have proven the efficacy
                and long-term benefits of focused shockwave therapy.
              </p>
              <p>
                As a specialty men’s clinic, our goal is to provide a safe, drug
                free, surgery free, and needle free solution that treats the
                root cause of ED. As a result of being treated by LaSara Medical
                Group, our patient’s natural functionality is restored and they
                are able to partake in spontaneous sexual activities again. The
                way a man’s sex life is meant to be. In addition to providing
                the most cutting-edge treatment option for ED, our clinic
                provides a safe, discreet environment for our patients. Our
                professional, all male medical staff is committed to providing a
                medical experience that surpasses all patient expectations. Our
                team at LaSara Medical Group hopes you take the first step in
                beginning your path back to natural functionality by giving us a
                call to schedule your first time visit with the doctor. We look
                forward to helping you the same way we’ve helped so many men
                before you.
              </p>
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

         </main>
         <script type="application/ld+json">
{
    "@type": "AboutPage",
    "name": "About LaSara Medical Group: Erectile Dysfunction Health Clinic Orange County, CA & Los Angeles, CA",
    "description": "Trusted Erectile Dysfunction Health Clinic serving Orange County, CA & Los Angeles, CA. Visit our website to book an appointment online: LaSara Medical Group",
    "url": "https://www.lasara.com/about/",
    "isPartOf": {
        "@type": "WebSite",
        "url": "https://www.lasara.com/",
        "name": "LaSara Medical Group",
        "about": {
            "@type": "Organization",
            "name": "LaSara Medical Group",
            "legalName": "LaSara Medical Group",
            "logo": {
                "@type": "ImageObject",
                "author": "LaSara Medical Group",
                "contentUrl": "https://www.lasara.com/wp-content/themes/lasara/img/logo.png",
                "description": "LaSara Medical Group offers professional treatment for erectile dysfunction and other mens sexual health needs in Southern California.",
                "name": "LaSara Medical Group Logo"
            },
            "description": "LaSara Medical Group is your resource for erectile dysfunction treatment in Los Angeles, Encinitas & Tustin. Our ED doctors are men's sexual health experts.",
            "contactPoint": {
                "@type": "ContactPoint",
                "url": "https://www.lasara.com/contactus/"
            },
            "knowsAbout": [
                {
                    "@type": "Thing",
                    "name": "Erectile dysfunction",
                    "sameAs": "https://en.wikipedia.org/wiki/Erectile_dysfunction"
                },
                {
                    "@type": "Thing",
                    "name": "Peptide",
                    "sameAs": "https://en.wikipedia.org/wiki/Peptide"
                },
                {
                    "@type": "Thing",
                    "name": "BPC-157",
                    "sameAs": "https://en.wikipedia.org/wiki/BPC-157"
                }
            ]
        }
    },
    "keywords": "ed clinic southern california, ed clinic los angeles",
    "mainContentOfPage": {
        "@type": "WebPageElement",
        "text": "LaSara Medical Group offers our patients the latest in ED treatment, known as low intensity focused shockwave therapy. As pioneers of this treatment, we’ve seen unimaginable results and have treated more men than any clinic in our region.Focused shockwave therapy is the only clinically studied medical treatment that is known to reverse ED for the long-term. The foremost advanced medical communities around the world consider it to be the potential medical answer of rehabilitating or even curing ED. For over 10 years, successful use throughout Europe, Canada, Asia, and Australia, as well as numerous studies have proven the efficacy and long-term benefits of focused shockwave therapy.\nAs a specialty men’s clinic, our goal is to provide a safe, drug free, surgery free, and needle free solution that treats the root cause of ED. As a result of being treated by LaSara Medical Group, our patient’s natural functionality is restored and they are able to partake in spontaneous sexual activities again. The way a man’s sex life is meant to be. In addition to providing the most cutting-edge treatment option for ED, our clinic provides a safe, discreet environment for our patients. Our professional, all male medical staff is committed to providing a medical experience that surpasses all patient expectations. Our team at LaSara Medical Group hopes you take the first step in beginning your path back to natural functionality by giving us a call to schedule your first time visit with the doctor. We look forward to helping you the same way we’ve helped so many men before you."
    }
}
		</script>
<?php get_footer();?>
<?php get_header(); ?>
<style>
  section.at-group.mt-5.py-5 .row img {
    border-right: #f1f1f1bf 1px solid;
    border-bottom: #f1f1f1bf 1px solid;
}
</style>
    <div class="main-container mt-4r">
 
    <!-- H1 Component -->
    <section class=" bg-overlay bg-top bg-overlay-left-full mb-5">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-4 col-md-4">
                    <h1 class="display-4 text-white  ">
                       Pharmacies & Telehealth</h1>
                </div>
				<div class="w-100"></div>


            </div>
        </div>
    </section>
        <section class="at-group mt-5 py-5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div
              class="col-lg-12mb-4 text-center mb-lg-0 animate__animated"
              data-animate="slideInUp"
            >
              <div
                class="img-container-w-caption bg-img"
                data-background-image="<?php bloginfo('template_directory')?>/img/pharma-banner.png"
              >
              </div>
              <h2 class="pt-5 pb-4">At LaSara Medical Group, we prioritize the highest standard of care for our patients.</h2>
              <p>That’s why we partner with Legit Script certified pharmacies such as Tailormade, Strive, and Belmar to ensure the quality and safety of compounded medications. Through this collaboration, we guarantee that our patients receive excellent pharmaceutical products tailored to their unique needs, backed by stringent quality assurance measures and the expertise of certified professionals.</p>
            </div>

          </div>
          <div class="row justify-content-center">
                    <div class="col-md-4">
            <img src="<?php bloginfo('template_directory')?>/img/service-box-2.png" alt="service box" class="w-100">
            </div>
        
                <div class="col-md-4">
            <img src="<?php bloginfo('template_directory')?>/img/service-box-1.png" alt="service box" class="w-100">
            </div>
            <div class="col-md-4">
            <img src="<?php bloginfo('template_directory')?>/img/service-box.png" alt="service box" class="w-100">
            </div>
               <div class="col-md-4">
            <img src="<?php bloginfo('template_directory')?>/img/dirx.png" alt="service box" class="w-100">
            </div>
               <div class="col-md-4">
            <img src="<?php bloginfo('template_directory')?>/img/uni.png" alt="service box" class="w-100">
            </div>
          </div>
        </div>
      </section>
      <section class="py-5 bg-img bg-top bg-overlay " data-background-image="<?php bloginfo('template_directory') ?>/img/lmg.png">
    <div class="container z-1">
      <div class="row justify-content-end py-lg-5">
        <div class="col-md-6 col-sm-8  pe-md-5">
          <h2 class="text-white font-black mb-4">
 LaSara Medical Group’s telehealth services cater to patients across 47 states and Washington DC,
          </h2>
          <p class="text-white mb-5">
        Offering convenient access to expert medical care from the comfort of their homes. Whether you’re in Alabama, Arizona, Arkansas, California, Colorado, Connecticut, Delaware, Florida, Georgia, Hawaii, Idaho, Illinois, Indiana, Iowa, Kansas, Kentucky, Louisiana, Maine, Maryland, Massachusetts, Michigan, Minnesota, Missouri, Montana, Nebraska, Nevada, New Hampshire, New Mexico, New York, North Carolina, North Dakota, Ohio, Oklahoma, Oregon, Pennsylvania, Rhode Island, South Carolina, South Dakota, Tennessee, Texas, Utah, Vermont, Virginia, Washington, West Virginia, Wisconsin, or Wyoming, our telemedicine platform ensures accessibility and personalized care tailored to your needs.
          </p>
          <a href="<?php echo get_site_url() ?>/contactus" class="btn btn-lg btn-grad">CONTACT US</a>
        </div>
      </div>
    </div>
  </section>

      
   
 <?php get_template_part('template-parts/locations'); ?>  
    </div>

<?php get_footer(); ?>
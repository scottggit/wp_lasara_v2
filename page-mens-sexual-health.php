<?php get_header(); ?>
    <div class="main-container mt-4r">
      <section class="hero-section bg-grad-2 pb-0">
        <div class="container">
          <div
            id="heroCarousel"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
          >	
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row align-items-end align-items-lg-center pt-lg-5">
                  <div class="col-md-6 py-5 ps-sm-4 pe-lg-5 mb-5">
                    <h1 class="text-white font-black">Men’s Sexual Health</h1>
                    <p
                      class="hero-sub font-light text-white mt-4 mb-5 line-height-lg text-justify"
                    >LaSara Medical Group specializes in helping men who suffer from erectile dysfunction (ED) and Peyronie’s Disease. We offer our patients the latest for sexual dysfunction treatments, known as low intensity focused shockwave therapy.
                    </p>
                  </div>
                  <div class="col-md-6">
                    <img
                      src="<?php bloginfo('template_directory')?>/img/slider-img-4.png"
                      alt="Slider Image"
                      class="img-fluid"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="our-practice mt-5 py-5">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div
              class="col-lg-5 offset-lg-1 mb-4 mb-lg-0 animate__animated"
              data-animate="slideInUp"
            >
              <div
                class="img-container-w-caption bg-img"
                data-background-image="<?php bloginfo('template_directory')?>/img/mens-health-side.jpg"
              >
              </div>
            </div>
            <div
              class="col-lg-4 ps-lg-5 animate__animated"
              data-animate="slideInUp"
            >
              <p>
              LaSara Medical Group specializes in helping men who suffer from erectile dysfunction (ED) and Peyronie’s Disease. We offer our patients the latest for sexual dysfunction treatments, known as low intensity focused shockwave therapy. As pioneers of this treatment since 2017, we’ve seen unimaginable results and have completed more than 11,000 treatments since our humble beginning. We know what works and more importantly, what doesn’t work.</p>
              <p class="m-0">Focused shockwave therapy is the only clinically studied medical treatment that is known to reverse ED for the long-term. The foremost advanced medical communities around the world consider it to be the potential medical answer of rehabilitating or even curing ED. Since 2009, successful use throughout Europe, Canada, Asia, and Australia, as well as numerous studies have proven the efficacy and long-term benefits of focused shockwave therapy.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5">
        <div class="container">
          <div
            class="bg-img bg-img-overlay border-r-1 bg-img-w-overlay bg-top bg-img-overlay-lg-right"
            data-background-image="<?php bloginfo('template_directory')?>/img/peyronies-banner.jpg"
          ></div>
          <div class="row justify-content-center">
            <div class="col-md-10">
              <p
                class="mt-5 text-center animate__animated"
                data-animate="slideInUp"
              >As a specialty men’s clinic, our goal is to provide a safe, drug free, surgery free, and needle free solution that treats the root cause of ED. As a result of being treated by LaSara Medical Group, our patient’s natural functionality is restored and they are able to partake in spontaneous sexual activities again. The way a man’s sex life is meant to be. </p>
            </div>
          </div>
        </div>
      </section>
      
      <section class="py-5 mt-lg-5">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-5 ps-lg-5 order-lg-2">
              <div
                class="bg-img-overlay sticky-top border-r-1 bg-img-overlay-sm-left mb-4 mb-lg-0"
              >
                <img
                  src="<?php bloginfo('template_directory')?>/img/old-couple.jpg"
                  alt="Old Man with Cane"
                  class="img-fluid border-r-1"
                />
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 offset-lg-2 pe-lg-5 order-lg-1">
              <p>In addition to providing the most cutting-edge treatment option for ED, our clinic provides a safe, discreet environment for our patients. Our professional, all male medical staff is committed to providing a medical experience that surpasses all patient expectations.</p>
              <p>Our team at LaSara Medical Group hopes you take the first step in beginning your path back to natural functionality by giving us a call to schedule your first time visit with the doctor. We look forward to helping you the same way we’ve helped so many men before you.</p>
            </div>
          </div>
        </div>
      </section>
 <?php get_template_part('template-parts/locations'); ?>  
    </div>

<?php get_footer(); ?>
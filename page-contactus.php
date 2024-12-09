<?php get_header();?>
<style>
.wpforms-form input[type='text'],
.wpforms-form input[type='email'],
.wpforms-form input[type='phone'],
.wpforms-form select,
.wpforms-form textarea{
    display: block;
    width: 100%;
    padding: 0.641rem 1.25rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 2;
    color: #444f5a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ebf1fb;
    appearance: none;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 rgb(0 0 0 / 0%);
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
div.wpforms-container .wpforms-form .choices div.choices__inner{
	min-height: 50px;	
    border: 1px solid #ebf1fb;
}
	div.wpforms-container ul{
		padding-left: 0;
	}
.wpforms-container label.wpforms-field-label{
	font-weight: normal;
}
	.fs-20 {
		font-size: 20px;
		line-height: 26px;
	}

	.fs-18 {
		font-size: 18px;
		line-height: 24px;
	}
</style>
<div class="main-container mt-4r">
	<section class="bg-img bg-overlay bg-top bg-overlay-left-full py-5 bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
          <div class="row py-lg-5">
            <div class="col-xl-4 col-md-6 offset-md-1">
              <h1 class="text-white mb-5">Contact Us</h1>
            </div>
            <div class="w-100"></div>
            <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
              <h4 class="font-light text-white line-height-lg">
                Telehealth Consultations & Treatment Provided Nationwide
              </h4>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5 my-lg-5">
        <div class="container">
          <div class="row">
            <div class="col-md-7 order-md-2 ps-md-5 mb-5 mb-md-0">
              <div class="col-md-10">
                <h2 class="pe-md-5">Send A Message To LaSara Medical Group</h2>
                <p>
                  If you have any questions, concerns, or comments regarding
                  LaSara Medical Group, please fill out the short contact form
                  below.
                </p>
              </div>
				<?= do_shortcode('[wpforms id=413]');?>
            </div>
            <div class="col-md-5 order-md-1">
              <div class="contact_location sticky-top pb-2">
                <div class="map_slick mb-5">
                  <div class="location-map">
                   <a href="<?php echo get_site_url() ?>/location/ca/encinitas">
                    <img src="<?php bloginfo('template_directory') ?>/img/location/usa.png" alt="MAP" class="img-fluid" />
                    <div class="c-card bg-white p-4 location-detail">
                      <p class="font-bold text-black">
							Telehealth & <br/>Virtual Consultations Offered Nationally 
                        </p>
                        <a href="tel:949-520-1551" class="btn btn-grad">949-520-1551</a>
                    </div>
                    </a>
                    
                  </div>
                  <div class="location-map">
                   <a href="<?php echo get_site_url() ?>/location/ca/tustin">
                    <img
                      src="<?php bloginfo('template_directory')?>/img/location/map-1.jpg"
                      alt="MAP"
                      class="img-fluid"
                    />
                    <div class="c-card bg-white p-4 location-detail">
                      <p class="font-bold text-black">
                        1122 Bristol Street, Second Floor, <br/>Costa Mesa, CA 92646
                      </p>
                      <a href="tel:949-520-1551" class="btn btn-grad"
                        >949-520-1551</a
                      >
                    </div>
                    </a>
                    
                  </div>
                  <div class="location-map">
                   <a href="<?php echo get_site_url() ?>/location/ca/sawtelle">
                    <img
                      src="<?php bloginfo('template_directory')?>/img/location/map-1.jpg"
                      alt="MAP"
                      class="img-fluid"
                    />
                    <div class="c-card bg-white p-4 location-detail">
                      <p class="font-bold text-black">
                        11500 W Olympic Blvd Suite 440, <br/>Los Angeles, CA 90064
                      </p>
                      <a href="tel:424-343-8998" class="btn btn-grad"
                        >424-343-8998</a
                      >
                    </div>
                    </a>
                  </div>
                  <div class="location-map">
                    <a href="<?php echo get_site_url() ?>/location/ca/encinitas">
                    <img
                      src="<?php bloginfo('template_directory')?>/img/location/map-1.jpg"
                      alt="MAP"
                      class="img-fluid"
                    />
                    <div class="c-card bg-white p-4 location-detail">
                      <p class="font-bold text-black">
                        8929 University Center Ln Ste 100, <br/>San Diego, CA 92122
                      </p>
                      <a href="tel:760-266-8466" class="btn btn-grad"
                        >760-266-8466</a
                      >
                    </div>
                    </a>
                  </div>
                </div>
                <div class="contact_location_slick pt-5">
                  <img src="<?php bloginfo('template_directory')?>/img/location/location-1a.jpg" alt="Location" class="border-r-1"/>
                  <img src="<?php bloginfo('template_directory')?>/img/location/location-2a.jpg" alt="Location" class="border-r-1"/>
                  <img src="<?php bloginfo('template_directory')?>/img/location/location-3a.jpg" alt="Location" class="border-r-1"/>
                  <img src="<?php bloginfo('template_directory')?>/img/location/location-4a.jpg" alt="Location" class="border-r-1"/>
                  <img src="<?php bloginfo('template_directory')?>/img/location/location-1.jpg" alt="Location" class="border-r-1"/>
                  <img src="<?php bloginfo('template_directory')?>/img/location/location-2.jpg" alt="Location" class="border-r-1"/>
                  <img src="<?php bloginfo('template_directory')?>/img/location/location-3.jpg" alt="Location" class="border-r-1"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  <section class="py-5 partner-pharmacies bg-secondary-light">
		<div class="container-md py-lg-5 text-center">
		  <h3 class="mb-4">Partner Pharmacies</h3>
		  <div class="row justify-content-center">
			<div class="col-sm-6 col-xl-4 mb-4 mb-xl-5">
			  <div class="partner-item bg-white border-r-1 h-100 d-flex justify-content-between flex-column align-items-center overflow-hidden">
				<div>
				  <img src="<?php bloginfo('template_directory') ?>/img/partner-pharmacies/Tailor Made Compounding.jpg" alt="Tailor Made Compounding" class="mb-3 w-100 img-fluid" />
				  <div class="p-3">
					<p class="font-bold text-black mb-2 fs-20">Tailor Made Compounding</p>
					<p class="fs-18 font-light text-black opacity-50 mt-4 mb-0">
					  200 Moore Dr. Nicholasville, KY 40356
					</p>
				  </div>
				</div>
				<a href="tel:859-887-0013" class="btn btn-grad mb-5">859-887-0013</a>
			  </div>
			</div>
			<div class="col-sm-6 col-xl-4 mb-4 mb-xl-5">
			  <div class="partner-item bg-white border-r-1 h-100 d-flex justify-content-between flex-column align-items-center overflow-hidden">
				<div>
				  <img src="<?php bloginfo('template_directory') ?>/img/partner-pharmacies/Strive Pharmacy.jpg" alt="Strive Pharmacy" class="w-100 img-fluid mb-3 " />
				  <div class="p-3">
					<p class="font-bold text-black mb-2 fs-20">Strive Pharmacy</p>
					<p class="fs-18 font-light text-black opacity-50 mt-4 mb-0">
					  1275 E Baseline Rd Gilbert, AZ 85233
					</p>
				  </div>
				</div>
				<a href="tel:480-626-4366" class="btn btn-grad mb-5">480-626-4366</a>
			  </div>
			</div>
			<div class="col-sm-6 col-xl-4 mb-4 mb-xl-5">
			  <div class="partner-item bg-white border-r-1 h-100 d-flex justify-content-between flex-column align-items-center overflow-hidden">
				<div>
				  <img src="<?php bloginfo('template_directory') ?>/img/partner-pharmacies/Belmar Pharmacy.jpg" alt="Belmar Pharmacy" class="w-100 img-fluid mb-3 " />
				  <div class="p-3">
					<p class="font-bold text-black mb-2 fs-20">Belmar Pharmacy</p>
					<p class="fs-18 font-light text-black opacity-50 mt-4 mb-0">
					  2500 Lakepointe Pkwy Odessa, FL 33556
					</p>
				  </div>
				</div>
				<a href="tel:877-418-4692" class="btn btn-grad mb-5">877-418-4692</a>
			  </div>
			</div>
			<div class="col-sm-6 col-xl-4 mb-4 mb-xl-5">
			  <div class="partner-item bg-white border-r-1 h-100 d-flex justify-content-between flex-column align-items-center overflow-hidden">
				<div>
				  <img src="<?php bloginfo('template_directory') ?>/img/partner-pharmacies/University Compounding Pharmacy.jpg" alt="University Compounding Pharmacy" class="w-100 img-fluid mb-3 " />
				  <div class="p-3">
					<p class="font-bold text-black mb-2 fs-20">University Compounding Pharmacy</p>
					<p class="fs-18 font-light text-black opacity-50 mt-4 mb-0">
					  6054 Livernois Road Troy, Michigan 48098
					</p>
				  </div>
				</div>
				<a href="tel:877-531-1147" class="btn btn-grad mb-5">877-531-1147</a>
			  </div>
			</div>
			  
			  			<div class="col-sm-6 col-xl-4 mb-4 mb-xl-5">
			  <div class="partner-item bg-white border-r-1 h-100 d-flex justify-content-between flex-column align-items-center overflow-hidden">
				<div>
				  <img src="<?php bloginfo('template_directory') ?>/img/partner-pharmacies/dirxlogo1.jpg" alt="DiRx" class="w-100 img-fluid mb-3 " style='    border-radius: 1rem 1rem 1rem 1rem;'/>
				  <div class="p-3">
					<p class="font-bold text-black mb-2 fs-20">DiRx</p>
					  <p class="pb-0 mb-0">3540 NW 56th St</p>
					<p class="fs-18 font-light text-black opacity-50 mt-2 mb-0">
					  STE 204, Ft Lauderdale FL 33309
					</p>
				  </div>
				</div>
				<a href="tel:877-367-3479" class="btn btn-grad mb-5">877-367-3479</a>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
    </div>

<?php get_footer();?>
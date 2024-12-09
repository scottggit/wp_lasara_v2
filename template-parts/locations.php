<style>
@media (min-width: 992px){
    .location-map .location-detail{
        min-height: 13.5rem;
            display: flex;
    flex-direction: column;
    justify-content: space-between;
    }}
</style>
<section class="location py-5 rad-bor-bottom">
    <div class="container py-lg-5">
        <div class="d-flex flex-column flex-lg-row align-items-center mb-5 animate__animated" data-animate="slideInUp">
            <h2 class="me-5">Our Locations</h2>
            <h3 class="font-extralight text-primary ps-lg-5 border-lg-left">
				Telehealth Services Offered Nationally, Physical Treatments Offered in Los Angeles, Orange County, and San Diego.
            </h3>
        </div>
        <div class="row justify-content-center mb-5 animate__animated" data-animate="slideInUp">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="location-map">
                  <a href="<?php echo get_site_url() ?>/location/ca/costa-mesa">
                    <img src="<?php bloginfo('template_directory') ?>/img/location/lasara costa mesa.jpeg" alt="MAP" class="img-fluid" />
                    <div class="c-card bg-white p-4 location-detail">
                        <p class="font-bold text-black">
                           1122 Bristol St, 2nd Floor<br/> Costa Mesa, CA 92626
                        </p>
                        <a href="tel:949-520-1551" class="btn btn-grad">949-520-1551</a>
                    </div>
                    </a>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="location-map">
                  <a href="<?php echo get_site_url() ?>/location/ca/sawtelle">
                    <img src="<?php bloginfo('template_directory') ?>/img/location/Sawtelle.jpg" alt="MAP" class="img-fluid" />
                    <div class="c-card bg-white p-4 location-detail">
                        <p class="font-bold text-black">
                            11500 W Olympic Blvd, Suite 440 <br/>Los Angeles, CA 90064
                        </p>
                        <a href="tel:424-343-8998" class="btn btn-grad">424-343-8998</a>
                    </div>
                    </a>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="location-map">
                  <a href="<?php echo get_site_url() ?>/location/ca/encinitas">
                    <img src="<?php bloginfo('template_directory') ?>/img/location/San-Diego.jpg" alt="MAP" class="img-fluid" />
                    <div class="c-card bg-white p-4 location-detail">
                        <p class="font-bold text-black">
							8929 University Center Ln Ste 100 <br/>San Diego, CA 92122
                        </p>
                        <a href="tel:760-266-8466" class="btn btn-grad">760-266-8466</a>
                    </div>
                      </a>
                    
                </div>
            </div>

             <div class="col-lg-3 col-md-6 mb-4">
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
            </div>
        </div>
        <div class="location_slick">
            <img src="<?php bloginfo('template_directory') ?>/img/location/location-1a.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory') ?>/img/location/location-2a.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory') ?>/img/location/location-3a.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory') ?>/img/location/location-4a.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory') ?>/img/location/location-1.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory') ?>/img/location/location-2.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory') ?>/img/location/location-3.jpg" alt="Location" />
        </div>
    </div>
</section>
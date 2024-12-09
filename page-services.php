<?php get_header(); 
global $services;
?>
<head></head>
<style>
    
    @media (min-width: 768px){
  .step-wrap img {
    position: relative;
    left: -10px;
  }}
.step-wrap img {
    width: auto;
    height: 6rem;
}
      .text-wrap{
      position:absolute; left: 2rem;
      top: 12%;
		  z-index: 3;
    }
  @media (min-width: 768px){
    .text-wrap{
     align-self: center;
    }
  }
  .step-wrap{
    box-shadow: 0px 20px 40px rgba(22, 80, 116, 0.1);
    border-radius: 1rem;
    height: 100%;
        display: flex;
    flex-direction: column;
 
    justify-content: space-between;
  }
  .specialize-wrap{
    box-shadow: 0px 20px 40px rgba(22, 80, 116, 0.1);
        justify-content: space-between;
    display: flex;border-radius: 1rem;
    align-items: center;height: 100%;
       position: relative;
    min-height: 18rem;

  }
 
    .specialize-wrap .img-wrap{
   
  height: 14rem;
    width: 16rem;position:absolute;right: 0;bottom: 0;

}
.text-wrap img{width: 2.5rem;}
   @media (min-width: 1500px){
 .specialize-wrap .img-wrap{
       height: 15rem;
}
    }
.img-wrap img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}
</style>
<div class="main-container mt-4r">

  <section
        class="bg-img bg-overlay bg-top bg-overlay-left-full py-5 bg-top bg-overlay-left-full"
        data-background-image="<?php bloginfo('template_directory')?>/img/services-banner.png"
      >
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
          <div class="row py-lg-5 text-center justify-content-center ">
            <div class="col-xl-6 col-md-6 ">
              <h1 class="text-white mb-4 banner-title">
                Services
              </h1>
            </div>
            <div class="w-100"></div>
            <div class="col-xxl-6 col-xl-6 col-md-6 ">
              <h4 class="font-light text-white line-height-lg">
              At LaSara Medical Group, our number one goal is provide treatments and products to our patients that are backed by research and clinical data proving the efficacy and safety of our offerings.
              </h4>
            </div>
          </div>
        </div>
      </section>
	<?php /*?>
    <section class="py-5 mt-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-5 offset-md-1 pe-lg-5">
                    <div class="bg-img-overlay bg-img-overlay-sm-right sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
                        <img src="<?php bloginfo('template_directory') ?>/img/peptide-get-back.jpg" alt="Old Couple" class="img-fluid border-r-1" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 ps-md-5">
                    <p class="mb-0">
                        At LaSara Medical Group, our number one goal is provide treatments and products to our patients that are backed by research and clinical data proving the efficacy and safety of our offerings. We rely on the international and domestic healthcare communities and medical universities who are spearheading the advancements of patient care and treatments. We take pride in offering treatment modalities that present the greatest chance of success with the least amount of risk. Every LaSara treatment and product has been tested and proven with at least 5 or more years of research and clinical data.
                    </p>
                </div>
            </div>
        </div>
    </section>

	<?php */?>

      <section class="py-5">
        <div class="container-fluid">
             <h2 class="display-5 py-5 text-center">We Specialize In</h2>
        <div class="row justify-content-center align-items-center">
       
          <div class="col-md-10">
            <div class='row'>
            <div class="col-xxl-3 pb-md-5 pb-4 col-lg-6 col-md-6 col-12">
              <a class="specialize-wrap bg-white" href="https://www.lasara.com/services/weight-loss-treatments">
              <div class="text-wrap">
              <h5 class="mb-4">Weight Loss</h5>
                     <img
                  src="<?php bloginfo('template_directory')?>/img/add.svg"
                  alt="add"
                  class="img-fluid "
                />


                </div>
                <div class="img-wrap">
                 <img
                  src="<?php bloginfo('template_directory')?>/img/specialize/weight-loss.png"
                  alt="weight-loss"
                  class="img-fluid "
                />
                </div>

</a>
            </div>
                        <div class="col-xxl-3 pb-md-5 pb-4 col-lg-6 col-md-6 col-12">
              <a class="specialize-wrap bg-white" href="https://www.lasara.com/services/testosterone-hormone-replace-therapy">
              <div class="text-wrap">
              <h5 class="mb-4">Testosterone</h5>
                     <img
                  src="<?php bloginfo('template_directory')?>/img/add.svg"
                  alt="add"
                  class="img-fluid "
                />


                </div>
                <div class="img-wrap">
                 <img
                  src="<?php bloginfo('template_directory')?>/img/specialize/testosterone.png"
                  alt="testosterone"
                  class="img-fluid "
                />
                </div>
</a>
            </div>

                        <div class="col-xxl-3 pb-md-5 pb-4 col-lg-6 col-md-6 col-12">
             <a class="specialize-wrap bg-white" href="https://www.lasara.com/services/sexual-health-treatments">
              <div class="text-wrap">
              <h5 class="mb-4">Men’s Sexual Health</h5>
                     <img
                  src="<?php bloginfo('template_directory')?>/img/add.svg"
                  alt="add"
                  class="img-fluid "
                />


                </div>
                <div class="img-wrap">
                 <img
                  src="<?php bloginfo('template_directory')?>/img/specialize/sexual-health.png"
                  alt="sexual-health"
                  class="img-fluid "
                />
                </div>
</a>
            </div>

                        <div class="col-xxl-3 pb-md-5 pb-4 col-lg-6 col-md-6 col-12">
              <a class="specialize-wrap bg-white" href="https://www.lasara.com/services/performance-peptide-protocols">
              <div class="text-wrap">
              <h5 class="mb-4">Peptides & Medication</h5>
                     <img
                  src="<?php bloginfo('template_directory')?>/img/add.svg"
                  alt="add"
                  class="img-fluid "
                />


                </div>
                <div class="img-wrap">
                 <img
                  src="<?php bloginfo('template_directory')?>/img/specialize/peptides.png"
                  alt="peptides"
                  class="img-fluid "
                />
                </div>
</a>
            </div>
</div></div>

          </div>
        </div>
      </section>

</div>

<?php get_footer(); ?>
<?php /* Template Name: BPC-157 Pages */ ?><?php /* Template Name: Example Template */ ?>
<?php get_header();
$banner_title = get_field('banner_title');
$banner_desc = get_field('banner_desc');
$banner_image = get_field('banner_image');
$banner_image = isset($banner_image) && !empty($banner_image) ? $banner_image : bloginfo('template_directory') . '/img/bg-recovery.jpg';
$first_section_img = get_field('first_section_img');
$first_section_img = isset($first_section_img) && !empty($first_section_img) ? $first_section_img : bloginfo('template_directory') . '/img/recovery-side.jpg';
$first_section_desc = get_field('first_section_desc');
$bubble_title = get_field('bubble_title');
$bubble_desc = get_field('bubble_desc');
$benefit_title = get_field('benefit_title');
$benefit_desc = get_field('benefit_desc');
$benefit_list = get_field('benefit_list');
$confident_title = get_field('confident_title');
$confident_desc = get_field('confident_desc');
$faq_title = get_field('faq_title');
$faq = get_field('faq');
?>
<div class="main-container mt-4r">
  <section class="bg-img bg-overlay-left-full py-5 bg-top bg-overlay-left-full" data-background-image="<?php echo $banner_image ?>">
    <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
      <div class="row py-lg-5">
        <div class="col-xl-4 col-md-6 offset-md-1">
          <h1 class="display-4 text-white mb-5"><?php echo $banner_title; ?></h1>
        </div>
        <div class="w-100"></div>
        <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
          <h3 class="font-light text-white line-height-lg">
            <?php echo $banner_desc; ?>
          </h3>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-5 mt-lg-5 what-we-offer">
    <div class="container">
      <?php get_template_part('template-parts/bpc-157-subpages'); ?>
    </div>
  </section>
  <section class="py-5 mt-lg-5">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-5 offset-md-1 pe-lg-5">
          <div class="bg-img-overlay-sm-right sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
            <img src="<?php echo $first_section_img ?>" alt="Old Couple" class="img-fluid border-r-1" />
          </div>
        </div>
        <div class="col-xl-4 col-md-5 ps-md-5">
          <?php echo $first_section_desc ?>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 card-border-grad-sticky animate__animated" data-animate="slideInLeft">
          <div class="card-border-grad px-0 py-5 mx-xl-5">
            <img src="<?php bloginfo('template_directory') ?>/img/cicrle-point.svg" alt="Point Circle" class="arrow-grad-right" />
            <h4 class="display-5 p-4 p-xxl-3">
              <?php echo $bubble_title ?>
              </h2>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 ps-lg-3 pt-lg-3">
          <?php echo $bubble_desc ?>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-4">
          <h2 class="mb-5">
            <?php echo $benefit_title ?>
          </h2>
          <p class="mb-4">
            <?php echo $benefit_desc ?>
          </p>
        </div>
        <div class="col-lg-8 ps-4">
          <ul class="list-check-grad bpc-protocol-list">
            <?php foreach ($benefit_list as $benefit) : ?>
              <li><?php echo $benefit['benefit_list_item']  ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid px-xl-5 px-md-4">
      <div class="bg-img bg-overlay border-r-1 overflow-hidden mx-xxl-5 py-5 px-5 bg-overlay-right-full" data-background-image="<?php bloginfo('template_directory') ?>/img/guy-using-tablet.jpg" style="background-position: center -100px">
        <div class="row justify-content-center align-items-center z-1 py-5">
          <div class="col-md-8 col-xl-8 justify-content-center">
            <h2 class="text-white display-5 text-center">
              <?php echo $confident_title ?>
            </h2>
          </div>
        </div>
        <div class="row justify-content-center align-items-center z-1 pb-4">
          <div class="col-md-8 col-xl-8 text-center text-white">
            <?php echo $confident_desc ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container cross-vertical-left">
      <h2 class="mb-5 text-center">
        <?php echo $faq_title ?>
      </h2>
      <div class="row justify-content-center cross-horizontal-right">
        <div class="col-xxl-10 col-lg-10 z-1 py-3">
          <div class="faq-accordian">
            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
              <?php $i = 1; foreach ($faq as $faq_item) : ?>
                <?php //print_r($faq_item) ?>

                <div class="accordion-item animate__animated" data-animate="slideInUp">
                  <h2 class="accordion-header" id="panelsStayOpen-<?php echo $i?>-heading1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-<?php echo $i?>-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-<?php echo $i?>-collapse1">
                      <?php echo $faq_item['question']?>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-<?php echo $i?>-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-<?php echo $i?>-heading1">
                    <div class="accordion-body">
                      <?php echo $faq_item['answer']?>
                    </div>
                  </div>
                </div>
                <?php $i++;?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-img bg-top bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/recovery-side2.jpg">
    <div class="container z-1">
      <div class="row justify-content-end py-lg-5">
        <div class="col-md-6 col-sm-8 text-md-start text-end">
          <h2 class="text-white font-black mb-4">
            Get Back to Feeling Like Yourself
          </h2>

          <p class="text-white mb-5">
            At LaSara Medical Group, we understand the unique challenges faced by men and women. With offices in Los Angeles, Orange County, and San Diego, our highest priority is to help you get back to feeling more like yourself. Peptide protocols at LaSara Medical Group provide a safe and effective way to support and improve your health. If you’re ready to find out more about our cutting-edge peptide protocols, schedule a consultation with us today!
          </p>
          <a href="#" class="btn btn-grad">SCHEDULE A CONVERSATION</a>
        </div>
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
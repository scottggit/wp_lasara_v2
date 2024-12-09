<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array(
  'itemId[in]' =>
  array('Glow-Three-Months', 'Glow-One-Month'),
  'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
  <section class="bg-img bg-top bg-overlay-left-full py-5 bg-overlay-left-full" data-background-image="<?php bloginfo('template_directory') ?>/img/bg-glow.jpg">
    <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
      <div class="row py-lg-5">
        <div class="col-xl-4 col-md-6 offset-md-1">
          <h1 class="text-white mb-5">TB-500, BPC-157, & GHK-CU Protocol to Restore Your Skin's Glow</h1>
        </div>
        <div class="w-100"></div>
        <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
          <h4 class="font-light text-white line-height-lg">
            Glow Peptide Protocol in Los Angeles, Orange County, and San
            Diego, CA
          </h4>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 mt-lg-5">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-5 offset-md-1 pe-lg-5">
          <div class="sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Old Couple" class="img-fluid border-r-1" />
          </div>
        </div>
        <div class="col-xl-4 col-md-5 ps-md-5">
          <h2 class="mb-4">Glow Peptide Protocol</h2>

          <p class="mb-0">

            Glow Peptide Protocol's blend of BPC-157, TB-500, and Copper Complex allows your body to start reversing the signs of aging and gives your skin the boost it needs to maximize its original GLOW.
          </p>
          <div class="directions mt-3 p-3">
            <h6>Directions:</h6>
            <p class="mb-0">Inject 20 units subcutaneously into the abdomen or buttocks in the morning. Use Monday to Friday and have weekends off. One month supply of Glow provides 20 individual doses.
            </p>
          </div>

          <form action="" class="chargebee-pay">
            <div class="d-flex mt-4 mb-3 align-items-center">

              <?php foreach ($all as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                <div>
                  <div class="for-one rounded d-flex position-relative cursor-pointer">
                    <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                    <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                      <strong> $<?php echo number_format(($itemPrice->price /100), 2); ?> <?php echo $key == 1 ? '(15% off, save $82 per month)' : ''; ?>
                      </strong>
                      <small> for
                        <?php echo $key == 0 ? 'one' : 'three'; ?>

                        month supply</small></label>


                  </div>
                </div>

                <?php if (get_field('plan_id')) : ?>
                  <a data-cb-item-1="<?php echo $item->id; ?>" href="javascript:void(0)" id="pay-<?php echo $itemPrice->id; ?>" class="text-white opacity-0" data-cb-type="checkout" data-cb-item-0="<?php echo $itemPrice->id ?>" data-cb-item-0-quantity="1"></a>
                <?php else : ?>
                  <a href="javascript:void(0)" data-cb-type="checkout" class="text-white opacity-0" id="pay-<?php echo $itemPrice->id; ?>" data-cb-item-0="<?php echo $itemPrice->id; ?>"></a>
                <?php endif; ?>

                <?php if ($key == count($all) - 1) break; ?>
                <div class="ps-3 pe-3">
                  or
                </div>
              <?php endforeach; ?>

            </div>

            <div class="ddd consent-wrap pt-2 mb-4">
              <input type="checkbox" id="consent-check" name="consent" style="margin-right:10px" required><label for="Patient Consent">Patient Consent</label>
            </div>

            <button type="submit" class="btn btn-grad">
              Buy Now
            </button>
          </form>

        </div>


      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="bg-img bg-img-overlay border-r-1 bg-img-w-overlay bg-top bg-img-overlay-lg-right" data-background-image="<?php bloginfo('template_directory') ?>/img/old-happy-couple-1.jpg"></div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <p class="mt-5 text-center animate__animated" data-animate="slideInUp">Our skin is the biggest organ in our body, and unfortunately, it is prone to the regular wear and tear associated with age, sun damage, and free radical damage. Regular skin maintenance, proper hydration, and sun protection can help maintain your skin's quality. But if you are looking for a way to effectively and noticeably improve your skin from the inside out, it is time to turn to peptide therapy. LaSara Medical Group in Los Angeles, San Diego, and Orange County offers a Glow Peptide Protocol to help reverse the signs of aging and restore your skin's youthful glow.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 animate__animated mb-5" data-animate="slideInLeft">
          <div class="card-border-grad p-2 p-lg-4 mx-xl-5">
            <img src="<?php bloginfo('template_directory') ?>/img/cicrle-point.svg" alt="Point Circle" class="arrow-grad-right" />
            <img src="<?php bloginfo('template_directory') ?>/img/cicrle-point-down.svg" alt="Point Circle" class="arrow-grad-bottom" />
            <h2 class="h1 p-4 p-xxl-5 text-center">
              What is a Glow Peptide Protocol?
            </h2>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5 mb-5">
          <p>
            Peptides have gained popularity for their ability to offer men and women the extra support they need to enhance their bodies and mind. Peptides are the building blocks of proteins and occur naturally in our bodies. Supplying our bodies with additional curated peptides helps improve many crucial bodily functions while posing minimal or non-existent risks. </p>
          <p>Because scientists discovered that a combination of several different peptides could provide more benefits, we ensure that our Glow Peptide Protocol includes multiple peptides that complement each other. As a result, the Glow Peptide Protocol's blend of BPC-157, TB-500, and Copper Complex allows your body to start reversing the signs of aging and gives your skin the boost it needs to maximize its original GLOW.</p>
        </div>
        <div class="col-md-4 col-lg-2 offset-lg-5">
          <h3 class="text-dark">GHK-Cu</h3>
          <p>GHK-Cu is a naturally occurring copper complex that was first identified in human plasma. GHK-Cu has a variety of roles in the human body, including promoting wound healing, attracting immune cells, stimulating collagen production, and providing antioxidant and anti-inflammatory effects. GHK-Cu also plays a significant role in signaling tissue remodeling, removing damaged/scarred tissue, and generating new, healthy tissue.</p>
        </div>
        <div class="col-md-4 col-lg-2">
          <h3 class="text-dark">TB-500</h3>
          <p>TB-500's primary function is to stimulate the production of T cells, which are an essential part of the immune system. TB-500 also plays a vital role in protecting, regenerating, and remodeling injured or damaged tissues. TB-500 is currently being trialed as a potential therapy for HIV, AIDS, and Influenza and has most recently been shown to help regrow hair in addition to PRP.</p>
        </div>
        <div class="col-md-4 col-lg-2">
          <h3 class="text-dark">BPC-157</h3>
          <p>BPC-157 is composed of 15 amino acids and is a partial sequence of body protection compounds (BPC) that is discovered in and isolated from human gastric juice. Benefits of BPC-157 include increased cell regeneration, improved wound healing, organ damage healing, and boosted bone and joint healing.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="ribbon-container animate__animated" data-animate="slideInLeft">
    <div class="cross-vertical-right py-5">
      <div class="col-11 ps-0 py-lg-5">
        <div class="ribbon-grad bg-img bg-overlay py-lg-5 px-3 bg-top ribbon-grad-left bg-overlay-right-full" data-background-image="<?php bloginfo('template_directory') ?>/img/testosterone-intro2.jpg">
          <div class="row justify-content-center align-items-center py-5 z-1">
            <div class="col-md-6 col-xl-5 pt-5 pb-md-5 pe-xl-5">
              <h2 class="text-white">Benefits of Glow Peptide Protocol</h2>
              <p class="text-white">Glow Peptide Protocol at LaSara Medical Group can enhance your skincare regimen and restore healthy, radiant skin. Benefits of Glow Peptide Protocol include:</p>
            </div>
            <div class="col-md-6 col-xl-5 py-5">
              <ul class="list-check-grad text-white">
                <li>Reverses signs of aging</li>
                <li>Improves wound healing</li>
                <li>Attracts immune cells</li>
                <li>Stimulates collagen</li>
                <li>Promotes blood vessel growth</li>
                <li>Increases cellular regeneration</li>
                <li>Reduces inflammation</li>
                <li>Protects, regenerates, and remodels damaged tissues</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container cross-vertical-left">
      <h2 class="mb-5 text-center">FAQs About Glow Peptide Protocol</h2>
      <div class="row justify-content-center cross-horizontal-right">
        <div class="col-xxl-10 col-lg-10 z-1 py-3">
          <div class="faq-accordian">
            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">Who is a Good Candidate for Glow Peptide Protocol?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                  <div class="accordion-body">
                    If you are ready to improve your skin's quality in a highly effective way, the Glow Peptide Protocol at LaSara Medical Group is right for you! Both men and women can benefit from this peptide protocol. Many of LaSara’s patients pair Glow Peptide Protocol with shockwave therapy to maximize their benefits. Peptide protocols are popular support solutions for the body's many crucial processes due to their ease of administration, high effectiveness, and long-lasting results. If you'd like to find out whether you are a good candidate for our Glow Peptide Protocol, don't hesitate to make a consultation appointment with one of our offices!
                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                    Are Peptides Like Steroids?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                  <div class="accordion-body">
                    No, peptides are nothing like steroids. Peptides are naturally occurring amino acids in the body, whereas steroids are foreign and not natural. Adding peptides to your regiment of care only enhances or optimizes the body's biological function and does not harm or negatively impact your body's natural production of peptides or hormones.
                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                    Are There Any Side Effects of the Glow Protocol?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                  <div class="accordion-body">
                    Peptides are generally safe and well-tolerated by both men and women. You can think of peptides as just another way to optimize the health of your skin in the same way that hydration, UV protection, or moisturizing supports your skin's health.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-img bg-top bg-overlay custom-erectile-dysfunction-bg-position bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/guy-using-tablet.jpg">
    <div class="container z-1">
      <div class="row justify-content-end py-lg-5">
        <div class="col-md-6 col-sm-8 text-md-start text-end">
          <h2 class="text-white font-black mb-4">
            Get Back to Feeling Like Yourself
          </h2>

          <p class="text-white mb-5">At LaSara Medical Group, we understand the unique challenges faced by men and women. With offices in Los Angeles, Orange County, and San Diego, our highest priority is to help you get back to feeling more like yourself. Peptide protocols at LaSara Medical Group provide a safe and effective way to support and improve your health. If you're ready to find out more about our cutting-edge peptide protocols, schedule a consultation with us today!
            <a href="<?php echo get_site_url() ?>/contactus" class="text-white text-underline font-bold">schedule a consultation</a>
            with us today!
          </p>
          <a href="<?php echo get_site_url() ?>/contactus" class="btn btn-grad">SCHEDULE A CONVERSATION</a>
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

<script>
  jQuery(function() {
    jQuery('.chargebee-pay').submit(function(e) {
      e.preventDefault();
      let supply = $('.chargebee-pay').find('input[name="supply"]:checked').val();
      document.getElementById(`pay-${supply}`).click();
      return;
    })
  })
</script>
<?php get_footer(); ?>
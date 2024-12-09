<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array(
  'itemId[in]' =>
  array('Strength-Three-Months', 'Strength-One-Month'),
  'sortBy[asc]' => 'id'

));
?>

<?php get_header(); ?>
<div class="main-container mt-4r">
  <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
    <div class="container-fluid py-5 z-1 cross-vertical-right">
      <div class="row py-lg-5 text-center justify-content-center z-1">
        <div class="col-xl-12 col-md-12">
          <h1 class="display-4 text-white mb-5 ">
            Peptides for Muscle Growth
          </h1>
        </div>
        <ol class="breadcrumb">
          <li><a href="<?php echo get_site_url() ?>">Home</a></li>
          <li><a href="<?php echo get_site_url() ?>/services/peptide-general-information">Peptides</a></li>
          <li><a href="<?php echo get_site_url() ?>/services/strength-protocol">Strength Peptide Protocol</a></li>
        </ol>

      </div>
    </div>
  </section>


  <section class="py-5 mt-lg-5">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-5 offset-md-1 pe-lg-5">
          <div class="sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
            <img src="<?php bloginfo('template_directory') ?>/img/strength-intro.png" alt="strength" class="img-fluid border-r-1" />
          </div>
        </div>
        <div class="col-xl-4 col-md-5 ps-md-5">
          <h2 class="mb-4">Strength peptide protocol is a high octane blend of MGF, N-Acetyl- Semax, and CJC 1295/ GHRP 6.</h2>

          <p class="mb-0">
            These peptides allow for natural hormone release which helps stimulate muscle growth, recovery, and focus. This protocol will pack on muscle and increase personal bests.
          </p>
          <div class="directions mt-3 p-3">
            <h6>Directions:</h6>
            <p class="mb-0">
              Inject 15 units subcutaneously into the abdomen or buttocks in the evening. Use Monday to Friday and have weekends off. One month supply of Strength provides 20 individual doses.
            </p>
          </div>
          <form action="" class="chargebee-pay">

            <div class="d-flex mt-4 mb-3 align-items-center">

              <?php foreach ($all as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                <div>
                  <div class="for-one rounded d-flex position-relative cursor-pointer">
                    <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                    <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                      <strong> $<?php echo number_format(($itemPrice->price / 100), 2); ?> <?php echo $key == 1 ? '(15% off, save $82 per month)' : ''; ?>
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
  <section class="ribbon-container animate__animated ribbon-grad bg-img bg-overlay py-5 px-3 ribbon-grad-left bg-overlay-right-full" data-animate="slideInLeft" data-background-image="<?php bloginfo('template_directory') ?>/img/bg-ribbon.jpg">
    <div class="container">
      <h2 class="text-white mb-4 text-center z-1">
        Ingredients
      </h2>


      <div class="row px-md-5 mb-5">
        <div class="col-md">

          <div class="ingredients-wrap px-md-5  mx-md-5">

            <div class="row py-3 z-1">
              <div class="col-md  ">
                <h5 class="text-white border-right-after">
                  MECHANO GROWTH HORMONE (MGF):
                </h5>
              </div>


            </div>
            <div class="row z-1">

              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 pe-md-5">

                <p class="text-white mb-5 mb-md-0">
                  MGF is a naturally occurring peptide hormone that is produced in muscles and activated when the muscle is overloaded during weight training. When a muscle experiences stress due to weight training, MGF is released to support muscle repair, hypertrophy (muscle growth), and activates muscle satellite (stem) cells. The MGF half-life that humans produce naturally lasts for only a few minutes after weight training, whereas synthetic peptides such as MGF have a half-life of several days. The benefit of a longer half-life is the duration of gains realized from a single work out can continue on for days rather than just a few hours. </p>
              </div>


            </div>
          </div>

        </div>
      </div>
      <div class="row px-md-5">
        <div class="col-md">

          <div class="ingredients-wrap px-md-5  mx-md-5">

            <div class="row py-3 z-1">
              <div class="col-md  ">
                <h5 class="text-white border-right-after">
                  N-ACETYL-SEMAX:
                </h5>
              </div>


            </div>
            <div class="row z-1">

              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 pe-md-5">

                <p class="text-white mb-5 mb-md-0">
                  Semax is a melanocortin which affects learning processes and exploratory behavior, regeneration and healing, accelerates nerve regeneration and improves neuromuscular performance. Semax is used as a preventative measure to protect against chronic disease and to acutely help improve memory and learning processes. It has been used to prevent blood clotting, fibrotic damage to the vascular system, and presents a protective effect on the gastric system. Research shows that it helps increase physical performance and adaptation capacities in exposure to high-intensity exercise. </p>
              </div>



            </div>
          </div>

        </div>
      </div>



      <div class="row px-md-5 mt-5">
        <div class="col-md">

          <div class="ingredients-wrap px-md-5  mx-md-5">

            <div class="row py-3 z-1">
              <div class="col-md  ">
                <h5 class="text-white border-right-after">
                  CJC 1295/GHRP6:
                </h5>
              </div>


            </div>
            <div class="row z-1">

              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 pe-md-5">

                <p class="text-white mb-5 ">
                  CJC 1295 and GHRP6 in combination work synergistically to increase levels of growth hormone. Together, they can stimulate appetite, improve sleep quality, enhance immune system function, and increase muscle growth. Furthermore, it has been found to have positive effects on the heart muscle, memory formation, scar formation, sexual desire, and the neurons involved in Parkinson’s disease.</p>

              </div>


            </div>


          </div>

        </div>
      </div>

    </div>
  </section>



  <section class="py-5 bg-img custom-erectile-dysfunction-bg-position bg-overlay  bg-overlay-right bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/painful-get-back.jpg">
    <div class="container z-1">
      <div class="row justify-content-end py-lg-5">
        <div class="col-md-6 col-sm-8 text-md-start text-end">
          <h2 class="text-white font-black mb-4">
            Get Back to Feeling Like Yourself
          </h2>

          <p class="text-white mb-5">
            At LaSara Medical Group, we understand the unique challenges faced by men and women. With offices in Los Angeles, Orange County, and San Diego, our highest priority is to help you get back to feeling more like yourself. Peptide protocols at LaSara Medical Group provide a safe and effective way to support and improve your health. If you’re ready to find out more about our cutting-edge peptide protocols, schedule a consultation with us today!

          </p>
          <a href="<?php echo get_site_url() ?>/contact" class="btn btn-grad">Contact Us</a>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 mt-lg-5 what-we-offer">
    <div class="container">
      <?php get_template_part('template-parts/peptide-protocols'); ?>
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
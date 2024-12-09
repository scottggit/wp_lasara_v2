<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array(
  'itemId[in]' =>
  array('Vitality-Three-Months', 'Vitality-One-Month'),
  'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
  <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
    <div class="container-fluid py-5 z-1 cross-vertical-right">
      <div class="row py-lg-5 text-center justify-content-center z-1">
        <div class="col-xl-12 col-md-12">
          <h1 class="display-4 text-white mb-5 ">
            Vitality Peptide Protocol
          </h1>
        </div>
        <ol class="breadcrumb">
          <li><a href="<?php echo get_site_url() ?>">Home</a></li>
          <li><a href="<?php echo get_site_url() ?>/services/peptide-general-information">Peptides</a></li>
          <li><a href="<?php echo get_site_url() ?>/services/vitality-protocol">Vitality Peptide Protocol</a></li>
        </ol>

      </div>
    </div>
  </section>


  <section class="py-5 mt-lg-5">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-5 offset-md-1 pe-lg-5">
          <div class="sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
            <img src="<?php bloginfo('template_directory') ?>/img/vitality-intro.jpg" alt="Old Couple" class="img-fluid border-r-1" />
          </div>
        </div>
        <div class="col-xl-4 col-md-5 ps-md-5">
          <h2 class="mb-4">The Vitality peptide protocol was designed to increase libido, sexual hormone function, and overall sexual performance for men.</h2>

          <p class="mb-0">
            This is a great option for a more natural approach to sexual vitality and it’s free of side effects. This high powered formula includes three peptides combined into one easy to use subcutaneous injection. Both men and women can use this formula.
          </p>
          <div class="directions mt-3 p-3">
            <h6>Directions:</h6>
            <p class="mb-0">Inject 15 units subcutaneously into the abdomen or buttocks in the evening. Use Monday to Friday and have weekends off. One month supply of Vitality provides 20 individual doses.
            </p>
          </div>
          <form action="" class="chargebee-pay">

            <div class="d-flex mt-4 mb-3 align-items-center">

              <?php foreach ($all as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                <div>
                  <div class="for-one rounded d-flex position-relative cursor-pointer">
                    <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                    <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                      <strong> $<?php echo number_format(($itemPrice->price / 100), 2); ?>  <?php echo $key == 1 ? '(15% off, save $82 per month)' : ''; ?>
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

  <section class="ribbon-container animate__animated ribbon-grad bg-img bg-overlay py-5 px-3 ribbon-grad-left bg-overlay-right-full mb-5" data-animate="slideInLeft" data-background-image="<?php bloginfo('template_directory') ?>/img/bg-ribbon.jpg">
    <div class="container">
      <h2 class="text-white mb-4 text-center z-1">
        Ingredients
      </h2>
      <div class="row px-md-5">
        <div class="col-md">

          <div class="ingredients-wrap px-md-5  mx-md-5">

            <div class="row py-3 z-1">
              <div class="col-md  ">
                <h5 class="text-white border-right-after">
                  PT 141
                </h5>
              </div>


            </div>
            <div class="row z-1">

              <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 pe-md-5">

                <p class="text-white mb-5 mb-md-0">
                  <strong> PTPT 141</strong> is a unique peptide in that it stimulates the Melanocortin 4 Receptor, which is known to produce physiological responses in the body such as sexual arousal in the central nervous system and influence sexual behavior. PT-141 works via a different mechanism than drugs like Viagra and helps treat sexual arousal disorders in both men and women.
                </p>
              </div>
              <div class="col-lg-4 col-md-5 ps-md-6 ">
                <p class="text-white">For men, benefits include:</p>
                <ul class="list-check-grad text-white">
                  <li>Increased libido</li>
                  <li> Improved sexual performance</li>
                  <li>Increased sexual desire </li>
                  <li>Stronger erections</li>
                  <li>Greater arousal (up to 72 hours) </li>
                  <li>Enhanced energy</li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-5 ps-md-3 ">
                <p class="text-white">For women, benefits include:</p>
                <ul class="list-check-grad text-white">

                  <li>Greater sexual fulfillment</li>
                  <li>Increased sexual desire</li>
                  <li> Enhanced relationships</li>
                  <li> Enhanced energy</li>
                </ul>
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
                  KISSPEPTIN
                </h5>
              </div>


            </div>
            <div class="row z-1">

              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 pe-md-5">

                <p class="text-white mb-5 mb-md-0">
                  Kisspeptin acts to control hormone secretion as it relates to reproduction and sexual activity. Kisspeptin can influence testosterone levels and sex-related behaviors like drive and motivation. Additionally, Kisspeptin is known to reduce anxiety and stress levels.
                </p>
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
                  PINEALON
                </h5>
              </div>


            </div>
            <div class="row z-1">

              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 pe-md-5">

                <p class="text-white mb-5 ">
                  Pinealon is a tri-peptide containing glutamyl-asparagine-arginine. The benefits of pinealon are particularly prominent in the brain and cardiovascular system. The tri-peptide is thought to reduce free radical damage and reduce or even reverse the long-term damage caused by reactive oxygen species (free radicals). Sexual dysfunctions are typically an outcome of poor vascular health where the blood vessels have closed down and hardened. Pinealon helps to reverse the damaged areas of poor blood flow and restore natural functionality.
                </p>
                <p class="text-white">
                  In addition to benefiting sexual health regeneration, Pinealon was developed to recover the brain and to treat poor memory, attention difficulties, brain injury, stroke, high stress, chronic fatigue, depression, insomnia, irritability, Alzheimer’s, Parkinson’s diseases, multiple sclerosis, as well as to maintain the functional status of the brain in elderly patients. </p>
              </div>


            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section class="py-5 bg-img bg-top custom-erectile-dysfunction-bg-position bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/vitality-get-back.jpg">
    <div class="container z-1">
      <div class="row justify-content-end py-lg-5">
        <div class="col-md-6 col-sm-8 text-md-start text-end">
          <h2 class="text-white font-black mb-4">
            Get Back to Your Daily Life
          </h2>

          <p class="text-white mb-5">
            At LaSara Medical Group, we understand the unique challenges faced by men and women. With offices in Los Angeles, Orange County, and San Diego, our highest priority is to help you get back to feeling more like yourself. Peptide protocols at LaSara Medical Group provide a safe and effective way to support and improve your health. If you’re ready to find out more about our cutting-edge peptide protocols, schedule a consultation
            <a href="<?php echo get_site_url() ?>/contact" class="text-white text-underline font-bold">schedule a consultation</a>
            with us today!
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
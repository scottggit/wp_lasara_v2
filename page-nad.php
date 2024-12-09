<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$product1 = ItemPrice::all(array(
  'itemId[in]' =>
  array('NAD-Patch-12-Total', 'NAD-Patch'),
  'sortBy[desc]' => 'id'

));

$product2 = ItemPrice::all(array(
  'itemId[in]' =>
  array('NAD-Nasal-Spray'),
  'sortBy[asc]' => 'id'

));

$product3 = ItemPrice::all(array(
  'itemId[in]' =>
  array('NAD-Three-Months', 'NAD-One-Month'),
  'sortBy[asc]' => 'id'

));


?>

<div class="main-container mt-4r">
  <section class="bg-img bg-overlay bg-overlay-left-full py-5 bg-center" data-background-image="<?php bloginfo('template_directory') ?>/img/relaxing.jpg">
    <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
      <div class="row py-lg-5">
        <div class="col-xl-4 col-md-6 offset-md-1">
          <h1 class="display-4 text-white mb-5">
            NAD+ Nasal Spray
          </h1>
        </div>
        <div class="w-100"></div>
        <div class="col-xxl-3 col-xl-5 col-md-6 offset-md-1">
          <h3 class="font-light text-white line-height-lg">
            Improve energy levels, enhance your focus, and sleep better

          </h3>
        </div>
      </div>
    </div>
  </section>


  <section class="py-5 mt-lg-5">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-5 offset-md-1 pe-lg-5">
          <div class="sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
            <div class="product product1 d-none">
              <img src="https://www.lasara.com/wp-content/uploads/2024/01/Nasal-Spray-Bottle-Stock-Image.png" class="img-fluid border-r-1" />

            </div>

            <div class="product product2 d-none">
              <img src="https://www.lasara.com/wp-content/uploads/2024/01/Nasal-Spray-Bottle-Stock-Image.png" class="img-fluid border-r-1" />

            </div>

            <div class="product product3">
              <img src="https://www.lasara.com/wp-content/uploads/2023/02/NADVial-1.jpg" class="img-fluid border-r-1" />

            </div>

          </div>
        </div>
        <div class="col-xl-4 col-md-5 ps-md-5">
          <h2 class="mb-4">NAD+ Protocols</h2>

          <p class="product product1 product2 mb-0">
            NAD+, or nicotinamide adenine dinucleotide, is a coenzyme that can be found in all cells in the body. NAD+ is involved in hundreds of metabolic processes in the body and helps supply energy and regulate cellular functions.
          </p>

          <p class="product product3 d-none mb-0">
            For subcutaneous injection use.NAD+, or nicotinamide adenine dinucleotide, is a coenzyme that can be found in all cells in the body. NAD+ is involved in hundreds of metabolic processes in the body and helps supply energy and regulate cellular functions.
          </p>

          <?php /*?>
          <form action="" class="chargebee-pay">
            <select name="product" id="" class="form-control mt-4 mb-3" required>
              <option value="" selected disabled>Select Product</option>
              <?php // <option value="product1">NAD+ 600mg/mL Wearable Patch</option>  ?>
              <option value="product2">NAD+ Nasal Spray</option>
              <option value="product3">NAD+ Subcutaneous Injection</option>
            </select>


            <div class="directions product product1 d-none mt-3 p-3">
              <h6>Directions:</h6>
              <p class="mb-0">Apply one patch to hairless part of body 1-2 times weekly.
              </p>
            </div>
            <div class="directions product product2 d-none mt-3 p-3">
              <h6>Directions:</h6>
              <p class="mb-0">Instill one to three sprays into one or both nostril in the morning seven days a week or as needed. One 15mL spray bottle provides 50-150 individual doses.
              </p>
            </div>
            <div class="directions product product3 d-none mt-3 p-3">
              <h6>Directions:</h6>
              <p class="mb-0">Inject 50 units subcutaneously into the abdomen or buttocks in the morning. Use Monday to Friday and have weekends off. One month supply of NAD+ provides 20 individual doses.
              </p>
            </div>

            <div class="d-flex mt-4 mb-3 align-items-center product1 product d-none">
              <?php foreach ($product1 as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                <div>
                  <div class="for-one rounded d-flex position-relative cursor-pointer">
                    <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                    <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                      <strong> $<?php echo $itemPrice->price / 100; ?> <?php echo $key == 1 ? '(15% off)' : ''; ?>
                      </strong>
                      <small>
                        <?php echo $key == 0 ? 'Includes 6 individual treatment patches with 600mg per patch' : 'Includes 12 individual treatment patches with 600mg per patch'; ?>

                      </small></label>


                  </div>
                </div>

                <a href="javascript:void(0)" data-cb-type="checkout" class="text-white opacity-0" id="pay-<?php echo $itemPrice->id; ?>" data-cb-item-0="<?php echo $itemPrice->id; ?>"></a>

                <?php if ($key == count($product1) - 1) break; ?>
                <div class="ps-3 pe-3">
                  or
                </div>
              <?php endforeach; ?>

            </div>

            <div class="d-flex mt-4 mb-3 align-items-center product2 product d-none">
              <?php foreach ($product2 as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                <div>
                  <div class="for-one rounded d-flex position-relative cursor-pointer">
                    <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply1" value="<?php echo $itemPrice->id; ?>" required>
                    <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                      <strong> $<?php echo $itemPrice->price / 100; ?> <?php echo $key == 1 ? '(15% off, save $82 per month)' : ''; ?>
                      </strong>
                      <small> 15mL spray bottle provides 50-150 doses depending on how many sprays</small></label>


                  </div>
                </div>

                <a href="javascript:void(0)" data-cb-type="checkout" class="text-white opacity-0" id="pay-<?php echo $itemPrice->id; ?>" data-cb-item-0="<?php echo $itemPrice->id; ?>"></a>

                <?php if ($key == count($product2) - 1) break; ?>
                <div class="ps-3 pe-3">
                  or
                </div>
              <?php endforeach; ?>

            </div>

            <div class="d-flex mt-4 mb-3 align-items-center product3 product d-none">
              <?php foreach ($product3 as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                <div>
                  <div class="for-one rounded d-flex position-relative cursor-pointer">
                    <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply2" value="<?php echo $itemPrice->id; ?>" required>
                    <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                      <strong> $<?php echo $itemPrice->price / 100; ?>
                      </strong>
                      <small> for
                        <?php echo $key == 0 ? 'one' : 'three'; ?>

                        month supply</small></label>


                  </div>
                </div>

                <a href="javascript:void(0)" data-cb-type="checkout" class="text-white opacity-0" id="pay-<?php echo $itemPrice->id; ?>" data-cb-item-0="<?php echo $itemPrice->id; ?>"></a>

                <?php if ($key == count($product3) - 1) break; ?>
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
          
          <a href="<?php echo get_site_url() ?>/peptide-medical-form" class="btn btn-grad btn-long mt-4">
            <span class="d-block">Complete Medical Form</span> &
            <span class="d-block">Schedule Consultation to Purchase</span>
          </a>
          <?php */ ?>
			<div class="d-flex">
				<!-- Calendly link widget begin -->
				<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
				<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async=""></script>
				<a href="" class="btn btn-grad btn-long mt-4" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/lasara-fernando/fc?hide_gdpr_banner=1'});return false;">Get Started</a>
				<!-- Calendly link widget end -->
			</div>
        </div>


      </div>
    </div>
  </section>



  <section class="py-5">
    <div class="container">
      <div class="bg-img bg-img-overlay border-r-1 bg-img-w-overlay bg-top bg-img-overlay-lg-right" data-background-image="<?php bloginfo('template_directory') ?>/img/penile-injection-intro.jpg"></div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <p class="mt-5 text-center animate__animated" data-animate="slideInUp">
            If you'd like to wake up less groggy, have more sustainable energy, and have better focus, NAD+ could be the solution that helps to take you to the next level of your health journey. NAD+ is a key component of creating energy in the body and regulating critical cellular processes. LaSara Medical Group in Los Angeles, Orange County, and San Diego, CA, offers easily administered NAD+ treatments to help improve energy levels, support mental clarity, and slow down the effects of aging.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 card-border-grad-sticky animate__animated" data-animate="slideInLeft">
          <div class="card-border-grad p-2 p-lg-4 mx-xl-5">
            <img src="<?php bloginfo('template_directory') ?>/img/cicrle-point.svg" alt="Point Circle" class="arrow-grad-right" />
            <h2 class="display-4 p-4 p-xxl-5">

              What is NAD+?

            </h2>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5">
          <p>
            NAD+, or nicotinamide adenine dinucleotide, is a coenzyme that can be found in all cells in the body. NAD+ is involved in hundreds of metabolic processes in the body and helps supply energy and regulate cellular functions. Unfortunately, the levels of NAD+ normally diminish with age and leave the body exposed to the negative effects of aging like slowed down metabolism, lack of energy, and less elastic skin.
          </p>
          <p>At LaSara Medical Group, our staff is excited to offer you a way to replenish your NAD+ levels in three simple ways: nasal sprays, ionic patches for dermal application, and subcutaneous injections. Your LaSara Medical provider will discuss your goals and specific needs with you and recommend the best mode of delivery.
          </p>

        </div>
      </div>
    </div>
  </section>
  <section class="ribbon-container animate__animated" data-animate="slideInLeft">
    <div class="cross-vertical-right py-5">
      <div class="col-11 ps-0 py-lg-5">
        <div class="ribbon-grad bg-img bg-overlay py-lg-5 px-3  bg-top ribbon-grad-left bg-overlay-right-full" data-background-image="<?php bloginfo('template_directory') ?>/img/benifits-testosterone.jpg">
          <div class="row justify-content-center align-items-center py-5 z-1">
            <div class="col-md-6 col-xl-5 pt-5 pb-md-5 pe-xl-5">
              <h2 class="text-white display-3">
                Benefits of NAD+
              </h2>
              <p class="text-white">
                Replenish your NAD+ levels and get back to doing more of what you love with LaSara Medical Group's easy and effective NAD+ protocols. Benefits of NAD+ include:
              </p>
            </div>
            <div class="col-md-6 col-xl-5 py-5 border-md-left border-white ps-md-5">
              <ul class="list-check-grad text-white ps-xl-5">
                <li>Improves energy levels</li>
                <li>Helps reduce cravings</li>
                <li>Supports mental clarity</li>
                <li>Improves mood</li>
                <li>Supports DNA health and repair</li>
                <li>Helps turn off cells that accelerate degenerative aging</li>
                <li>Improves post-work recovery
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container cross-vertical-left">
      <h2 class="mb-5 text-center">
        FAQs About NAD+

      </h2>
      <div class="row justify-content-center cross-horizontal-right">
        <div class="col-xxl-10 col-lg-10 z-1 py-3">
          <div class="faq-accordian">
            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                    Does NAD+ Naturally Occur in the Body?

                  </button>
                </h2>
                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                  <div class="accordion-body">
                    Yes! When our cells break down carbohydrates and fats to use them for energy, that energy is stored by creating ATP and NADH. To produce energy, your body's electrons go through the mitochondrial electron chain. NADH is the most significant carrier of these electrons, and once it gives up the electrons, NADH becomes NAD+. You will tend to feel more vital and healthy when your body has the proper ingredients to use these electrons. Without that, you are likely to feel sicker and weaker.

                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                    Who is a Good Candidate for NAD+?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                  <div class="accordion-body">
                    Both men and women who suffer from reduced energy levels, feel sluggish and fatigued, or experience mental fog can benefit from NAD+ use. Supplying your system with additional NAD+ can help relieve these unwanted symptoms and provide additional benefits. Some early research also suggests that NAD+ may help protect against the development of neurodegenerative conditions and can help in addiction recovery.
                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                    Are There Any Side Effects of the Flow Protocol?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                  <div class="accordion-body">
                    Side effects from NAD+ are usually mild, with the benefits greatly outweighing the risks. However, you could experience short-lasting and mild side effects like nausea, bloating, and redness at the injection site. If you have any questions or concerns about handling NAD+ therapy, please don't hesitate to schedule a consultation appointment with one of our offices!


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-img bg-overlay bg-top bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/pelvic-get-back.jpg">
    <div class="container z-1">
      <div class="row justify-content-end py-lg-5">
        <div class="col-md-6 col-sm-8 text-md-start text-end">
          <h2 class="text-white font-black mb-4">
            Get Back to Feeling Like Yourself

          </h2>

          <p class="text-white mb-5">
            At LaSara Medical Group, we understand the unique challenges faced by men and women. With offices in Los Angeles, Orange County, and San Diego, our highest priority is to help you get back to feeling more like yourself and provide you with the energy you need to tackle the day. NAD+ therapy at LaSara Medical Group provides a safe and effective way to support and improve your health. If you're ready to find out more about our cutting-edge NAD+ protocols, schedule a consultation with us today!

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
    jQuery('select[name="product"]').on('change', function() {
      let selected = jQuery(this).val();
      jQuery(`.product`).addClass('d-none');
      jQuery(`.product`).find('input').attr('disabled', 'disabled');
      jQuery(`.${selected}`).removeClass('d-none');
      jQuery(`.${selected}`).find('input').removeAttr('disabled');
    });

    jQuery('.chargebee-pay').submit(function(e) {
      e.preventDefault();
      let selected = $('select[name="product"]').val();

      let supply = jQuery(`.${selected}`).find('input:checked').val();
      console.log(supply);

      document.getElementById(`pay-${supply}`).click();
      return;
    })
  })
</script>
<?php get_footer(); ?>
<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$product1 = ItemPrice::all(array(
  'itemId[in]' =>
  array('BPC157-Vial'),
  'sortBy[asc]' => 'id'

));

$product2 = ItemPrice::all(array(
  'itemId[in]' =>
  array('BPC157-Rub-On'),
  'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
  <section class="bg-img bg-overlay-left-full py-5 bg-top bg-overlay-left-full" data-background-image="<?php bloginfo('template_directory') ?>/img/bg-recovery.jpg">
    <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
      <div class="row py-lg-5">
        <div class="col-xl-4 col-md-6 offset-md-1">
          <h1 class="display-4 text-white mb-5">BPC-157 Peptide Erectile Dysfunction Treatment</h1>
        </div>
        <div class="w-100"></div>
        <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
          <h3 class="font-light text-white line-height-lg">
            Recovery Protocol in Los Angeles, Orange County, and San Diego,
            CA
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
            <div class="product product1">
              <img src="https://www.lasara.com/wp-content/uploads/2023/02/BPC-157-vial.jpg" class="img-fluid border-r-1" />

            </div>

            <div class="product product2 d-none">
              <img src="https://www.lasara.com/wp-content/uploads/2023/02/BPC157-Rub-on-Cream-1.png" class="img-fluid border-r-1" />

            </div>

          </div>
        </div>
        <div class="col-xl-4 col-md-5 ps-md-5">
          <h2 class="mb-4">Recovery with BPC-157</h2>

          <p class="mb-0">
            Recovery Protocol uses Pentadecapeptide BPC-157, which is composed of 15 amino acids and is a partial sequence of body protection compounds (BPC) discovered in and isolated from human gastric juice. Recent experiments demonstrated that BPC-157 could accelerate the healing of many different wounds, including tendon-to-bone healing and superior healing of damaged ligaments.
          </p>

          <form action="" class="chargebee-pay">
            <select name="product" id="" class="form-control mb-2 mt-4" required>
              <option value="" selected disabled>Select Product</option>
              <option value="product1">Recovery with BPC-157 - Vial</option>
             <?php /* <option value="product2">Recovery with BPC-157 - Rub On</option> */ ?>
            </select>

          <div class="directions product product1 d-none mt-3 p-3">
            <h6>Directions:</h6>
            <p class="mb-0">Inject 15 units subcutaneously into the abdomen or buttocks in the morning. Use Monday to Friday and have weekends off. One vial of BPC-157 provides 30 individual doses.
            </p>
          </div>
          <div class="directions product product2 d-none mt-3 p-3">
            <h6>Directions:</h6>
            <p class="mb-0">Apply 5 pumps (1mL) to desired area once daily.
            </p>
          </div>

            <div class="d-flex mt-4 mb-3 align-items-center product1 product d-none">
              <?php foreach ($product1 as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                <div>
                  <div class="for-one rounded d-flex position-relative cursor-pointer">
                    <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                    <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                      <strong> $<?php echo $itemPrice->price / 100; ?> <?php echo $key == 1 ? '(15% off, save $82 per month)' : ''; ?>
                      </strong>
                      <small> 5mL vial provides 5 weeks of treatment </small></label>


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
                      <small> 2mg/mL Cream 30mL provides 30 doses</small></label>


                  </div>
                </div>

                <a href="javascript:void(0)" data-cb-type="checkout" class="text-white opacity-0" id="pay-<?php echo $itemPrice->id; ?>" data-cb-item-0="<?php echo $itemPrice->id; ?>"></a>

                <?php if ($key == count($product2) - 1) break; ?>
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


  <!-- <section class="pt-5 mt-lg-5 what-we-offer">
        <div class="container">
          <?php get_template_part('template-parts/bpc-157-subpages'); ?>
        </div>
      </section> -->
  <section class="py-5 mt-lg-5">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-5 offset-md-1 pe-lg-5">
          <div class="bg-img-overlay-sm-right sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
            <img src="<?php bloginfo('template_directory') ?>/img/recovery-side.jpg" alt="Old Couple" class="img-fluid border-r-1" />
          </div>
        </div>
        <div class="col-xl-4 col-md-5 ps-md-5">
          <p>
            There are many instances in which our body needs to recover.
            Wounds, damaged ligaments, torn muscles, and gastric ulcers are
            all examples of issues that require recovery and healing. The
            healing process is a complex biological process with multiple
            stages and many types of cells. A specific peptide called
            BPC-157 has been found to aid the healing process and support
            recovery. LaSara Medical Group’s Recovery Protocol offers a safe
            and effective way to accelerate the body’s healing process,
            allowing you to return to your daily life with ease.
          </p>
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
              Recovery with BPC-157 Peptide Protocol
              </h2>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 ps-lg-3 pt-lg-3">
          <p>
            Peptides are amino acids that make up the building blocks of protein. In the body, peptides serve as signaling molecules that communicate with and direct our cells. These signals can help trigger actions like tissue repair and promote healing through the delivery of anti-inflammatory compounds. Delivering target peptides to the body can help support recovery and healing functions.
          </p>
          <p class="m-0">
            The Recovery Protocol at LaSara Medical Group uses Pentadecapeptide BPC-157, which is composed of 15 amino acids and is a partial sequence of body protection compounds (BPC) discovered in and isolated from human gastric juice. Recent experiments demonstrated that BPC-157 could accelerate the healing of many different wounds, including tendon-to-bone healing and superior healing of damaged ligaments.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-4">
          <h2 class="mb-5">
            Benefits of Recovery Protocol
          </h2>
          <p class="mb-4">
            The Recovery Protocol at LaSara Medical Group can safely and effectively help recovery and healing. Benefits of the Recovery Protocol include:
          </p>
        </div>
        <div class="col-lg-4 col-md-6 ps-4">
          <ul class="list-check-grad mb-4">
            <li>Repairs lower intestinal damage </li>
            <li>Cures and heals stomach ulcers</li>
            <li>Improves wound healing </li>
            <li>Increases cellular regeneration</li>
            <li>Boosts bone and joint healing</li>
            <li>Heals organ damage</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 ps-4">
          <ul class="list-check-grad mb-4">
            <li>Reduces muscle wastage </li>
            <li>Promotes growth and muscular development</li>
            <li>Influences neurotransmitter activities</li>
            <li>Lowers blood pressure</li>
            <li>Reduces side-effects of high potassium levels</li>
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
              Are You a Candidate for Recovery Protocol?
            </h2>
          </div>
        </div>
        <div class="row justify-content-center align-items-center z-1 pb-4">
          <div class="col-md-8 col-xl-8 text-center">
            <p class="text-white">
              Both men and women can benefit from LaSara Medical Group’s Recovery Protocol. If you are suffering from intestinal issues, wounds, high blood pressure, or are experiencing organ, bone, or damage, and more, you may be a good candidate for the Recovery Protocol. If you are unsure if you are a good candidate for our Recovery Protocol, don’t hesitate to make a consultation appointment with one of our offices!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container cross-vertical-left">
      <h2 class="mb-5 text-center">
        FAQs About Recovery Protocol
      </h2>
      <div class="row justify-content-center cross-horizontal-right">
        <div class="col-xxl-10 col-lg-10 z-1 py-3">
          <div class="faq-accordian">
            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                    How is the Recovery Protocol Administered?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                  <div class="accordion-body">
                    Most of our peptide protocols are administered with a very small insulin needle. Your peptide protocol provider will show you how to quickly and painlessly inject the peptides under your skin with a single poke. The sensation is similar to a small pinch and is generally considered painless.
                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                    Can I Combine Different Protocols?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                  <div class="accordion-body">
                    Yes, combining two separate peptide protocols is safe and can be effective. While most patients prefer using one protocol at a time, it is possible to receive two different peptide protocols simultaneously. If you are interested in receiving more than one peptide protocol at a time, our helpful staff will be more than happy to discuss your options and offer the latest information.
                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                    Are There Any Side Effects of the Recovery Protocol?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                  <div class="accordion-body">
                    Peptide protocols gained popularity partly due to their safety and lack of side effects. Because peptides already naturally occur in the body, peptide protocols can support and enhance your body's natural processes. Peptide protocols can help optimize health and performance with a safe and well-tolerated treatment with low to non-existent side effects.
                  </div>
                </div>
              </div>
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

      let supply = jQuery(`.${selected}`).find('input').val();

      document.getElementById(`pay-${supply}`).click();
      return;
    })
  })
</script>
<?php get_footer(); ?>
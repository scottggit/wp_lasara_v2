<?php get_header(); ?>


<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$product1 = ItemPrice::all(array(
  'itemId[in]' =>
  array('PT141-Nasal-Spray'),
  'sortBy[asc]' => 'id'

));

$product2 = ItemPrice::all(array(
  'itemId[in]' =>
  array('PT141-Vial-Injections'),
  'sortBy[asc]' => 'id'

));
?>


<div class="main-container mt-4r">
  <section class="bg-img bg-overlay-left-full py-5 bg-center" data-background-image="<?php bloginfo('template_directory') ?>/img/bg-pt.jpg">
    <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
      <div class="row py-lg-5">
        <div class="col-xl-4 col-md-6 offset-md-1">
          <h1 class="display-4 text-white mb-5">
            Amplify Your Sexual Health
          </h1>
        </div>
        <div class="w-100"></div>
        <div class="col-xxl-3 col-xl-5 col-md-6 offset-md-1">
          <h3 class="font-light text-white line-height-lg">
            PT-141 Peptide for Sexual Health and Arousal in Los Angeles,
            Orange County, and San Diego, CA
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
              <img src="https://www.lasara.com/wp-content/uploads/2023/02/Pt-141-Nasal-Spray-1.jpg" alt="Old Couple" class="img-fluid border-r-1" />

            </div>

            <div class="product product2 d-none">
              <img src="https://www.lasara.com/wp-content/uploads/2023/02/Vial-Bremelanotide-pt141.jpg" alt="Old Couple" class="img-fluid border-r-1" />

            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-5 ps-md-5">
          <h2 class="mb-4">Sexual Enhancement PT-141 (Bremelanotide)</h2>

          <p class="mb-0">
            PT-141 is a unique peptide that stimulates the Melanocortin 4 Receptor, known to produce physiological responses in the body, such as sexual arousal in the central nervous system and influence sexual behavior.
          </p>

          <form action="" class="chargebee-pay">
            <select required class="form-control mt-4 mb-2" name="product" id="">
              <option value="" selected disabled>Select Product</option>
              <option value="product1">Sexual Enhancement PT-141 (Nasal Spray) </option>
              <option value="product2">Sexual Enhancement PT-141 (Vial) </option>
            </select>


          <div class="directions product product1 d-none mt-3 p-3">
            <h6>Directions:</h6>
            <p class="mb-0">Instill one to two sprays into one nostril one to four hours before intercourse. Use as needed. One spray bottle provies 30 individual doses.
            </p>
          </div>
          <div class="directions product product2 d-none mt-3 p-3">
            <h6>Directions:</h6>
            <p class="mb-0">Inject 10 to 20 units subcutaneously into the abdomen or buttocks 3 times weekly or as needed. For sexual health benefits, inject one to four hours before intercourse. 1mL vial provides 10 doses and 2mL vial provides 20 doses.
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
                      <small> 3mL spray bottle provides 30 sprays </small></label>


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
                      <small> for
                        <?php echo $key == 0 ? 'one' : 'three'; ?>

                        month supply</small></label>


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



  <section class="py-5">
    <div class="container">
      <div class="bg-img bg-img-overlay border-r-1 bg-img-w-overlay bg-top bg-img-overlay-lg-right" data-background-image="<?php bloginfo('template_directory') ?>/img/penile-injection-intro.jpg"></div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <p class="mt-5 text-center animate__animated" data-animate="slideInUp">
            As we go through the natural stages of life, many aspects of our
            health tend to deteriorate or require extra support. Sexual
            wellness is one of the areas that can begin to show signs of
            slowing down with age. You can support your sexual health with
            safe, simple, effective peptide treatments thanks to
            cutting-edge medical developments. At LaSara Medical Group, we
            offer a variety of peptide protocols designed to help our
            patients achieve their health goals and maximize sexual
            performance in the most effective and natural way.
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
              Sexual Health and Arousal Treatments at LaSara Medical Group
            </h2>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5">
          <p>
            Peptide protocols gained recent popularity due to their ability
            to enhance specific areas of our health with laser-like
            precision. Peptides are short amino acids that act as building
            blocks for proteins. Peptides naturally occur in the body and
            help the body and the brain perform at their highest potential.
            Supplying the body with additional high-quality peptides can
            help improve multiple functions and provide long-lasting
            results.
          </p>
          <p class="m-0">
            For our sexual health and arousal peptide protocol, LaSara
            Medical Group provides the PT-141 peptide protocol. PT-141 is a
            unique peptide that stimulates the Melanocortin 4 Receptor,
            known to produce physiological responses in the body, such as
            sexual arousal in the central nervous system and influence
            sexual behavior. PT-141 works via a different mechanism than
            drugs like Viagra and helps treat sexual arousal disorders in
            both men and women.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 mt-lg-5">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-xl-4 col-md-5 offset-md-2 pe-md-5">
          <h2 class="mb-4">
            Benefits of PT-141 Sexual Health and Arousal Protocol
          </h2>

          <p class="mb-4">
            When administered correctly, peptides can help improve a
            person’s sexual health and arousal with little to no risk.
            Benefits of the sexual health and arousal peptide protocol at
            LaSara Medical Group include:
          </p>

          <ul class="list-check-grad mb-5 mb-md-0">
            <li>Increased libido</li>
            <li>Improved sexual performance</li>
            <li>Increased sexual desire</li>
            <li>Stronger erections for men</li>
            <li>Greater arousal (up to 72 hours)</li>
            <li>Enhanced energy</li>
            <li>Fast, easy healing</li>
            <li>Greater sexual fulfillment</li>
            <li>Enhanced relationships</li>
          </ul>
        </div>
        <div class="col-md-5 ps-lg-5">
          <div class="sticky-top border-r-1 bg-img-overlay-sm-left">
            <img src="<?php bloginfo('template_directory') ?>/img/pt-side.jpg" alt="Old Man with Cane" class="img-fluid border-r-1" />
          </div>
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
              Are You a Candidate for Sexual Health and Arousal Protocol?
            </h2>
          </div>
        </div>
        <div class="row justify-content-center align-items-center z-1 pb-4">
          <div class="col-md-8 col-xl-8 text-center">
            <p class="text-white">
              Men and women can benefit from the PT-141 sexual health and
              arousal protocol. Adults in their middle age are amongst the
              most common and most suitable candidates for peptide therapy.
              But patients of all ages may find peptide protocols helpful in
              enhancing their sexual health. If you are curious if PT- 141
              sexual health and arousal protocol is right for you, don’t
              hesitate to make a consultation appointment with one of our
              offices!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container cross-vertical-left">
      <h2 class="mb-5 text-center">
        FAQs About Sexual Health and Arousal Protocol
      </h2>
      <div class="row justify-content-center cross-horizontal-right">
        <div class="col-xxl-10 col-lg-10 z-1 py-3">
          <div class="faq-accordian">
            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                    What Makes Peptide Protocols so Popular?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                  <div class="accordion-body">
                    Peptide Protocols are currently at the forefront of advanced medical practices because of their ability to positively impact a patient's life without serious risks or invasive procedures. The human body is capable of improving and repairing itself, and peptides are often the missing ingredient to prompt the body into the optimal state of improvement and healing.

                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                    How Are Peptides Administered?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                  <div class="accordion-body">
                    The majority of our peptide formulas are administered by injecting subcutaneously using a very small insulin needle. Other options for PT-141 can be administered via nasal spray. The subcutaneous injection treatment is quick and painless and comparable to the feeling of a mosquito bite.
                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                    Are There Any Side Effects of Sexual Health and Arousal Peptide Protocol?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                  <div class="accordion-body">
                    Peptide protocols are generally very safe and well-tolerated. Your body naturally produces peptides, so introducing additional peptides to your system can gently yet effectively help enhance your sexual health and vitality. You can think of peptides as just another way to optimize performance and health in the same way that fitness, massage therapy, or supplements impact your health.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-img bg-top bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/pt-side2.jpg">
    <div class="container z-1">
      <div class="row justify-content-end py-lg-5">
        <div class="col-md-6 col-sm-8 text-md-start text-end">
          <h2 class="text-white font-black mb-4">
            Get Back to Feeling Like Yourself
          </h2>

          <p class="text-white mb-5">
            At LaSara Medical Group, we understand the unique challenges
            faced by men and women. With offices in Los Angeles, Orange
            County, and San Diego, our highest priority is to help you get
            back to feeling more like yourself. Peptide protocols at LaSara
            Medical Group provide a safe and effective way to improve sexual
            desire and arousal. If you’re ready to feel invigorated and
            fully engaged in your sexual life, schedule a consultation with
            us today!
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
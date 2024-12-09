<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array(
  'itemId[in]' =>
  array('Flow-Three-Months', 'Flow-One-Month'),
  'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
  <section class="bg-img bg-top bg-overlay-left-full py-5 bg-overlay-left-full" data-background-image="<?php bloginfo('template_directory') ?>/img/bg-flow.jpg">
    <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
      <div class="row py-lg-5">
        <div class="col-xl-4 col-md-6 offset-md-1">
          <h1 class="text-white mb-5">
            Thymalin Peptide Protocol to Restore Your Sleep
          </h1>
        </div>
        <div class="w-100"></div>
        <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
          <h4 class="font-light text-white line-height-lg">
            Flow Peptide Protocol in Los Angeles, Orange County, and San Diego, CA
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
          <h2 class="mb-4">Flow Peptide Protocol</h2>

          <p class="mb-0">

            Flow Peptide Protocol will help reset your circadian rhythm and get you on the road to your best natural FLOW.
          </p>
          <div class="directions mt-3 p-3">
            <h6>Directions:</h6>
            <p class="mb-0">
              Inject 30 units subcutaneously into the abdomen or buttocks in the evening. Use Monday to Friday and have weekends off. One month supply of Flow provides 20 individual doses.
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


  <section class="py-5 mt-lg-3">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-5 offset-md-1 pe-lg-5">
          <div class="bg-img-overlay-sm-right sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
            <img src="<?php bloginfo('template_directory') ?>/img/flow-side2.jpg" alt="Old Couple" class="img-fluid border-r-1" />
          </div>
        </div>
        <div class="col-xl-4 col-md-5 ps-md-5">
          <p>
            Sleep is one the most important things for our health, mental
            state, metabolism, and immune system. During a sleep cycle, our
            brain carries out many essential tasks like preparing our body
            for the next day, storing away memories, recharging our
            batteries, and building up the flow of energy overnight.
            Unfortunately, many of us are not getting a proper amount of
            sleep due to stress, insomnia, or the pressures of everyday
            life. LaSara Medical Group offers a tailored Flow Peptide
            Protocol that will help reset your circadian rhythm and get you
            on the road to your best natural FLOW.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 animate__animated mb-5" data-animate="slideInLeft">
          <div class="card-border-grad p-2 p-lg-4 mx-xl-5">
            <img src="<?php bloginfo('template_directory') ?>/img/cicrle-point.svg" alt="Point Circle" class="arrow-grad-right arrow-pharma" />
            <img src="<?php bloginfo('template_directory') ?>/img/cicrle-side-point-down.png" alt="Point Circle" class="arrow-grad-left-bottom" />
            <h2 class="h1 p-4 p-xxl-5 text-center">
              What is a Flow Peptide Protocol?
            </h2>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5 mb-5">
          <p>
            Peptides are amino acids that comprise the building blocks of
            protein. Peptide protocols are specially prepared combinations
            of peptides designed to help you achieve your specific goals.
            Because peptides naturally occur in the body, administering
            additional peptides through a peptide protocol is very well
            tolerated by the body, producing long-lasting effects without
            any serious side effects.
          </p>
          <p>
            Commencing a peptide protocol is easy, safe, and convenient. All
            you have to do is schedule an appointment with one of our
            offices and discuss your goals. Then, our experienced peptide
            protocol providers will recommend a peptide protocol that best
            suits your needs and explain how to administer it. For the Flow
            Peptide Protocol, we use a specially crafted combination of
            three peptides that work together to enhance each other’s
            beneficial properties and provide the best results.
          </p>
        </div>
        <div class="col-md-3 col-lg-3 offset-lg-1">
          <h3 class="text-dark">CJC/Ipamorelin</h3>
          <p>
            Ipamorelin is a pentapeptide, meaning that its structure is
            comprised of five amino acids. It can bind certain receptors of
            a cell and provoke a cellular response. Ipamorelin’s operational
            mechanics enables the peptide to stimulate the production of
            secretions related to growth amongst animal test subjects.
            Additionally, it has been determined that Ipamorelin can boost
            the production of IGF-1, or Insulin-like Growth Factor 1. Its
            presence plays a key role in muscular and skeletal tissue’s
            overall growth and repair.
          </p>
        </div>
        <div class="col-md-3 col-lg-3">
          <h3 class="text-dark">Thymalin</h3>
          <p>
            Thymalin is a synthetic version of Thymulin, which is involved
            in regulating inflammation and pain. Research shows that
            Thymalin may be effective in boosting immune function, fighting
            heart disease, and regulating sleep-wake cycles. It is also of
            interest in aging research for its ability to reduce all-cause
            mortality in mouse models and prolong lifespan.
          </p>
        </div>
        <div class="col-md-2 col-lg-2">
          <h3 class="text-dark">Epithalon</h3>
          <p>
            Epithalon is a modulator of telomerase, the enzyme that
            maintains and protects the caps at the ends of chromosomes
            (strands of DNA). Research suggests that Epithalon may help
            fight off the effects of aging.
          </p>
        </div>
        <div class="col-md-3 col-lg-3">
          <h3 class="text-dark">BPC-157</h3>
          <p>
            Composed of 15 amino acids, BPC-157 is a partial sequence of body protection compounds (BPC) discovered in and isolated from human gastric juice. This peptide helps repair intestinal damage like fistulas and inflammation, increases cellular regeneration, reduces muscle waste, and promotes muscular development.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2 class="mb-5">Benefits of Flow Peptide Protocol</h2>
          <p>
            Flow Peptide Protocol at LaSara Medical Group helps individuals
            enjoy better sleep, fully recharge their batteries for the day
            ahead, and stay in the FLOW. Benefits of Flow Protocol include:
          </p>
          <ul class="list-check-grad mb-4">
            <li>Fights off effects of aging</li>
            <li>Regulates inflammation</li>
            <li>Reduces pain</li>
            <li>Boosts the immune system</li>
            <li>Fights heart disease</li>
            <li>Regulates circadian cycles</li>
            <li>Prolongs lifespan</li>
            <li>Improves and supports muscular and skeletal tissues</li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 ps-4">
          <div class="bg-img-overlay-sm-left sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-left">
            <img src="<?php bloginfo('template_directory') ?>/img/flow-side.jpg" alt="Old Couple" class="img-fluid border-r-1" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container cross-vertical-left">
      <h2 class="mb-5 text-center">FAQs About Flow Peptide Protocol</h2>
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
                    Peptide Protocols are currently at the forefront of
                    advanced medical practices because of their ability to
                    positively impact a patient’s life without serious risks
                    or invasive procedures. The human body can improve and
                    repair itself, and peptides are often the missing
                    ingredient to prompt the body into the optimal state of
                    improvement and healing. Additionally, peptide protocols
                    are easy to administer and don’t require lengthy
                    procedures.
                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                    Who is a Good Candidate for Flow Peptide Protocol?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                  <div class="accordion-body">
                    Peptide therapy works by mimicking the body's own
                    peptides to elicit the desired response. We work with
                    the most advanced peptide manufacturers to deliver an
                    effective treatment for sexual dysfunction. Because
                    peptides naturally occur in the body, they do not tend
                    to elicit any major side effects, offering a safe and
                    well-tolerated treatment for your needs.
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
                    Research in the area of this cutting-edge technology
                    suggests that combining multiple peptides helps to
                    enhance their effects and provide the best results.
                    Peptide therapy at LaSara Medical Group is carefully
                    crafted with your specific needs in mind to provide the
                    most effective, yet well-tolerated and safe treatment.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-img bg-top bg-overlay custom-erectile-dysfunction-bg-position bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/looking-each-other.jpg">
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
            Medical Group provide a safe and effective way to support and
            improve your health. If you’re ready to find out more about our
            cutting-edge peptide protocols, schedule a consultation with us
            today!
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
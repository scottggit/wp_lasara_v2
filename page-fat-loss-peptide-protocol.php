<?php get_header(); ?>

<?php
require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array(
  'itemId[in]' =>
  array('Fat-Loss-Three-Months', 'Fat-Loss-One-Month'),
  'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
  <section class="bg-img bg-top bg-overlay-left-full py-5 bg-overlay-left-full" data-background-image="<?php bloginfo('template_directory') ?>/img/bg-fat-loss.jpg">
    <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
      <div class="row py-lg-5">
        <div class="col-xl-4 col-md-6 offset-md-1">
          <h1 class="text-white mb-5">Fat Loss Peptide Protocol</h1>
        </div>
        <div class="w-100"></div>
        <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
          <h4 class="font-light text-white line-height-lg">
            Fat Loss Peptide Protocol in Los Angeles, Orange County, and San
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
          <h2 class="mb-4">Fat Loss Peptide Protocol</h2>

          <p class="mb-0">

            The Fat Loss Peptide Protocol includes our most popular and best peptide blend of Tesamorelin, CJC 1295/ Ipamorelin, and BPC 157, formulated to shrink both subcutaneous and visceral fat. This powerful peptide protocol can help supplement your fat-burning abilities by destroying fat cells (lipolysis) and helping to prevent the formation of new ones. Purchase 3 months to receive 15% off.
          </p>
          <div class="directions mt-3 p-3">
            <h6>Directions:</h6>
            <p class="mb-0">
              Inject 20 units subcutaneously into the abdomen or buttocks in the morning. Use Monday to Friday and have weekends off. One month supply of Fat Loss provides 20 individual doses.
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



  <section class="py-5">
    <div class="container">
      <h2 class="mt-5 text-center">
        Sometimes leading a healthy lifestyle and working out don’t quite
        deliver the fitness results you might be looking for.
      </h2>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <p class="mt-5 text-center animate__animated" data-animate="slideInUp">
            When it comes to additional support for weight loss and fighting body fat, peptide protocols have gained popularity because of their ease of administering, effectiveness, and low to non-existent side effects. LaSara Medical Group in Los Angeles, San Diego, and Orange County offer Fat Loss Peptide Protocol to help you lose stubborn abdominal fat, gain muscle mass, fight weight gain, and trim it down.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 animate__animated mb-5" data-animate="slideInLeft">
          <div class="card-border-grad p-2 p-lg-4 mx-xl-5">
            <img src="<?php bloginfo('template_directory') ?>/img/cicrle-point.svg" alt="Point Circle" class="arrow-grad-right" />
            <img src="<?php bloginfo('template_directory') ?>/img/cicrle-side-point-down.png" alt="Point Circle" class="arrow-grad-left-bottom" />
            <h2 class="h1 p-4 p-xxl-5 text-center">
              What is a Fat Loss Peptide Protocol?
            </h2>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5 mb-5 align-self-start">
          <p>
            Peptides are naturally occurring biological molecules that contain two or more amino acids connected by peptide bonds. Like amino acids and proteins, peptides fuel several crucial processes in the body, like hormone production, healing, and fat loss. Medical advancements in understanding the function of peptides reveal that supplying the body with additional specific peptides can help enhance desired functions and provide stronger outcomes.
          </p>
          <p>
            Over many years of research, our medical partners have discovered that peptides work best when administered together in specific combinations to enhance the synergy and effectiveness of each peptide. For this reason, LaSara Medical Group offers a beneficial combination of peptides in the Fat Loss Peptide Protocol. The Fat Loss Peptide Protocol includes our most popular and best peptide blend of Tesamorelin, CJC 1295/ Ipamorelin, and BPC 157, formulated to shrink both subcutaneous and visceral fat. This powerful peptide protocol can help supplement your fat-burning abilities by destroying fat cells (lipolysis) and helping to prevent the formation of new ones.
          </p>
        </div>
        <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
          <h3 class="text-dark">Tesamorelin Peptide</h3>
          <p>
            Tesamorelin helps the human body retain calcium, increase protein synthesis and muscle growth, and increase the breakdown of fat. Clinical trials show that Tesamorelin has been shown to reduce the visceral fat surrounding the internal organs. Much of the abdominal obesity we see in adults today arises from visceral fat. Tesamorelin has also been shown to increase one’s metabolism and mitochondrial function.
          </p>
        </div>
        <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
          <h3 class="text-dark">CJC 1295/Ipamorelin</h3>
          <p>
            CJC 1295 and Ipamorelin are a combination of 2 peptides. This human growth hormone (HGH)-producing mechanism increases the duration and volume of your body’s natural HGH secretion in 2 different ways. CJC 1295 is what is known as a “growth hormone-releasing hormone” (GHRH) analog that helps the secretion of HGH and IGF-1 from your pituitary gland occur for a longer period of time. An added benefit of CJC 1295 is an “anti-aging” effect through increased collagen production, which helps improve skin elasticity. Ipamorelin offers a similar benefit by helping the pituitary gland release more human growth hormone. Together, these peptides work to deliver benefits like strengthening the cardiovascular system and bone density, increasing the body’s ability to lose fat, reducing adipose tissue and abdominal fat, improving fat metabolism, building lean body mass, increasing sex drive, and improving the immune system, helping to regulate blood sugar, and insulin sensitivity, thus reducing the body’s triglycerides.
          </p>
        </div>
        <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
          <h3 class="text-dark">BPC-157</h3>
          <p>
            Composed of 15 amino acids, BPC-157 is a partial sequence of body protection compounds (BPC) discovered in and isolated from human gastric juice. This peptide helps repair intestinal damage like fistulas and inflammation, increases cellular regeneration, reduces muscle waste, and promotes muscular development.
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
              <h2 class="text-white">
                Benefits of Fat Loss Peptide Protocol
              </h2>
              <p class="text-white">
                If you are looking to lose belly fat and trim down your body weight, the Fat Loss Peptide Protocol at LaSara Medical Group is the protocol for you. Benefits of this protocol include:
              </p>
            </div>
            <div class="col-md-6 col-xl-5 py-5">
              <ul class="list-check-grad text-white">
                <li>Increases protein synthesis</li>
                <li>Encourages muscle growth</li>
                <li>Increases breakdown of fat</li>
                <li>Helps human body retain calcium</li>
                <li>Improve cognitive function and memory</li>
                <li>Reduces visceral fat surrounding internal organs</li>
                <li>Increases fat metabolism and mitochondrial function</li>
                <li>Strengthens cardiovascular system and bone density</li>
                <li>Improves immune system</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container cross-vertical-left">
      <h2 class="mb-5 text-center">FAQs About Fat Loss Peptide Protocol</h2>
      <div class="row justify-content-center cross-horizontal-right">
        <div class="col-xxl-10 col-lg-10 z-1 py-3">
          <div class="faq-accordian">
            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                    Who is a Good Candidate for Fat Loss Peptide Protocol?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                  <div class="accordion-body">
                    LaSara Medical Group’s Fat Loss Peptide Protocol is suitable for both men and women who are looking to supplement their weight loss journey with additional support. If you are unsure whether you would make a good candidate for our peptide protocols, don’t hesitate to make an appointment with our knowledgeable and helpful staff at any of our locations. Your weight loss journey is only a phone call away!
                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                    How is The Fat Loss Peptide Protocol Administered?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                  <div class="accordion-body">
                    Peptide therapy works by mimicking the body's own peptides to elicit the desired response. We work with the most advanced peptide manufacturers to deliver an effective treatment for sexual dysfunction. Because peptides naturally occur in the body, they do not tend to elicit any major side effects, offering a safe and well-tolerated treatment for your needs.
                  </div>
                </div>
              </div>
              <div class="accordion-item animate__animated" data-animate="slideInUp">
                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                    Are There Any Side Effects of the Fat Loss Peptide Protocol?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                  <div class="accordion-body">
                    Research in the area of this cutting-edge technology suggests that combining multiple peptides helps to enhance their effects and provide the best results. Peptide therapy at LaSara Medical Group is carefully crafted with your specific needs in mind to provide the most effective yet well-tolerated and safe treatment.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-img bg-overlay custom-erectile-dysfunction-bg-position bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/guy-relaxing.jpg">
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
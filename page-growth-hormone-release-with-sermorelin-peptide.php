<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$product1 = ItemPrice::all(array(
    'itemId[in]' =>
    array('Sermorelin-Nasal-Spray'),
    'sortBy[asc]' => 'id'

));

$product2 = ItemPrice::all(array(
    'itemId[in]' =>
    array('Sermorelin-Seven-Week'),
    'sortBy[asc]' => 'id'

));
?>


<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        Sermorelin Human Growth Hormone Therapy
                    </h1>
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
                            <img src="https://www.lasara.com/wp-content/uploads/2023/02/Sermorelin-Nasal-Spray-1.jpg" alt="Old Couple" class="img-fluid border-r-1" />
                        </div>

                        <div class="product product2 d-none">
                            <img src="https://www.lasara.com/wp-content/uploads/2023/02/Sermorelin-Vial-1.jpg" alt="Old Couple" class="img-fluid border-r-1" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 ps-md-5">
                    <h1>Supercharge Your Life</h1>
                    <h4 class="mb-4 text-body">Sermorelin for Growth Hormone Release in Los Angeles, Orange County, and San Diego, CA</h4>

                    <p class=" mb-0">
                        Peptide treatments, like the Sermorelin Protocol, are quickly becoming a popular addition to people's health routines because of their effectiveness, ease of administration, and low possibility of side effects. If you'd like to reclaim your energy, optimize your metabolism, and improve your overall quality of life, Sermorelin for Growth Hormone Release at LaSara Medical Group is just the treatment you need! <a href="https://academic.oup.com/jcem/article/82/5/1472/2823341">Research</a> suggests that Sermorelin can help promote lean body mass, improve cellular growth, increase metabolism, and more. If you are ready to give your body the supercharge it needs to function at its peak, Sermorelin therapy awaits you.
                    </p>
                    <?php /*?>
                    <form action="" class="chargebee-pay">

                        <select name="product" class="mt-4 mb-2 form-control" required>
                            <option value="" disabled selected> Select Product </option>
                            <option value="product1">
                                Sermorelin Nasal Spray</option>
                            <option value="product2">Sermorelin Seven Week</option>
                        </select>
                        <p class="products mb-0">
                            Sermorelin helps promote lean body mass, improve cellular growth, increase metabolism, and more
                        </p>
                        <p class="product_ product2_ d-none mb-0">
                            One weekly injection of Semaglutide for weight loss over a 15 week period.
                        </p>

                        <div class="directions product product1 d-none mt-3 p-3">
                            <h6>Directions:</h6>
                            <p class="mb-0">Instill one spray into one nostril in the morning. Use Monday to Friday and have weekends off. One spray bottle provies 40 individual doses or 2 months of treatment.
                            </p>
                        </div>
                        <div class="directions product product2 d-none mt-3 p-3">
                            <h6>Directions:</h6>
                            <p class="mb-0">Inject 20 units subcutaneously into the abdomen or buttocks in the morning. Use Monday to Friday and have weekends off. One vial of Sermorelin provides 35 individual doses.
                            </p>
                        </div>

                        <div class="d-flex product mt-4 mb-3 align-items-center product2 d-none">
                            <?php foreach ($product2 as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                                <div>
                                    <div class="for-one rounded d-flex position-relative cursor-pointer">
                                        <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" disabled name="supply2" value="<?php echo $itemPrice->id; ?>" required>
                                        <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                                            <strong> $<?php echo $itemPrice->price / 100; ?> <?php echo $key == 1 ? '(15% off, save $82 per month)' : ''; ?>
                                            </strong>
                                            <small> 7.5ml vial provides 7 weeks of treatment</small></label>


                                    </div>
                                </div>

                                <a href="javascript:void(0)" data-cb-type="checkout" class="text-white opacity-0" id="pay-<?php echo $itemPrice->id; ?>" data-cb-item-0="<?php echo $itemPrice->id; ?>"></a>

                                <?php if ($key == count($product2) - 1) break; ?>
                                <div class="ps-3 pe-3">
                                    or
                                </div>
                            <?php endforeach; ?>

                        </div>


                        <div class="d-flex mt-4 mb-3 align-items-center product product1 d-none">
                            <?php foreach ($product1 as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                                <div>
                                    <div class="for-one rounded d-flex position-relative cursor-pointer">
                                        <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" disabled name="supply" value="<?php echo $itemPrice->id; ?>" required>
                                        <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                                            <strong> $<?php echo $itemPrice->price / 100; ?> <?php echo $key == 1 ? '(15% off, save $82 per month)' : ''; ?>
                                            </strong>
                                            <small> 4mL spray bottle provides ~40 sprays, 1 per day </small></label>


                                    </div>
                                </div>

                                <a href="javascript:void(0)" data-cb-type="checkout" class="text-white opacity-0" id="pay-<?php echo $itemPrice->id; ?>" data-cb-item-0="<?php echo $itemPrice->id; ?>"></a>

                                <?php if ($key == count($product1) - 1) break; ?>
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
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 card-border-grad-sticky animate__animated" data-animate="slideInLeft">
                    <div class="card-border-grad p-2 p-lg-4 p-xxl-5 mx-xl-5">
                        <img src="<?php bloginfo('template_directory') ?>/img/cicrle-point.svg" alt="Point Circle" class="arrow-grad-right" />
                        <h2 class="h1">
                            What is Sermorelin?
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ps-lg-5">
                    <p>
                        Sermorelin stimulates the pituitary gland to naturally produce an increased amount of the human growth hormone. Human growth hormone (hGH) is mostly known as the hormone that fuels childhood growth, but holds many other benefits in adults. In adult men and women it helps maintain tissues and organs throughout life. It is essential for development, cell production, and cell regeneration and is described by some as the key to slowing down the aging process. Unfortunately, as we age we slowly produce less and less hGH. <a href="https://pubmed.ncbi.nlm.nih.gov/28830317/">Studies</a> show that Sermorelin therapy can help restore your body's natural hGH production and increase hGH levels in your bloodstream.


                    </p>
                </div>
            </div>
        </div>
    </section>



    <section class="ribbon-container animate__animated animate__slideInLeft" data-animate="slideInLeft" style="visibility: visible;">
        <div class="cross-vertical-right py-5">
            <div class="col-11 ps-0 py-lg-5">
                <div class="ribbon-grad bg-img bg-overlay py-lg-5 px-3 bg-top ribbon-grad-left bg-overlay-right-full" data-background-image="https://www.lasara.com/wp-content/themes/lasara/img/testosterone-intro2.jpg" style="background-image: url(&quot;https://www.lasara.com/wp-content/themes/lasara/img/testosterone-intro2.jpg&quot;);">
                    <div class="row justify-content-center align-items-center py-5 z-1">
                        <div class="col-md-6 col-xl-5 pt-5 pb-md-5 pe-xl-5">
                            <h2 class="text-white">
                                Benefits of Sermorelin
                            </h2>
                            <p class="text-white">
                                The goal of sermorelin is to stimulate your pituitary gland to produce more Human Growth Hormone (hGH) naturally. Sermorelin therapy benefits include:
                            </p>
                        </div>
                        <div class="col-md-6 col-xl-5 py-5">
                            <ul class="list-check-grad text-white">
                                <li>Increase in muscle mass after exercise</li>
                                <li>Faster recovery after strenuous exercise</li>
                                <li>Increased energy and endurance</li>
                                <li>Joint and muscle pain relief</li>
                                <li>Improved cognitive function</li>
                                <li>Improved vision</li>
                                <li>Stronger bones</li>
                                <li>Enhanced immune system</li>
                                <li>Fat reduction</li>
                                <li>Accelerated wound healing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="py-5">
        <div class="container cross-vertical-left">
            <h2 class="mb-5 text-center">FAQs About Sermorelin for Growth Hormone Release</h2>
            <div class="row justify-content-center cross-horizontal-right">
                <div class="col-xxl-10 col-lg-10 z-1 py-3">
                    <div class="faq-accordian">
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                                        Who is a Good Candidate for Sermorelin Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                        Healthy adults who are looking to improve their overall fitness and health and want to benefit from Sermorelin's anti-aging properties - are good candidates for LaSara Medical's Sermorelin treatment. Both men and women can benefit from this peptide protocol. If you'd like to find out whether you are a good candidate for our Sermorelin for Growth Hormone Release, don't hesitate to <a href="https://calendly.com/lasaramedical/free-phone-consultation-trt?month=2023-02">make a consultation appointment</a> with one of our offices!
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
                                        No, peptides are nothing like steroids. Peptides are naturally occurring amino acids in the body, whereas steroids are foreign, not natural, and often illegal. Adding peptides like Sermorelin to your regiment of care only enhances or optimizes the body's biological function and helps reverse or stop many issues that develop due to HGH deficiency.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                                        How is Sermorelin Administered?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                                    <div class="accordion-body">
                                        LaSara Medical Group offers two convenient ways to receive Sermorelin therapy: <a href="https://www.youtube.com/watch?v=EDdzJnJyIdM">subcutaneous injections</a> and nasal spray. The recommendation for both delivery methods is 5 days on and 2 days off. After your initial consultation, you will receive the supplies to safely and effectively administer the protocol at home.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-img bg-top custom-erectile-dysfunction-bg-position bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/growth-get-back.jpg">
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
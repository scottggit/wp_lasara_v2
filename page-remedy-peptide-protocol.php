<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array(
    'itemId[in]' =>
    array('Remedy-Three-Months', 'Remedy-One-Month'),
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
                        Restore and Recover
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
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="remedy" class="img-fluid border-r-1" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 ps-md-5">
                    <h2 class="mb-4">Remedy Peptide Protocol in Los Angeles, Orange County, and San Diego, CA</h2>

                    <p class="mb-0">
                        Experiencing an illness or an injury is an undesirable and often unavoidable part of life. No matter how healthy your lifestyle is or how carefully you maintain your fitness, everyone can use a little help recovering. Remedy Peptide protocol, like the one offer at LaSara Medical Group, can help promote healing, protect your body from damage, accelerate wound healing, reduce inflammation, and increase blood flow to damaged tissues. With a low risk of potential side effects and a mountain of scientific evidence to support their effectiveness, peptide protocols are quickly becoming a natural go-to for those looking to optimize their health and fitness and bounce back after an illness or an injury.
                    </p>
                    <div class="directions mt-3 p-3">
                        <h6>Directions:</h6>
                        <p class="mb-0">
                            Inject 30 units subcutaneously into the abdomen or buttocks in the evening. Use Monday to Sunday, no days off for the month. One month supply of Remedy provides 30 individual doses.
                        </p>
                    </div>
                    <form action="" class="chargebee-pay">

                        <div class="d-flex mt-4 mb-3 align-items-center">

                            <?php foreach ($all as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                                <div>
                                    <div class="for-one rounded d-flex position-relative cursor-pointer">
                                        <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                                        <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                                            <strong> $<?php echo $itemPrice->price / 100; ?> <?php echo $key == 1 ? '(15% off, save $135 per month)' : ''; ?>
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
            <div class="row align-items-start">
                <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 animate__animated mb-5 animate__slideInLeft" data-animate="slideInLeft" style="visibility: visible;">
                    <div class="card-border-grad p-2 p-lg-4 mx-xl-5">
                        <img src="https://www.lasara.com/wp-content/themes/lasara/img/cicrle-point.svg" alt="Point Circle" class="arrow-grad-right arrow-pharma">
                        <img src="https://www.lasara.com/wp-content/themes/lasara/img/cicrle-side-point-down.png" alt="Point Circle" class="arrow-grad-left-bottom">
                        <h2 class="h1 p-4 p-xxl-5 text-center">
                            What is Remedy Peptide Protocol?
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5 mb-5">
                    <p>
                        Remedy peptide includes the highest dosage possible for three anti-inflammatory and immune-bolstering peptides: Thymosin Alpha 1, BPC-157, and GHK-Cu.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">Thymosin Alpha 1</h3>
                    <p>
                        Thymosin alpha 1 is a peptide that naturally occurs in the thymus. It’s well-recognized for modifying, enhancing, and restoring immune function. Thymosin alpha 1 can be used for treating immunocompromised states and malignancies, as well as an enhancer of vaccine response, and as a means of curbing morbidity and mortality in sepsis and numerous infections. Studies show that thymosin alpha 1 could help improve the outcome in severely ill Coronavirus patients by repairing damage caused by the overactivation of lymphocytic immunity. Thymosin alpha 1 could also help to prevent the excessive activation of T cells.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">BPC-157</h3>
                    <p>
                        Pentadecapeptide BPC 157 could help accelerate the healing of many different wounds, including tendon-to-bone healing and superior healing of damaged ligaments. Additionally, BPC 157 has been shown to protect organs and aid in the prevention of gastric ulcers. BPC-157 acts systemically in the digestive tract to combat leaky gut, IBS, gastrointestinal cramps, and Crohn’s disease. This peptide has been known to exhibit analgesic characteristics as well. Those who suffer from discomfort due to muscle sprains, tears, and damage may benefit from treatment with this peptide. It can also help to aid skin burns faster by increasing blood flow to damaged tissues.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">GHK-Cu</h3>
                    <p>
                        GHK-Cu is a naturally occurring copper complex that was first identified in human plasma. GHK-Cu has a variety of roles in the human body, including promoting activation of wound healing, attracting immune cells, antioxidant and anti-inflammatory effects, stimulating collagen and glycosaminoglycan synthesis in skin fibroblasts, and promoting blood vessel growth. GHK-CU plays a significant role in signaling tissue remodeling, which removes damaged/scarred tissue and generates new, healthy tissue. However, these positive effects decline with age because the concentration of GHK-Cu in the body decreases. Thus, there is an increase in inflammation, cancerous activity, and tissue destruction.
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
                                Benefits of Remedy Peptide Protocol
                            </h2>
                            <p class="text-white">
                                This unique and potent blend has been shown to help those recovering from Coronavirus and other illnesses. Additionally , this peptide blend can also be utilized for acute injuries and chronic fatigue and infections. Other benefits include:

                            </p>
                        </div>
                        <div class="col-md-6 col-xl-5 py-5">
                            <ul class="list-check-grad text-white">
                                <li>Restores immune function</li>
                                <li>Improves joint mobility</li>
                                <li>Boosts recovery from injuries</li>
                                <li>Reduces inflammation</li>
                                <li>Increases blood flow to damaged tissues</li>
                                <li>Aids skin burn healing</li>
                                <li>Increases blood flow to the tendons</li>
                                <li>Inhibits degeneration of the liver</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container cross-vertical-left">
            <h2 class="mb-5 text-center">FAQs About Remedy Peptide Protocol</h2>
            <div class="row justify-content-center cross-horizontal-right">
                <div class="col-xxl-10 col-lg-10 z-1 py-3">
                    <div class="faq-accordian">
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item animate__animated animate__slideInUp" data-animate="slideInUp" style="visibility: visible;">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                                        Who is the Ideal Candidate for the Remedy Peptide Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                        Anyone can benefit from the Remedy Peptide Protocol. Common examples of our patients who use this peptide in their yearly upkeep include: patients who are physically active and find it challenging to recover from strenuous exercise. Patients who are aging and feel the aches and pains of a long lived life who need help reducing inflammation in the body. Patients who have suffered tears and breaks that want to accelerate the healing process. Patients who suffer with stomach ulcers, IBS, or leaky gut and want to heal their gut biome once and for all. Patients who want an alternative to standard drugs like Advil and Tylenol to help cope with their physical discomfort. To see if this protocol is right for you, simply <a href="https://calendly.com/lasaramedical/free-phone-consultation-trt" target="_blank" rel="noreferrer noopener nofollow">schedule a free consultation</a> to learn more.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated animate__slideInUp" data-animate="slideInUp" style="visibility: visible;">
                                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                                        What Makes the Remedy Peptide Protocol so Popular?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                                    <div class="accordion-body">
                                        Peptide Protocols are currently at the forefront of advanced medical practices because of their ability to positively impact a patient's life without serious risks or invasive procedures. The human body is capable of improving and repairing itself, and peptides are often the missing ingredient to prompt the body into the optimal state of improvement and healing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated animate__slideInUp" data-animate="slideInUp" style="visibility: visible;">
                                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                                        How is the Remedy Peptide Protocol Administered?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                                    <div class="accordion-body">
                                        Remedy is injected at bedtime every day for one month straight. Watch our <a href="https://youtu.be/EDdzJnJyIdM" target="_blank" rel="noreferrer noopener nofollow">how to inject video here</a>. It can be utilized for 3 months consecutively. We recommend taking a one month break after the three-month mark as the body can become used to the supplementation of peptides. Once you’ve decided on purchasing this peptide, you can begin the protocol at home once a day at bedtime consecutively for 30 days. The protocol is administered by subcutaneous injections.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated animate__slideInUp" data-animate="slideInUp" style="visibility: visible;">
                                <h2 class="accordion-header" id="panelsStayOpen-heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                                        Are There Any Side Effects of the Remedy Peptide Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
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


    <section class="py-5 bg-img custom-erectile-dysfunction-bg-position bg-overlay  bg-overlay-right bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/painful-get-back.jpg">
        <div class="container z-1">
            <div class="row justify-content-end py-lg-5">
                <div class="col-md-6 col-sm-8 text-md-start text-end">
                    <h2 class="text-white font-black mb-4">
                        Get Back to Feeling Like Yourself
                    </h2>

                    <p class="text-white mb-5">
                        At LaSara Medical Group, we understand the unique challenges faced by men and women. With offices in Los Angeles, Orange County, and San Diego, our highest priority is to help you get back to feeling more like yourself. Peptide protocols at LaSara Medical Group provide a safe and effective way to support and improve your health. If you’re ready to find out more about our cutting-edge peptide protocols, <a href="/contactus">schedule a consultation</a> with us today!

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
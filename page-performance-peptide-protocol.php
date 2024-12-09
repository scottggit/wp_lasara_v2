<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array(
    'itemId[in]' =>
    array('Performance-Three-Months', 'Performance-One-Month'),
    'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        <?php the_title(); ?>
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
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Old Couple" class="img-fluid border-r-1" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 ps-md-5">
                    <h2 class="mb-4">Performance Peptide Protocol in Los Angeles, Orange County, and San Diego, CA</h2>

                    <p class="mb-0">
                        If you're looking to achieve maximum performance in your physical endeavors, the Performance Peptide Protocol at LaSara Medical Group is a treatment that will do just that. Performance Protocol can assist you in endurance, intensity, and recovery. This protocol uses a combination of peptides like Hexarelin, Epitalon, Pinealon, and Ipamorelin delivered together to help regulate metabolism, accelerate healing and recovery, support healthy brain function, and improve sleep.
                    </p>
                    <div class="directions mt-3 p-3">
                        <h6>Directions:</h6>
                        <p class="mb-0">
                            Two seperate vials, one for AM and one for PM. Inject 10 units of the AM peptides subcutaneously into the abdomen or buttocks in the morning and inject 25 units of the PM peptides subcutaneously into the abdomen or buttocks in the evening. Use Monday to Friday and have weekends off. One month supply of Performance provides 20 individual doses of each AM and PM peptides.
                        </p>
                    </div>

                    <form action="" class="chargebee-pay">
                        <div class="d-flex mt-4 mb-3 align-items-center">

                            <?php foreach ($all as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                                <div>
                                    <div class="for-one rounded d-flex position-relative cursor-pointer">
                                        <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                                        <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                                            <strong> $<?php echo number_format(($itemPrice->price / 100), 2); ?> <?php echo $key == 1 ? '(15% off, save $112 per month)' : ''; ?>
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
                            What is the Performance Peptide Protocol?
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5 mb-5">
                    <p>
                        Performance Peptide Protocol is one of our superhuman protocols where you will need to inject once in the morning and once at night. The specially crafted AM and PM doses work together to provide you with the best results all day and night. Here is a closer look at the Performance Peptide Protocol:
                    </p>
                </div>
                <div class="col-md-5 col-lg-4 offset-lg-1 mb-4">
                    <h2>AM:</h2>

                    <h3 class="text-dark">CJC 1295/ Hexarelin</h3>
                    <p>
                        Hexarelin, also called Examorelin, is a synthetic analog of gherkin and is closely related to GHRP-6. Hexarelin has been heavily researched for its positive effects on heart cell survival following ischemia and nutrient deprivation.
                    </p>
                </div>



                <div class="col-md-6 col-lg-6 offset-md-1 mb-4">
                    <h2>PM:</h2>

                    <h3 class="text-dark">Epitalon</h3>
                    <p>
                        Epithalon (also known as Epitalon or Epithalone) is the synthetic version of the polypeptide Epithalamin, which is naturally produced in humans. Its more prominent tasks are: to regulate metabolism in the epiphysis, increase the sensitivity of the hypothalamus to its natural hormonal influences, normalize the function of the anterior pituitary, and regulate the levels of gonadotropins and melatonin in the body. Epithalamion increases a person's resistance to emotional stress and acts as an antioxidant. Additionally, it restored and normalized melatonin levels in older patients who have lost some pineal function due to aging.
                    </p>
                </div>
                <div class="col-md-3 col-lg-4">
                    <h3 class="text-dark">Pinealon</h3>
                    <p>
                        Pinealon is a natural bioregulator containing an active peptide complex. It is developed to recover the brain and to treat poor memory, attention difficulties, brain injury, stroke, high stress, chronic fatigue, depression, insomnia, irritability, Alzheimer's, Parkinson's diseases, and multiple sclerosis, as well as to maintain the functional status of the brain in elderly patients. Pinealon contains amino acids that integrate into the DNA structure of the brain, thus reducing their peptide deficiency and restoring protein synthesis inside the cell.
                    </p>
                </div>
                <div class="col-md-2 col-lg-4">
                    <h3 class="text-dark">CJC 1295/Ipamorelin</h3>
                    <p>Ipamorelin is a selective GH-Secretagogue and ghrelin receptor agonist. The potency of ghrelin stimulation can be compared to GHRP6 with less appetite stimulation properties. However, unlike other GH-Secretagogues, this pentapeptide doesn't release the same volumes of cortisol, acetylcholine, prolactin, and aldosterone. For this reason, Ipamorelin has been considered the first selective and best GH Secretagogue.
                    </p>
                </div>

                <div class="col-md-3 col-lg-4">
                    <h3 class="text-dark">BPC-157</h3>
                    <p>
                        Pentadecapeptide BPC 157, composed of 15 amino acids, is a partial sequence of body protection compound (BPC) discovered in and isolated from human gastric juice. It has been demonstrated to accelerate the healing of many different wounds, including tendon-to-bone healing and superior healing of damaged ligaments. Additionally, BPC 157 has been shown to protect organs and aid in preventing gastric ulcers. BPC-157 acts systemically in the digestive tract to combat leaky gut, IBS, gastrointestinal cramps, and Crohn's disease. This peptide has been known to exhibit analgesic characteristics as well. Those who suffer from discomfort due to muscle sprains, tears, and damage may benefit from treatment with this peptide. It can also help to aid skin burns faster by increasing blood flow to damaged tissues.
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
                                Benefits of Performance Peptide Protocol
                            </h2>
                            <p class="text-white">
                                Our Performance Peptide Protocol is the most versatile blend in our entire catalog of peptide protocols. Benefits of Performance Peptide Protocol at LaSara Medical Group include: </p>
                        </div>
                        <div class="col-md-6 col-xl-5 py-5">
                            <ul class="list-check-grad text-white">
                                <li>Regulates metabolism</li>
                                <li>Increases resistance to stress</li>
                                <li>Regulates sleep</li>
                                <li>Acts as an antioxidant</li>
                                <li>Supports endocrine system</li>
                                <li>Normalizes cholesterol</li>
                                <li>Treats poor memory</li>
                                <li>Supports healthy brain activity</li>
                                <li>Accelerates wound healing</li>
                                <li>Combats leaky gut and IBS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-5">
        <div class="container cross-vertical-left">
            <h2 class="mb-5 text-center">FAQs About Performance Peptide Protocol</h2>
            <div class="row justify-content-center cross-horizontal-right">
                <div class="col-xxl-10 col-lg-10 z-1 py-3">
                    <div class="faq-accordian">
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                                        What Makes the Performance Peptide Protocol so Popular?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                        Peptide Protocols are currently at the forefront of advanced medical practices because of their ability to positively impact a patient's life without serious risks or invasive procedures. The human body can improve and repair itself, and peptides are often the missing ingredient to prompt the body into optimal improvement and healing. The potent combination of peptides in LaSara Medical Group's Performance Peptide Protocol enhances the body's ability to regenerate and heal and optimizes your physical and mental performance!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                                        How is the Performance Peptide Protocol Administered?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                                    <div class="accordion-body">
                                        Most of our peptide protocols are administered with a very small insulin needle. Your peptide protocol provider will show you how to quickly and painlessly inject the peptides under your skin with a single poke. You can also watch <a href="https://www.youtube.com/watch?v=8eLe1rqaUM8">this video</a> to see how it is administered. The sensation is similar to a small pinch and is generally considered painless. The recommendation for the Performance Peptide Protocol is to inject once in the morning and once at night.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                                        Are There Any Side Effects of the Performance Peptide Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                                    <div class="accordion-body">
                                        Peptides are generally safe and well-tolerated by both men and women. They help support your body's natural functions and work hard to restore optimal hormone levels to improve your physical performance and overall health. If you'd like to find out whether you are a good candidate for our Performance Peptide Protocol, don't hesitate to make a consultation appointment with one of our offices!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-img bg-top custom-erectile-dysfunction-bg-position bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/adonis-get-back.jpg">
        <div class="container z-1">
            <div class="row justify-content-end py-lg-5">
                <div class="col-md-6 col-sm-8 text-md-start text-end">
                    <h2 class="text-white font-black mb-4">
                        Get Back to Feeling Like Yourself
                    </h2>

                    <p class="text-white mb-5">
                        At LaSara Medical Group, we understand the unique challenges faced by men and women. With offices in Los Angeles, Orange County, and San Diego, our highest priority is to help you get back to feeling more like yourself. Peptide protocols at LaSara Medical Group provide a safe and effective way to support and improve your health. If you're ready to find out more about our cutting-edge peptide protocols,
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
<script type="application/ld+json">
    {
        "@type": "WebPage",
        "name": "Epitalon Dosing Protocol - Epitalon & Testosterone Muscle Growth",
        "description": "Get an epitalon dosing protocol from the medical professionals at LaSara Group. Our Epitalon & testosterone peptide routine can boost metabolism & muscle growth.",
        "url": "https://www.lasara.com/services/adonis-protocol/",
        "isPartOf": "https://www.lasara.com/",
        "keywords": "epitalon dosing protocol, epitalon protocol, epitalon and testosterone",
        "about": [{
                "@type": "Thing",
                "name": "",
                "sameAs": "https://en.wikipedia.org/wiki/Epitalon"
            },
            {
                "@type": "Thing",
                "name": "Peptide",
                "sameAs": "https://en.wikipedia.org/wiki/Peptide"
            }
        ]
    }
</script>


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
<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array(
    'itemId[in]' =>
    array('Revive-Three-Months', 'Revive-One-Month'),
    'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        Revive and Restore
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
                    <h2 class="mb-4">Revive Peptide Protocol in Los Angeles, Orange County, and San Diego, CA</h2>

                    <p class="mb-0">
                        Modern life is fast-paced and frequently stressful. So it is no surprise that many people deal with stress and disease, both of which can create inflammation. Inflammation is the body's natural process of modulating infections, injuries, and toxins. However, when inflammation becomes chronic, it can adversely affect our health, causing both physical and psychological distress. Revive Peptide Protocol at LaSara Medical Group is designed to help our immune system clear the excess inflammatory cells that cause pain, soreness, and irritation.

                    </p>
                    <p>
                        To accomplish this goal, we have chosen three peptides: BPC 157, KPV, and GHK-Cu, which help create an improved cellular environment to allow our native immune system the opportunity to catch up and relieve this inflammatory burden. This includes inflammation in the gut lining, sinuses, joints, and even neuronal tissue.
                    </p>

                    <div class="directions mt-3 p-3">
                        <h6>Directions:</h6>
                        <p class="mb-0">
                            Inject 30 units subcutaneously into the abdomen or buttocks in the evening. Use Monday to Friday and have weekends off. One month supply of Revive provides 20 individual doses.
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
            <div class="row align-items-start">
                <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 animate__animated mb-5 animate__slideInLeft" data-animate="slideInLeft" style="visibility: visible;">
                    <div class="card-border-grad p-2 p-lg-4 mx-xl-5">
                        <img src="https://www.lasara.com/wp-content/themes/lasara/img/cicrle-point.svg" alt="Point Circle" class="arrow-grad-right arrow-pharma">
                        <img src="https://www.lasara.com/wp-content/themes/lasara/img/cicrle-side-point-down.png" alt="Point Circle" class="arrow-grad-left-bottom">
                        <h2 class="h1 p-4 p-xxl-5 text-center">
                            What is Revive Peptide Protocol?
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5 mb-5">
                    <p>
                        Peptide protocols work by using your body's own biology to help support your immune system and guide you to optimal health. Peptide protocols are easily administered and have low risks of side effects, making them non-invasive and popular options for those who'd like to help revive and restore their bodies. Revive Peptide Protocol at LaSara Medical Group includes the following peptides:
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">BPC-157</h3>
                    <p>
                        Pentadecapeptide BPC 157 could help accelerate the healing of many different wounds, including tendon-to-bone healing and superior healing of damaged ligaments. Additionally, BPC 157 has been shown to protect organs and aid in the prevention of gastric ulcers. BPC-157 acts systemically in the digestive tract to combat leaky gut, IBS, gastrointestinal cramps, and Crohn's disease. This peptide has been known to exhibit analgesic characteristics as well. Those who suffer from discomfort due to muscle sprains, tears, and damage may benefit from treatment with this peptide. It can also help to aid skin burns faster by increasing blood flow to damaged tissues. </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">GHK-Cu</h3>
                    <p>
                        GHK-Cu is a naturally occurring copper complex that was first identified in human plasma. GHK-Cu has a variety of roles in the human body, including promoting activation of wound healing, attracting immune cells, antioxidant and anti-inflammatory effects, stimulating collagen and glycosaminoglycan synthesis in skin fibroblasts, and promoting blood vessel growth. GHK-CU plays a significant role in signaling tissue remodeling, which removes damaged/scarred tissue and generates new, healthy tissue. However, these positive effects decline with age because the concentration of GHK-Cu in the body decreases. Thus, there is an increase in inflammation, cancerous activity, and tissue destruction.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">KPV</h3>
                    <p>
                        KPV is a potent anti-inflammatory peptide that has shown promise in several disease conditions. The most active research is in treating inflammatory bowel disease, where the peptide has shown substantial promise. Research in wound healing also reveals that KPV and other alpha-MSH derivatives may offer a host of benefits that speed wound healing, reduce infection, fight inflammation, and lead to better cosmetic results. KPV and similar peptides could become mainstays not just in wound healing but in scar reduction following surgery.
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
                                Benefits of Revive Peptide Protocol
                            </h2>
                            <p class="text-white">
                                Revive Peptide Protocol at LaSara Medical Group can help your immune system clear up inflammation and reduce pain. Other benefits of Revive Peptide Protocol include the following:

                            </p>
                        </div>
                        <div class="col-md-6 col-xl-5 py-5">
                            <ul class="list-check-grad text-white">
                                <li>Reduces inflammation</li>
                                <li>Reduces Infection</li>
                                <li>Speeds up wound healing</li>
                                <li>Promotes blood vessel growth</li>
                                <li>Stimulates collagen production</li>
                                <li>Helps generate new/healthy tissue</li>
                                <li>Protects organs</li>
                                <li>Prevents ulcers</li>
                                <li>Releases pain</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container cross-vertical-left">
            <h2 class="mb-5 text-center">FAQs About Revive Peptide Protocol</h2>
            <div class="row justify-content-center cross-horizontal-right">
                <div class="col-xxl-10 col-lg-10 z-1 py-3">
                    <div class="faq-accordian">
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                                        How is the Revive Peptide Protocol Administered?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                        Most of our peptide protocols are administered with a very small insulin needle. Your peptide protocol provider will show you how to quickly and painlessly inject the peptides under your skin with a single poke. The sensation is similar to a small pinch and is generally considered painless. Our Revive Peptide Protocol is injected subcutaneously into the abdomen or buttocks in the evening for 5 days on and 2 days off.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                                        Who is a Good Candidate for Revive Peptide Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                                    <div class="accordion-body">
                                        If you want to reduce inflammation, speed up wound healing, diminish pain, and promote healthy tissue growth, Revive Peptide Protocol at LaSara Medical Group is right for you! Both men and women can benefit from this peptide protocol. Peptide protocols are popular support solutions for the body's many crucial processes due to their ease of administration, high effectiveness, and long-lasting results.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                                        Are There Any Side Effects of the Revive Peptide Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                                    <div class="accordion-body">
                                        The Revive Peptide protocol is versatile and safe, allowing one the option to go after inflammation without adverse side effects. You can think of peptides as just another way to optimize your health by supporting your body's natural functions. If you'd like to find out whether you are a good candidate for our Revive Peptide Protocol, don't hesitate to make a consultation appointment with one of our offices!
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
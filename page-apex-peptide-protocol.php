<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array(
    'itemId[in]' =>
    array('Apex-Three-Months', 'Apex-One-Month'),
    'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        Support and Supercharge
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
                    <h2 class="mb-4">Apex Peptide Protocol in Los Angeles, Orange County, and San Diego, CA</h2>

                    <p class="mb-0">
                        Apex is our most comprehensive Peptide Protocol to date. This combination packs a punch for the man or woman looking for a complete overhaul of human physiology. Apex is composed of an AM and PM injection of 12 different peptides designed to target the immune system, the nervous system, cognitive function, vitality, muscle growth, fitness, recovery, and mitochondrial function, leaving you in a prime position for total body optimization.
                    </p>
                    <div class="directions mt-3 p-3">
                        <h6>Directions:</h6>
                        <p class="mb-0">
                            Two seperate vials, one for AM and one for PM. Inject 25 units of the AM peptides subcutaneously into the abdomen or buttocks in the morning and inject 40 units of the PM peptides subcutaneously into the abdomen or buttocks in the evening. Use Monday to Friday and have weekends off. One month supply of Apex provides 20 individual doses of each AM and PM peptides.
                        </p>
                    </div>

                    <form action="" class="chargebee-pay">
                        <div class="d-flex mt-4 mb-3 align-items-center">

                            <?php foreach ($all as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                                <div>
                                    <div class="for-one rounded d-flex position-relative cursor-pointer">
                                        <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                                        <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                                            <strong> $<?php echo number_format(($itemPrice->price / 100), 2); ?> <?php echo $key == 1 ? '(15% off, save $135 per month)' : ''; ?>
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
                            What is the Apex Peptide Protocol?
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5 mb-5">
                    <p>
                        The AM and PM peptide combinations are perfectly paired to provide your body with the fuel and support it needs to function at its peak capacity.
                    </p>
                </div>
                <h2 class="offset-lg-1 ">AM Peptides:</h2>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">

                    <h3 class="text-dark">Hexarelin</h3>
                    <p>
                        Hexarelin is a synthetic growth hormone-releasing peptide that stimulates GHRH release. It's the strongest one that also increases cortisol and prolactin. However, it does not increase appetite, making it a helpful peptide for fat loss.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">MGF</h3>
                    <p>
                        MGF stands for mechano growth receptor. It's made from parts of the IGF-1 gene, typically by mechanically overloaded muscles. MGF's main benefit is stimulating muscle growth, especially in tissue repair and adaptation after resistance training.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">BPC-157</h3>
                    <p>
                        BPC-157 is a peptide with numerous uses. It is a 15-amino acid peptide derived from body protection compound (BPC) in human digestive stomach juices. Studies show it accelerates the healing of many tissues, including those that typically heal slowly, such as tendons and ligaments. BPC-157 also balances systemic inflammation, increases blood flow to damaged tissues, and relieves pain.

                    </p>
                </div>

                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">Semax</h3>
                    <p>
                        Semax is a 7-amino acid peptide that comes from amino acids 4 – 10 of the adrenocorticotropic hormone (ACTH). Typically, the body produces ACTH as a stress hormone, but Semax, in particular, has many unique properties, such as stimulating neuronal growth and immune function. It's said to induce the good parts of stress, such as high and enhanced performance, without anxiety. So, you can perform and learn with minimal resistance and procrastination. </p>
                </div>

                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">GHRP-6</h3>
                    <p>
                        GHRP-6 is the third most potent GHRP. It doesn't cause desensitization and also has less prolactin and cortisol issues than GHRP-2. It also binds to ghrelin receptors and stimulates appetite.
                    </p>
                </div>


                <h2 class="offset-lg-1 mt-5">PM Peptides:</h2>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">

                    <h3 class="text-dark">Epithalon</h3>
                    <p>
                        Epithalon is the lab-made version of epithalamin, a natural pineal peptide hormone. It increases telomerase, an enzyme that helps extend the telomeres, which are the end of your chromosomes.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">Pinealon</h3>
                    <p>
                        Pinealon is a 3-amino acid peptide that can reverse brain aging and protect brain tissues against hypoxia and cellular suicide (apoptosis). Due to its small size, it can cross the blood-brain barrier. Once it enters the cells, it can directly interact with DNA and change genetic readouts.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">BPC-157</h3>
                    <p>BPC-157 is a peptide with numerous uses. It is a 15-amino acid peptide derived from body protection compound (BPC) found in human stomach digestive juices. Studies show it accelerates the healing of many tissues, including those that typically heal slowly, such as tendons and ligaments.
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">Thymosin Alpha-1</h3>
                    <p>
                        Thymosin alpha 1 is a 28-amino acid peptide naturally found in the human thymus. While it helps modify, enhance, and restore immune function at the right time, it also promotes a balanced immune response and prevents excessive activation. Most importantly, it works with your body's natural immune responses.
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">Thymalin</h3>
                    <p>
                        Thymalin is a mix of peptides from the thymus that can help regulate immune function and support the body's natural ability to fight infections. It is also geroprotective, anti-aging, and may protect against all-cause mortality.
                    </p>
                </div>


                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">TB-500</h3>
                    <p>
                        Thymosin beta-4 is a 43-amino acid derivative of thymosin, a hormone from the thymus that stimulates T cell production. However, TB-500 is naturally found in most cells. Naturally, the gene that produces this peptide tends to be the first to become dysregulated after injuries.
                    </p>
                </div>


                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">Selank</h3>
                    <p>
                        Selank is a 7-amino acid peptide created by joining Tuftsin with another three amino acids to make it more stable. As a synthetic analog of Tuftsin, a 4-amino acid that is part of immunoglobulin G, it has some immune-stimulating effects.
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">CJC-1295/Ipamorelin</h3>
                    <p>
                        CJC-1295 is the synthetic analog of the first 29 amino acids of growth-hormone-releasing hormone (GHRH) or growth hormone secretagogue.
                    </p>
                    <p>Ipamorelin is a 5-amino acid peptide that stimulates the pituitary to secrete GH, boost IGF-1, and inhibit somatostatin. Therefore, it supports the growth and repair of muscles.</p>
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
                                Benefits of Apex Peptide Protocol
                            </h2>
                            <p class="text-white">
                                Apex Peptide Protocol is perfect for completely overhauling human physiology, improving fitness, protecting brain tissues, stimulating recovery, and supporting the nervous system. Other benefits of the Apex Peptide Protocol include the following:
                            </p>
                        </div>
                        <div class="col-md-6 col-xl-5 py-5">
                            <ul class="list-check-grad text-white">
                                <li>Stimulates muscle growth</li>
                                <li>Promotes tissue repair</li>
                                <li>Promotes tendons and ligament healing</li>
                                <li>Relieves pain</li>
                                <li>Reduces inflammation</li>
                                <li>Supports immune function</li>
                                <li>Protects brain tissue</li>
                                <li>Supports muscle growth and repair</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container cross-vertical-left">
            <h2 class="mb-5 text-center">FAQs About Apex Peptide Protocol</h2>
            <div class="row justify-content-center cross-horizontal-right">
                <div class="col-xxl-10 col-lg-10 z-1 py-3">
                    <div class="faq-accordian">
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                                        Who is a Good Candidate for Apex Peptide Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                        If you'd like to optimize your body's overall performance, support your immune system, and improve your fitness, the Apex Peptide Protocol at LaSara Medical Group is right for you! Both men and women can benefit from this peptide protocol. Peptide protocols are popular support solutions for the body's many crucial processes due to their ease of administration, high effectiveness, and long-lasting results.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                                        How is the Apex Peptide Protocol Administered?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                                    <div class="accordion-body">
                                        You can easily and painlessly administer your Apex Peptide Protocol at home using a tiny needle provided with the peptides. Learn how to subcutaneously inject with <a href="https://www.youtube.com/watch?v=EDdzJnJyIdM&feature=youtu.be">this video</a>. The Apex Protocol is designed for advanced users that are experienced in peptides and should be injected twice a day subcutaneously into the abdomen or buttocks in the morning and evening. Use Monday to Friday and have weekends off. This protocol is split into two daily injections, five days on and two days off.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                                        Are There Any Side Effects of the Apex Peptide Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                                    <div class="accordion-body">
                                        The Apex Peptide Protocol is versatile and safe, providing you with the support your body needs to build muscle, regenerate tissues, and support cognitive and immune functions. You can think of peptides as just another way to optimize your health by supporting your body's natural functions. If you'd like to find out whether you are a good candidate for our Apex Peptide Protocol, don't hesitate to <a href="https://calendly.com/lasaramedical/free-phone-consultation-trt?month=2023-02">make a consultation appointment</a> with one of our offices!
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
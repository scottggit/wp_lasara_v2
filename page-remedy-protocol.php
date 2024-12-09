<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array('itemId[in]' =>
array('Remedy-Three-Months', 'Remedy-One-Month'),
'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
    <section class="bg-img bg-overlay  py-5 bg-center"
        data-background-image="<?php bloginfo('template_directory') ?>/img/remedy-banner.jpg">
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
            <div class="row py-lg-5">
                <div class="col-xl-4 col-md-6 offset-md-1">
                    <h1 class="display-4 text-white mb-5">
                        Restore and<br />Recover
                    </h1>
                </div>
                <div class="w-100"></div>
                <div class="col-xxl-3 col-xl-5 col-md-6 offset-md-1">
                    <h5 class="font-light text-white line-height-lg">
                        Remedy Protocol in Los Angeles, Orange County, and San Diego, CA
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mt-lg-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h4 class="mb-5 text-center">
                        Experiencing an illness or an injury is an undesirable and often unavoidable part of life.
                    </h4>
                    <p class="text-center">
                        No matter how healthy your lifestyle is or how carefully you maintain your fitness, everyone can
                        use a little help recovering. Remedy Peptide protocol, like the one offer at LaSara Medical
                        Group, can help promote healing, protect your body from damage, accelerate wound healing, reduce
                        inflammation, and increase blood flow to damaged tissues. With a low risk of potential side
                        effects and a mountain of scientific evidence to support their effectiveness, peptide protocols
                        are quickly becoming a natural go-to for those looking to optimize their health and fitness and
                        bounce back after an illness or an injury.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 ">
        <div class="container z-1">
            <div class="row align-items-start">
                <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 animate__animated mb-5"
                    data-animate="slideInLeft">
                    <div class="card-border-grad p-2 p-lg-4 mx-xl-5">
                        <img src="<?php bloginfo('template_directory') ?>/img/cicrle-point.svg" alt="Point Circle"
                            class="arrow-grad-right arrow-pharma" />
                        <img src="<?php bloginfo('template_directory') ?>/img/cicrle-side-point-down.png"
                            alt="Point Circle" class="arrow-grad-left-bottom" />
                        <h1 class="p-4 p-xxl-5">
                            What is Remedy Protocol?
                            </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5 mb-5 align-self-start">
                    <p>
                        Remedy peptide includes the highest dosage possible for three anti-inflammatory and
                        immune-bolstering peptides: Thymosin Alpha 1, BPC-157, and GHK-Cu.
                    </p>

                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3>Thymosin Alpha 1</h3>
                    <p>
                        Thymosin alpha 1 is a peptide that naturally occurs in the thymus. It’s well-recognized for
                        modifying, enhancing, and restoring immune function. Thymosin alpha 1 can be used for treating
                        immunocompromised states and malignancies, as well as an enhancer of vaccine response, and as a
                        means of curbing morbidity and mortality in sepsis and numerous infections. Studies show that
                        thymosin alpha 1 could help improve the outcome in severely ill Coronavirus patients by
                        repairing damage caused by the overactivation of lymphocytic immunity. Thymosin alpha 1 could
                        also help to prevent the excessive activation of T cells.
                    </p>

                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3>BPC 157</h3>
                    <p>
                        Pentadecapeptide BPC 157 could help accelerate the healing of many different wounds, including
                        tendon-to-bone healing and superior healing of damaged ligaments. Additionally, BPC 157 has been
                        shown to protect organs and aid in the prevention of gastric ulcers. BPC-157 acts systemically
                        in the digestive tract to combat leaky gut, IBS, gastrointestinal cramps, and Crohn’s disease.
                        This peptide has been known to exhibit analgesic characteristics as well. Those who suffer from
                        discomfort due to muscle sprains, tears, and damage may benefit from treatment with this
                        peptide. It can also help to aid skin burns faster by increasing blood flow to damaged tissues.
                    </p>

                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3>GHK-Cu</h3>
                    <p>GHK-Cu is a naturally occurring copper complex that was first identified in human plasma. GHK-Cu
                        has a variety of roles in the human body, including promoting activation of wound healing,
                        attracting immune cells, antioxidant and anti-inflammatory effects, stimulating collagen and
                        glycosaminoglycan synthesis in skin fibroblasts, and promoting blood vessel growth. GHK-CU plays
                        a significant role in signaling tissue remodeling, which removes damaged/scarred tissue and
                        generates new, healthy tissue. However, these positive effects decline with age because the
                        concentration of GHK-Cu in the body decreases. Thus, there is an increase in inflammation,
                        cancerous activity, and tissue destruction.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="ribbon-container animate__animated" data-animate="slideInLeft">
        <div class="cross-vertical-right py-5">
            <div class="col-11 ps-0 py-lg-5">
                <div class="ribbon-grad bg-img  py-lg-5 px-3  bg-top ribbon-grad-left bg-overlay-right-full"
                    data-background-image="<?php bloginfo('template_directory')?>/img/benifits-remedy.jpg">
                    <div class="row justify-content-center align-items-center py-5 z-1">
                        <div class="col-md-6 col-xl-5 pt-5 pb-md-5 pe-xl-5">
                            <h2 class="text-white">
                                Benefits of Fat Loss Peptide Protocol
                            </h2>
                            <p class="text-white">
                                This unique and potent blend has been shown to help those recovering from Coronavirus
                                and other illnesses. Additionally , this peptide blend can also be utilized for acute
                                injuries and chronic fatigue and infections. Other benefits include:
                            </p>
                        </div>
                        <div class="col-md-6 col-xl-5 py-5">
                            <ul class="list-check-grad text-white">
                                <li>Restores immune function </li>
                                <li> Improves joint mobility</li>
                                <li> Boosts recovery from injuries</li>
                                <li> Reduces inflammation</li>
                                <li> Increases blood flow to damaged tissues </li>
                                <li> Aids skin burn healing</li>
                                <li> Increases blood flow to the tendons </li>
                                <li> Inhibits degeneration of the liver</li>
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
                FAQs About Remedy Protocol
            </h2>
            <div class="row justify-content-center cross-horizontal-right">
                <div class="col-xxl-10 col-lg-10 z-1 py-3">
                    <div class="faq-accordian">
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse1">
                                        Who is the Ideal Candidate for the Remedy Peptide Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                        Anyone can benefit from the Remedy Protocol. Common examples of our patients who
                                        use this peptide in their yearly upkeep include: patients who are physically
                                        active and find it challenging to recover from strenuous exercise. Patients who
                                        are aging and feel the aches and pains of a long lived life who need help
                                        reducing inflammation in the body. Patients who have suffered tears and breaks
                                        that want to accelerate the healing process. Patients who suffer with stomach
                                        ulcers, IBS, or leaky gut and want to heal their gut biome once and for all.
                                        Patients who want an alternative to standard drugs like Advil and Tylenol to
                                        help cope with their physical discomfort. To see if this protocol is right for
                                        you, simply schedule a free consultation to learn more.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse2">
                                        What Makes the Remedy Peptide Protocol so Popular?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading2">
                                    <div class="accordion-body">
                                        LaSara Medical Group offers various pharmaceutical options for treating symptoms
                                        associated with ED. The effects of the pharmaceuticals range from immediately
                                        noticeable results to results that improve over time. Please schedule an
                                        appointment with one of our offices today to learn more about your
                                        pharmaceutical treatment options. Better and more fulfilling sex life is only
                                        one phone call away!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse3">
                                        How is the Remedy Protocol Administered?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading3">
                                    <div class="accordion-body">
                                        Pharmaceuticals offer an effective and uncomplicated solution for issues
                                        associated with ED. Like with most pharmaceuticals, you may experience mild side
                                        effects like headaches, nasal congestions, upset stomach, diarrhea, and
                                        dizziness. The benefits of pharmaceuticals for ED generally far outweigh their
                                        side effects. However, if you are concerned about potential side effects or want
                                        to learn more about our pharmaceutical treatments for ED, don't hesitate to
                                        schedule a consultation with one of our offices!
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse4">
                                        Are There Any Side Effects of the Recovery Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading4">
                                    <div class="accordion-body">
                                        Pharmaceuticals offer an effective and uncomplicated solution for issues
                                        associated with ED. Like with most pharmaceuticals, you may experience mild side
                                        effects like headaches, nasal congestions, upset stomach, diarrhea, and
                                        dizziness. The benefits of pharmaceuticals for ED generally far outweigh their
                                        side effects. However, if you are concerned about potential side effects or want
                                        to learn more about our pharmaceutical treatments for ED, don't hesitate to
                                        schedule a consultation with one of our offices!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-img bg-overlay bg-top bg-overlay-right"
        data-background-image="<?php bloginfo('template_directory') ?>/img/get-back-erectile.jpg">
        <div class="container z-1">
            <div class="row justify-content-end py-lg-5">
                <div class="col-md-6 col-sm-8 text-md-start text-end">
                    <h2 class="text-white font-black mb-4">
                        Get Back to Feeling Like Yourself
                    </h2>

                    <p class="text-white mb-5">
                        At LaSara Medical Group, we understand the unique challenges faced by men. With offices in Los
                        Angeles, Orange County, and San Diego, our highest priority is to help you get back to feeling
                        more like yourself. We believe in restoring natural functionality for men but know that some men
                        prefer ED medications to treat their symptoms. For this reason, we offer pharmaceutical options.
                        Pharmaceutical treatments at LaSara Medical Group provide a safe and effective way to treat ED.
                        If you're ready to stop worrying about your ability to enjoy your sex life, schedule a
                        consultation with us today!

                    </p>
                    <a href="<?php echo get_site_url() ?>/contactus" class="btn btn-grad">SCHEDULE A CONVERSATION</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mt-lg-5 what-we-offer">
        <div class="container">
            <?php get_template_part( 'template-parts/what-we-offer' );?>
        </div>
    </section>
</div>


<script>

    jQuery(function(){
        jQuery('.chargebee-pay').submit(function(e) {
            e.preventDefault();
            let supply = $('.chargebee-pay').find('input[name="supply"]:checked').val();
            document.getElementById(`pay-${supply}`).click();
            return;
        })
    })

</script>

<?php get_footer(); ?>
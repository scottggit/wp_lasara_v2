<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array('itemId[in]' => 
array('Semaglutide-15-Week'),
'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
      <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        Melt Away Unwanted Fat and Weight
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/services">Services</a></li>
                    <li><a href="<?php echo get_site_url() ?>/services/semaglutide-for-fat-loss">Semaglutide For Fat Loss</a></li>
                </ol>

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
                    <h2 class="mb-4">Semaglutide for Fat and Weight Loss in Los Angeles, Orange County, and San Diego, CA

</h2>

                    <p class="mb-0">
               Confidence, mobility, life expectancy, and overall fitness are just some of the essential benefits of keeping a healthy weight. But, unfortunately, sometimes diet, exercise, and iron willpower are simply not enough to achieve your weight loss goals. This is where science comes in. Innovative  fat loss treatments, like the ones offered at LaSara Medical Group, can help individuals achieve their goals and help promote fat loss. Semaglutide for Fat Loss and Weight Loss at LaSara Medical Group melts away weight by safely stimulating a person's natural biology. It’s the same thing as the popular weight loss medications Ozempic and Wegovy, but at a fraction of the price!
    </p>
                    
                        <form action="" class="chargebee-pay">
                            <div class="d-flex mt-4 mb-3 align-items-center">
                        
                                    <?php foreach($all as $key=>$entry): $itemPrice = $entry->itemPrice(); ?>
                                        <div>
                                            <div class="for-one rounded d-flex position-relative cursor-pointer">
                                                <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                                                <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                                                <strong>  $<?php echo $itemPrice->price/100; ?> <?php echo $key == 1 ? '(15% off, save $135 per month)' : ''; ?>
                                                                 </strong>
                                                   <small> for 
                                                   <?php echo $key == 0 ? 'four' : 'three'; ?>
                                                   
                                                   month supply</small></label>
                                             
                                      
                                            </div>
                                        </div>

                                        <?php if(get_field('plan_id')): ?>
                                            <a data-cb-item-1 = "<?php echo $item->id; ?>" href="javascript:void(0)" id="pay-<?php echo $itemPrice->id; ?>"  class="text-white opacity-0" data-cb-type="checkout" data-cb-item-0="<?php echo $itemPrice->id ?>" data-cb-item-0-quantity="1" ></a>
                                        <?php else: ?>
                                            <a href="javascript:void(0)" data-cb-type="checkout" class="text-white opacity-0" id="pay-<?php echo $itemPrice->id; ?>" data-cb-item-0="<?php echo $itemPrice->id; ?>" ></a>
                                        <?php endif; ?>

                                        <?php if($key == count($all) - 1) break; ?>
                                            <div class="ps-3 pe-3">
                                                or
                                            </div>
                                        <?php endforeach; ?>
                            
                            </div>

                            <div class="ddd consent-wrap pt-2 mb-4">
                                <input type="checkbox" id="consent-check" name="consent" 
                                    style="margin-right:10px" required><label for="Patient Consent">Patient Consent</label>
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
                <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 card-border-grad-sticky animate__animated" data-animate="slideInLeft">
                    <div class="card-border-grad p-2 p-lg-4 mx-xl-5">
                        <img src="<?php bloginfo('template_directory') ?>/img/cicrle-point.svg" alt="Point Circle" class="arrow-grad-right" />
                        <h2 class="h1 p-4 p-xxl-5">
                            What is Semaglutide to Fat and Weight Loss?
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5">
                    <p>
            Semaglutide is an FDA-approved injection for fat loss. It was initially approved in 2017 to help manage blood sugar in individuals with Type II diabetes. However, after studying the connection between Semiglutide and fat loss, the FDA approved the medication for weight loss in qualified adults. 

                    </p>
                    <p>
          Semaglutide works by mimicking a hormone called a glucagon-like peptide 1, which targets the brain areas responsible for appetite and food intake. After you eat, your body releases this hormone to help lower your blood sugar by triggering insulin release and blocking sugar production. Because Semaglutide mimics the glucagon-like peptide 1, you can expect to feel fuller and avoid spikes in appetite. 
                    </p>
Although Semiglutide is a popular medication for weight loss, not all forms of Semiglutide are created equal. Many companies will compound Semaglutide with other medications like L-carnitine. This is a serious cause for concern, as additional medicines can lower the bioavailability of Semaglutide. At LaSara Medical, we pay special attention to the purity of our products, so you can be sure you are getting a high-quality treatment that is both effective and safe. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-5 offset-md-2 pe-md-5">
                    <h2 class="mb-4">Benefits of Semaglutide for Fat and Weight Loss</h2>

                    <p class="mb-4">
                    Multiple studies found that Semaglutide promotes total body fat loss between 15-20%, with noticeable results in as early as 4 weeks. Other benefits of Semaglutide for Fat Loss include:
                    </p>

                    <ul class="list-check-grad mb-5 mb-md-0">
                        <li>Helps suppress appetite </li>
                        <li>FDA approved </li>
                        <li>Controls insulin production</li>
                        <li>Curbs appetite spikes </li>
                        <li>Slows gastric motility</li>
                        <li>Improves food absorption</li>
                    </ul>
                </div>
                <div class="col-md-5 ps-lg-5">
                    <div class="sticky-top border-r-1 bg-img-overlay-sm-left">
                        <img src="<?php bloginfo('template_directory') ?>/img/semaglutide_benifits.jpg" alt="Old Man with Cane" class="img-fluid border-r-1" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container cross-vertical-left">
            <h2 class="mb-5 text-center">
                FAQs About Semaglutide for Weight Loss
            </h2>
            <div class="row justify-content-center cross-horizontal-right">
                <div class="col-xxl-10 col-lg-10 z-1 py-3">
                    <div class="faq-accordian">
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                                        What is the process of becoming a patient for Semaglutide?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">The first step is to complete our new patient forms. This will provide our medical staff the necessary medical history to safely assess if you can be treated for weight loss with Semaglutide. Depending on your medical history, you may be required to test your Glucose, Hemoglobin A1C, and Complete Blood Count with an easy blood draw at a Quest Diagnostics location. Once you are approved by our medical director to begin treatment the staff at LaSara Medical Group will mail you your medication.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                                        How Long is the Treatment of Semaglutide for Weight Loss?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                                    <div class="accordion-body">For most patients, a 12-week treatment protocol of injecting the medication once a week is the recommended approach. Depending on the results and your weight loss goals, LaSara Medical Group’s medical director may recommend continuing the therapy for a prescribed amount of time after the initial 12 weeks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                                        Who is a Good Candidate for Semaglutide for Weight Loss?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                                    <div class="accordion-body">If you are unsatisfied with your weight loss progress and have a body mass index (BMI) greater than or equal to 30, you might be a good candidate for Semaglutide for Fat Loss treatment. Additionally, if you have a BMI of 27 and high blood pressure, high cholesterol, or Type II diabetes - you can also benefit from Semaglutide use. When you have your initial consultation with LaSara Medical Group, we will help determine the best course of action to help you achieve your goals. Our medical staff will take your full medical history to ensure Semaglutide is an appropriate and safe treatment option for you. You should avoid using Semaglutide if you are pregnant, have Type I diabetes, medullary thyroid cancer, or multiple endocrine neoplasias (MEN) Type II.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                                        What Makes Semaglutide for Weight Loss so Popular?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
                                    <div class="accordion-body">Semaglutide for Weight Loss is easy to administer and doesn't require lengthy procedures like some other weight loss treatments. Once you have your initial consultation, you can administer Semaglutide yourself in the comfort of your own home. You can notice results as soon as 4 weeks after commencing treatment, with full results expected in 12 weeks. While it is recommended that you lead a healthy lifestyle while completing your Semaglutide treatment, dieting is not necessary to achieve noticeable weight loss.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                                        How is Semaglutide administered?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
                                    <div class="accordion-body">Semaglutide is a no hassle treatment that only requires you to subcutaneously inject the medication once a week. Our staff can provide in person training or you can <a href="https://youtu.be/EDdzJnJyIdM" target="_blank" rel="noreferrer noopener nofollow">learn how to inject semaglutide yourself</a>.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
                                        Are There Any Side Effects of Semaglutide for Weight Loss Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
                                    <div class="accordion-body">Semaglutide is generally safe and well-tolerated by both men and women and is an innovative and popular option for those wanting to stimulate fat loss without invasive procedures or serious side effects. When you consult with your provider at La Sara Medical Group, your medical history and specific goals will be carefully noted and incorporated into your treatment plan. If you'd like to find out whether you are a good candidate for our Semaglutide for Fat Loss, don't hesitate to make a consultation appointment with one of our offices!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-img bg-top bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/semaglutide_get_back.jpg">
        <div class="container z-1">
            <div class="row justify-content-end py-lg-5">
                <div class="col-md-6 col-sm-8 text-md-start text-end">
                    <h2 class="text-white font-black mb-4">
                        Get Back to Feeling Like Yourself
                    </h2>

                    <p class="text-white mb-5">
                        At LaSara Medical Group, we understand the unique challenges faced by men and women. With
                        offices in Los Angeles, Orange County, and San Diego, our highest priority is to help you get
                        back to feeling more like yourself. Semaglutide treatment at LaSara Medical Group provides a
                        safe and effective way to support and improve your weight loss journey. If you’re ready to
                        supercharge your fitness and see extraordinary results - schedule a consultation with us today!
                        <a href="<?php echo get_site_url() ?>/contact" class="text-white text-underline font-bold">schedule a conversation</a>
                        with us today!
                    </p>
                    <a href="<?php echo get_site_url() ?>/contact" class="btn btn-grad">SCHEDULE A CONVERSATION</a>
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
    <!-- Custom Schema -->
      <script type="application/ld+json">
        {
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "What are the benefits of Semaglutide for Fat and Weight Loss?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Multiple studies found that Semaglutide promotes total body fat loss between 15-20%, with noticeable results in as early as 4 weeks. Other benefits of Semaglutide for Fat Loss include: <ul><li>Helps suppress appetite</li><li>FDA approved</li><li>Controls insulin production</li><li>Improves food absorption</li></ul>"
                    },
                    "keywords": "benefits of semaglutide"
                }, {
                    "@type": "Question",
                    "name": "Is Semaglutide FDA Approved?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, Semaglutide has been approved by the FDA."
                    },
                    "keywords": "semaglutide fda approved"
                }, {
                    "@type": "Question",
                    "name": "How Long is the Treatment of Semaglutide for Weight Loss?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "For most patients, a 12-week treatment protocol of injecting the medication once a week is the recommended approach. Depending on the results and your weight loss goals, LaSara Medical Group’s medical director may recommend continuing the therapy for a prescribed amount of time after the initial 12 weeks. "
                    }
                },
                {
                    "@type": "Question",
                    "name": "Who is a Good Candidate for Semaglutide for Weight Loss?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "If you are unsatisfied with your weight loss progress and have a body mass index (BMI) greater than or equal to 30, you might be a good candidate for Semaglutide for Fat Loss treatment. Additionally, if you have a BMI of 27 and high blood pressure, high cholesterol, or Type II diabetes - you can also benefit from Semaglutide use. When you have your initial consultation with LaSara Medical Group, we will help determine the best course of action to help you achieve your goals. Our medical staff will take your full medical history to ensure Semaglutide is an appropriate and safe treatment option for you. You should avoid using Semaglutide if you are pregnant, have Type I diabetes, medullary thyroid cancer, or multiple endocrine neoplasias (MEN) Type II. "
                    }
                },
                {
                    "@type": "Question",
                    "name": "What Makes Semaglutide for Weight Loss so Popular?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Semaglutide for Weight Loss is easy to administer and doesn't require lengthy procedures like some other weight loss treatments. Once you have your initial consultation, you can administer Semaglutide yourself in the comfort of your own home. You can notice results as soon as 4 weeks after commencing treatment, with full results expected in 12 weeks. While it is recommended that you lead a healthy lifestyle while completing your Semaglutide treatment, dieting is not necessary to achieve noticeable weight loss. "
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are There Any Side Effects of Semaglutide for Weight Loss Protocol?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Semaglutide is generally safe and well-tolerated by both men and women and is an innovative and popular option for those wanting to stimulate fat loss without invasive procedures or serious side effects. When you consult with your provider your medical history and specific goals should be carefully noted and incorporated into your treatment plan. If you'd like to find out whether you are a good candidate for our Semaglutide for Fat Loss, don't hesitate to make a consultation appointment with one of our offices!"
                    },
                    "keywords": "semaglutide side effects"
                }
            ]
        }
    </script>
    
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
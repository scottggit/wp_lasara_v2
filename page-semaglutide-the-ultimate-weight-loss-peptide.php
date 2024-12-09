<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array(
    'itemId[in]' =>
    array('Semaglutide-15-Week'),
    'sortBy[asc]' => 'id'

));
?>

<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-3 ">
						Get Compounded Semaglutide Online</h1>
                </div>
				<div class="w-100"></div>
				<div class="col-xxl-12 col-xl-12 col-md-12">
					<h3 class="font-light text-white line-height-lg">
					Telehealth Consultations & GLP-1 Medication Provided Nationwide

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
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Old Couple" class="img-fluid border-r-1" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 ps-md-5">
                    <h2 class="mb-4">
						Semaglutide, the same active ingredient in Wegovy®* and Ozempic®*.
                    </h2>

                    <p class="mb-0">
                       Achieving a healthy weight is essential for confidence, mobility, and overall well-being. Despite efforts in diet and exercise, weight loss can be challenging. Semaglutide is an innovative weight loss treatment that safely stimulates your natural biology to melt away visceral fat and deep adipose tissue, similar to Ozempic and Wegovy.
                    </p>
                    <div class="directions mt-3 p-3">
                        <h6>Directions:</h6>
                        <p class="mb-0">
                            A custom protocol will be provided to you with directions on how much to inject each week. Semaglutide is administered once every 7 days via subcutaneous injection.

                        </p>
                    </div>

                    <form action="" class="chargebee-pay">
                        <div class="d-flex mt-4 mb-3 align-items-center">

                            <?php foreach ($all as $key => $entry) : $itemPrice = $entry->itemPrice(); ?>
                                <div>

                                    <?php /*
                                            <div class="for-one rounded d-flex position-relative cursor-pointer">
                                                <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                                                <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                                                <strong>  $<?php echo $itemPrice->price/100; ?> <?php echo $key == 1 ? '(15% off, save $135 per month)' : ''; ?>
                                                                 </strong>
                                                   <small> for 
                                                   <?php echo $key == 0 ? 'four' : 'three'; ?>
                                                   
                                                   month supply</small></label>
                                             
                                      
                                            </div>


                                                                                        */ ?>
                                    <div class="for-one rounded d-flex position-relative cursor-pointer">
                                        <strong>Price is Determined by Treatment Plan</strong>
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

                        <?php /*    <div class="ddd consent-wrap pt-2 mb-4">
                                <input type="checkbox" id="consent-check" name="consent" 
                                    style="margin-right:10px" required><label for="Patient Consent">Patient Consent</label>
                            </div>
                            
                            */ ?>

                        <a target="_blank" href="https://www.lasara.com/sales-1/" class="btn btn-grad mt-4">
                               Get Started</a>
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
What is Semaglutide?
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5">
                    <p>
                        Semaglutide is a medication for weight loss. It was initially used as a potential diabetes medication to help manage blood sugar in individuals with Type 2 diabetes. However, after studying the connection between Semaglutide and fat loss, the medication is now prescribed for weight loss in qualified adults.

                    </p>
                    <p>
                        Semaglutide works by mimicking a hormone called a glucagon-like peptide 1, which targets the brain areas responsible for appetite and food intake. After you eat, your body releases this hormone to help lower your blood sugar by triggering insulin release and blocking sugar production, making it excellent for chronic weight management. Because Semaglutide mimics the glucagon-like peptide 1, you can expect to feel fuller and avoid spikes in appetite.
                    </p>
                    Although Semaglutide is a popular healthcare medication for weight loss, not all forms of Semaglutide are created equal. Many companies will compound Semaglutide with other medications like L-carnitine. This is a serious cause for concern, as additional medicines can lower the bioavailability of Semaglutide. At LaSara Medical, we pay special attention to the purity of our products, so you can be sure you are getting a high-quality treatment that is both effective and safe.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-5 offset-md-2 pe-md-5">
                    <h2 class="mb-4">Benefits of Semaglutide for Weight Loss</h2>

                    <p class="mb-4">
                        Multiple studies found that Semaglutide promotes total body fat loss between 15-20%, with noticeable results in as early as 4 weeks. Other benefits of Semaglutide for Fat Loss include:
                    </p>

                    <ul class="list-check-grad mb-5 mb-md-0">
                        <li>Effective weight loss aid</li>
<li>Controls appetite</li>
<li>Regulates blood sugar levels</li>
<li>Supports healthy digestion</li>
<li>Enhances insulin sensitivity</li>
<li>Reduces risk of cardiovascular diseases</li>
<li>Improves overall metabolic health</li>
<li>Potential for long-term weight management</li>
<li>May lead to improvements in other health markers, such as cholesterol levels
</li>
                    </ul>
                </div>
                <div class="col-md-5 ps-lg-5">
                    <div class="sticky-top bg-img-overlay bg-img-overlay-left-small bg-img-overlay-sm-left sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-left">
                        <img src="<?php bloginfo('template_directory') ?>/img/benifit-semaglutide.jpg" alt="Old Man with Cane" class="img-fluid border-r-1" />
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
                                    <div class="accordion-body">The first step is to complete our new patient forms and schedule a free consultation. This will provide our medical staff the necessary medical history to safely assess if you can be treated for weight loss with Semaglutide. Once you are approved by our physician or nurse practitioner to begin treatment, your patient coordinator at LaSara Medical Group will contact you to process your order and shipment of medication. 
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
                                    <div class="accordion-body">How long a patient will be on Semaglutide is dependent on their individual weight loss goals. Typically, patients experience an average of 1 to 2 pounds of weight loss per week. For example, for those that have 20 pounds of weight to lose, you can expect to be on Semaglutide for an average of 10-16 weeks. So long as a patient is progressing in their weight loss journey and doing so safely under the management of our medical team, a patient can stay on this medication until they reach their weight loss goal.
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
                                    <div class="accordion-body">If you are unsatisfied with your weight loss progress from traditional lifestyle changes of diet and exercise and have a body mass index (BMI) greater than or equal to 25, you might be a good candidate for Semaglutide. When you have your initial consultation with LaSara Medical Group, we will help determine the best course of action to help you achieve your goals. Our medical staff will take your full medical history to ensure Semaglutide is an appropriate and safe treatment option for you. You should avoid using Semaglutide if you are pregnant, have Type I diabetes, medullary thyroid cancer, multiple endocrine neoplasias (MEN) Type II, or gastroparesis. 
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
                                    <div class="accordion-body">Semaglutide for Weight Loss is easy to administer and doesn't require lengthy procedures like some other weight loss treatments. Once you receive your medication in the mail, you can administer Semaglutide yourself in the comfort of your own home. You can notice results as soon as 4 weeks after commencing treatment. While weight loss can be achieved with just the addition of Semaglutide, it is recommended that you lead a lifestyle with consistent healthy food choices and exercise for long-term success.
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
                                    <div class="accordion-body">Semaglutide is generally safe and well-tolerated by both men and women and is an innovative and popular option for those wanting to stimulate fat loss without invasive procedures or serious side effects. When you consult with your provider at LaSara Medical Group, your medical history and specific goals will be carefully noted and incorporated into your treatment plan. If you'd like to find out whether you are a good candidate for our Semaglutide, don't hesitate to make a consultation appointment by calling (949) 520-1551 or scheduling a free consultation with at the top of this page.
                                    </div>
                                </div>
                            </div>
                             <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false" aria-controls="panelsStayOpen-collapse7">
                                     What happens after I reach my weight loss goal?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading7">
                                    <div class="accordion-body">After reaching your weight loss goal with Semaglutide, you have two options for ongoing management. One option is to gradually taper off the medication under medical supervision and discontinue its use. Alternatively, you can transition to a low-dose maintenance program to sustain your new goal weight. However, it's essential to ensure that you do not continue losing weight excessively, as this could lead to an unhealthy BMI. Your healthcare provider will work with you to determine the most suitable approach based on your individual needs and health status.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-img bg-top bg-left bg-overlay py-5 bg-img bg-top bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/get_back_semaglutide.jpg">
        <div class="container z-1">
            <div class="row justify-content-end py-lg-5">
                <div class="col-md-6 col-sm-8 text-md-start text-end">
                    <h2 class="text-white font-black mb-4">
                        Get Back to Feeling Like Yourself
                    </h2>

                    <p class="text-white mb-5">
                      At LaSara Medical Group, a national telehealth provider, we recognize the individual struggles experienced by men and women nationwide. Our mission is to assist you in reclaiming your health and confidence. Through our telehealth services, we offer Semaglutide, a safe and effective method to enhance your weight loss journey. If you're ready to elevate your life  and achieve extraordinary results,
                        <a href="<?php echo get_site_url() ?>/contact" class="text-white text-underline font-bold">schedule a conversation</a>
                        with us today!
                    </p>
                    <a href="<?php echo get_site_url() ?>/get-started-glp1" class="btn btn-grad">SCHEDULE A CONVERSATION</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5 what-we-offer d-none">
        <div class="container">
            <?php //get_template_part('template-parts/what-we-offer'); ?>
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
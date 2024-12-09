<?php get_header(); ?>

<!-- <?php

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
        ?> -->

<!-- Main Body -->
<div class="main-container mt-4r">

    <!-- H1 Component -->
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-3 ">
                        Tirzepatide for Weight Loss</h1>
                </div>
				<div class="w-100"></div>
				<div class="col-xxl-12 col-xl-12 col-md-12">
					<h3 class="font-light text-white line-height-lg">
						Telehealth Consultations & Medication Provided Nationwide
					</h3>
				</div>


            </div>
        </div>
    </section>

    <!-- Main Product Component -->
    <section class="py-5 mt-lg-5">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-5 offset-md-1 pe-lg-5">
                    <div class="sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Old Couple" class="img-fluid border-r-1" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 ps-md-5">
                    <h2 class="mb-4">Tirzepatide, the same active ingredient in Mounjaro®* and Zepbound™.
                    </h2>

                    <p class="mb-0">
                      Tirzepatide, initially designed for treating type 2 diabetes, has proven highly effective for weight loss. Its innovative mechanism targets glucose regulation and appetite control. Clinical trials confirm its ability to significantly reduce weight, with a favorable safety profile. This breakthrough medication has the potential to revolutionize weight management, offering a promising solution for sustainable results.
                    </p>
                    <div class="directions mt-3 p-3">
                        <h6>Directions:</h6>
                        <p class="mb-0">
                       A custom protocol will be provided to you with directions on how much to inject each week. Tirzepatide is administered once every 7 days via subcutaneous injection.
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
    </section>

    <!-- Product Information Content Block -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-xl-6 col-lg-6 cross-vertical-left z-n-1 py-5 px-5 card-border-grad-sticky animate__animated" data-animate="slideInLeft">
                    <div class="card-border-grad p-2 p-lg-4 mx-xl-5">
                        <img src="<?php bloginfo('template_directory') ?>/img/cicrle-point.svg" alt="Point Circle" class="arrow-grad-right" />
                        <h2 class="h1 p-4 p-xxl-5">
                          What is Tirzepatide?
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5">
                    <p>
                      Tirzepatide, hailed as a groundbreaking medication in the realm of weight management, represents a significant advancement in the fight against obesity and being overweight. Originally developed as a treatment for type 2 diabetes, Tirzepatide has garnered attention for its remarkable efficacy in promoting weight loss. By targeting multiple pathways involved in glucose regulation and appetite control, Tirzepatide offers a multifaceted approach to achieving sustainable weight loss outcomes. Clinical trials have demonstrated its exceptional effectiveness in reducing body weight, making it a promising option for individuals seeking to shed excess pounds and improve their overall health. With its innovative mechanism of action and favorable safety profile, Tirzepatide stands poised to revolutionize the landscape of weight management, providing hope and potential for those struggling with extra weight.

                    </p>
                    <h3>
                        How Does Tirzepatide Work?
                    </h3>
                    <p>
                        Tirzepatide works by decreasing your appetite and changing the rate at which your stomach empties. Tirzepatide is a dual-agonist, which means it activates two receptors at the same time. That is one of the main differences that Tirzepatide has from Ozempic, Wegovy, and Semaglutide which are all single-receptor agonists, making them a completely different drug class. Tirzepatide's double-receptor approach seems to provide a more noticeable weight loss than that of Ozempic and Wegovy's single-receptor method.
                    </p>
                    <p>
                        Tirzepatide affects receptors that stimulate hormones that control blood sugar levels and reduce appetite, resulting in weight loss. These receptors are called glucagon-like peptide-1 (GLP-1) and glucose-dependent insulinotropic polypeptide (GIP). Tirzepatide activates both receptors, GLP-1 and GIP, while Wegovy, Ozempic, and Semaglutide activate only the GLP-1 receptor.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Block -->
    <section class="py-5 mt-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-5 offset-md-2 pe-md-5">
                    <h2 class="mb-4">Benefits of Tirzepatide for Weight Loss and Blood Sugar Management</h2>

                    <p class="mb-4">
                        Tirzepatide for Weight Loss is easy to administer and doesn't require lengthy procedures like some other weight loss treatments. Once you have your initial consultation, you can administer Tirzepatide yourself in the comfort of your own home. You can notice results as soon as 4 weeks after commencing treatment, with significant weight loss results expected in 12 weeks. Benefits of Tirzepatide include:
                    </p>

                    <ul class="list-check-grad mb-5 mb-md-0">
                        <li>Effective weight loss aid</li>
<li>Targets multiple pathways involved in glucose regulation and appetite control</li>
<li>Promotes sustainable weight loss outcomes</li>
<li>Demonstrated efficacy in reducing body weight</li>
<li>Potential improvement in overall health markers, such as blood sugar levels</li>
<li>Favorable safety profile</li>
<li>Offers hope for individuals struggling with obesity
</li>
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

    <!-- FAQs Block -->
    <section class="py-5">
        <div class="container cross-vertical-left">
            <h2 class="mb-5 text-center">
                FAQs About Tirzepatide
            </h2>
            <div class="row justify-content-center cross-horizontal-right">
                <div class="col-xxl-10 col-lg-10 z-1 py-3">
                    <div class="faq-accordian">
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                                        How Much Weight Do People Lose With Tirzepatide?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                        The weight loss studies data for Tirzepatide has been quite astonishing. People who used a 15-milligram dose of Tirzepatide lost 21% of their body weight. In addition to weight loss, studies showed that people who used Tirzepatide could also keep their diabetes symptoms in check. Due to the success of multiple studies, Tirzepatide is considered a weight loss medication for people who are considered overweight or obese.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                                        How Long is the Treatment of Tirzepatide for Weight Loss?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                        For most patients, a 12-week treatment protocol of injecting the medication once a week is the recommended approach. Depending on the results and your weight loss goals, LaSara Medical Group's medical director may recommend continuing the therapy for a prescribed amount of time after the initial 12 weeks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                                        Who is a Good Candidate for Tirzepatide for Weight Loss?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                         If you are unsatisfied with your weight loss progress from traditional lifestyle changes of diet and exercise and have a body mass index (BMI) greater than or equal to 25, you might be a good candidate for Tirzepatide. When you have your initial consultation with LaSara Medical Group, we will help determine the best course of action to help you achieve your goals. Our medical staff will take your full medical history to ensure Tirzepatide is an appropriate and safe treatment option for you. You should avoid using Tirzepatide if you are pregnant, have Type I diabetes, medullary thyroid cancer, multiple endocrine neoplasias (MEN) Type II., or gastroparesis. 

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                                        How is Tirzepatide administered?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                        Tirzepatide is a no-hassle treatment that only requires you to inject the medication once a week subcutaneously. Our staff can provide in-person training, or you can learn how to inject by watching <a href="https://youtu.be/EDdzJnJyIdM" rel="nofollow noopener noreferrer">this video</a>.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated" data-animate="slideInUp">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                                        Does Tirzepatide Have Any Side Effects?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                                        Tirzepatide is generally safe and well-tolerated by most people. Mild side effects of Tirzepatide include nausea, diarrhea, decreased appetite, vomiting, constipation, indigestion, and stomach (abdominal) pain. Most side effects lessen or completely disappear with time. Other, more serious side effects may occur in rare cases. LaSara Medical Group's medical staff is always available to discuss possible side effects and address any questions you might have!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="py-5 bg-img bg-top bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/semaglutide_get_back.jpg">
        <div class="container z-1">
            <div class="row justify-content-end py-lg-5">
                <div class="col-md-6 col-sm-8 text-md-start text-end">
                    <h2 class="text-white font-black mb-4">
                        Feel Your Best With Tirzepatide
                    </h2>

                    <p class="text-white mb-5">
                      At LaSara Medical Group, we empathize with the distinct challenges individuals encounter when trying to lose weight. Through convenient Telehealth consultations and coaching, our utmost goal is to facilitate your journey to reclaiming a healthy weight. Tirzepatide weight loss programs offered at LaSara Medical Group present a safe and effective avenue to bolster your weight loss endeavors. If you're eager to learn more, book a consultation with us today!
                    </p>
                    <a href="<?php echo get_site_url() ?>/get-started-glp1" class="btn btn-grad">Schedule a Conversation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Offer Block -->
    <section class="py-5 mt-lg-5 what-we-offer">
        <div class="container">
            <?php get_template_part('template-parts/we-specialize-in'); ?>
        </div>
    </section>
</div>

<!-- <script>
    jQuery(function() {
        jQuery('.chargebee-pay').submit(function(e) {
            e.preventDefault();
            let supply = $('.chargebee-pay').find('input[name="supply"]:checked').val();
            document.getElementById(`pay-${supply}`).click();
            return;
        })
    })
</script> -->
<?php get_footer(); ?>
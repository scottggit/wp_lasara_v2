<?php get_header(); ?>

<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;
use ChargeBee\ChargeBee\Models\Item;

Environment::configure(CB_LABEL, CB_API);

$all = ItemPrice::all(array('itemId[in]' =>
array('Fat-Burner-Three-Months', 'Fat-Burner-One-Month'),
'sortBy[asc]' => 'id'

));
?>


<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        Revive and Rev UP
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
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="strength" class="img-fluid border-r-1" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 ps-md-5">
                    <h2 class="mb-4">Fat Burner Protocol in Los Angeles, Orange County, and San Diego, CA</h2>

                    <p class="mb-0">
                        If you are looking for a way to jump-start your fat loss journey, Fat Burner Protocol at LaSara Medical Group could be just what you need! Whether you are getting ready for the summer, looking forward to a special event, or feeling more confident about how you look, peptide protocols can help you achieve your weight loss goals by utilizing your body's biology. Fat burner protocol at LaSara Medical is a fat-blasting shot comprised of Methionine/Inositol/Choline (MIC), MethylB12, and MOTs-C. It is a potent combination that significantly enhances the body's fat-burning capacity and gets you on your way toward your desired physique. 
                    </p>
                       <form action="" class="chargebee-pay">

                            <div class="d-flex mt-4 mb-3 align-items-center">

                                    <?php foreach($all as $key=>$entry): $itemPrice = $entry->itemPrice(); ?>
                                        <div>
                                            <div class="for-one rounded d-flex position-relative cursor-pointer">
                                                <input id="mn<?php echo $itemPrice->id; ?>" type="radio" class="cursor-pointer" name="supply" value="<?php echo $itemPrice->id; ?>" required>
                                                <label class="text-sm" for="mn<?php echo $itemPrice->id; ?>">
                                                <strong>  $<?php echo $itemPrice->price/100; ?> <?php echo $key == 1 ? '(15% off, save $47 per month)' : ''; ?>
                                                                 </strong>
                                                   <small> for
                                                   <?php echo $key == 0 ? 'one' : 'three'; ?>

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
 <div class="directions mt-5 p-3">
                        <h6>Directions:</h6>
                        <p class="mb-0">
                   Inject 1mL intramuscular into the buttocks in the morning. Use Monday, Wednesday and Friday and have weekends off. One month supply of Fat Burner provides 12 individual doses.
                        </p>
                    </div>
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
                            What is the Fat Burner Protocol?
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ps-lg-5 pt-lg-5 mb-5">
                    <p>
               Fat Burner+ is a potent combination of fat-liberating amino acids and vitamin B12, along with the mitochondrial boosting peptide called MOTS-c. Methionine, Inositol, and choline help mobilize fatty acids from fat cells and the liver, and vitamin B12 boost your energy levels and support detoxification functions.

                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">Methionine/Inositol/Choline (MIC)</h3>
                    <p>
           A formulation of lipotropic that actively helps your body to metabolize fat cells and promote the elimination of stored fatty deposits within your internal organs. Methionine is an essential amino acid, Inositol is involved in the body's formation of cells, and choline is a nutrient that is water soluble and supports liver function. An excellent combination for overall fat reduction.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">MethylB12</h3>
                    <p>
                        B12 is an essential vitamin that boosts your energy levels, charges your metabolism, and assists your body with detoxification. It's vital for the process of converting carbohydrates into glucose for energy production, as well as several critical body processes. In addition, it promotes healthy skin, hair, and nails while improving unhealthy cholesterol levels—a vital addition to this fat-burning blend.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-1 align-self-start">
                    <h3 class="text-dark">MOTs-C</h3>
                    <p>
         Made up of 16 amino acids, MOTs-C is a peptide that helps to regulate metabolic functions throughout the body. It turns glucose into usable energy, and studies have shown that even with a high-fat diet, it helps boost glucose metabolism. These studies also provided evidence that this peptide can improve control over blood sugar levels for people with type 2 diabetes and obesity.

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
                                Benefits of Fat Burner Peptide Protocol
                            </h2>
                            <p class="text-white">
                                The Fat Burner protocol at LaSara Medical group offers a safe and easy way to optimize your body's fat-burning capabilities. Other benefits of the Fat Burner Protocol include:
                            </p>
                        </div>
                        <div class="col-md-6 col-xl-5 py-5">
                            <ul class="list-check-grad text-white">
                                <li>Promotes weight loss</li>
                                <li>Increases metabolism</li>
                                <li>Improves exercise capacity</li>
                                <li>Helps convert protein and fat into energy</li>
                                <li>Promotes fatty acid metabolism in the liver</li>
                                <li>Protects from diet-induced insulin resistance</li>
                                <li>Promotes good nerve function</li>
                                <li>Increases red cell production</li>
                                <li>Boosts energy</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container cross-vertical-left">
            <h2 class="mb-5 text-center">FAQs About Fat Burner Protocol </h2>
            <div class="row justify-content-center cross-horizontal-right">
                <div class="col-xxl-10 col-lg-10 z-1 py-3">
                    <div class="faq-accordian">
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item animate__animated animate__slideInUp" data-animate="slideInUp" style="visibility: visible;">
                                <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                                        Is the Fat Burner Protocol Effective?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
                                    <div class="accordion-body">
                    Yes! The three main ingredients of the Fat Burner Protocol have been proven time and time again to help burn away fat individually. Now, as a combined super stack of peptides and vitamins, you are given the chance to harness these fat burning compounds in a premixed solution. At LaSara Medical Group, we have seen our patients shed the extra layers of stubborn fat when using the Fat Burner Protocol. 
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated animate__slideInUp" data-animate="slideInUp" style="visibility: visible;">
                                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                                        Are There Any Side Effects of the Fat Burner Protocol?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                                    <div class="accordion-body">
                       Peptides are generally safe and well-tolerated by both men and women. You can think of peptides as just another way to optimize your health by supporting your body's natural functions. If you'd like to find out whether you are a good candidate for our Fat Burner Peptide Protocol, don't hesitate to make a consultation appointment with one of our offices!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated animate__slideInUp" data-animate="slideInUp" style="visibility: visible;">
                                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                                        What Makes the Fat Burner Protocol so Popular?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                                    <div class="accordion-body">
                     Peptide Protocols are currently at the forefront of advanced medical practices because of their ability to positively impact a patient's life without serious risks or invasive procedures. The human body can improve and repair itself, and peptides are often the missing ingredient to prompt the body into the optimal state of improvement and healing. The potent combination of peptides in LaSara Medical Group's Fat Burner Protocol enhances the body's fat-burning capacity and helps you get closer to your weight loss goal!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated animate__slideInUp" data-animate="slideInUp" style="visibility: visible;">
                                <h2 class="accordion-header" id="panelsStayOpen-heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                                        How is the Fat Burner Protocol Administered?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
                                    <div class="accordion-body">
                                        Most of our peptide protocols are administered with a very small insulin needle. Your peptide protocol provider will show you how to quickly and painlessly inject the peptides under your skin with a single poke. You can also watch <a href="https://youtu.be/8eLe1rqaUM8" target="_blank" rel="noreferrer noopener nofollow">this video</a> to see how it is administered. The sensation is similar to a small pinch and is generally considered painless. The recommendation for the Fat Burner Protocol is to inject intramuscular into the buttocks in the morning. Use Monday, Wednesday, and Friday, and have weekends off. Fat Burner Protocol comes with one month's supply of peptides.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item animate__animated animate__slideInUp" data-animate="slideInUp" style="visibility: visible;">
                                <h2 class="accordion-header" id="panelsStayOpen-heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                                        Do I Need to Consult with my Physician before Starting the Fat Burner?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
                                    <div class="accordion-body">
                                        No. The Fat Burner Protocol will not interact with any other medications you are taking today, nor will this protocol impact preexisting conditions you may have. With that said, we never want to dissuade our own patients from coming to us with questions so if consulting your physician is your preference, we recommend sending her or him <a href="/peptide-general-information/">this webpage</a>.
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
                        At LaSara Medical Group, we understand the unique challenges faced by men and women. With offices in Los Angeles, Orange County, and San Diego, our highest priority is to help you get back to feeling more like yourself. Peptide protocols at LaSara Medical Group provide a safe and effective way to support and improve your health. If you’re ready to find out more about our cutting-edge peptide protocols, schedule a consultation with us today!

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
<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<style>
.purchase-vitality .or-wrap {
    color: #fff;
}

.purchase-vitality .for-three {
    background: transparent;
    border: 1px solid #fff;
    border-radius: 10px;
    color: #fff;
}

.purchase-vitality .for-three strong {

    color: #fff;
}

.purchase-vitality .for-one {
    background: transparent;
    border: 1px solid #fff;
    border-radius: 10px;
    color: #fff;
}

.purchase-vitality .for-one strong {

    color: #fff;
}

.consent-wrap {
    display: flex;
    align-items: center;
}

.consent-wrap input[type="checkbox"] {
    width: 20px;
    height: 20px;
    border: 0;
}

.qty-box {
    width: 5rem;
    border-radius: 10px;
    border: 0;
    padding: 10px;
    margin-right: 0.5rem;
}

.left-bluebox {
    background: transparent linear-gradient(317deg, #002486 0%, #268AEF 51%, #D5FDFF 100%) 0% 0% no-repeat padding-box;
    padding: 3em;

}

.left-bluebox h2 {
    color: #fff;
}

.left-bluebox p {
    color: #fff;
}

.left-bluebox label {
    color: #fff;
}

@media (min-width: 1200px) {
    .left-bluebox {
        padding: 8em;

    }
}
</style>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        <?php echo get_the_title(); ?>
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/services/peptide-general-information">Peptides</a></li>
                    <li><a href="<?php echo get_site_url() ?>/services/vitality-protocol">Vitality Protocol</a></li>
                </ol>

            </div>
        </div>
    </section>
    <?php
	
	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id()), 'main_banner' );
	 ?>

    <section class="py-5 mt-lg-5">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-5 offset-md-1 pe-lg-5">
                    <div class="sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
                        <img src="<?php  echo $image[0]; ?>" alt="Old Couple" class="img-fluid border-r-1" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 ps-md-5">
                    <h2 class="mb-4">The Vitality pinealon peptide protocol was designed to increase libido, sexual
                        hormone function, and overall sexual performance.</h2>

                    <p class="mb-0">
                        This is a great option for a more natural approach to sexual vitality and it’s free of side
                        effects. This high powered formula includes three peptides combined into one easy to use
                        subcutaneous injection. Both men and women can use this formula.
                    </p>
                    <div class="d-flex mt-4 mb-5 align-items-center">
                        <div>
                            <div class="for-one d-flex">

                                <div><strong>$550 </strong> for one month supply</div>
                            </div>
                        </div>
                        <div class="ps-3 pe-3">
                            or
                        </div>
                        <div>
                            <div class="for-three d-flex">

                                <div><strong>$1,485 (10% off)</strong> for three month supply</div>
                            </div>
                        </div>
                    </div>
                    <div class="consent-wrap mb-4">
                        <input type="checkbox" id="consent-check" name="consent" value="Patient Consent"
                            style="margin-right:10px"><label for="Patient Consent">Patient Consent</label>
                    </div>
                    <input type="submit" value="Buy Now" class="btn btn-grad" disabled="disabled" id="buynow"
                        href="<?php echo  $product->add_to_cart_url(); ?>">

                </div>


            </div>
        </div>
    </section>

    <section
        class="ribbon-container animate__animated ribbon-grad bg-img bg-overlay py-5 px-3 ribbon-grad-left bg-overlay-right-full"
        data-animate="slideInLeft" data-background-image="<?php bloginfo('template_directory')?>/img/bg-ribbon.jpg">
        <div class="container">
            <h2 class="text-white mb-4 text-center z-1">
                Ingredients
            </h2>
            <div class="row px-md-5">
                <div class="col-md">

                    <div class="ingredients-wrap px-md-5  mx-md-5">

                        <div class="row py-3 z-1">
                            <div class="col-md  ">
                                <h5 class="text-white border-right-after">
                                    PT 141
                                </h5>
                            </div>


                        </div>
                        <div class="row z-1">

                            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 pe-md-5">

                                <p class="text-white mb-5 mb-md-0">
                                    <strong> PTPT 141</strong> is a unique peptide in that it stimulates the
                                    Melanocortin 4 Receptor, which is known to produce physiological responses in the
                                    body such as sexual arousal in the central nervous system and influence sexual
                                    behavior. PT-141 works via a different mechanism than drugs like Viagra and helps
                                    treat sexual arousal disorders in both men and women.
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-5 ps-md-6 ">
                                <p class="text-white">For men, benefits include:</p>
                                <ul class="list-check-grad text-white">
                                    <li>Increased libido</li>
                                    <li> Improved sexual performance</li>
                                    <li>Increased sexual desire </li>
                                    <li>Stronger erections</li>
                                    <li>Greater arousal (up to 72 hours) </li>
                                    <li>Enhanced energy</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-5 ps-md-3 ">
                                <p class="text-white">For women, benefits include:</p>
                                <ul class="list-check-grad text-white">

                                    <li>Greater sexual fulfillment</li>
                                    <li>Increased sexual desire</li>
                                    <li> Enhanced relationships</li>
                                    <li> Enhanced energy</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


            <div class="row px-md-5 mt-5">
                <div class="col-md">

                    <div class="ingredients-wrap px-md-5  mx-md-5">

                        <div class="row py-3 z-1">
                            <div class="col-md  ">
                                <h5 class="text-white border-right-after">
                                    KISSPEPTIN
                                </h5>
                            </div>


                        </div>
                        <div class="row z-1">

                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 pe-md-5">

                                <p class="text-white mb-5 mb-md-0">
                                    Kisspeptin acts to control hormone secretion as it relates to reproduction and
                                    sexual activity. Kisspeptin can influence testosterone levels and sex-related
                                    behaviors like drive and motivation. Additionally, Kisspeptin is known to reduce
                                    anxiety and stress levels.
                                </p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <div class="row px-md-5 mt-5">
                <div class="col-md">

                    <div class="ingredients-wrap px-md-5  mx-md-5">

                        <div class="row py-3 z-1">
                            <div class="col-md  ">
                                <h5 class="text-white border-right-after">
                                    PINEALON
                                </h5>
                            </div>


                        </div>
                        <div class="row z-1">

                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 pe-md-5">

                                <p class="text-white mb-5 ">
                                    Pinealon is a tri-peptide containing glutamyl-asparagine-arginine. The benefits of
                                    pinealon are particularly prominent in the brain and cardiovascular system. The
                                    tri-peptide is thought to reduce free radical damage and reduce or even reverse the
                                    long-term damage caused by reactive oxygen species (free radicals). Sexual
                                    dysfunctions are typically an outcome of poor vascular health where the blood
                                    vessels have closed down and hardened. Pinealon helps to reverse the damaged areas
                                    of poor blood flow and restore natural functionality.
                                </p>
                                <p class="text-white">
                                    In addition to benefiting sexual health regeneration, Pinealon was developed to
                                    recover the brain and to treat poor memory, attention difficulties, brain injury,
                                    stroke, high stress, chronic fatigue, depression, insomnia, irritability,
                                    Alzheimer’s, Parkinson’s diseases, multiple sclerosis, as well as to maintain the
                                    functional status of the brain in elderly patients. </p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="py-3">
        <div class="container-fluid">

            <div class="row mt-5 ">
                <div class="col-xl-8 col-md-8 offset-md-2 pe-md-5">
                    <div class="directions p-3">
                        <h6>Directions:</h6>
                        <p>
                            following dosing volume on the vial and inject subcutaneously into the abdomen or buttocks
                            in the morning. 5 days on and 2 days off for four weeks.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5 mb-5 mt-lg-5 purchase-vitality">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-5 offset-md-1  px-lg-0">
                    <div class="left-bluebox h-100">
                        <h2 class="mb-4 display-2" style="max-width: 30rem;">Purchase Vitality Protocol</h2>

                        <p class="mb-4" style="max-width: 30rem;">
                            The Vitality peptide protocol was designed to increase libido, sexual hormone function, and
                            overall sexual performance.
                        </p>
                        <p>SKU: RTR-65U</p>
                        <div class="d-flex mt-4 mb-5 align-items-center">
                            <div>
                                <div class="for-one d-flex">

                                    <div><strong>$550 </strong> for one month supply</div>
                                </div>
                            </div>
                            <div class="ps-3 pe-3 or-wrap">
                                or
                            </div>
                            <div>
                                <div class="for-three d-flex">

                                    <div><strong>$1,485 (10% off)</strong> for three month supply</div>
                                </div>
                            </div>
                        </div>
                        <div class="consent-wrap mb-4">
                            <input type="checkbox" id="consent-check-addtocart" name="consent" value="Patient Consent"
                                style="margin-right:10px"><label for="Patient Consent">Patient Consent</label>
                        </div>
                        <div class="addtocart-wrap d-lg-flex">
                            <input type="text" value="01" class="qty-box">
                            <input type="submit" value="Add To Cart" class="btn btn-grad" disabled="disabled"
                                id="addtocartbtn" href="<?php echo  $product->add_to_cart_url(); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-5 right-img px-lg-0">


                    <div class="mb-5 mb-md-0 bg-img-overlay-sm-right h-100">
                        <img src="<?php bloginfo('template_directory') ?>/img/vitality.png" alt="Old Couple"
                            class="img-fluid h-100" />
                    </div>
                </div>


            </div>
        </div>
    </section>



    <section class="py-5 bg-img bg-top custom-erectile-dysfunction-bg-position bg-overlay-right"
        data-background-image="<?php bloginfo('template_directory') ?>/img/vitality-get-back.jpg">
        <div class="container z-1">
            <div class="row justify-content-end py-lg-5">
                <div class="col-md-6 col-sm-8 text-md-start text-end">
                    <h2 class="text-white font-black mb-4">
                        Get Back to Your Daily Life
                    </h2>

                    <p class="text-white mb-5">
                        At LaSara Medical Group, we understand the unique challenges faced by men and women. With
                        offices in Los Angeles, Orange County, and San Diego, our highest priority is to help you get
                        back to feeling more like yourself. Peptide protocols at LaSara Medical Group provide a safe and
                        effective way to support and improve your health. If you’re ready to find out more about our
                        cutting-edge peptide protocols, schedule a consultation
                        <a href="<?php echo get_site_url() ?>/contact"
                            class="text-white text-underline font-bold">schedule a consultation</a>
                        with us today!
                    </p>
                    <a href="<?php echo get_site_url() ?>/contact" class="btn btn-grad">Contact Us</a>
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

<!-- 
	<?php
	
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="col-md product-top summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>


<?php do_action( 'woocommerce_after_single_product' ); ?> -->
<script>
var checker = document.getElementById('consent-check');
var sendbtn = document.getElementById('buynow');
// when unchecked or checked, run the function
checker.onchange = function() {
    if (this.checked) {
        sendbtn.disabled = false;
    } else {
        sendbtn.disabled = true;
    }

}


var checker = document.getElementById('consent-check-addtocart');
var sendbtn = document.getElementById('addtocartbtn');
// when unchecked or checked, run the function
checker.onchange = function() {
    if (this.checked) {
        sendbtn.disabled = false;
    } else {
        sendbtn.disabled = true;
    }

}
</script>
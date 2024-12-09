<?php
/**
 * Single Product stock.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/stock.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php $findus = get_field('find_us','option');?>
<div class="product-price-cart cart-info-wrap">
	<p class="stock <?php echo esc_attr( $class ); ?>"><?php echo wp_kses_post( $availability ); ?></p>
	<?php echo '<div class="cart-btn-location-wrapper">
		<div class="location">
			<a class="learn-more" href="'.$findus['location'].'" target="_blank">
				<img src="'.get_stylesheet_directory_uri().'/images/location-single-purple.svg"><h5>Pick up at location</h5>
			</a>
		</div>
		<div class="supermarket">
			<a class="learn-more" href="'.$findus['supermarkets'].'" target="_blank">
				<img src="'.get_stylesheet_directory_uri().'/images/supermarket-single-purple.svg"><h5>Shop at supermarket</h5>
			</a>
		</div>
	</div>';
	?>
</div>
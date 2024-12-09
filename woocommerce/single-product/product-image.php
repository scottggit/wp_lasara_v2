<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="col-md-6 product-top <?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<figure class="woocommerce-product-gallery__wrapper anim-image-scale">
		<?php
		if ( $product->get_image_id() ) {
			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );

			 $term_list = get_the_terms(get_the_ID(), 'product_cat_meal'); 
			
			$types ='';
			foreach($term_list as $term_single) {
				 $types .= ucfirst($term_single->slug).', ';
				
			}
			$typesz = rtrim($types, ', ');
			if($term_list){
		
			$html .='<div class="counts-as">Counts as: <span>'.$typesz.'</span></div>';
			} 
		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( get_the_post_thumbnail_url($post_thumbnail, 'product-single-tanya') ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html .= '</div><div class="mask">';
		}

		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

		// do_action( 'woocommerce_product_thumbnails' );
		?>
	</figure>

	<div class="social-icon-wrapper d-none d-md-block">
		<div class="share-txt">Share</div>
		<div class="social-icons">
			<a href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink();?>" target="_blank"><span class="icon-facebook"></span></a>
			<a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink();?>&text=<?php echo get_the_title();?>&hashtags=<?php echo get_the_tags();?>" target="_blank"><span class="icon-twitter"></span></a>
			<a href="http://pinterest.com/pin/create/link/?url=<?php echo get_permalink();?>" target="_blank"><span class="icon-pinterest_social_pin"></span></a>
			<a href="mailto:?subject=<?php echo get_the_title();?>&body=<?php echo get_permalink();?>" target="_blank"><span class="icon-email"></span></a>
		</div>
	</div>
</div>

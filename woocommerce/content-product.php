<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-lg-4 col-md-6 product-card-item" <?php wc_product_class( '', $product ); ?>  >
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	//do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	//do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item' );
	?>


	<div class="product-card anim-fade">
		<div class="image-holder">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('tap-shop-tanya',array('class'=>'w-100'))?>
				<?php $term_list = get_the_terms($post->ID, 'product_cat_meal'); 
				$types ='';
				foreach($term_list as $term_single) {
					 $types .= ucfirst($term_single->slug).', ';
				}
				$typesz = rtrim($types, ', ');
				if($term_list){
				?>
				<div class="counts-as">Counts as: <span><?php echo $typesz; ?></span></div>
				<?php } ?>
			</a>
		</div>
		<div class="content-holder">
			<div class="form-row">
				<div class="col">
					<?php do_action( 'woocommerce_shop_loop_item_title' );?>
					<?php if(get_field('is_product_available')){?>
					<div class="ifproduct-unavailable">
						<p>
							<span><img src="<?php bloginfo('template_directory')?>/images/supermarket.svg" alt=""></span>
							<?php the_field('if_not_avaiable_custom_text_here');?>
						</p>
					</div>
					<?php } else { ?>
					<?php do_action( 'woocommerce_after_shop_loop_item_title' );?>
					<?php } ?>
				</div>
				<?php if(!get_field('is_product_available')){?>
				<div class="col-auto">
					<div class="addToCartBtn"><?php do_action( 'woocommerce_after_shop_loop_item' );?></div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

if ( $query->have_posts() ){
	?>
	<div class="row gutters-70 member-items">
		<?php
			while ($query->have_posts()){
			$query->the_post();
		?>
	       <div class="col-sm-6 col-md-4 col-lg-3 product-item">
                <div class="product">
                <div class="post__header">
				<div class="product-image">
                    <a href="<?php echo get_the_permalink()?>"><img src="<?php the_post_thumbnail_url ('catalog-thumb'); ?>" class="img" alt=""></a>
                  </div>
				  <div class="product-detail-wrapper">
                    <h6 class="product-name">
                      <a href="product-detail.html"><?php echo get_the_title(); ?></a>
                    </h6>
                    <div class="product-short-description">
                    <?php echo get_the_excerpt(); ?>
                    </div>
                  </div>
                </div>
           
				<div class="product__footer">
                    <div class="row align-items-center justify-content-between">
                      <div class="col-auto">
                        <div class="product-price">
                        <?php global $product;
                        ?>
                        <?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price"><?php echo $price_html; ?></span>
<?php endif; ?>

                        </div>
                      </div>
                      <div class="col-auto">
                        <a class="add_to_cart_button" href="#"><span class="icon-cart"></span></a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
		<?php
			}
		?>
	</div>
	<div class="row">
		<div class="pagination mx-auto">
			<?php 
				echo paginate_links( array(
					'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
					'total'        => $query->max_num_pages,
					'current'      => max( 1, get_query_var( 'paged' ) ),
					'format'       => '?paged=%#%',
					'show_all'     => false,
					'type'         => 'plain',
					'end_size'     => 2,
					'mid_size'     => 1,
					'prev_next'    => true,
					'prev_text'    => sprintf( '<i></i> %1$s', __( 'Previous', 'text-domain' ) ),
					'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'text-domain' ) ),
					'add_args'     => false,
					'add_fragment' => '',
				) );
			?>
		</div>
	</div>
	<?php
}
else
{
	echo "No Results Found";
}
?>
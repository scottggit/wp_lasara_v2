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
	<div class="blogs-wrap row row--gutter-lg">
		<?php
			while ($query->have_posts()){
			$query->the_post();
		?>
		<div class="col-md-4 col-6 actors-info__item">
			<figure class="img-holder">
				<a href="<?php the_permalink()?>" class="image-box">
					<?php the_post_thumbnail('actor-alumni-page'); ?>
				</a>
			</figure>
			<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
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
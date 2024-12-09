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
$count=0;
if ( $query->have_posts() ){
	?>
<div class="row justify-content-center">
    <?php
			while ($query->have_posts()){
			$query->the_post();
		?>
    <div class="col-md-4 mb-5 animate__animated" data-animate="slideInUp">
        <div class="card blog-card">
            <?php the_post_thumbnail('blog-list', array('class' => 'card-img-top')); ?>
            <span class="card-body p-4">
                <h5 class="card-title">
                    <?php the_title(); ?>
                </h5>
                <span class="card-text d-block"><?php the_excerpt(); ?></span>
                <a href="<?php echo get_the_permalink(); ?>" class="btn btn-grad">Learn More</a>
            </span>
        </div>
    </div>

    <?php  $count++; ?>
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
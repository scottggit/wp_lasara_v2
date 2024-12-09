<?php //Template Name:Page Store ?>
<?php get_header(); ?>
<style>
	.sidebar-filter .sidebar-search-wrap ul{
		padding-left:0;
	}
	.sidebar-filter .sf-field-sort_order{display:none;}
	.sidebar-filter .sf-field-search label{width:100%;position:relative;}
	.sidebar-filter .sf-field-search .sf-input-text{
	    width: 100%;
    padding: 0.8rem;border:0;box-shadow:0 0.125rem 0.25rem rgba(0,0,0,.075) !important;
	border-radius: 10px;}
	
	.sidebar-filter .sf-field-search  label i {
    position: absolute;
    right: 0;
    top: 50%;
    color: #025F89;
    transform: translate(-100%, -50%);
}
	
	
.searchbox-wrap ul {
    padding-left: 0;
}

.searchbox-wrap ul label {
    position: relative;
    width: 100%;
}

.searchbox-wrap ul label i {
    position: absolute;
    right: 0;
    top: 50%;
    color: #025F89;
    transform: translate(-100%, -50%);
}

.searchbox-wrap ul label .sf-input-text {
    width: 100%;
    padding: 0.8rem;
    border-radius: 10px;
}

.searchbox-wrap .sf-field-taxonomy-product_cat,
.searchbox-wrap .sf-field-sort_order {
    display: none;

}

.products-filters .sf-field-search {
    display: none;

}

.products-filters ul {
    padding-left: 0;
}

.products-filters ul li {
    width: 100%;
}

.products-filters ul li h4 {
    color: #444F5A;
    font-weight: normal;
    font-family: 'muli-regular';
}

.products-filters ul li select {
    color: #444f5a9e;
}

.products-filters ul li select {
    padding: 0.8rem;
    border-radius: 10px;
    border: 1px solid #EBF1FB;
    width: 100%;
}

.products-filters label i {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translate(-100%, -50%);
    color: #025F89;
}

.products-filters label {
    width: 100%;
    position: relative;
    overflow: hidden;
}


.products-filters select.sf-input-select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;


}

.pagination.mx-auto>span.current {
    background: rgba(0, 0, 0, 0) linear-gradient(260deg, #ffaa23 0%, #f9446d 100%) 0% 0% no-repeat padding-box;
    color: #fff;
}

.pagination.mx-auto>a,
.pagination.mx-auto>span {
    color: #444F5A;
    font-weight: 700;
    padding: 0.8rem 1.5rem;
    margin-right: 1rem;
    border-radius: 10px;
    box-shadow: 1px 1px1px #ddd;
    box-shadow: 0px 10px 20px #0000001c;
}

h5.card-title {
    color: #1B1B1B;
}

.blog-card img {
	width: 100%;
   	height: 100%
}

.blog-card {
overflow: hidden;
}

.sf-field-taxonomy-wpforms_form_tag {
	display: none!important
}

.search-product-wrap .card-text p{
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

@media (min-width: 1200px) {

    .products-filters ul li {
        padding-right: 2rem;
    }

    .search-product-wrap {
        padding: 0 7rem;
    }

    .products-filters ul {
        display: flex;
        margin-bottom: 2rem;
        justify-content: space-between;
    }
}

.searchbox-wrap .sf-field-taxonomy-product_tag {
    display: none!important
}

input[type="checkbox"]{
    width: 15px;
    height: 15px;
    top: 1.5px;
    position: relative;
    margin-right: 5px
}

.text-left {
 text-align: left
}

.card {
height: 490px;
}

.rounded-md {
	border-radius: 1rem 
}
</style>


<?php

$filter = array();

if($_GET['tags']){
    foreach(@$_GET['tags'] as $tag)
    {
        $filter[] = array(
           'key' => 'tags',
           'value' => $tag,
           'compare' => 'LIKE'
        );
    }
}

if($_GET['ingredients']){
    foreach(@$_GET['ingredients'] as $ingredient)
    {
        $filter[] = array(
           'key' => 'ingredients',
           'value' => $ingredient,
           'compare' => 'LIKE'
        );
    }
}

$args = array(
	's'=> @$_GET['_sf_s'],
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => '159',
    'order'          => 'ASC',
    'post__not_in' => array(52, 50, 44, 42, 40, 36, 34, 32, 30, 28, 24, 154, 22, 20,12, 10, 59, 309, 311, 314, 317, 355, ),
    'orderby'        => 'menu_order',
    'meta_query' => $filter
 );
 
 


$parent = new WP_Query( $args );

?>



<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-overlay-left-full py-3 bg-overlay-left-full"
        data-background-image="<?php bloginfo('template_directory')?>/img/products-banner.jpg">
        <div class="container-fluid my-xl-1 z-1 cross-vertical-right">
            <div class="row ">
                <div class="col-xl-4 col-md-6 offset-md-1">
                    <h1 class="text-white mb-4 banner-title">
                        Products
                    </h1>
                </div>
                <div class="w-100"></div>
                <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
                    <ol class="breadcrumb" style="justify-content:start" ;>
                        <li><a href="/">Home</a></li>
                        <li class="text-white">Products</li>
                    </ol>
                </div>
                <div class="w-100"></div>
    <?php /*            <div class="col-xxl-3 col-xl-3 col-md-3 offset-md-1 searchbox-wrap">
                    <?php echo do_shortcode('[searchandfilter slug="search"]'); ?>
				
                </div>	*/?>
            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5 sidebar-filter">
        <div class="container">
            <div class=" row m-0">
            	<div class="col-md-3">
					<div class="sidebar-search-wrap mb-3"><?php echo do_shortcode('[searchandfilter id="631"]'); ?></div>
                  <form class="rounded-lg">
                  	
                   <input name="_sf_s" type="hidden" value="<?php echo @$_GET['_sf_s']; ?>" />
                  <button type="submit" class="w-100 btn btn-primary mb-5">Search</button>
                    
                	<div class="bg-white p-4 rounded-md shadow-sm mb-4">
                  	<h6 class="mb-3"> Filter By Tags </h6>
                  	<?php foreach([
                        'Growth Hormone Releasing',
                        'Sexual Health for Men',
                        'Fat and Weight Loss',
                        'Muscle Building',
                        'Skin Health',
                        'Vitality and Anti-Aging',
                        'Recovery and Healing',
                        'Reduce Inflammation',
                        'Gut Health',
                        'Cognitive Function',
                        'Testosterone Boosting',
                        'Hormone Support for Men',
                        'Energy Support',
                        'Sleep Support',
                        'Total Physical Optimization',
                        'Libido and Erection Support'] as $tag): ?>
               		<div>
            
                 		<input <?php if(@in_array($tag, @$_GET['tags']))  echo "checked"; ?> type="checkbox" name="tags[]" value="<?php echo $tag;?>"/>
                        <span> <?php echo $tag; ?> </span>
               		</div>
            		<?php endforeach; ?>
                    </div>
                    
                    <div class="bg-white p-4 rounded-md shadow-sm mb-4">
                    
                   	<h6 class=" mb-3 font-weight-bold"> Filter By Ingredients </h6>
                  	<?php foreach([
                        'PT-141',
                        'Kisspeptin',
                        'Pinealon',
                        'Testosterone Cypionate',
                        'Sermorelin',
                        'Semaglutide',
                        'Cyanocobalamin',
                        'BPC-157',
                        'GHK-Cu',
                        'KPV',
                        'TA-1',
                        'Epithalon',
                        'CJC-1295/Ipamorelin',
                        'TB-500',
                        'NAD+',
                        'MOTs-C'] as $tag): ?>
               		<div>
                 		<input <?php if(@in_array($tag, @$_GET['ingredients']))  echo "checked"; ?> type="checkbox" name="ingredients[]" value="<?php echo $tag;?>"/>
                        <span> <?php echo $tag; ?> </span>
               		</div>
            		<?php endforeach; ?>
                    </div>
               
            		</form>
            	     	</div>
            
                <div class="products-filters row col-md-9">
					
                    
                   
<?php if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
        
        <div class="col-md-6 col-xl-4 mb-5 animate__animated animate__slideInUp" data-animate="slideInUp" style="visibility: visible;">
        <div class="card blog-card"> 
            <?php echo get_the_post_thumbnail(); ?>      
            
            <span class="card-body p-4">
                <h5 class="card-title">
                    <?php the_title(); ?>              </h5>
                <span class="card-text d-block"><p></p>
</span>	

                <a href="<?php the_permalink(); ?>" class="btn btn-grad"><?php if( get_the_ID() == '701' || get_the_ID()=='56' ){ echo 'Learn More';}else{echo 'Buy Now'; } ?></a>
            </span>
        </div>
    </div>
    
    <?php  endwhile; ?>
    
        <?php else: ?>
    
    <p>No result found!</p>


<?php endif; wp_reset_postdata(); ?>
                   
                </div>
                
              
            </div>
        </div>
    </section>


</div>
<script>
jQuery(document).ready(function() {

	jQuery('#dropdownMenuButton').on('click', function(){
    	jQuery('.dropdown-menu').toggleClass('d-block')
    })

    jQuery(".products-filters ul li label").append('<i class="fa-solid fa-chevron-down"></i>');
    jQuery(".searchbox-wrap ul li label").append('<i class="fas fa-search"></i>');
	    jQuery(".sidebar-search-wrap .sf-field-search label").append('<i class="fas fa-search"></i>');
});



</script>
<?php get_footer(); ?>
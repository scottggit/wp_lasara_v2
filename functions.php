<?php


/**
 * Lasara functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lasata
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.1');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lasara_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Lasara, use a find and replace
		* to change 'lasara' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('lasara', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'lasara'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'lasara_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'lasara_setup');


// Add theme support
add_theme_support('post-thumbnails');

add_theme_support('title-tag');
add_post_type_support( 'page', 'excerpt' );
add_theme_support('page-template');

add_theme_support('category');

add_post_type_support('post', 'thumbnail');

add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

add_image_size('testimonials',100000,620, false);
add_image_size('testimonials-img',80,80, true);
add_image_size('blog-list',416,200, true);
add_theme_support( 'post-thumbnails' );

add_image_size('blog-inner',9999999,384, true);
function add_custom_sizes() {
    add_image_size('page-banner',99999999,450,true);

}
add_action('after_setup_theme','add_custom_sizes');

function clm_register_menus()
{
    register_nav_menus(array(

        'main' => __('Main Navigation'),
        'footer1'=>__('Footer Navigation1'),
        'footer2'=>__('Footer Navigation2'),
              'footer3'=>__('Footer Navigation3'),
        'footer4'=>__('Footer Navigation4')
    ));
}

add_action('init', 'clm_register_menus');
 

function clm_main_nav()
{
    wp_nav_menu(array(
        'container' => 'ul', // remove nav container
        'menu' => 'Main Navigation', // nav name
        'menu_id' => '', // custom id
        'menu_class' => 'nav-menu navbar-nav ms-xxl-3', // custom class
        'items_wrap' => '<ul class="nav-menu navbar-nav ms-xxl-3">%3$s</ul>',
        'theme_location' => 'main', // where it's located in the theme
        'before' => '', // before the menu
        'after' => '', // after the menu
        'link_before' => '', // before each link
        'link_after' => '', // after each link
        'depth' => 3                          // set to 1 to disable dropdowns
    ));
}





function clm_footer1_nav()
{
    wp_nav_menu(array(
        'container' => false, // remove nav container
        'menu' => 'Footer Navigation1', // nav name
        'menu_id' => '', // custom id
        'menu_class' => 'list-unstyled', // custom class
        'theme_location' => 'footer1', // where it's located in the theme
        'before' => '', // before the menu
        'after' => '', // after the menu
        'link_before' => '', // before each link
        'link_after' => '', // after each link
        'depth' => 3
    ));
}



function clm_footer2_nav()
{
    wp_nav_menu(array(
        'container' => false, // remove nav container
        'menu' => 'Footer Navigation2', // nav name
        'menu_id' => '', // custom id
        'menu_class' => 'list-unstyled', // custom class
        'theme_location' => 'footer2', // where it's located in the theme
        'before' => '', // before the menu
        'after' => '', // after the menu
        'link_before' => '', // before each link
        'link_after' => '', // after each link
        'depth' => 3
    ));
}


function clm_footer3_nav()
{
    wp_nav_menu(array(
        'container' => false, // remove nav container
        'menu' => 'Footer Navigation3', // nav name
        'menu_id' => '', // custom id
        'menu_class' => 'list-unstyled', // custom class
        'theme_location' => 'footer3', // where it's located in the theme
        'before' => '', // before the menu
        'after' => '', // after the menu
        'link_before' => '', // before each link
        'link_after' => '', // after each link
        'depth' => 3
    ));
}

function clm_footer4_nav()
{
    wp_nav_menu(array(
        'container' => false, // remove nav container
        'menu' => 'Footer Navigation4', // nav name
        'menu_id' => '', // custom id
        'menu_class' => 'list-unstyled', // custom class
        'theme_location' => 'footer4', // where it's located in the theme
        'before' => '', // before the menu
        'after' => '', // after the menu
        'link_before' => '', // before each link
        'link_after' => '', // after each link
        'depth' => 3
    ));
}



// Option page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Team Member',
        'menu_title' => 'Team Member',
        'menu_slug' => 'team-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'icon_url' => 'dashicons-buddicons-buddypress-logo'
    ));
	
    $parent = acf_add_options_page(array(
        'page_title' => 'Site Settings',
        'menu_title' => 'Site Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
	// Add sub page.
	$service_settings = acf_add_options_sub_page(array(
		'page_title'  => __('Services'),
		'menu_title'  => __('Services'),
		'parent_slug' => $parent['menu_slug'],
	));
	// Add sub page.
	$peptide_settings = acf_add_options_sub_page(array(
		'page_title'  => __('Peptide Links'),
		'menu_title'  => __('Peptide Links'),
		'parent_slug' => $parent['menu_slug'],
	));
	// Add sub page.
	$bpc_157_settings = acf_add_options_sub_page(array(
		'page_title'  => __('BPC 157 Links'),
		'menu_title'  => __('BPC 157 Links'),
		'parent_slug' => $parent['menu_slug'],
	));
}

/* Menu Order */
add_filter('menu_order', 'se354759_menu_order');
add_filter('custom_menu_order', '__return_true');

function se354759_menu_order($menu_order)
{
    $cpts = [
        'team-settings',
    ];

    $first_item = array_shift($menu_order);
    foreach ($cpts as $ctp) {
        $idx = array_search($ctp, $menu_order);
        if ($idx === false) {
            continue;
        }
        unset($menu_order[$idx]);
        array_unshift($menu_order, $ctp);
    }
    array_unshift($menu_order, $first_item);
    return $menu_order;
}
/* Menu Order End*/

function add_menu_atts($atts, $item, $args){

    // your check for primary menu location

    if( $args->theme_location == 'footer1' || $args->theme_location == 'main') {


      $atts['class'] = "menu-item";

   

    }
  

    return $atts;

  }


  add_filter('nav_menu_link_attributes', 'add_menu_atts', 10, 3);



add_filter('mime_types', 'dd_add_jfif_files');

function dd_add_jfif_files($mimes){
    $mimes['jfif'] = "image/jpeg";
    return $mimes;
}


/*removing default submit tag*/
remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit');


/*adding action with function which handles our button markup*/
add_action('wpcf7_init', 'twentysixteen_child_cf7_button');

/*adding out submit button tag*/
if (!function_exists('twentysixteen_child_cf7_button')) {
    function twentysixteen_child_cf7_button() {
    wpcf7_add_form_tag('submit', 'twentysixteen_child_cf7_button_handler');
    }
    }


    /*out button markup inside handler*/
if (!function_exists('twentysixteen_child_cf7_button_handler')) {
    function twentysixteen_child_cf7_button_handler($tag) {
    $tag = new WPCF7_FormTag($tag);
    $class = wpcf7_form_controls_class($tag->type);
    $atts = array();

    $atts['class'] = $tag->get_class_option($class);
    $atts['class'] .= ' twentysixteen-child-custom-btn';
    $atts['id'] = $tag->get_id_option();
    $atts['tabindex'] = $tag->get_option('tabindex', 'int', true);
    $value = isset($tag->values[0]) ? $tag->values[0] : '';
    if (empty($value)) {
    $value = esc_html__('Contact Us', 'twentysixteen');
    }
    $atts['type'] = 'submit';
    $atts = wpcf7_format_atts($atts);

    $contact_form = WPCF7_ContactForm::get_current();
    $contact_form_id = $contact_form -> id;
  
    if($contact_form_id=='21'){
    $html = sprintf('<button style="border:0;box-shadow:none;padding:0;"><a class="btn btn-primary">%2$s</a></button>', $atts, $value);
}else{
    $html = sprintf('<button  class="btn-with-circle-arw" type="submit" value="Subscribe">%2$s</button>', $atts, $value);
}
    return $html;
    }
    }



    
  //Woocommerce integration

  function mytheme_add_woocommerce_support() {

      add_theme_support( 'woocommerce' );

  }

  add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



function woocommerce_template_loop_product_title() {

    echo '<h3 class="woocommerce-loop-product__title title"><a href="'.get_permalink().'">' . get_the_title() . '</a></h3>';

}

function disable_coupon_field_on_cart( $enabled ) {

	if ( is_cart() ) {

		$enabled = false;

	}

	return $enabled;

}

add_filter( 'woocommerce_coupons_enabled', 'disable_coupon_field_on_cart' );





/**

 * Ensure cart contents update when products are added to the cart via AJAX

 */

function my_header_add_to_cart_fragment( $fragments ) {

    ob_start();

    $count = WC()->cart->cart_contents_count;

    ?><span class="cart-contents" title="<?php _e( 'View your shopping cart' ); ?>"><?php

    if ( $count > 0 ) {

        ?>

    <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>

    <?php            

    }

        ?></span><?php

 

    $fragments['span.cart-contents'] = ob_get_clean();

     

    return $fragments;

}

add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );









// Adding class to body

function additional_body_class( $classes ) {

     if ( is_front_page()){

          $classes[] = 'home';

     }

     elseif(is_page('buy')){

        $classes[] = 'buy';

     }

     else{

         $classes[] = 'woocommerce';

     }

     return $classes; 

}

add_filter( 'body_class', 'additional_body_class'); 



// // Add breadcrumb 

// function woo_add_wc_breadcrumbs() {

//     add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

// }

// add_action( 'init', 'woo_add_wc_breadcrumbs' );



// Increment and decrement buttons 

function display_quantity_minus() {

    echo '<button type="button" class="minus" >-</button>';

 }

 add_action( 'woocommerce_before_add_to_cart_quantity', 'display_quantity_minus' );

  

function display_quantity_plus() {

   echo '<button type="button" class="plus" >+</button>';

}

add_action( 'woocommerce_after_add_to_cart_quantity', 'display_quantity_plus' );

  





// Remove single product tabs 

add_filter( 'woocommerce_product_tabs', 'woo_remove_tabs', 98 );

function woo_remove_tabs( $tabs ){

    if(is_product()){

      unset( $tabs['description'] ); // Remove the description tab

      unset( $tabs['reviews'] ); // Remove the reviews tab

      unset( $tabs['additional_information'] ); // Remove the additional information tab

      }

  return $tabs;

}



// Related product limit to three 

 

function change_number_related_products( $args ) {

 $args['posts_per_page'] = 3; // # of related products

 $args['columns'] = 3; // # of columns per row

 return $args;

}

add_filter( 'woocommerce_output_related_products_args', 'change_number_related_products', 9999 );



// Breadcrumb fix

//Home rename

// add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );

// function wcc_change_breadcrumb_home_text( $defaults ) {

//     // Change the breadcrumb home text from 'Home' to 'Apartment'

//     if(is_woocommerce()){

//         $defaults['home'] = 'Shop TAP';

//         return $defaults;

//     }

//     else{

//         $defaults['home'] = 'Blog';

//         return $defaults;

//     }

// }



// Url change of breadcrumb 

// add_filter( 'woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url' );

// function woo_custom_breadrumb_home_url() {

//     if(is_woocommerce()){

//         return site_url('shop');

//     }

//     else{

//         return site_url('blog-listing');

//     }

// }



// shop page title

function hide_shop_page_title( $title ) {

   if ( is_shop() ) $title = false;

   return $title;

}

add_filter( 'woocommerce_show_page_title', 'hide_shop_page_title' );



// Redirect to Shop page

function store_mall_wc_empty_cart_redirect_url() {

    $url = site_url('shop');

    return esc_url( $url );

}

add_filter( 'woocommerce_return_to_shop_redirect', 'store_mall_wc_empty_cart_redirect_url' );



// Archive page title 

function hide_cat_page_title( $title ) {

   if ( is_product_category() ) $title = false;

   return $title;

}

add_filter( 'woocommerce_show_page_title', 'hide_cat_page_title' );



function rm_default_sorting_options( $options ){

 

	// unset( $options[ 'popularity' ] );

    $options[ 'popularity' ] = 'Popularity';

	unset( $options[ 'menu_order' ] );

	unset( $options[ 'rating' ] );

	// unset( $options[ 'date' ] );

    $options[ 'date' ] = 'Date';

	// unset( $options[ 'price' ] );

    $options[ 'price' ] = 'Price';

	unset( $options[ 'price-desc' ] );

	return $options;

}

add_filter( 'woocommerce_catalog_orderby', 'rm_default_sorting_options' );



// retrieves the attachment ID from the file URL

function pippin_get_image_id($image_url) {

    global $wpdb;

    $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 

        return $attachment[0]; 

}



// Change text view cart 

// add_filter( 'gettext', function( $translated_text ) {

//     if ( 'View cart' === $translated_text ) {

//         $translated_text = 'Go To Cart';

//     }

//     return $translated_text;

// });



add_filter('woocommerce_get_availability', 'availability_filter_func');

function availability_filter_func($availability)

{

// $availability['availability'] = str_ireplace('Out of stock', 'Out of stock', $availability['availability']);

return $availability;

}



// Add Custom field after product meta 

function woocommerce_template_top_category_desc (){

    echo '

        <ul class="nav nav-tabs justify-content-between" id="singleProductTab" role="tablist">

            <li class="nav-item" role="presentation">

                <a class="nav-link active" data-toggle="tab" href="#overview" aria-selected="true">Overview</a>

            </li>';
            $tfsec = get_field('show_nutrition');
            if($tfsec == 'true'){
            echo '<li class="nav-item" role="presentation">

                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#nutrition" aria-selected="false">Nutrition Facts</a>

            </li>';
            }
        echo '</ul>

        <div class="tab-content" id="singleProductContent">

            <div class="tab-pane show active" id="overview" role="tabpanel" aria-labelledby="home-tab">

                <div class="row gutters-40">

                    ';

                    while(have_rows('overview')){the_row();

                        echo '<div class="item col-xl-3 col-lg-4 col-sm-6"><div class="title">';

                            the_sub_field('title');

                        echo ':</div><div class="response">';

                            the_sub_field('response');

                        echo '</div></div>';

                    }

                    echo '

                </div>

            </div>';
            if($tfsec=='true'){

            echo 
        '<div class="tab-pane" id="nutrition" role="tabpanel" aria-labelledby="profile-tab">
                <div class="image-holder">

                        <img class="w-100" src="'.get_field('nutrition_image').'">

                    </div>
        </div>';
        }
        echo 
        '</div>

        <div class="shipping anim-fade">

            <div class="row align-items-center">

                <div class="col-auto column-free-shipping"><img class="ico" src="'.get_stylesheet_directory_uri().'/images/free-shipping-single-purple.svg">Free Shipping</div>

                <div class="col column-orders-over text-md-right">On orders over <span>$100</span> in NY, NJ, and surrounding states.</div>

            </div>

        </div>

        <div class="social-icon-wrapper d-md-none">

            <div class="share-txt">Share</div>

            <div class="social-icons">

                <a href="https://www.facebook.com/sharer.php?u='.get_permalink().'" target="_blank"><span class="icon-facebook"></span></a>

                <a href="https://twitter.com/intent/tweet?url='.get_permalink().'&text='.get_the_title().'&hashtags='.get_the_tags().'" target="_blank"><span class="icon-twitter"></span></a>

                <a href="http://pinterest.com/pin/create/link/?url='.get_permalink().'" target="_blank"><span class="icon-pinterest_social_pin"></span></a>

                <a href="mailto:?subject='.get_the_title().'&body='.get_permalink().'" target="_blank"><span class="icon-email"></span></a>

            </div>

        </div>'

        ;

}

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_top_category_desc', 40 );





//Hooks for woocommerce

// remove hooks 

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt ', 25 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );





// add hooks 

add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 40 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 5 );


if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(

        'page_title'     => 'Theme Settings',

        'menu_title'    => 'Theme Settings',

        'menu_slug'     => 'theme-general-settings',

        'capability'    => 'edit_posts',

        'redirect'        => false

    ));



}

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'PURCHASE', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'PURCHASE', 'woocommerce' );
}
// Change label
function custom_change_admin_label() {
    global $menu, $submenu;

    $menu[26][0] = 'Products';
    $submenu['edit.php?post_type=product'][5][0] = 'Products';
}
add_action( 'admin_menu', 'custom_change_admin_label' );

// Removes Order Notes Title

add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

// Remove Order Notes Field

add_filter( 'woocommerce_checkout_fields' , 'njengah_order_notes' );

function njengah_order_notes( $fields ) {

unset($fields['order']['order_comments']);

return $fields;

}

/**
* Redirect users to custom URL based on their role after login
*
* @param string $redirect
* @param object $user
* @return string
*/
function wc_custom_user_redirect( $redirect, $user ) {
    // Get the first of all the roles assigned to the user
    $role = $user->roles[0];
    $dashboard = get_site_url().'/my-account/edit-account';
    $myaccount = get_permalink( wc_get_page_id( 'shop' ) );
    if( $role == 'administrator' ) {
      //Redirect administrators to the dashboard
      $redirect = $dashboard;
    } elseif ( $role == 'shop-manager' ) {
      //Redirect shop managers to the dashboard
      $redirect = $dashboard;
    } elseif ( $role == 'editor' ) {
      //Redirect editors to the dashboard
      $redirect = $dashboard;
    } elseif ( $role == 'author' ) {
      //Redirect authors to the dashboard
      $redirect = $dashboard;
    } elseif ( $role == 'customer' || $role == 'subscriber' ) {
      //Redirect customers and subscribers to the "My Account" page
      $redirect = $myaccount;
    } else {
      //Redirect any other role to the previous visited page or, if not available, to the home
      $redirect = wp_get_referer() ? wp_get_referer() : home_url();
    }
    return $redirect;
  }
  add_filter( 'woocommerce_login_redirect', 'wc_custom_user_redirect', 10, 2 ); 
  

  add_filter('woocommerce_save_account_details_required_fields', 'remove_required_fields');

  function remove_required_fields( $required_fields ) {
    
      unset($required_fields['account_display_name']);

      return $required_fields;
  }

  remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

function exclude_page_from_cache() {
    if (is_page('sales-1-calendar')) {
        nocache_headers();
    }
}
add_action('wp', 'exclude_page_from_cache');


function start_session_in_wordpress() {
    if (!session_id()) {
        session_start();
    }
}

add_action('init', 'start_session_in_wordpress');


function lasara_scripts()
{
	wp_enqueue_style('lasara-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('lasara-main-style', get_template_directory_uri() . '/assets/style-index.css', array(), _S_VERSION);
	wp_style_add_data('lasara-style', 'rtl', 'replace');

	wp_enqueue_script('lasara-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('lasara-main-js', get_template_directory_uri() . '/assets/index.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'lasara_scripts');
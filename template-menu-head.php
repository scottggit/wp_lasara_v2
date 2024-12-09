<?php
//Template Name: Menu Heads

get_header(); ?>
<?php
global $post;
$post_slug = $post->post_name;
?>
<style>
    @media (min-width: 768px) {
        .step-wrap img {
            position: relative;
            left: -10px;
        }
    }

    .step-wrap img {
        width: auto;
        height: 6rem;
    }

    .text-wrap {
        position: absolute;
        left: 2rem;
        top: 20%;
    }

    @media (min-width: 768px) {
        .text-wrap {
            align-self: center;
        }
    }

    .step-wrap {
        box-shadow: 0px 20px 40px rgba(22, 80, 116, 0.1);
        border-radius: 1rem;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .specialize-wrap {
        box-shadow: 0px 20px 40px rgba(22, 80, 116, 0.1);
        justify-content: space-between;
        display: flex;
        border-radius: 1rem;
        align-items: center;
        height: 100%;
        position: relative;
        min-height: 18rem;

    }

    .specialize-wrap .img-wrap {

        height: 14rem;
        width: 16rem;
        position: absolute;
        right: 0;
        bottom: 0;

    }

    .text-wrap img {
        width: 2.5rem;
    }

    @media (min-width: 1500px) {
        .specialize-wrap .img-wrap {
            height: 17rem;
        }
    }

    .img-wrap img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
<style>
    .p-mb-0 p {
        margin-bottom: 0;
    }
</style>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center">
                <div class="col-xl-8 col-md-12">
                    <h1 class="display-4 pt-3 text-white mb-3 ">
                        <?php the_title(); ?>
                    </h1>
                    <div class="text-white mb-4 p-mb-0">
                        <?php the_content(); ?>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                        <li><a href="<?php echo get_site_url() ?>/services">Services</a></li>
                        <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5">
        <div class="container-fluid">
            <div class="mx-lg-5 px-lg-5">
                <?php
                $description = get_field('description');
                echo $description;
                ?>
            </div>
        </div>
    </section>

    <?php if ($post_slug == 'weight-loss-treatments') : ?>
        <section class="py-5 ready-start my-md-5">
            <div class="container">
                <h2 class="display-5 pb-5 text-center"><?php echo get_field('main_title'); ?></h2>
                <div class="row">
                  <?php if( have_rows('step_1') ): ?>
    <?php while( have_rows('step_1') ): the_row(); 
    ?>
                    <div class="col-md-4 mb-4">
                        <div class="step-wrap bg-white p-5">
                            <div class="d-flex gap-3 align-items-center mb-3">

                                <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>" class="img-fluid " />
                                <h2>STEP 1</h2>
                            </div>
                            <div class="mb-3"><?php echo get_sub_field('description'); ?></div>
<?php if(get_sub_field('link')){ ?>
                            <div class="d-flex">
                                <a href="<?php echo get_sub_field('link')['url']; ?>" class="btn btn-grad"><?php echo get_sub_field('link')['title']; ?></a>
                            </div>
<?php } ?>
                        </div>
                    </div>
                           <?php endwhile; ?>
<?php endif; ?>
    <?php if( have_rows('step_2') ): ?>
    <?php while( have_rows('step_2') ): the_row(); 
    ?>
                    <div class="col-md-4 mb-4">
                        <div class="step-wrap bg-white p-5">
                            <div class="d-flex gap-3 align-items-center mb-3">

                                <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>" class="img-fluid " />
                                <h2>STEP 2</h2>
                            </div>
                            <div class="mb-3"><?php echo get_sub_field('description'); ?></div>
              <?php if(get_sub_field('link')){ ?>
                            <div class="d-flex">
                                <a href="<?php echo get_sub_field('link')['url']; ?>" class="btn btn-grad"><?php echo get_sub_field('link')['title']; ?></a>
                            </div>
<?php } ?>
                        </div>
                    </div>
       <?php endwhile; ?>
<?php endif; ?>
    <?php if( have_rows('step_3') ): ?>
    <?php while( have_rows('step_3') ): the_row(); 
    ?>

                    <div class="col-md-4 mb-4">
                        <div class="step-wrap bg-white p-5">
                            <div class="d-flex gap-3 align-items-center mb-3">

                                <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>" class="img-fluid " />
                                <h2>STEP 3</h2>
                            </div>
                            <div class="mb-3"><?php echo get_sub_field('description'); ?></div>
                    <?php if(get_sub_field('link')){ ?>
                            <div class="d-flex">
                                <a href="<?php echo get_sub_field('link')['url']; ?>" class="btn btn-grad"><?php echo get_sub_field('link')['title']; ?></a>
                            </div>
<?php } ?>
                        </div>
                    </div>
                       <?php endwhile; ?>
<?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="py-5">
        <div class="container-fluid">
            <div class="mx-lg-5 px-lg-5">
                <div class="row">
                    <?php


                    /* 
 * Paginate Advanced Custom Field repeater
 */

                    // if( get_query_var('paged') ) {
                    //   $page = get_query_var( 'paged' );
                    // } else {
                    //   $page = 1;
                    // }

                    // Variables
                    // $row              = 0;
                    // $post_per_page  = -1; // How many images to display on each page
                    // $images           = get_field( 'menu_head_tiles_links' );
                    // $total            = count( $images );
                    // $pages            = ceil( $total / $post_per_page );
                    // $min              = ( ( $page * $post_per_page ) - $post_per_page ) + 1;
                    // $max              = ( $min + $post_per_page ) - 1;





                    if (have_rows('menu_head_tiles_links')) :
                        while (have_rows('menu_head_tiles_links')) : the_row();



                            // $row++;

                            // // Ignore this image if $row is lower than $min
                            // if($row < $min) { continue; }

                            // // Stop loop completely if $row is higher than $max
                            // if($row > $max) { break; }


                            //             $services = [];


                            $link = get_sub_field('tile_link');

                            $description = get_sub_field('description');
                            $services[$link['url']] = $link['title'];
                            $index = get_row_index();
                            $title =    $link['title'];

                    ?>
                            <div class="col-md-4 pb-5">
                                <div class="service-item">

                                    <?php
                                    $post_id = url_to_postid($link['url']);


                                    if (has_post_thumbnail($post_id)) {
                                    ?>
                                        <div class="pb-2 w-100">
                                            <img src="<?php echo  get_the_post_thumbnail_url($post_id); ?>" class="w-100 br-5" alt="">
                                            <h5 class="card-title pt-4"> <a href="<?php echo $link['url']; ?>"><?php echo $title; ?></a></h5>
                                            <div>
                                                <?php if (!empty($description)) {
                                                    echo $description;
                                                } else {
                                                    echo get_the_excerpt($post_id);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="pb-2  w-100">
                                            <img src="<?php echo bloginfo('template_directory') ?>/img/placeholder.jpg " class="w-100" />
                                            <h5 class="card-title pt-4">
                                                <a href="<?php echo $link['url']; ?>"><?php echo $title; ?></a>
                                            </h5>
                                            <div>
                                                <?php if (!empty($description)) {
                                                    echo $description;
                                                } else {
                                                    echo get_the_excerpt($post_id);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    <?php  } ?>




                                    <div class="card-text d-block">

                                        <a href="<?php echo $link['url']; ?>" class="mt-4 btn  btn-grad mx-1 position-relative z-2 px-3 align-items-center">Learn
                                            More</a>
                                    </div>

                                </div>
                            </div>
                        <?php

                        endwhile;

                        ?>

                    <?php else : ?>

                        No Posts found

                    <?php endif; ?>


                    <?php

                    /* Fix Grid if item is less than 5 */
                    echo '<style>.service-tile-container{';
                    echo '--grid-column-count: 4';
                    echo '}</style>';
                    ?>
                    <?php /* get_template_part( 'template-parts/overview-listing' ); */ ?>
                </div>
                <?php /*    <div class="d-flex pagination-services mt-5 justify-content-center">
                    <?php 
                    
                    
 // Pagination
  echo paginate_links( array(
					'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
					'total'        => $pages,
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
            </div> */ ?>
            </div>
        </div>
    </section>



    <?php get_template_part('template-parts/locations'); ?>
</div>
<?php get_footer(); ?>  
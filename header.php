<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory') ?>/favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/styles.css?v=0.0.1" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/custom.css?v=0.0.1" />
    <?php wp_head(); ?>

    <script src="https://js.chargebee.com/v2/chargebee.js" data-cb-site="<?php echo CB_LABEL; ?>" data-cb-gtm-enabled="true"></script>
    <style>
        body .what-we-offer {
            margin: 0 !important;
            padding: 0 !Important;
        }

        .single-menu-item .small_sub_menu li a:hover {
            color: #000;
        }

        nav.mobile-nav .m-menu .single-submenu-mobile .mobile-submenu ul li a {
            font-size: 1rem;
        }

        .single-submenu-mobile .mobile-submenu li:not(:last-child) {

            border-bottom: 1px solid #ffffff5d;
        }

        .single-submenu-mobile .mobile-submenu li {
            padding: 1rem 0;
            border-bottom: 1px solid #ffffff5d;
        }

        .single-submenu-mobile .mobile-submenu {
            height: 100%;
        }

        li.single-menu-item {
            position: relative;
        }

        li.single-menu-item .mega-menu.small_sub_menu {
            width: 280%;
            padding: 2rem;
        }

        li.single-menu-item .mega-menu.small_sub_menu ul {
            list-style: none;
            padding-left: 0;
        }

        @media screen and (max-width: 1200px) {

            body nav.mobile-nav .m-menu .sub-menu-item a {
                padding: 0;
            }

            body nav.mobile-nav .m-menu .mobile-submenu ul li a {
                padding-left: 0;
                padding-right: 0;
                padding-bottom: 0;
            }

            body nav.mobile-nav .m-menu ul li a.btn {
                margin: 1rem 1rem;
                margin-top: 2rem;
            }
        }

        .z-2 {
            z-index: 2;
        }

        @media screen and (max-width: 368px) {
            .lasara-nav .navbar-brand {
                max-width: 7.25rem;
                margin: 0;
            }

        }
    </style>

</head>

<body>

    <div class="mobile-menu-wrapper">
        <div class="container position-relative">
            <nav class="mobile-nav bi-navbar lasara-nav p-3 ">

                <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox">

                <a class="navbar-brand logo " href="<?php echo get_site_url() ?>">
                    <img src="<?php bloginfo('template_directory') ?>/img/logo.svg" alt="LaSara Medical Group" class="img" />
                </a>

                <div class="col-auto d-xl-none">
                    <label class="m-menu__toggle m_menu_open" for="menu">
                        <svg width="35" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                            <line x1="3" y1="12" x2="21" y2="12" stroke-dasharray="13"></line>
                            <line x1="3" y1="6" x2="21" y2="6" stroke-dasharray="10"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </label>
                </div>

                <label class="m-menu__overlay" for="menu"></label>

                <div class="m-menu">
                    <div class="m-menu__header">
                        <label class="m-menu__toggle m_menu_close" for="menu">
                            <svg width="20" height="20s" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </label>

                    </div>

                    <ul>


                        <?php

                        // Check value exists.
                        if (have_rows('main_menu_items', 'option')) :
                            $k = 1;
                            // Loop through rows.
                            while (have_rows('main_menu_items', 'option')) : the_row();



                                if (have_rows('menu_item')) :

                                    // Loop through rows.
                                    while (have_rows('menu_item')) : the_row();

                        ?> <?php global $post;
                                        global $wp;
                                        $page_slug = home_url(add_query_arg(array(), $wp->request));

                            ?>
                                        <li>
                                            <label class="<?php if (get_sub_field('has_sub_menu') == "Yes" || get_sub_field('has_single_sub_menu') == "Yes") {
                                                                echo 'a-label__chevron';
                                                            } ?>" for="item-<?php echo $k; ?>">
                                                <a href="<?php echo get_sub_field('title_and_link')['url']; ?>" class=" <?php if ($page_slug == get_sub_field('title_and_link')['url']) {
                                                                                                                            echo 'active';
                                                                                                                        } ?>" <?php if (get_sub_field('has_sub_menu') == "No" || get_sub_field('has_single_sub_menu') == "No") { ?> href="<?php echo get_sub_field('title_and_link')['url']; ?>" <?php }  ?>><?php echo get_sub_field('title_and_link')['title']; ?></a></label>
                                            <input type="checkbox" id="item-<?php echo $k; ?>" name="item-<?php echo $k; ?>" class="m-menu__checkbox">

                                            <?php
                                            if (get_sub_field('has_sub_menu') == "Yes") {

                                            ?>

                                                <?php

                                                // Check value exists.
                                                if (have_rows('sub_menu')) :

                                                    // Loop through rows.
                                                    while (have_rows('sub_menu')) : the_row();



                                                ?>



                                                        <div class="m-menu ddddddss">

                                                            <div class="mobile-submenu">
                                                                <div class="m-menu__header">
                                                                    <label class="m-menu__toggle" for="item-<?php echo $k; ?>">
                                                                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1" stroke-linecap="butt" stroke-linejoin="arcs">
                                                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                                                        </svg>
                                                                    </label>
                                                                    <label class="m-menu__toggle m_menu_close" for="menu">
                                                                        <svg width="20" height="20s" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                        </svg>
                                                                    </label>

                                                                </div>





                                                                <?php

                                                                // Check value exists.
                                                                if (have_rows('left_section')) :

                                                                    // Loop through rows.
                                                                    while (have_rows('left_section')) : the_row();



                                                                ?>

                                                                        <div class="top-block py-4">

                                                                            <?php

                                                                            // Check value exists.
                                                                            if (have_rows('first_column')) :

                                                                                // Loop through rows.
                                                                                while (have_rows('first_column')) : the_row();



                                                                            ?>
                                                                                    <h5 class="px-3 text-white">
                                                                                        <?php echo get_sub_field('title'); ?>
                                                                                    </h5>

                                                                                    <ul>


                                                                                        <?php

                                                                                        // Check value exists.
                                                                                        if (have_rows('links')) :

                                                                                            // Loop through rows.
                                                                                            while (have_rows('links')) : the_row();



                                                                                        ?>

                                                                                                <li><a href="<?php echo get_sub_field('links')['url']; ?>" class="text-white"> <span class="fake-next me-1 me-md-3 ">
                                                                                                        </span>
                                                                                                        <?php echo get_sub_field('links')['title']; ?></a>
                                                                                                </li>
                                                                                        <?php

                                                                                            endwhile;

                                                                                        endif;

                                                                                        ?>


                                                                                    </ul>


                                                                                    <a href="<?php echo get_sub_field('view_all')['url']; ?>" class="btn text-white"><?php echo get_sub_field('view_all')['title']; ?></a>

                                                                            <?php

                                                                                endwhile;

                                                                            endif;

                                                                            ?>

                                                                        </div>

                                                                        <div class="bottom-block py-4">
                                                                            <?php

                                                                            // Check value exists.
                                                                            if (have_rows('second_column')) :

                                                                                // Loop through rows.
                                                                                while (have_rows('second_column')) : the_row();



                                                                            ?>



                                                                                    <h5 class="px-3 text-white"><?php echo get_sub_field('title'); ?></h5>

                                                                                    <ul>


                                                                                        <?php

                                                                                        // Check value exists.
                                                                                        if (have_rows('links')) :

                                                                                            // Loop through rows.
                                                                                            while (have_rows('links')) : the_row();



                                                                                        ?>

                                                                                                <li><a href="<?php echo get_sub_field('links')['url']; ?>" class="text-white"><span class="fake-next me-1 me-md-3 ">
                                                                                                        </span><?php echo get_sub_field('links')['title']; ?></a>
                                                                                                </li>
                                                                                        <?php

                                                                                            endwhile;

                                                                                        endif;

                                                                                        ?>


                                                                                    </ul>


                                                                                    <a href="<?php echo get_sub_field('view_all')['url']; ?>" class="btn text-white"><?php echo get_sub_field('view_all')['title']; ?></a>

                                                                            <?php

                                                                                endwhile;

                                                                            endif;

                                                                            ?>



                                                                        </div>
                                                                <?php

                                                                    endwhile;

                                                                endif;

                                                                ?>

                                                            </div>

                                                            <div class="row align-items-center justify-content-center my-4 bottom-wrap">


                                                                <?php

                                                                // Check value exists.
                                                                if (have_rows('right_section')) :

                                                                    // Loop through rows.
                                                                    while (have_rows('right_section')) : the_row();



                                                                ?>

                                                                        <div class='col-6 sub-menu-item'>
                                                                            <div class="d-flex">

                                                                                <a href="<?php echo get_sub_field('link')['url']; ?>"><span class="h6 font-bold "><?php echo get_sub_field('link')['title']; ?></span></a>

                                                                            </div>
                                                                        </div>




                                                                <?php

                                                                    endwhile;

                                                                endif;

                                                                ?>
                                                            </div>

                                                        </div>

                                                        <?php


                                                        ?>



                                                <?php

                                                    endwhile;
                                                else :
                                                endif;
                                            } elseif (get_sub_field('has_single_sub_menu') == "Yes") {
                                                ?>

                                                <div class="m-menu ddddddss single-submenu-mobile">

                                                    <div class="mobile-submenu">
                                                        <div class="m-menu__header mb-4">
                                                            <label class="m-menu__toggle" for="item-<?php echo $k; ?>">
                                                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1" stroke-linecap="butt" stroke-linejoin="arcs">
                                                                    <path d="M19 12H6M12 5l-7 7 7 7" />
                                                                </svg>
                                                            </label>
                                                            <label class="m-menu__toggle m_menu_close" for="menu">
                                                                <svg width="20" height="20s" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                </svg>
                                                            </label>

                                                        </div>
                                                        <ul>

                                                            <?php

                                                            // Check value exists.
                                                            if (have_rows('sub_menu_items')) :

                                                                // Loop through rows.
                                                                while (have_rows('sub_menu_items')) : the_row();


                                                            ?>

                                                                    <li>
                                                                        <h5 class="px-3 "><a class="text-white" href="<?php echo get_sub_field('sub_menu_item_link')['url']; ?>"><?php echo get_sub_field('sub_menu_item_link')['title']; ?></a>
                                                                        </h5>
                                                                    </li>
                                                            <?php

                                                                // End loop.
                                                                endwhile;

                                                            // No value.
                                                            else :
                                                            // Do something...
                                                            endif;
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php
                                            }

                                            ?>

                                        </li>
                        <?php

                                    endwhile;
                                else :
                                endif;
                                $k++;
                            endwhile;
                        else :
                        endif;
                        ?>
                    </ul>

                    <?php /* btns*/ ?>
                    <div class="row mt-5">
                        <?php /*  ?>
        <div class="col-12 ">
            <a href="<?php echo get_site_url() ?>/products"
                class="btn  d-block btn-grad mx-1 position-relative z-2 align-items-center mb-3"
                style="background:#025F89 !important;">Shop </a>
        </div>
    <?php */ ?>
                        <div class="col-12  ">
                            <a href="https://calendly.com/d/grf-5sr-mtt" target="_blank" class="btn d-block  mx-1  d-flex align-items-center justify-content-center text-center" style="color:#72BFE6 !important;background:transparent !important;border:1px solid #72BFE6 !important;">SCHEDULE
                                FREE
                                CONSULTATION</a>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </div>
    <nav class="navbar lasara-nav desktop-nav py-md-4 fixed-top navbar-expand-xl navbar-light ">
        <div class="container">
            <a class="navbar-brand logo order-1" href="<?php echo get_site_url() ?>">
                <img src="<?php bloginfo('template_directory') ?>/img/logo.svg" alt="LaSara Medical Group" class="img" />
            </a>
            <div class=" justify-content-lg-center order-4 order-xl-3" id="l-navbar">
                    <div class="collapse navbar-collapse justify-content-lg-end main-nav px-lg-4" id="bi-navbar">

                        <ul class="nav-menu navbar-nav mb-2 mb-lg-0 mr-4">

                            <?php

                            // Check value exists.
                            if (have_rows('main_menu_items', 'option')) :

                                // Loop through rows.
                                while (have_rows('main_menu_items', 'option')) : the_row();



                                    if (have_rows('menu_item')) :

                                        // Loop through rows.
                                        while (have_rows('menu_item')) : the_row();
                                            $count = 0;
                            ?>
                                            <?php global $post;
                                            global $wp;
                                            $page_slug = home_url(add_query_arg(array(), $wp->request));

                                            ?>
                                            <li class="<?php if (get_sub_field('has_single_sub_menu') == "Yes") {
                                                            echo 'single-menu-item ';
                                                        } ?> nav-item <?php echo get_sub_field('classname'); ?> 
                                        <?php if (get_sub_field('show_only_in_phone') == "Yes") {
                                                echo 'd-none';
                                            } ?> 
                                        <?php if (get_sub_field('has_sub_menu') == "Yes" || get_sub_field('has_single_sub_menu') == "Yes") {
                                                echo 'menu-item has-mega-menu';
                                            } ?>">
                                                <a class="nav-link <?php if ($page_slug == get_sub_field('title_and_link')['url']) {
                                                                        echo ' active';
                                                                    } ?>" aria-current="page" href="<?php echo get_sub_field('title_and_link')['url']; ?>"><?php echo get_sub_field('title_and_link')['title']; ?>
                                                    <?php if (get_sub_field('has_sub_menu') == "Yes" || get_sub_field('has_single_sub_menu') == "Yes") { ?><span class="mega-indicator" data-has-click-event="true"></span>

                                                    <?php } ?></a>


                                                <?php
                                                if (get_sub_field('has_sub_menu') == "Yes") {

                                                ?>

                                                    <?php

                                                    // Check value exists.
                                                    if (have_rows('sub_menu')) :

                                                        // Loop through rows.
                                                        while (have_rows('sub_menu')) : the_row();


                                                    ?>




                                                            <div class="mega-menu big_sub_menu">

                                                                <div class="row m-0 align-items-center ">

                                                                    <div class="col-md-7 col-left">

                                                                        <div class="row menu-item-block-wrap  ">



                                                                            <?php
                                                                            if (have_rows('left_section')) :

                                                                                // Loop through rows.
                                                                                while (have_rows('left_section')) : the_row();
                                                                            ?>



                                                                                    <div class="col-md-6 p-md-5">
                                                                                        <div class="py-md-5">

                                                                                            <?php
                                                                                            if (have_rows('first_column')) :

                                                                                                // Loop through rows.
                                                                                                while (have_rows('first_column')) : the_row();
                                                                                            ?>




                                                                                                    <h6 class="pb-2 text-white">
                                                                                                        <?php echo get_sub_field('title'); ?>
                                                                                                    </h6>

                                                                                                    <ul>
                                                                                                        <?php
                                                                                                        if (have_rows('links')) :

                                                                                                            // Loop through rows.
                                                                                                            while (have_rows('links')) : the_row();
                                                                                                        ?>
                                                                                                                <li class="mb-2">
                                                                                                                    <div class="d-flex align-items-center">
                                                                                                                        <span class="fake-next me-1 me-md-3 ">
                                                                                                                        </span>
                                                                                                                        <a class="text-white " href="<?php echo get_sub_field('links')['url']; ?>">
                                                                                                                            <?php echo get_sub_field('links')['title']; ?></a>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                        <?php
                                                                                                            endwhile;

                                                                                                        endif;

                                                                                                        ?>

                                                                                                    </ul>

                                                                                                    <?php if (get_sub_field('view_all')) { ?>
                                                                                                        <a href="<?php echo get_sub_field('view_all')['url']; ?>" class=" btn text-capitalize  btn-outline-white">

                                                                                                            <?php echo get_sub_field('view_all')['title']; ?></a>
                                                                                                    <?php } ?>

                                                                                            <?php
                                                                                                endwhile;

                                                                                            endif;

                                                                                            ?>
                                                                                        </div>
                                                                                    </div>




                                                                                    <div class="col-md-6 p-md-5">
                                                                                        <div class="py-md-5 ">
                                                                                            <?php
                                                                                            if (have_rows('second_column')) :

                                                                                                // Loop through rows.
                                                                                                while (have_rows('second_column')) : the_row();
                                                                                            ?>




                                                                                                    <h6 class="pb-2 text-white">
                                                                                                        <?php echo get_sub_field('title'); ?>
                                                                                                    </h6>

                                                                                                    <ul>
                                                                                                        <?php
                                                                                                        if (have_rows('links')) :

                                                                                                            // Loop through rows.
                                                                                                            while (have_rows('links')) : the_row();
                                                                                                        ?>
                                                                                                                <li class="mb-2">
                                                                                                                    <div class="d-flex align-items-center">
                                                                                                                        <span class="fake-next me-1 me-md-3 ">
                                                                                                                        </span>
                                                                                                                        <a class="text-white " href="<?php echo get_sub_field('links')['url']; ?>">

                                                                                                                            <?php echo get_sub_field('links')['title']; ?></a>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                        <?php
                                                                                                            endwhile;

                                                                                                        endif;

                                                                                                        ?>

                                                                                                    </ul>
                                                                                                    <?php if (get_sub_field('view_all')) { ?>

                                                                                                        <a href="<?php echo get_sub_field('view_all')['url']; ?>" class="btn text-capitalize btn-outline-white"><?php echo get_sub_field('view_all')['title']; ?></a>
                                                                                                    <?php } ?>

                                                                                            <?php
                                                                                                endwhile;

                                                                                            endif;

                                                                                            ?>
                                                                                        </div>


                                                                                    </div>



                                                                            <?php
                                                                                endwhile;

                                                                            endif;

                                                                            ?>



                                                                        </div>


                                                                    </div>






                                                                    <div class="col-md-5 col-right">
                                                                        <div class="row align-items-center justify-content-center mx-md-3">
                                                                            <?php
                                                                            if (have_rows('right_section')) :

                                                                                // Loop through rows.
                                                                                while (have_rows('right_section')) : the_row();
                                                                            ?>
                                                                                    <div class="col-md-5 ">

                                                                                        <div class="service-tile-container">
                                                                                            <div class="service-tile p-2 p-lg-4">
                                                                                                <a href="<?php echo get_sub_field('link')['url']; ?>">
                                                                                                    <span class="service-img  pb-3 me-1 me-md-3 service-img-svg">
                                                                                                        <img src="<?php bloginfo('template_directory') ?>/img/service/icon-check.svg" alt="Service Icon" />
                                                                                                    </span>
                                                                                                    <span class="h6 font-bold service-title"><?php echo get_sub_field('link')['title']; ?></span>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                            <?php
                                                                                endwhile;

                                                                            endif;

                                                                            ?>
                                                                        </div>

                                                                    </div>




                                                                </div>
                                                            </div>

                                                    <?php

                                                        // End loop.
                                                        endwhile;

                                                    // No value.
                                                    else :
                                                    // Do something...
                                                    endif;
                                                    ?>

                                                <?php
                                                } elseif (get_sub_field('has_single_sub_menu') == "Yes") {
                                                ?>
                                                    <div class="mega-menu small_sub_menu">
                                                        <ul>

                                                            <?php

                                                            // Check value exists.
                                                            if (have_rows('sub_menu_items')) :

                                                                // Loop through rows.
                                                                while (have_rows('sub_menu_items')) : the_row();


                                                            ?>

                                                                    <li>
                                                                        <a href="<?php echo get_sub_field('sub_menu_item_link')['url']; ?>"><?php echo get_sub_field('sub_menu_item_link')['title']; ?></a>
                                                                    </li>
                                                            <?php

                                                                // End loop.
                                                                endwhile;

                                                            // No value.
                                                            else :
                                                            // Do something...
                                                            endif;
                                                            ?>
                                                        </ul>
                                                    </div>
                                                <?php
                                                }

                                                ?>

                                            </li>
                            <?php

                                        // End loop.
                                        endwhile;

                                    // No value.
                                    else :
                                    // Do something...
                                    endif;


                                // End loop.
                                endwhile;

                            // No value.
                            else :
                            // Do something...
                            endif;
                            ?>




                        </ul>

                    </div>

                </div>
            <div class="right-head order-2 order-xl-4 d-lg-flex">

    <div class="call-us d-flex  text-nowrap gap-3 align-items-center"><span class="text-white">Call Us!</span><img src="<?php bloginfo('template_directory')?>/img/call.svg" alt=""><span class="text-white">000000000</span></div>

                <div class="ms-md-5 d-sm-flex order-2 order-xl-4 ps-3 pe-5 px-md-5 px-xl-0">

                    <?php /*?>
    <a href="<?php echo get_site_url() ?>/products"
        class="btn  btn-grad mx-1 position-relative z-2 px-3 align-items-center">Shop <span
            class="d-none d-md-inline">All Products</span></a>
<?php */ ?>
                    <a href="https://calendly.com/d/grf-5sr-mtt" target="_blank" class="btn btn-outline-white mx-1 d-none d-md-flex px-2 align-items-center">Free Consultation</a>
                </div>


            </div>
        </div>
    </nav>
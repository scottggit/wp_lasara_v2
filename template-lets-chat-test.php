<?php
/* Template Name: Lets Chat Test */
?>
<?php get_header('sales'); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

<style>

.main-container .sales-banner.bg-img.bg-top {
    background-position: -16rem 17% !important;
}
	.main-container .sales-banner .cross-vertical-right{
		margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
    padding-top: 0 !important;
}
    body {
        background-color: #F5F1E9;
    }

    .inter-400 {
        font-family: "Inter", sans-serif;
        font-weight: 400;
        font-optical-sizing: auto;
        font-style: normal;
    }

    .inter-500 {
        font-family: "Inter", sans-serif;
        font-weight: 500;
        font-optical-sizing: auto;
        font-style: normal;
    }

    .inter-500.h5 {
        line-height: 34px;
    }

    .inter-900 {
        font-family: "Inter", sans-serif;
        font-weight: 900;
        font-optical-sizing: auto;
        font-style: normal;
        color: #F4F1E9 !important;
    }

    .text-white * {
        color: #fff;
    }

    .sales-banner {
        position: relative;
        isolation: isolate;
    }

    .sales-banner::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(303.14deg, rgb(0 0 0 / 20%) 7.81%, rgb(0 0 0 / 54%) 83.79%, rgb(0 0 0 / 63%) 94.76%);
    }

    .lasaramedical-iframe-wrapper {
        padding: 0;
        background-color: #fff;
    }

    .lasaramedical-iframe-wrapper iframe {
        min-height: 100vh;
    }

    @media screen and (min-width: 991px) {
        .sales-banner::before {
            background: linear-gradient(303.14deg, rgba(0, 0, 0, 0) 7.81%, rgba(0, 0, 0, 0.32213) 83.79%, rgba(0, 0, 0, 0.35) 94.76%);
        }
        .main-container .sales-banner.bg-img.bg-top {
            background-position: 0rem 17% !important;
        }
        .lasaramedical-iframe-wrapper {
        	padding: 1.5rem;
        }
    }
    footer.bg-grad-2{
    	background: #6B8A7A
    }
    
</style>
<div class="main-container">
    <section class="bg-img bg-top bg-overlay-left-full py-5 bg-overlay-left-full sales-banner"
        data-background-image="<?php bloginfo('template_directory') ?>/img/mankind/sale-test-bg.jpeg">
        <div class="container-lg z-1">
            <img src="<?php bloginfo('template_directory') ?>/img/mankind/logo.png" alt="logo"
                class="logo-white mb-5" style="max-width: 7.5rem;" />
        </div>
        <div class="container-lg py-5 my-xl-5 z-1 cross-vertical-right">
            <div class="col-lg-6 col-xxl-5">
                <div class='text-white'><?php the_content(); ?></div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-lg py-lg-5">
            <div class="lasaramedical-iframe-wrapper w-100">
                <iframe src="https://lasaramedical.my.salesforce-sites.com/medical?type=web&memberId=a24VO000003Hv3NYAS" allow="https://www.lasara.com" title="Medical form" class="lasaramedical-iframe w-100"></iframe>
            </div>
        </div>
    </section>

    <?php //get_template_part('template-parts/our-results'); 
    ?>
</div>


<script>
    jQuery(document).ready(function() {
        $('#nav-profile-tab').on('click', function() {
            console.log('test');
            return false;
        });
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    });
</script>

<?php get_footer('sales-test'); ?>
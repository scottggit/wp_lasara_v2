<?php get_header();?>
<style>
.sales-tab .nav {
    align-items: end;
}

.sales-tab .nav>.nav-link {
    height: 99%;
}

.sales-tab .nav>.nav-link.active {
    height: 100%;
}

.sales-tab {
    position: relative;
    z-index: 9;
}

.sales-tab .fsBody {
    overflow: scroll;

    height: 50rem;
}

.sales-tab .nav-link p {

    line-height: 1.2;
}


.sales-tab .nav-link {
    background: #0000006b 0% 0% no-repeat padding-box;
    border-radius: 10px 10px 0px 0px;
    opacity: 1;
    backdrop-filter: blur(19px);
    -webkit-backdrop-filter: blur(19px);


}

@media (min-width: 992px) {
    .sales-tab .nav-link p {
        max-width: 15rem;
    }

}

.sales-tab .nav-link p {
    color: #444F5A;
}

.sales-tab .nav-link h3 {
    color: #fff;
}

.sales-tab .nav-link.active h3 {
    color: #025F89;
}

.sales-tab .nav-link.active {
    background: #fff;
}

.sales-tab .nav-link .tick-active {
    display: none;
}

.sales-tab .nav-link .tick-inactive {
    display: block;
}

.sales-tab .nav-link.active .tick-active {
    display: block;
}

.sales-tab .nav-link.active .tick-inactive {
    display: none;
}

.sales-tab .nav-link .tab-desc {
    display: none;
}

.sales-tab .nav-link.active .tab-desc {
    display: block;
}

.sales-tab {
    margin-top: -13rem;
}


.sales-tab .tab-desc {
    margin-bottom: 0;
}

.sales-tab .nav-link>.row {
    padding: 1rem;
}


@media (max-width: 992px) {
    .sales-tab .nav-link.active h3 {
        font-size: 1.3rem;
    }

    .sales-tab .nav-link h3 {
        font-size: 1rem;
    }

    .sales-tab .nav {
        flex-wrap: nowrap;
    }

    .sales-tab .nav-link {
        width: 50%;
    }

    .sales-banner {
        min-height: 34rem;
    }

    .sales-tab .nav-link>.row>div {
        width: 100%;
        text-align: center;
    }


    .sales-tab .nav-link>.row p {
        font-size: 0.7rem;
    }

    .sales-tab .nav-link .row img {
        margin: 0 auto 1rem auto;
        max-width: 1.2rem;
    }
}
</style>
<div class="main-container mt-4r">
    <section class="bg-img bg-top bg-overlay-left-full py-5 bg-overlay-left-full sales-banner"
        data-background-image="<?php bloginfo('template_directory')?>/img/sales-banner.jpg">
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 justify-content-center">
                <div class="col-lg-6 col-10 text-center">
                    <img src="<?php bloginfo('template_directory')?>/img/logo-white.png" alt="logo"
                        class="logo-white mb-5" style="max-width: 10rem;" />
                    <h1 class="text-white mb-5">Unlock the power of personalized health with Hormone Optimization &
                        Weight Loss</h1>
                </div>
                <div class="w-100"></div>

            </div>
        </div>
    </section>

    <section class="py-5  sales-tab">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-9">

                    <nav>
                        <div class="nav nav-tabs nav-pills" id="nav-tab" role="tablist">
                            <div class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                <div class="row align-items-center h-100">
                                    <div class="col-auto"> <img
                                            src="<?php bloginfo('template_directory')?>/img/tick-active.svg"
                                            alt="tick-active" class="tick tick-active" /> <img
                                            src="<?php bloginfo('template_directory')?>/img/tick-inactive.svg"
                                            alt="tick-inactive" class="tick tick-inactive" /></div>
                                    <div class="col-auto">
                                        <h3>STEP 1</h3>
                                        <p class="tab-desc">Fill out new patient health form to start semaglutide</p>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                <div class="row align-items-center h-100">
                                    <div class="col-auto"> <img
                                            src="<?php bloginfo('template_directory')?>/img/tick-active.svg"
                                            alt="tick-active" class="tick tick-active" /> <img
                                            src="<?php bloginfo('template_directory')?>/img/tick-inactive.svg"
                                            alt="tick-inactive" class="tick tick-inactive" /></div>
                                    <div class="col-auto">
                                        <h3>STEP 2</h3>
                                        <p class="tab-desc">Book a consultation</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <script type="text/javascript"
                                src="https://lasara.formstack.com/forms/js.php/semaglutide_tiktok_cu?nojquery=1&nojqueryui=1&nomodernizr=1">
                            </script>

                            <noscript><a href="https://lasara.formstack.com/forms/semaglutide_tiktok_cu"
                                    title="Online Form">Online Form -
                                    Semaglutide and Weight Loss</a></noscript>
                            <script type='text/javascript'>
                            if (typeof $ == 'undefined' && jQuery) {
                                $ = jQuery
                            }
                            </script>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            ..2.</div>

                    </div>
                </div>
            </div>
        </div>
    </section>


</div>


<script>
jQuery(document).ready(function() {
    console.log("ready!");
});
</script>

<?php get_footer();?>
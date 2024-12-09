<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                    Negative Impacts of ED
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/research">Research</a></li>
                    <li><a href="<?php echo get_site_url() ?>/negative-impacts-of-ed">Negative Impacts of ED</a></li>
                </ol>

            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-5 ps-xl-5 col-md-6">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/painful-are-you-candidate.jpg"
                        alt="Man Running"
                        class="img-fluid border-r-1 mb-4 mb-md-0"
                        />
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6">
                    <p>Erectile dysfunction occurs when a man is unable to get or maintain an erection long enough to have intercourse. Men of all ages can have erectile dysfunction. While most men have experienced ED at one point or another, it is only considered serious if it occurs more than half the time.</p>
                    <p>Erectile dysfunction comes with many negative impacts. While most people think only of the physical problem to the man, the disease can also come with psychological and financial implications. Not only that but the problem is not limited to the man affected.</p>
                    <p class="m-0">ED can have a significant impact on relationships and the significant other of the affected party.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-6 offset-xl-1 pe-xl-5 col-md-6 order-md-2">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/angiogenesis.jpg"
                        alt="Guy With Glasses"
                        class="img-fluid border-r-1 mb-4 mb-md-0"
                        />
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6 order-md-1">
                    <h2>Psychological</h2>
                    <p>Men with <a href="<?php echo get_site_url() ?>/services/erectile-dysfunction-shockwave-therapy" class="text-primary-light">erectile dysfunction</a> are likely to experience a loss of confidence because their self-image is negatively affected. They may develop a fear of developing new intimate relationships due to worry about not being able to sexually satisfy their partner. </p>
                    <p>Unfortunately, this angst can affect other parts of life. Guilt and worry can lead men into depression which only serves to exacerbate the situation.</p>
                    <p class="m-0">The significant other of the affected party also can have psychological issues. They may feel guilt for not being able to arouse their partner or a loss of confidence despite the cause being physical.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-5 ps-xl-5 col-md-6">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/guy-waiting.jpg"
                        alt="old Happy Couple"
                        class="img-fluid border-r-1 mb-4 mb-md-0"
                        />
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6">
                    <h2>Relationships</h2>
                    <p>A man’s relationships may be affected by ED. A man not currently in a relationship may avoid entering in one to avoid the embarrassment associated with erectile dysfunction.</p>
                    <p class="m-0">ED can add unnecessary stress to a current relationship. If partners don’t effectively communicate, they may end at odds over the problem. Without intimacy in the relationship each partner may feel rejected.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-6 offset-xl-1 pe-xl-5 col-md-6 order-md-2">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/running.jpg"
                        alt="Guy With Glasses"
                        class="img-fluid border-r-1 mb-4 mb-md-0"
                        />
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6 order-md-1">
                    <h2>Physical</h2>
                    <p>Unfortunately, ED is most often associated with health issues. More serious underlying diseases may be the reason for your ED. Cardiovascular disease and diabetes both cause a high incidence of ED. Moreover, smoking, drinking, and an unhealthy lifestyle put you at higher risk of developing ED. It’s important to see a physician to make sure there is nothing more serious going on.</p>
                    <p class="m-0">On top of underlying causes, certain treatments for ED may have side effects.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5 bg-img bg-top bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/relaxing-side.jpg">
        <div class="container z-1">
            <div class="row justify-content-end py-lg-5">
                <div class="col-md-6 col-sm-8 text-md-start text-end">
                    <h2 class="text-white font-black mb-4">
                        Contact LaSara Medical Group
                    </h2>
                    <p class="text-white mb-5">
                        Men all over the world suffer from erectile dysfunction. To learn more about angiogenesis, ED, or treatment options contact LaSara Medical Group.
                    </p>

                    <a href="<?php echo get_site_url() ?>/contactus" class="btn btn-grad">CONTACT US</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5 mt-lg-5 what-we-offer">
        <div class="container">
            <?php get_template_part( 'template-parts/what-we-offer' );?>
        </div>
    </section>
    <?php get_template_part('template-parts/locations'); ?>    
</div>

<?php get_footer(); ?>
<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                    Angiogenesis and Erectile Dysfunction
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/research">Research</a></li>
                    <li><a href="<?php echo get_site_url() ?>/angiogenesis-and-erectile-dysfunction">Angiogenesis and Erectile Dysfunction</a></li>
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
                        src="<?php bloginfo('template_directory')?>/img/running.jpg"
                        alt="Man Running"
                        class="img-fluid border-r-1 mb-4 mb-md-0"
                        />
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6">
                    <p><a href="https://www.lasara.com/services/erectile-dysfunction-shockwave-therapy">Erectile dysfunction</a> is a condition that affects many men at some point in their lifetime. Moderate to severe erectile dysfunction means a man is unable to get or maintain an erection long enough for intercourse at least 50% of the time. The common problem men face with ED is caused by vascular issues, wherein the veins of their penis have prematurely hardened or become smaller.</p>
                    <p class="m-0"> Prematurely hardened or smaller veins inhibit strong blood flow which is essential to a successful erection. When a man becomes aroused, the arteries open allowing blood to flow into the penis. Weak blood flow prevents men from getting or maintaining a strong erection.</p>
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
                        src="<?php bloginfo('template_directory')?>/img/man-smiling.jpg"
                        alt="Guy With Glasses"
                        class="img-fluid border-r-1 mb-4 mb-md-0"
                        />
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6 order-md-1">
                    <h2>The Benefits of Angiogenesis</h2>
                    <p>The good news is that a process called angiogenesis can help men regain successful erections. But what is angiogenesis anyway? Angiogenesis is a natural process that is normal and present during growth and development of the human body. It is found when wounds are healing in granulation tissue. Specifically, angiogenesis means the formation of new blood vessels.</p>
                    <p>This ability to form new blood vessels is why angiogenesis and erectile dysfunction are related. As previously stated, erectile dysfunction is a vascular issue. Through angiogenesis, the body can build new blood vessels in the penis and surrounding areas. The new blood vessels allow blood to flow properly and restore the strength of the erection.</p>
                    <p>To understand how angiogenesis helps with ED, it’s helpful to understand the targeted anatomy. The crura form the base of the penis. They attach to the pubic arch which is covered by muscle. The crura also attaches to the penile shaft.</p>
                    <p class="m-0">When men have erectile dysfunction for vascular reasons, they are not able to get the proper amount of blood into the penis. If these areas could be properly stimulated to cause angiogenesis, more blood vessels would form allowing a proper erection to take place.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-5 ps-xl-5 col-md-6">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/old-couple-overlay.jpg"
                        alt="old Happy Couple"
                        class="img-fluid border-r-1 mb-4 mb-md-0"
                        />
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6">
                    <h2>How Can it Be Done?</h2>
                    <p>Luckily, there is a therapy that can stimulate angiogenesis. Low intensity focused shockwave therapy, or focused shockwave therapy, works by targeting the crura and penile shaft with quick soundwaves which cause angiogenesis.</p>
                    <p class="m-0">Moreover, the treatment is extremely quick and painless. Patients will undergo six treatment sessions over three weeks, and each session lasts around 20 minutes.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5 bg-img bg-top bg-overlay-right" data-background-image="<?php bloginfo('template_directory') ?>/img/contact.jpg">
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
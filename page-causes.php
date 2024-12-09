<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                    Causes
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/research">Research</a></li>
                    <li><a href="<?php echo get_site_url() ?>/causes">Causes</a></li>
                </ol>

            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-10">
                    <h2 class="mb-4">The most commonly thought of reason for erectile dysfunction is old age.</h2>
                    <p>And while old age does increase your risk for ED, there are many other potential causes. <a href="<?php echo get_site_url() ?>/services/erectile-dysfunction-shockwave-therapy" class="text-primary-light">Erectile dysfunction</a> can be caused by blood flow issues, psychological issues, nerve issues, and muscular issues. In some cases, one or more of these problems will combine to cause the problem.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 ps-xl-5 col-md-6">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/guy-backpack.jpg"
                        alt="guy-backpack"
                        class="img-fluid border-r-1 mb-4 mb-md-0"
                        />
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6">
                    <p>Blood flow issues are often caused by “atherosclerosis.” <a href="https://www.medicalnewstoday.com/articles/5702.php" target="_blank" rel="noopener noreferrer" class="text-primary-light">Medical News Today</a> explains atherosclerosis as when arteries in the penis are clogged or narrowed. In the context of ED, it’s when not enough blood supply can reach the penis. Patients with high blood pressure and heart disease were also shown to be at higher risk of ED by the <a href="http://www.clevelandclinicmeded.com/medicalpubs/diseasemanagement/endocrinology/erectile-dysfunction/" target="_blank" rel="noopener noreferrer" class="text-primary-light">Cleveland Clinic</a>.</p>
                    <p>Atherosclerosis is the most common cause of ED, especially among older men. Hardening of the arteries prevents blood from easily reaching the penis. Atherosclerosis is the general term used to describe a disease in which narrow arteries prevent blood from flowing the way it should. </p>
                    <p class="m-0">Psychological issues can also play a significant role in erectile dysfunction. Stress, anxiety, guilt, depression, and low self-esteem can all contribute to erectile dysfunction. In rare cases, men may have never been able to achieve an erection. In these cases, the underlying cause is usually psychological. More commonly, men have had successful erections in the past and can no longer do so.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-lg-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 offset-xl-1 pe-xl-5 col-md-6 order-md-2">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/guy-tran-station.jpg"
                        alt="Guy With Glasses"
                        class="img-fluid border-r-1 mb-4 mb-md-0"
                        />
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6 order-md-1">
                    <p>Depression may be the most common psychological issue involved with erectile dysfunction. Depression comes with cardiovascular disease which is another risk factor for ED. Men with depression should see their doctor and have a full workup done.</p>
                    <p><a href="https://www.hopkinsmedicine.org/healthlibrary/conditions/kidney_and_urinary_system_disorders/impotenceerectile_dysfunction_85,P01482" target="_blank" rel="noopener noreferrer" class="text-primary-light">Hopkins Medicine</a> details the potential nerve issues associated with ED, “There are many neurological (nerve problems) causes of ED. Diabetes, chronic alcoholism, multiple sclerosis, heavy metal poisoning, spinal cord and nerve injuries, and nerve damage from pelvic operations can cause erectile dysfunction.”</p>
                    <p>Muscular issues can also cause erectile dysfunction. Hopkins notes that while the problem is called venous leak, the real issue is actually a problem with the smooth muscle around the veins rather than the veins themselves. Excess tissue growth or wasting away of tissue in the smooth muscle tissue in the penis can cause erection problems. Patients who experience this problem may have difficulty maintaining an erection—an early symptom of erectile dysfunction.</p>
                    <p class="m-0">To learn more about the causes of erectile dysfunction and to further understand your treatment options, contact staff at LaSara Medical Group.</p>
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
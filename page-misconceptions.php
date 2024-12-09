<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                    Misconceptions
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/research">Research</a></li>
                    <li><a href="<?php echo get_site_url() ?>/misconceptions">Misconceptions</a></li>
                </ol>

            </div>
        </div>
    </section>
    <section class="pt-5 mt-lg-5">
        <div class="container">
            <div class="row justify-content-center text-center pb-lg-5">
                <div class="col-lg-10">
                    <h2 class="mb-4"><a href="<?php echo get_site_url() ?>/services/erectile-dysfunction-shockwave-therapy" class="text-primary-light"><u>Erectile dysfunction</u></a> can be an uncomfortable subject.</h2>
                    <p>As such, there are often serious misconceptions about the issue resulting from misinformation. But this creates a misunderstanding between the reality of ED and what people think about it. And this gap can cause unnecessary suffering.</p>
                    <p class="mb-5">As with any disease, being educated and aware can help you take positive steps toward treatment. LaSara Medical Group aims to clear up some misconceptions about ED so that you can begin to move on with your life.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-5 px-lg-5">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/watering.jpg"
                        alt="Guy With Glasses"
                        class="img-fluid border-r-1 mb-4"
                        />
                    </div>
                    <p class="text-small text-primary-light mb-2">MISCONCEPTION 1</p>
                    <h3 class="font-bold mb-4">Only older men have ED</h3>
                    <p class="mb-0">While it’s true that as you age your risk of erectile dysfunction increases, men of all ages can experience differing levels of ED. In fact, according to the <a href="https://www.clevelandclinicmeded.com/medicalpubs/diseasemanagement/endocrinology/erectile-dysfunction/" class="text-primary-light" target="_blank">Cleveland Clinic</a>, 40% of men have experienced erectile dysfunction by age 40 and 5% of men have ED at age 40</p>
                </div>
                <div class="col-md-6 mb-5 px-lg-5">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/train-station.jpg"
                        alt="Guy With Glasses"
                        class="img-fluid border-r-1 mb-4"
                        />
                    </div>
                    <p class="text-small text-primary-light mb-2">MISCONCEPTION 2</p>
                    <h3 class="font-bold mb-4">ED is no fun, but it’s not dangerous</h3>
                    <p class="mb-0">Unfortunately, this statement is not true. ED can be a symptom of a more serious underlying disease. Cardiovascular disease, diabetes, and hypertension can all cause erectile dysfunction. If you have been experiencing ED for over two months, make an appointment with a doctor so that you can get a full check-up.</p>
                </div>
                <div class="col-md-6 mb-5 px-lg-5">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/cycling.jpg"
                        alt="Guy With Glasses"
                        class="img-fluid border-r-1 mb-4"
                        />
                    </div>
                    <p class="text-small text-primary-light mb-2">MISCONCEPTION 3</p>
                    <h3 class="font-bold mb-4">If you can’t get an erection, you’re just not attracted to your partner</h3>
                    <p class="mb-0">This wrong assumption can be a major cause of strife in a relationship. ED is difficult for both partners in the relationship and needs to be handled together as a team. Many factors can prevent you from getting an erection. Diabetes, medications for blood pressure, anxiety, depression, and nerve disorders are just a few examples.</p>
                </div>
                <div class="col-md-6 mb-5 px-lg-5">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/couple-laughing.jpg"
                        alt="Guy With Glasses"
                        class="img-fluid border-r-1 mb-4"
                        />
                    </div>
                    <p class="text-small text-primary-light mb-2">MISCONCEPTION 4</p>
                    <h3 class="font-bold mb-4">Erectile dysfunction only affects the man</h3>
                    <p class="mb-0">ED inevitably has an effect on your sexual partner. Without effective communication, partners feel guilty and suffer in silence. As uncomfortable as it might be, ED requires open lines of communication to get everyone on the same page. Couples can come out of the experience stronger, but only if they can openly communicate.</p>
                </div>
                <div class="col-md-6 mb-5 px-lg-5">
                    <div class="border-r-1 bg-img-overlay-sm-left">
                        <img
                        src="<?php bloginfo('template_directory')?>/img/excercise.jpg"
                        alt="Guy With Glasses"
                        class="img-fluid border-r-1 mb-4"
                        />
                    </div>
                    <p class="text-small text-primary-light mb-2">MISCONCEPTION 5</p>
                    <h3 class="font-bold mb-4">Pills are the only way to treat ED</h3>
                    <p class="mb-0">A common but untrue statement. Advances in technology have led to new treatments. One such treatment is low intensity focused shockwave therapy, otherwise known as focused shockwave therapy. Focused shockwave therapy aims to help your body perform angiogenesis. Angiogenesis is the process by which new blood vessels are formed from older ones. By stimulating this natural process, ED sufferers can see significant benefits. For more information on low intensity focused shockwave therapy and to see if it is right for you, contact LaSara Medical Group.</p>
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
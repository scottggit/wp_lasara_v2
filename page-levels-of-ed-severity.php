<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                    Levels of ED Severity
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/research">Research</a></li>
                    <li><a href="<?php echo get_site_url() ?>/levels-of-ed-severity">Levels of ED Severity</a></li>
                </ol>

            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5">
        <div class="container">
            <div class="border-r-1 bg-img-overlay-sm-left">
                <img
                src="<?php bloginfo('template_directory')?>/img/guy-relaxed.jpg"
                alt="Guy Relaxed"
                class="img-fluid border-r-1 mb-4"
                />
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <p>Stated simply, erectile dysfunction (ED) is defined as the inability to maintain an erection sufficient for sexual activity. Slightly more than half the men between the ages of 40 and 70 will experience some form of ED, and while it is age-related, many younger men also experience erectile problems.</p>
                    <p>No doubt many of you reading this page have experienced a time when an erection didn’t appear as expected, or is less rigid than you expect, or appeared and then disappeared quickly.</p>
                    <p>In examining this very common problem, researchers at Pfizer have developed what they call an Erection Hardness Score, which measures erection hardness on a 4-point scale. Their aim was to help men, their partners, and their doctors diagnose erectile dysfunction on a scale from 1 (soft) to 4 (hard).</p>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-5">
                    <ul class="list-check-grad">
                        <li>
                            <p class="text-primary mb-0 font-bold">LEVEL 1</p>
                            <p>The penis is somewhat larger than normal but not really hard.</p>
                        </li>
                        <li>
                            <p class="text-primary mb-0 font-bold">LEVEL 2</p>
                            <p>The penis is hard but not hard enough to achieve penetration.</p>
                        </li>
                        <li>
                            <p class="text-primary mb-0 font-bold">LEVEL 3</p>
                            <p>The penis is hard enough to achieve penetration but not completely hard.</p>
                        </li>
                        <li>
                            <p class="text-primary mb-0 font-bold">LEVEL 4</p>
                            <p>The penis is completely hard and fully rigid.</p>
                        </li>
                    </ul>
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
                        src="<?php bloginfo('template_directory')?>/img/couple-cycle.jpg"
                        alt="Couple Cycling"
                        class="img-fluid border-r-1 mb-4 mb-md-0"
                        />
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6 order-md-1">
                    <p>Erectile problems can cause immense distress to both individuals and relationships. It’s very easy to panic and think the worst of everything. A man may worry that somehow he has injured himself in a way that prevents him from performing. And partners may worry that they are no longer attractive or that their ability to procreate is in jeopardy.</p>
                    <p>It’s important to recognize that every man in his lifetime will probably experience this problem. Many find that within a few days or weeks, the situation has resolved itself. So it’s important to remain calm and be realistic.</p>
                    <p>If you’re experiencing nighttime and occasional daytime erections, the chances are good that the blood flow and the nerve supply serving the penis are in good working order.</p>
                    <p class="m-0">On the other hand, if the problem persists, causing personal concern and possibly creating a strain in your relationship, you may need professional help. We urge you to make an appointment with LaSara Medical to consider the latest advance in the treatment of ED, low intensity focused shockwave therapy.</p>
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
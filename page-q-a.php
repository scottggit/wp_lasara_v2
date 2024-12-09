<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 mb-xl-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        Q & A
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/about/q-a">Q & A</a></li>
                </ol>

            </div>
        </div>
    </section>
    <section class="py-5 my-lg-5">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-xxl-10 col-lg-10 z-1 py-3">
              <div class="faq-accordian">
                <div class="accordion accordion-flush">
                    <?php $faqs = [
                        'What exactly is Low Intensity Focused Shockwave Therapy?' => '<p>Shockwave therapy is a non-invasive medical treatment that treats the root cause of Erectile Dysfunction (ED). 80% of ED cases are caused by poor blood flow due to the unhealthy narrowing of blood vessels and micro-plaque buildup. Shockwaves breakthrough any micro-plaque and stimulate the body to grow new blood vessels into the penis. The outcome is the ability to achieve and maintain firm and rigid erections naturally.</p>',

                        'How do I know if it will benefit me?' => '<p>During your initial doctor’s visit, a physical evaluation will be conducted by our board certified, male physician. The two of you will discuss and conclude whether the treatment will benefit you.</p>',

                        'How long does the treatment take and how many treatments will I need?' => '<p>The treatment is performed at any of our LaSara Medical Group locations. The entire office visit takes about 30 minutes for each treatment session. Our protocol consists of 12 treatments to ensure maximum results. Each patient starts with 6 treatments to be completed over 3 to 6 weeks of time. We then wait for 90 days to give the body time to grow new blood vessels and repair the penile tissue. Each patient has the chance to do a second round 6 treatments at the 90 day mark or anytime over the following 12 months.</p>',

                        'Is the treatment painful?' => '<p>No, focused shockwave therapy is not painful and does not require any sort of anesthesia. If you are researching other shockwave treatment providers that state some of their patients do use numbing cream, then you are engaged with a provider that is using a machine not clinically studied or proven to be safe and effective.</p>',

                        'When will I see benefits?' => '<p>Every patient is different. Some men begin to experience increased sensitivity and erectile function immediately after their prescribed treatment protocol is completed. Others take up to 3-4 months before seeing a change in erectile performance. For more information, please see our&nbsp;clinical studies&nbsp;section.</p>',

                        'How soon can I continue my normal daily function?' => '<p>Immediately after the session. This is an outpatient procedure and requires no recuperation time.</p>',

                        'What are the benefits?' => '<ul class="part-of-content-page"><li>Improved erectile function</li><li>Enhance sexual performance and stamina</li><li>Increased stimulation</li><li>Spontaneous and natural erections</li><li>Improved satisfaction and orgasm</li></ul>',

                        'Is this a new type of treatment for ED?' => '<p>No, this type of treatment has been used for over a decade in Europe and is considered the gold standard.</p>',

                        'How will you handle my privacy and confidentiality?' => '<p>We only treat male patients and have an all-male staff that is sympathetic and understanding to the sensitivity of the issue that many men have about ED. Our appointment scheduling is meant to provide a quick in and out experience and privacy.</p>',

                        'Is it covered by insurance or medicare?' => '<p>No, Shockwave therapy is an elective procedure and is not covered by insurance.</p>',
                    ];?>            
                    <?php get_template_part( 'template-parts/faq-accordian' );?>
                </div>
              </div>
            </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
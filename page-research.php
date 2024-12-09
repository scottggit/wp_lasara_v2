<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-top bg-overlay-left-full py-5 bg-overlay-left-full" data-background-image="<?php bloginfo('template_directory') ?>/img/bg-reseach.jpg">
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
            <div class="row py-lg-5">
                <div class="col-xl-4 col-md-6 offset-md-1">
                    <h1 class="text-white mb-5">Research</h1>
                </div>
                <div class="w-100"></div>
                <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
                    <h4 class="font-light text-white line-height-lg">
                        At LaSara Medical Group, our number one goal is provide treatments and products to our patients that are backed by research and clinical data proving the efficacy and safety of our offerings.
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-5 offset-md-1 pe-lg-5">
                    <div class="bg-img-overlay bg-img-overlay-sm-right sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
                        <img src="<?php bloginfo('template_directory') ?>/img/peptide-get-back.jpg" alt="Old Couple" class="img-fluid border-r-1" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 ps-md-5">
                    <p class="mb-0">
                        At LaSara Medical Group, our number one goal is provide treatments and products to our patients that are backed by research and clinical data proving the efficacy and safety of our offerings. We rely on the international and domestic healthcare communities and medical universities who are spearheading the advancements of patient care and treatments. We take pride in offering treatment modalities that present the greatest chance of success with the least amount of risk. Every LaSara treatment and product has been tested and proven with at least 5 or more years of research and clinical data.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <h2 class="mb-0 text-center animate__animated" data-animate="slideInUp">Here you will find a library of research, clinical data, and supporting articles for each of the treatments and products that we offer.
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="mx-lg-5 px-lg-5">
                <?php /*$services = [
                    'Erectile Dysfunction',
                    'Testosterone Replacement Therapy',
                    'Performance Peptides & Nad+',
                    'Orthopedics & Pain Management',
                    'Aesthetics'
                ];?>            
                <?php get_template_part( 'template-parts/service-tile' );*/?>
                <?php $services = [
                    'mens-sexual-health-treatments' => 'Men’s Sexual Health Treatments',
                    'hormones-peptides-nad' => 'Hormones, Peptides & NAD+ ',
                    'orthopedics-pain-management' => 'Orthopedics & Pain Management',
                    'aesthetics' => 'Aesthetics',
                    'erectile-dysfunction-shockwave-therapy' => 'Erectile Dysfunction Shockwave Therapy',
                    'peyronies-disease-or-penile-injury-shockwave-therapy' => 'Peyronie’s Disease Or Penile Injury Shockwave Therapy',
                    'pelvic-pain-syndrome-and-chronic-prostatitis' => 'Pelvic Pain Syndrome And Chronic Prostatitis Shockwave Therapy',
                    'penile-injection-therapy' => 'Penile Injection Therapy',
                    'pharmaceuticals' => 'Men’s Sexual Health Pharmaceutical',
                    'testosterone-hormone-replace-therapy' => 'Testosterone Replacement Therapy',
                    'peptide-therapy' => 'Peptide Therapy',
                    'nad' => 'Nad+ Treatments',
                    'neuropathy' => 'Neuropathy',
                    'plantar-fasciitis-heel-spurs' => 'Plantar Fasciitis & Heel Spurs',
                    'jumpers-knee-patellar-tendinitis' => 'Jumper’s Knee & Patellar Tendinitis',
                    'painful-shoulder-tendinopathy' => 'Painful Shoulder',
                    'tennis-and-golfers-elbow' => 'Tennis And Golfer’s Elbow',
                    'muscle-pain-tear' => 'Muscle Pain & Tear',
                    'hip-pain' => 'Hip Pain',
                    'bone-healing' => 'Bone Fracture Healing',
                    'facial-skin-tightening-rejuvenation' => 'Facial Skin Tightening & Rejuvenation',
                    'scar-reduction-face-body' => 'Scar Reduction Face & Body',
                    'cellulite' => 'Cellulite',
                ];?>            
                <?php get_template_part( 'template-parts/service-tile-w-link' );?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
<?php
/* Template_Name: Flocktrt FormStack*/
?>
<?php get_header('sales'); ?>
<style>
.fsBody,
html.wf-active .fsBody,
html.wf-active .fsBody input,
html.wf-active .fsBody select,
html.wf-active .fsBody textarea {
    font-family: var(--bs-body-font-family);
}

.sales-tab .nav-link .tick {
    max-width: 2rem;
}

.sales-tab .nav {
    align-items: end;
}

.sales-tab .nav>.nav-link {
    height: 99%;
}

.sales-tab .fsBody .fsForm {
    margin-top: 0;
    margin-bottom: 0;
}

.sales-tab .fsBody {
    padding: 0;
    background: #ffffff;
    z-index: 9;
    position: relative;
    box-shadow: 20px 20px 40px #00000007;
    border-radius: 0 0 15px 15px;
    border: 23px solid #fff;
}

.sales-tab .nav>.nav-link.active {
    height: 100%;
}

.sales-tab {
    position: relative;
    z-index: 9;
    overflow: hidden;
}

.sales-tab .fsEmbed {
    overflow-y: scroll;

    max-height: 50rem;
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
    font-size: 0.8rem;
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

div.fsBody .fsForm .fsSectionHeading {
    font-weight: normal;
    font-family: muli-bold, sans-serif;
}

div.fsBody .fsForm strong,
div.fsBody .fsForm strong * {
    font-family: muli-bold, sans-serif;
    font-weight: normal;
}

div.fsBody .fsLabel,
div.fsBody label {
    font-size: 16px;
    margin-bottom: 0;
    line-height: 24px;
}

div.fsRowBody input[type="checkbox"],
div.fsRowBody input[type="radio"] {
    -webkit-appearance: auto;
    float: none;
}

div.fsRowBody input[type="checkbox"],
div.fsRowBody input[type="radio"] {
    top: 2px;
}

.fsBody p {
    line-height: 1;
}

.fsBody label.fsOptionLabel {
    display: flex;
    align-items: center;
    vertical-align: middle;
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
	#nav-profile-tab{
		cursor: pointer
	}
	div.fsRowBody input[type=checkbox]:before,
    div.fsRowBody input[type=checkbox]:checked:before,
    div.fsRowBody input[type=radio]:before,
    div.fsRowBody input[type=radio]:checked:before {
        content: none;
    }

    .custom-tooltip .tooltip-inner {
        background-color: #FFCECE;
        color: #9D5B5A
    }

    .bs-tooltip-top .tooltip-arrow::before {
        border-top-color: #ebc8d1;
    }
    .custom-tooltip .tooltip-inner {
        background-color: #FFCECE;
        color: #9D5B5A;
		line-height: 1.4;
		padding: 0.5rem
    }

    .bs-tooltip-top .tooltip-arrow::before {
        border-top-color: #ebc8d1;
    }
    .hero-pd-fix{
    	padding-bottom: 5rem;
    }
</style>
<div class="main-container">
    <section class="bg-img bg-top bg-overlay-left-full py-5 pb-xl-0 bg-overlay-left-full sales-banner"
        data-background-image="<?php bloginfo('template_directory') ?>/img/landing-image-new.png">
        <div class="container pb-5 pb-lg-0 mb-xl-5 z-1 ">
            <div class="row py-lg-5">
                <div class="col-lg-8 offset-lg-1  hero-pd-fix">
                    <img src="<?php bloginfo('template_directory') ?>/img/logo-white.png" alt="logo"
                    class="logo-white mb-5" style="max-width: 15rem;" />
                        <h1 class="text-white mb-5"><?php the_content();?></h1>
                    <p class="text-white h4"><strong><u>How to Get Started?</u></strong></p>
                     <p class="text-white">Step 1: Fill out the New Patient Health Form below.</p>
 <p class="text-white">
Step 2: Book a free consultation with our product specialist using the calendly link at Step 2. You will not be contacted unless you book a consultation with our product specialist using the link at Step 2.
</p><br/>
                    <p class="text-white h4"><strong><u>Pricing:</u></strong></p>
                    <p class="text-white"><strong>$169 Monthly Subscription includes:</strong></p>
                    <ol class="text-white">
                    <li>Dr. Visit and Follow Up Consultations</li>
                    <li>Ongoing Bloodwork and Lab Tests</li>
                    <li>Testosterone Cypionate Medication</li>
                    <li>Treatment Supplies</li>
                    </ol>
                         
                        <p class="text-white">Enclomiphene Combination Therapy: $99 for 3 month supply</p> <br/>  <br/>  <br/>  
                                
                </div>
                <div class="w-100"></div>

            </div>
        </div>
    </section>

    <section class="py-5  sales-tab">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-9 col-xxl-10">

                    <nav>
                        <div class="nav nav-tabs nav-pills" id="nav-tab" role="tablist">
                            <div class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                <div class="row align-items-center h-100">
                                    <div class="col-auto"> <img
                                            src="<?php bloginfo('template_directory') ?>/img/tick-active.svg"
                                            alt="tick-active" class="tick tick-active" /> <img
                                            src="<?php bloginfo('template_directory') ?>/img/tick-inactive.svg"
                                            alt="tick-inactive" class="tick tick-inactive" /></div>
                                    <div class="col-auto">
                                        <h4>STEP 1</h4>
                                        <p class="tab-desc">Fill out new patient health form to start TRT</p>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-link" id="nav-profile-tab" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Please fill out the Step 1 form before proceeding to Step 2.">
                                <div class="row align-items-center h-100">
                                    <div class="col-auto"> <img src="<?php bloginfo('template_directory') ?>/img/tick-active.svg" alt="tick-active" class="tick tick-active" /> <img src="<?php bloginfo('template_directory') ?>/img/tick-inactive.svg" alt="tick-inactive" class="tick tick-inactive" /></div>
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
                                src="https://lasara.formstack.com/forms/js.php/ef_trt?nojquery=1&nojqueryui=1&nomodernizr=1">
                            </script>

                            <noscript><a href="https://lasara.formstack.com/forms/js.php/ef_trt?nojquery=1&nojqueryui=1&nomodernizr=1"
                                    title="Patient Information">Online Form -  lasara medical group for new patient peptides trt
                                    </a></noscript>
                            <script type='text/javascript'>
                            if (typeof $ == 'undefined' && jQuery) {
                                $ = jQuery
                            }
                            </script>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php   get_template_part( 'template-parts/our-results-2' ); ?>
</div>


<script>
    jQuery(document).ready(function() {
        $('#nav-profile-tab').on('click', function() {
            return false;
        });
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    });
</script>

<?php get_footer('sales'); ?>
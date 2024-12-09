<?php
/* Template Name: Thank you Treatment*/
?>
<?php get_header(); ?>
<style>
    .img-thank-you{
        max-width: 100px;
        margin-right: 1rem;
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
    .sales-tab {
        position: relative;
        z-index: 9;
        overflow: hidden;
    }

    .sales-tab-thanks .fsEmbed {
        overflow-y: scroll;

        max-height: 50rem;
    }

    .sales-tab-thanks .nav-link p {

        line-height: 1.2;
    }
    div.fsRowBody input[type=checkbox]:before, 
    div.fsRowBody input[type=checkbox]:checked:before, 
    div.fsRowBody input[type=radio]:before, 
    div.fsRowBody input[type=radio]:checked:before{
    	margin-top: 40px;
    }
    @media screen and (min-width: 992px){
        .img-thank-you{
            max-width: 150px;
            margin-right: 2rem;
        }
    }
	
	@media screen and (max-width: 992px){
		.lh-md{line-height:1.2;font-size: 0.7rem;}
		.img-thank-you {
			max-width: 50px;
		}
		.txt-md-small {
		font-size: 1rem;}
		.txt-md-center{text-align:center;}
		.fsRowBody .fr-fic{width:100px !important;}
	.fsFieldCell strong span {
    font-size: 1rem !important;
}
		.fsFieldCell p span {
font-size: 15px !important;
}
		
		.fsBody .fsSectionHeader{padding: 10px !important;}
	}
    

.wpforms-submit-container button{
display: inline-block;
    font-weight: bold;
    line-height: 2;
    color: #444f5a;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid rgba(0, 0, 0, 0);
    padding: 0.875em 2rem;
    font-size: 0.875em;
    border-radius: 0.625rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    text-transform: uppercase;
    font-family: muli-black, sans-serif;
    font-weight: normal;
    color: #fff;
    background-color: #025f89;
    border-color: #025f89;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
}
</style>
<div class="main-container mt-4r">
    <section class="bg-grad-2 pt-lg-5 pt-3">
        <div class="container pt-lg-5">
            <div class="row align-items-end align-items-lg-center pt-lg-5">
                <div class="col-xxl-7 col-md-7 ps-sm-4 pb-lg-5 pb-3">
                    <div class="d-lg-flex align-items-start">
                        <img src="<?php bloginfo('template_directory') ?>/img/thank-you.svg" alt="Thank You" class="img-fluid img-thank-you d-lg-block d-none mb-4 mb-lg-0" />
                        <div>
                            <h1 class="display-4 mb-0 text-white txt-md-small txt-md-center font-black">Thank you for scheduling a call! We will talk to you soon!</h1>
                            <a href="tel: 949-520-1551" class="btn btn-grad mb-lg-5 d-none">Call Us: 949-520-1551</a>

                        </div>
                    </div>
                </div>
                <div class="offset-xxl-1 col-lg-4 col-md-5 align-self-end d-lg-block d-none">
                    <img src="<?php bloginfo('template_directory') ?>/img/slider-img-2.png" alt="Slider Image" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    
    
    <?php if ($_GET['env'] == 'test'): ?>
      <section class="sales-tab-thanks py-lg-2 bg-white">
    	<div class="container pb-lg-3">
        	<div class="row justify-content-center">
            	<div class="col-lg-8 pt-5">
                    <h4 class="text-center mb-lg-5 mb-3 txt-md-small">
                Have lab results from the last 6 months? Submit them here for a diagnosis.
                    </h4>
                    	
          				<?php echo do_shortcode("[wpforms id='1176' title='false']"); ?>  
                    
                 </div>
             </div>   
          </div>
         </section>
    
    
    <?php endif; ?>
    
    
    <section class="sales-tab-thanks py-lg-5 py-3">
    	<div class="container py-lg-5">
        	<div class="row justify-content-center">
            	<div class="col-lg-8 ">
                    <h4 class="text-center mb-lg-5 mb-3 txt-md-small">
                Speed up the process by filling out the medical form below.
                    </h4>
                	<script type="text/javascript"
                    src="https://lasara.formstack.com/forms/js.php/lasara_medical_group_new_patient_peptides_trt?nojquery=1&nojqueryui=1&nomodernizr=1">                   </script>

					<noscript><a href="https://lasara.formstack.com/forms/lasara_medical_group_new_patient_peptides_trt" title="Online Form">Online Form -
Semaglutide and Weight Loss</a></noscript>
					<script type='text/javascript'>
if (typeof $ == 'undefined' && jQuery) {
$ = jQuery
}
</script>
                </div>
	        </div>            
        </div>
    </section>
</div>
<?php get_footer(); ?>
<?php
    // Template Name: chargebee success

    get_header();
    require_once('vendor/autoload.php');

    use ChargeBee\ChargeBee\Environment;
    use ChargeBee\ChargeBee\Models\Invoice;

    Environment::configure("lasara-test","test_AsYPbmBcdqF4u0iPtDN87ibaNmcTcQfRJ");
    // $result = Invoice::pdf(@$_GET['id']);
    // $download = $result->download();
?>

<style>
    .success {
        width: 100px;
        height: 100px;
        background: rgba(0,0,0,0) linear-gradient(260deg, #FFB43C 0%, #FC6E8E 100%) 0% 0% no-repeat padding-box;
        border-radius: 50%;
    }

    .success i {
        font-size: 40px;
        color: #fff;
    }
</style>


<div class="main-container mt-4r">
    <div class="position-relative">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/success.png" alt="">
        <div class="position-absolute top-0 start-0 end-0 bottom-0 d-flex">
            <div class="m-auto text-center">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="152.246" height="152.246" viewBox="0 0 152.246 152.246">
                        <g id="Group_761" data-name="Group 761" transform="translate(-3 -3)">
                            <g id="Rectangle_1188" data-name="Rectangle 1188" transform="translate(3 3)" fill="rgba(255,255,255,0)" stroke="#fff" stroke-width="6">
                            <rect width="152.246" height="152.246" rx="76" stroke="none"/>
                            <rect x="3" y="3" width="146.246" height="146.246" rx="73" fill="none"/>
                            </g>
                            <path id="Icon_awesome-check" data-name="Icon awesome-check" d="M19.514,46.58.841,27.907a2.873,2.873,0,0,1,0-4.063L4.9,19.782a2.873,2.873,0,0,1,4.063,0L21.545,32.361,48.488,5.419a2.873,2.873,0,0,1,4.063,0l4.063,4.063a2.873,2.873,0,0,1,0,4.063L23.577,46.58A2.873,2.873,0,0,1,19.514,46.58Z" transform="translate(49.818 52.547)" fill="#fafcff"/>
                        </g>
                    </svg>
                </div>

                <h2 class="text-white pt-4">Your Subscription is</h2>
                <h1 class="text-white text-uppercase" style="font-size: 56px;">Complete!</h1>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
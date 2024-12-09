    <footer class="bg-black pt-lg-5">
      <div class="footer-top py-5">
        <div class="container">
          <div class="row justify-content-lg-between">
            <div class="col-lg-2 mb-5 mb-lg-0">

          <h6 class="font-black text-white mb-4">ABOUT LaSara</h6>
          <?= clm_footer1_nav(); ?>
                  
            </div>
        
                <div class="col-lg-2 mb-5 mb-lg-0">
                  <h6 class="font-black text-white mb-4">TREATMENTS</h6>
                            <?= clm_footer2_nav(); ?>
                </div>
                <div class="col-lg-2 mb-5 mb-lg-0">
                  <h6 class="font-black text-white mb-4">SUPPORT</h6>
                        <?= clm_footer3_nav(); ?>
                </div>
           
            <div class="col-lg-2 mb-5 mb-lg-0 ">

               <h6 class="font-black text-white mb-4">POPULAR</h6>
<ul class="d-flex gap-3 list-unstyled p-0 mb-4">
  <li><a href=""> <img src="<?php bloginfo('template_directory') ?>/img/tiktok.svg" alt="tiktok" class="img-fluid" /></a></li>
    <li><a href=""> <img src="<?php bloginfo('template_directory') ?>/img/insta.svg" alt="insta" class="img-fluid" /></a></li>
      <li><a href=""> <img src="<?php bloginfo('template_directory') ?>/img/fb.svg" alt="fb" class="img-fluid" /></a></li>
</ul>
                 
                         <?= clm_footer4_nav(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container-fluid">
          <div class="row justify-content-lg-center align-items-center">
            <div
              class="col-lg-10 "
            >
            <div class="row justify-content-lg-end   align-items-center">
              <div class="col-lg-10">
   <img src="<?php bloginfo('template_directory') ?>/img/footer-logo.svg" alt="footer logo" class="w-100" />
            </div></div>
   </div>
      <div
              class="col-lg-2">
              <p class="copyright m-0 text-white-light ps-lg-5">
                ©<?php echo date('Y') ?> | LaSara By <a href="http://www.revealize.com" class="text-white"> Revealize</a>
              </p>
            
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      type="text/javascript"
      src="<?php bloginfo('template_directory')?>/js/bootstrap.bundle.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity=ha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      type="text/javascript"
      src="<?php bloginfo('template_directory')?>/js/jquery.scrolla.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
      integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
      integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/script.js"></script>

    <script>
      $(document).ready(function () {
      
      if(!['https://www.lasara.com/services/growth-hormone-release-with-sermorelin-peptide/', 'https://www.lasara.com/services/nad/','https://www.lasara.com/services/pt141-sexual-health-and-arousal/','https://www.lasara.com/services/recovery-with-bpc-157-protocol/'].includes(location.href))
{
jQuery('.chargebee-pay button[type="submit"]').prop('disabled', true)
jQuery('.chargebee-pay button[type="submit"]').text('Out of stock')

}

      $('.mega-indicator').prepend($('<i class="fa-solid fa-chevron-down"></i>'));
           $('#mega-menu-wrap-main').addClass('nav-menu navbar-nav ms-xxl-3');
      $(".videoPopup").magnificPopup({
          type: "iframe",
          mainClass: "mfp-fade",
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false,
        });
      });
    </script>
 
    <?php wp_footer(); ?>
  </body>
</html>
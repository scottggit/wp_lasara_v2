<footer class="bg-grad-2 ">

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="d-lg-flex justify-content-lg-between text-center align-items-center">
                    <img src="https://www.lasara.com/wp-content/themes/lasara/img/mankind/logo.png" alt=""
                        class="footer-sales-logo" style="max-width: 7rem;">
                    <p class="copyright m-0 text-white-light">
                        © Copyright <?php echo date('Y') ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.scrolla.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
    integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
    integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/script.js"></script>

<script>
$(document).ready(function() {
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
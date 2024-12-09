<?php get_header(); ?>
<style>
.searchbox-wrap ul {
    padding-left: 0;
}

.searchbox-wrap ul label {
    position: relative;
    width: 100%;
}

.searchbox-wrap ul label i {
    position: absolute;
    right: 0;
    top: 50%;
    color: #025F89;
    transform: translate(-100%, -50%);
}

.searchbox-wrap ul label .sf-input-text {
    width: 100%;
    padding: 0.8rem;
    border-radius: 10px;
}

.searchbox-wrap .sf-field-taxonomy-product_cat,
.searchbox-wrap .sf-field-sort_order {
    display: none;

}

.products-filters .sf-field-search {
    display: none;

}

.products-filters ul {
    padding-left: 0;
}

.products-filters ul li {
    width: 100%;
}

.products-filters ul li h4 {
    color: #444F5A;
    font-weight: normal;
    font-family: 'muli-regular';
}

.products-filters ul li select {
    color: #444f5a9e;
}

.products-filters ul li select {
    padding: 0.8rem;
    border-radius: 10px;
    border: 1px solid #EBF1FB;
    width: 100%;
}

.products-filters label i {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translate(-100%, -50%);
    color: #025F89;
}

.products-filters label {
    width: 100%;
    position: relative;
    overflow: hidden;
}


.products-filters select.sf-input-select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;


}

.pagination.mx-auto>span.current {
    background: rgba(0, 0, 0, 0) linear-gradient(260deg, #ffaa23 0%, #f9446d 100%) 0% 0% no-repeat padding-box;
    color: #fff;
}

.pagination.mx-auto>a,
.pagination.mx-auto>span {
    color: #444F5A;
    font-weight: 700;
    padding: 0.8rem 1.5rem;
    margin-right: 1rem;
    border-radius: 10px;
    box-shadow: 1px 1px1px #ddd;
    box-shadow: 0px 10px 20px #0000001c;
}

h5.card-title {
    color: #1B1B1B;
}

@media (min-width: 1200px) {

    .products-filters ul li {
        padding-right: 2rem;
    }

    .search-product-wrap {
        padding: 0 7rem;
    }

    .products-filters ul {
        display: flex;
        margin-bottom: 2rem;
        justify-content: space-between;
    }
}
</style>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-overlay-left-full py-5 bg-overlay-left-full"
        data-background-image="<?php bloginfo('template_directory')?>/img/products-banner.jpg">
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
            <div class="row py-lg-5">
                <div class="col-xl-4 col-md-6 offset-md-1">
                    <h1 class="text-white mb-4 banner-title">
                        Products
                    </h1>
                </div>
                <div class="w-100"></div>
                <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
                    <ol class="breadcrumb" style="justify-content:start" ;>
                        <li><a href="http://localhost/lasarawp">Home</a></li>
                        <li><a href="http://localhost/lasarawp/products">Products</a></li>
                    </ol>
                </div>
                <div class="w-100"></div>
                <div class="col-xxl-3 col-xl-3 col-md-3 offset-md-1 searchbox-wrap">
                    <?php echo do_shortcode('[searchandfilter id="631"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5">
        <div class="container">
            <div class="search-product-wrap">
                <div class="products-filters">

                    <?php echo do_shortcode('[searchandfilter id="631"]'); ?>

                </div>
                <?php echo do_shortcode('[searchandfilter id="631" show="results"]'); ?>
            </div>
        </div>
    </section>


</div>
<script>
jQuery(document).ready(function() {
    jQuery(".products-filters ul li label").append('<i class="fa-solid fa-chevron-down"></i>');
    jQuery(".searchbox-wrap ul li label").append('<i class="fas fa-search"></i>');
});
</script>
<?php get_footer(); ?>
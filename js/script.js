/* Set Background Image */
$(".bg-img").each(function () {
  var imgSrc = $(this).attr("data-background-image");
  if (imgSrc != undefined) {
    $(this).css("background-image", 'url("' + imgSrc + '")');
    //$(this).parent().css('background-position', '50% 0%');
  }
});
/* location-slider */
$(".location-slider").slick({
  slidesToShow: 1,
  arrows: true,
  dots: true,
});
$(".map_slick").slick({
  slidesToShow: 1,
  arrows: false,
  dots: true,
});
$(".contact_location_slick").slick({
  slidesToShow: 1,
  arrows: true,
  dots: true,
});

$(".testimonial_slick").slick({
  slidesToShow: 3,
  dots: true,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
$(".media_slick").slick({
  slidesToShow: 3,
  dots: true,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
$(".location_slick").slick({
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
      },
    },
  ],
});

/* Nav Script */
$(".menu-item-has-children .fa-chevron-down").on("click", function (event) {
  if ($(window).width() < 1199) {
    $(this).siblings(".menu-child").slideToggle("fast");
    $(this).closest(".menu-item-has-children").toggleClass("show");
  }
});

$(".custom_nav").on("click", ".fake-prev", function (event) {
  $(this)
    .closest(".slick-w-custom-nav")
    .find(".slick_trigger")
    .slick("slickPrev");
});
$(".custom_nav").on("click", ".fake-next", function (event) {
  $(this)
    .closest(".slick-w-custom-nav")
    .find(".slick_trigger")
    .slick("slickNext");
});

$(document).ready(function () {
  /* Element Animate */
  $(".animate__animated").scrolla({
    once: true,
  });
});

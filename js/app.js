// Initialize Wow
new WOW().init();



$('.first-banner-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true
  });

  
$('.category-slider').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    dots: false
  });

    
$('.product-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false
  });


  $('.upcoming-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: true  
});

$('.client-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false  
});


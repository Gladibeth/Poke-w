$('.main-banner__content').slick({
  infinite: true,
  autoplay: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 1000
      }
    }
  ]
});
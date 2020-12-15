console.log('El custom js funciona')

jQuery(function ($) {
    $('.rgc-content-package__gallery').slick({
        nextArrow: '<button type="button" class="slick-custom-arrow slick-custom-next shadow"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button type="button" class="slick-custom-arrow slick-custom-prev shadow"><i class="fas fa-chevron-left"></i></button>',
    });
    
    $('.slick-paquetes-recomendados').slick({
        slidesToShow: 4,
        centerMode: true,
        nextArrow: '<button type="button" class="slick-custom-arrow slick-custom-next shadow"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button type="button" class="slick-custom-arrow slick-custom-prev shadow"><i class="fas fa-chevron-left"></i></button>',
        autoplay: true,
        dots: true,
        responsive: [
            {
              breakpoint: 1440,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
});
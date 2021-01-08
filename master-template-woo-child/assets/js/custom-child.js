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
                slidesToScroll: 1,
                centerMode: false
              }
            }
          ]
    });

    $('.menu-item-has-children .nav-link').first().append(' <i class="fas fa-sort-down"></i>');
    $('.menu-item-has-children').mouseenter(function(){
        $(this).find('.sub-menu').slideDown();
    });

    $('.menu-item-has-children').mouseleave(function(){
      $(this).find('.sub-menu').slideUp();
    });

    // Form search
    $('.rgc-custom-filter-form input[type="submit"]').replaceWith("<button type='submit' class='btn-filter-submit'><i class='fas fa-search mr-1'></i> BUSCAR</button>");
    $('.item-profile-user a').prepend('<i class="fas fa-user mr-2"></i>');

    // Dashboard
    $('.page-template-dashboard-page #rgc-link-wompi').click(function(e){
      e.preventDefault();

      $('.page-template-dashboard-page #app').html(`<div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://checkout.wompi.co/l/VPOS_7I4m3m?_ga=2.216064982.1381501100.1589493062-1840642752.1587081128" frameborder="0">    </iframe>
   </div>`);
    })

    
});
<?php

get_header();
?>

<main style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-pattern.jpg)" class="rgc-main-404 p-5 text-center d-flex justify-content-center flex-column align-items-center">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/suitcase.svg" alt="" class="img-fluid mb-5">
    <h2>Error 404</h2>
    <h5>Lo sentimos, parece que el contenido que buscas no existe o ya no se encuentra en nuestro sitio</h5>
    <a href="<?php echo get_home_url(); ?>" class="button-master principal-button button-rounded mt-3">IR AL SITIO WEB</a>
</main>

<?php
get_footer();
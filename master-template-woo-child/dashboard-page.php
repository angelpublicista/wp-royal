<?php

/**
* Template Name: Dashboard
*
* @package WordPress
* @subpackage Master Template Child Theme
* @since Master Template Child Theme 1.0
*/
get_header();

$current_user = wp_get_current_user();
$user_data = $current_user->data;
$user_email = $user_data->user_email;
$user_name= $user_data->display_name;
?>

<main class="rgc-dashboard-main row">
    <aside class="col-12 col-md-3 rgc-dashboard-sidebar p-0 px-4">
        <ul class="nav flex-column">
            <li class="nav-item"><a href="<?php echo get_home_url() ?>/dashboard" class="nav-link"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li class="nav-item"><a href="<?php echo get_home_url() ?>/paquetes" class="nav-link"><i class="fas fa-plane-departure mr-1"></i> Paquetes Afiliados</a></li>
            <li class="nav-item"><a href="#" class="nav-link" id="rgc-link-wompi"><i class="far fa-credit-card mr-1"></i> Pagos Wompi</a></li>
            <li class="nav-item"><a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=7635" class="nav-link" target="_blank"><i class="far fa-credit-card mr-1"></i> Pagos PSE</a></li>
            <!-- <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-question-circle mr-1"></i> Soporte</a></li> -->
            <li class="nav-item"><a href="<?php echo wp_logout_url(get_home_url()); ?>" class="nav-link"><i class="fas fa-power-off mr-1"></i> Cerrar sesión</a></li>
        </ul>
    </aside>

    <article class="col-12 col-md-9 rgc-dashboard-content">
        <div class="container">
            <section class="p-5 text-center" id="app">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-colores.png" alt="" class="img-fluid">
                <h2 class="my-2">Bienvenid@ <?php echo $user_name; ?></h2>
                <hr class="my-5">
                <?php the_field('mensajes_para_afiliados') ?>
            </section>
        </div>
    </article>
</main>

<?php
get_footer();
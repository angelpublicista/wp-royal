<?php

get_header();
get_template_part('template-parts/rgc-subheader'); 
?>

<?php if(have_posts()): ?>
    <section class="mt-5 pt-5 text-center">
        <h2>Resultados de búsqueda para: <span><?php echo $_GET['s'] ?></span></h2>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php while(have_posts()): the_post();?>
                    <div class="col-12 col-md-4 rgc-item-search">
                        <?php echo do_shortcode( "[rgc_card_packages]" ); ?> 
                    </div>
                <?php endwhile; ?>  
            </div>
        </div>
    </section>
<?php else: ?>
    <section class="mt-5 py-5 text-center">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/traveling.png" alt="" class="img-fluid rgc-search-not-found">
        <h4>Lo sentimos</h4>
        <h2>No encontramos resultados para tu búsqueda</h2>
        <a href="<?php echo get_home_url(); ?>" class="mr-3">Ir al inicio</a>
        <a href="<?php echo get_permalink( get_page_by_title( 'paquetes' ) ); ?>" class="button-master principal-button button-rounded mt-4">Regresar a paquetes</a>
    </section>
<?php endif; ?>

<?php
get_footer();
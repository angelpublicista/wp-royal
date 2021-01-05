<?php

get_header();
?>

<?php if(is_user_logged_in()): ?>

<?php  get_template_part('template-parts/subheader'); ?>

<main class="rgc-main-packages-single">
    <!-- Info paquete -->
    <section class="rgc-package-info padding-section">
        <div class="container">
            <div class="rgc-box-title text-center mb-5">
                <h3>¡Tu viaje está casi listo!</h3>
                <hr class="rgc-box-title__divider">
            </div>

            <div class="row rgc-content-package shadow">
                <div class="col-12 col-md-7 p-0">
                    <div class="rgc-content-package__gallery slick-theme slick-custom-rgc">
                        <a href="<?php the_post_thumbnail_url("full"); ?>" data-lightbox="roadtrip"><?php the_post_thumbnail( "full", array("class" => "rgc-content-package__gallery-item") ); ?></a>
                        <?php if(get_field('galeria_de_imagenes')): ?>
                            <?php 
                                $gallery_string = get_field('galeria_de_imagenes');
                                $gallery = explode(',', $gallery_string);
                                foreach($gallery as $item_gallery):
                            ?>
                                <a href="<?php echo wp_get_attachment_image_url($item_gallery, "full"); ?>" data-lightbox="roadtrip"><?php echo wp_get_attachment_image( $item_gallery, "full", false, array("class" => "rgc-content-package__gallery-item") ); ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-5 p-5">
                    <div class="rgc-content-package__rating text-right mb-5 justify-content-end">
                        <span class="rgc-content-package__rating-number">4.5</span>
                        <div class="rgc-content-package__rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <h3 class="rgc-content-package__title text-center"><?php the_title(); ?></h3>
                    <div class="rgc-content-package__days mb-3 text-center">
                        <?php if(get_field('noches')): ?>
                            <span class="rgc-content-package__days-night"><i class="far fa-moon"></i> <?php the_field('noches'); ?></span>
                        <?php endif; ?>
                        <?php if(get_field('dias')): ?> 
                            <span class="rgc-content-package__days-day"><i class="far fa-sun"></i> <?php the_field('dias'); ?></span>
                        <?php endif; ?>
                    </div>

                    <p class="rgc-content-package__desc"><?php the_content(); ?></p>
                
                    <div class="rgc-content-package__price">
                    <?php 
                        // Info afiliados
                        $afiliados = get_field('afiliados');
                        $precio_afiliados = $afiliados['precio_afiliados'];
                        $condicion_afiliados = $afiliados['condicion_precio'];

                        // Info no afiliados
                       $no_afiliados = get_field('no_afiliados');
                       $precio_no_afiliados = $no_afiliados['precio_no_afiliados'];
                       $condicion_no_afiliados = $no_afiliados['condiciones_no_afiliado'];
                    ?> 
                            <span class="rgc-content-package__price-reduced">$<?php echo $precio_afiliados; ?> <br><span class="rgc-content-package__price-reduced__condition"> <?php echo $condicion_afiliados; ?></span></span>
                        <span class="rgc-content-package__price-normal">$<?php echo $precio_no_afiliados; ?> <br><span class="rgc-content-package__price-normal__condition"> <?php echo   $condicion_no_afiliados; ?></span></span>
                    </div>

                    <?php
                        $tipo_reserva = get_field('boton_reserva');

                        if($tipo_reserva == "Whatsapp"){
                            $link_reserva = api_whatsapp();
                        } else {
                            if(get_field('link_de_reserva')){
                                $link_reserva = get_field('link_de_reserva');
                            } else {
                                $link_reserva = "#";
                            }
                        }
                    ?>
                    <div class="text-center">
                        <a href="<?php echo $link_reserva; ?>" class="button-master principal-button button-rounded my-3" target="_blank">RESERVAR AHORA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Incluye -->

    
    <section class="padding-section rgc-include">
        <div class="container">
            <div class="rgc-box-title text-center mb-5">
                <h3>INCLUYE</h3>
                <hr class="rgc-box-title__divider">
            </div>
            
            <div class="row rgc-package-features text-center">

                <?php
                $features = get_field('incluye');
                foreach($features as $item_feature): ?>

                <?php 
                    switch($item_feature){
                        case "Alojamiento":
                            $icon = '<i class="fas fa-bed"></i>';
                            break;
                        case "Parqueadero":
                            $icon = '<i class="fas fa-parking"></i>';
                            break;
                        case "Transporte":
                            $icon = '<i class="fas fa-bus"></i>';
                            break;
                        case "Alimentación":
                            $icon = '<i class="fas fa-utensils"></i>';
                            break;
                        case "Acceso a piscina":
                            $icon = '<i class="fas fa-swimming-pool"></i>';
                            break;
                        case "Bebidas":
                            $icon = '<i class="fas fa-cocktail"></i>';
                            break;
                        default:
                            $icon = '<i class="fas fa-check-circle"></i>';
                    }
                ?>

                <div class="col-6 col-md-4 rgc-package-features__box mb-3">
                    <?php echo $icon; ?>
                    <span class="rgc-package-features__box-text"><?php echo $item_feature ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Términos y condiciones -->
    <?php if(get_field('terminos_y_condiciones')): ?>
    <section class="padding-section rgc-package-conditions">
        <div class="container">
            <div class="rgc-package-conditions__box rgc-rounded-card p-5">
                <h3 class="rgc-package-conditions__box-title text-center">Términos y condiciones</h3>
                <p><?php the_field('terminos_y_condiciones'); ?></p>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Sección asesoría -->
    <?php echo do_shortcode( '[rgc_assesor]' ); ?>

    <!-- Paquetes recomendados -->
    <section class="padding-section">
        <div class="container">
            <div class="rgc-box-title text-center">
                <h3>PAQUETES RECOMENDADOS</h3>
                <hr class="rgc-box-title__divider">
            </div>
        </div>

        <?php echo do_shortcode( '[rgc_carousel_tours]' ); ?>
    </section>
</main>

<?php else: ?>
    <section class="padding-section text-center rgc-user-block d-flex align-items-center justify-content-center flex-column">
        <i class="fas fa-user-lock mb-4"></i>
        <h2>Contenido restringido</h2>
        <p>Si ya estás registrad@, debes <a href="#">Iniciar sesión</a> para ver este contenido</p>
    </section>
<?php endif; ?>
<?php
get_footer();
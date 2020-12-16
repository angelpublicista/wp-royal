<?php

get_header();
?>

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
                        <a href="https://picsum.photos/1920/1080" data-lightbox="roadtrip"><img src="https://picsum.photos/1920/1080" alt="" class="rgc-content-package__gallery-item"></a>
                        <a href="https://picsum.photos/1920/1080" data-lightbox="roadtrip"><img src="https://picsum.photos/1920/1080" alt="" class="rgc-content-package__gallery-item"></a>
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
                            <span class="rgc-content-package__price-reduced"> <?php echo $precio_afiliados; ?> <br><span class="rgc-content-package__price-reduced__condition"> <?php echo $condicion_afiliados; ?></span></span>
                        <span class="rgc-content-package__price-normal"> <?php echo $precio_no_afiliados; ?> <br><span class="rgc-content-package__price-normal__condition"> <?php echo   $condicion_no_afiliados; ?></span></span>
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
    <section class="padding-section rgc-package-conditions">
        <div class="container">
            <div class="rgc-package-conditions__box rgc-rounded-card p-5">
                <h3 class="rgc-package-conditions__box-title text-center">Términos y condiciones</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae tempore ea ipsa ipsum corrupti. Vitae obcaecati consequuntur labore. A eaque quae natus sequi veniam alias. Omnis esse delectus quia perspiciatis.</p>
            </div>
        </div>
    </section>

    <!-- Sección asesoría -->
    <section class="padding-section rgc-assesor bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-asesor.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="rgc-assesor__box">
                        <i class="far fa-paper-plane"></i>
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="rgc-assesor__box">
                        <i class="fas fa-headset"></i>
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="rgc-assesor__box">
                        <i class="fas fa-headset"></i>
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

<?php
get_footer();
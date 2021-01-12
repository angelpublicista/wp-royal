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

                    <?php 
                        $destinos = get_the_terms( $post->ID, 'destinos' );
                    ?>

                    <?php if($destinos): $counter = 0; ?>
                    <p class="rgc-content-package__city text-center">
                            <?php foreach ($destinos as $destino) {
                                $counter = $counter + 1;
                                if(count($destinos) > 1){
                                    if($counter < count($destinos)){
                                        echo $destino->name . ", ";
                                    } else {
                                        echo $destino->name;
                                    }
                                    
                                } else {
                                    echo $destino->name;
                                }
                            }
                            ?>
                    </p>
                    <?php endif; ?>
                    <div class="rgc-content-package__days mb-3 text-center">
                        <?php if(get_field('noches')): ?>
                            <span class="rgc-content-package__days-night"><i class="far fa-moon"></i> <?php the_field('noches'); ?></span>
                        <?php endif; ?>
                        <?php if(get_field('dias')): ?> 
                            <span class="rgc-content-package__days-day"><i class="far fa-sun"></i> <?php the_field('dias'); ?></span>
                        <?php endif; ?>
                    </div>

                    <?php if(get_field('fecha_salida')): ?>
                    <?php

                        // Load field value and convert to numeric timestamp.
                        $unixtimestamp = strtotime( get_field('fecha_salida') );

                        // Display date in the format "l d F, Y".
                        $date_start = date_i18n( "l d F, Y", $unixtimestamp ); 
                    ?>

                    <div class="rgc-content-package__date">
                        <span class="rgc-content-package__date-start"><i class="far fa-calendar-alt"></i> Fecha salida: <?php echo $date_start; ?></span>
                    </div>
                    <?php endif; ?>

                    <div class="rgc-content-package__desc"><?php the_content(); ?></div>
                
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
                        <?php if($precio_afiliados): ?>
                            <span class="rgc-content-package__price-reduced">$<?php echo $precio_afiliados; ?> <br><span class="rgc-content-package__price-reduced__condition"> <?php echo $condicion_afiliados; ?></span></span>
                        <?php endif; ?>
                        
                        <?php if($precio_no_afiliados): ?>
                            <span class="rgc-content-package__price-normal">$<?php echo $precio_no_afiliados; ?> <br><span class="rgc-content-package__price-normal__condition"> <?php echo $condicion_no_afiliados; ?></span></span>
                        <?php endif; ?>

                        <?php if(get_field('fecha_limite')): ?>
                            <?php
                                // Load field value.
                            $date_string = get_field('fecha_limite');

                            $new_date = strtotime($date_string);
                            // Output current date in custom format.
                            $date_current = date('Y-m-d');

                            $date1 = new DateTime($date_current);
                            $date2 = new DateTime($date_string);
                            $diff = $date1->diff($date2);

                            
                            ?>
                            <span class="mt-4 d-block rgc-content-package__date-limit">Paquete válido hasta: <?php echo date_i18n( "l d F, Y", $new_date ); ?></span>
                        <?php endif; ?>
                    </div>

                    <?php if($diff->invert < 1): ?>
                        <div class="text-center">
                        <?php echo do_shortcode( "[rgc_action_button]" )?>
                        </div>
                    <?php endif; ?>
                    
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
            
            <div class="row rgc-package-features text-left">

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

    <?php 
        $paquetes_recomendados = get_field('recomendados');  
    ?>

    <?php if($paquetes_recomendados): $paquetes_recomendados_implode = implode(",", $paquetes_recomendados); ?>
    <!-- Paquetes recomendados -->
    <section class="padding-section">
        <div class="container">
            <div class="rgc-box-title text-center">
                <h3>PAQUETES RECOMENDADOS</h3>
                <hr class="rgc-box-title__divider">
            </div>
        </div>

        <div class="p-4">
            <?php echo do_shortcode( '[rgc_releated_post recomendados='.$paquetes_recomendados_implode.']' ); ?> 
        </div>  
    </section>
    <?php endif; ?>
</main>

<?php else: ?>
    <section class="padding-section text-center rgc-user-block d-flex align-items-center justify-content-center flex-column">
        <i class="fas fa-user-lock mb-4"></i>
        <h2>Contenido restringido</h2>
        <p>Si ya estás registrad@, debes <a href="<?php echo wp_login_url(); ?>">Iniciar sesión</a> para ver este contenido</p>
    </section>
<?php endif; ?>
<?php
get_footer();
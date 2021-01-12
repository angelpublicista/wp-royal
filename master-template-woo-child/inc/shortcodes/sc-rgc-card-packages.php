<?php

if(!function_exists('rgc_card_packages_func')){
    function rgc_card_packages_func(){
        ob_start()
        ?>
        <?php $destinos = get_the_terms( $post->ID, 'destinos' ); ?>
        <div class="rgc-card-package shadow rgc-rounded-card">
            <div class="rgc-box-offer rounded-circle text-center d-flex flex-column align-items-center justify-content-center">
                <!-- <span class="rgc-box-offer__text rgc-box-offer__text-lg">15%</span> -->
                <span class="rgc-box-offer__text rgc-box-offer__text-sm">Tarifa reducida</span>
            </div>
            <?php the_post_thumbnail( "medium", array("class" => "rgc-card-package__image") ); ?>
            <div class="rgc-card-package__info p-4">
                <a href="<?php the_permalink(); ?>"><h3 class="rgc-content-package__title text-center"><?php the_title(); ?></h3></a>
                <?php if($destinos): $counter = 0; ?>
                <p class="rgc-content-package__city text-center mb-0">
                
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
                <div class="rgc-content-package__days mb-0 mb-md-3 text-center">
                    <?php if(get_field('noches')): ?>
                        <span class="rgc-content-package__days-night"><i class="far fa-moon"></i> <?php the_field('noches'); ?></span>
                    <?php endif; ?>
                    <?php if(get_field('dias')): ?> 
                        <span class="rgc-content-package__days-day"><i class="far fa-sun"></i> <?php the_field('dias'); ?></span>
                    <?php endif; ?>
                </div>

                <?php if(get_field('fecha_salida')): ?>
                    <div class="rgc-content-package__date">
                        <span class="rgc-content-package__date-start"><i class="far fa-calendar-alt"></i> Fecha(s) salida: <?php the_field('fecha_salida'); ?></span>
                    </div>
                <?php endif; ?>
                <hr>
                <div class="rgc-content-package__desc mb-3"><?php echo mb_strimwidth(get_the_content(), 0, 200, '...') ?></div>
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
                        <span class="rgc-content-package__price-reduced d-block"><span class="rgc-content-package__text-afiliados d-block">Tarifa Afiliado</span>$<b><?php echo $precio_afiliados; ?></b> <br><span class="rgc-content-package__price-reduced__condition d-block"> <?php echo $condicion_afiliados; ?></span></span>
                    <?php endif; ?>

                    <?php if($precio_no_afiliados): ?>
                        <span class="rgc-content-package__price-normal d-none d-md-block"><span class="rgc-content-package__text-noafiliados d-block">Tarifa No afiliado</span> $<b><?php echo $precio_no_afiliados; ?></b> <br><span class="rgc-content-package__price-normal__condition d-block"> <?php echo   $condicion_no_afiliados; ?></span></span>
                    <?php endif; ?>
                </div>

                <div class="rgc-content-package__rating">
                    <span class="rgc-content-package__rating-number">4.5</span>
                    <div class="rgc-content-package__rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <hr>

                <?php
                      
                    if(get_field('fecha_limite')){
                        // Load field value.
                        $date_string = get_field('fecha_limite');

                        $new_date = strtotime($date_string);
                        // Output current date in custom format.
                        $date_current = date('Y-m-d');

                        $date1 = new DateTime($date_current);
                        $date2 = new DateTime($date_string);
                        $diff = $date1->diff($date2);
                    }
                ?>

                
                    <div class="text-center rgc-buttons"  <?php if($diff->invert > 0): ?> style="margin-bottom: 0px" <?php endif; ?>>
                        <a href="<?php the_permalink(); ?>" class="rgc-content-package__info__link">Ver más</a>
                        <?php if($diff->invert < 1): ?>
                            <?php echo do_shortcode( '[rgc_action_button]' ); ?>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }

    add_shortcode( "rgc_card_packages", "rgc_card_packages_func" );
}
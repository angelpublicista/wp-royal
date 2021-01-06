<?php

if(!function_exists('rgc_carousel_tours_func')){
    function rgc_carousel_tours_func($atts){
        $atts = shortcode_atts(
            array(
                "post_type" => "tours",
                "post_per_page" => 6
            ),
            $atts,
            'rgc_carousel_tours'
        );

        $tours_query = new WP_Query($atts);

        if($tours_query->have_posts()){
            ob_start();
            ?>
            <div class="slick-paquetes-recomendados slick-theme my-5 slick-custom-rgc">
                <?php while($tours_query->have_posts()): $tours_query->the_post(); ?>

                <?php $destinos = get_the_terms( $tours_query->ID, 'destinos' ); ?>
                <div class="rgc-card-package shadow rgc-rounded-card">
                    <div class="rgc-box-offer rounded-circle text-center d-flex flex-column align-items-center justify-content-center">
                        <!-- <span class="rgc-box-offer__text rgc-box-offer__text-lg">15%</span> -->
                        <span class="rgc-box-offer__text rgc-box-offer__text-sm">Tarifa reducida</span>
                    </div>
                    <?php the_post_thumbnail( "medium", array("class" => "rgc-card-package__image") ); ?>
                    <div class="rgc-card-package__info p-4">
                        <a href="<?php the_permalink(); ?>"><h3 class="rgc-content-package__title text-center"><?php the_title(); ?></h3></a>
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
                        <hr>
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
                            
                            <span class="rgc-content-package__price-reduced d-block"><span class="rgc-content-package__text-afiliados d-block">Tarifa Afiliado</span>$<?php echo $precio_afiliados; ?> <br><span class="rgc-content-package__price-reduced__condition d-block"> <?php echo $condicion_afiliados; ?></span></span>
                            
                            <span class="rgc-content-package__price-normal d-block"><span class="rgc-content-package__text-noafiliados d-block">Tarifa No afiliado</span> $<?php echo $precio_no_afiliados; ?> <br><span class="rgc-content-package__price-normal__condition d-block"> <?php echo   $condicion_no_afiliados; ?></span></span>
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
                        <div class="text-center rgc-buttons">
                            <a href="<?php the_permalink(); ?>" class="rgc-content-package__info__link">Ver más</a>
                            <?php echo do_shortcode( '[rgc_action_button]' ); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <?php

            wp_reset_postdata();
        } else {
            echo "No hay Tours";
        }

        return ob_get_clean();
    }

    add_shortcode( 'rgc_carousel_tours', 'rgc_carousel_tours_func' );
}
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
                    <?php echo do_shortcode( "[rgc_card_packages]" ); ?>
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
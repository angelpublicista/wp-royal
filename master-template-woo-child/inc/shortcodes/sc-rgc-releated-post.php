<?php

if(!function_exists('rgc_releated_post_func')){
    function rgc_releated_post_func($atts){
        $post_id = get_the_ID();
        
        $atts = shortcode_atts(
            array(
                "recomendados" => ''
            ),
            $atts,
            'rgc_releated_post'
        );

        $array_post = explode(",", $atts["recomendados"]);

        $args = array(
            "post_type" => "tours",
            "post_per_page" => 3,
            "post__in" => $array_post,
            "post__not_in" => array($post_id)
            
        );

        $tours_query = new WP_Query($args);

        if($tours_query->have_posts()){
            ob_start();
            ?>
            <div class="rgc-paquetes-recomendados row">
                <?php while($tours_query->have_posts()): $tours_query->the_post(); ?>
                    <div class="col-12 col-md-4">
                        <?php echo do_shortcode( "[rgc_card_packages]" ); ?>
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

    add_shortcode( "rgc_releated_post", "rgc_releated_post_func" );
}
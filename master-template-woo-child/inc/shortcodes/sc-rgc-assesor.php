<?php



if(!function_exists('rgc_assesor_func')){
    function rgc_assesor_func(){
        ob_start();
        global $geniorama;
        ?>
        <section class="padding-section rgc-assesor bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-asesor.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="rgc-assesor__box">
                            <a href="<?php echo api_whatsapp(); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a href="<?php echo api_whatsapp(); ?>" target="_blank"><?php echo $geniorama['opt-whp'] ?></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="rgc-assesor__box">
                            <a href="mailto:<?php echo $geniorama['opt-email-info'] ?>"><i class="fas fa-envelope"></i></a>
                            <a href="mailto:<?php echo $geniorama['opt-email-info'] ?>"><?php echo $geniorama['opt-email-info'] ?></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="rgc-assesor__box">
                            <a href="<?php echo $geniorama['opt-url-address'] ?>" target="_blank"><i class="fas fa-map-marked-alt"></i></a>
                            <a href="<?php echo $geniorama['opt-url-address'] ?>" target="_blank"><?php echo $geniorama['opt-address'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        return ob_get_clean();
    }

    add_shortcode( 'rgc_assesor', 'rgc_assesor_func' );

}
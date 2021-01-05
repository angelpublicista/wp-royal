<?php

if(!function_exists('rgc_assesor_func')){
    function rgc_assesor_func(){
        ob_start();
        ?>
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

        <?php
        return ob_get_clean();
    }

    add_shortcode( 'rgc_assesor', 'rgc_assesor_func' );

}
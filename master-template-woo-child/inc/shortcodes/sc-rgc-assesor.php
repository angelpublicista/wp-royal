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
                            <i class="fab fa-whatsapp"></i>
                            <a href="#">3148427341</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="rgc-assesor__box">
                            <i class="fas fa-envelope"></i>
                            <a href="#">servicioalcliente@royalgoldenclub.com</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="rgc-assesor__box">
                            <i class="fas fa-map-marked-alt"></i>
                            <a href="#">Av. el dorado # 68C-61 Oficina 628.</a>
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
<?php

if(!function_exists('rgc_action_button_func')){
    function rgc_action_button_func(){
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

        ob_start();
        ?>

        <?php if($tipo_reserva != "Por defecto"): ?>
                <a href="<?php echo $link_reserva; ?>" class="button-master principal-button button-rounded my-3" target="_blank">RESERVAR AHORA</a>
        <?php else: ?>
                <?php echo do_shortcode( '[contact-form-7 id="434" title="Reserva paquetes"]' );?>
        <?php endif; ?>
        <?php
        return ob_get_clean();
    }

    add_shortcode( "rgc_action_button", "rgc_action_button_func" );
}
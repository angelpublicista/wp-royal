<?php

if(!function_exists('rgc_restrict_content_func')){
    add_shortcode( 'rgc_user_register',  'rgc_restrict_content_func');
    function rgc_restrict_content_func($atts, $content = null){
        global $wp;
        $current_url = home_url(add_query_arg(array(),$wp->request));

        if ( ! is_user_logged_in() ){
            return '<div>Regístrate para ver el contenido...<a href="'.wp_login_url($current_url).'" >Ir al Registro</a></div>';
        }
        return $content;
    }
}
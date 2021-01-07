<?php

// Cambiar el pie de pagina del panel de Administración
function change_footer_admin() {
	$any = date('Y');
	echo '©'.$any.' Copyright · Desarrollada por www.geniorama.site';
   }
add_filter('admin_footer_text', 'change_footer_admin');


function example_remove_dashboard_widgets() {
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );
    remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'side' );
    }
   
   add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );


   //Acceso prohibido a admin de suscriptores
function restrict_access_admin_panel(){
    global $current_user;
    get_currentuserinfo();
    if ($current_user->user_level <  4) {

            $url =  get_bloginfo('url') . "/paquetes";
            wp_redirect( $url );
            exit;
    }
}
add_action('admin_init', 'restrict_access_admin_panel', 1);


// Ocultar barra admin
add_filter( 'show_admin_bar', '__return_false' );


add_filter( 'wp_nav_menu_objects', 'my_dynamic_menu_items' );

function my_dynamic_menu_items( $menu_items ) {
	$final_menu = [];
    foreach ( $menu_items as $menu_item ) {
        if ( '#profile_name#' == $menu_item->title ) {
        	 $user=wp_get_current_user();
        	if ( $user->ID ){
        		 $menu_item->title = $user->user_firstname;
        		 $final_menu[] = $menu_item;
            }
        } else {
        	$final_menu[] = $menu_item;
        }
    }
    return $final_menu;
}

add_filter( 'wp_nav_menu_items', 'dcms_items_login_logout', 10, 2);

function dcms_items_login_logout( $items, $args ) {

	if ($args->theme_location == 'menu-1') {
		if (is_user_logged_in())
		{
			$items .= '<li class="menu-item btn-menu btn-logout">
						<a class="nav-link" title="salir" href="'. wp_logout_url(get_home_url()) .'"><i class="fas fa-power-off"></i></a>
						</li>';
		}
	}

	return $items;
}
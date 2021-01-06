<?php

function enqueue_styles_child_theme() {

	$parent_style = 'master-template-woo-style';
	$child_style  = 'master-template-woo-child-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( $child_style, get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
	wp_enqueue_style( 'lightbox-css', get_stylesheet_directory_uri() . '/lightbox2/css/lightbox.min.css', '1.8.1' );
	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/slick/slick.css', '1.8.1' );
	wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/slick/slick-theme.css', '1.8.1' );
	wp_enqueue_style( 'custom-style-css', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', '1.0' );
	wp_enqueue_script( 'lightbox-js', get_stylesheet_directory_uri() . '/lightbox2/js/lightbox.min.js', array('jquery'), '1.8.1', true);
	wp_enqueue_script( 'custom-child-js', get_stylesheet_directory_uri() . '/assets/js/custom-child.js', array('jquery', 'slick-js'), '1.0', true);
	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.8.1', true);
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );

function my_custom_login_page_css() {
	wp_enqueue_style( 'login_css', get_stylesheet_directory_uri() . '/assets/css/login.css' );
	wp_enqueue_script( 'login-js', get_stylesheet_directory_uri() . '/assets/js/login.js', array('jquery'), '1.8.1', true);
}
add_action('login_head', 'my_custom_login_page_css');


require "inc/helpers.php";
require "inc/shortcodes/sc-action-button.php";
require "inc/shortcodes/sc-rgc-search-advanced.php";
require "inc/shortcodes/sc-rgc-carousel-tours.php";
require "inc/shortcodes/sc-rgc-releated-post.php";
require "inc/shortcodes/sc-rgc-assesor.php";
require "inc/shortcodes/sc-rgc-restrict-content.php";
require "inc/custom-post-types/cpt-tours.php";
require "inc/custom-taxonomies/tax-rgc-destinos.php";


add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
	if ( (is_single() || is_home() || is_category() ) && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'tours' ) );

	return $query;
}


function dcms_menu_dinamico( $args ) {

	if ( $args['theme_location'] == 'menu-1'){

		if ( is_user_logged_in() ) {
			$args['menu'] = 'menu-registrados';
		} else {
			$args['menu'] = 'menu-visitantes';
		}

	}

	return $args;
}

add_filter( 'wp_nav_menu_args', 'dcms_menu_dinamico' );

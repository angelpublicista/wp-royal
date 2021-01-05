<?php

if ( ! function_exists( 'rgc_destinos_func' ) ) {

    // Register Custom Taxonomy
    function rgc_destinos_func() {
    
        $labels = array(
            'name'                       => _x( 'Destinos', 'Taxonomy General Name', 'master-template-woo' ),
            'singular_name'              => _x( 'Destino', 'Taxonomy Singular Name', 'master-template-woo' ),
            'menu_name'                  => __( 'Destinos', 'master-template-woo' ),
            'all_items'                  => __( 'Todos los destinos', 'master-template-woo' ),
            'parent_item'                => __( 'Parent Item', 'master-template-woo' ),
            'parent_item_colon'          => __( 'Parent Item:', 'master-template-woo' ),
            'new_item_name'              => __( 'Nuevo destino', 'master-template-woo' ),
            'add_new_item'               => __( 'Agregar nuevo destino', 'master-template-woo' ),
            'edit_item'                  => __( 'Editar destino', 'master-template-woo' ),
            'update_item'                => __( 'Actualizar destino', 'master-template-woo' ),
            'view_item'                  => __( 'Ver destino', 'master-template-woo' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'master-template-woo' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'master-template-woo' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'master-template-woo' ),
            'popular_items'              => __( 'Popular Items', 'master-template-woo' ),
            'search_items'               => __( 'Search Items', 'master-template-woo' ),
            'not_found'                  => __( 'Not Found', 'master-template-woo' ),
            'no_terms'                   => __( 'No items', 'master-template-woo' ),
            'items_list'                 => __( 'Items list', 'master-template-woo' ),
            'items_list_navigation'      => __( 'Items list navigation', 'master-template-woo' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'show_in_rest'               => true,
        );
        register_taxonomy( 'destinos', array( 'tours' ), $args );
    
    }
    add_action( 'init', 'rgc_destinos_func', 0 );
    
}
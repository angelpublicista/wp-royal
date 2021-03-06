<?php
if ( ! function_exists('wp_tours') ) {

    // Register Custom Post Type
    function wp_tours() {
    
        $labels = array(
            'name'                  => _x( 'Tours', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Tour', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Tours', 'text_domain' ),
            'name_admin_bar'        => __( 'Tours', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'Todos los Tours', 'text_domain' ),
            'add_new_item'          => __( 'Agregar nuevo Tour', 'text_domain' ),
            'add_new'               => __( 'Agregar Nuevo', 'text_domain' ),
            'new_item'              => __( 'Nuevo Tour', 'text_domain' ),
            'edit_item'             => __( 'Editar Tour', 'text_domain' ),
            'update_item'           => __( 'Actualizar Tour', 'text_domain' ),
            'view_item'             => __( 'Ver Tour', 'text_domain' ),
            'view_items'            => __( 'Ver Tours', 'text_domain' ),
            'search_items'          => __( 'Buscar Tour', 'text_domain' ),
            'not_found'             => __( 'No se Encuentra', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Tour', 'text_domain' ),
            'description'           => __( 'Todos los Tours', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'comments' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-airplane',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'tours', $args );
    
    }
    add_action( 'init', 'wp_tours', 0 );
    
    }
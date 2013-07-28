<?php

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 800;

// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails', array( 'post', 'review' ) );	

	 // Set custom thumbnail dimensions
	set_post_thumbnail_size( 800, 300, true );
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );

// Register Custom Post Type
function reviews() {

	$labels = array(
		'name'                => _x( 'Reviews', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Review', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Review', 'text_domain' ),
		'parent_item_colon'   => __( 'Reviews', 'text_domain' ),
		'all_items'           => __( 'Todos os reviews', 'text_domain' ),
		'view_item'           => __( 'Visualizar Reviews', 'text_domain' ),
		'add_new_item'        => __( 'Adicionar novo review', 'text_domain' ),
		'add_new'             => __( 'Novo review', 'text_domain' ),
		'edit_item'           => __( 'Editar review', 'text_domain' ),
		'update_item'         => __( 'Atualizar review', 'text_domain' ),
		'search_items'        => __( 'Pesquisar review', 'text_domain' ),
		'not_found'           => __( 'Nenhum review encontrado', 'text_domain' ),
		'not_found_in_trash'  => __( 'Nenhum review encontrado na lixeira', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'reviews',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'review', 'text_domain' ),
		'description'         => __( 'Reviews', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'review', $args );

}

// Hook into the 'init' action
add_action( 'init', 'reviews', 0 );

?>
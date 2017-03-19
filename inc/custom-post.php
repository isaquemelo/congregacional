<?php

// Register Custom Post Type
function slider_post_type() {

	$labels = array(
		'name'                  => _x( 'Sliders', 'Post Type General Name', 'odin' ),
		'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'odin' ),
		'menu_name'             => __( 'Slider', 'odin' ),
		'name_admin_bar'        => __( 'Slider', 'odin' ),
		'archives'              => __( 'Item Archives', 'odin' ),
		'attributes'            => __( 'Item Attributes', 'odin' ),
		'parent_item_colon'     => __( 'Parent Item:', 'odin' ),
		'all_items'             => __( 'All Items', 'odin' ),
		'add_new_item'          => __( 'Add New Item', 'odin' ),
		'add_new'               => __( 'Add New', 'odin' ),
		'new_item'              => __( 'New Item', 'odin' ),
		'edit_item'             => __( 'Edit Item', 'odin' ),
		'update_item'           => __( 'Update Item', 'odin' ),
		'view_item'             => __( 'View Item', 'odin' ),
		'view_items'            => __( 'View Items', 'odin' ),
		'search_items'          => __( 'Search Item', 'odin' ),
		'not_found'             => __( 'Not found', 'odin' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'odin' ),
		'featured_image'        => __( 'Featured Image', 'odin' ),
		'set_featured_image'    => __( 'Set featured image', 'odin' ),
		'remove_featured_image' => __( 'Remove featured image', 'odin' ),
		'use_featured_image'    => __( 'Use as featured image', 'odin' ),
		'insert_into_item'      => __( 'Insert into item', 'odin' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'odin' ),
		'items_list'            => __( 'Items list', 'odin' ),
		'items_list_navigation' => __( 'Items list navigation', 'odin' ),
		'filter_items_list'     => __( 'Filter items list', 'odin' ),
	);
	$args = array(
		'label'                 => __( 'Slider', 'odin' ),
		'description'           => __( 'Opção para criar Slider na Página Principal', 'odin' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-add-page',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'slider_type', $args );

}
add_action( 'init', 'slider_post_type', 0 );




// Register Custom Post Type
function blocos_post_type() {

	$labels = array(
		'name'                  => _x( 'Blocos', 'Post Type General Name', 'odin' ),
		'singular_name'         => _x( 'Bloco', 'Post Type Singular Name', 'odin' ),
		'menu_name'             => __( 'Blocos', 'odin' ),
		'name_admin_bar'        => __( 'Blocos', 'odin' ),
		'archives'              => __( 'Item Archives', 'odin' ),
		'attributes'            => __( 'Item Attributes', 'odin' ),
		'parent_item_colon'     => __( 'Parent Item:', 'odin' ),
		'all_items'             => __( 'All Items', 'odin' ),
		'add_new_item'          => __( 'Add New Item', 'odin' ),
		'add_new'               => __( 'Add New', 'odin' ),
		'new_item'              => __( 'New Item', 'odin' ),
		'edit_item'             => __( 'Edit Item', 'odin' ),
		'update_item'           => __( 'Update Item', 'odin' ),
		'view_item'             => __( 'View Item', 'odin' ),
		'view_items'            => __( 'View Items', 'odin' ),
		'search_items'          => __( 'Search Item', 'odin' ),
		'not_found'             => __( 'Not found', 'odin' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'odin' ),
		'featured_image'        => __( 'Featured Image', 'odin' ),
		'set_featured_image'    => __( 'Set featured image', 'odin' ),
		'remove_featured_image' => __( 'Remove featured image', 'odin' ),
		'use_featured_image'    => __( 'Use as featured image', 'odin' ),
		'insert_into_item'      => __( 'Insert into item', 'odin' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'odin' ),
		'items_list'            => __( 'Items list', 'odin' ),
		'items_list_navigation' => __( 'Items list navigation', 'odin' ),
		'filter_items_list'     => __( 'Filter items list', 'odin' ),
	);
	$args = array(
		'label'                 => __( 'Bloco', 'odin' ),
		'description'           => __( 'Criar Blocos de Conteudo', 'odin' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-grid-view',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'blocos_type', $args );

}
add_action( 'init', 'blocos_post_type', 0 );






// Register Custom Post Type
function informativo_post_type() {

	$labels = array(
		'name'                  => _x( 'Informativos', 'Post Type General Name', 'odin' ),
		'singular_name'         => _x( 'Informativo', 'Post Type Singular Name', 'odin' ),
		'menu_name'             => __( 'Informativos', 'odin' ),
		'name_admin_bar'        => __( 'Informativos', 'odin' ),
		'archives'              => __( 'Item Archives', 'odin' ),
		'attributes'            => __( 'Item Attributes', 'odin' ),
		'parent_item_colon'     => __( 'Parent Item:', 'odin' ),
		'all_items'             => __( 'All Items', 'odin' ),
		'add_new_item'          => __( 'Add New Item', 'odin' ),
		'add_new'               => __( 'Add New', 'odin' ),
		'new_item'              => __( 'New Item', 'odin' ),
		'edit_item'             => __( 'Edit Item', 'odin' ),
		'update_item'           => __( 'Update Item', 'odin' ),
		'view_item'             => __( 'View Item', 'odin' ),
		'view_items'            => __( 'View Items', 'odin' ),
		'search_items'          => __( 'Search Item', 'odin' ),
		'not_found'             => __( 'Not found', 'odin' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'odin' ),
		'featured_image'        => __( 'Featured Image', 'odin' ),
		'set_featured_image'    => __( 'Set featured image', 'odin' ),
		'remove_featured_image' => __( 'Remove featured image', 'odin' ),
		'use_featured_image'    => __( 'Use as featured image', 'odin' ),
		'insert_into_item'      => __( 'Insert into item', 'odin' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'odin' ),
		'items_list'            => __( 'Items list', 'odin' ),
		'items_list_navigation' => __( 'Items list navigation', 'odin' ),
		'filter_items_list'     => __( 'Filter items list', 'odin' ),
	);
	$args = array(
		'label'                 => __( 'Informativo', 'odin' ),
		'description'           => __( 'Criar Blocos de Conteudo Informativo', 'odin' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-editor-alignleft',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'informativo_type', $args );

}
add_action( 'init', 'informativo_post_type', 0 );





























// Register Custom Post Type
function pessoas_post_type() {

	$labels = array(
		'name'                  => _x( 'Pessoas', 'Post Type General Name', 'odin' ),
		'singular_name'         => _x( 'Pessoa', 'Post Type Singular Name', 'odin' ),
		'menu_name'             => __( 'Pessoas', 'odin' ),
		'name_admin_bar'        => __( 'Pessoas', 'odin' ),
		'archives'              => __( 'Item Archives', 'odin' ),
		'attributes'            => __( 'Item Attributes', 'odin' ),
		'parent_item_colon'     => __( 'Parent Item:', 'odin' ),
		'all_items'             => __( 'All Items', 'odin' ),
		'add_new_item'          => __( 'Add New Item', 'odin' ),
		'add_new'               => __( 'Add New', 'odin' ),
		'new_item'              => __( 'New Item', 'odin' ),
		'edit_item'             => __( 'Edit Item', 'odin' ),
		'update_item'           => __( 'Update Item', 'odin' ),
		'view_item'             => __( 'View Item', 'odin' ),
		'view_items'            => __( 'View Items', 'odin' ),
		'search_items'          => __( 'Search Item', 'odin' ),
		'not_found'             => __( 'Not found', 'odin' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'odin' ),
		'featured_image'        => __( 'Featured Image', 'odin' ),
		'set_featured_image'    => __( 'Set featured image', 'odin' ),
		'remove_featured_image' => __( 'Remove featured image', 'odin' ),
		'use_featured_image'    => __( 'Use as featured image', 'odin' ),
		'insert_into_item'      => __( 'Insert into item', 'odin' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'odin' ),
		'items_list'            => __( 'Items list', 'odin' ),
		'items_list_navigation' => __( 'Items list navigation', 'odin' ),
		'filter_items_list'     => __( 'Filter items list', 'odin' ),
	);
	$args = array(
		'label'                 => __( 'Pessoa', 'odin' ),
		'description'           => __( 'Pessoas da Administração', 'odin' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'thumbnail', 'revisions', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'pessoas_type', $args );

}
add_action( 'init', 'pessoas_post_type', 0 );




































?>

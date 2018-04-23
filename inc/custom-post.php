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
			'all_items'             => __( 'Todos os Itens', 'odin' ),
			'add_new_item'          => __( 'Adicionar novo Item', 'odin' ),
			'add_new'               => __( 'Adicionar Novo', 'odin' ),
			'new_item'              => __( 'Novo Item', 'odin' ),
			'edit_item'             => __( 'Editar Item', 'odin' ),
			'update_item'           => __( 'Atualizar Item', 'odin' ),
			'view_item'             => __( 'Ver Item', 'odin' ),
			'view_items'            => __( 'Ver Items', 'odin' ),
			'search_items'          => __( 'Buscar Item', 'odin' ),
			'not_found'             => __( 'Not found', 'odin' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'odin' ),
			'featured_image'        => __( 'Imagem Destacada', 'odin' ),
			'set_featured_image'    => __( 'Definir Imagem Destacada', 'odin' ),
			'remove_featured_image' => __( 'Remover Imagem Destacada', 'odin' ),
			'use_featured_image'    => __( 'Usar como Imagem Destacada', 'odin' ),
			'insert_into_item'      => __( 'Adicionar no Item', 'odin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'odin' ),
			'items_list'            => __( 'Lista de Itens', 'odin' ),
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
			'all_items'             => __( 'Todos os Itens', 'odin' ),
			'add_new_item'          => __( 'Adicionar novo Item', 'odin' ),
			'add_new'               => __( 'Adicionar Novo', 'odin' ),
			'new_item'              => __( 'Novo Item', 'odin' ),
			'edit_item'             => __( 'Editar Item', 'odin' ),
			'update_item'           => __( 'Atualizar Item', 'odin' ),
			'view_item'             => __( 'Ver Item', 'odin' ),
			'view_items'            => __( 'Ver Items', 'odin' ),
			'search_items'          => __( 'Buscar Item', 'odin' ),
			'not_found'             => __( 'Não Encontrado', 'odin' ),
			'not_found_in_trash'    => __( 'Não Encontrado', 'odin' ),
			'featured_image'        => __( 'Imagem Destacada', 'odin' ),
			'set_featured_image'    => __( 'Definir Imagem Destacada', 'odin' ),
			'remove_featured_image' => __( 'Remover Imagem Destacada', 'odin' ),
			'use_featured_image'    => __( 'Usar como Imagem Destacada', 'odin' ),
			'insert_into_item'      => __( 'Adicionar no Item', 'odin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'odin' ),
			'items_list'            => __( 'Lista de Itens', 'odin' ),
			'items_list_navigation' => __( 'Items list navigation', 'odin' ),
			'filter_items_list'     => __( 'Filter items list', 'odin' ),
		);
		$rewrite = array(
			'slug'                  => 'bloco',
			'with_front'            => false,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Bloco', 'odin' ),
			'description'           => __( 'Criar Blocos de Conteudo', 'odin' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail'),
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
			'rewrite'               => $rewrite,
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
			'all_items'             => __( 'Todos os Itens', 'odin' ),
			'add_new_item'          => __( 'Adicionar novo Item', 'odin' ),
			'add_new'               => __( 'Adicionar Novo', 'odin' ),
			'new_item'              => __( 'Novo Item', 'odin' ),
			'edit_item'             => __( 'Editar Item', 'odin' ),
			'update_item'           => __( 'Atualizar Item', 'odin' ),
			'view_item'             => __( 'Ver Item', 'odin' ),
			'view_items'            => __( 'Ver Items', 'odin' ),
			'search_items'          => __( 'Buscar Item', 'odin' ),
			'not_found'             => __( 'Não Encontrado', 'odin' ),
			'not_found_in_trash'    => __( 'Não Encontrado', 'odin' ),
			'featured_image'        => __( 'Imagem Destacada', 'odin' ),
			'set_featured_image'    => __( 'Definir Imagem Destacada', 'odin' ),
			'remove_featured_image' => __( 'Remover Imagem Destacada', 'odin' ),
			'use_featured_image'    => __( 'Usar como Imagem Destacada', 'odin' ),
			'insert_into_item'      => __( 'Adicionar no Item', 'odin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'odin' ),
			'items_list'            => __( 'Lista de Itens', 'odin' ),
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
			'all_items'             => __( 'Todos os Itens', 'odin' ),
			'add_new_item'          => __( 'Adicionar novo Item', 'odin' ),
			'add_new'               => __( 'Adicionar Novo', 'odin' ),
			'new_item'              => __( 'Novo Item', 'odin' ),
			'edit_item'             => __( 'Editar Item', 'odin' ),
			'update_item'           => __( 'Atualizar Item', 'odin' ),
			'view_item'             => __( 'Ver Item', 'odin' ),
			'view_items'            => __( 'Ver Items', 'odin' ),
			'search_items'          => __( 'Buscar Item', 'odin' ),
			'not_found'             => __( 'Não Encontrado', 'odin' ),
			'not_found_in_trash'    => __( 'Não Encontrado', 'odin' ),
			'featured_image'        => __( 'Imagem Destacada', 'odin' ),
			'set_featured_image'    => __( 'Definir Imagem Destacada', 'odin' ),
			'remove_featured_image' => __( 'Remover Imagem Destacada', 'odin' ),
			'use_featured_image'    => __( 'Usar como Imagem Destacada', 'odin' ),
			'insert_into_item'      => __( 'Adicionar no Item', 'odin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'odin' ),
			'items_list'            => __( 'Lista de Itens', 'odin' ),
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


	// Register Custom Post Type
	function agenda_post_type() {

		$labels = array(
			'name'                  => _x( 'Agendas', 'Post Type General Name', 'odin' ),
			'singular_name'         => _x( 'Agenda', 'Post Type Singular Name', 'odin' ),
			'menu_name'             => __( 'Agenda', 'odin' ),
			'name_admin_bar'        => __( 'Agenda', 'odin' ),
							'archives'              => __( 'Item Archives', 'odin' ),
			'attributes'            => __( 'Item Attributes', 'odin' ),
			'parent_item_colon'     => __( 'Parent Item:', 'odin' ),
			'all_items'             => __( 'Todos os Itens', 'odin' ),
			'add_new_item'          => __( 'Adicionar novo Item', 'odin' ),
			'add_new'               => __( 'Adicionar Novo', 'odin' ),
			'new_item'              => __( 'Novo Item', 'odin' ),
			'edit_item'             => __( 'Editar Item', 'odin' ),
			'update_item'           => __( 'Atualizar Item', 'odin' ),
			'view_item'             => __( 'Ver Item', 'odin' ),
			'view_items'            => __( 'Ver Items', 'odin' ),
			'search_items'          => __( 'Buscar Item', 'odin' ),
			'not_found'             => __( 'Não Encontrado', 'odin' ),
			'not_found_in_trash'    => __( 'Não Encontrado', 'odin' ),
			'featured_image'        => __( 'Imagem Destacada', 'odin' ),
			'set_featured_image'    => __( 'Definir Imagem Destacada', 'odin' ),
			'remove_featured_image' => __( 'Remover Imagem Destacada', 'odin' ),
			'use_featured_image'    => __( 'Usar como Imagem Destacada', 'odin' ),
			'insert_into_item'      => __( 'Adicionar no Item', 'odin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'odin' ),
			'items_list'            => __( 'Lista de Itens', 'odin' ),
			'items_list_navigation' => __( 'Items list navigation', 'odin' ),
			'filter_items_list'     => __( 'Filter items list', 'odin' ),
		);
		$args = array(
			'label'                 => __( 'Agenda', 'odin' ),
			'description'           => __( 'Agenda', 'odin' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'comments', 'revisions', ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-book',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'agenda_type', $args );

	}
	add_action( 'init', 'agenda_post_type', 0 );

	// Register Custom Post Type
	function contato_post_type() {

		$labels = array(
			'name'                  => _x( 'Contatos', 'Post Type General Name', 'odin' ),
			'singular_name'         => _x( 'Contato', 'Post Type Singular Name', 'odin' ),
			'menu_name'             => __( 'Contato por Email', 'odin' ),
			'name_admin_bar'        => __( 'Contato por Email', 'odin' ),
							'archives'              => __( 'Item Archives', 'odin' ),
			'attributes'            => __( 'Item Attributes', 'odin' ),
			'parent_item_colon'     => __( 'Parent Item:', 'odin' ),
			'all_items'             => __( 'Todos os Itens', 'odin' ),
			'add_new_item'          => __( 'Adicionar novo Item', 'odin' ),
			'add_new'               => __( 'Adicionar Novo', 'odin' ),
			'new_item'              => __( 'Novo Item', 'odin' ),
			'edit_item'             => __( 'Editar Item', 'odin' ),
			'update_item'           => __( 'Atualizar Item', 'odin' ),
			'view_item'             => __( 'Ver Item', 'odin' ),
			'view_items'            => __( 'Ver Items', 'odin' ),
			'search_items'          => __( 'Buscar Item', 'odin' ),
			'not_found'             => __( 'Não Encontrado', 'odin' ),
			'not_found_in_trash'    => __( 'Não Encontrado', 'odin' ),
			'featured_image'        => __( 'Imagem Destacada', 'odin' ),
			'set_featured_image'    => __( 'Definir Imagem Destacada', 'odin' ),
			'remove_featured_image' => __( 'Remover Imagem Destacada', 'odin' ),
			'use_featured_image'    => __( 'Usar como Imagem Destacada', 'odin' ),
			'insert_into_item'      => __( 'Adicionar no Item', 'odin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'odin' ),
			'items_list'            => __( 'Lista de Itens', 'odin' ),
			'items_list_navigation' => __( 'Items list navigation', 'odin' ),
			'filter_items_list'     => __( 'Filter items list', 'odin' ),
		);
		$args = array(
			'label'                 => __( 'Contato', 'odin' ),
			'description'           => __( 'Contato', 'odin' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-businessman',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'contato_type', $args );

	}
	add_action( 'init', 'contato_post_type', 0 );

?>

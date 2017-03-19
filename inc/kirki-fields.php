<?php
/**
 *
 * Add kirki fields
 *
*/
if ( class_exists( 'Kirki' ) ) {
	// configure kirki
	Kirki::add_config( 'congregacional-theme', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );
	// add sections
	Kirki::add_section( 'header_section', array(
		'title'          => __( 'Header', 'odin' ),
    	'description'    => __( 'Header e Topbar' ),
    	'priority'       => 1,
    	'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'footer_section', array(
		'title'          => __( 'Footer', 'odin' ),
    	'description'    => __( 'Configuração do Footer' ),
    	'priority'       => 1,
    	'capability'     => 'edit_theme_options',
    ) );

	Kirki::add_field( 'congregacional-theme', array(
		'type'        => 'repeater',
		'label'       => esc_attr__( 'Redes Sociais', 'odin' ),
		'section'     => 'header_section',
		'priority'    => 2,
		'settings'    => 'header_social',
		'row_label' => array(
			'type' => 'text',
			'value' => esc_attr__( 'Rede Social', 'odin' ),
		),
		'fields' => array(
			'header_icon' => array(
				'type'        => 'radio-image',
				'label'       => esc_attr__( 'Icon', 'odin' ),
				'description' => esc_attr__( 'Select the icon', 'odin' ),
				'default'     => 'icon-facebook',
				'choices'		=> get_social_icons_select()
			),
			'link' => array(
				'type' => 'text',
				'label'	=> 'Link',
				'default' => '#'
			)
		)
	) );
	Kirki::add_field( 'congregacional-theme', array(
		'type'        => 'repeater',
		'label'       => esc_attr__( 'Redes Sociais', 'odin' ),
		'section'     => 'footer_section',
		'priority'    => 2,
		'settings'    => 'footer_social',
		'row_label' => array(
			'type' => 'text',
			'value' => esc_attr__( 'Rede Social', 'odin' ),
		),
		'fields' => array(
			'footer_icon' => array(
				'type'        => 'radio-image',
				'label'       => esc_attr__( 'Icon', 'odin' ),
				'description' => esc_attr__( 'Select the icon', 'odin' ),
				'default'     => 'icon-facebook',
				'choices'		=> get_social_icons_select()
			),
			'link' => array(
				'type' => 'text',
				'label'	=> 'Link',
				'default' => '#'
			)
		)
	) );

}

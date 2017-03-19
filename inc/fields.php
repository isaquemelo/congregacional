<?php
/*
 *
 * Odin ACF Fields
 *
*/
// if(function_exists("register_field_group"))
// {
// 	register_field_group(array (
// 		'id' => 'acf_opcoes-para-home',
// 		'title' => 'Opções para Home',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_58cc73a34e43b',
// 				'label' => 'Ocupar toda a tela',
// 				'name' => 'ocupar_toda_a_tela',
// 				'type' => 'true_false',
// 				'required' => 0,
// 				'message' => '',
// 				'default_value' => 0,
// 			),

// 			array (
// 				'key' => 'field_58cd415e41235',
// 				'label' => 'Cor de Fundo ',
// 				'name' => 'cor_fundo',
// 				'type' => 'color_picker',
// 				'default_value' => '',
// 			),


// 		),

// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'page',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'side',
// 			'layout' => 'default',
// 			'hide_on_screen' => array (
// 			),
// 		),
// 		'menu_order' => 0,
// 	));


// 	register_field_group(array (
// 		'id' => 'acf_opcao',
// 		'title' => 'Link de Botão',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_58cc78eddfd85',
// 				'label' => 'Link Botão',
// 				'name' => 'link_botao',
// 				'type' => 'text',
// 				'default_value' => '#',
// 				'placeholder' => '#section-2',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'none',
// 				'maxlength' => '',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'page_template',
// 					'operator' => '==',
// 					'value' => 'page-slider.php',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 				array (
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'page',
// 					'order_no' => 1,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'side',
// 			'layout' => 'default',
// 			'hide_on_screen' => array (
// 			),
// 		),
// 		'menu_order' => 0,
// 	));


// 	register_field_group(array (
// 		'id' => 'acf_tipo-de-pagina-a-ser-projetada',
// 		'title' => 'Tipo de Página a ser Projetada',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_58cc82ab09d89',
// 				'label' => 'Esquema',
// 				'name' => 'tipo_de_pagina',
// 				'type' => 'select',
// 				'required' => 1,
// 				'choices' => array (
// 					'slider' => 'Slider',
// 					'informativo' => 'Informativo',
// 					'boxes' => 'Boxes',
// 					'pessoas' => 'Pessoas',
// 					'agenda' => 'Agenda',
// 					'blog' => 'Blog',
// 					'contato' => 'Contato',
// 				),
// 				'default_value' => '',
// 				'allow_null' => 0,
// 				'multiple' => 0,
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'page',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 				array (
// 					'param' => 'page_parent',
// 					'operator' => '==',
// 					'value' => '22',
// 					'order_no' => 1,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'acf_after_title',
// 			'layout' => 'default',
// 			'hide_on_screen' => array (
// 			),
// 		),
// 		'menu_order' => 0,
// 	));

// 	register_field_group(array (
// 		'id' => 'acf_fundo-do-bloco',
// 		'title' => 'Fundo do Bloco',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_58cd598346882',
// 				'label' => 'Cor do Bloco',
// 				'name' => 'cor_do_bloco',
// 				'type' => 'color_picker',
// 				'default_value' => '',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'page',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 				array (
// 					'param' => 'page_parent',
// 					'operator' => '==',
// 					'value' => '53',
// 					'order_no' => 1,
// 					'group_no' => 0,
// 				),
// 				array (
// 					'param' => 'page_template',
// 					'operator' => '==',
// 					'value' => 'page-box.php',
// 					'order_no' => 2,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'default',
// 			'hide_on_screen' => array (
// 			),
// 		),
// 		'menu_order' => 0,
// 	));


// 	register_field_group(array (
// 		'id' => 'acf_titulo-mestre',
// 		'title' => 'Titulo Mestre',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_58cd830049fb4',
// 				'label' => 'Titulo Mestre',
// 				'name' => 'titulo_mestre',
// 				'type' => 'text',
// 				'required' => 1,
// 				'default_value' => '',
// 				'placeholder' => 'NO QUE CREMOS?',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'page',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 				array (
// 					'param' => 'page_parent',
// 					'operator' => '==',
// 					'value' => '22',
// 					'order_no' => 1,
// 					'group_no' => 0,
// 				),
// 				array (
// 					'param' => 'page_template',
// 					'operator' => '==',
// 					'value' => 'page-info.php',
// 					'order_no' => 2,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'acf_after_title',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 			),
// 		),
// 		'menu_order' => 0,
// 	));





// register_field_group(array (
// 		'id' => 'acf_informacoes-pessoais',
// 		'title' => 'Informações Pessoais',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_58cd9b2203026',
// 				'label' => 'Cargo',
// 				'name' => 'cargo',
// 				'type' => 'text',
// 				'required' => 1,
// 				'default_value' => '',
// 				'placeholder' => 'Pastor, Diacono, Auxiliar (...)',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'none',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_58cd9b6f03027',
// 				'label' => 'Resumo',
// 				'name' => 'resumo',
// 				'type' => 'textarea',
// 				'required' => 1,
// 				'default_value' => '',
// 				'placeholder' => 'Fale um pouco sobre você.',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'page',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 				array (
// 					'param' => 'page_template',
// 					'operator' => '==',
// 					'value' => 'page-people.php',
// 					'order_no' => 1,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 			),
// 		),
// 		'menu_order' => 0,
// 	));











//}

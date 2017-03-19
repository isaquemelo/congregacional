<?php
//  if(function_exists("register_field_group"))
//  {
//     register_field_group(array (
//         'id' => 'acf_exclusivo-blocos',
//         'title' => 'Exclusivo Blocos',
//         'fields' => array (
//             array (
//                 'key' => 'field_58cdd2f0e8999',
//                 'label' => 'Cor de Fundo do Bloco',
//                 'name' => 'cor_de_fundo_do_bloco',
//                 'type' => 'color_picker',
//                 'default_value' => '',
//             ),
//         ),
//         'location' => array (
//             array (
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'blocos_type',
//                     'order_no' => 0,
//                     'group_no' => 0,
//                 ),
//             ),
//         ),
//         'options' => array (
//             'position' => 'normal',
//             'layout' => 'default',
//             'hide_on_screen' => array (
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => 'acf_exclusivo-informativos',
//         'title' => 'Exclusivo Informativos',
//         'fields' => array (
//             array (
//                 'key' => 'field_58cdcefcf9ea3',
//                 'label' => 'Titulo Mestre',
//                 'name' => 'titulo_mestre',
//                 'type' => 'text',
//                 'default_value' => 'GERAL',
//                 'placeholder' => '',
//                 'prepend' => '',
//                 'append' => '',
//                 'formatting' => 'html',
//                 'maxlength' => '',
//             ),
//         ),
//         'location' => array (
//             array (
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'informativo_type',
//                     'order_no' => 0,
//                     'group_no' => 0,
//                 ),
//             ),
//         ),
//         'options' => array (
//             'position' => 'normal',
//             'layout' => 'no_box',
//             'hide_on_screen' => array (
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => 'acf_exclusivo-pessoas',
//         'title' => 'Exclusivo Pessoas',
//         'fields' => array (
//             array (
//                 'key' => 'field_58cdda46b80e3',
//                 'label' => 'Cargo',
//                 'name' => 'cargo',
//                 'type' => 'select',
//                 'choices' => array (
//                     'pastor' => 'Pastor',
//                     'diacono' => 'Diacono',
//                     'presibitero' => 'Presibitero',
//                     '' => '',
//                     'administracao' => 'Administração',
//                     'lideranca' => 'Liderança',
//                 ),
//                 'default_value' => '',
//                 'allow_null' => 0,
//                 'multiple' => 0,
//             ),
//         ),
//         'location' => array (
//             array (
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'pessoas_type',
//                     'order_no' => 0,
//                     'group_no' => 0,
//                 ),
//             ),
//         ),
//         'options' => array (
//             'position' => 'normal',
//             'layout' => 'default',
//             'hide_on_screen' => array (
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => 'acf_opcoes',
//         'title' => 'Opções',
//         'fields' => array (
//             array (
//                 'key' => 'field_58cdcbcb4b763',
//                 'label' => 'Ocupar toda Tela',
//                 'name' => 'ocupar_toda_tela',
//                 'type' => 'true_false',
//                 'message' => '',
//                 'default_value' => 0,
//             ),
//             array (
//                 'key' => 'field_58cdc914f702a',
//                 'label' => 'Cor de Fundo',
//                 'name' => 'cor_de_fundo',
//                 'type' => 'color_picker',
//                 'default_value' => '',
//             ),
//         ),
//         'location' => array (
//             array (
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'slider_type',
//                     'order_no' => 0,
//                     'group_no' => 0,
//                 ),
//             ),
//             array (
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'informativo_type',
//                     'order_no' => 0,
//                     'group_no' => 1,
//                 ),
//             ),
//             array (
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'pessoas_type',
//                     'order_no' => 0,
//                     'group_no' => 2,
//                 ),
//             ),
//         ),
//         'options' => array (
//             'position' => 'normal',
//             'layout' => 'default',
//             'hide_on_screen' => array (
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => 'acf_exlusivas-do-slide',
//         'title' => 'Exlusivas do Slide',
//         'fields' => array (
//             array (
//                 'key' => 'field_58cdce02b8c10',
//                 'label' => 'Link do Botão ',
//                 'name' => 'link_botao',
//                 'type' => 'text',
//                 'default_value' => '#',
//                 'placeholder' => '',
//                 'prepend' => '',
//                 'append' => '',
//                 'formatting' => 'none',
//                 'maxlength' => '',
//             ),
//         ),
//         'location' => array (
//             array (
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'slider_type',
//                     'order_no' => 0,
//                     'group_no' => 0,
//                 ),
//             ),
//         ),
//         'options' => array (
//             'position' => 'normal',
//             'layout' => 'default',
//             'hide_on_screen' => array (
//             ),
//         ),
//         'menu_order' => 1,
//     ));
// }




?>



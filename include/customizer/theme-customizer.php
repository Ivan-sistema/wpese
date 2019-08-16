<?php

require get_template_directory().'/include/customizer/social.php';

function ese_customize_register( $wp_customize ){

	$wp_customize->get_section('custom_css')->description = 'Colocar Css Adicional ';
	$wp_customize->add_panel('opcoes', array(
		'title' => 'Opções do Tema',
		'priority' => 200
	));
	ese_social_customizer( $wp_customize );



}



?>
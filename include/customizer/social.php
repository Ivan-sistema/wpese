<?php

function ese_social_customizer( $wp_customize ){

	// SETTINGS

	$wp_customize->add_setting('ese_instagram', array('default'=>''));

	$wp_customize->add_setting('ese_youtube', array('default'=>''));

	$wp_customize->add_setting('ese_facebook', array('default'=>''));

	$wp_customize->add_setting('ese_twitter', array('default'=>''));

	$wp_customize->add_setting('ese_linkedin', array('default'=>''));



	//SECTIONS

	$wp_customize->add_section('ese_social_section', array(

		'title' => 'Redes Sociais',
		'priority' => '1',
		'panel' => 'opcoes',
		'description' => 'Para a rede social ficar visivel coloque um link , caso não use alguma rede social deixe o campo em branco que o ícone irá desaparecer.'

	));



	//CONTROLLERS

	$wp_customize->add_control(

		new WP_Customize_Control(

			$wp_customize,

			'ese_instagram',

			array(

				'label' => 'Instagram',

				'section' => 'ese_social_section',

				'settings' => 'ese_instagram',

				'type' => 'text'

			)

		)

	);

	$wp_customize->add_control(

		new wp_Customize_Control(

			$wp_customize,

			'ese_youtube',

			array(

				'label' => 'youtube',

				'section' => 'ese_social_section',

				'settings' => 'ese_youtube',

				'type' => 'text'

			)

		)

	);

	$wp_customize->add_control(

		new WP_Customize_Control(

			$wp_customize,

			'ese_facebook',

			array(

				'label' => 'Facebook',

				'section' => 'ese_social_section',

				'settings' => 'ese_facebook',

				'type' => 'text'

			)

		)

	);

	$wp_customize->add_control(

		new WP_Customize_Control(

			$wp_customize,

			'ese_twitter',

			array(

				'label' => 'Twitter',

				'section' => 'ese_social_section',

				'settings' => 'ese_twitter',

				'type' => 'text'

			)

		)

	);

	$wp_customize->add_control(

		new WP_Customize_Control(

			$wp_customize,

			'ese_linkedin',

			array(

				'label' => 'linedin',

				'section' => 'ese_social_section',

				'settings' => 'ese_linkedin',

				'type' => 'text'

			)

		)

	);



	

}





?>
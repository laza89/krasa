<?php

// General fields
$judgement_default_options = judgement_get_option_defaults();

// Header Logo Height
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'slider',
	'settings'		 => 'judgement_logo_height',
	'label'			 => esc_html__( 'Logo Height', 'judgement' ),
	'description'	 => esc_html__( 'Adjust the height of your logo in pixels.', 'judgement' ),
	'section'		 => 'judgement_section_general_logo_height',
	'default'  		=> 50,
	'priority' 		=> 1,
	'choices'  		=> array(
		'min'  		=> 0,
		'max'  		=> 100,
		'step' 		=> 1,
	),
	'output' 		=> array(
		array(
			'element'  => '.ccfw-site-logo img',
			'property' => 'height',
			'units'    => 'px',
		),
	),
) );
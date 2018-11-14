<?php

// Typography fields
// Main body fields
judgement_Kirki::add_field( 'judgement_config', array(
	'type'		 => 'typography',
	'settings'	 => 'judgement_typography_mainbody_fontfamily',
	'label'		 => esc_html__( 'Font settings', 'judgement' ),
	'section'	 => 'judgement_typography_section_mainbody',
	'default'	 => array(
		'font-family'	 => 'Muli',
		'variant'		 => '400',
		'font-size'		 => '17px',
		'line-height'	 => '1.6',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#444',
		'text-transform' => 'none'
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => 'body, input, select, textarea, button, .elementor-widget-tabs .elementor-tab-title > span, body .elementor-widget-button .elementor-button',
			'property'	 => 'font-family',
		),
	),
) );

// Headings and Menu
judgement_Kirki::add_field( 'judgement_config', array(
	'type'		 => 'typography',
	'settings'	 => 'judgement_typography_mainbody_headings',
	'label'		 => esc_html__( 'Headings and Main Menu', 'judgement' ),
	'section'	 => 'judgement_typography_section_headings',
	'default'	 => array(
		'font-family'	 => 'Playfair Display',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => 'body .blog-menu > li > a, body h1, body h2, body h3, body h4, body h5, body h6',
			'property'	 => 'font-family',
		),
	),
) );

// Main Menu
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'typography',
	'settings'		 => 'judgement_typography_mainmenu_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'judgement' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'judgement' ),
	'section'		 => 'judgement_typography_section_headings_mainmenu',
	'default'		 => array(
		'font-family'	 => 'Playfair Display',
		'font-weight'	 => '400',
		'font-size'		 => '18px',
		'letter-spacing' => '0px',
		'subsets'		 => array( 'latin-ext' ),
		'text-transform' => 'none'
	),
	'priority'		 => 20,
	'output'		 => array(
		array(
			'element'	 => '.blog-menu > li > a',
			'property'	 => 'font-family',
		)
	)
) );

// h1
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'typography',
	'settings'		 => 'judgement_typography_h1_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'judgement' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'judgement' ),
	'section'		 => 'judgement_typography_section_headings_h1',
	'default'		 => array(
		'font-family'	 => 'Playfair Display',
		'font-weight'	 => '400',
		'font-size'		 => '42px',
		'line-height'	 => '1.4',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 20,
	'output'		 => array(
		array(
			'element'	 => 'h1, .entry-header h1',
			'property'	 => 'font-family',
		)
	)
) );

// h2
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'typography',
	'settings'		 => 'judgement_typography_h2_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'judgement' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'judgement' ),
	'section'		 => 'judgement_typography_section_headings_h2',
	'default'		 => array(
		'font-family'	 => 'Playfair Display',
		'variant'		 => '400',
		'font-size'		 => '34px',
		'line-height'	 => '1.4',
		'letter-spacing' => '0px',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 30,
	'output'		 => array(
		array(
			'element'	 => 'h2',
			'property'	 => 'font-family',
		)
	)
) );


// h3
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'typography',
	'settings'		 => 'judgement_typography_h3_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'judgement' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'judgement' ),
	'section'		 => 'judgement_typography_section_headings_h3',
	'default'		 => array(
		'font-family'	 => 'Playfair Display',
		'variant'		 => '400',
		'font-size'		 => '28px',
		'line-height'	 => '1.4',
		'letter-spacing' => '0px',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 40,
	'output'		 => array(
		array(
			'element'	 => 'h3',
			'property'	 => 'font-family',
		)
	)
) );


// h4
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'typography',
	'settings'		 => 'judgement_typography_h4_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'judgement' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'judgement' ),
	'section'		 => 'judgement_typography_section_headings_h4',
	'default'		 => array(
		'font-family'	 => 'Playfair Display',
		'variant'		 => '400',
		'font-size'		 => '26px',
		'line-height'	 => '1.5',
		'letter-spacing' => '0px',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 50,
	'output'		 => array(
		array(
			'element'	 => 'h4',
			'property'	 => 'font-family',
		)
	)
) );


// h5
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'typography',
	'settings'		 => 'judgement_typography_h5_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'judgement' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'judgement' ),
	'section'		 => 'judgement_typography_section_headings_h5',
	'default'		 => array(
		'font-family'	 => 'Playfair Display',
		'variant'		 => '400',
		'font-size'		 => '22px',
		'line-height'	 => '1.5',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 60,
	'output'		 => array(
		array(
			'element'	 => 'h5',
			'property'	 => 'font-family',
		)
	)
) );


// h6
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'typography',
	'settings'		 => 'judgement_typography_h6_fontfamily',
	'label'			 => esc_html__( 'Font Settings', 'judgement' ),
	'description'	 => esc_html__( 'Select which font you would like to use', 'judgement' ),
	'section'		 => 'judgement_typography_section_headings_h6',
	'default'		 => array(
		'font-family'	 => 'Playfair Display',
		'variant'		 => 'regular',
		'font-size'		 => '16px',
		'line-height'	 => '1.5',
		'letter-spacing' => '0',
		'subsets'		 => array( 'latin-ext' ),
		'color'			 => '#333333',
		'text-transform' => 'none'
	),
	'priority'		 => 70,
	'output'		 => array(
		array(
			'element'	 => 'h6',
			'property'	 => 'font-family',
		)
	)
) );

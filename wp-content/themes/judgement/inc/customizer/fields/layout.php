<?php

// Layout fields
$judgement_default_options = judgement_get_option_defaults();

// Top bar fields
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'radio',
	'settings'		 => 'judgement_layout_topbar',
	'label'			 => esc_html__( 'Top bar', 'judgement' ),
	'description'	 => esc_html__( 'Show or hide the Top bar?', 'judgement' ),
	'section'		 => 'judgement_layout_section_topbar',
	'default'		 => $judgement_default_options['judgement_layout_topbar'],
	'priority'		 => 10,
	'transport'		 => 'refresh',
	'choices'		 => array(
		'show'	 => esc_html__( 'Show', 'judgement' ),
		'hide'	 => esc_html__( 'Hide', 'judgement' ),
	),
) );

// Default page heading image
judgement_Kirki::add_field( 'judgement_config', array(
  'settings' 		=> 'judgement_layout_default_heading_image',
  'type'     		=> 'image',
  'label'    		=> esc_html__( 'Default Page Heading Image', 'judgement' ),
  'description'	 	=> esc_html__( 'Upload an image at least 1400px wide.', 'judgement' ),
  'section'  		=> 'judgement_layout_section_pageheading',
  'output'   		=> array(
    array(
      'element'  => '.entry-header',
      'property' => 'background-image',
    ),
  ),
) );

// Footer fields
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'radio',
	'settings'		 => 'judgement_layout_first_footer',
	'label'			 => esc_html__( 'Show Footer?', 'judgement' ),
	'description'	 => esc_html__( 'Show or hide the Footer?', 'judgement' ),
	'section'		 => 'judgement_layout_section_footer',
	'default'		 => $judgement_default_options['judgement_layout_first_footer'],
	'priority'		 => 10,
	'transport'		 => 'refresh',
	'choices'		 => array(
		'show'	 => esc_html__( 'Show', 'judgement' ),
		'hide'	 => esc_html__( 'Hide', 'judgement' ),
	),
) );
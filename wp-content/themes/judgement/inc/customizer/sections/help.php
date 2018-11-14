<?php

/**
 * Create sections using the WordPress Customizer API.
 */
function judgement_kirki_section_help( $wp_customize ) {

	/**
	 * Add sections
	 */
	//Help
	$wp_customize->add_section( 'judgement_section_help_help', array(
		'title'			 => __( 'Judgement Help', 'judgement' ),
		'panel'			 => 'judgement_panel_help',
		'priority'		 => 10,
		'description'	 => __( 'Get help', 'judgement' ),
	) );
	$wp_customize->add_section( 'judgement_section_help_support', array(
		'title'			 => __( 'Judgement Support', 'judgement' ),
		'panel'			 => 'judgement_panel_help',
		'priority'		 => 10,
		'description'	 => __( 'Get premium customer support', 'judgement' ),
	) );
}

add_action( 'customize_register', 'judgement_kirki_section_help' );

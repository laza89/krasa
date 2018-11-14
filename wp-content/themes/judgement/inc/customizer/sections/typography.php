<?php

/**
 * Create sections using the WordPress Customizer API.
 */
function judgement_kirki_section_typography( $wp_customize ) {

	/**
	 * Add sections
	 */

	//Typography
	$wp_customize->add_section( 'judgement_typography_section_mainbody', array(
		'title'       => __( 'Main Body', 'judgement' ),
		'panel'		  => 'judgement_panel_typography', 
		'priority'    => 10,
		'description' => __( 'Font for the main body text', 'judgement' ),
	) );

	//Menu and Headings
	$wp_customize->add_section( 'judgement_typography_section_headings', array(
		'title'       => __( 'Menu and Headings', 'judgement' ),
		'panel'		  => 'judgement_panel_typography', 
		'priority'    => 10,
		'description' => __( 'Font for the menu and headings', 'judgement' ),
	) );

}
add_action( 'customize_register', 'judgement_kirki_section_typography' );

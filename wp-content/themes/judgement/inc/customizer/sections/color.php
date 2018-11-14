<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Create sections using the WordPress Customizer API.
 */
function judgement_kirki_section_color( $wp_customize ) {

	/**
	 * Add sections
	 */
	//Colors
	$wp_customize->add_section( 'judgement_color_section_general', array(
		'title'			 => __( 'General', 'judgement' ),
		'panel'			 => 'judgement_panel_colors',
		'priority'		 => 10,
		'description'	 => __( 'Manage general colors', 'judgement' ),
	) );

	$wp_customize->add_section( 'judgement_color_section_container', array(
		'title'			 => __( 'Layout Container', 'judgement' ),
		'panel'			 => 'judgement_panel_colors',
		'priority'		 => 10,
		'description'	 => __( 'Manage layout container colors', 'judgement' ),
	) );

	$wp_customize->add_section( 'judgement_color_section_topbar', array(
		'title'			 => __( 'Top Bar', 'judgement' ),
		'panel'			 => 'judgement_panel_colors',
		'priority'		 => 10,
		'description'	 => __( 'Manage top bar colors', 'judgement' ),
	) );

	$wp_customize->add_section( 'judgement_color_section_header', array(
		'title'			 => __( 'Header', 'judgement' ),
		'panel'			 => 'judgement_panel_colors',
		'priority'		 => 10,
		'description'	 => __( 'Manage header colors', 'judgement' ),
	) );

	$wp_customize->add_section( 'judgement_color_section_footer', array(
		'title'			 => __( 'Footer', 'judgement' ),
		'panel'			 => 'judgement_panel_colors',
		'priority'		 => 10,
		'description'	 => __( 'Manage footer colors', 'judgement' ),
	) );
}

add_action( 'customize_register', 'judgement_kirki_section_color' );

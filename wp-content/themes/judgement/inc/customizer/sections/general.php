<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Create sections using the WordPress Customizer API.
 */
function judgement_kirki_section_general( $wp_customize ) {

	/**
	 * Add sections
	 */
	//General
	$wp_customize->add_section( 'judgement_section_general_logo', array(
		'title'			 => __( 'Logo', 'judgement' ),
		'panel'			 => 'judgement_panel_general',
		'priority'		 => 10,
		'description'	 => __( 'Upload your logo', 'judgement' ),
	) );

	$wp_customize->add_section( 'judgement_section_general_logo_height', array(
		'title'			 => __( 'Logo Height', 'judgement' ),
		'panel'			 => 'judgement_panel_general',
		'priority'		 => 10,
		'description'	 => __( 'Modify the height of your logo', 'judgement' ),
	) );

	$wp_customize->add_section( 'judgement_section_general_footer', array(
		'title'			 => __( 'Footer Copyright Text', 'judgement' ),
		'panel'			 => 'judgement_panel_general',
		'priority'		 => 10,
		'description'	 => __( 'Manage your Footer copyright text', 'judgement' ),
	) );
}

add_action( 'customize_register', 'judgement_kirki_section_general' );

<?php

function judgement_kirki_panels( $wp_customize ) {

	$wp_customize->add_panel( 'judgement_panel_general', array(
		'priority'		 => 10,
		'title'			 => __( 'General Settings', 'judgement' ),
		'description'	 => __( 'Manage general theme settings', 'judgement' ),
	) );
	$wp_customize->add_panel( 'judgement_panel_colors', array(
		'priority'		 => 10,
		'title'			 => __( 'Color', 'judgement' ),
		'description'	 => __( 'Manage theme colors', 'judgement' ),
	) );
	$wp_customize->add_panel( 'judgement_panel_typography', array(
		'priority'		 => 10,
		'title'			 => __( 'Typography', 'judgement' ),
		'description'	 => __( 'Manage theme typography', 'judgement' ),
	) );
	$wp_customize->add_panel( 'judgement_panel_layout', array(
		'priority'		 => 10,
		'title'			 => __( 'Layout', 'judgement' ),
		'description'	 => __( 'Manage theme header, footer and more', 'judgement' ),
	) );
	$wp_customize->add_panel( 'judgement_panel_help', array(
		'priority'		 => 10,
		'title'			 => __( 'Help and Support', 'judgement' ),
		'description'	 => __( 'Get help and support', 'judgement' ),
	) );
	$wp_customize->add_panel( 'judgement_panel_blog', array(
		'priority'		 => 10,
		'title'			 => __( 'Blog', 'judgement' ),
		'description'	 => __( 'Manage blog settings', 'judgement' ),
	) );
}

add_action( 'customize_register', 'judgement_kirki_panels' );

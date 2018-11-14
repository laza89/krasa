<?php

/**
 * Create sections using the WordPress Customizer API.
 */
function judgement_kirki_section_layout( $wp_customize ) {

	/**
	 * Add sections
	 */
	//Layout
	$wp_customize->add_section( 'judgement_layout_section_topbar', array(
		'title'			 => __( 'Top Bar Settings', 'judgement' ),
		'panel'			 => 'judgement_panel_layout',
		'priority'		 => 10,
		'description'	 => __( 'Manage the top bar', 'judgement' ),
	) );

	$wp_customize->add_section( 'judgement_layout_section_pageheading', array(
		'title'			 => __( 'Page Heading Settings', 'judgement' ),
		'panel'			 => 'judgement_panel_layout',
		'priority'		 => 10,
		'description'	 => __( 'You can also upload a page specific image via the "Featured Image" option when editing a post or page.', 'judgement' ),
	) );

	$wp_customize->add_section( 'judgement_layout_section_footer', array(
		'title'			 => __( 'Footer Layout Settings', 'judgement' ),
		'panel'			 => 'judgement_panel_layout',
		'priority'		 => 10,
		'description'	 => __( 'Manage Footer Layout', 'judgement' ),
	) );
}

add_action( 'customize_register', 'judgement_kirki_section_layout' );

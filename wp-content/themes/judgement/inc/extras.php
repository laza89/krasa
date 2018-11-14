<?php

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package judgement
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function judgement_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Add class if the site title and tagline is hidden.
	if ( 'blank' === get_header_textcolor() ) {
		$classes[] = 'title-tagline-hidden';
	}

	return $classes;
}

add_filter( 'body_class', 'judgement_body_classes' );

/**
 * Produces nice safe html for presentation.
 *
 * @param $input - accepts a string.
 * @return string
 */
function judgement_safe_html( $input ) {

	$args = array(
		// formatting.
		'strong' => array(),
		'em'	 => array(),
		'b'		 => array(),
		'i'		 => array(
			'class' => array()
		),
		'p'		 => array(),
		// links.
		'a'		 => array(
			'href' => array()
		)
	);

	return wp_kses( $input, $args );
}

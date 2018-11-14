<?php

// Some wrappers for theme mods/options and their defaults
//Set sensible defaults
require_once get_template_directory() . '/inc/customizer/defaults.php';

if ( !function_exists( 'judgement_get_option' ) ) {

	function judgement_get_option( $key ) {
		$judgement_options	 = judgement_get_options();
		$judgement_option	 = get_theme_mod( $key, $judgement_options[$key] );
		return $judgement_option;
	}

}

if ( !function_exists( 'judgement_get_options' ) ) {

	// Get theme option defaults
	function judgement_get_options() {
		return wp_parse_args(
		get_theme_mods(), judgement_get_option_defaults()
		);
	}

}
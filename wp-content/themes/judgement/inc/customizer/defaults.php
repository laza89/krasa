<?php

if ( !function_exists( 'judgement_get_option_defaults' ) ) {

	// Set sane theme option defaults - hattip - https://make.wordpress.org/themes/2014/07/09/using-sane-defaults-in-themes/
	function judgement_get_option_defaults() {
		$defaults = array(
			// Layout
			'judgement_layout_topbar'						 => 'show',
			'judgement_layout_first_footer'				 => 'show',
			'judgement_layout_second_footer'				 => 'show',
			'judgement_layout_blog_listing_sidebar'		 => 'left',
			'judgement_layout_page_listing_sidebar'		 => 'left',
			'judgement_layout_blog_listing_featured_img'	 => 'above',
			// Color
			'judgement_color_general_swatch'				 => '#bfa980',
			'judgement_color_general_swatch_text'			 => '#fff',
			'judgement_color_general_text'					 => '#343434',
			'judgement_color_overall_background'			 => '#333',
			'judgement_color_wrapper_background'			 => '#fff',
			'judgement_color_topbar_background'			 => '#f6f6f6',
			'judgement_color_topbar_color'					 => '#888',
			'judgement_body_background_color'				 => '#000',
			'judgement_color_general_links'				 => '#117abc',
			'judgement_color_general_links_hover'			 => '#000000',
			'judgement_color_section_topbar'				 => '#fff',
			'judgement_color_header_background'			 => '#fff',
			'judgement_color_header_site_title'			 => '#333',
			'judgement_color_header_site_desc'				 => '#333',
			'judgement_color_header_text'					 => '#333',
			'judgement_color_footer_first_bg'				 => '#222',
			'judgement_color_footer_first_text'			 => '#fff',
			'judgement_color_footer_first_links'			 => '#fff',
			'judgement_color_footer_first_link_hover'		 => '#ccc',
			'judgement_color_footer_copyright_bg'			 => '#282828',
			'judgement_color_footer_copyright_text'		 => '#ccc',
			'judgement_color_footer_copyright_links'		 => '#fff',
		);

		return apply_filters( 'judgement_get_option_defaults', $defaults );
	}

}
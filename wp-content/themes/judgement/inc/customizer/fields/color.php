<?php

//Color fields
$judgement_default_options = judgement_get_option_defaults();

// General colors
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_general_swatch',
	'label'			 => __( 'Primary Swatch Color', 'judgement' ),
	'description'	 => __( 'Select the primary color of your brand.', 'judgement' ),
	'section'		 => 'judgement_color_section_general',
	'default'		 => $judgement_default_options['judgement_color_general_swatch'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '
            	.ccfw-header-details .widget.widget_text i
            	',
			'property'	 => 'color'
		),
		array(
			'element'	 => '
            	.post-navigation span.meta-nav,
            	.mc4wp-form input[type="submit"],
            	.content-area input[type="submit"],
            	.content-area input[type="button"],
            	.ccfw-content .widget a.button,
            	.blog-menu > li > a:before,
            	.blog-menu > .has-children li a:hover,
            	.ccfw-content .widget a.button,
            	.ccfw-first-footer-wrapper .textwidget li:before,
            	.advanced-sidebar-menu ul li.current_page_item > a, 
				.advanced-sidebar-menu ul li.current_page_item > a:hover, 
				.advanced-sidebar-menu ul li.current_page_parent > a, 
				.advanced-sidebar-menu ul li.current_page_parent > a:hover,
				.advanced-sidebar-menu ul ul.children li a,
				.advanced-sidebar-menu ul ul.children 
            	',
			'property'	 => 'background-color'
		),
		array(
			'element'	 => '
				.ccfw-blog-pagination ul li.active a,
				.blog-menu > .has-children li a:hover,
            	.advanced-sidebar-menu ul li.current_page_item > a, 
				.advanced-sidebar-menu ul li.current_page_item > a:hover, 
				.advanced-sidebar-menu ul li.current_page_parent > a, 
				.advanced-sidebar-menu ul li.current_page_parent > a:hover,
				.advanced-sidebar-menu ul ul.children li a
            	',
			'property'	 => 'border-color'
		),
		array(
			'element'	 => '
            	.elementor-widget-tabs .elementor-tabs .elementor-tabs-wrapper .elementor-tab-title.active
            	',
			'property'	 => 'border-top-color'
		),
		array(
			'element'	 => '
			.sticky,
			.ccfw-content .widget_text.widget,
			.advanced-sidebar-menu ul > li > a:hover, 
			.sidebar.right-sidebar .advanced-sidebar-menu ul > li > a:hover',
			'property'	 => 'border-left-color'
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '
				.ccfw-header-details .widget.widget_text i,
            	#secondary .advanced-sidebar-menu ul li a:hover,
            	.blog-menu ul.children li:hover > a,  
            	.blog-menu li ul li a:hover,
            	.advanced-sidebar-menu ul li a:hover,
				.sticky-header .blog-menu > li > a:hover',
			'property'	 => 'color'
		),
		array(
			'element'	 => '
            	.post-navigation span.meta-nav,
            	.mc4wp-form input[type="submit"],
            	.content-area input[type="submit"],
            	.content-area input[type="button"],
            	.blog-menu > li > a:before,
            	.ccfw-content .widget a.button,
            	.ccfw-first-footer-wrapper .textwidget li:before,
            	.advanced-sidebar-menu ul li.current_page_item > a, 
            	.advanced-sidebar-menu ul li.current_page_item > a:hover, 
            	.advanced-sidebar-menu ul li.current_page_parent > a, 
            	.advanced-sidebar-menu ul li.current_page_parent > a:hover,
            	.advanced-sidebar-menu ul ul.children li a,
            	.advanced-sidebar-menu ul ul.children
				',
			'property'	 => 'background-color'
		),
		array(
			'element'	 => '
				.ccfw-blog-pagination ul li.active a,
				.blog-menu > .has-children li a:hover,
            	.advanced-sidebar-menu ul li.current_page_item > a, 
				.advanced-sidebar-menu ul li.current_page_item > a:hover, 
				.advanced-sidebar-menu ul li.current_page_parent > a, 
				.advanced-sidebar-menu ul li.current_page_parent > a:hover,
				.advanced-sidebar-menu ul ul.children li a',
			'property'	 => 'border-color'
		),
		array(
			'element'	 => '
            	.elementor-widget-tabs .elementor-tabs .elementor-tabs-wrapper .elementor-tab-title.active
            	',
			'property'	 => 'border-top-color'
		),
		array(
			'element'	 => '
			.sticky,
			.ccfw-content .widget_text.widget,
			.advanced-sidebar-menu ul > li > a:hover, 
			.sidebar.right-sidebar .advanced-sidebar-menu ul > li > a:hover',
			'property'	 => 'border-left-color'
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_general_swatch_text',
	'label'			 => esc_html__( 'Text on the primary swatch', 'judgement' ),
	'description'	 => esc_html__( 'Select the color of text on the primary swatch. (Usually white or black)', 'judgement' ),
	'section'		 => 'judgement_color_section_general',
	'default'		 => $judgement_default_options['judgement_color_general_swatch_text'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '
			.blog-menu > li.current_page_item > a, 
        	.blog-menu > li.current_page_item:hover > a, 
        	.blog-menu > li.current_page_ancestor > a, 
        	.blog-menu > li.current_page_ancestor:hover > a, 
        	.blog-menu > li.current_page_parent > a, 
        	.blog-menu > li.current_page_parent:hover > a,
        	.blog-menu > .has-children li a:hover,
        	.blog-menu ul.children li:hover > a, 
        	.blog-menu li ul li a:hover,
        	.blog-menu ul.children li:hover > a, .blog-menu li ul li a:hover,
			.advanced-sidebar-menu ul li.current_page_item > a, 
            .advanced-sidebar-menu ul li.current_page_item > a:hover, 
            .advanced-sidebar-menu ul li.current_page_parent > a, 
            .advanced-sidebar-menu ul li.current_page_parent > a:hover,
            .advanced-sidebar-menu ul ul.children li a,
            .content-area input[type="submit"], 
            .content-area input[type="reset"], 
            .content-area input[type="button"], 
            .jetpack_subscription_widget input[type="submit"], 
            .ccfw-content .widget a.button
            ',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '
			.blog-menu > li.current_page_item > a, 
        	.blog-menu > li.current_page_item:hover > a, 
        	.blog-menu > li.current_page_ancestor > a, 
        	.blog-menu > li.current_page_ancestor:hover > a, 
        	.blog-menu > li.current_page_parent > a, 
        	.blog-menu > li.current_page_parent:hover > a,
        	.blog-menu > .has-children li a:hover,
        	.blog-menu li ul li a:hover,
        	.blog-menu ul.children li:hover > a, .blog-menu li ul li a:hover,
			.advanced-sidebar-menu ul li.current_page_item > a, 
            .advanced-sidebar-menu ul li.current_page_item > a:hover, 
            .advanced-sidebar-menu ul li.current_page_parent > a, 
            .advanced-sidebar-menu ul li.current_page_parent > a:hover,
            .advanced-sidebar-menu ul ul.children li a,
            .content-area input[type="submit"], 
            .content-area input[type="reset"], 
            .content-area input[type="button"], 
            .jetpack_subscription_widget input[type="submit"], 
            .ccfw-content .widget a.button
            ',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_general_links',
	'label'			 => esc_html__( 'General links', 'judgement' ),
	'description'	 => esc_html__( 'Select your general links color.', 'judgement' ),
	'section'		 => 'judgement_color_section_general',
	'default'		 => $judgement_default_options['judgement_color_general_links'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => 'a',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => 'a',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_general_links_hover',
	'label'			 => esc_html__( 'General link hover', 'judgement' ),
	'description'	 => esc_html__( 'Select your general link hover color.', 'judgement' ),
	'section'		 => 'judgement_color_section_general',
	'default'		 => $judgement_default_options['judgement_color_general_links_hover'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => 'a:hover',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => 'a:hover',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_wrapper_background',
	'label'			 => esc_html__( 'Wrapper Background Color', 'judgement' ),
	'description'	 => esc_html__( 'Select your wrapper background color.', 'judgement' ),
	'section'		 => 'judgement_color_section_container',
	'default'		 => $judgement_default_options['judgement_color_wrapper_background'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '#wrapper',
			'property'	 => 'background-color',
		)
	)
) );

// Top bar colors
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_topbar_background',
	'label'			 => esc_html__( 'Top bar background', 'judgement' ),
	'description'	 => esc_html__( 'Select your top bar background color.', 'judgement' ),
	'section'		 => 'judgement_color_section_topbar',
	'default'		 => $judgement_default_options['judgement_color_topbar_background'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-header-topbar',
			'property'	 => 'background-color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-header-topbar',
			'function'	 => 'css',
			'property'	 => 'background-color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_topbar_color',
	'label'			 => esc_html__( 'Top bar text', 'judgement' ),
	'description'	 => esc_html__( 'Select your top bar text color.', 'judgement' ),
	'section'		 => 'judgement_color_section_topbar',
	'default'		 => $judgement_default_options['judgement_color_topbar_color'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-header-topbar, .ccfw-header-topbar a',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-header-topbar, .ccfw-header-topbar a',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

// Header colors
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_header_background',
	'label'			 => esc_html__( 'Header background', 'judgement' ),
	'description'	 => esc_html__( 'Select your header background color.', 'judgement' ),
	'section'		 => 'judgement_color_section_header',
	'default'		 => $judgement_default_options['judgement_color_header_background'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-header-main',
			'property'	 => 'background-color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-header-main',
			'function'	 => 'css',
			'property'	 => 'background-color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_header_site_title',
	'label'			 => esc_html__( 'Site title', 'judgement' ),
	'description'	 => esc_html__( 'Select your site title color.', 'judgement' ),
	'section'		 => 'judgement_color_section_header',
	'default'		 => $judgement_default_options['judgement_color_header_site_title'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-site-title a',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-site-title a',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_header_site_desc',
	'label'			 => esc_html__( 'Site description', 'judgement' ),
	'description'	 => esc_html__( 'Select your site description color.', 'judgement' ),
	'section'		 => 'judgement_color_section_header',
	'default'		 => $judgement_default_options['judgement_color_header_site_desc'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-site-description',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-site-description',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_header_text',
	'label'			 => esc_html__( 'Header text', 'judgement' ),
	'description'	 => esc_html__( 'Select your header text color.', 'judgement' ),
	'section'		 => 'judgement_color_section_header',
	'default'		 => $judgement_default_options['judgement_color_header_text'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-header-main, .ccfw-header-main h4',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-header-main, .ccfw-header-main h4',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

// Footer colors
judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_footer_first_bg',
	'label'			 => esc_html__( 'First footer background color', 'judgement' ),
	'description'	 => esc_html__( 'Select your first footer background color.', 'judgement' ),
	'section'		 => 'judgement_color_section_footer',
	'default'		 => $judgement_default_options['judgement_color_footer_first_bg'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-first-footer-wrapper',
			'property'	 => 'background-color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-first-footer-wrapper',
			'function'	 => 'css',
			'property'	 => 'background-color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_footer_first_text',
	'label'			 => esc_html__( 'First footer text color', 'judgement' ),
	'description'	 => esc_html__( 'Select your first footer text color.', 'judgement' ),
	'section'		 => 'judgement_color_section_footer',
	'default'		 => $judgement_default_options['judgement_color_footer_first_text'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-first-footer-wrapper, .ccfw-first-footer-wrapper h4, .ccfw-first-footer-wrapper p',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-first-footer-wrapper, .ccfw-first-footer-wrapper h4, .ccfw-first-footer-wrapper p',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_footer_first_links',
	'label'			 => esc_html__( 'First footer links', 'judgement' ),
	'description'	 => esc_html__( 'Select your first footer links color.', 'judgement' ),
	'section'		 => 'judgement_color_section_footer',
	'default'		 => $judgement_default_options['judgement_color_footer_first_links'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-first-footer-wrapper a',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-first-footer-wrapper a',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_footer_first_link_hover',
	'label'			 => esc_html__( 'First footer link hover', 'judgement' ),
	'description'	 => esc_html__( 'Select your first footer link hover color.', 'judgement' ),
	'section'		 => 'judgement_color_section_footer',
	'default'		 => $judgement_default_options['judgement_color_footer_first_link_hover'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-first-footer-wrapper a:hover',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-first-footer-wrapper a:hover',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );


judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_footer_copyright_bg',
	'label'			 => esc_html__( 'Copyright Background Color', 'judgement' ),
	'description'	 => esc_html__( 'Select your copyright background color.', 'judgement' ),
	'section'		 => 'judgement_color_section_footer',
	'default'		 => $judgement_default_options['judgement_color_footer_copyright_bg'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-last-footer',
			'property'	 => 'background-color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-last-footer',
			'function'	 => 'css',
			'property'	 => 'background-color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_footer_copyright_text',
	'label'			 => esc_html__( 'Copyright Text Color', 'judgement' ),
	'description'	 => esc_html__( 'Select your copyright text color.', 'judgement' ),
	'section'		 => 'judgement_color_section_footer',
	'default'		 => $judgement_default_options['judgement_color_footer_copyright_text'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-last-footer',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-last-footer',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

judgement_Kirki::add_field( 'judgement_config', array(
	'type'			 => 'color',
	'settings'		 => 'judgement_color_footer_copyright_links',
	'label'			 => esc_html__( 'Copyright Links Color', 'judgement' ),
	'description'	 => esc_html__( 'Select your copyright links color.', 'judgement' ),
	'section'		 => 'judgement_color_section_footer',
	'default'		 => $judgement_default_options['judgement_color_footer_copyright_links'],
	'priority'		 => 10,
	'output'		 => array(
		array(
			'element'	 => '.ccfw-last-footer a',
			'property'	 => 'color',
		)
	),
	'transport'		 => 'postMessage',
	'js_vars'		 => array(
		array(
			'element'	 => '.ccfw-last-footer a',
			'function'	 => 'css',
			'property'	 => 'color',
		),
	)
) );

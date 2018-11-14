<?php
/**
 * Judgement functions and definitions
 *
 * @package judgement
 */

/**
 * Assign the theme version to a var
 */
$theme				 = wp_get_theme( 'judgement' );
$judgement_version	 = $theme['Version'];

/**
 * Global Paths
 */
define( 'CC_CORE', get_template_directory() . '/inc/core' );

/**
 * Load styles
 */
function judgement_load_styles() {
	global $judgement_live_preview;
	wp_enqueue_style( 'ccfw-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/font-awesome.min.css' );
	wp_enqueue_style( 'ccfw-ionicons', get_template_directory_uri() . '/css/ionicons.css' );
	wp_enqueue_style( 'ccfw-elementor', get_template_directory_uri() . '/css/elementor.css' );
	wp_enqueue_style( 'ccfw-animate', get_template_directory_uri() . '/css/animate.css' );
}

add_action( 'wp_enqueue_scripts', 'judgement_load_styles' );

/**
 * TGM Plugin Activation
 */
require_once( CC_CORE . '/functions/class-tgm-plugin-activation.php' );
add_action( 'tgmpa_register', 'judgement_register_required_plugins' );

/**
 * Recommended plugins
 *
 * @package judgement
 */
function judgement_register_required_plugins() {
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'		 => 'One Click Demo Import', // The plugin name
			'slug'		 => 'one-click-demo-import', // The plugin slug (typically the folder name)
			'required'	 => false, // If false, the plugin is only 'recommended' instead of required
		),
		array(
			'name'		 => 'Advanced Sidebar Menu', // The plugin name
			'slug'		 => 'advanced-sidebar-menu', // The plugin slug (typically the folder name)
			'required'	 => false, // If false, the plugin is only 'recommended' instead of required
		),
		array(
			'name'		 => 'Kirki', // The plugin name
			'slug'		 => 'kirki', // The plugin slug (typically the folder name)
			'required'	 => false, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'		 => 'Contact Form 7', // The plugin name
			'slug'		 => 'contact-form-7', // The plugin slug (typically the folder name)
			'required'	 => false, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'		 => 'Elementor', // The plugin name
			'slug'		 => 'elementor', // The plugin slug (typically the folder name)
			'required'	 => false, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'		 => 'Crelly Slider', // The plugin name
			'slug'		 => 'crelly-slider', // The plugin slug (typically the folder name)
			'required'	 => false, // If false, the plugin is only 'recommended' instead of required.
		),
	);

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'		 => 'judgement', // Text domain - likely want to be the same as your theme.
		'default_path'	 => '', // Default absolute path to pre-packaged plugins
		'parent_slug'	 => 'themes.php', // Default parent menu slug
		'menu'			 => 'tgmpa-install-plugins', // Menu slug
		'has_notices'	 => true, // Show admin notices or not
		'is_automatic'	 => false, // Automatically activate plugins after installation or not
		'message'		 => '', // Message to output right before the plugins table.
		'strings'		 => array(
			'page_title'						 => esc_html__( 'Install Required Plugins', 'judgement' ),
			'menu_title'						 => esc_html__( 'Install Plugins', 'judgement' ),
			'installing'						 => esc_html__( 'Installing Plugin: %s', 'judgement' ), // %1$s = plugin name
			'oops'								 => esc_html__( 'Something went wrong with the plugin API.', 'judgement' ),
			'notice_can_install_required'		 => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'judgement' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'	 => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'judgement' ), // %1$s = plugin name(s)
			'notice_cannot_install'				 => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'judgement' ), // %1$s = plugin name(s)
			'notice_can_activate_required'		 => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'judgement' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'	 => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'judgement' ), // %1$s = plugin name(s)
			'notice_cannot_activate'			 => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'judgement' ), // %1$s = plugin name(s)
			'notice_ask_to_update'				 => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'judgement' ), // %1$s = plugin name(s)
			'notice_cannot_update'				 => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'judgement' ), // %1$s = plugin name(s)
			'install_link'						 => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'judgement' ),
			'activate_link'						 => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'judgement' ),
			'return'							 => esc_html__( 'Return to Required Plugins Installer', 'judgement' ),
			'plugin_activated'					 => esc_html__( 'Plugin activated successfully.', 'judgement' ),
			'complete'							 => esc_html__( 'All plugins installed and activated successfully. %s', 'judgement' ), // %1$s = dashboard link
			'nag_type'							 => 'updated', // Determines admin notice type - can only be 'updated' or 'error'.
		)
	);
	tgmpa( $plugins, $config );
}

// One Click Importer Demo Data
function ocdi_import_files() {
  return array(
    array(
      'import_file_name'           => 'Judgement Demo Data',
      'import_file_url'            => 'http://assets.createandcode.com/judgement/judgement-demodata.xml',
      'import_widget_file_url'     => 'http://assets.createandcode.com/judgement/judgement-widgets.json',
      'import_preview_image_url'   => 'http://themedemo.createandcode.com/judgement/wp-content/themes/judgement/screenshot.png',
      'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'judgement' ),
    ),

  );
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );

function ocdi_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'News' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import_setup' );

if ( ! function_exists( 'judgement_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function judgement_setup() {
		/* Help */
		if ( is_admin() ) {
			// Welcome page.
			require_once( get_template_directory() . '/inc/setup/help.php' );
		}

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on judgement, use a find and replace
		 * to change 'judgement' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'judgement', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Custom Thumbnails.
		if ( function_exists( 'add_theme_support' ) ) {
			add_theme_support( 'post-thumbnails' );
			add_image_size( 'ccfw-blog-featured-top-withsidebar', 760, 380, true );
			add_image_size( 'ccfw-blog-featured-top-nosidebar', 1070, 535, true );
			add_image_size( 'ccfw-blog-featured-top', 760, 380, true );
		}

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'judgement' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Adds support for selective refresh of widgets
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'judgement_custom_background_args', array(
			'default-color'	 => 'ffffff',
			'default-image'	 => '',
		) ) );

		add_editor_style( 'css/editor-style.css' );

		// Add theme support for Custom Logo.
		add_theme_support( 'custom-logo', array(
			'width'       => 400,
			'height'      => 56,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		require_once( trailingslashit( get_template_directory() ) . 'trt-customize-pro/example-1/class-customize.php' );
	}
endif; // judgement_setup.
add_action( 'after_setup_theme', 'judgement_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function judgement_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'judgement_content_width', 760 );
}

add_action( 'after_setup_theme', 'judgement_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function judgement_widgets_init() {
	register_sidebar( array(
		'name'			 => esc_html__( 'Sidebar', 'judgement' ),
		'id'			 => 'sidebar-1',
		'description'   => __( 'Main sidebar.', 'judgement' ),
		'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</aside>',
		'before_title'	 => '<h4 class="widget-title">',
		'after_title'	 => '</h4>',
	) );

	register_sidebar( array(
		'name'			 => __( 'Top Bar Left', 'judgement' ),
		'id'			 => 'top-bar-left',
		'description'   => __( 'This widget area appears in the top left of the screen in the top bar.', 'judgement' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title"><span>',
		'after_title'	 => '</span></h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Top Bar Right', 'judgement' ),
		'id'			 => 'top-bar-right',
		'description'   => __( 'This widget area appears in the top right of the screen in the top bar.', 'judgement' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title"><span>',
		'after_title'	 => '</span></h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Header Left', 'judgement' ),
		'id'			 => 'header-left',
		'description'   => __( 'This widget area appears in the top left of the header.', 'judgement' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title"><span>',
		'after_title'	 => '</span></h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Header Right', 'judgement' ),
		'id'			 => 'header-right',
		'description'   => __( 'This widget area appears in the top right of the header.', 'judgement' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title"><span>',
		'after_title'	 => '</span></h4>',
	) );

	register_sidebar( array(
		'name'			 => __( 'Pages Sidebar', 'judgement' ),
		'id'			 => 'sidebar-pages',
		'description'   => __( 'This widget appears on pages only.', 'judgement' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title"><span>',
		'after_title'	 => '</span></h4>',
	) );

	register_sidebar( array(
		'name'			 => __( 'Footer Column 1', 'judgement' ),
		'id'			 => 'first-footer-1',
		'description'   => __( 'The first footer widget area.', 'judgement' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title">',
		'after_title'	 => '</h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Footer  Column 2', 'judgement' ),
		'id'			 => 'first-footer-2',
		'description'   => __( 'The second footer widget area.', 'judgement' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title">',
		'after_title'	 => '</h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Footer  Column 3', 'judgement' ),
		'id'			 => 'first-footer-3',
		'description'   => __( 'The third footer widget area.', 'judgement' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title">',
		'after_title'	 => '</h4>',
	) );
	register_sidebar( array(
		'name'			 => __( 'Footer  Column 4', 'judgement' ),
		'id'			 => 'first-footer-4',
		'description'   => __( 'The fourth footer widget area.', 'judgement' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h4 class="widget-title">',
		'after_title'	 => '</h4>',
	) );
}

add_action( 'widgets_init', 'judgement_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function judgement_scripts() {
	wp_enqueue_style( 'ccfw-style', get_stylesheet_uri() );
	wp_enqueue_script( 'ccfw-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20161205', true );
	wp_enqueue_script( 'ccfw-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '20161205', true );
	wp_enqueue_script( 'ccfw-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'judgement_scripts' );

/**
 * Custom Logo Markup
 */
add_filter( 'get_custom_logo', 'judgement_custom_logo' );
function judgement_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url"><span class="helper"></span>%2$s</a>',
            esc_url( home_url('/') ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
            ) )
        );
    return $html;   
} 

/**
 * Load Globals
 */
require_once( CC_CORE . '/menus/wp_bootstrap_navwalker.php' );

/**
 * Load build hooks.
 */
require get_template_directory() . '/inc/structure/hooks.php';
require get_template_directory() . '/inc/structure/header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Recommend the Kirki plugin
 */
require get_template_directory() . '/inc/include-kirki.php';

/**
 * Load the Kirki Fallback class
 */
require get_template_directory() . '/inc/kirki-fallback.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
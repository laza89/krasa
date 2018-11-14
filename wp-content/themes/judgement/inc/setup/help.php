<?php

/**
 * Theme onboarding and help.
 *
 * @package CreateandCode
 * @subpackage judgement
 */
class judgement_Help {

	/**
	 * Constructor
	 * Sets up the welcome screen
	 */
	public function __construct() {

		add_action( 'admin_menu', array( $this, 'judgement_help_register_menu' ) );
		add_action( 'load-themes.php', array( $this, 'judgement_help_activation_admin_init' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'judgement_help_assets' ) );

		add_action( 'judgement_help', array( $this, 'judgement_help_intro' ), 10 );
		add_action( 'judgement_help', array( $this, 'judgement_help_freepro' ), 20 );
		add_action( 'judgement_help', array( $this, 'judgement_help_themeclub' ), 30 );
	}

	// End constructor.
	/**
	 * Redirect to Onboarding page upon theme switch/activation
	 */
	public function judgement_help_activation_admin_init() {
		global $pagenow;

		if ( is_admin() && 'themes.php' === $pagenow && isset( $_GET['activated'] ) ) { // input var okay.
			add_action( 'admin_notices', array( $this, 'judgement_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 *
	 * @since 1.0.3
	 */
	public function judgement_welcome_admin_notice() {
		?>
		<div class="updated notice is-dismissible">
			<p><?php echo sprintf( esc_html__( 'Thanks for choosing Judgement! You can read hints and tips on how get the most out of your new theme in the %1$sHelp Centre%2$s.', 'judgement' ), '<a href="' . esc_url( admin_url( 'themes.php?page=ccfw-help' ) ) . '">', '</a>' ); ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=ccfw-help' ) ); ?>" class="button" style="text-decoration: none;"><?php esc_html_e( 'Get started with judgement', 'judgement' ); ?></a></p>
		</div>
		<?php
	}

	// Help assets.
	public function judgement_help_assets( $hook_suffix ) {
		global $judgement_version;

		if ( 'appearance_page_ccfw-help' === $hook_suffix ) {
			wp_enqueue_style( 'ccfw-help', get_template_directory_uri() . '/inc/setup/help.css', $judgement_version );
			wp_enqueue_style( 'thickbox' );
			wp_enqueue_script( 'thickbox' );
			wp_enqueue_script( 'ccfw-help', get_template_directory_uri() . '/inc/setup/help.js', array( 'jquery' ), '1.0.0', true );
		}
	}

	// Quick Start menu.
	public function judgement_help_register_menu() {
		add_theme_page(
		__( 'judgement Help', 'judgement' ), __( 'Judgement Help', 'judgement' ), 'activate_plugins', 'ccfw-help', array( $this, 'judgement_help_screen' ) );
	}

	/**
	 * The welcome screen
	 *
	 * @since 1.0.0
	 */
	public function judgement_help_screen() {
		?>
		<div class="ccfw-help container">

			<h1 class="ccfw-help-title"><?php esc_html_e( 'Judgement Help Centre', 'judgement' ); ?></h1>
			<h2 class="ccfw-help-desc"><?php esc_html_e( 'Everything you need to know to get the most out of Judgement.', 'judgement' ); ?></h2>
			<ul class="ccfw-nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#intro" aria-controls="getting_started" role="tab" data-toggle="tab"><?php esc_html_e( 'Getting Started', 'judgement' ); ?></a></li>
				<li role="presentation"><a href="#freepro" aria-controls="freepro" role="tab" data-toggle="tab"><?php esc_html_e( 'Free vs Pro', 'judgement' ); ?></a></li>
				<li role="presentation"><a href="#themeclub" aria-controls="themeclub" role="tab" data-toggle="tab"><?php esc_html_e( 'Theme Club and Discount', 'judgement' ); ?></a></li>

			</ul>

			<div class="ccfw-tab-content">
		<?php
		/**
		 * @hooked judgement_welcome_intro - 10
		 */
		do_action( 'judgement_help' );
		?>


			</div>
		</div>
		<?php
	}

	public function judgement_help_intro() {
		require_once( get_template_directory() . '/inc/setup/sections/intro.php' );
	}

	public function judgement_help_freepro() {
		require_once( get_template_directory() . '/inc/setup/sections/freepro.php' );
	}

	public function judgement_help_themeclub() {
		require_once( get_template_directory() . '/inc/setup/sections/themeclub.php' );
	}

}

$GLOBALS['judgement_help'] = new judgement_Help();

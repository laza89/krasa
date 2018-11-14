<?php
/**
 * Getting started template
 *
 * @package CreateandCode
 * @subpackage Judgement
 */

$customizer_url = admin_url() . 'customize.php';
?>

<div id="intro" class="ccfw-tab-pane active">

	<div class="primary-left">

	<div class="ccfw-tab-pane-center">

		<h1 class="ccfw-welcome-title"><?php esc_html_e( 'Welcome to Judgement!', 'judgement' ); ?></h1>

		<h2>
		<?php
		$theme_data = wp_get_theme();
		echo $theme_data->get( 'Description' );
		?>
			
		</h2>

		<hr />

		<h2 class="larger"><?php esc_html_e( 'Judgement Theme Documentation', 'judgement' ); ?></h2>
		<p><?php esc_html_e( 'We provide lots of theme documentation articles including a detailed installation and setup guide on our website. A demo data file is also provided to get you up and running quickly.', 'judgement' ); ?></p>
		<p><a href="<?php echo esc_url( 'https://createandcode.com/wordpress-themes/judgement/help' ); ?>" class="button button-primary"><?php esc_html_e( 'View Theme Documentation', 'judgement' ); ?></a></p>

		<hr />

		<h2 class="larger"><?php esc_html_e( 'Theme Options', 'judgement' ); ?></h2>
		<p><?php esc_html_e( 'The Judgement Theme Customizer enables you to customize many elements of the theme directly without any coding skills. This includes options such as uploading your logo, changing the primary color, and much more.', 'judgement' ); ?></p>
		<ul>
		<li><?php esc_html_e( 'To access the Customizer, go to', 'judgement' ); ?> <strong><?php esc_html_e( 'Appearance → Customize', 'judgement' ); ?></strong> <?php esc_html_e( 'in the WordPress admin menu.', 'judgement' ); ?></li>
		<li><?php esc_html_e( 'When you are finished making changes, click', 'judgement' ); ?> <strong><?php esc_html_e( 'Save & Publish', 'judgement' ); ?></strong> <?php esc_html_e( 'to save the settings. Check out your site to confirm your changes.', 'judgement' ); ?></li>
		</ul>

		<p><a href="<?php echo esc_url( $customizer_url ); ?>" class="button button-primary"><?php esc_html_e( 'Launch the Customizer', 'judgement' ); ?></a></p>

		<hr />

		<h2 class="larger"><?php esc_html_e( 'How to Speed up WordPress', 'judgement' ); ?></h2>
		<p><?php esc_html_e( 'If you are having performance problems with your site, you have come to the right place. By the end of this journey you will be rocking a blisteringly fast WordPress website!', 'judgement' ); ?></p>

		<p><a href="<?php echo esc_url( 'https://createandcode.com/how-to-speed-up-wordpress-part-1/' ); ?>" class="button button-primary"><?php esc_html_e( 'Read our Speed Article', 'judgement' ); ?></a></p>

		<hr />

		<h2 class="larger"><?php esc_html_e( 'How to Translate your Website', 'judgement' ); ?></h2>
		<p><?php esc_html_e( 'In this article we describe how you can easily make your website multilingual without investing dozens of hours into translation.', 'judgement' ); ?></p>

		<p><a href="<?php echo esc_url( 'https://createandcode.com/weglot-review/' ); ?>" class="button button-primary"><?php esc_html_e( 'Read our Translation Article', 'judgement' ); ?></a></p>


	</div>

	</div><!--/primary-left -->

	<div class="primary-right">

	<div class="theme-club-intro">
	<img src="<?php echo get_template_directory_uri() . '/inc/setup/images/woman-laptop.jpg'; ?>" alt="" />
		<div class="theme-club-copy">
			<h2><?php esc_html_e( 'The Create and Code Theme Club', 'judgement' ); ?></h2>
			<p><?php esc_html_e( 'Download our entire collection of premium themes, new releases and get expert support!', 'judgement' ); ?></p>

		<div class="discount">
			<p><?php esc_html_e( 'Exclusive Discount! Use the code', 'judgement' ); ?>
			<strong><?php esc_html_e( 'CCTHEME30', 'judgement' ); ?></strong>
			<?php esc_html_e( 'to get 30% off Theme Club membership.', 'judgement' ); ?></p>
		</div>

		<a class="button-primary" href="<?php echo esc_url( 'https://createandcode.com/get-theme-club' ); ?>"><?php esc_html_e( 'Shop Themes Now', 'judgement' ); ?> &rarr;</a>
		</div>
	</div>

	<div class="ccfw-review">
		<h2><?php esc_html_e( 'Join our Facebook group!', 'judgement' ); ?></h2>
		<p><?php esc_html_e( 'Get tips, tricks and support from the Create & Code Community. We would also love to see what you have created with our WordPress themes. Share your work with the community!', 'judgement' ); ?></p>

		<a class="button-primary" href="https://www.facebook.com/groups/1974135042612016/"><?php esc_html_e( 'Join now', 'judgement' ); ?></a>
		<i class="dashicons dashicons-groups"></i>
	</div>

	</div><!--/primary-right -->

	<div class="ccfw-clear"></div>

</div>

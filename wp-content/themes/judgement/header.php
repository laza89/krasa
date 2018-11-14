<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package judgement
 */
$judgement_layout_topbar	 = '';
$judgement_layout_topbar	 = judgement_get_option( 'judgement_layout_topbar' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>	
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper">	
			<header id="ccfw-header-wrap">
				<?php if ( "show" == $judgement_layout_topbar ) { ?>
					<div class="ccfw-header-topbar">
						<div class="container">
							<div class="row">
								<div class="col-sm-9 col-md-8 col-lg-8 top-bar-left">
									<?php do_action( 'judgement_topbar' ); ?>
									<?php if ( is_active_sidebar( 'top-bar-left' ) ) : ?>
										<?php dynamic_sidebar( 'top-bar-left' ); ?>   
									<?php endif; ?>
								</div>
								<div class="col-sm-3 col-md-4 col-lg-4 top-bar-right">
									<?php do_action( 'judgement_topbar' ); ?>
									<?php if ( is_active_sidebar( 'top-bar-right' ) ) : ?>
										<?php dynamic_sidebar( 'top-bar-right' ); ?>   
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="ccfw-header-main">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<?php do_action( 'judgement_header' ); ?>
								<div class="ccfw-header-branding">
								<?php if ( is_active_sidebar( 'header-right' ) ) : ?>
										<div class="ccfw-header-details-right">
											<?php dynamic_sidebar( 'header-right' ); ?>
										</div>
									<?php endif; ?>
									<?php if ( is_active_sidebar( 'header-left' ) ) : ?>
										<div class="ccfw-header-details">
											<?php dynamic_sidebar( 'header-left' ); ?>
										</div>
									<?php endif; ?> 
									
								</div>               
							</div>
						</div>
					</div>
				</div>
				<div class="ccfw-header-nav">
					<?php do_action( 'judgement_header_navigation' ); ?>
				</div>
				<div class="ccfw-header-before-content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<?php do_action( 'judgement_header_before_content' ); ?>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="sticky-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 display-table">
							<?php do_action( 'judgement_header' ); ?>
							<?php do_action( 'judgement_header_navigation' ); ?>
						</div>
					</div>
				</div>
			</div>
			<div id="ccfw-page-wrap" class="hfeed site">
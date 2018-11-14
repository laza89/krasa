<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package judgement
 */
get_header();
?>

<header class="entry-header <?php echo $judgement_featured_image_class; ?>" style="<?php echo $judgement_header_image_style; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'judgement' ); ?></h1>
            </div>
        </div>
    </div>
</header><!-- .entry-header -->

<?php
    if ( function_exists('yoast_breadcrumb') ) {
    echo ('<div class="ccfw-breadcrumbs-wrapper"><div class="container"><div class="row"><div class="col-lg-12 col-md-12"><div class="ccfw-breadcrumbs">');
    yoast_breadcrumb('<p>','</p>');
    echo ('</div></div></div></div></div>');
	}
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<section class="error-404 not-found">
						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'judgement' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>
<?php get_footer(); ?>

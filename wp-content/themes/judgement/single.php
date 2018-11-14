<?php
/**
 * The template for displaying all single posts.
 *
 * @package judgement
 */
$judgement_layout_blog_listing_sidebar	 = '';
$judgement_layout_blog_listing_sidebar	 = judgement_get_option( 'judgement_layout_blog_listing_sidebar' );
$judgement_featured_image_class		 = '';
$judgement_header_image_style			 = '';
$judgement_header_image = '';

get_header();
?>

<div class="ccfw-content">

	<header class="entry-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php if ( 'post' == get_post_type() ) : ?>
						<div class="ccfw-entry-meta">
							<?php judgement_posted_on(); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<?php
        if ( function_exists('yoast_breadcrumb') ) {
        echo ('<div class="ccfw-breadcrumbs-wrapper"><div class="container"><div class="row"><div class="col-lg-12 col-md-12"><div class="ccfw-breadcrumbs">');
        yoast_breadcrumb('<p>','</p>');
        echo ('</div></div></div></div></div>');
		}
	?>

	<div class="container">
		<div class="row">
			<?php if ( $judgement_layout_blog_listing_sidebar == 'left' ) { ?>
				<div class="col-lg-9 col-md-9 col-md-push-3 col-lg-push-3 right-content">
					<?php get_template_part( 'template-parts/content', 'single' ); ?>
				</div>
				<div class="col-lg-3 col-md-3 col-md-pull-9 col-lg-pull-9">
					<?php get_sidebar(); ?>
				</div>
			<?php } else if ( $judgement_layout_blog_listing_sidebar == 'none' ) { ?>
				<div class="col-lg-12 col-md-12">
					<?php get_template_part( 'template-parts/content', 'single' ); ?>
				</div>
			<?php } else if ( ( $judgement_layout_blog_listing_sidebar == 'right' ) || ( $judgement_single_blog_sidebar_position == '' ) ) { ?>
				<div class="col-lg-9 col-md-9 left-content">
					<?php get_template_part( 'template-parts/content', 'single' ); ?>
				</div>
				<div class="col-lg-3 col-md-3">
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
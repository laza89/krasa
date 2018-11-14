<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package judgement
 */
$judgement_layout_blog_listing_sidebar	 = '';
$judgement_layout_blog_listing_sidebar	 = judgement_get_option( 'judgement_layout_blog_listing_sidebar' );
get_header();
?>
<div class="ccfw-content">
	<header class="entry-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
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
			<?php if ( ( 'left' == $judgement_layout_blog_listing_sidebar ) || ( '' == $judgement_layout_blog_listing_sidebar ) ) { ?>
				<div class="col-lg-9 col-md-9 col-md-push-3 col-lg-push-3 right-content">
					<?php get_template_part( 'template-parts/blog', 'archive' ); ?>
				</div>
				<div class="col-lg-3 col-md-3 col-md-pull-9 col-lg-pull-9">
					<?php get_sidebar(); ?>
				</div>
			<?php } else if ( 'right' == $judgement_layout_blog_listing_sidebar ) { ?>
				<div class="col-lg-9 col-md-9 left-content">
					<?php get_template_part( 'template-parts/blog', 'archive' ); ?>
				</div>
				<div class="col-lg-3 col-md-3">
					<?php get_sidebar(); ?>
				</div>
			<?php } else if ( 'none' == $judgement_layout_blog_listing_sidebar ) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<?php get_template_part( 'template-parts/blog', 'archive' ); ?>
				</div>
			<?php }
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
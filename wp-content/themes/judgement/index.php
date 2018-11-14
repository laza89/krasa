<?php
/**
 * @package judgement
 */
$judgement_layout_blog_listing_sidebar	 = '';
$judgement_layout_blog_listing_sidebar	 = judgement_get_option( 'judgement_layout_blog_listing_sidebar' );
$judgement_featured_image_class		 = '';
$judgement_header_image_style			 = '';

get_header();
?>

<div class="ccfw-content">

	<?php
	if ( is_home() && get_option( 'page_for_posts' ) ) {
		$judgement_header_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_option( 'page_for_posts' ) ), 'full' );

		if ( $judgement_header_image ) {
			$judgement_header_image_style	 = 'background-image: url(' . $judgement_header_image[0] . '); ';
			$judgement_featured_image_class = 'has-featured-image';
		}
	}
	?> 

	<header class="entry-header <?php echo $judgement_featured_image_class; ?>" style="<?php echo $judgement_header_image_style; ?>">

		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?php
					if ( is_home() && get_option( 'page_for_posts' ) ) {
						$judgement_blog_page_title = get_option( 'page_for_posts' );
						echo '<h1>' . get_page( $judgement_blog_page_title )->post_title . '</h1>';
					} else { ?>
						<h1><?php echo _e( 'Latest Posts', 'judgement' ); ?></h1>
					<?php }
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
					<?php get_template_part( 'template-parts/blog', 'list' ); ?>
				</div>
				<div class="col-lg-3 col-md-3 col-md-pull-9 col-lg-pull-9">
					<?php get_sidebar(); ?>
				</div>
			<?php } else if ( 'right' == $judgement_layout_blog_listing_sidebar ) { ?>
				<div class="col-lg-9 col-md-9 left-content">
					<?php get_template_part( 'template-parts/blog', 'list' ); ?>
				</div>
				<div class="col-lg-3 col-md-3">
					<?php get_sidebar(); ?>
				</div>
			<?php } else if ( 'none' == $judgement_layout_blog_listing_sidebar ) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<?php get_template_part( 'template-parts/blog', 'list' ); ?>
				</div>
			<?php }
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

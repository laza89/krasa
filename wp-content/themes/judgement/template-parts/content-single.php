<?php
/**
 * @package judgement
 */
$judgement_layout_blog_listing_featured_img = '';
$judgement_layout_blog_listing_featured_img = judgement_get_option( 'judgement_layout_blog_listing_featured_img' );
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'ccfw-single-post' ); ?>>
				<?php if ( has_post_thumbnail() ) {
    				the_post_thumbnail('ccfw-blog-featured-top');
				} ?>
				<?php echo judgement_blog_single_item(); ?>
			</article><!-- #post-## -->
			<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		<?php endwhile; // end of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->


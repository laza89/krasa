<?php
$judgement_layout_blog_listing_featured_img = '';
$judgement_layout_blog_listing_featured_img = judgement_get_option( 'judgement_layout_blog_listing_featured_img' );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'ccfw-blog-loop-item' ); ?>>
	<?php {
		echo judgement_blog_image();
		echo judgement_blog_loop_item();
	}
	?>
</article><!-- #post-## -->
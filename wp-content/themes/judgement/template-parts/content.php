<?php

/**
 * @package judgement
 */
$judgement_layout_blog_listing_featured_img = '';
$judgement_layout_blog_listing_featured_img = judgement_get_option( 'judgement_layout_blog_listing_featured_img' );
?>
<?php

if ( ( has_post_thumbnail() ) && ( 'hide' !== $judgement_layout_blog_listing_featured_img ) ) {
	get_template_part( 'template-parts/blog', 'loop-item-with-thumb' );
} else {
	get_template_part( 'template-parts/blog', 'loop-item' );
}
?>
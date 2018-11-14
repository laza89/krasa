<?php
/**
 * The template used for displaying full width page content in page.php
 *
 * @package judgement
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php //judgement_get_page_title(); ?>
    <div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'judgement' ),
			'after'	 => '</div>',
		) );
		?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package judgement
 */
$judgement_layout_first_footer					 = '';
$judgement_layout_second_footer				 = '';
$judgement_color_footer_copyright_background	 = '';
$judgement_layout_first_footer					 = judgement_get_option( 'judgement_layout_first_footer' );
?>
<footer class="ccfw-footer-container"> 
	<?php if ( "show" == $judgement_layout_first_footer ) { ?>
		<div class="ccfw-first-footer-wrapper">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'first-footer-1' ) ) : ?>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 first-footer-1">
							<?php dynamic_sidebar( 'first-footer-1' ); ?>   
						</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'first-footer-2' ) ) : ?>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 first-footer-2">
							<?php dynamic_sidebar( 'first-footer-2' ); ?>   
						</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'first-footer-3' ) ) : ?>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 first-footer-3">
							<?php dynamic_sidebar( 'first-footer-3' ); ?>   
						</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'first-footer-4' ) ) : ?>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 first-footer-4">
							<?php dynamic_sidebar( 'first-footer-4' ); ?>   
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php } ?>
    <!-- /first footer -->
</footer>
</div><!-- /#ccfw-page-wrap -->
</div><!-- /#wrapper -->
<?php wp_footer(); ?>
</body>
</html>
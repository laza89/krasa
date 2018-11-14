<?php
/**
 * Template Name: Full width page (no heading)
 * @package judgement
 */

get_header();
?>
<div class="ccfw-content">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content', 'page' ); ?>

							<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>

						<?php endwhile; // end of the loop.  ?>

                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>


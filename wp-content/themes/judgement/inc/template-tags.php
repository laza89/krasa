<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package judgement
 */
if ( !function_exists( 'judgement_paging_nav' ) ) :

	/**
	 * Display navigation to next/previous set of posts when applicable.
	 */
	function judgement_paging_nav() {
		// Don't print empty markup if there's only one page.
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return;
		}
		?>
		<nav class="navigation paging-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'judgement' ); ?></h1>
			<div class="nav-links">

				<?php if ( get_next_posts_link() ) : ?>
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'judgement' ) ); ?></div>
				<?php endif; ?>

				<?php if ( get_previous_posts_link() ) : ?>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'judgement' ) ); ?></div>
				<?php endif; ?>

			</div><!-- .nav-links -->
		</nav><!-- .navigation -->
		<?php
	}

endif;

if ( !function_exists( 'judgement_pagination' ) ) :

	function judgement_pagination() {

		if ( is_singular() ) {
			return;
		}

		global $wp_query;

		/** Stop execution if there's only 1 page */
		if ( $wp_query->max_num_pages <= 1 ) {
			return;
		}

		$paged	 = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$max	 = intval( $wp_query->max_num_pages );

		/** 	Add current page to the array */
		if ( $paged >= 1 )
			$links[] = $paged;

		/** 	Add the pages around the current page to the array */
		if ( $paged >= 3 ) {
			$links[] = $paged - 1;
			$links[] = $paged - 2;
		}

		if ( ( $paged + 2 ) <= $max ) {
			$links[] = $paged + 2;
			$links[] = $paged + 1;
		}

		echo '<div class="ccfw-blog-pagination"><ul>' . "\n";

		/** 	Previous Post Link */
		if ( get_previous_posts_link() )
			printf( '<li class="ccfw-pagination-prev">%s</li>' . "\n", get_previous_posts_link() );

		/** 	Link to first page, plus ellipses if necessary */
		if ( !in_array( 1, $links ) ) {
			$class = 1 == $paged ? ' class="active"' : '';

			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

			if ( !in_array( 2, $links ) )
				echo '<li>&hellip;</li>';
		}

		/** 	Link to current page, plus 2 pages in either direction if necessary */
		sort( $links );
		foreach ( (array) $links as $link ) {
			$class = $paged == $link ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
		}

		/** 	Link to last page, plus ellipses if necessary */
		if ( !in_array( $max, $links ) ) {
			if ( !in_array( $max - 1, $links ) )
				echo '<li>&hellip;</li>' . "\n";

			$class = $paged == $max ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
		}

		/** 	Next Post Link */
		if ( get_next_posts_link() )
			printf( '<li class="ccfw-pagination-next">%s</li>' . "\n", get_next_posts_link() );

		echo '</ul></div>' . "\n";
	}

endif;

if ( !function_exists( 'judgement_posted_on' ) ) :

	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function judgement_posted_on() {
		global $post;

		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf( $time_string, esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ), esc_attr( get_the_modified_date( 'c' ) ), esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
		esc_html_x( 'Objavljeno %s', 'post date', 'judgement' ), '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		if ( is_singular() ) { 
			$author_id = $post->post_author;
			$post_author = get_user_by( 'id', $author_id );
			$display_name = $post_author->display_name;

			$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'judgement' ), '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( $display_name ) . '</a></span>'
			);
		} else {
			$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'judgement' ), '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
			);
		}

		echo '<span class="posted-on">' . $posted_on . '</span>';//<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

		if ( !is_single() && !post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'judgement' ), esc_html__( '1 Comment', 'judgement' ), esc_html__( '% Comments', 'judgement' ) );
			echo '</span>';
		}
	}

endif;

if ( !function_exists( 'judgement_entry_footer' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function judgement_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' == get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'judgement' ) );
			if ( $categories_list && judgement_categorized_blog() ) {
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'judgement' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'judgement' ) );
			if ( $tags_list ) {
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'judgement' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
	}

endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function judgement_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'judgement_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'	 => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'	 => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'judgement_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so judgement_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so judgement_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in judgement_categorized_blog.
 */
function judgement_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'judgement_categories' );
}

add_action( 'edit_category', 'judgement_category_transient_flusher' );
add_action( 'save_post', 'judgement_category_transient_flusher' );


if ( !function_exists( 'judgement_blog_image' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function judgement_blog_image() {
		$judgement_layout_blog_listing_sidebar	 = '';
		$judgement_layout_blog_listing_sidebar	 = judgement_get_option( 'judgement_layout_blog_listing_sidebar' );
		?>
		<div class="ccfw-blog-image">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php 
				if ( ( $judgement_layout_blog_listing_sidebar == 'left' ) || ( $judgement_layout_blog_listing_sidebar == 'right' ) )  {
					the_post_thumbnail( 'ccfw-blog-featured-top-withsidebar' ); 
				} else {
					the_post_thumbnail( 'ccfw-blog-featured-top-nosidebar' ); 				
				}
			?>
			</a>
		</div>

		<?php
	}

endif;


if ( !function_exists( 'judgement_blog_loop_item' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function judgement_blog_loop_item() {
		?>

		<header class="ccfw-entry-header">
			<?php the_title( sprintf( '<h2 class="ccfw-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="ccfw-entry-meta">
					<?php judgement_posted_on(); ?>
				</div>
			<?php endif; ?>
		</header>

		<div class="ccfw-entry-content">
			<?php if ( has_post_format( 'link' ) ) : ?>
				<?php the_content(); ?>
			<?php elseif ( has_post_format( 'quote' ) ) : ?>
				<?php the_content(); ?>
			<?php else : ?>
				<?php
				the_content( __( 'Pročitajte više', 'judgement' ) );
				wp_link_pages( array(
					'before' => '<div class="ccfw-page-links">' . __( 'Pages:', 'judgement' ),
					'after'	 => '</div>',
				) );
			endif;
			?>
		</div><!-- .entry-content -->


		<?php
		if ( function_exists( 'sharing_display' ) ) {
			sharing_display( '', true );
		}

		if ( class_exists( 'Jetpack_Likes' ) ) {
			$custom_likes = new Jetpack_Likes;
			echo $custom_likes->post_likes( '' );
		}
		?>

		<?php
	}

endif;

if ( !function_exists( 'judgement_blog_single_image' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function judgement_blog_single_image() {
		?>
		<div class="ccfw-blog-image">
			<?php the_post_thumbnail(); ?>
		</div>

		<?php
	}

endif;


if ( !function_exists( 'judgement_blog_single_item' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function judgement_blog_single_item() {
		?>

		<div class="ccfw-entry-content">
			<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="ccfw-page-links">' . __( 'Pages:', 'judgement' ),
				'after'	 => '</div>',
			) );
			?>
		</div><!-- .entry-content -->


		<?php
	}

endif;

if ( !function_exists( 'judgement_comment' ) ) :

	/**
	 * Template for comments and pingbacks.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 */
	function judgement_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;

		if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) :
			?>

			<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
				<div class="comment-body">
					<?php _e( 'Pingback:', 'judgement' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'judgement' ), '<span class="edit-link">', '</span>' ); ?>
				</div>

			<?php else : ?>

			<li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent'  ); ?>>
				<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
					<footer class="comment-meta">
						<div class="comment-author vcard">
							<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
							<?php printf( __( '%s <span class="says">says:</span>', 'judgement' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
						</div><!-- .comment-author -->

						<div class="comment-metadata">
							<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
								<time datetime="<?php comment_time( 'c' ); ?>">
									<?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'judgement' ), get_comment_date(), get_comment_time() ); ?>
								</time>
							</a>
							<?php edit_comment_link( __( 'Edit', 'judgement' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .comment-metadata -->

						<?php if ( '0' == $comment->comment_approved ) : ?>
							<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'judgement' ); ?></p>
						<?php endif; ?>
					</footer><!-- .comment-meta -->

					<div class="comment-content">
						<?php comment_text(); ?>
					</div><!-- .comment-content -->

					<div class="reply">
						<?php
						comment_reply_link( array_merge( $args, array(
							'add_below'	 => 'div-comment',
							'depth'		 => $depth,
							'max_depth'	 => $args['max_depth'],
							'before'	 => '<div class="reply">',
							'after'		 => '</div>',
						) ) );
						?>
					</div>
				</article><!-- .comment-body -->

			<?php
			endif;
		}

	endif; // ends check for judgement_comment()

	if ( !function_exists( 'judgement_get_sidebar' ) ) {

		/**
		 * Display judgement sidebar
		 * @uses get_sidebar()
		 * @since 1.0.0
		 */
		function judgement_get_sidebar() {
			dynamic_sidebar( 'shop-sidebar' );
		}

	}

// Menu walker adding "has-children" class to menu li's with children menu items
	class judgement_primary_nav_walker extends Walker_Nav_Menu {

		function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args, &$output ) {
			$id_field = $this->db_fields['id'];
			if ( !empty( $children_elements[$element->$id_field] ) ) {
				$element->classes[] = 'has-children';
			}
			Walker_Nav_Menu::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
		}

	}

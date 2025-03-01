<?php


/**
 * Advanced Sidebar Menu Page
 *
 * Creates a Widget of parent Child Pages
 *
 * @author  mat lipe <mat@matlipe.com>
 *
 * @package Advanced Sidebar Menu
 * @class   advanced_sidebar_menu_page
 *
 */
class advanced_sidebar_menu_page extends WP_Widget {

    //@todo set the rest to constants
    const DISPLAY_PARENT = 'include_parent';

	private $defaults = array(
		'title'                    => false,
		'include_parent'           => false,
		'include_childless_parent' => false,
		'order_by'                 => 'menu_order',
		'css'                      => false,
		'exclude'                  => false,
		'display_all'              => false,
		'levels'                   => 1
	);


	function __construct(){

		$widget_ops  = array(
			'classname'   => 'advanced-sidebar-menu',
			'description' => __( 'Creates a menu of all the pages using the child/parent relationship', 'advanced-sidebar-menu' )
		);
		$control_ops = array(
			'width' => 290
		);


		parent::__construct( 'advanced_sidebar_menu', __( 'Advanced Sidebar Pages Menu', 'advanced-sidebar-menu' ), $widget_ops, $control_ops );

	}


	/**
	 * Output a simple widget Form
	 * Not of ton of options here but who need them
	 * Most of the magic happens automatically
	 *
	 * @filters do_action('advanced_sidebar_menu_page_widget_form', $instance, $this->get_field_name('parent_only'), $this->get_field_id('parent_only'));
	 *
	 * @since   11.4.13
	 */
	function form( $instance ){

		$instance = wp_parse_args( $instance, $this->defaults );

		?>
		<p> <?php _e( 'Title', 'advanced-sidebar-menu' ); ?>
			<br>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>"
				name="<?php echo $this->get_field_name( 'title' ); ?>" class="widefat" type="text" value="<?php echo $instance[ 'title' ]; ?>"/>
		</p>

		<p> <?php _e( 'Display parent page', 'advanced-sidebar-menu' ); ?>:
			<input id="<?php echo $this->get_field_id( self::DISPLAY_PARENT ); ?>"
				name="<?php echo $this->get_field_name( self::DISPLAY_PARENT ); ?>" type="checkbox" value="checked"
				<?php echo $instance[ self::DISPLAY_PARENT ]; ?>/>
		</p>


		<p> <?php _e( 'Display menu when there is only the parent page', 'advanced-sidebar-menu' ); ?>:
			<input id="<?php echo $this->get_field_id( 'include_childless_parent' ); ?>"
				name="<?php echo $this->get_field_name( 'include_childless_parent' ); ?>" type="checkbox" value="checked"
				<?php echo $instance[ 'include_childless_parent' ]; ?>/>
		</p>

		<p> <?php _e( 'Order By', 'advanced-sidebar-menu' ); ?>:
			<select id="<?php echo $this->get_field_id( 'order_by' ); ?>"
				name="<?php echo $this->get_field_name( 'order_by' ); ?>">
				<?php

				$order_by = array(
					'menu_order' => 'Page Order',
					'post_title' => 'Title',
					'post_date'  => 'Published Date'
				);

				foreach( $order_by as $key => $order ){

					printf( '<option value="%s" %s>%s</option>', $key, selected( $instance[ 'order_by' ], $key, false ), $order );
				}
				?>
			</select>
		</p>

		<p> <?php _e( "Use this Plugin's Styling", 'advanced-sidebar-menu' ); ?>:
			<input id="<?php echo $this->get_field_id( 'css' ); ?>"
				name="<?php echo $this->get_field_name( 'css' ); ?>" type="checkbox" value="checked"
				<?php echo $instance[ 'css' ]; ?>/>
		</p>

		<p> <?php _e( "Pages to Exclude (ids), Comma Separated", 'advanced-sidebar-menu' ); ?>:
			<input id="<?php echo $this->get_field_id( 'exclude' ); ?>"
				name="<?php echo $this->get_field_name( 'exclude' ); ?>" class="widefat" type="text" value="<?php echo $instance[ 'exclude' ]; ?>"/>
		</p>

		<p> <?php _e( "Always Display Child Pages", 'advanced-sidebar-menu' ); ?>:
			<input id="<?php echo $this->get_field_id( 'display_all' ); ?>"
				name="<?php echo $this->get_field_name( 'display_all' ); ?>" type="checkbox" value="checked"
				onclick="javascript:asm_reveal_element( 'levels-<?php echo $this->get_field_id( 'levels' ); ?>' )"
				<?php echo $instance[ 'display_all' ]; ?>/>
		</p>

	<span id="levels-<?php echo $this->get_field_id( 'levels' ); ?>" style="<?php
	if( $instance[ 'display_all' ] == 'checked' ){
		echo 'display:block';
	} else {
		echo 'display:none';
	} ?>">
		<p> <?php _e( "Levels to Display", 'advanced-sidebar-menu' ); ?>:
	<select id="<?php echo $this->get_field_id( 'levels' ); ?>"
		name="<?php echo $this->get_field_name( 'levels' ); ?>">
		<?php
		for( $i = 1; $i < 6; $i ++ ){
			if( $i == $instance[ 'levels' ] ){
				echo '<option value="' . $i . '" selected>' . $i . '</option>';
			} else {
				echo '<option value="' . $i . '">' . $i . '</option>';
			}
		}
		echo '</select></p></span>';

		do_action( 'advanced_sidebar_menu_page_widget_form', $instance, $this->get_field_name( 'parent_only' ), $this->get_field_id( 'parent_only' ), $this );

		do_action( 'advanced_sidebar_menu_after_widget_form', $instance, $this );


	}


	/**
	 * Handles the saving of the widget
	 *
	 * @filters apply_filters('advanced_sidebar_menu_page_widget_update', $newInstance, $oldInstance );
	 *
	 * @since   4.26.13
	 */
	function update( $newInstance, $oldInstance ){
		$newInstance[ 'exclude' ] = strip_tags( $newInstance[ 'exclude' ] );

		$newInstance = apply_filters( 'advanced_sidebar_menu_page_widget_update', $newInstance, $oldInstance );

		return $newInstance;
	}



	/**
	 * The Widgets Output
	 *
	 *
	 * @param array $args
	 * @param array $instance
	 *
	 * @return void
	 */
	public function widget( $args, $instance ){
		$instance = wp_parse_args( $instance, $this->defaults );
		$post = get_post();
		$asm = Advanced_Sidebar_Menu_Menu::factory( $instance, $args );

		do_action( 'advanced_sidebar_menu_widget_pre_render', $asm, $this );

		$asm->exclude  = apply_filters( 'advanced_sidebar_menu_excluded_pages', explode( ',', $instance[ 'exclude' ] ), $post, $asm->args, $asm->instance, $asm );

		$filter_args = array(
			0 => $asm->post_type,
			1 => $asm->args,
			2 => $asm->instance,
			3 => $asm,
			4 => $this,
		);

		$asm->post_type   = $post_type = apply_filters_ref_array( 'advanced_sidebar_menu_post_type', $filter_args );

		$proper_single    = !( is_page() || ( is_single() && $asm->post_type === get_post_type() ) );
		$filter_args[ 0 ] = $proper_single;
		if( apply_filters_ref_array( 'advanced_sidebar_menu_proper_single', $filter_args ) ){
			return;
		}

		if( $post->ancestors ){
			$ancestors  = $post->ancestors;
			$asm->top_id = end( $ancestors );
		} else {
			$asm->top_id = $post->ID;
		}

		$filter_args[ 0 ] = $asm->top_id;
		$asm->top_id = apply_filters_ref_array( 'advanced_sidebar_menu_top_parent', $filter_args );
		if( get_post_type( $asm->top_id ) !== $asm->post_type ){
			return;
		}

		unset( $filter_args[ 0 ] );
		array_unshift( $filter_args, $post );
		array_unshift( $filter_args, $instance[ 'order_by' ] );

		$asm->order_by = apply_filters_ref_array( 'advanced_sidebar_menu_order_by', $filter_args );
		$filter_args[ 0 ] = $asm->order;
		$asm->order = apply_filters_ref_array( 'advanced_sidebar_menu_page_order', $filter_args );

		//backward compatibility $child_pages for old views
        $list_pages = Advanced_Sidebar_Menu_List_Pages::factory( $asm );
        $child_pages = $list_pages->get_child_pages( $list_pages->top_parent_id, true );

		//if there are no children do not display the parent unless it is check to do so
		if( ( !empty( $child_pages ) ) || ($asm->checked( 'include_childless_parent' ) && ( !in_array( $asm->top_id, $asm->exclude, false ) ) ) ){

			if( $asm->checked( 'css' ) ){
				echo '<style type="text/css">';
				include( Advanced_Sidebar_Menu::get_instance()->get_template_part( 'sidebar-menu.css' ) );
				echo '</style>';
			}

			echo $args[ 'before_widget' ];
			$output = require( Advanced_Sidebar_Menu::get_instance()->get_template_part( 'page_list.php' ) );

			//backward compatibility for old views that didn't returns
			if( empty( $output ) && isset( $content ) ){
				$output = $content;
			}

			$filter_args[ 0 ] = $output;
			echo apply_filters_ref_array( 'advanced_sidebar_menu_page_widget_output', $filter_args );
			echo $args[ 'after_widget' ];

		}

	}
}
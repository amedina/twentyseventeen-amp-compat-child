<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function remove_some_widgets(){
	
	// Unregister some of the TwentyTen sidebars
	unregister_sidebar( 'sidebar-1' );
	unregister_sidebar( 'sidebar-2' );
	unregister_sidebar( 'sidebar-3' );
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );

function amp_sidebar_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar 1', 'amp' ),
		'id'            => 'amp-sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar 2', 'amp' ),
		'id'            => 'amp-sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'amp' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'AMP Footer 1', 'amp' ),
		'id'            => 'amp-footer-widget-1',
		'description'   => __( 'Add widgets here to appear in sidebar.', 'amp' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'AMP Footer  2', 'amp' ),
		'id'            => 'amp-footer-widget-2',
		'description'   => __( 'Add widgets here to appear in sidebar.', 'amp' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'amp_sidebar_widgets_init' );
/**
 * Post navigation links
 */
function amp_post_navigation() {
	the_post_navigation( array(
		'prev_text' => '<span class="screen-reader-text">' .
		               __( 'Previous Post', 'amp' ) .
		               '</span><span aria-hidden="true" class="nav-subtitle">' .
		               __( 'Previous', 'amp' ) .
		               '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' .
		               twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
		'next_text' => '<span class="screen-reader-text">'
		               . __( 'Next Post', 'amp' ) .
		               '</span><span aria-hidden="true" class="nav-subtitle">' .
		               __( 'Next', 'amp' ) .
		               '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' .
		               twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
	) );
}

/**
 * @param $query
 *
 * Action to enable "stay-AMP" navigation by ensuring that
 * post permalinks have the parameter ?amp=1
 */
function amp_pre_get_posts( $query ) {
	if ( is_single() && get_theme_mod( 'amp_mode' ) && $query->is_main_query() ) {
		$query->set( 'amp', 1 );
	}
}
add_action( 'pre_get_posts', 'amp_pre_get_posts' );

/**
 * @param $url
 *
 * @return secure version of $url protocol
 *
 * This is needed to prevent validation errors due to invalid URL protocol
 */
function secure_url_protocol( $url ) {
	if ( get_query_var( 'amp', false ) ) {
		$url = preg_replace ( "/http:/i", "https:", $url );
	}

	return $url;
}
add_filter( 'amp_secure_link', 'secure_url_protocol' );

function amp_image( $img ) {
	if ( get_query_var( 'amp', false ) ) {
		$img = preg_replace( "/<img/i", "<amp-img", $img );
		$img = preg_replace ( "/http:/i", "https:", $img );
	}

	return $img;
}
add_filter( 'get_avatar', 'amp_image', 10, 1);
add_filter( 'post_thumbnail_html', 'amp_image', 10,  5);


function amp_header_image_html( $h, $header, $attr  ) {
	if ( get_query_var( 'amp', false ) ) {
		$h = preg_replace( "/<img/i", "<amp-img", $h );
		// TODO (@amedina): this filter does not work; need to enable SSL properly
		$h = preg_replace ( "/http:/i", "http:", $h );
	}

	return $h;
}
add_filter( 'get_header_image_tag', 'amp_header_image_html', 10, 3);





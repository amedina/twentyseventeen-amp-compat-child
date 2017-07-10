<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function amp_sidebar_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'AMP Sidebar 1', 'amp' ),
		'id'            => 'amp-sidebar-1',
		'description'   => __( 'Add widgets here to appear in sidebar.', 'amp' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'AMP Sidebar  2', 'amp' ),
		'id'            => 'amp-sidebar-2',
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
		'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'PPrevious', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
		'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
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
	}

	return $img;
}
add_filter( 'get_avatar', 'amp_image', 10, 1);
add_filter( 'post_thumbnail_html', 'amp_image', 10,  5);


/**
 * @param $link
 * @param $args
 * @param $comment
 * @param $post
 *
 * @return mixed
 *
 * Filter to deal with the onclick attribute in the Reply button
 * Applied in apply_filters@comment-template.php
 */
function comment_reply_callback($link, $args, $comment, $post) {
	error_log($link);
	libxml_use_internal_errors(true);
	$doc = new DOMDocument();
	$doc->loadHTML($link);
	libxml_clear_errors();

	$a = $doc->getElementsByTagName ( 'a' )[0];
	$a->removeAttribute( 'onclick' );
	$a->setAttribute( 'href', '#');

	$link = $doc->saveHTML();

	return $link;
}
add_filter( 'comment_reply_link', 'comment_reply_callback', 10, 4);


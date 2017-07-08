<?php

/**
 * Post navigation links
 */
function amp_post_navigation() {

	the_post_navigation( array(
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'amp' ) . '</span> ' .
		               '<span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'amp' ) . '</span> ' .
		               '<span class="post-title">%title</span>',
		'screen_reader_text' => ''

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
//add_action( 'pre_get_posts', 'amp_pre_get_posts' );

/**
 * @param $url
 *
 * @return secure version of $url protocol
 *
 * This is needed to prevent validation errors due to invalid URL protocol
 */
function secure_gravatar_url( $url ) {
	return preg_replace( "/^http:/i", "https:", $url );
}
add_filter( 'amp_secure_link', 'secure_gravatar_url' );

function amp_avatar_image( $avatar) {
	return preg_replace( "/^<img/i", "<amp-img", $avatar );
}
add_filter( 'get_avatar', 'amp_avatar_image', 10, 1);

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
<?php
/*
 * The functions.php file used to:
 *
 * 1. Set up the features of the theme
 *    - featured image sizes
 *    - HTML 5 support
 *    - Post-formats
 *    - Configuration of custom menus
 * 2. Queue all the style sheets and JavaScripts when required.
 * 3. Hold custom functions, specifically for the theme, or child theme
 *    - Custom menus, sidebars
 *    - New functions not present in the parent theme
 *    - Functions that may override parent functions
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

function amp_pre_get_posts( $query ) {
	if ( is_single() && get_theme_mod( 'amp_mode' ) && $query->is_main_query() ) {
		$query->set( 'amp', 1 );
	}
}
add_action( 'pre_get_posts', 'amp_pre_get_posts' );

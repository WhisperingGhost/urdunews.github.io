<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Urdu_News
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function urdu_news_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'urdu_news_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function urdu_news_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'urdu_news_pingback_header' );
/*********************
PAGE NAVI
*********************/

// Numeric Page Navi (built into the theme by default)
function urdu_news_page_navi() {
    global $wp_query;
    $bignum = 999999999;
    if ( $wp_query->max_num_pages <= 1 )
        return;
    
    echo '<nav class="pagination">';
    
        echo paginate_links( array(
            'base'          => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
            'format'        => '',
            'current'       => max( 1, get_query_var('paged') ),
            'total'         => $wp_query->max_num_pages,
            'prev_text'     => '&rarr;',
            'next_text'     => '&larr;',
            'type'          => 'list',
            'end_size'      => 3,
            'mid_size'      => 3
        ) );
    
    echo '</nav>';
} /* end page navi */
<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package sportyKids
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sk_18_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'sk_18_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function sk_18_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'sk_18_pingback_header' );


function sk_18_dynamic_css() {
	switch(true) {
		case is_page( 'Home' ):
		$hero = CFS()->get('hero_image');
		$middleHero = CFS()->get('middle_hero');
		$custom_css = "
					.hero-banner {
						background:
						url({$hero}) no-repeat center bottom;
						background-size: cover, cover; 	
						height: 35vh;
					}
					.green-background {
						background: url({$middleHero}) no-repeat center bottom;
						background-size: cover, cover;
						height: 65vh;
				};";
					break;
					default:
					$custom_css = "";
					break;
	}
	wp_add_inline_style('sk_18-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'sk_18_dynamic_css');
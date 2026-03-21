<?php
/**
 * Add theme favicons to site head
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Add favicons to HTML head
 */
if ( ! function_exists( __NAMESPACE__ . '\\add_favicons_to_head' ) ) :
	/**
	 * Add favicons to HTML head
	 *
	 * @since 1.0.0
	 */
	function add_favicons_to_head(): void {
		// Path to favicon images.
		$path = get_template_directory_uri() . '/assets/images/favicons/';

		// Favicon filenames.
		$icon_16       = 'favicon-16x16.png';
		$icon_32       = 'favicon-32x32.png';
		$icon_apple    = 'apple-icon.png';
		$icon_ico      = 'favicon.ico';
		$icon_manifest = 'manifest.json';
		$icon_safari   = 'safari-pinned-tab.svg';

		printf( '<link rel="icon" href="%s" sizes="any">', esc_url( $path . $icon_ico ) );
		printf( '<link rel="icon" type="image/png" sizes="16x16" href="%s">', esc_url( $path . $icon_16 ) );
		printf( '<link rel="icon" type="image/png" sizes="32x32" href="%s">', esc_url( $path . $icon_32 ) );
		printf( '<link rel="apple-touch-icon" href="%s">', esc_url( $path . $icon_apple ) );
		printf( '<link rel="manifest" href="%s">', esc_url( $path . $icon_manifest ) );
		printf( '<link rel="mask-icon" href="%s" color="#c82c32">', esc_url( $path . $icon_safari ) );
		printf( '<meta name="msapplication-TileColor" content="#c82c32">' );
		printf( '<meta name="theme-color" content="#ffffff">' );
	}

endif;

add_action( 'wp_head', __NAMESPACE__ . '\\add_favicons_to_head' );

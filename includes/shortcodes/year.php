<?php
/**
 * Creates [year] shortcode for the theme
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Displays the current year
 */
if ( ! function_exists( __NAMESPACE__ . '\\display_current_year' ) ) :
	/**
	 * Create 'year' shortcode
	 *
	 * @since 1.0.0
	 * @return string The current year using Greenwich Mean Time (GMT)
	 */
	function display_current_year(): string {
		$year = gmdate( 'Y' );
		return $year;
	}
endif;

add_shortcode( 'year', __NAMESPACE__ . '\\display_current_year' );

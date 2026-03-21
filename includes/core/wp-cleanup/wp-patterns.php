<?php
/**
 * Remove unwanted Core WordPress patterns
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Remove core block patterns
 */
if ( ! function_exists( __NAMESPACE__ . '\\remove_core_block_patterns' ) ) :
	/**
	 * Remove core block patterns
	 *
	 * @since 1.0.0
	 */
	function remove_core_block_patterns(): void {
		remove_theme_support( 'core-block-patterns' );
	}
endif;

add_action( 'after_setup_theme', __NAMESPACE__ . '\\remove_core_block_patterns' );


/**
 * Remove WordPress Remote Block Patterns from the editor block inserter.
 *
 * @since 1.0.0
 * @link https://developer.wordpress.org/block-editor/reference-guides/filters/editor-filters/#should_load_remote_block_patterns
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );

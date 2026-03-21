<?php
/**
 * Remove unwanted Core WordPress directories
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Remove WordPress Block Directory from the editor block inserter.
 *
 * @since 1.0.0
 * @link https://developer.wordpress.org/block-editor/reference-guides/filters/editor-filters/#block-directory
 */
remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );

<?php
/**
 * Remove unwanted Core WordPress features
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

require_once get_theme_file_path( 'includes/core/wp-cleanup/wp-blocks.php' );
require_once get_theme_file_path( 'includes/core/wp-cleanup/wp-directories.php' );
require_once get_theme_file_path( 'includes/core/wp-cleanup/wp-fonts.php' );
require_once get_theme_file_path( 'includes/core/wp-cleanup/wp-openverse.php' );
require_once get_theme_file_path( 'includes/core/wp-cleanup/wp-patterns.php' );
require_once get_theme_file_path( 'includes/core/wp-cleanup/wp-styles.php' );

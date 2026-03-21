<?php
/**
 * Remove unwanted Core WordPress features
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

require_once get_theme_file_path( 'includes/core/cleanup/blocks.php' );
require_once get_theme_file_path( 'includes/core/cleanup/directories.php' );
require_once get_theme_file_path( 'includes/core/cleanup/fonts.php' );
require_once get_theme_file_path( 'includes/core/cleanup/openverse.php' );
require_once get_theme_file_path( 'includes/core/cleanup/patterns.php' );
require_once get_theme_file_path( 'includes/core/cleanup/styles.php' );

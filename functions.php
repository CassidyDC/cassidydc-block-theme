<?php
/**
 * Theme Functions
 *
 * @package CassidyDC\BlockTheme\Functions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Create theme constants.
 *
 * @since 1.0.0
 */
define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'HANDLE_PREFIX', 'cu' );

/**
 * Initialize the assets loader
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'includes/enqueue/init.php' );

/**
 * Modify WordPress admin bar
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'includes/core/admin-bar.php' );

/**
 * Modify WordPress permissions
 *
 * @since 1.0.0
 */
// Before uncommenting the next line, update "USER_NAME" to the username of the user you want to allow SVG uploads for. This is a security risk, so be sure to only allow this for trusted users.
// require_once get_theme_file_path( 'includes/core/admin-permissions.php' );

/**
 * Removes unwanted Core WordPress features
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'includes/core/wp-cleanup.php' );

/**
 * Add animate script to HTML head
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'includes/head/animate-script.php' );

/**
 * Add Favicons to HTML head
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'includes/head/favicons.php' );

/**
 * Create [year] shortcode
 *
 * @since 1.0.0
 */
require_once get_theme_file_path( 'includes/shortcodes/year.php' );

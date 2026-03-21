<?php
/**
 * WordPress Admin Bar Modifications
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Modify the WordPress Admin Bar
 */
if ( ! function_exists( __NAMESPACE__ . '\\modify_admin_bar' ) ) :
	/**
	 * Modify the WordPress Admin Bar
	 *
	 * @since 1.0.0
	 * @link https://developer.wordpress.org/reference/hooks/admin_bar_menu/
	 * @param  \WP_Admin_Bar $wp_admin_bar The WordPress Admin Bar object.
	 * @return void
	 */
	function modify_admin_bar( \WP_Admin_Bar $wp_admin_bar ): void {
		if ( is_admin_bar_showing() ) {
			// Remove WP Logo (for less clutter).
			$wp_admin_bar->remove_node( 'wp-logo' );

			// Remove comments link (not used for this theme).
			$wp_admin_bar->remove_node( 'comments' );

			// Remove nodes on front-end pages.
			if ( ! is_admin() ) {
				// Remove Edit Site link.
				$wp_admin_bar->remove_node( 'site-editor' );
				// Remove Add New Content link.
				$wp_admin_bar->remove_node( 'new-content' );
				// Remove WP Mail SMTP link.
				$wp_admin_bar->remove_node( 'wp-mail-smtp-menu' );
			}
		}
	}
endif;

add_action( 'admin_bar_menu', __NAMESPACE__ . '\\modify_admin_bar', 999 );

<?php
/**
 * Remove unwanted Core WordPress Openverse media
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Remove Openverse
 */
if ( ! function_exists( __NAMESPACE__ . '\\disable_openverse' ) ) :
	/**
	 * Remove Openverse from the editor
	 *
	 * @since 1.0.0
	 * @param array<bool|object> $editor_settings An array of settings for the editor.
	 * @return array<bool|object> The editor settings.
	 */
	function disable_openverse( array $editor_settings ): array {
		$editor_settings['enableOpenverseMediaCategory'] = false;
		return $editor_settings;
	}
endif;

add_filter( 'block_editor_settings_all', __NAMESPACE__ . '\\disable_openverse', 10, 1 );

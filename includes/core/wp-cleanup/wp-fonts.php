<?php
/**
 * Remove unwanted Core WordPress fonts
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Remove the WordPress font library UI
 */
if ( ! function_exists( __NAMESPACE__ . '\\remove_font_library_ui' ) ) :
	/**
	 * Remove the WordPress font library UI
	 *
	 * @since 1.0.0
	 * @link https://developer.wordpress.org/reference/hooks/block_editor_settings_all/
	 * @param array<bool|object> $editor_settings An array of settings for the editor.
	 * @return array<bool|object> The editor settings.
	 */
	function remove_font_library_ui( array $editor_settings ): array {
		$editor_settings['fontLibraryEnabled'] = false;
		return $editor_settings;
	}
endif;

add_filter( 'block_editor_settings_all', __NAMESPACE__ . '\\remove_font_library_ui' );

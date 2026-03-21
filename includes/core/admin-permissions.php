<?php
/**
 * Modify Admin permissions
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Add SVG to allowed file uploads for specific users.
 */
if ( ! function_exists( __NAMESPACE__ . '\\add_file_types_to_uploads' ) ) :
	/**
	 * Add SVG to allowed file uploads for specific users.
	 *
	 * @since 1.0.0
	 * @param  array<string,string> $file_types A list of allowed file types.
	 * @return array<string,string> The list of allowed file types.
	 */
	function add_file_types_to_uploads( array $file_types ): array {
		$current_user = wp_get_current_user();
		if ( $current_user->user_login === 'USER_NAME' ) {
			$new_filetypes        = [];
			$new_filetypes['svg'] = 'image/svg+xml';
			$file_types           = array_merge( $file_types, $new_filetypes );
			return $file_types;
		} else {
			return $file_types;
		}
	}
endif;

add_filter( 'upload_mimes', __NAMESPACE__ . '\\add_file_types_to_uploads' );

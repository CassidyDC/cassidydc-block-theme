<?php
/**
 * Remove unwanted Core WordPress styles
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Remove unwanted core styles
 */
if ( ! function_exists( __NAMESPACE__ . '\\remove_core_block_styles' ) ) :
	/**
	 * Remove unwanted core block style
	 *
	 * @since 1.0.0
	 *
	 * @param array<string,mixed> $settings Array of determined settings for registering a block type.
	 * @param array<string,mixed> $metadata Metadata provided for registering a block type.
	 * @return array<string,mixed> Filtered settings.
	 */
	function remove_core_block_styles( array $settings, array $metadata ): array {
		if ( empty( $settings['styles'] ) ) {
			return $settings;
		}

		// The default block styles to remove for each block.
		switch ( $metadata['name'] ) {
			case 'core/image':
			case 'core/site-logo':
				$styles_to_remove = [ 'rounded' ];
				break;
			case 'core/quote':
				$styles_to_remove = [ 'plain' ];
				break;
			case 'core/separator':
				$styles_to_remove = [ 'dots', 'wide' ];
				break;
			case 'core/social-links':
				$styles_to_remove = [ 'logos-only', 'pill-shape' ];
				break;
			case 'core/table':
				$styles_to_remove = [ 'stripes' ];
				break;
			default:
				$styles_to_remove = [];
				break;
		}

		// Remove the block styles.
		foreach ( $styles_to_remove as $style_to_remove ) {
			$settings['styles'] = array_filter(
				$settings['styles'],
				function ( $style ) use ( $style_to_remove ) {
					return $style['name'] !== $style_to_remove;
				}
			);
		}

		// If there is only one block style left, it could be the default one. So remove it, as there's no need for a default style if there are no other styles to choose from.
		if ( ! empty( $settings['styles'] ) && count( $settings['styles'] ) === 1 ) {
			$settings['styles'] = array_filter(
				$settings['styles'],
				function ( $style ) {
					return ! ( isset( $style['isDefault'] ) && $style['isDefault'] );
				}
			);
		}

		return $settings;
	}
endif;

add_filter( 'block_type_metadata_settings', __NAMESPACE__ . '\\remove_core_block_styles', 10, 2 );

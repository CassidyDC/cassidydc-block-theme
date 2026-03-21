<?php
/**
 * Add animate starting style to HTML head
 *
 * To allow animated elements to remain visible when JS is disabled.
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

/**
 * Hide elements with .animate class until animated via JS.
 */
if ( ! function_exists( __NAMESPACE__ . '\\add_scripts_to_head' ) ) :
	/**
	 * Add animate starting style to HTML head to hide elements until .animated class activates them.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function add_scripts_to_head(): void {
		echo '<script> (function () {
			const head = document.querySelector("head");
			if (head) {
				const animateStyle = document.createElement("style");
				animateStyle.innerHTML = ".animate {opacity: 0; visibility: hidden;} .animate-item {opacity: 0;}";
				head.appendChild(animateStyle);
			}
		}());</script>';
	}
endif;

add_action( 'wp_head', __NAMESPACE__ . '\\add_scripts_to_head', 1 );

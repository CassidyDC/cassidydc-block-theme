<?php
/**
 * Remove unwanted Core WordPress blocks
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

use WP_Block_Type_Registry;

/**
 * Remove unwanted core blocks
 */
if ( ! function_exists( __NAMESPACE__ . '\\remove_core_blocks' ) ) :
	/**
	 * Remove unwanted core blocks from the editor (but not the registry)
	 *
	 * phpcs:disable Squiz.PHP.CommentedOutCode.Found
	 * phpcs:disable Squiz.Commenting.InlineComment.InvalidEndChar
	 *
	 * @since 1.0.0
	 * @return string[] A list of core block slugs.
	 */
	function remove_core_blocks(): array {
		$blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

		ray( $blocks )->label( 'All Registered Blocks' );

		// --- Design ---
		// unset( $blocks['"core/accordion'] );
		// unset( $blocks['"core/accordion-heading'] );
		// unset( $blocks['"core/accordion-item'] );
		// unset( $blocks['"core/accordion-panel'] );
		// unset( $blocks['core/button'] );
		// unset( $blocks['core/buttons'] );
		// unset( $blocks['core/column'] );
		// unset( $blocks['core/columns'] );
		// unset( $blocks['core/comment-template'] );
		// unset( $blocks['core/group'] );
		// unset( $blocks['core/home-link'] );
		// unset( $blocks['core/more'] );
		// unset( $blocks['core/navigation-link'] );
		// unset( $blocks['core/navigation-submenu'] );
		// unset( $blocks['core/nextpage'] ); // aka Page Break.
		// unset( $blocks['core/separator'] );
		unset( $blocks['core/spacer'] );
		// unset( $blocks['core/text-columns'] );

		// --- Embed ---
		// unset( $blocks['core/embed'] );

		// --- Media ---
		// unset( $blocks['core/audio'] );
		// unset( $blocks['core/cover'] );
		// unset( $blocks['core/file'] );
		// unset( $blocks['core/gallery'] );
		// unset( $blocks['core/image'] );
		// unset( $blocks['core/media-text'] );
		// unset( $blocks['core/video'] );

		// --- Reusable ---
		// unset( $blocks['core/block'] );

		// --- Text ---
		// unset( $blocks['core/code'] );
		// unset( $blocks['core/details'] );
		// unset( $blocks['core/footnotes'] );
		// unset( $blocks['core/freeform'] ); // aka Classic
		// unset( $blocks['core/heading'] );
		// unset( $blocks['core/list'] );
		// unset( $blocks['core/list-item'] );
		// unset( $blocks['core/missing'] );
		// unset( $blocks['core/paragraph'] );
		// unset( $blocks['core/preformatted'] );
		// unset( $blocks['core/pullquote'] );
		// unset( $blocks['core/quote'] );
		// unset( $blocks['core/table'] );
		// unset( $blocks['core/verse'] );
		// unset( $blocks['"core/math'] );

		// --- Theme ---
		// unset( $blocks['"core/post-author'] );
		// unset( $blocks['"core/post-author-biography'] );
		// unset( $blocks['"core/post-author-name'] );
		// unset( $blocks['"core/post-comments'] );
		// unset( $blocks['"core/post-comments-count'] );
		// unset( $blocks['"core/post-comments-form'] );
		// unset( $blocks['"core/post-comments-link'] );
		// unset( $blocks['"core/post-content'] );
		// unset( $blocks['"core/post-date'] );
		// unset( $blocks['"core/post-excerpt'] );
		// unset( $blocks['"core/post-featured-image'] );
		// unset( $blocks['"core/post-navigation-link'] );
		// unset( $blocks['"core/post-template'] );
		// unset( $blocks['"core/post-terms'] );
		// unset( $blocks['"core/post-time-to-read'] );
		// unset( $blocks['"core/post-title'] );
		// unset( $blocks['core/avatar'] );
		// unset( $blocks['core/comment-author-name'] );
		// unset( $blocks['core/comment-content'] );
		// unset( $blocks['core/comment-date'] );
		// unset( $blocks['core/comment-edit-link'] );
		// unset( $blocks['core/comment-reply-link'] );
		// unset( $blocks['core/comments'] );
		// unset( $blocks['core/comments-pagination'] );
		// unset( $blocks['core/comments-pagination-next'] );
		// unset( $blocks['core/comments-pagination-numbers'] );
		// unset( $blocks['core/comments-pagination-previous'] );
		// unset( $blocks['"core/comment-author-name'] );
		// unset( $blocks['"core/comment-content'] );
		// unset( $blocks['"core/comment-date'] );
		// unset( $blocks['"core/comment-edit-link'] );
		// unset( $blocks['"core/comment-reply-link'] );
		// unset( $blocks['"core/comment-template'] );
		// unset( $blocks['"core/comments'] );
		// unset( $blocks['"core/comments-pagination'] );
		// unset( $blocks['"core/comments-pagination-next'] );
		// unset( $blocks['"core/comments-pagination-numbers'] );
		// unset( $blocks['"core/comments-pagination-previous'] );
		// unset( $blocks['"core/comments-title'] );
		// unset( $blocks['core/comments-title'] );
		// unset( $blocks['core/loginout'] );
		// unset( $blocks['core/navigation'] );
		// unset( $blocks['core/pattern'] );
		// unset( $blocks['core/post-author'] );
		// unset( $blocks['core/post-author-biography'] );
		// unset( $blocks['core/post-author-name'] );
		// unset( $blocks['core/post-comments'] );
		// unset( $blocks['core/post-comments-form'] );
		// unset( $blocks['core/post-content'] );
		// unset( $blocks['core/post-date'] );
		// unset( $blocks['core/post-excerpt'] );
		// unset( $blocks['core/post-featured-image'] );
		// unset( $blocks['core/post-navigation-link'] );
		// unset( $blocks['core/post-template'] );
		// unset( $blocks['core/post-terms'] );
		// unset( $blocks['core/post-title'] );
		// unset( $blocks['core/query'] );
		// unset( $blocks['core/query-no-results'] );
		// unset( $blocks['core/query-pagination'] );
		// unset( $blocks['core/query-pagination-next'] );
		// unset( $blocks['core/query-pagination-numbers'] );
		// unset( $blocks['core/query-pagination-previous'] );
		// unset( $blocks['"core/query'] );
		// unset( $blocks['"core/query-no-results'] );
		// unset( $blocks['"core/query-pagination'] );
		// unset( $blocks['"core/query-pagination-next'] );
		// unset( $blocks['"core/query-pagination-numbers'] );
		// unset( $blocks['"core/query-pagination-previous'] );
		// unset( $blocks['"core/query-title'] );
		// unset( $blocks['"core/query-total'] );
		// unset( $blocks['core/query-title'] );
		// unset( $blocks['core/read-more'] );
		// unset( $blocks['core/site-logo'] );
		// unset( $blocks['core/site-tagline'] );
		// unset( $blocks['core/site-title'] );
		// unset( $blocks['core/template-part'] );
		// unset( $blocks['core/term-description'] );
		// unset( $blocks['"core/term-count'] );
		// unset( $blocks['"core/term-description'] );
		// unset( $blocks['"core/term-name'] );
		// unset( $blocks['"core/term-template'] );
		// unset( $blocks['"core/terms-query'] );

		// --- Widget ---
		// unset( $blocks['core/archives'] );
		// unset( $blocks['core/calendar'] );
		// unset( $blocks['core/categories'] );
		// unset( $blocks['core/html'] );
		// unset( $blocks['core/latest-comments'] );
		// unset( $blocks['core/latest-posts'] );
		// unset( $blocks['core/legacy-widget'] );
		// unset( $blocks['core/page-list'] );
		// unset( $blocks['core/page-list-item'] );
		// unset( $blocks['core/rss'] );
		// unset( $blocks['core/search'] );
		// unset( $blocks['core/shortcode'] );
		// unset( $blocks['core/social-link'] );
		// unset( $blocks['core/social-links'] );
		// unset( $blocks['core/tag-cloud'] );
		// unset( $blocks['core/widget-group'] );

		// --- Third-Party ---
		// unset( $blocks['"gravityforms/form'] );
		// unset( $blocks['"yoast-seo/breadcrumbs'] );
		// unset( $blocks['"yoast/faq-block'] );
		// unset( $blocks['"yoast/how-to-block'] );

		return array_keys( $blocks );
	}
endif;

add_filter( 'allowed_block_types_all', __NAMESPACE__ . '\\remove_core_blocks' );

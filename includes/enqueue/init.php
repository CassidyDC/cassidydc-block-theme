<?php
/**
 * Initialize the register and enqueue functionality
 *
 * @package CassidyDC\BlockTheme\Functions
 * @version 1.0.0
 */

declare( strict_types = 1 );
namespace CassidyDC\BlockTheme;

require_once get_theme_file_path( 'includes/enqueue/config.php' );
require_once get_theme_file_path( 'includes/enqueue/loader/process-configs.php' );
require_once get_theme_file_path( 'includes/enqueue/loader/register-assets.php' );
require_once get_theme_file_path( 'includes/enqueue/loader/enqueue-assets.php' );

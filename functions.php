<?php

/**
 * Theme Functions
 * @package Lauren
 */

//  for production
// EX: wp_enqueue_style( 'lauren-style', get_stylesheet_uri(), array(), LAUREN_VERSION );
// if ( ! defined( 'LAUREN_VERSION' ) ) {
// 	// Replace the version number of the theme on each release.
// 	define( 'LAUREN_VERSION', '0.1.0a' );

// }


if (!defined('LAUREN_DIR_PATH')) {
    define('LAUREN_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('LAUREN_DIR_URI')) {
    define('LAUREN_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once LAUREN_DIR_PATH . '/inc/helpers/autoloader.php';

function lauren_get_theme_instance()
{
    \LAUREN_THEME\Inc\LAUREN_THEME::get_instance();
}

lauren_get_theme_instance();

function lauren_enqueue_scripts()
{
}

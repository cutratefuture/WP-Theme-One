<?php

/**
 * Enqueue theme assets
 *
 * @package Lauren
 */

namespace LAUREN_THEME\Inc;


use LAUREN_THEME\Inc\Traits\Singleton;

class Assets
{
	use Singleton;

	protected function __construct()
	{
		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks()
	{
		// actions 
		add_action('wp_enqueue_scripts', [$this, 'register_styles']);
		add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
	}

	public function register_styles()
	{
		// Register styles
		wp_register_style('noscript-css', get_stylesheet_uri() . '/assets/css/noscript-css', ['styles-css']);
		wp_register_style('fontawesome-all-min-css', get_stylesheet_uri() . '/assets/css/fontawesome-all.min.css', ['styles-css']);
		wp_register_style('styles-css', get_stylesheet_uri(), [], filemtime(LAUREN_DIR_PATH . '/style.css'), 'all');

		// Enqueue styles
		wp_enqueue_style('styles-css');
	}

	public function register_scripts()
	{
		// Register scripts
		wp_register_script('browser-min-js', LAUREN_DIR_URI . '/assets/js/browser.min.js', ['jquery'], false, true);
		wp_register_script('breakpoints-min-js', LAUREN_DIR_URI . '/assets/js/breakpoints.min.js', ['jquery'], false, true);
		wp_register_script('main-js', LAUREN_DIR_URI . '/assets/js/main.js', ['jquery'], filemtime(LAUREN_DIR_PATH . '/assets/js/main.js'), true);
		wp_register_script('util-js', LAUREN_DIR_URI . '/assets/js/util.js', ['jquery'], false, true);

		// Enqueue scripts
		wp_enqueue_script('browser-min-js');
		wp_enqueue_script('breakpoints-min-js');
		wp_enqueue_script('main-js');
		wp_enqueue_script('util-js');
	}
}

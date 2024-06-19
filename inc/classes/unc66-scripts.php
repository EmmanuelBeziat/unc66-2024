<?php
/**
 * Script functions.
 */
class UNC66_Scripts {
	/**
	 * Add WordPress' actions and filters.
	 */
	function __construct () {
		add_action('wp_enqueue_scripts', [$this, 'front_scripts']);
		// add_action('login_enqueue_scripts', [$this, 'login_scripts']);
	}

	/**
	 * Enqueue scripts and styles.
	 */
	public function front_scripts () {
		$custom_css = '/assets/styles/custom.css';
		$custom_js = '/assets/scripts/custom.js';

		// CSS
		wp_enqueue_style('unc66-app', get_template_directory_uri().'/assets/styles/app.css', [], THEME_VERSION);

		if (file_exists(get_template_directory().$custom_css)) {
			wp_enqueue_style('unc66-custom', get_template_directory_uri().$custom_css, ['unc66-app'], THEME_VERSION);
		}

		// JS
		wp_enqueue_script('unc66-vendors', get_template_directory_uri().'/assets/scripts/vendors.js', [], THEME_VERSION, true);
		wp_enqueue_script('unc66-classes', get_template_directory_uri().'/assets/scripts/classes.js', [], THEME_VERSION, true);
		wp_enqueue_script('unc66-app', get_template_directory_uri().'/assets/scripts/app.js', [], THEME_VERSION, true);

		if (file_exists(get_template_directory().$custom_js)) {
			wp_enqueue_script('unc66-custom', get_template_directory_uri().$custom_js, ['unc66-app'], THEME_VERSION, true);
		}
	}

	public function login_scripts () {
    wp_enqueue_style('unc66-login', get_stylesheet_directory_uri().'/assets/styles/login-style.css');
	}
}
new UNC66_Scripts();

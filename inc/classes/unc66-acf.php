<?php
/**
 * ACF functions.
 */
class UNC66_ACF {
	/**
	 * Add Wordpress' actions and filters.
	 */
	function __construct () {
		add_action('acf/init', [$this, 'acf_fields']);
		add_action('acf/init', [$this, 'options_page']); // Only if Pro version
	}

	/**
	 * Add ACF options page.
	 */
	public function options_page () {
		if (function_exists('acf_add_options_sub_page')) {
			acf_add_options_sub_page([
				'page_title' => 'Options du site',
        'menu_title' => 'Options du site',
				'parent_slug' => 'themes.php'
			]);
		}
	}

	/**
	 * ACF Content
	 */
	public function acf_fields () {

	}
}
new UNC66_ACF();

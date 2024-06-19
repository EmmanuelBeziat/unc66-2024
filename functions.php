<?php
$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version);

add_action('after_setup_theme', function () {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');

	register_nav_menus([
		'navigation' => __('Menu principal'),
		'footer-center' => __('Pied de page'),
	]);
});

require_once 'inc/classes/unc66-acf.php';
require_once 'inc/classes/unc66-admin.php';
require_once 'inc/classes/unc66-scripts.php';
require_once 'inc/classes/unc66-tools.php';
require_once 'inc/disable-comments.php';

add_filter('wpcf7_autop_or_not', '__return_false');

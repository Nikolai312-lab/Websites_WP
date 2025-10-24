<?php

/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Oakridge Carpenter And Joinery for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'oakridge_carpenter_and_joinery_register_required_plugins', 0);
function oakridge_carpenter_and_joinery_register_required_plugins()
{
	$plugins = array(
		array(
			'name'      => 'Superb Addons',
			'slug'      => 'superb-blocks',
			'required'  => false,
		)
	);

	$config = array(
		'id'           => 'oakridge-carpenter-and-joinery',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa($plugins, $config);
}


function oakridge_carpenter_and_joinery_pattern_styles()
{
	wp_enqueue_style('oakridge-carpenter-and-joinery-patterns', get_stylesheet_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('oakridge-carpenter-and-joinery-editor', get_stylesheet_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'oakridge_carpenter_and_joinery_pattern_styles');


add_theme_support('wp-block-styles');

// Removes the default wordpress patterns
add_action('init', function () {
	remove_theme_support('core-block-patterns');
});

// Register customer Oakridge Carpenter And Joinery pattern categories
function oakridge_carpenter_and_joinery_register_block_pattern_categories()
{
	register_block_pattern_category(
		'header',
		array(
			'label'       => __('Header', 'oakridge-carpenter-and-joinery'),
			'description' => __('Header patterns', 'oakridge-carpenter-and-joinery'),
		)
	);
	register_block_pattern_category(
		'call_to_action',
		array(
			'label'       => __('Call To Action', 'oakridge-carpenter-and-joinery'),
			'description' => __('Call to action patterns', 'oakridge-carpenter-and-joinery'),
		)
	);
	register_block_pattern_category(
		'content',
		array(
			'label'       => __('Content', 'oakridge-carpenter-and-joinery'),
			'description' => __('Oakridge Carpenter And Joinery content patterns', 'oakridge-carpenter-and-joinery'),
		)
	);
	register_block_pattern_category(
		'teams',
		array(
			'label'       => __('Teams', 'oakridge-carpenter-and-joinery'),
			'description' => __('Team patterns', 'oakridge-carpenter-and-joinery'),
		)
	);
	register_block_pattern_category(
		'banners',
		array(
			'label'       => __('Banners', 'oakridge-carpenter-and-joinery'),
			'description' => __('Banner patterns', 'oakridge-carpenter-and-joinery'),
		)
	);
	register_block_pattern_category(
		'contact',
		array(
			'label'       => __('Contact', 'oakridge-carpenter-and-joinery'),
			'description' => __('Contact patterns', 'oakridge-carpenter-and-joinery'),
		)
	);
	register_block_pattern_category(
		'layouts',
		array(
			'label'       => __('Layouts', 'oakridge-carpenter-and-joinery'),
			'description' => __('layout patterns', 'oakridge-carpenter-and-joinery'),
		)
	);
	register_block_pattern_category(
		'testimonials',
		array(
			'label'       => __('Testimonial', 'oakridge-carpenter-and-joinery'),
			'description' => __('Testimonial and review patterns', 'oakridge-carpenter-and-joinery'),
		)
	);

}

add_action('init', 'oakridge_carpenter_and_joinery_register_block_pattern_categories');









// Initialize information content
require_once trailingslashit(get_template_directory()) . 'inc/vendor/autoload.php';

use SuperbThemesThemeInformationContent\ThemeEntryPoint;
add_action("init", function () {
ThemeEntryPoint::init([
    'type' => 'block', // block / classic
    'theme_url' => 'https://superbthemes.com/oakridge-carpenter-and-joinery/',
    'demo_url' => 'https://superbthemes.com/demo/oakridge-carpenter-and-joinery/',
    'features' => array(
    	array(
    		'title' => __("Theme Designer", "oakridge-carpenter-and-joinery"),
    		'icon' => "lego-duotone.webp",
    		'description' => __("Choose from over 300 designs for footers, headers, landing pages & all other theme parts.", "oakridge-carpenter-and-joinery")
    	),
    	   	array(
    		'title' => __("Editor Enhancements", "oakridge-carpenter-and-joinery"),
    		'icon' => "1-1.png",
    		'description' => __("Enhanced editor experience, grid systems, improved block control and much more.", "oakridge-carpenter-and-joinery")
    	),
    	array(
    		'title' => __("Custom CSS", "oakridge-carpenter-and-joinery"),
    		'icon' => "2-1.png",
    		'description' => __("Add custom CSS with syntax highlight, custom display settings, and minified output.", "oakridge-carpenter-and-joinery")
    	),
    	array(
    		'title' => __("Animations", "oakridge-carpenter-and-joinery"),
    		'icon' => "wave-triangle-duotone.webp",
    		'description' => __("Animate any element on your website with one click. Choose from over 50+ animations.", "oakridge-carpenter-and-joinery")
    	),
    	array(
    		'title' => __("WooCommerce Integration", "oakridge-carpenter-and-joinery"),
    		'icon' => "shopping-cart-duotone.webp",
    		'description' => __("Choose from over 100 unique WooCommerce designs for your e-commerce store.", "oakridge-carpenter-and-joinery")
    	),
    	array(
    		'title' => __("Responsive Controls", "oakridge-carpenter-and-joinery"),
    		'icon' => "arrows-out-line-horizontal-duotone.webp",
    		'description' => __("Make any theme mobile-friendly with SuperbThemes responsive controls.", "oakridge-carpenter-and-joinery")
    	)
    )
]);
});
<?php

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}
/*
 * Plugin Name:       teamFilter
 * Description:       Handle the Team Filter with this plugin.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Samrat
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       teamfilter
 * Domain Path:       /languages
 */


function teamFilter_enqueue_scripts()
{

    wp_enqueue_script('teamFilterVueJS', plugin_dir_url(__FILE__) . 'dist/assets/index-BVagX3R0.js', array(), '1.0', true);

    wp_enqueue_style('teamFilterCSS', plugin_dir_url(__FILE__) . 'dist/assets/index-Df0gBc7N.css', array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'teamFilter_enqueue_scripts');


function teamFilter_shortcode()
{

    return '<div id="app"></div>';

}

add_shortcode('teamFilter', 'teamFilter_shortcode');


require_once __DIR__ . '/inc/team-filter-post-type.php';



<?php
/**
 * CoderDojo Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Twenty_Two
 * @since CoderDojo Twenty-Two 1.0
 */


if (!function_exists('coderdojotwentytwoSupport')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @return void
     * @since CoderDojo Twenty-Two 1.0
     *
     */
    function coderdojotwentytwoSupport()
    {

        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('style.css');

    }

endif;

add_action('after_setup_theme', 'coderdojotwentytwoSupport');

/**
 * POST SUPPORT
 * Set up for page excerpts
 */
function coderdojoPostSupport()
{

    // Add default posts and comments RSS feed links to head.
    add_post_type_support('page', 'excerpt');

}

add_action('after_setup_theme', 'coderdojoPostSupport');

if (!function_exists('coderdojotwentytwoStyles')) :

    /**
     * Enqueue styles.
     *
     * @return void
     * @since Twenty Twenty-Two 1.0
     *
     */
    function coderdojotwentytwoStyles()
    {
        // Register theme stylesheet.
        $theme_version = wp_get_theme()->get('Version');

        $version_string = is_string($theme_version) ? $theme_version : false;
        wp_register_style(
            'coderdojotwentytwo-style',
            get_template_directory_uri() . '/style.css',
            array(),
            $version_string
        );

        // Enqueue theme stylesheet.
        wp_enqueue_style('coderdojotwentytwo-style');

    }

endif;

add_action('wp_enqueue_scripts', 'coderdojotwentytwoStyles');

// Add block patterns
//require get_template_directory() . '/inc/block-patterns.php';

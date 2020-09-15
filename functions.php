<?php
/**
 * Anmake Tokyo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Anmake_Tokyo
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (! function_exists('anmake_tokyo_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function anmake_tokyo_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Anmake Tokyo, use a find and replace
         * to change 'anmake-tokyo' to the name of your theme in all the template files.
         */
        load_theme_textdomain('anmake-tokyo', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
         // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => esc_html__('Main Menu', 'anmake-tokyo'),
                'footer' => esc_html__('Footer Menu', 'anmake-tokyo'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'anmake_tokyo_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'anmake_tokyo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function anmake_tokyo_content_width()
{
    $GLOBALS['content_width'] = apply_filters('anmake_tokyo_content_width', 640);
}
add_action('after_setup_theme', 'anmake_tokyo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function anmake_tokyo_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'anmake-tokyo'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'anmake-tokyo'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'anmake_tokyo_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function anmake_tokyo_scripts()
{
    wp_enqueue_style('anmake-tokyo-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('anmake-tokyo-style', 'rtl', 'replace');

    wp_enqueue_script('anmake-tokyo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'anmake_tokyo_scripts');


/**
 * Google Fonts
 */

function twpp_enqueue_styles()
{
    wp_enqueue_style(
        'Ubuntu',
        '<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,500;1,700&display=swap" rel="stylesheet">'
    );
}

add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');


/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
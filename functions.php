<?php

function js_includes()
{
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/build/styles.css', []);
}

function remove_admin_bar()
{
    return false;
};

add_action('wp_enqueue_scripts', 'js_includes');
add_filter('show_admin_bar', 'remove_admin_bar');

function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emojis');
add_action('get_header', 'My_Filter_head');

/**
 * My_Filter_head
 *
 * @return void;
 */
function My_Filter_head()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

require_once 'widgets/Widget_Services.php';

/**
 * Wpb_Widgets_init
 *
 * @return void;
 */
function Wpb_Widgets_init()
{
    register_sidebar(
        array(
        'name' => __('Content Widgets', 'wpb'),
        'id' => 'content_widgets',
        'description' => __('The main sidebar appears on the right on each page except the front page template', 'wpb'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        )
    );
}

add_action('widgets_init', 'wpb_widgets_init');

add_action('admin_init', 'on_init_admin');

function on_init_admin()
{
    add_theme_support('post-thumbnails');
}
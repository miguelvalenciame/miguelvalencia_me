<?php

// Theme support for post-thumbnails and menus
function skillcrushstarter_setup()
{

    // Post thumbnails support
    add_theme_support('post-thumbnails');

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'skillcrushstarter_setup');

/**
 * Register Custom Navigation Walker
 */
require_once 'class-wp-bootstrap-navwalker.php';


/**
 * Register Nav Menus
 */
function wpbasics_theme_setup()
{
    register_nav_menus(array(
        'primary' => __('Main Menu'),
        'social' => __('Social Menu')
    ));
}
add_action('after_setup_theme', 'wpbasics_theme_setup');

// Incluir Bootstrap CSS
function bootstrap_css()
{
    wp_enqueue_style(
        'bootstrap_css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
        array(),
        '4.1.3'
    );
}
add_action('wp_enqueue_scripts', 'bootstrap_css');


// Incluir Bootstrap JS y dependencia popper
function bootstrap_js()
{
    wp_enqueue_script(
        'popper_js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
        array(),
        '1.14.3',
        true
    );
    wp_enqueue_script(
        'bootstrap_js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
        array('jquery', 'popper_js'),
        '4.1.3',
        true
    );
}
add_action('wp_enqueue_scripts', 'bootstrap_js');


add_action('wp_enqueue_scripts', 'add_aos_animation');
function add_aos_animation()
{
    wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
    wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/theme.js', array('AOS'), null, true);
}

// Defines custom markup for post comments
function miguelvalencia_me_comments($comment, $args, $depth)
{
    $comment  = '<li class="comment">';
    $comment .=    '<header class="comment-head">';
    $comment .= '<span class="comment-author">' . get_comment_author() . '</span>';
    $comment .= '<span class="comment-meta">' . get_comment_date('m/d/Y') . '&emsp;|&emsp;' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) . '</span>';
    $comment .= '</header>';
    $comment .= '<div class="comment-body">';
    $comment .= '<p>' . get_comment_text() . '</p>';
    $comment .= '</div>';
    $comment .= '</li>';

    echo $comment;
}
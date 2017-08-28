<?php
/*
All the functions are in the PHP pages in the `functions/` folder.
*/

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search-widget.php');
require_once locate_template('/functions/feedback.php');

//Image Resizer
require_once( get_stylesheet_directory() . '/aq_resizer.php');

//Post Excerpt Blog
function blog_post_excerpt(){
$excerpt = get_the_content();
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$the_str = substr($excerpt, 0, 250);
return $the_str;
}

// Creates Theme Option Custom Post Type
function cpt_theme_option_init() {
    $args = array(
      'label' => 'Theme Option',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'theme-option'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'supports' => array(
            'title',
            'revisions',)
        );
    register_post_type( 'theme-options', $args );
}
add_action( 'init', 'cpt_theme_option_init' );
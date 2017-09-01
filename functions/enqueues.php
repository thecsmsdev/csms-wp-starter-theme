<?php

function b4st_enqueues() {

	wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1', true);
	wp_enqueue_script('jquery');

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/dist/css/bootstrap.min.css', false, '4.0.0.alpha', null);
	wp_enqueue_style('bootstrap-css');

	wp_register_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', null);
	wp_enqueue_style('font-awesome-css');

  	wp_register_style('b4st-css', get_template_directory_uri() . '/theme/css/mystyle.css', false, null);
	wp_enqueue_style('b4st-css');

  	wp_register_style('sa-res-css', get_template_directory_uri() . '/theme/css/service-area-responsive-style.css', false, null);
	wp_enqueue_style('sa-res-css');

  	wp_register_style('template-css', get_template_directory_uri() . '/theme/css/template-style.css', false, null);
	wp_enqueue_style('template-css');

  	wp_register_style('responsive-css', get_template_directory_uri() . '/theme/css/responsive.css', false, null);
	wp_enqueue_style('responsive-css');

  	wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, null, true);
	wp_enqueue_script('modernizr');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/dist/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('parallax-js', get_template_directory_uri() . '/theme/js/parallax.js', false, null, true);
	wp_enqueue_script('parallax-js');

  	wp_register_style('owl-carousel-css', get_template_directory_uri() . '/theme/css/owl.carousel.css', false, null);
	wp_enqueue_style('owl-carousel-css');
	
  	wp_register_style('owl-theme-css', get_template_directory_uri() . '/theme/css/owl.theme.css', false, null);
	wp_enqueue_style('owl-theme-css');

	wp_register_script('owl-carousel-js', get_template_directory_uri() . '/theme/js/owl.carousel.js', false, null, true);
	wp_enqueue_script('owl-carousel-js');

  	wp_register_style('animate-css', get_template_directory_uri() . '/theme/css/animate.css', false, null);
	wp_enqueue_style('animate-css');

	wp_register_script('wow-js', get_template_directory_uri() . '/theme/js/wow.min.js', false, null, true);
	wp_enqueue_script('wow-js');

	wp_register_script('b4st-js', get_template_directory_uri() . '/theme/js/custom.js', false, null, true);
	wp_enqueue_script('b4st-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);

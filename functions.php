<?php
register_nav_menus( array(
	'menu' => 'Menu superior',
));

add_theme_support( 'post-thumbnails');
add_image_size( 'slider_thumbs', 470, 300, true );
add_image_size( 'list_articles_thumbs', 450, 370, true );

register_sidebar(array(
	'name' => 'Sidebar',
	'before_widget' => '<section class="widget">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => 'Footer',
	'before_widget' => '<section class="widget">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));


// STYLES
function tran_styles(){
	wp_register_style('owlcarouselCSS', get_template_directory_uri().'/css/owl.carousel.css', array(), '2.3');
	wp_enqueue_style('owlcarouselCSS');
}
add_action('init', 'tran_styles');

// SCRIPTS
function tran_scripts(){

	// wp_register_script('hover', get_template_directory_uri().'/js/hover.js', array('jquery'), '1.0', false);
	wp_register_script( 'main', get_template_directory_uri().'/js/main_script.js', array( 'jquery' ), '1.0', false );
	wp_register_script('jquery.slides', get_template_directory_uri().'/js/jquery.slides.js', array('jquery'), '1.0', false);
	wp_register_script( 'owlcarousel', get_template_directory_uri().'/js/owl.carousel.min.js', array( 'jquery' ), '2.1.6', false );


	wp_enqueue_script('jquery');
	wp_enqueue_script('owlcarousel');
    // wp_enqueue_script('hover');
	wp_enqueue_script('main');
	wp_enqueue_script('jquery.slides');
}
add_action('init','tran_scripts');

function new_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>

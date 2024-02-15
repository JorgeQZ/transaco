<?php

<<<<<<< HEAD
require_once('inc/cubicador_functions.php');

add_theme_support( 'post-thumbnails');
add_image_size( 'slider_thumbs', 470, 300, true );
add_image_size( 'list_articles_thumbs', 450, 370, true );
add_image_size( 'page_banner', 1200, 310,array( 'center', 'center' ) );
register_nav_menus( array(
	'productos-menu' => __( 'Productos Menu', 'transaco' ),
	'menu' => __( 'Menu superior', 'transaco' )
) );

register_sidebar(array(
	'name' => 'Sidebar',
	'before_widget' => '<section class="widget">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => 'Footer',
	'id' => 'correo',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
=======
add_theme_support('post-thumbnails');
add_image_size('slider_thumbs', 470, 300, true);
add_image_size('list_articles_thumbs', 450, 370, true);
add_image_size('page_banner', 1200, 310, array('center', 'center'));
register_nav_menus(array(
    'productos-menu' => __('Productos Menu', 'transaco'),
    'menu' => __('Menu superior', 'transaco'),
));

register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

register_sidebar(array(
    'name' => 'Footer',
    'id' => 'correo',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
));

// Menus
// function trans_menu(){
<<<<<<< HEAD
// 	register_nav_menus( array('productos-menu' => 'Productos Menu'));
// 	register_nav_menus( array('menu' => 'Menu superior'));
// }



// add_action('init', 'trans_menu');
// STYLES
function tran_styles(){
	wp_register_style('owlcarouselCSS', get_template_directory_uri().'/css/owl.carousel.css', array(), '2.3');
	wp_register_style('template-tejas', get_template_directory_uri().'/css/template-tejas.css', array(), '2.3');
	wp_register_style('template-ai', get_template_directory_uri().'/css/template-ai.css', array(), '2.3');
	wp_register_style('template-aa', get_template_directory_uri().'/css/template-aa.css', array(), '2.3');
	wp_register_style('template-pc', get_template_directory_uri().'/css/template-pc.css', array(), '2.3');
	wp_register_style('template-me', get_template_directory_uri().'/css/template-me.css', array(), '2.3');
	wp_register_style('template-ma', get_template_directory_uri().'/css/template-ma.css', array(), '2.3');
	wp_register_style('template-ah', get_template_directory_uri().'/css/template-ah.css', array(), '2.3');
	wp_register_style('template-vs', get_template_directory_uri().'/css/template-vs.css', array(), '2.3');
	wp_register_style('template-sv', get_template_directory_uri().'/css/template-sv.css', array(), '2.3');
	wp_register_style('template-sc', get_template_directory_uri().'/css/template-sc.css', array(), '2.3');
	wp_register_style('generales', get_template_directory_uri().'/css/home-noticias.css', array(), '2.3');
	wp_register_style('hn', get_template_directory_uri().'/css/generales.css', array(), '2.3');
	wp_register_style('modal', get_template_directory_uri().'/css/modal.css', array(), '2.3');
	wp_register_style('header', get_template_directory_uri().'/css/header.css', array(), '2.3');
	wp_register_style('footer', get_template_directory_uri().'/css/footer.css', array(), '2.3');
	wp_register_style('index', get_template_directory_uri().'/css/index.css', array(), '2.3');
	wp_register_style('template-empresa', get_template_directory_uri().'/css/template-empresa.css', array(), '2.3');
	wp_register_style('template-proyectos', get_template_directory_uri().'/css/template-proyectos.css', array(), '2.3');
	wp_register_style('template-ft', get_template_directory_uri().'/css/template-ft.css', array(), '2.3');
	wp_register_style('modal-ai', get_template_directory_uri().'/css/modal-ai.css', array(), '2.3');
	wp_register_style('box-popup', get_template_directory_uri().'/css/box-popup.css', array(), '2.3');


	wp_enqueue_style('owlcarouselCSS');
	// wp_enqueue_style('template-tejas');
	wp_enqueue_style('template-ai');
	wp_enqueue_style('template-aa');
	wp_enqueue_style('template-pc');
	wp_enqueue_style('template-ah');
	wp_enqueue_style('template-me');
	wp_enqueue_style('template-ma');
	wp_enqueue_style('template-vs');
	wp_enqueue_style('template-sc');
	wp_enqueue_style('generales');
	wp_enqueue_style('modal');
	wp_enqueue_style('modal-ai');
	wp_enqueue_style('header');
	wp_enqueue_style('footer');
	wp_enqueue_style('index');
	wp_enqueue_style('hn');
	wp_enqueue_style('template-empresa');
	wp_enqueue_style('template-proyectos');
	wp_enqueue_style('template-ft');
	wp_enqueue_style('template-sv');
	wp_enqueue_style('box-popup');
}
add_action('init', 'tran_styles');


add_action( 'wp_enqueue_scripts', 'new_styles', 101 );
function new_styles() {
	// Enqueue the catalgo styles
	if(is_page_template("page-polyglass.php")){

		wp_enqueue_style( 'polyglass', get_stylesheet_directory_uri() .'/css/page-polyglass.css' );

	}

	/**
	 * 2023
	 */

	if(is_page_template("page-tejas-2023.php")){
		wp_enqueue_style('template-tejas-2023', get_template_directory_uri().'/css/template-tejas-2023.css', array());

		wp_enqueue_script('tejas-2023', get_template_directory_uri().'/js/tejas-2023.js');
	// wp_register_style('template-tejas', get_template_directory_uri().'/css/template-tejas.css', array(), '2.3');

	}


	if(is_page('membranas-asfalticas')){
		echo '<style>.hero-banner .title{display: none !important;}</style>';
	}


    if (is_page_template("page-sustentabilidad_2022.php")) {

        wp_enqueue_style('sustentabilidad', get_stylesheet_directory_uri() . '/css/sustentabilidad.css', array(), filemtime(get_stylesheet_directory() . '/css/sustentabilidad.css'), 'all');
        wp_enqueue_style('animte', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', true);
        wp_enqueue_script('waypoints', get_template_directory_uri().'/js/noframework.waypoints.min.js');
         wp_enqueue_script('waypoints_animations', get_template_directory_uri().'/js/waypoints_animations.js');

    }
}
// SCRIPTS
function tran_scripts(){

	// wp_register_script('hover', get_template_directory_uri().'/js/hover.js', array('jquery'), '1.0', false);
	wp_register_script( 'main', get_template_directory_uri().'/js/main_script.js', array( 'jquery' ), '1.0', false );
	wp_register_script('jquery.slides', get_template_directory_uri().'/js/jquery.slides.js', array('jquery'), '1.0', false);
	wp_register_script( 'owlcarousel', get_template_directory_uri().'/js/owl.carousel.min.js', array( 'jquery' ), '2.1.6', false );
    wp_register_script( 'bxslider', get_template_directory_uri().'/js/jquery.bxslider.min.js', array( 'jquery' ), '2.1.6', false );

	wp_enqueue_script('jquery');
	// wp_enqueue_script('owlcarousel');
	wp_enqueue_script('main');
	wp_enqueue_script('bxslider');
	// wp_enqueue_script('jquery.slides');
}
add_action('init','tran_scripts');

function new_excerpt_length($length) {
	return 50;
=======
//     register_nav_menus( array('productos-menu' => 'Productos Menu'));
//     register_nav_menus( array('menu' => 'Menu superior'));
// }

// add_action('init', 'trans_menu');
// STYLES
function tran_styles()
{
    wp_register_style('owlcarouselCSS', get_template_directory_uri() . '/css/owl.carousel.css', array(), '2.3');
    wp_register_style('template-tejas', get_template_directory_uri() . '/css/template-tejas.css', array(), '2.3');
    wp_register_style('template-ai', get_template_directory_uri() . '/css/template-ai.css', array(), '2.3');
    wp_register_style('template-aa', get_template_directory_uri() . '/css/template-aa.css', array(), '2.3');
    wp_register_style('template-pc', get_template_directory_uri() . '/css/template-pc.css', array(), '2.3');
    wp_register_style('template-me', get_template_directory_uri() . '/css/template-me.css', array(), '2.3');
    wp_register_style('template-ma', get_template_directory_uri() . '/css/template-ma.css', array(), '2.3');
    wp_register_style('template-ah', get_template_directory_uri() . '/css/template-ah.css', array(), '2.3');
    wp_register_style('template-vs', get_template_directory_uri() . '/css/template-vs.css', array(), '2.3');
    wp_register_style('template-sv', get_template_directory_uri() . '/css/template-sv.css', array(), '2.3');
    wp_register_style('template-sc', get_template_directory_uri() . '/css/template-sc.css', array(), '2.3');
    wp_register_style('generales', get_template_directory_uri() . '/css/home-noticias.css', array(), '2.3');
    wp_register_style('hn', get_template_directory_uri() . '/css/generales.css', array(), '2.3');
    wp_register_style('modal', get_template_directory_uri() . '/css/modal.css', array(), '2.3');
    wp_register_style('header', get_template_directory_uri() . '/css/header.css', array(), '2.3');
    wp_register_style('footer', get_template_directory_uri() . '/css/footer.css', array(), '2.3');
    wp_register_style('index', get_template_directory_uri() . '/css/index.css', array(), '2.3');
    wp_register_style('template-empresa', get_template_directory_uri() . '/css/template-empresa.css', array(), '2.3');
    wp_register_style('template-proyectos', get_template_directory_uri() . '/css/template-proyectos.css', array(), '2.3');
    wp_register_style('template-ft', get_template_directory_uri() . '/css/template-ft.css', array(), '2.3');
    wp_register_style('modal-ai', get_template_directory_uri() . '/css/modal-ai.css', array(), '2.3');
    wp_register_style('box-popup', get_template_directory_uri() . '/css/box-popup.css', array(), '2.3');
    wp_register_style('catalogo', get_template_directory_uri() . '/css/catalogo.css', array(), '2.3');

    wp_enqueue_style('owlcarouselCSS');
    wp_enqueue_style('template-tejas');
    wp_enqueue_style('template-ai');
    wp_enqueue_style('template-aa');
    wp_enqueue_style('template-pc');
    wp_enqueue_style('template-ah');
    wp_enqueue_style('template-me');
    wp_enqueue_style('template-ma');
    wp_enqueue_style('template-vs');
    wp_enqueue_style('template-sc');
    wp_enqueue_style('generales');
    wp_enqueue_style('modal');
    wp_enqueue_style('modal-ai');
    wp_enqueue_style('header');
    wp_enqueue_style('footer');
    wp_enqueue_style('index');
    wp_enqueue_style('hn');
    wp_enqueue_style('template-empresa');
    wp_enqueue_style('template-proyectos');
    wp_enqueue_style('template-ft');
    wp_enqueue_style('template-sv');
    wp_enqueue_style('box-popup');
    wp_enqueue_style('catalogo');

}
add_action('init', 'tran_styles');

add_action('wp_enqueue_scripts', 'new_styles', 101);
function new_styles()
{
    // Enqueue the catalgo styles
    if (is_page_template("page-polyglass.php")) {

        wp_enqueue_style('polyglass', get_stylesheet_directory_uri() . '/css/page-polyglass.css');

    }

    if (is_page_template("page-home.php")) {

        wp_enqueue_style('home-anuncio', get_stylesheet_directory_uri() . '/css/home-anuncio.css', true);

    }

    if (is_page_template("page-sustentabilidad.php")) {

        wp_enqueue_style('sustentabilidad', get_stylesheet_directory_uri() . '/css/sustentabilidad.css', true);

    }

}
// SCRIPTS
function tran_scripts()
{

    // wp_register_script('hover', get_template_directory_uri().'/js/hover.js', array('jquery'), '1.0', false);
    wp_register_script('main', get_template_directory_uri() . '/js/main_script.js', array('jquery'), '1.0', false);
    wp_register_script('jquery.slides', get_template_directory_uri() . '/js/jquery.slides.js', array('jquery'), '1.0', false);
    wp_register_script('owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.1.6', false);
    wp_register_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '2.1.6', false);

    wp_enqueue_script('jquery');
    // wp_enqueue_script('owlcarousel');
    wp_enqueue_script('main');
    wp_enqueue_script('bxslider');
    // wp_enqueue_script('jquery.slides');
}
add_action('init', 'tran_scripts');

function new_excerpt_length($length)
{
    return 50;
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
<<<<<<< HEAD
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>
=======
function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921

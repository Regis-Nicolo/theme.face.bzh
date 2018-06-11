<?php 

define('RNFACE_VERSION', '1.0.1');


function Rnface_scripts() {
	wp_enqueue_style('Rnface_bootstrap-core',
		get_template_directory_uri() . '/css/bootstrap.min.css', array(), RNFACE_VERSION,'all');
	wp_enqueue_style('Rnface_fontawesome-core',
		get_template_directory_uri() . '/css/fontawesome-all.min.css', array(), RNFACE_VERSION,'all');
	wp_enqueue_style('Rnface_custom', get_template_directory_uri() . '/style.css', array('Rnface_bootstrap-core'), RNFACE_VERSION, 'all');	
	wp_enqueue_script('Rnface_admin_script', get_template_directory_uri() . '/js/face.js', array('jquery'), RNFACE_VERSION, true);

}
add_action('wp_enqueue_scripts', 'Rnface_scripts');


function Rnface_admin_scripts() {
	wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css',  array(), RNFACE_VERSION);
}
add_action('admin_init', 'Rnface_admin_scripts');

//==========================================================
//=========				utilitaires
//==========================================================
function Rnface_setup() {
	add_theme_support( 'post-thumbnails');
}
add_action('after_setup_theme', 'Rnface_setup');	

//==========================================================
//=========				menu
//==========================================================

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

<<<<<< HEAD
	//Fonction insertion d'image
	//wp_get_attachement_image_src()

?>



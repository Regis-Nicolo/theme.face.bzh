<?php 
/* Chargement des scripts*/
define('RNFACE_VERSION', '1.0.1');

//chargement dans le front-end
function Rnface_scripts() {

	//chargement des styles

	wp_enqueue_style('Rnface_bootstrap-core',
		get_template_directory_uri() . '/css/bootstrap.min.css', array(), RNFACE_VERSION,'all');
	wp_enqueue_style('Rnface_fontawesome-core',
		get_template_directory_uri() . '/css/fontawesome-all.min.css', array(), RNFACE_VERSION,'all');
	wp_enqueue_style('Rnface_custom', get_template_directory_uri() . '/style.css', array('Rnface_bootstrap-core'), RNFACE_VERSION, 'all');	
	wp_enqueue_style('Rnface_custom', get_template_directory_uri() . '/css/main.css', array('Rnface_main'), RNFACE_VERSION, 'all');	
	//chargement des scripts
	wp_enqueue_script('Rnface_admin_script', get_template_directory_uri() . '/js/face.js', array('jquery'), RNFACE_VERSION, true);

}
	// Fin de la fonction Rnface_Scripts 
add_action('wp_enqueue_scripts', 'Rnface_scripts');

	//Chargement dans l'admin
function Rnface_admin_scripts() {

	//Chargement des styles
	wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css',  array(), RNFACE_VERSION);
}
	//Fin fonction Rnface__scripts

add_action('admin_init', 'Rnface_admin_scripts');

//==========================================================
//=========				utilitaires
//==========================================================
function Rnface_setup() {

	//support des vignettes
	add_theme_support( 'post-thumbnails');
}
	//fin fonction Rnface_setup

	add_action('after_setup_theme', 'Rnface_setup');

	//Fonction insertion d'image
	//wp_get_attachement_image_src()
?>


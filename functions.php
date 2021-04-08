


<?php 

function wpexplorer_add_post_formats() {
	add_theme_support( 'post-formats', array(
		'video',
		'image',
		'audio',
		'aside',

	) );
}
add_action( 'after_setup_theme', 'wpexplorer_add_post_formats' );


add_theme_support( 'post-thumbnails' );

function meu_tema_config(){
    add_theme_support( 'woocommerce' ); 
}
add_action( 'after_setup_theme', 'meu_tema_config', 0 );



// Carregando nossos scripts e folhas de estilos
function load_scripts(){
	
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );



// Registrando nossos menus
register_nav_menus(
	array(
		'my_main_menu' => 'Main Menu',
		'footer_menu' => 'Footer Menu'
	)
);




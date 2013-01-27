<?php
/*-----------------------------------------------------------------------------------*/
/*	Registrar y cargar archivos js comunes
/*-----------------------------------------------------------------------------------*/
function anb_load_script() {
    wp_deregister_script( 'jquery' );  
    
	wp_register_script('jquery', get_template_directory_uri().'/js/vendor/jquery-1.7.2.min.js');
	wp_register_script('color-rgb', get_template_directory_uri().'/js/vendor/jquery.color-RGBa-patch.js');
        wp_register_script('menu', get_template_directory_uri().'/js/menu.js');
        
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'color-rgb' );
        wp_enqueue_script( 'menu' );
        //  raiz windows
        //  get_template_directory();
 
}    
 
//add_action('wp_enqueue_scripts', 'wd_load_script');
add_action('wp_enqueue_scripts','anb_load_script');



// Cargar scripts para comentarios solo en single.php y page.php
function wd_single_scripts() {
   if(is_singular() || is_page()){
   wp_enqueue_script( 'comment-reply' ); // Carga el javascript necesario para los comentarios anidados
   }
}
add_action('wp_print_scripts', 'wd_single_scripts');



/*------------------------------------------------------------*/
/*   Registrar Menus WP3.0+
/*------------------------------------------------------------*/
   if ( function_exists( 'register_nav_menus' ) )
   {
      register_nav_menus(
        array(
              'MenuPrincipal' => __( 'Menu Principal anibal copitan norabuena' ),
             )
      );
   }
   
   
   
 /*-----------------------------------------------------------*/
/*   Configurar Imágenes Thumbnails WP2.9+
/*-----------------------------------------------------------*/
if ( function_exists( 'add_theme_support' ) ) {
   add_theme_support( 'post-thumbnails' );//Agrega soporte
   add_image_size( 'video-thumbnail', 66, 56, true ); // Videos list thumbnails
   add_image_size( 'index-thumbnail', 200, 200, true ); // Blog thumbnail
   add_image_size( 'slider-thumbnail', 800, 400, true ); // Slider thumbnail
}  
   
   
   
   
   
   
   
   

?>
<?php

function themebs_enqueue_styles() {

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');

function themebs_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');
require_once('bs4navwalker.php');


/**
 * @snippet       Apply CSS if URL contains string - WordPress
 */
 
add_action( 'init', 'bbloomer_apply_css_if_url_contains_string' );
  
function bbloomer_apply_css_if_url_contains_string() {
  
$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  
if ( false !== strpos( $url, '<?php the_ID(); ?>' ) ) {
	alert("Page ID: <?php the_ID(); ?>");
	console.log('BLog 35');
    echo '<style type="text/css">
           .post-35 img {
		      width: initial !important;
		  }
         </style>';
} 
}
/*if ( function_exists( ‘add_theme_support’ ) )
add_theme_support( ‘post-thumbnails’ );*/?>
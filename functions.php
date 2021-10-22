<?php
/**
* 2ams.local   /functions.php
* ** ** ** ** ** ** ** ** ** **
* blocksy-child
* 
*/


// Security 
defined( 'ABSPATH' ) or die( 'GoFuckYourself!' );

if (! defined('WP_DEBUG')) {
	die( 'GoFuckYourself!' );
}


// Enqueue Css/Js
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/ams/css/blocksy.css' );
    
    /* Bootstrap Css -- showing example pages correctly */
    wp_enqueue_style( 'cover-css','https://getbootstrap.com/docs/5.1/examples/cover/cover.css' );
    wp_enqueue_style( 'features-css','https://getbootstrap.com/docs/5.1/examples/features/features.css' );
    
    /* Js */
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/ams/js/ams.js' );
    wp_enqueue_script( 'cdn-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js' );
    


    // * Vorlagen * //
    //wp_enqueue_style( 'beispiel-css','#' );
    //wp_enqueue_style( 'beispiel-css','#' );
    //wp_enqueue_style( 'beispiel-css','#' );

    //wp_enqueue_script( 'beispiel-js', '#' );
    //wp_enqueue_script( 'beispiel-js', '#' );
    //wp_enqueue_script( 'beispiel-js', '#' );

});


// #####################################################################################
// #####################################################################################
// BLOCKSY ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'ct-main-styles','ct-admin-frontend-styles','ct-getwid-styles','ct-beaver-styles','parent-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );
// #####################################################################################
// #####################################################################################





// #####################################################################################
// #####################################################################################
// 2AM CUSTM BEGIN
// #####################################################################################


// Code
// #####################################################################################

// #####################################################################################


// Code
// #####################################################################################

// #####################################################################################

// Code
// #####################################################################################

// #####################################################################################


// #####################################################################################
// 2AM CUSTM END
// #####################################################################################
// #####################################################################################
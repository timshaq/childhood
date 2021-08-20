<?php

add_action('wp_enqueue_scripts', 'childhood_scripts');
add_action('wp_enqueue_scripts', 'childhood_styles');

function childhood_styles() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
    // wp_enqueue_style( 'example-style', get_template_directory_uri() . '/assets/styles/main.min.css' );
    // wp_enqueue_style( 'cdn-style', 'https...' );
};

function childhood_scripts() {
    wp_enqueue_script( 'childhood-script', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
    
    // переопределяем версию jquery
    // wp_deregister_script( 'jquery' );
    // wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js/' );
    // wp_enqueue_script( 'jquery' );
};

add_theme_support( 'custom-logo' );

// thumbnail в админке
add_theme_support( 'post-thumbnails' );

// меню в админке
add_theme_support( 'menus' );


// googlemap
// function my_acf_google_map_api( $api ){
	
// 	$api['key'] = 'AIzaSyBQYprWiDAw4qSt7ivwRO5EUSL0Q5TQHQs'; // Ваш ключ Google API
	
// 	return $api;
	
// }

// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// проходим по ссылкам
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3 );

function filter_nav_menu_link_attributes($atts, $item, $args) {
    if($args->menu === 'Main') {
        $atts['class'] = 'header__nav-item';

        if($item->current) {
            $atts['class'] .= ' header__nav-item-active';
        }
        if( $item->ID === 174 && ( in_category( 'soft-toys' ) || in_category( 'edu_toys' ))){
            $atts['class'] .= ' header__nav-item-active';
        }
    }
    return $atts;
}

?>

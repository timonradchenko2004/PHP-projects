<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'autotheme_scripts' );

function autotheme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'page-wrapper', get_template_directory_uri() .'/css/page-wrapper.css' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script1', get_template_directory_uri() . '/js/indexjs.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script2', get_template_directory_uri() . '/js/slider.js', array(), '1.0.0', true );

}



?>
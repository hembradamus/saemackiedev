<?php
//functions here, omg craaaaayzaaaay!!

//Add javascript and css
function add_scripts() {
	wp_enqueue_style( 'css', get_bloginfo('stylesheet_directory') . '/style.css' );
	wp_enqueue_script( 'custom-scripts', get_bloginfo('stylesheet_directory') . '/js/scripts-ck.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'bootstrap-script', get_bloginfo('stylesheet_directory') . '/js/bootstrap.min.js' );
}
if ( ! is_admin() ) {
     add_action( 'init', 'add_scripts' );
}
?>
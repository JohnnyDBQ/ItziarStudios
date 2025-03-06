<?php
/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'itziarstudios_scripts' );

function itziarstudios_scripts() {
	wp_enqueue_style( 'itziarstudios-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'itziarstudios-style');

    wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/min/app-min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
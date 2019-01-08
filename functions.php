<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'astra-style'; // This is 'astra-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_theme_support( 'editor-color-palette', array(
    array(
        'name' => __('White', 'genesis-sample' ),
        'slug' => 'white',
        'color' => '#FFFFFF',
    ),
    array(
        'name' => __( 'Mine Shaft', 'genesis-sample' ),
        'slug' => 'mine-shaft',
        'color' => '#4A4A4A',
    ),
    array(
        'name' => __( 'Mongoose', 'genesis-sample' ),
        'slug' => 'mongoose',
        'color' => '#B09F82',
    ),
	array(
        'name' => __( 'Pickled Bean', 'genesis-sample' ),
        'slug' => 'pickled-bean',
        'color' => '#8B572A',
    )
) );
?>
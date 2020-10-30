<?php 

function loadStyleSheets() {

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

}

add_action('wp_enqueue_scripts', 'loadStyleSheets');

function wpb_custom_new_menu() {
  register_nav_menu('hero-menu',__( 'Hero Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );
?>



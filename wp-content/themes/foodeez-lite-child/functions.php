<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'foodeez_lite', get_template_directory_uri().'/style.css' );
}

?>
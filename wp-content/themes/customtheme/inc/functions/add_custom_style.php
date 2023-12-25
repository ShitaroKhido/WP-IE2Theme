<?php
function add_custom_style()
{
    wp_enqueue_style('custom-style', get_theme_file_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'add_custom_style');

<?php

function load_custom_script()
{
    wp_enqueue_style('custom-style-sheet', get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'load_custom_script');


// Path to the functions folder
$functions_folder = get_template_directory() . '/inc/functions/';

// Get all PHP files in the functions folder
$files = glob($functions_folder . '*.php');

// Require each file once
foreach ($files as $file) {
    require_once $file;
}

function custom_menu_order($menu_ord)
{
    if (!$menu_ord) {
        return true;
    }

    return array(
        'index.php', // Dashboard
        'edit.php', // Posts
        'upload.php', // Media
        'edit.php?post_type=page', // Pages
        'edit-comments.php', // Comments
        // 'themes.php', // Appearance
        // 'plugins.php', // Plugins
        // 'users.php', // Users
        // 'options-general.php', // Settings
        // Add or reorder menu items as needed
    );
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');
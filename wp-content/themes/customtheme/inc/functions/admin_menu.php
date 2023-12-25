<?php
function admin_menu()
{

    /**
     * Admin Menu Function
     * Responsible for admin menu part of WP-Admin Page
     * */


    /**
     * Defautl Admin Menu Items: 
     * Dashboard: 'index.php'
     * Posts: 'edit.php'
     * Media: 'upload.php'
     * Pages: 'edit.php?post_type=page'
     * Comments: 'edit-comments.php'
     * Appearance: 'themes.php'
     * Plugins: 'plugins.php'
     * Users: 'users.php'
     * Settings: 'options-general.php' 
     * */

    // Disabled Menu Item:
    remove_menu_page('plugins.php');
    remove_menu_page('themes.php');
    remove_menu_page('users.php');
    remove_submenu_page('index.php', 'update-core.php');


    // add_menu_page(
    //     'page_title', // Title of the page when click on this menu
    //     'menu_title', // Title of menu we will see
    //     'capability', // The capability required for this menu to be displayed to the user or not ex: 'manage_options', manage_options mean user can manage
    //     'menu_slug', // url of menu when users click on this menu, we see this url example page=media
    //     'callback', // Funcation for calling example 'media_admin_page_html',
    //     'icon_url', // Example 'dashicons-admin-media',
    //     'position' // Is numeric example 3
    // );
    // add_submenu_page(
    //     'parent_slug', // The slug name for the parent menu (or the file name of a standard WordPress admin page)
    //     'page_title', // The text to be displayed in the title tags of the page when the menu is selected
    //     'menu_title', // The text to be used for the menu
    //     'capability', // The capability required for this menu to be displayed to the user
    //     'menu_slug', // The slug name to refer to this menu by (should be unique for this menu)
    //     'callback', // The function to be called to output the content for this page.
    //     'position' // The position in the menu order this menu should appear.
    // );






}
add_action('admin_menu', 'admin_menu');

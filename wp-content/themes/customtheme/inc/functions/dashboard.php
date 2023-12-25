<?php

// Remove existing dashboard widgets
function remove_default_dashboard_widgets()
{
    // Remove the 'Right Now' widget
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');

    // Remove the 'Quick Draft' widget
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}
add_action('wp_dashboard_setup', 'remove_default_dashboard_widgets', 999);

// Add a custom dashboard widget
function add_custom_dashboard_widget()
{

    // wp_add_dashboard_widget(
    //     'custom_dashboard_widget_id', // Widget ID
    //     'Custom Widget Title', // Wigdet Title
    //     'custom_dashboard_widget_content' // Callback Func
    // );
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');

<?php
add_action('wp_enqueue_scripts', 'airsoft_scripts');

function airsoft_scripts(): void
{
    wp_enqueue_style('main_styles', get_template_directory_uri() . '/assets/css/style.css');
}

show_admin_bar(false);
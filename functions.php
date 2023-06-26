<?php

function project_register_styles() {
    wp_enqueue_style('project-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('project-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('project-fontawsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'project_register_styles');
?>
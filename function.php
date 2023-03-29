<?php 


function plutoSet() {
    wp_enqueue_script('font_awsome', '//kit.fontawesome.com/52989f7b96.js');
    wp_enqueue_script('bootstrap_scripts', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], false, true);


    wp_enqueue_style('css', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto:wght@400;700&display=swap');
    wp_enqueue_style('boostrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

}


?>
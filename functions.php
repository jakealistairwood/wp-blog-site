<?php 
    function theme_files() {
        wp_enqueue_style('theme_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'theme_files');

    function theme_features() {
        add_theme_support('post-thumbnails');
        add_image_size('bannerImg', 1920, 1080, true);
        add_image_size('featuredLanscape', 1200, 900, true);
        add_image_size('featuredPortrait', 900, 1200, true);
        add_image_size('postImg', 386, 290, true);
        add_image_size('thumbnail', 150, 150, true);
    }

    add_action('after_setup_theme', 'theme_features');
?>
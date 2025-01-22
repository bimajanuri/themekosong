<?php
    function my_theme_setup()
    {
        // Menambahkan dukungan untuk menu
        add_theme_support('menus');
        add_theme_support('post-thumbnails');

        // Mendaftarkan lokasi menu
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'mytheme'),
            'footer' => __('Footer Menu', 'mytheme'),
        ));
    }
    add_action('after_setup_theme', 'my_theme_setup');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary', // Lokasi menu yang didaftarkan di functions.php
                'menu_class' => 'primary-menu', // Kelas CSS untuk elemen menu
                'container' => 'ul', // Gunakan elemen <ul> sebagai wadah menu
                'fallback_cb' => false, // Jangan tampilkan fallback jika menu belum diset
            ));
            ?>
        </nav>
    </header>
</body>

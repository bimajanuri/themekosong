<html>
    <body>
        <footer>
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer', // Lokasi menu yang didaftarkan di functions.php
                    'menu_class' => 'footer-menu', // Kelas CSS untuk elemen menu
                    'container' => 'ul', // Gunakan elemen <ul> sebagai wadah menu
                    'fallback_cb' => false, // Jangan tampilkan fallback jika menu belum diset
                ));
                ?>
            </nav>
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | Semua Hak Cipta Dilindungi</p>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>


<?php

function mentari_school_enqueue_assets() {
    $theme_uri = get_template_directory_uri();

    // CSS utama dan vendor
    wp_enqueue_style(
        'mentari-vendor',
        $theme_uri . '/styles/vendor.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'mentari-main',
        $theme_uri . '/styles/main.css',
        array('mentari-vendor'),
        '1.0.0'
    );

    // Modernizr dimuat di bagian head
    wp_enqueue_script(
        'mentari-modernizr',
        $theme_uri . '/scripts/modernizr.js',
        array(),
        '1.0.0',
        false
    );

    // JavaScript vendor
    wp_enqueue_script(
        'mentari-vendor-js',
        $theme_uri . '/scripts/vendor.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // JavaScript utama, setelah vendor
    wp_enqueue_script(
        'mentari-main-js',
        $theme_uri . '/scripts/main.js',
        array('mentari-vendor-js'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'mentari_school_enqueue_assets');


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

/*** Mentari School - Homepage Customizer ***/
function mentari_school_customize_register( $wp_customize ) {

    // Panel pengaturan homepage
    $wp_customize->add_section( 'mentari_homepage_section', array(
        'title'    => 'Homepage Mentari School',
        'priority' => 30,
    ) );

    // Pengaturan judul hero
    $wp_customize->add_setting( 'mentari_main_hero_title', array(
        'default'           => 'More than lessons. It’s life.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'mentari_hero_title_control', array(
        'label'       => 'Judul Hero Homepage',
        'section'     => 'mentari_homepage_section',
        'settings'    => 'mentari_main_hero_title',
        'type'        => 'text',
        'description' => 'Ubah judul utama yang tampil di bagian hero homepage.',
    ) );

}
add_action( 'customize_register', 'mentari_school_customize_register' );

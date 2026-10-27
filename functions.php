<?php

function mentari_school_enqueue_assets()
{
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
function mentari_school_customize_register($wp_customize)
{

    // Panel pengaturan homepage
    $wp_customize->add_section('mentari_homepage_section', array(
        'title' => 'Homepage Mentari School',
        'priority' => 30,
    ));

    // Pengaturan judul hero
    $wp_customize->add_setting('mentari_main_hero_title', array(
        'default' => 'More than lessons. It’s life.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('mentari_hero_title_control', array(
        'label' => 'Judul Hero Homepage',
        'section' => 'mentari_homepage_section',
        'settings' => 'mentari_main_hero_title',
        'type' => 'text',
        'description' => 'Ubah judul utama yang tampil di bagian hero homepage.',
    ));

    // Pengaturan deskripsi hero
    $wp_customize->add_setting('mentari_main_hero_description', array(
        'default' => 'At MIS, learning goes beyond the classroom—nurturing minds, building characters, and shaping futures.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('mentari_hero_description_control', array(
        'label' => 'Deskripsi Hero Homepage',
        'section' => 'mentari_homepage_section',
        'settings' => 'mentari_main_hero_description',
        'type' => 'textarea',
        'description' => 'Ubah deskripsi yang tampil di bawah judul utama homepage.',
    ));


    // Pengaturan gambar slide 1 hero
    $wp_customize->add_setting('mentari_hero_slide_1_image', array(
        'default' => 'https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/ab3c27cc-230e-4a3b-b217-5118e9f7e903/HeroPage2%402x.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'mentari_hero_slide_1_image_control',
            array(
                'label' => 'Gambar Hero Slide 1',
                'section' => 'mentari_homepage_section',
                'settings' => 'mentari_hero_slide_1_image',
            )
        )
    );


    // Pengaturan gambar slide 2 sampai 5
    $hero_slides = array(
        2 => 'https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/3ed09e47-5337-4d3c-8f42-775ec47323bd/Teaching+142.jpg',
        3 => 'https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/b2ac868c-6af4-4273-b5a2-fe1d37ff187a/HS+Inspiring.jpg',
        4 => 'https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/2c601019-8f7e-49d9-b418-5f9477ed8e5b/MENTARISHOW-262.JPG',
        5 => 'https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1576ef94-cf1a-4ef4-86e4-2411b5967bb8/High+School+2.jpg',
    );

    foreach ($hero_slides as $number => $default_image) {
        $setting_id = 'mentari_hero_slide_' . $number . '_image';

        $wp_customize->add_setting($setting_id, array(
            'default' => $default_image,
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                $setting_id . '_control',
                array(
                    'label' => 'Gambar Hero Slide ' . $number,
                    'section' => 'mentari_homepage_section',
                    'settings' => $setting_id,
                )
            )
        );
    }

    // Pengaturan tombol Admission
    $wp_customize->add_setting('mentari_hero_admission_button_text', array(
        'default' => 'Admission',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('mentari_hero_admission_button_text_control', array(
        'label' => 'Teks Tombol Admission',
        'section' => 'mentari_homepage_section',
        'settings' => 'mentari_hero_admission_button_text',
        'type' => 'text',
    ));

    $wp_customize->add_setting('mentari_hero_admission_button_url', array(
        'default' => '#admission',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('mentari_hero_admission_button_url_control', array(
        'label' => 'Link Tombol Admission',
        'section' => 'mentari_homepage_section',
        'settings' => 'mentari_hero_admission_button_url',
        'type' => 'text',
    ));


    // Pengaturan tombol Watch Story
    $wp_customize->add_setting('mentari_hero_story_button_text', array(
        'default' => 'Watch Story',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('mentari_hero_story_button_text_control', array(
        'label' => 'Teks Tombol Watch Story',
        'section' => 'mentari_homepage_section',
        'settings' => 'mentari_hero_story_button_text',
        'type' => 'text',
    ));

    $wp_customize->add_setting('mentari_hero_story_button_url', array(
        'default' => '#listen-video',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('mentari_hero_story_button_url_control', array(
        'label' => 'Link Tombol Watch Story',
        'section' => 'mentari_homepage_section',
        'settings' => 'mentari_hero_story_button_url',
        'type' => 'text',
    ));

    // Pengaturan teks badge hero
    $wp_customize->add_setting('mentari_hero_badge_text', array(
        'default' => 'IB World School & Cambridge Accredited',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('mentari_hero_badge_text_control', array(
        'label' => 'Teks Badge Hero',
        'section' => 'mentari_homepage_section',
        'settings' => 'mentari_hero_badge_text',
        'type' => 'text',
    ));

    // Statistik hero 1
    $hero_stats = array(
        1 => array(
            'value' => '30+ Years',
            'label' => 'Educational Legacy',
        ),
        2 => array(
            'value' => '100+',
            'label' => 'Top Uni Placements',
        ),
        3 => array(
            'value' => '3',
            'label' => 'Campuses in Jakarta',
        ),
    );

    foreach ($hero_stats as $number => $stat) {
        $value_id = 'mentari_hero_stat_' . $number . '_value';
        $label_id = 'mentari_hero_stat_' . $number . '_label';

        $wp_customize->add_setting($value_id, array(
            'default' => $stat['value'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($value_id . '_control', array(
            'label' => 'Statistik ' . $number . ' - Angka',
            'section' => 'mentari_homepage_section',
            'settings' => $value_id,
            'type' => 'text',
        ));

        $wp_customize->add_setting($label_id, array(
            'default' => $stat['label'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($label_id . '_control', array(
            'label' => 'Statistik ' . $number . ' - Keterangan',
            'section' => 'mentari_homepage_section',
            'settings' => $label_id,
            'type' => 'text',
        ));
    }

    // SECTION 2: PURPOSE & IB DP SCORE

    $purpose_settings = array(
        'mentari_purpose_label' => array(
            'label' => 'Purpose - Label',
            'default' => 'Our Mission & Purpose',
        ),
        'mentari_purpose_title' => array(
            'label' => 'Purpose - Judul',
            'default' => 'Nurturing Both Mind and Heart',
        ),
        'mentari_purpose_paragraph_1' => array(
            'label' => 'Purpose - Paragraf Utama',
            'default' => 'Mentari Intercultural School was founded with a clear purpose: to nurture both the mind and the heart. We offer a values-driven, globally minded education that empowers students to grow with purpose, reach their full potential, and become compassionate leaders who make a difference in their communities and the world.',
        ),
        'mentari_purpose_paragraph_2' => array(
            'label' => 'Purpose - Paragraf Kedua',
            'default' => 'Curious about who we are and what we believe in? Let’s take you there.',
        ),
        'mentari_purpose_button_text' => array(
            'label' => 'Purpose - Teks Tombol',
            'default' => 'Learn More',
        ),
        'mentari_purpose_button_url' => array(
            'label' => 'Purpose - Link Tombol',
            'default' => 'mis-story.html',
        ),
    );

    foreach ($purpose_settings as $setting_id => $item) {
        $is_url = ('mentari_purpose_button_url' === $setting_id);

        $wp_customize->add_setting($setting_id, array(
            'default' => $item['default'],
            'sanitize_callback' => $is_url
                ? 'esc_url_raw'
                : 'sanitize_text_field',
        ));

        $wp_customize->add_control($setting_id . '_control', array(
            'label' => $item['label'],
            'section' => 'mentari_homepage_section',
            'settings' => $setting_id,
            'type' => 'text',
        ));
    }

    // Gambar IB DP Score
    $wp_customize->add_setting('mentari_purpose_score_image', array(
        'default' => 'https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/b4ca3fd0-d14d-4be3-b507-849bb6c1c95c/MISJ+IB+DP+Score+2025+%281%29.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'mentari_purpose_score_image_control',
            array(
                'label' => 'Purpose - Gambar IB DP Score',
                'section' => 'mentari_homepage_section',
                'settings' => 'mentari_purpose_score_image',
            )
        )
    );


    // SECTION 3: OVER 27 YEARS OF DEDICATION

    $dedication_settings = array(
        'mentari_dedication_label' => array(
            'label' => 'Dedication - Label',
            'default' => 'Excellence in Education',
        ),
        'mentari_dedication_title' => array(
            'label' => 'Dedication - Judul',
            'default' => 'Over 27 Years of Dedication',
        ),
        'mentari_dedication_description' => array(
            'label' => 'Dedication - Deskripsi',
            'default' => 'Empowering generations of confident, empathetic, and future-ready thinkers.',
        ),
        'mentari_dedication_card_1_title' => array(
            'label' => 'Dedication - Kartu 1 Judul',
            'default' => 'Teaching',
        ),
        'mentari_dedication_card_1_description' => array(
            'label' => 'Dedication - Kartu 1 Deskripsi',
            'default' => 'Inspiring a lifelong love of learning.',
        ),
        'mentari_dedication_card_2_title' => array(
            'label' => 'Dedication - Kartu 2 Judul',
            'default' => 'Inspiring',
        ),
        'mentari_dedication_card_2_description' => array(
            'label' => 'Dedication - Kartu 2 Deskripsi',
            'default' => 'Encouraging students to discover their potential.',
        ),
        'mentari_dedication_card_3_title' => array(
            'label' => 'Dedication - Kartu 3 Judul',
            'default' => 'Caring',
        ),
        'mentari_dedication_card_3_description' => array(
            'label' => 'Dedication - Kartu 3 Deskripsi',
            'default' => 'Building a supportive and caring community.',
        ),
    );

    foreach ($dedication_settings as $setting_id => $item) {
        $wp_customize->add_setting($setting_id, array(
            'default' => $item['default'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($setting_id . '_control', array(
            'label' => $item['label'],
            'section' => 'mentari_homepage_section',
            'settings' => $setting_id,
            'type' => 'text',
        ));
    }


}
add_action('customize_register', 'mentari_school_customize_register');

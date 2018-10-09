<?php

$options = array();

$boxed_enabled = array(
    'setting'  => 'jnews_boxed_layout',
    'operator' => '==',
    'value'    => true,
);

$ad_size = array(
    'auto'                  =>  'Auto',
    'hide'                  =>  'Hide',
    '120x90'                =>  '120 x 90',
    '120x240'               =>  '120 x 240',
    '120x600'               =>  '120 x 600',
    '125x125'               =>  '125 x 125',
    '160x90'                =>  '160 x 90',
    '160x600'               =>  '160 x 600',
    '180x90'                =>  '180 x 90',
    '180x150'               =>  '180 x 150',
    '200x90'                =>  '200 x 90',
    '200x200'               =>  '200 x 200',
    '234x60'                =>  '234 x 60',
    '250x250'               =>  '250 x 250',
    '320x100'               =>  '320 x 100',
    '300x250'               =>  '300 x 250',
    '300x600'               =>  '300 x 600',
    '320x50'                =>  '320 x 50',
    '336x280'               =>  '336 x 280',
    '468x15'                =>  '468 x 15',
    '468x60'                =>  '468 x 60',
    '728x15'                =>  '728 x 15',
    '728x90'                =>  '728 x 90',
    '970x90'                =>  '970 x 90',
    '970x250'               =>  '970 x 250',
    '240x400'               =>  '240 x 400',
    '250x360'               =>  '250 x 360',
    '580x400'               =>  '580 x 400',
    '750x100'               =>  '750 x 100',
    '750x200'               =>  '750 x 200',
    '750x300'               =>  '750 x 300',
    '980x120'               =>  '980 x 120',
    '930x180'               =>  '930 x 180',
);

$options[] = array(
    'id'            => 'jnews_background_ads_header',
    'type'          => 'jnews-header',
    'label'         => esc_html__('Background Advertisement','jnews' ),
);

$options[] = array(
    'id'            => 'jnews_background_ads_enable',
    'transport'     => 'postMessage',
    'default'       => true,
    'type'          => 'jnews-toggle',
    'label'         => esc_html__('Show Background Advertisement','jnews'),
);

$options[] = array(
    'id'            => 'jnews_background_ads_type',
    'transport'     => 'postMessage',
    'default'       => 'image',
    'type'          => 'jnews-radio',
    'label'         => esc_html__('Background advertisement type','jnews'),
    'description'   => esc_html__('Choose which type of advertisement you want to use.','jnews'),
    'multiple'      => 1,
    'choices'       => array(
        'image'         => esc_attr__( 'Image Ads', 'jnews' ),
        'code'          => esc_attr__( 'Script Code', 'jnews' ),
        'shortcode'     => esc_attr__( 'Shortcode', 'jnews' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_background_ads_enable',
            'operator' => '==',
            'value'    => true,
        ),
        $boxed_enabled
    ),
);


$options[] = array(
    'id'            => 'jnews_background_ads_header_alert',
    'type'          => 'jnews-alert',
    'default'       => 'info',
    'label'         => esc_html__('Background Ad\'s Image','jnews' ),
    'description'   => wp_kses(__("You can set your image background from <strong>JNews : Layout, Color & Scheme</strong> &raquo; <strong>Layout & Background</strong>.", 'jnews'), wp_kses_allowed_html()),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_background_ads_enable',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'jnews_background_ads_type',
            'operator' => '==',
            'value'    => 'image',
        ),
        $boxed_enabled
    ),
);

$options[] = array(
    'id'            => 'jnews_background_ads_url',
    'transport'     => 'postMessage',
    'default'       => '',
    'type'          => 'jnews-text',
    'label'         => esc_html__('Background Ad\'s URL','jnews'),
    'description'   => esc_html__('Put your Background Ad\'s URL.','jnews' ),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_background_ads_enable',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'jnews_background_ads_type',
            'operator' => '==',
            'value'    => 'image',
        ),
        $boxed_enabled
    ),
);

$options[] = array(
    'id'            => 'jnews_background_ads_open_tab',
    'transport'     => 'postMessage',
    'default'       => false,
    'type'          => 'jnews-toggle',
    'label'         => esc_html__('Open URL on New Tab', 'jnews'),
    'description'   => esc_html__('Open advertisement\'s URL in new tab.', 'jnews'),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_background_ads_enable',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'jnews_background_ads_type',
            'operator' => '==',
            'value'    => 'image',
        ),
        $boxed_enabled
    ),
);

// CODE

$options[] = array(
    'id'            => 'jnews_background_ads_code',
    'transport'     => 'postMessage',
    'default'       => '',
    'type'          => 'jnews-textarea',
    'label'         => esc_html__('Ads code', 'jnews'),
    'description'   => esc_html__('Put your ad\'s script code right here.', 'jnews'),
    'active_callback' => array(
        array(
            'setting'  => 'jnews_background_ads_enable',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'jnews_background_ads_type',
            'operator' => '==',
            'value'    => 'code',
        ),
        $boxed_enabled
    ),
);

// SHORTCODE

$options[] = array(
    'id'            => 'jnews_background_ads_shortcode',
    'transport'     => 'postMessage',
    'default'       => '',
    'type'          => 'jnews-textarea',
    'label'         => esc_html__('Advertisement code', 'jnews'),
    'description'   => esc_html__('Put your shortcode ads right here.', 'jnews'),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_background_ads_enable',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'jnews_background_ads_type',
            'operator' => '==',
            'value'    => 'shortcode',
        ),
        $boxed_enabled
    ),
);


$above_footer = new \JNews\Customizer\AdsOptionGenerator(array(
    'location' => 'above_footer',
    'title' => esc_html__('Above Footer', 'jnews'),
    'default_size' => '970x90',
    'visibility' => array(
        'desktop' => true,
        'tab' => true,
        'phone' => true
    ),
));

$archive_above_content = new \JNews\Customizer\AdsOptionGenerator(array(
    'location' => 'archive_above_content',
    'title' => esc_html__('Above Archive', 'jnews'),
    'default_size' => '728x90',
    'visibility' => array(
        'desktop' => true,
        'tab' => true,
        'phone' => true
    ),
    'postvar' => array(
        array(
            'redirect'  => 'archive_tag',
            'refresh'   => false
        )
    )
));

return array_merge(
    $options,
    $above_footer->ads_option_generator(),
    $archive_above_content->ads_option_generator()
);
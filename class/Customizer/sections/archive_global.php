<?php

$options = array();

$all_sidebar = apply_filters('jnews_get_sidebar_widget', null);

// sidebar section
$options[] = array(
    'id'            => 'jnews_archive_sidebar_section',
    'type'          => 'jnews-header',
    'label'         => esc_html__('Archive Sidebar','jnews' ),
);

$options[] = array(
    'id'            => 'jnews_archive_page_layout',
    'transport'     => 'postMessage',
    'default'       => 'right-sidebar',
    'type'          => 'jnews-radio-image',
    'label'         => esc_html__('Page Layout','jnews' ),
    'description'   => esc_html__('Choose your page layout.','jnews' ),
    'choices'       => array(
        'right-sidebar'         => '',
        'left-sidebar'          => '',
        'right-sidebar-narrow'  => '',
        'left-sidebar-narrow'   => '',
        'double-sidebar'        => '',
        'double-right-sidebar'  => '',
        'no-sidebar'            => ''
    ),
    'postvar'       => array(
        array(
            'redirect'  => 'archive_tag',
            'refresh'   => true
        )
    )
);

$options[] = array(
    'id'            => 'jnews_archive_sidebar',
    'transport'     => 'postMessage',
    'default'       => 'default-sidebar',
    'type'          => 'jnews-select',
    'label'         => esc_html__('Archive Sidebar','jnews'),
    'description'   => wp_kses(__("Choose your archive sidebar. If you need another sidebar, you can create from <strong>WordPress Admin</strong> &raquo; <strong>Appearance</strong> &raquo; <strong>Widget</strong>.", 'jnews'), wp_kses_allowed_html()),
    'multiple'      => 1,
    'choices'       => $all_sidebar,
    'postvar'       => array(
        array(
            'redirect'  => 'archive_tag',
            'refresh'   => true
        )
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_archive_page_layout',
            'operator' => '!=',
            'value'    => 'no-sidebar',
        )
    ),
);

$options[] = array(
    'id'            => 'jnews_archive_second_sidebar',
    'transport'     => 'postMessage',
    'default'       => 'default-sidebar',
    'type'          => 'jnews-select',
    'label'         => esc_html__('Second Archive Sidebar','jnews'),
    'description'   => wp_kses(__("Choose your second sidebar for archive page. If you need another sidebar, you can create from <strong>WordPress Admin</strong> &raquo; <strong>Appearance</strong> &raquo; <strong>Widget</strong>.", 'jnews'), wp_kses_allowed_html()),
    'multiple'      => 1,
    'choices'       => $all_sidebar,
    'postvar'       => array(
        array(
            'redirect'  => 'archive_tag',
            'refresh'   => true
        )
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_archive_page_layout',
            'operator' => 'in',
            'value'    => array('double-sidebar', 'double-right-sidebar'),
        )
    ),
);

$options[] = array(
    'id'            => 'jnews_archive_sticky_sidebar',
    'transport'     => 'postMessage',
    'default'       => true,
    'type'          => 'jnews-toggle',
    'label'         => esc_html__('Archive Sticky Sidebar','jnews'),
    'description'   => esc_html__('Enable sticky sidebar.','jnews'),
    'postvar'       => array(
        array(
            'redirect'  => 'archive_tag',
            'refresh'   => true
        )
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_archive_page_layout',
            'operator' => '!=',
            'value'    => 'no-sidebar',
        )
    ),
);

// content type
$options[] = array(
    'id'            => 'jnews_archive_content_section',
    'type'          => 'jnews-header',
    'label'         => esc_html__('Archive Content','jnews' ),
);

$options[] = array(
    'id'            => 'jnews_archive_content',
    'transport'     => 'postMessage',
    'default'       => '3',
    'type'          => 'jnews-radio-image',
    'label'         => esc_html__('Archive Content Layout','jnews'),
    'description'   => esc_html__('Choose your archive content layout.','jnews'),
    'multiple'      => 1,
    'choices'       => array(
        '3'  => '',
        '4'  => '',
        '5'  => '',
        '6'  => '',
        '7'  => '',
        '9'  => '',
        '10' => '',
        '11' => '',
        '12' => '',
        '14' => '',
        '15' => '',
        '18' => '',
        '22' => '',
        '23' => '',
        '25' => '',
        '26' => '',
        '27' => '',
        '32' => '',
        '33' => '',
        '34' => '',
        '35' => '',
        '36' => '',
        '37' => ''
    ),
    'partial_refresh' => array (
        'jnews_archive_content' => array (
            'selector'        => '.jnews_archive_content_wrapper',
            'render_callback' => function() {
                $single = new \JNews\Archive\SingleArchive();
                echo jnews_sanitize_output($single->render_content());
            },
        )
    ),
    'postvar'       => array( array(
        'redirect'  => 'archive_tag',
        'refresh'   => false
    ) )
);

$options[] = array(
	'id'            => 'jnews_archive_boxed',
	'transport'     => 'postMessage',
	'default'       => false,
	'type'          => 'jnews-toggle',
	'label'         => esc_html__('Enable Boxed','jnews'),
	'description'   => esc_html__('This option will turn the module into boxed.','jnews'),
	'partial_refresh' => array (
		'jnews_archive_boxed' => array (
			'selector'        => '.jnews_archive_content_wrapper',
			'render_callback' => function() {
				$single = new \JNews\Archive\SingleArchive();
				echo jnews_sanitize_output($single->render_content());
			},
		)
	),
	'postvar' => array(
		array(
			'redirect'  => 'archive_tag',
			'refresh'   => false
		)
	),
	'active_callback'  => array(
		array(
			'setting'  => 'jnews_archive_content',
			'operator' => 'in',
			'value'    => array('3','4','5','6','7','9','10','14','18','22','23','25','26','27')
		)
	),
);

$options[] = array(
	'id'            => 'jnews_archive_boxed_shadow',
	'transport'     => 'postMessage',
	'default'       => false,
	'type'          => 'jnews-toggle',
	'label'         => esc_html__('Enable Shadow','jnews'),
	'description'   => esc_html__('Enable shadow on the module template.','jnews'),
	'partial_refresh' => array (
		'jnews_archive_boxed_shadow' => array (
			'selector'        => '.jnews_archive_content_wrapper',
			'render_callback' => function() {
				$single = new \JNews\Archive\SingleArchive();
				echo jnews_sanitize_output($single->render_content());
			},
		)
	),
	'postvar' => array(
		array(
			'redirect'  => 'archive_tag',
			'refresh'   => false
		)
	),
	'active_callback'  => array(
		array(
			'setting'  => 'jnews_archive_content',
			'operator' => 'in',
			'value'    => array('3','4','5','6','7','9','10','14','18','22','23','25','26','27')
		),
		array(
			'setting'  => 'jnews_archive_boxed',
			'operator' => '==',
			'value'    => true
		)
	),
);

$options[] = array(
	'id'            => 'jnews_archive_box_shadow',
	'transport'     => 'postMessage',
	'default'       => false,
	'type'          => 'jnews-toggle',
	'label'         => esc_html__('Enable Shadow','jnews'),
	'description'   => esc_html__('Enable shadow on the module template.','jnews'),
	'partial_refresh' => array (
		'jnews_archive_box_shadow' => array (
			'selector'        => '.jnews_archive_content_wrapper',
			'render_callback' => function() {
				$single = new \JNews\Archive\SingleArchive();
				echo jnews_sanitize_output($single->render_content());
			},
		)
	),
	'postvar' => array(
		array(
			'redirect'  => 'archive_tag',
			'refresh'   => false
		)
	),
	'active_callback'  => array(
		array(
			'setting'  => 'jnews_archive_content',
			'operator' => 'in',
			'value'    => array('37','35','33','36','32','38')
		)
	),
);

$options[] = array(
    'id'            => 'jnews_archive_content_excerpt',
    'transport'     => 'postMessage',
    'default'       => 20,
    'type'          => 'jnews-number',
    'label'         => esc_html__('Excerpt Length', 'jnews'),
    'description'   => esc_html__('Set word length of excerpt on post.', 'jnews'),
    'choices'     => array(
        'min'  => '0',
        'max'  => '200',
        'step' => '1',
    ),
    'partial_refresh' => array (
        'jnews_archive_content_excerpt' => array (
            'selector'        => '.jnews_archive_content_wrapper',
            'render_callback' => function() {
                $single = new \JNews\Archive\SingleArchive();
                echo jnews_sanitize_output($single->render_content());
            },
        )
    ),
    'postvar'       => array( array(
        'redirect'  => 'archive_tag',
        'refresh'   => false
    ) )
);

$options[] = array(
    'id'            => 'jnews_archive_content_date',
    'transport'     => 'postMessage',
    'default'       => 'default',
    'type'          => 'jnews-select',
    'label'         => esc_html__('Content Date Format','jnews'),
    'description'   => esc_html__('Choose which date format you want to use for archive content.','jnews'),
    'multiple'      => 1,
    'choices'       => array(
        'ago' => esc_attr__( 'Relative Date/Time Format (ago)', 'jnews' ),
        'default' => esc_attr__( 'WordPress Default Format', 'jnews' ),
        'custom' => esc_attr__( 'Custom Format', 'jnews' ),
    ),
    'partial_refresh' => array (
        'jnews_archive_content_date' => array (
            'selector'        => '.jnews_archive_content_wrapper',
            'render_callback' => function() {
                $single = new \JNews\Archive\SingleArchive();
                echo jnews_sanitize_output($single->render_content());
            },
        )
    ),
    'postvar'       => array(
        array(
            'redirect'  => 'archive_tag',
            'refresh'   => false
        )
    )
);

$options[] = array(
    'id'            => 'jnews_archive_content_date_custom',
    'transport'     => 'postMessage',
    'default'       => 'Y/m/d',
    'type'          => 'jnews-text',
    'label'         => esc_html__('Custom Date Format for Content','jnews'),
    'description'   => wp_kses(sprintf(__("Please set custom date format for post content. For more detail about this format, please refer to
                                <a href='%s' target='_blank'>Developer Codex</a>.", "jnews"), "https://developer.wordpress.org/reference/functions/current_time/"),
        wp_kses_allowed_html()),
    'postvar'       => array(
        array(
            'redirect'  => 'archive_tag',
            'refresh'   => false
        )
    ),
    'partial_refresh' => array (
        'jnews_archive_content_date_custom' => array (
            'selector'        => '.jnews_archive_content_wrapper',
            'render_callback' => function() {
                $single = new \JNews\Archive\SingleArchive();
                echo jnews_sanitize_output($single->render_content());
            },
        )
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_archive_content_date',
            'operator' => '==',
            'value'    => 'custom',
        )
    ),
);

$options[] = array(
    'id'            => 'jnews_archive_content_pagination',
    'transport'     => 'postMessage',
    'default'       => 'nav_1',
    'type'          => 'jnews-select',
    'label'         => esc_html__('Choose Pagination Mode','jnews'),
    'description'   => esc_html__('Choose which pagination mode that fit with your archive content.','jnews'),
    'multiple'      => 1,
    'choices'       => array(
        'nav_1' => esc_attr__( 'Normal - Navigation 1', 'jnews' ),
        'nav_2' => esc_attr__( 'Normal - Navigation 2', 'jnews' ),
        'nav_3' => esc_attr__( 'Normal - Navigation 3', 'jnews' ),
    ),
    'output'     => array(
        array(
            'method'        => 'class-masking',
            'element'       => '.jeg_navigation.jeg_pagination',
            'property'      => array(
                'nav_1'         => 'jeg_pagenav_1',
                'nav_2'         => 'jeg_pagenav_2',
                'nav_3'         => 'jeg_pagenav_3',
            ),
        ),
    ),
    'postvar'       => array(
        array(
            'redirect'  => 'archive_tag',
            'refresh'   => false
        )
    ),
);

$options[] = array(
    'id'            => 'jnews_archive_content_pagination_align',
    'transport'     => 'postMessage',
    'default'       => 'center',
    'type'          => 'jnews-select',
    'label'         => esc_html__('Pagination Align','jnews'),
    'description'   => esc_html__('Choose pagination alignment.','jnews'),
    'multiple'      => 1,
    'choices'       => array(
        'left' => esc_attr__( 'Left', 'jnews' ),
        'center' => esc_attr__( 'Center', 'jnews' ),
    ),
    'postvar'       => array(
        array(
            'redirect'  => 'archive_tag',
            'refresh'   => false
        )
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_archive_content_pagination',
            'operator' => 'in',
            'value'    => array('nav_1', 'nav_2', 'nav_3'),
        )
    ),
    'output'     => array(
        array(
            'method'        => 'class-masking',
            'element'       => '.jeg_navigation.jeg_pagination',
            'property'      => array(
                'left'          => 'jeg_alignleft',
                'center'        => 'jeg_aligncenter',
            ),
        ),
    ),
);

$options[] = array(
    'id'            => 'jnews_archive_content_pagination_show_navtext',
    'transport'     => 'postMessage',
    'default'       => false,
    'type'          => 'jnews-toggle',
    'label'         => esc_html__('Show Navigation Text','jnews'),
    'description'   => esc_html__('Show navigation text (next, prev).','jnews'),
    'postvar'       => array( array(
        'redirect'  => 'archive_tag',
        'refresh'   => false
    ) ),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_archive_content_pagination',
            'operator' => 'in',
            'value'    => array('nav_1', 'nav_2', 'nav_3'),
        )
    ),
    'output'     => array(
        array(
            'method'        => 'remove-class',
            'element'       => '.jeg_navigation.jeg_pagination ',
            'property'      => 'no_navtext',
        )
    ),
);

$options[] = array(
    'id'            => 'jnews_archive_content_pagination_show_pageinfo',
    'transport'     => 'postMessage',
    'default'       => false,
    'type'          => 'jnews-toggle',
    'label'         => esc_html__('Show Page Info','jnews'),
    'description'   => esc_html__('Show page info text (Page x of y).','jnews'),
    'postvar'       => array( array(
        'redirect'  => 'archive_tag',
        'refresh'   => false
    ) ),
    'active_callback'  => array(
        array(
            'setting'  => 'jnews_archive_content_pagination',
            'operator' => 'in',
            'value'    => array('nav_1', 'nav_2', 'nav_3'),
        )
    ),
    'output'     => array(
        array(
            'method'        => 'remove-class',
            'element'       => '.jeg_navigation.jeg_pagination ',
            'property'      => 'no_pageinfo',
        )
    ),
);

return $options;

<?php

$options = array();

$options[] = array(
	'id'            => 'jnews_global_post_date',
	'transport'     => 'refresh',
	'default'       => 'modified',
	'type'          => 'jnews-select',
	'section'       => 'jnews_global_loader_section',
	'label'         => esc_html__('Post Date Meta','jnews'),
	'description'   => esc_html__('Choose which post date type that you want to show for global post date meta.','jnews'),
	'choices'       => array(
		'publish' => esc_attr__( 'Publish Date', 'jnews' ),
		'modified' => esc_attr__( 'Modified Date', 'jnews' ),
	)
);

return $options;
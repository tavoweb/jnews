<?php

$options = array();

$options[] = array(
	'id'            => 'jnews_google_analytics_code',
	'transport'     => 'refresh',
	'default'       => '',
	'type'          => 'jnews-text',
	'label'         => esc_html__('Google analytics code', 'jnews'),
	'description'   => esc_html__('Insert your google analytics code right here', 'jnews'),
);

return $options;
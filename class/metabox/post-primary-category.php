<?php

return array(
    'id'          => 'jnews_primary_category',
    'types'       => array('post'),
    'title'       => esc_html__('JNews : Primary Category', 'jnews'),
    'priority'    => 'high',
    'context'     => 'side',
    'template'    => array(

        array(
            'type' => 'singletermhierarchy',
            'name' => 'id',
            'label' => esc_html__('Primary Category', 'jnews'),
            'description' => wp_kses(__('You can search the post category by <strong>inputting the category name</strong>, clicking search result, and you will have your post category.<br>Primary category will show as your <strong>breadcrumb</strong> category on single Blog Post. <br/> Other <strong>page that require single category</strong> to show, this category will be used.', 'jnews'), wp_kses_allowed_html()),
            'multiple' => false,
            'items' => array(
	            'data' => array(
		            array(
			            'source' => 'function',
			            'value'  => 'jnews_get_categories_selectize',
		            ),
	            ),
            ),
        ),

    ),
);


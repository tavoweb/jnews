<?php

if(!function_exists('jnews_get_mega_menu_option'))
{
    function jnews_get_mega_menu_option()
    {
        return array(
            esc_html__('Mega Menu Category', 'jnews') => array(
                'type' => array (
                    'type' => 'radioimage',
                    'title' => esc_html__('Mega Menu Type', 'jnews'),
                    'desc' => esc_html__('Choose which mega menu type you want to use in this menu.', 'jnews'),
                    'default' => 'disable',
                    'options' => array (
                        'disable'       => JNEWS_THEME_URL . '/assets/img/admin/megamenu-none.png',
                        'category_1'    => JNEWS_THEME_URL . '/assets/img/admin/megamenu-1.png',
                        'category_2'    => JNEWS_THEME_URL . '/assets/img/admin/megamenu-2.png',
                        'custom'        => JNEWS_THEME_URL . '/assets/img/admin/megamenu-custom.png',
                    ),
                    'name' => 'type'
                ),
                'custom_mega' => array (
                    'type' => 'select',
                    'title' => esc_html__('Custom Mega Menu', 'jnews'),
                    'desc' => esc_html__('choose which mega menu page you want to use','jnews'),
                    'default' => '',
                    'options' => call_user_func(function(){
                        $post = get_posts(array(
                            'posts_per_page'   => -1,
                            'post_type'        => 'custom-mega-menu',
                        ));

                        $footer = array();
                        $footer[] = esc_html__('Choose Mega Menu', 'jnews');

                        if($post) {
                            foreach($post as $value) {
                                $footer[$value->ID] = $value->post_title;
                            }
                        }

                        return $footer;
                    }),
                    'name' => 'category2',
                    'dependency'  => array(
                        array(
                            'field'    => 'type',
                            'operator' => 'in',
                            'value'    => array('custom')
                        ),
                    ),
                ),
                'category' => array (
                    'type' => 'singlecategory',
                    'title' => esc_html__('Choose Category', 'jnews'),
                    'desc' => esc_html__('Choose which category you want to use for this mega menu.', 'jnews'),
                    'default' => '',
                    'options' => array_flip(jnews_get_all_category()),
                    'name' => 'category',
                    'dependency'  => array(
                        array(
                            'field'    => 'type',
                            'operator' => 'in',
                            'value'    => array('category_1', 'category_2')
                        ),
                    ),
                ),
                'number' => array (
                    'type' => 'slider',
                    'title' => esc_html__('Number of Post', 'jnews'),
                    'desc' => esc_html__('Set max number show for mega menu.', 'jnews'),
                    'default' => 9,
                    'options' => array(
                        'min' => 1,
                        'max' => 20,
                        'step' => 1
                    ),
                    'name' => 'number',
                    'dependency'  => array(
                        array(
                            'field'    => 'type',
                            'operator' => 'in',
                            'value'    => array('category_1', 'category_2')
                        ),
                    ),
                ),
                'override_item_row' => array (
                    'type' => 'checkbox',
                    'title' => esc_html__('Override Number of row', 'jnews'),
                    'desc' => esc_html__('override default number item per row', 'jnews'),
                    'default' => false,
                    'name' => 'override_item_row',
                    'dependency'  => array(
                        array(
                            'field'    => 'type',
                            'operator' => '==',
                            'value'    => 'category_1'
                        ),
                    ),
                ),
                'item_row' => array (
                    'type' => 'slider',
                    'title' => esc_html__('Number of item per Row', 'jnews'),
                    'desc' => esc_html__('Set total item per row', 'jnews'),
                    'default' => 3,
                    'options' => array(
                        'min' => 3,
                        'max' => 8,
                        'step' => 1
                    ),
                    'name' => 'item_row',
                    'dependency'  => array(
                        array(
                            'field'    => 'override_item_row',
                            'operator' => '==',
                            'value'    => true
                        ),
                        array(
                            'field'    => 'type',
                            'operator' => '==',
                            'value'    => 'category_1'
                        ),
                    ),
                ),
                'trending_tag' => array (
                    'type' => 'multitag',
                    'title' => esc_html__('Trending Tag', 'jnews'),
                    'desc' => esc_html__('Write to search post tag.','jnews'),
                    'name' => 'trending_tag',
                    'options' => array_flip(jnews_get_all_tag()),
                    'default' => '',
                    'dependency'  => array(
                        array(
                            'field'    => 'type',
                            'operator' => '==',
                            'value'    => 'category_2'
                        ),
                    ),
                ),
            ),

            esc_html__('Child Level Mega Menu', 'jnews') => array(
                'child_mega' => array (
                    'type' => 'radioimage',
                    'title' => esc_html__('Mega Menu Child', 'jnews'),
                    'desc' => esc_html__('Set mega menu for this menu child.', 'jnews'),
                    'default' => 'disable',
                    'options' => array (
                        'disable'   => JNEWS_THEME_URL . '/assets/img/admin/megamenu-none.png',
                        'two_row'   => JNEWS_THEME_URL . '/assets/img/admin/menuchild-2col.png',
                        'three_row' => JNEWS_THEME_URL . '/assets/img/admin/menuchild-3col.png',
                        'four_row'  => JNEWS_THEME_URL . '/assets/img/admin/menuchild-4col.png',
                    ),
                    'name' => 'child_mega'
                ),
            ),


            esc_html__('Menu Icon', 'jnews') => array(
                'enable_icon' => array (
                    'type' => 'checkbox',
                    'title' => esc_html__('Enable icon on this menu', 'jnews'),
                    'desc' => esc_html__('turn this option on to enable icon on this menu', 'jnews'),
                    'default' => false,
                    'name' => 'enable_icon'
                ),
                'icon' => array (
                    'type' => 'iconpicker',
                    'title' => esc_html__('Choose icon', 'jnews'),
                    'desc' => esc_html__('choose which icon you want to use on this menu', 'jnews'),
                    'default' => '',
                    'name' => 'icon',
                    'dependency'  => array(
                        array(
                            'field'    => 'enable_icon',
                            'operator' => '==',
                            'value'    => true
                        ),
                    ),
                ),
                'icon_color' => array (
                    'type' => 'colorpicker',
                    'title' => esc_html__('Icon color', 'jnews'),
                    'desc' => esc_html__('choose color for this icon', 'jnews'),
                    'default' => false,
                    'name' => 'icon_color',
                    'dependency'  => array(
                        array(
                            'field'    => 'enable_icon',
                            'operator' => '==',
                            'value'    => true
                        ),
                    ),
                ),
            ),

            esc_html__('Menu Badge', 'jnews') => array(
                'badge' => array (
                    'type' => 'radioimage',
                    'name' => 'badge',
                    'title' => esc_html__('Menu Badge Type', 'jnews'),
                    'desc' => esc_html__('Choose badge type you want to use in this menu.', 'jnews'),
                    'default' => 'disable',
                    'options' => array (
                        'disable'  => JNEWS_THEME_URL . '/assets/img/admin/megamenu-none.png',
                        'floating' => JNEWS_THEME_URL . '/assets/img/admin/menu-badge-floating.png',
                        'inline'   => JNEWS_THEME_URL . '/assets/img/admin/menu-badge-inline.png',
                    )
                ),
                'badge_bg_color' => array (
                    'type' => 'colorpicker',
                    'name' => 'badge_bg_color',
                    'title' => esc_html__('Choose Badge Color', 'jnews'),
                    'desc' => esc_html__('Choose the color you want to your badge.', 'jnews'),
                    'default' => '#f70d28',
                    'dependency' => array (
                        array (
                            'field' => 'badge',
                            'operator' => '!=',
                            'value' => 'disable'
                        )
                    )
                ),
                'badge_text_color' => array (
                    'type' => 'colorpicker',
                    'title' => esc_html__('Choose Badge Text Color', 'jnews'),
                    'desc' => esc_html__('Choose the text color you want to your badge.', 'jnews'),
                    'default' => '#fff',
                    'name' => 'badge_text_color',
                    'dependency' => array (
                        array (
                            'field' => 'badge',
                            'operator' => '!=',
                            'value' => 'disable'
                        )
                    )
                ),
                'badge_text' => array (
                    'type' => 'text',
                    'name' => 'badge_text',
                    'title' => esc_html__('Badge Text', 'jnews'),
                    'desc' => esc_html__('Set badge text for this menu.', 'jnews'),
                    'default' => '',
                    'dependency' => array (
                        array (
                            'field' => 'badge',
                            'operator' => '!=',
                            'value' => 'disable'
                        )
                    )
                )
            ),

            esc_html__('Child Menu Badge', 'jnews') => array(
                'child_badge' => array (
                    'type' => 'radioimage',
                    'name' => 'child_badge',
                    'title' => esc_html__('Menu Badge Type', 'jnews'),
                    'desc' => esc_html__('Choose badge type you want to use in this menu.', 'jnews'),
                    'default' => 'disable',
                    'options' => array (
                        'disable'  => JNEWS_THEME_URL . '/assets/img/admin/megamenu-none.png',
                        'inline'   => JNEWS_THEME_URL . '/assets/img/admin/submenu-badge-inline.png',
                    )
                ),
                'child_badge_bg_color' => array (
                    'type' => 'colorpicker',
                    'title' => esc_html__('Choose Badge Color', 'jnews'),
                    'desc' => esc_html__('Choose the color you want to your badge.', 'jnews'),
                    'default' => '#f70d28',
                    'name' => 'child_badge_bg_color',
                    'dependency' => array (
                        array (
                            'field' => 'child_badge',
                            'operator' => '!=',
                            'value' => 'disable'
                        )
                    )
                ),
                'child_badge_text_color' => array (
                    'type' => 'colorpicker',
                    'title' => esc_html__('Choose Badge Text Color', 'jnews'),
                    'desc' => esc_html__('Choose the text color you want to your badge.', 'jnews'),
                    'default' => '#fff',
                    'name' => 'child_badge_text_color',
                    'dependency' => array (
                        array (
                            'field' => 'child_badge',
                            'operator' => '!=',
                            'value' => 'disable'
                        )
                    )
                ),
                'child_badge_text' => array (
                    'type' => 'text',
                    'name' => 'badge_text',
                    'title' => esc_html__('Badge Text', 'jnews'),
                    'desc' => esc_html__('Set badge text for this menu.', 'jnews'),
                    'default' => '',
                    'dependency' => array (
                        array (
                            'field' => 'child_badge',
                            'operator' => '!=',
                            'value' => 'disable'
                        )
                    )
                ),
            )
        );
    }
}

<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

use JNews\Module\ModuleOptionAbstract;

Class Post_Related_Option extends ModuleOptionAbstract
{
    public function get_category()
    {
        return esc_html__('JNews - Post', 'jnews');
    }

    public function compatible_column()
    {
        return array( 1,2,3,4,5,6,7,8,9,10,11,12 );
    }

    public function get_module_name()
    {
        return esc_html__('JNews - Related Post', 'jnews');
    }

    public function set_options()
    {
        $this->set_post_option();
        $this->set_style_option();
    }

    public function set_post_option()
    {
        $this->options[] = array(
            'type'          => 'dropdown',
            'param_name'    => 'match',
            'heading'       => esc_html__('Related Post Filter', 'jnews'),
            'description'   => esc_html__('Select how related post will filter article.','jnews'),
            'std'           => '',
            'value'         => array(
                esc_html__('Category', 'jnews') => 'category',
                esc_html__('Tag', 'jnews')      => 'tag',
            )
        );

        $this->options[] = array(
            'type'          => 'radioimage',
            'param_name'    => 'header_type',
            'std'           => 'heading_6',
            'value'         => array(
                JNEWS_THEME_URL . '/assets/img/admin/heading-1.png'  => 'heading_1',
                JNEWS_THEME_URL . '/assets/img/admin/heading-2.png'  => 'heading_2',
                JNEWS_THEME_URL . '/assets/img/admin/heading-3.png'  => 'heading_3',
                JNEWS_THEME_URL . '/assets/img/admin/heading-4.png'  => 'heading_4',
                JNEWS_THEME_URL . '/assets/img/admin/heading-5.png'  => 'heading_5',
                JNEWS_THEME_URL . '/assets/img/admin/heading-6.png'  => 'heading_6',
                JNEWS_THEME_URL . '/assets/img/admin/heading-7.png'  => 'heading_7',
                JNEWS_THEME_URL . '/assets/img/admin/heading-8.png'  => 'heading_8',
                JNEWS_THEME_URL . '/assets/img/admin/heading-9.png'  => 'heading_9',
            ),
            'heading'       => esc_html__('Header Type', 'jnews'),
            'description'   => esc_html__('Choose which header type fit with your content design.', 'jnews'),
        );

        $this->options[] = array(
            'type'          => 'dropdown',
            'param_name'    => 'pagination',
            'heading'       => esc_html__('Related Pagination Style', 'jnews'),
            'description'   => esc_html__('Adjust how related post will shown.','jnews'),
            'std'           => '',
            'value'         => array(
                esc_html__('No Pagination', 'jnews')        => 'disable',
                esc_html__('Next Prev', 'jnews')            => 'nextprev',
                esc_html__('Load More', 'jnews')            => 'loadmore',
                esc_html__('Auto Load on Scroll', 'jnews')  => 'scrollload',
            )
        );

        $this->options[] = array(
            'type'          => 'slider',
            'param_name'    => 'number',
            'heading'       => esc_html__('Number of Post', 'jnews'),
            'description'   => esc_html__('Set the number of post each related post load.', 'jnews'),
            'min'           => 2,
            'max'           => 10,
            'step'          => 1,
            'std'           => 5,
        );

        $this->options[] = array(
            'type'          => 'slider',
            'param_name'    => 'auto_load',
            'heading'       => esc_html__('Auto Load Limit', 'jnews'),
            'description'   => esc_html__('Limit of auto load when scrolling, set to zero to always load until end of content.', 'jnews'),
            'min'           => 0,
            'max'           => 500,
            'step'          => 1,
            'std'           => 3,
            'dependency'    => array('element' => 'pagination', 'value' => array('nextprev', 'loadmore', 'scrollload'))
        );

        $this->options[] = array(
            'type'          => 'radioimage',
            'param_name'    => 'template',
            'std'           => '9',
            'value'         => array(
                JNEWS_THEME_URL . '/assets/img/admin/content-1.png' => '1' ,
                JNEWS_THEME_URL . '/assets/img/admin/content-2.png' => '2' ,
                JNEWS_THEME_URL . '/assets/img/admin/content-3.png' => '3' ,
                JNEWS_THEME_URL . '/assets/img/admin/content-4.png' => '4' ,
                JNEWS_THEME_URL . '/assets/img/admin/content-5.png' => '5' ,
                JNEWS_THEME_URL . '/assets/img/admin/content-6.png' => '6' ,
                JNEWS_THEME_URL . '/assets/img/admin/content-7.png' => '7' ,
                JNEWS_THEME_URL . '/assets/img/admin/content-8.png' => '8' ,
                JNEWS_THEME_URL . '/assets/img/admin/content-9.png' => '9' ,
                JNEWS_THEME_URL . '/assets/img/admin/content-10.png' => '10',
                JNEWS_THEME_URL . '/assets/img/admin/content-11.png' => '11',
                JNEWS_THEME_URL . '/assets/img/admin/content-12.png' => '12',
                JNEWS_THEME_URL . '/assets/img/admin/content-13.png' => '13',
                JNEWS_THEME_URL . '/assets/img/admin/content-14.png' => '14',
                JNEWS_THEME_URL . '/assets/img/admin/content-15.png' => '15',
                JNEWS_THEME_URL . '/assets/img/admin/content-16.png' => '16',
                JNEWS_THEME_URL . '/assets/img/admin/content-17.png' => '17',
                JNEWS_THEME_URL . '/assets/img/admin/content-18.png' => '18',
                JNEWS_THEME_URL . '/assets/img/admin/content-19.png' => '19',
                JNEWS_THEME_URL . '/assets/img/admin/content-20.png' => '20',
                JNEWS_THEME_URL . '/assets/img/admin/content-21.png' => '21',
                JNEWS_THEME_URL . '/assets/img/admin/content-22.png' => '22',
                JNEWS_THEME_URL . '/assets/img/admin/content-23.png' => '23',
                JNEWS_THEME_URL . '/assets/img/admin/content-24.png' => '24',
                JNEWS_THEME_URL . '/assets/img/admin/content-25.png' => '25',
                JNEWS_THEME_URL . '/assets/img/admin/content-26.png' => '26',
                JNEWS_THEME_URL . '/assets/img/admin/content-27.png' => '27',
            ),
            'heading'       => esc_html__('Related PostTemplate', 'jnews'),
            'description'   => esc_html__('Choose your related post template.', 'jnews'),
        );

        $this->options[] = array(
            'type'          => 'slider',
            'param_name'    => 'excerpt',
            'heading'       => esc_html__('Excerpt Length', 'jnews'),
            'description'   => esc_html__('Set word length of excerpt on related post.', 'jnews'),
            'min'           => 0,
            'max'           => 200,
            'step'          => 1,
            'std'           => 20,
        );

        $this->options[] = array(
            'type'          => 'dropdown',
            'param_name'    => 'date',
            'heading'       => esc_html__('Related Post Date Format', 'jnews'),
            'description'   => esc_html__('Choose which date format you want to use for archive content.','jnews'),
            'std'           => 'default',
            'value'         => array(
                 esc_attr__( 'Relative Date/Time Format (ago)', 'jnews' ) => 'ago',
                 esc_attr__( 'WordPress Default Format', 'jnews' ) => 'default',
                 esc_attr__( 'Custom Format', 'jnews' ) => 'custom',
            )
        );

        $this->options[] = array(
            'type'          => 'textfield',
            'param_name'    => 'date_custom',
            'heading'       => esc_html__('Custom Date Format for Related Post', 'jnews'),
            'description'   => wp_kses(sprintf(__("Please set your date format for related post content, for more detail about this format, please refer to
                        <a href='%s' target='_blank'>Developer Codex</a>.", "jnews"), "https://developer.wordpress.org/reference/functions/current_time/"),
                wp_kses_allowed_html()),
            'std'       => 'Y/m/d',
        );
    }
}
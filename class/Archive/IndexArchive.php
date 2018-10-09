<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Archive;

use JNews\Module\ModuleManager;

/**
 * Class IndexArchive
 * @package JNews\Archive
 */
Class IndexArchive extends ArchiveAbstract
{
    private $result;

    private $archive_id;

    public function __construct()
    {
        // Single Archive
        $queried_object = get_queried_object();

        if ( ! empty( $queried_object ) )
        {
            $this->archive_id = $queried_object->term_id;
        }

        $this->result = $archive = array();
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                do_action('jnews_json_archive_push', get_the_ID());
                $this->result[] = get_post();
            }
        }

        if($this->can_render_top_content()) {
            add_filter('jnews_vc_force_load_style', '__return_true');
        }
    }

    public function can_render_top_content()
    {
        return get_theme_mod('jnews_index_top_content') && jnews_get_post_current_page() == 1;
    }

    public function render_top_content()
    {
        if($this->can_render_top_content()) {
            $content = get_post(get_theme_mod('jnews_index_top_content'));
            if ( ! empty($content) ) echo do_shortcode($content->post_content);
        }
    }

    public function render_navigation()
    {
        return jnews_paging_navigation(array(
            'pagination_mode' => $this->get_content_pagination(),
            'pagination_align' => $this->get_content_pagination_align(),
            'pagination_navtext' => $this->get_content_pagination_navtext(),
            'pagination_pageinfo' => $this->get_content_pagination_pageinfo(),
            'prev_text' => __('Prev','jnews'),
            'next_text' => __('Next','jnews'),
        ));
    }

    public function render_content()
    {
        ModuleManager::getInstance()->set_width(array($this->get_content_width()));
        $column_class = ModuleManager::getInstance()->get_column_class();

        $attr = array(
            'date_format' => $this->get_content_date(),
            'date_format_custom' => $this->get_content_date_custom(),
            'excerpt_length' => $this->get_content_excerpt(),
            'pagination_mode' => $this->get_content_pagination(),
            'pagination_align' => $this->get_content_pagination_align(),
            'pagination_navtext' => $this->get_content_pagination_navtext(),
            'pagination_pageinfo' => $this->get_content_pagination_pageinfo(),
            'boxed' => $this->get_boxed(),
            'boxed_shadow' => $this->get_boxed_shadow(),
            'box_shadow' => $this->get_box_shadow()
        );

        $name = jnews_get_view_class_from_shortcode ( 'JNews_Block_' . $this->get_content_type() );
        $this->content_instance = jnews_get_module_instance($name);
        $this->content_instance->set_attribute($attr);

	    if($attr['boxed']) $column_class .= ' jeg_pb_boxed';
	    if($attr['boxed_shadow']) $column_class .= ' jeg_pb_boxed_shadow';

        return $this->content_instance->render_module_out_call($this->result, $column_class);
    }

    // content
    public function get_content_type()
    {
        return apply_filters('jnews_index_content', get_theme_mod('jnews_index_content', '3'));
    }

    public function get_content_excerpt()
    {
        return apply_filters('jnews_index_content_excerpt', get_theme_mod('jnews_index_content_excerpt', 20));
    }

    public function get_content_date()
    {
        return apply_filters('jnews_index_content_date', get_theme_mod('jnews_index_content_date', 'default'));
    }

    public function get_content_date_custom()
    {
        return apply_filters('jnews_index_content_date_custom', get_theme_mod('jnews_index_content_date_custom', 'Y/m/d'));
    }

    public function get_content_pagination()
    {
        return apply_filters('jnews_index_content_pagination', get_theme_mod('jnews_index_content_pagination', 'nav_1'));
    }

    public function get_content_pagination_limit()
    {
        return apply_filters('jnews_index_content_pagination_limit', get_theme_mod('jnews_index_content_pagination_limit'));
    }

    public function get_content_pagination_align()
    {
        return apply_filters('jnews_index_content_pagination_align', get_theme_mod('jnews_index_content_pagination_align', 'center'));
    }

    public function get_content_pagination_navtext()
    {
        return apply_filters('jnews_index_content_pagination_show_navtext', get_theme_mod('jnews_index_content_pagination_show_navtext', false));
    }

    public function get_content_pagination_pageinfo()
    {
        return apply_filters('jnews_index_content_pagination_show_pageinfo', get_theme_mod('jnews_index_content_pagination_show_pageinfo', false));
    }

	public function get_page_layout()
	{
		return apply_filters('jnews_index_page_layout', get_theme_mod('jnews_index_page_layout', 'right-sidebar'));
	}

	public function get_content_sidebar()
	{
		return apply_filters('jnews_index_sidebar', get_theme_mod('jnews_index_sidebar', 'default-sidebar'));
	}

	public function get_second_sidebar()
	{
		return apply_filters('jnews_index_second_sidebar', get_theme_mod('jnews_index_second_sidebar', 'default-sidebar'));
	}

	public function sticky_sidebar()
	{
		return apply_filters('jnews_index_sticky_sidebar', get_theme_mod('jnews_index_sticky_sidebar', true));
	}

	public function get_boxed()
	{
		if  ( ! in_array($this->get_content_type(), array('3','4','5','6','7','9','10','14','18','22','23','25','26','27')) )
			return false;

		return apply_filters('jnews_index_boxed', get_theme_mod('jnews_index_boxed', false));
	}

	public function get_boxed_shadow()
	{
		if  ( ! $this->get_boxed() )
			return false;

		return apply_filters('jnews_index_boxed_shadow', get_theme_mod('jnews_index_boxed_shadow', false));
	}

	public function get_box_shadow()
	{
		if  ( ! in_array($this->get_content_type(), array('37','35','33','36','32','38')) )
			return false;

		return apply_filters('jnews_index_box_shadow', get_theme_mod('jnews_index_box_shadow', false));
	}
}

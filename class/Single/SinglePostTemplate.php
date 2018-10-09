<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Single;

/**
 * Class Theme SinglePostTemplate
 */
Class SinglePostTemplate
{
    /**
     * @var SinglePost
     */
    private static $instance;

    /**
     * @return SinglePost
     */
    public static function getInstance()
    {
        if (null === static::$instance)
        {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()
    {
	    if (!defined('JNEWS_ESSENTIAL')) return false;

        add_action( 'init', array($this, 'single_template_post_type'));

        if(is_admin())
        {

        } else {
            add_action( 'wp_head', array($this,'custom_post_css'), 999);
            add_action( 'init', array($this, 'force_load_css'), 1);
        }

        add_filter( 'post_row_actions', array( $this, 'single_row_action'), null, 2 );
    }

    public function is_single_custom()
    {
        $footer_style = get_theme_mod('jnews_single_blog_template', '1');
        return $footer_style === 'custom';
    }

    public function get_custom_page_id()
    {
        return get_theme_mod('jnews_single_blog_custom', null);
    }

    public function custom_post_css()
    {
        if($this->is_single_custom())
        {
            $custom_page_id = $this->get_custom_page_id();

            $this->add_page_custom_css($custom_page_id);
            $this->add_shortcode_custom_css($custom_page_id);
        }
    }

    public function add_page_custom_css($post_id)
    {
        $post_custom_css = get_post_meta( $post_id, '_wpb_post_custom_css', true );

        if ( ! empty( $post_custom_css ) ) {
            $post_custom_css = strip_tags( $post_custom_css );
            echo '<style type="text/css" data-type="vc_custom-css">';
            echo $post_custom_css;
            echo '</style>';
        }
    }

    public function add_shortcode_custom_css($post_id)
    {
        $shortcodes_custom_css = get_post_meta( $post_id, '_wpb_shortcodes_custom_css', true );

        if ( ! empty( $shortcodes_custom_css ) ) {
            $shortcodes_custom_css = strip_tags( $shortcodes_custom_css );
            echo '<style type="text/css" data-type="vc_shortcodes-custom-css">';
            echo $shortcodes_custom_css;
            echo '</style>';
        }
    }


    public function force_load_css()
    {
        if($this->is_single_custom())
        {
            add_filter('jnews_vc_force_load_style', '__return_true');
        }
    }

    public function single_template_post_type()
    {
        if(is_admin() || jeg_is_frontend_vc() || jeg_is_frontend_elementor())
        {
            register_post_type( 'custom-post-template', array(
                'labels' 	=>
                    array(
                        'name' 				=> esc_html__( 'Custom Template', 'jnews' ),
                        'singular_name' 	=> esc_html__( 'Custom Template', 'jnews' ),
                        'menu_name'         => esc_html__( 'Custom Template', 'jnews' ),
                        'add_new'			=> esc_html__( 'New Post Template', 'jnews' ),
                        'add_new_item' 		=> esc_html__( 'Build Custom Post Template', 'jnews' ),
                        'edit_item' 		=> esc_html__( 'Edit Post Template', 'jnews' ),
                        'new_item' 			=> esc_html__( 'New Custom Post Template Entry', 'jnews' ),
                        'view_item' 		=> esc_html__( 'View Custom Post Template', 'jnews' ),
                        'search_items' 		=> esc_html__( 'Search Custom Post Template', 'jnews' ),
                        'not_found' 		=> esc_html__( 'No entry found', 'jnews' ),
                        'not_found_in_trash'=> esc_html__( 'No Custom Post Template in Trash', 'jnews' ),
                        'parent_item_colon' => ''
                    ),
                'description'			=> esc_html__( 'Custom Single Post Template', 'jnews' ),
                'public' 				=> true,
                'show_ui' 				=> true,
                'menu_position'			=> 6,
                'capability_type' 		=> 'post',
                'hierarchical' 			=> false,
                'supports' 				=> array('title' , 'editor'),
                'map_meta_cap'          => true,
                'rewrite' 				=> array(
                    'slug'	=>	'post-template'
                )
            ));
        }
    }

    public function single_row_action($actions, $post)
    {
        if($post->post_type === 'custom-post-template')
        {
            unset($actions['view']);
            unset($actions['inline hide-if-no-js']);
        }

        return $actions;
    }
}
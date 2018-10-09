<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Menu;

Class CustomMegaMenu
{
    /**
     * @var CustomMegaMenu
     */
    private static $instance;

    private $rendered = false;

    /**
     * @return CustomMegaMenu
     */
    public static function getInstance()
    {
        if (null === static::$instance)
        {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function __construct()
    {
	    if (!defined('JNEWS_ESSENTIAL')) return false;

        add_action( 'init', array($this, 'custom_mega_menu_post_type'));
        add_action( 'jnews_main_menu', array($this, 'mega_frontend_builder'));

        if(is_admin())
        {

        } else {
            add_action( 'init', array($this, 'force_load_css'), 1);
        }

        add_filter( 'post_row_actions', array( $this, 'single_row_action'), null, 2 );
    }

    public function force_load_css()
    {
        if(get_option('load_vc_css_menu', false))
        {
            add_filter('jnews_vc_force_load_style', '__return_true');
        }
    }

    public function mega_frontend_builder()
    {
        if( get_post_type() === 'custom-mega-menu' && !$this->rendered )
        {
            $this->rendered = true;
            echo "<div class='sub-menu custom-mega-menu force-show'>";
            the_post();
            the_content();
            echo "</div>";
        }
    }

    public function custom_mega_menu_post_type()
    {
        if(is_admin() || jeg_is_frontend_vc() || jeg_is_frontend_elementor())
        {
            register_post_type( 'custom-mega-menu', array(
                'labels' 	=>
                    array(
                        'name' 				=> esc_html__( 'Custom Mega Menu', 'jnews' ),
                        'singular_name' 	=> esc_html__( 'Custom Mega Menu', 'jnews' ),
                        'menu_name'         => esc_html__( 'Custom Menu', 'jnews' ),
                        'add_new'			=> esc_html__( 'New Mega Menu', 'jnews' ),
                        'add_new_item' 		=> esc_html__( 'Build Custom Mega Menu', 'jnews' ),
                        'edit_item' 		=> esc_html__( 'Edit Mega Menu', 'jnews' ),
                        'new_item' 			=> esc_html__( 'New Mega Menu Entry', 'jnews' ),
                        'view_item' 		=> esc_html__( 'View Custom Menu Template', 'jnews' ),
                        'search_items' 		=> esc_html__( 'Search Custom Menu Template', 'jnews' ),
                        'not_found' 		=> esc_html__( 'No entry found', 'jnews' ),
                        'not_found_in_trash'=> esc_html__( 'No Custom Menu in Trash', 'jnews' ),
                        'parent_item_colon' => ''
                    ),
                'description'			=> esc_html__( 'Custom Mega Menu', 'jnews' ),
                'public' 				=> true,
                'show_ui' 				=> true,
                'menu_position'			=> 8,
                'capability_type' 		=> 'post',
                'hierarchical' 			=> false,
                'supports' 				=> array('title' , 'editor'),
                'map_meta_cap'          => true,
                'rewrite' 				=> array(
                    'slug'	=>	'mega-menu'
                )
            ));
        }
    }

    public function single_row_action($actions, $post)
    {
        if($post->post_type === 'custom-mega-menu')
        {
            unset($actions['view']);
            unset($actions['inline hide-if-no-js']);
        }

        return $actions;
    }
}

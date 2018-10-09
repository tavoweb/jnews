<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Elementor;

use Elementor\Plugin;
use Elementor\Element_Column;
use Elementor\Controls_Manager;
use JNews\Elementor\Normal\SocialIcon;
use JNews\Elementor\Normal\SocialCounter;
use JNews\Module\ModuleManager;
use JNews\Widget\Normal\RegisterNormalWidget;

/**
 * Class JNews VC Integration
 */
Class ModuleElementor
{
    /**
     * @var ModuleElementor
     */
    private static $instance;

    private $module_manager;

    /**
     * @return ModuleElementor
     */
    public static function getInstance()
    {
        if (null === static::$instance)
        {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * ModuleVC constructor.
     */
    private function __construct()
    {
        $this->setup_hook();
	    $this->setup_post_type();
    }

    protected function get_module_instance()
    {
    	if ( ! $this->module_manager )
	    {
	    	$this->module_manager = ModuleManager::getInstance();
	    }

	    return $this->module_manager;
    }

    protected  function setup_post_type()
    {
    	add_post_type_support('footer', 'elementor');
	    add_post_type_support('custom-post-template', 'elementor');
	    add_post_type_support('custom-mega-menu', 'elementor');
    }

    public function setup_hook()
    {
        // load script & style editor
        add_action( 'elementor/editor/after_enqueue_styles',        array( $this, 'editor_style' ) );
        add_action( 'elementor/editor/after_enqueue_scripts',       array( $this, 'editor_script') );

	    // load script & style frontend
	    add_action( 'elementor/frontend/after_enqueue_scripts',     array( $this, 'frontend_script') );

	    // register module, element, group & custom control
	    add_action( 'elementor/controls/controls_registered',       array( $this, 'register_control') );
        add_action( 'elementor/widgets/widgets_registered',         array( $this, 'register_module') );
	    add_action( 'elementor/widgets/widgets_registered',         array( $this, 'register_normal') );
        add_action( 'elementor/init',                               array( $this, 'register_group' ) );

        // register sticky sidebar option on column
		add_action( 'elementor/element/column/layout/before_section_end',           array( $this, 'register_sticky_option' ) );
	    add_action( 'elementor/element/column/section_advanced/before_section_end', array( $this, 'register_column_padding' ) );

	    // register custom css option for single page / post
	    add_action( 'elementor/element/page-settings/section_page_settings/before_section_end', array( $this, 'register_custom_css_option' ) );
	    add_action( 'wp_head',                                                                  array( $this, 'render_custom_css' ) );

        // modify widget list on elementor
        add_action('jnews_get_normal_widget_list',                  array($this, 'modify_normal_widget_list'));

        // check width of section
	    add_action('elementor/frontend/before_render',              array($this, 'register_width'));
        add_action('elementor/frontend/element/before_render',      array($this, 'register_width'));
	    add_action('elementor/editor/element/before_raw_data',      array($this, 'register_width'));
        add_action('elementor/init',                                array($this, 'register_element'));

	    // change elementor script
        add_action( 'elementor/editor/before_enqueue_scripts',  array($this, 'elementor_editor_script'), 99 );

	    add_action( 'wp_ajax_elementor_get_category',           array($this, 'elementor_get_category'));
	    add_action( 'wp_ajax_elementor_get_author',             array($this, 'elementor_get_author'));
	    add_action( 'wp_ajax_elementor_get_tag',                array($this, 'elementor_get_tag'));
    }

	public function elementor_get_tag()
	{
		if ( isset( $_REQUEST[ 'string' ] ) && ! empty( $_REQUEST[ 'string' ] ) )
		{
			$value = $_REQUEST[ 'string' ];
		} else {
			return false;
		}

		$data = array();
		$values = explode(',', $value);

		foreach( $values as $val )
		{
			if ( ! empty( $val ) )
			{
				$term = get_term( $val, 'post_tag' );
				$data[] = array(
					'value' => $val,
					'text'  => $term->name
				);
			}
		}

		wp_send_json($data);
	}

	public function elementor_get_author()
	{
		if ( isset( $_REQUEST[ 'string' ] ) && ! empty( $_REQUEST[ 'string' ] ) )
		{
			$value = $_REQUEST[ 'string' ];
		} else {
			return false;
		}

		$data = array();
		$values = explode(',', $value);

		foreach( $values as $val )
		{
			if ( ! empty( $val ) )
			{
				$user = get_userdata( $val );
				$data[] = array(
					'value' => $val,
					'text'  => $user->display_name
				);
			}
		}

		wp_send_json($data);
	}

    public function elementor_get_category()
    {
	    if ( isset( $_REQUEST[ 'string' ] ) && ! empty( $_REQUEST[ 'string' ] ) )
	    {
		    $value = $_REQUEST[ 'string' ];
	    } else {
		    return false;
	    }

	    $data = array();
	    $values = explode(',', $value);

	    foreach( $values as $val )
	    {
		    if ( ! empty( $val ) )
		    {
			    $term = get_term( $val, 'category' );
			    $data[] = array(
				    'value' => $val,
				    'text'  => $term->name
			    );
		    }
	    }

	    wp_send_json($data);
    }

    public function elementor_editor_script()
    {
        if ( defined('ELEMENTOR_VERSION') )
        {
            $script = get_parent_theme_file_uri('assets/js');
            $version = (int) str_replace('.', '', ELEMENTOR_VERSION);
            $available = array(212,216,221,224);

            if ( in_array($version , $available) ) {
	            wp_deregister_script('elementor-editor');

	            wp_register_script(
		            'elementor-editor',
		            $script . '/elementor/editor-' . $version . '.min.js',
		            [
			            'wp-auth-check',
			            'jquery-ui-sortable',
			            'jquery-ui-resizable',
			            'backbone-marionette',
			            'backbone-radio',
			            'perfect-scrollbar',
			            'nprogress',
			            'tipsy',
			            'imagesloaded',
			            'heartbeat',
			            'jquery-elementor-select2',
			            'flatpickr',
			            'elementor-dialog',
			            'ace',
			            'ace-language-tools',
			            'jquery-hover-intent',
		            ],
		            ELEMENTOR_VERSION,
		            true
	            );
            }
        }
    }

    public function register_element()
    {
        Plugin::$instance->elements_manager->register_element_type(new \JNews\Elementor\Element\Section());
        Plugin::$instance->elements_manager->register_element_type(new \Elementor\Element_Column());
    }

    private function get_column_width($width)
    {
        if($width < 34) {
            $column = 4;
        } else if($width < 67) {
            $column = 8;
        } else {
            $column = 12;
        }

        return $column;
    }

    /**
     * @param Element_Column $object
     */
    public function register_width($object)
    {
        if($object instanceof Element_Column)
        {
            $setting = $object->get_settings();
            $column = $this->get_column_width($setting['_column_size']);
            ModuleManager::getInstance()->force_set_width($column);
        }
    }

    public function modify_normal_widget_list($widgets)
    {
        $new_widgets = array();
        $excluded = array('Social_Widget', 'Social_Counter_Widget');

        if(isset($_REQUEST['action']) && $_REQUEST['action'] === 'elementor')
        {
            foreach($widgets as $widget)
            {
                if(!in_array($widget, $excluded)) {
                    $new_widgets[] = $widget;
                }
            }

            return $new_widgets;
        }

        return $widgets;

    }

    public function frontend_script()
    {
	    wp_enqueue_script( 'selectize',             get_parent_theme_file_uri ( '/assets/js/admin/elementor-frontend.js' ), array( 'jquery' ), null, null );
    }

    public function editor_style()
    {
        wp_enqueue_style( 'jnews-admin',            get_parent_theme_file_uri( '/assets/css/admin/admin-style.css' ), null, null );
        wp_enqueue_style( 'selectize',              get_parent_theme_file_uri( '/assets/css/admin/selectize.default.css' ), null );
        wp_enqueue_style( 'jnews-elementor-css',    get_parent_theme_file_uri( '/assets/css/elementor-backend.css' ), null, null);
    }

    public function editor_script()
    {
        wp_enqueue_script( 'jquery-ui-spinner' );
        wp_enqueue_script( 'selectize',                 get_parent_theme_file_uri( '/assets/js/vendor/selectize.js' ), array( 'jquery' ), null, null );
        wp_enqueue_script( 'jnews-elementor-widget-js', get_parent_theme_file_uri( '/assets/js/admin/widget.js' ), null, null );
        wp_enqueue_script( 'jnews-elementor-js',        get_parent_theme_file_uri( '/assets/js/admin/elementor-backend.js' ), null, null );

        wp_localize_script( 'jnews-elementor-js', 'jnews_elementor', $this->localize_script() );
    }

    public function localize_script()
    {
        $option = array();

        $option['widgets'] = $this->populate_widget();

        return $option;
    }

    public function populate_widget()
    {
        // Module Widget
        $modules = $this->get_module_instance()->populate_module();
        $widgets = array();

        foreach ( $modules as $module )
        {
            if ( $module['widget'] )
            {
                $widgets[] = str_replace('jnews', 'jnews_module', strtolower($module['name']));
            }
        }

        // Normal Widget
        $normal_modules = RegisterNormalWidget::getInstance()->get_normal_widget();

        foreach ( $normal_modules as $module )
        {
            $widgets[] = 'jnews_' . str_replace('_widget', '', strtolower($module));
        }

        return $widgets;
    }

    /**
     * @param \Elementor\Widgets_Manager $widgets_manager
     */
    public function register_module( $widgets_manager )
    {
	    include get_parent_theme_file_path('class/Elementor/module-elementor.php');

	    $modules = $this->get_module_instance()->populate_module();

	    $exclude = array( 'social_icon_wrapper', 'social_icon_item', 'social_counter_wrapper', 'social_counter_item', 'widget' );

	    foreach ( $modules as $module )
	    {
	    	if ( in_array( $module['type'], $exclude ) ) continue;

	    	$classname = '\\' . $module['name'] . '_Elementor';
		    $widgets_manager->register_widget_type( new $classname() );
	    }
    }

    /**
     * @param \Elementor\Widgets_Manager $widgets_manager
     */
    public function register_normal( $widgets_manager )
    {
	    $widgets_manager->register_widget_type( new SocialIcon() );
	    $widgets_manager->register_widget_type( new SocialCounter() );
    }

    public function register_group()
    {
    	$groups = array(
		    'jnews-module'      => esc_html__( 'JNews - Module', 'jnews' ),
		    'jnews-hero'        => esc_html__( 'JNews - Hero', 'jnews' ),
		    'jnews-slider'      => esc_html__( 'JNews - Slider', 'jnews' ),
		    'jnews-element'     => esc_html__( 'JNews - Element', 'jnews' ),
		    'jnews-carousel'    => esc_html__( 'JNews - Carousel', 'jnews' ),
		    'jnews-footer'      => esc_html__( 'JNews - Footer', 'jnews' ),
            'jnews-post'        => esc_html__( 'JNews - Post', 'jnews' )
	    );

	    foreach ( $groups as $key => $value )
	    {
		    \Elementor\Plugin::$instance->elements_manager->add_category( $key, [ 'title' => $value ], 1 );
	    }
    }

    public function register_control()
    {
    	$controls = array(
			'multicategory' => 'JNews\Elementor\Control\Multicategory',
			'multitag'      => 'JNews\Elementor\Control\Multitag',
			'multipost'     => 'JNews\Elementor\Control\Multipost',
			'multiauthor'   => 'JNews\Elementor\Control\Multiauthor',
			'multiproduct'  => 'JNews\Elementor\Control\Multiproduct',
			'multiselect'   => 'JNews\Elementor\Control\Multiselect',
		    'alert'         => 'JNews\Elementor\Control\Alert'
	    );

    	foreach ( $controls as $type => $classname )
	    {
		    \Elementor\Plugin::instance()->controls_manager->register_control( $type, new $classname() );
	    }
    }

	public function register_sticky_option( $element )
	{
		$element->add_control(
			'sticky_sidebar',
			[
				'label'         => esc_html__( 'Enable Sticky Sidebar', 'jnews' ),
				'type'          => \Elementor\Controls_Manager::SWITCHER,
				'default'       => '',
				'description'   => esc_html__( 'Set this column as sticky sidebar. Note: Sticky Sidebar will disabled when on the editor or you should refresh the editor to see the result. It will works fine on the frontend.', 'jnews' ),
                'prefix_class'  => ' jeg_sticky_sidebar '
			]
		);
	}

	public function register_custom_css_option( $element )
	{
		$element->add_control(
			'custom_css',
			[
				'label'         => esc_html__( 'Custom CSS Setting', 'jnews' ),
				'type'          => \Elementor\Controls_Manager::CODE,
				'default'       => '',
				'description'   => esc_html__( 'Enter custom CSS (Note: it will be outputted only on this particular page).', 'jnews' ),
			]
		);
	}

	public function render_custom_css( $post_id = null )
	{
		if ( ! is_singular() ) return;

		if ( ! $post_id ) $post_id = get_the_ID();

		if ( $post_id )
		{
			$settings = get_post_meta( $post_id, '_elementor_page_settings', true );

			if ( ! empty( $settings['custom_css'] ) )
			{
				echo '<style type="text/css" data-type="elementor_custom-css">';
				echo strip_tags( $settings['custom_css'] );
				echo '</style>';
			}
		}
	}

	public function register_column_padding( $element )
	{
		$element->update_responsive_control(
			'padding',
			[
				'label' => __( 'Padding', 'elementor' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .elementor-element-populated' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
	}
}

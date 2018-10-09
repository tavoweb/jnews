<?php
/**
 * Customizer Control: preset.
 *
 * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
 * @license     https://opensource.org/licenses/MIT
 * @author      Aristath
 * @author      Jegtheme
 */
namespace Jeg\Customizer\Control;

/**
 * Preset control (modified select).
 */
class Preset extends ControlAbstract {

    /**
     * The control type.
     *
     * @access public
     * @var string
     */
    public $type = 'jnews-preset';

    /**
     * Used to automatically generate all CSS output.
     *
     * @access public
     * @var array
     */
    public $output = array();

    /**
     * Data type
     *
     * @access public
     * @var string
     */
    public $option_type = 'theme_mod';

    /**
     * Refresh the parameters passed to the JavaScript via JSON.
     *
     * @see WP_Customize_Control::to_json()
     */
    public function to_json() {
        parent::to_json();

        $this->json['default'] = $this->setting->default;
        if ( isset( $this->default ) ) {
            $this->json['default'] = $this->default;
        }
        $this->json['output']  = $this->output;
        $this->json['value']   = $this->value();
        $this->json['choices'] = $this->choices;
        $this->json['link']    = $this->get_link();
        $this->json['id']      = $this->id;

        if ( 'user_meta' === $this->option_type ) {
            $this->json['value'] = get_user_meta( get_current_user_id(), $this->id, true );
        }

        $this->json['inputAttrs'] = '';
        foreach ( $this->input_attrs as $attr => $value ) {
            $this->json['inputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
        }
    }

    /**
     * An Underscore (JS) template for this control's content (but not its container).
     *
     * Class variables for this control class are available in the `data` JS object;
     * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
     *
     * @see WP_Customize_Control::print_template()
     *
     * @access protected
     */
    protected function content_template() {
        ?>
        <# if ( ! data.choices ) return; #>
            <label>
                <# if ( data.label ) { #>
                    <span class="customize-control-title">{{ data.label }}</span>
                <# } #>
                <# if ( data.description ) { #>
                    <span class="description customize-control-description">{{{ data.description }}}</span>
                <# } #>
                <select {{{ data.inputAttrs }}} {{{ data.link }}} data-multiple="1">
                    <# for ( key in data.choices ) { #>
                        <option value="{{ key }}"<# if ( key === data.value ) { #>selected<# } #>>
                            {{ data.choices[ key ]['label'] }}
                        </option>
                    <# } #>
                </select>
            </label>
        <?php
    }
}

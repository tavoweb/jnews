<?php
namespace JNews\Elementor\Element;

use Elementor\Element_Section;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor column element.
 *
 * Elementor column handler class is responsible for initializing the column
 * element.
 *
 * @since 1.0.0
 */
class Section extends Element_Section {

    /**
     * Get the element raw data.
     *
     * Retrieve the raw element data, including the id, type, settings, child
     * elements and whether it is an inner element.
     *
     * The data with the HTML used always to display the data, but the Elementor
     * editor uses the raw data without the HTML in order not to render the data
     * again.
     *
     * @since 1.0.0
     * @access public
     *
     * @param bool $with_html_content Optional. Whether to return the data with
     *                                HTML content or without. Used for caching.
     *                                Default is false, without HTML.
     *
     * @return array Element raw data.
     */
    public function get_raw_data( $with_html_content = false ) {
        $data = $this->get_data();

        $elements = [];

        foreach ( $this->get_children() as $child ) {
            do_action('elementor/editor/element/before_raw_data', $child);
            $elements[] = $child->get_raw_data( $with_html_content );
        }

        return [
            'id' => $this->get_id(),
            'elType' => $data['elType'],
            'settings' => $data['settings'],
            'elements' => $elements,
            'isInner' => $data['isInner'],
        ];
    }

}

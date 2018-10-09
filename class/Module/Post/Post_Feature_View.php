<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

use JNews\Single\SinglePost;

Class Post_Feature_View extends PostViewAbstract
{
    public function render_module_back($attr, $column_class)
    {
        switch($attr['image_size']) {
            case '1140x570' :
            case '750x375' :
                $size = '500';
                break;
            case '1140x815' :
            case '750x536' :
                $size = '715';
                break;
            default:
                $size = '1000';
                break;
        }
        return
            "<div class='jeg_custom_featured_wrapper {$attr['scheme']}'>
                <div class=\"jeg_featured featured_image custom_post\">
                    <a href='#'>
                        <div class=\"thumbnail-container animate-lazy size-{$size} \">
                            <span>Image with size : <strong>{$attr['image_size']}</strong></span>
                        </div>
                    </a>
                </div>
            </div>";
    }

    public function render_module_front($attr, $column_class)
    {
        $single = SinglePost::getInstance();
        $current_page   = jnews_get_post_current_page();

        if( $current_page === 1) {
            ob_start();
            $single->feature_post_1('jnews-' . $attr['image_size'], 'jnews-' . $attr['gallery_size']);
            return ob_get_clean();
        }
    }
}
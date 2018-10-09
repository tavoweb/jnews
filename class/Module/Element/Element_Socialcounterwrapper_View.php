<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Element;

use JNews\Module\ModuleViewAbstract;

Class Element_Socialcounterwrapper_View extends ModuleViewAbstract
{
    public function render_module($attr, $column_class)
    {
    	global $social_vk_id, $social_fb_key, $social_gg_key, $social_bh_key, $social_twitch_key, $social_rss_count, $social_new_tab, $tw_consumer_key, $tw_consumer_secret, $tw_access_token, $tw_access_token_secret;
	    
	    $social_vk_id           = isset( $attr['vk_id'] ) ? str_replace('id', '', $attr['vk_id']) : '';
	    $social_fb_key          = isset( $attr['fb_key'] ) ? $attr['fb_key'] : '';
	    $social_gg_key          = isset( $attr['gg_key'] ) ? $attr['gg_key'] : '';
	    $social_bh_key          = isset( $attr['bh_key'] ) ? $attr['bh_key'] : '';
	    $social_twitch_key      = isset( $attr['twitch_key'] ) ? $attr['twitch_key'] : '';
	    $social_rss_count       = isset( $attr['rss_count'] ) ? $attr['rss_count'] : '' ;
	    $tw_consumer_key        = isset( $attr['tw_consumer_key'] ) ? $attr['tw_consumer_key'] : '' ;
	    $tw_consumer_secret     = isset( $attr['tw_consumer_secret'] ) ? $attr['tw_consumer_secret'] : '' ;
	    $tw_access_token        = isset( $attr['tw_access_token'] ) ? $attr['tw_access_token'] : '' ;
	    $tw_access_token_secret = isset( $attr['tw_access_token_secret'] ) ? $attr['tw_access_token_secret'] : '' ;
	    $social_new_tab         = isset( $attr['newtab'] ) ? 'target="_blank"' : '' ;

	    return "<ul {$this->element_id($attr)} class=\"jeg_socialcounter {$attr['column']} {$attr['style']} {$attr['el_class']}\">" . wpb_js_remove_wpautop( $this->content ) . "</ul>";
    }
}
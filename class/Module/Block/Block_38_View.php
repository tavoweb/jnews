<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Block;

Class Block_38_View extends BlockViewAbstract
{
	public function render_block_type_1($post)
	{
		$primary_category   = $this->get_primary_category($post->ID);

		$thumb_id   = get_post_thumbnail_id($post->ID);
		$thumb_data = wp_get_attachment_image_src($thumb_id, 'full');
		$style      = "style='background-image: url({$thumb_data[0]})'";

		$output =
			"<article " . jnews_post_class("jeg_post", $post->ID) . ">
				" . jnews_edit_post( $post->ID, 'right' ) . "
				<div class=\"jeg_thumb\" {$style}></div>
				<div class=\"box_wrap\">
	                <div class=\"jeg_post_category\">
	                    <span>{$primary_category}</span>
	                </div>
	                <div class=\"jeg_postblock_content\">
	                    <h3 class=\"jeg_post_title\">
	                        <a href=\"" . get_the_permalink($post) . "\">" . get_the_title($post) . "</a>
	                    </h3>
	                    <div class=\"jeg_post_excerpt\">
	                        <p>" . $this->get_excerpt($post) . "</p>
	                    </div>
	                    " . $this->post_meta_3($post) . "
	                </div>
	                <div class=\"jeg_readmore_arrow\">
	                	<a href=\"" . get_the_permalink($post) . "\"><i class=\"fa fa-long-arrow-right\"></i></a>
	                </div>
				</div>
            </article>";

		return $output;
	}


	public function build_column_1($results)
	{
		$first_block  = '';
		$ads_position = $this->random_ads_position(sizeof($results));

		for ( $i = 0; $i < sizeof($results); $i++ )
		{
			if ( $i == $ads_position )
			{
				$first_block .= $this->render_module_ads();
			}

			$first_block .= $this->render_block_type_1($results[$i]);
		}

		$output =
			"<div class=\"jeg_posts jeg_load_more_flag\">
                {$first_block}
            </div>";

		return $output;
	}

	public function build_column_1_alt($results)
	{
		$first_block  = '';
		$ads_position = $this->random_ads_position(sizeof($results));

		for ( $i = 0; $i < sizeof($results); $i++ )
		{
			if ( $i == $ads_position )
			{
				$first_block .= $this->render_module_ads('jeg_ajax_loaded anim_' . $i);
			}

			$first_block .= $this->render_block_type_1($results[$i]);
		}

		$output = $first_block;

		return $output;
	}

	public function render_output($attr, $column_class)
	{
		$results    = $this->build_query($attr);
		$navigation = $this->render_navigation($attr, $results['next'], $results['prev'], $results['total_page']);

		if(!empty($results['result'])) {
			$content = $this->render_column($results['result'], $column_class);
		} else {
			$content = $this->empty_content();
		}

		return
			"<div class=\"jeg_block_container\">
                {$this->get_content_before($attr)}
                {$content}
                {$this->get_content_after($attr)}
            </div>
            <div class=\"jeg_block_navigation\">
                {$this->get_navigation_before($attr)}
                {$navigation}
                {$this->get_navigation_after($attr)}
            </div>";
	}

	public function render_column($result, $column_class)
	{
		$content = $this->build_column_1($result);
		return $content;
	}

	public function render_column_alt($result, $column_class)
	{
		$content = $this->build_column_1_alt($result);
		return $content;
	}
}
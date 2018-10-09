<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Menu;

class MenuWalker extends \Walker_Nav_Menu
{
    function build_subcat_menu($category)
    {
        $subcat_output = $subcat_li = '';
        $children = get_categories ( array( 'parent' => $category ) );

        if( ! empty( $children ) )
        {
            foreach( $children as $child ){
                $subcat_li .= "<li data-cat-id=\"{$child->term_id}\" class=\"\"><a href=\"" . get_category_link($child->term_id) . "\">{$child->name}</a></li>";
            }

            $subcat_output =
                "<div class=\"jeg_newsfeed_subcat\">
                    <ul class=\"jeg_subcat_item\">
                        <li data-cat-id=\"{$category}\" class=\"active\"><a href=\"" . get_category_link($category)  ."\">" . jnews_return_translation('All', 'jnews', 'all') . "</a></li>
                        {$subcat_li}
                    </ul>
                </div>";
        }

        return $subcat_output;
    }

    function build_mega_category_1($category, $number)
    {
        $mega_output = '';

        $subcat_menu_output     = $this->build_subcat_menu($category);
        $subcat_class           = empty ( $subcat_menu_output )  ? 'no_subcat' : 'with_subcat';
        $article_output         = Menu::build_article_category_1($category, $number);

        $mega_output .=
            "<div class=\"sub-menu\">
                <div class=\"jeg_newsfeed clearfix\">
                    {$subcat_menu_output}
                    <div class=\"jeg_newsfeed_list\">
                        <div data-cat-id=\"{$category}\" data-load-status=\"loaded\" class=\"jeg_newsfeed_container\">
                            <div class=\"newsfeed_carousel owl-carousel {$subcat_class}\">
                                {$article_output}
                            </div>
                        </div>
                        <div class=\"newsfeed_overlay\">
                            <div class=\"preloader_type preloader_" . get_theme_mod('jnews_loader_mega_menu', 'dot') . "\">
                                <div class=\"newsfeed_preloader jeg_preloader dot\">
                                    <span></span><span></span><span></span>
                                </div>
                                <div class=\"newsfeed_preloader jeg_preloader circle\">
                                    <div class=\"jnews_preloader_circle_outer\">
                                        <div class=\"jnews_preloader_circle_inner\"></div>
                                    </div>
                                </div>
                                <div class=\"newsfeed_preloader jeg_preloader square\">
                                    <div class=\"jeg_square\"><div class=\"jeg_square_inner\"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";

        return $mega_output;
    }

    function build_mega_category_2($category, $number, $tags)
    {
        $mega_output = $tag_string = '';

        $subcat_menu_output     = $this->build_subcat_menu($category);
        $subcat_class           = empty ( $subcat_menu_output )  ? 'no_subcat' : 'with_subcat';
        $article_output         = Menu::build_article_category_2($category, $number);
        $tags                   = explode( ',', $tags );

        foreach ( $tags as $tag )
        {
            $tag_detail  = get_tag( $tag );

            if ( ! is_wp_error( $tag_detail ) )
            {
                $tag_string .= "<li><a href='" . get_tag_link( $tag ) . "'>{$tag_detail->name}</a></li>";
            }
        }

        // Style 2
        $mega_output .=
            "<div class=\"sub-menu\">
                <div class=\"jeg_newsfeed style2 clearfix\">
                    {$subcat_menu_output}
                    <div class=\"jeg_newsfeed_list loaded\">
                        <div data-cat-id=\"{$category}\" data-load-status=\"loaded\" class=\"jeg_newsfeed_container\">
                            <div class=\"newsfeed_static {$subcat_class}\">
                                {$article_output}
                            </div>
                        </div>
                        <div class=\"newsfeed_overlay\">
                            <div class=\"preloader_type preloader_" . get_theme_mod('jnews_loader_mega_menu', 'dot') . "\">
                                <div class=\"newsfeed_preloader jeg_preloader dot\">
                                    <span></span><span></span><span></span>
                                </div>
                                <div class=\"newsfeed_preloader jeg_preloader circle\">
                                    <div class=\"jnews_preloader_circle_outer\">
                                        <div class=\"jnews_preloader_circle_inner\"></div>
                                    </div>
                                </div>
                                <div class=\"newsfeed_preloader jeg_preloader square\">
                                    <div class=\"jeg_square\"><div class=\"jeg_square_inner\"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"jeg_newsfeed_tags\">
                        <h3>" . esc_html__('Trending Tags', 'jnews') . "</h3>
                        <ul>{$tag_string}</ul>
                    </div>

                </div>
            </div>";


        return $mega_output;
    }

    function build_custom_mega($post_id)
    {
        return "<div class=\"sub-menu custom-mega-menu\">" . jeg_render_builder_content($post_id) . "</div>";
    }

    function start_el(&$output, $item, $depth = 0, $args = Array(), $current_object_id = 0)
    {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $value = $item_per_row = $number = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $classes[] = 'bgnav';

        if(isset($item->mega_menu['type']) && ( $item->mega_menu['type'] === 'category_1' || $item->mega_menu['type'] === 'category_2' || $item->mega_menu['type'] === 'custom') ) {
            $classes[] = 'jeg_megamenu';
            $classes[] = $item->mega_menu['type'];
        }

        if($depth > 0 && isset($item->mega_menu['child_mega']) && $item->mega_menu['child_mega'] !== 'disable')
        {
            $classes[] = 'jeg_child_megamenu';
            $classes[] = $item->mega_menu['child_mega'];
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        if($depth === 0 && isset($item->mega_menu['type']) && ( $item->mega_menu['type'] === 'category_1' || $item->mega_menu['type'] === 'category_2'))
        {
            $number = ' data-number="' . $item->mega_menu['number'] . '" ';
        }

        if(isset($item->mega_menu['override_item_row']) && $item->mega_menu['override_item_row'] === '1')
        {
            $item_per_row = ' data-item-row="' . $item->mega_menu['item_row'] . '" ';
        } else {
            $item_per_row = ' data-item-row="default" ';
        }


        $output .= $indent . '<li' . $id . $value . $class_names . $number . $item_per_row . '>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $nav_description = ! empty($item->description) ? '<span>' . esc_attr( $item->description ) . '</span>' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $this->menu_icon($item->mega_menu, $depth);

        $item_output .= $args->link_before  . apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= $this->badge_content($item->mega_menu, $depth);

        $item_output .= '</a>';
        $item_output .= $args->after;

        if(isset($item->mega_menu['type']) && get_post_type() !== 'custom-mega-menu')
        {
            switch($item->mega_menu['type']) {
                case 'category_1' :
                    $item_output .= $this->build_mega_category_1($item->mega_menu['category'], $item->mega_menu['number']);
                    break;
                case 'category_2' :
                    $item_output .= $this->build_mega_category_2($item->mega_menu['category'], $item->mega_menu['number'], $item->mega_menu['trending_tag']);
                    break;
                case 'custom' :
                    $item_output .= $this->build_custom_mega($item->mega_menu['custom_mega']);
                    break;
            }
        }

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    function menu_icon($menu, $depth)
    {
        if(isset($menu['enable_icon']) && $menu['enable_icon'])
        {
            $icon_class = $depth > 0 ? 'jeg_font_menu_child' : 'jeg_font_menu';
            $icon_color = $menu['icon_color'] ? "style='color: " . $menu['icon_color'] . "'" : "";
            return  "<i {$icon_color} class='{$icon_class} fa " . $menu['icon'] ."'></i>";
        }

        return null;
    }

    function badge_content($menu, $depth)
    {
        $badge_field = $depth > 0 ? 'child_badge' : 'badge';

        if(isset($menu[$badge_field]) && $menu[$badge_field] !== 'disable')
        {
            $class = ['menu-item-badge'];

            $class[] = 'jeg-badge-' . $menu[$badge_field];
            $badge_field = $depth > 0 ? 'child_badge_' : 'badge_';

            $badge_text = $menu[$badge_field . 'text'];
            $badge_bg_color = $menu[$badge_field . 'bg_color'];
            $badge_text_color = $menu[$badge_field . 'text_color'];

            return '<span class="' . join(' ', $class) . '"style="background-color: ' . $badge_bg_color . '; color: ' . $badge_text_color . '">' . $badge_text . '</span>';
        }
    }
}
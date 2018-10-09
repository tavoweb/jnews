<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

Class Post_Content_View extends PostViewAbstract
{
    public function render_module_back($attr, $column_class)
    {
        add_filter('jnews_allow_override_share', '__return_false');
        $float_bar = $float_class = '';

        if($attr['float_share'] && function_exists('jnews_share_float_bar')) {
            ob_start();
            jnews_share_float_bar(get_the_ID());
            $float_bar = ob_get_clean();

            $float_class = 'with-share';
        } else {
            $float_class = 'no-share';
        }

        return
            "<div {$this->element_id($attr)} class='jeg_custom_content_wrapper {$attr['scheme']} {$attr['el_class']}'>
                <div class='entry-content  {$float_class}'>
                    <div class=\"jeg_share_button share-float jeg_sticky_share clearfix {$attr['float_style']}\">
                        {$float_bar}
                    </div>
                    <div class='content-inner'>
                        {$this->paragraph_content()}
                    </div>
                </div>
            </div>";
    }

    public function render_module_front($attr, $column_class)
    {
        add_filter('jnews_allow_override_share', '__return_false');
        $float_bar = $float_class = '';

        if($attr['float_share'] && function_exists('jnews_share_float_bar')) {
            ob_start();
            jnews_share_float_bar(get_the_ID());
            $float_bar = ob_get_clean();

            $float_class = 'with-share';
        } else {
            $float_class = 'no-share';
        }

        return
            "<div {$this->element_id($attr)} class='jeg_custom_content_wrapper {$attr['scheme']} {$attr['el_class']}'>
                <div class='entry-content  {$float_class}'>
                    <div class=\"jeg_share_button share-float jeg_sticky_share clearfix {$attr['float_style']}\">
                        {$float_bar}
                    </div>
                    <div class='content-inner'>
                        " . $this->get_content() . "
                    </div>
                </div>
            </div>";
    }

    public function get_content()
    {
        ob_start();
        the_content();
        return ob_get_clean();
    }

    public function paragraph_content()
    {
        return "<p><span class=\"dropcap\">D</span>ropcap the popularization of the “ideal measure” has led to advice such as “Increase font size for large screens and reduce font size for small screens.” While a good measure does improve the reading experience, it’s only one rule for <a href=\"#\">good typography</a>. Another rule is to maintain a comfortable font size. </p><p>Strech lining hemline above knee burgundy glossy silk complete hid zip little catches rayon. Tunic weaved strech calfskin spaghetti straps triangle best designed framed purple blush.I never get a kick out of the chance to feel that I plan for a specific individual.</p><p>Separated they live in Bookmarksgrove right at the coast of the <a href=\"#\">Semantics</a>, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p><p>A wonderful serenity has taken <strong>possession</strong> of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. Even the all-powerful Pointing has no control about the blind texts it is an almost <a href=\"#\">unorthographic</a> life One day however a small line of blind text by the name of<strong> Lorem Ipsum</strong> decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p><blockquote class=\"pullquote align-center\"><p>The will to win, the desire to succeed, the urge to reach your full potential these are the keys that will unlock the door to personal excellence.</p></blockquote><p>One morning, when <strong>Gregor Samsa</strong> woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his <em>armour-like</em> back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p><p>A wonderful serenity has taken <strong>possession</strong> of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. Even the all-powerful Pointing has no control about the blind texts it is an almost <a href=\"#\">unorthographic</a> life One day however a small line of blind text by the name of<strong> Lorem Ipsum</strong> decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p><p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p><p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>";
    }
}
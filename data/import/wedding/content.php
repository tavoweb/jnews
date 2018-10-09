<?php

return array(

    // image
    'image' => array(
        'wedding1' => 'http://jegtheme.com/asset/jnews/demo/default/fashion1.jpg',
        'wedding2' => 'http://jegtheme.com/asset/jnews/demo/default/fashion2.jpg',
        'wedding3' => 'http://jegtheme.com/asset/jnews/demo/default/fashion3.jpg',
        'wedding4' => 'http://jegtheme.com/asset/jnews/demo/default/fashion4.jpg',
        'wedding5' => 'http://jegtheme.com/asset/jnews/demo/default/fashion5.jpg',
        'wedding6' => 'http://jegtheme.com/asset/jnews/demo/default/fashion6.jpg',
        'wedding7' => 'http://jegtheme.com/asset/jnews/demo/default/travel1.jpg',
        'wedding8' => 'http://jegtheme.com/asset/jnews/demo/default/travel2.jpg',
        'wedding9' => 'http://jegtheme.com/asset/jnews/demo/default/travel3.jpg',
        'about' => 'http://jegtheme.com/asset/jnews/demo/wedding/avatar.jpg',
        'hero-cover' => 'http://jegtheme.com/asset/jnews/demo/wedding/hero-cover.jpg',
        'featured' => 'http://jegtheme.com/asset/jnews/demo/wedding/featured.jpg',
        'favicon' => 'http://jegtheme.com/asset/jnews/demo/default/favicon.png',
        'ad_300x250' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x250.jpg',
        'ad_300x600' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x600.jpg',
        'ad_970x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_970x90.png'
    ),

    // create taxonomy
    'taxonomy' => array(
        'category' => array(
            'bridal' =>
                array(
                    'title' => 'Bridal',
                    'description' => 'You can add some category description here.'
                ),
            'engagements' =>
                array(
                    'title' => 'Engagements',
                    'description' => 'You can add some category description here.'
                ),
            'honeymoon' =>
                array(
                    'title' => 'Honeymoon',
                    'description' => 'You can add some category description here.'
                ),
            'inspiration' =>
                array(
                    'title' => 'Inspiration',
                    'description' => 'You can add some category description here.'
                ),
            'uncategorized' =>
                array(
                    'title' => 'Uncategorized',
                    'description' => 'You can add some category description here.'
                ),
            'vendors' =>
                array(
                    'title' => 'Vendors',
                    'description' => 'You can add some category description here.'
                ),
            'weddings' =>
                array(
                    'title' => 'Weddings',
                    'description' => 'You can add some category description here.'
                ),
        ),

        'post_tag' => array(
            'beach' => array(
                'title' => 'Beach',
            ),
            'casual' => array(
                'title' => 'Casual',
            ),
            'couples' => array(
                'title' => 'Couples',
            ),
            'date' => array(
                'title' => 'Date',
            ),
            'disney' => array(
                'title' => 'Disney',
            ),
            'formal' => array(
                'title' => 'Formal',
            ),
            'indoor' => array(
                'title' => 'Indoor',
            ),
            'kissing' => array(
                'title' => 'Kissing',
            ),
            'outdoor' => array(
                'title' => 'Outdoor',
            ),
            'photography' => array(
                'title' => 'Photography',
            ),
            'prewedding' => array(
                'title' => 'Prewedding',
            ),
        )
    ),

    // post & page
    'post' => array(
        'vibrant-bridal-session-at-the-springs' => array(
            'title' => "Vibrant Bridal Session at the Springs",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding1',
            'taxonomy' => array(
                'category' => 'bridal,engagements,vendors,weddings',
                'post_tag' => 'date,disney,formal,kissing'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Any spring or summer brides around here? Lucky brides who will become a wife with the warmth of the sun and colorful blooms aplenty.'
            )
        ),
        'aspen-wedding-with-modern-tropical-vibes' => array(
            'title' => "Aspen Wedding with Modern, Tropical Vibes",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding2',
            'taxonomy' => array(
                'category' => 'bridal,honeymoon,weddings',
                'post_tag' => 'disney,indoor,kissing,photography'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'an-island-wedding-filled-with-florals-family-fun' => array(
            'title' => "An island wedding filled with florals, family and fun",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding3',
            'taxonomy' => array(
                'category' => 'bridal,engagements,honeymoon,inspiration,weddings',
                'post_tag' => 'couples,disney,outdoor,photography'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'copper-ceremony-arch' => array(
            'title' => "Copper Ceremony Arch",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding4',
            'taxonomy' => array(
                'category' => 'honeymoon,inspiration,vendors',
                'post_tag' => 'beach,date,formal,outdoor'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'marry-someone-you-like-killing-time-with' => array(
            'title' => "Marry Someone You Like Killing Time With",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding5',
            'taxonomy' => array(
                'category' => 'bridal,engagements,inspiration,vendors',
                'post_tag' => 'casual,disney,photography,prewedding'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'As much as you want them to, they can\'t read minds. Tell them that you feel disconnected and that you want a day alone together or date night.'
            )
        ),
        'creating-our-love-wall-photo-booth' => array(
            'title' => "Creating our love wall photo booth",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding6',
            'taxonomy' => array(
                'category' => 'bridal,engagements,inspiration',
                'post_tag' => 'casual,couples,date,formal'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'wedding-tips-and-inspiration' => array(
            'title' => "Wedding Tips and Inspiration",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding7',
            'taxonomy' => array(
                'category' => 'bridal,inspiration,vendors',
                'post_tag' => 'beach,indoor,kissing,photography'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Creating our love wall photo booth'
            )
        ),
        '10-secrets-to-marriage-success' => array(
            'title' => "10+ Secrets to Marriage Success",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding8',
            'taxonomy' => array(
                'category' => 'honeymoon,vendors,weddings',
                'post_tag' => 'couples,formal,kissing,outdoor'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'how-to-say-no-to-being-in-a-wedding' => array(
            'title' => "How to Say No to Being in a Wedding",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding9',
            'taxonomy' => array(
                'category' => 'engagements,inspiration,weddings',
                'post_tag' => 'couples,kissing,outdoor,prewedding'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Speaking of taking the lead, serving as the maid of honor is a time-consuming role that’s not to be taken lightly.'
            )
        ),
        'a-wedding-is-an-important-and-special-time-for-the-couple' => array(
            'title' => "A wedding is an important and special time for the couple",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding1',
            'taxonomy' => array(
                'category' => 'bridal,engagements,vendors,weddings',
                'post_tag' => 'beach,date,disney,photography'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Whether you’re wary about the public speaking or unsure you really know a couple well enough, those are concerns worth raising, and the couple should appreciate your candor.'
            )
        ),
        'an-organic-modern-winter-wedding' => array(
            'title' => "An Organic Modern Winter Wedding",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding2',
            'taxonomy' => array(
                'category' => 'bridal,vendors,weddings',
                'post_tag' => 'beach,indoor,kissing,prewedding'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'a-wedding-is-an-important-and-special-time-for-the-couple-2' => array(
            'title' => "A wedding is an important and special time for the couple",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding3',
            'taxonomy' => array(
                'category' => 'engagements,honeymoon,inspiration',
                'post_tag' => 'couples,date,kissing,prewedding'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Whether you’re wary about the public speaking or unsure you really know a couple well enough, those are concerns worth raising, and the couple should appreciate your candor.'
            )
        ),
        'how-to-have-the-perfect-pastel-summer-wedding' => array(
            'title' => "How To Have The Perfect Pastel Summer Wedding",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding4',
            'taxonomy' => array(
                'category' => 'honeymoon,vendors,weddings',
                'post_tag' => 'couples,disney,outdoor,prewedding'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'As much as you want them to, they can\'t read minds. Tell them that you feel disconnected and that you want a day alone together or date night.'
            )
        ),
        '2019-dress-collections' => array(
            'title' => "2019 Dress Collections",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding5',
            'taxonomy' => array(
                'category' => 'engagements,vendors,weddings',
                'post_tag' => 'beach,casual,kissing,photography'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Creating our love wall photo booth'
            )
        ),
        'we-seriously-want-to-steal-this-brides-amazing-style' => array(
            'title' => "We Seriously Want To Steal This Bride's Amazing Style",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding6',
            'taxonomy' => array(
                'category' => 'engagements,inspiration',
                'post_tag' => 'beach,formal,outdoor,photography'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'a-spectacular-bali-destination-wedding-for-50k' => array(
            'title' => "A Spectacular Bali Destination Wedding For $50k",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding7',
            'taxonomy' => array(
                'category' => 'honeymoon,inspiration,weddings',
                'post_tag' => 'beach,couples,date,formal'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Speaking of taking the lead, serving as the maid of honor is a time-consuming role that’s not to be taken lightly.'
            )
        ),
        'take-a-bite-out-of-spring-with-these-wedding-ideas' => array(
            'title' => "Take A Bite Out Of Spring With These Wedding Ideas",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding8',
            'taxonomy' => array(
                'category' => 'honeymoon,vendors',
                'post_tag' => 'beach,kissing,photography,prewedding'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'six-signs-youre-a-basic-bride' => array(
            'title' => "Six Signs You're A Basic Bride",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding9',
            'taxonomy' => array(
                'category' => 'engagements,vendors,weddings',
                'post_tag' => 'beach,couples,date,formal'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'looking-for-bridesmaid-dresses' => array(
            'title' => "Looking for Bridesmaid Dresses?",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding1',
            'taxonomy' => array(
                'category' => 'inspiration,weddings',
                'post_tag' => 'beach,casual,photography,prewedding'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Speaking of taking the lead, serving as the maid of honor is a time-consuming role that’s not to be taken lightly.'
            )
        ),
        'free-wedding-seating-chart-printable' => array(
            'title' => "FREE Wedding Seating Chart Printable",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding2',
            'taxonomy' => array(
                'category' => 'inspiration',
                'post_tag' => 'beach,date,formal,prewedding'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        '25-ceremony-backdrops-you-have-to-see' => array(
            'title' => "25 Ceremony Backdrops You Have to See",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'wedding3',
            'taxonomy' => array(
                'category' => 'engagements,honeymoon,vendors',
                'post_tag' => 'couples,date,indoor,kissing'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Speaking of taking the lead, serving as the maid of honor is a time-consuming role that’s not to be taken lightly.'
            )
        ),


        // page
        'home-1' => array(
            'title' => 'Home 1',
            'content' => 'home1.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1533289285829{background-image: url({{image:hero-cover:url:full}}) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1533287988768{background-color: #a5c5c8 !important;}.vc_custom_1525840152798{padding-top: 60px !important;padding-bottom: 100px !important;}.vc_custom_1525784336517{margin-right: 100px !important;margin-bottom: 0px !important;margin-left: 100px !important;}.vc_custom_1525789380284{margin-bottom: 30px !important;}.vc_custom_1525870709914{margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1533288039364{margin-top: 15px !important;margin-bottom: 15px !important;border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;border-top-color: rgba(255,255,255,0.3) !important;border-top-style: solid !important;border-bottom-color: rgba(255,255,255,0.3) !important;border-bottom-style: solid !important;}.vc_custom_1528263649298{margin-top: 30px !important;}.vc_custom_1526225150009{padding-left: 30px !important;}',
                '_wpb_post_custom_css' => '.jeg_content {    padding-top: 0 !important;}.jeg_pl_lg_4 {    margin-bottom: 30px !important;}.jeg_main_content .mc4wp-form,.wpb_content_element {    margin-bottom: 0;}',
                '_elementor_data' => 'home1.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor .elementor-element.elementor-element-3cd4614{background-image:url("{{image:hero-cover:url:full}}");background-position:bottom center;background-repeat:no-repeat;background-size:cover;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:-60px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-3cd4614 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-1f6809a .elementor-element-populated{padding:150px 0px 130px 0px;}.elementor .elementor-element.elementor-element-1547939{text-align:center;}.elementor .elementor-element.elementor-element-1547939.elementor-widget-heading .elementor-heading-title{color:#ffffff;}.elementor .elementor-element.elementor-element-1547939 .elementor-heading-title{font-family:"Libre Baskerville", Sans-serif;font-size:72px;font-weight:400;line-height:1em;}.elementor .elementor-element.elementor-element-3790c63{text-align:center;}.elementor .elementor-element.elementor-element-3790c63.elementor-widget-heading .elementor-heading-title{color:#ffffff;}.elementor .elementor-element.elementor-element-3790c63 .elementor-heading-title{font-family:"Libre Baskerville", Sans-serif;font-size:24px;font-weight:400;font-style:italic;line-height:1.2em;}.elementor .elementor-element.elementor-element-d59e4f6{background-color:#a5c5c8;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-d59e4f6 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-c4c6e20 > .elementor-widget-container{border-style:solid;border-width:1px 1px 1px 1px;border-color:rgba(255,255,255,0.3);}.elementor .elementor-element.elementor-element-91e9a5a{margin-top:50px;margin-bottom:50px;}.elementor .elementor-element.elementor-element-8c67c8d.elementor-column .elementor-column-wrap{align-items:center;}.elementor .elementor-element.elementor-element-ba83adf{text-align:center;}.elementor .elementor-element.elementor-element-ba83adf.elementor-widget-heading .elementor-heading-title{color:#1c1c1c;}.elementor .elementor-element.elementor-element-ba83adf .elementor-heading-title{font-family:"Libre Baskerville", Sans-serif;font-size:24px;font-weight:400;font-style:italic;line-height:1.3em;}.elementor .elementor-element.elementor-element-fbeebc7{text-align:center;}.elementor .elementor-element.elementor-element-fbeebc7.elementor-widget-heading .elementor-heading-title{color:#1c1c1c;}.elementor .elementor-element.elementor-element-fbeebc7 .elementor-heading-title{font-family:"Pathway Gothic One", Sans-serif;font-size:18px;font-weight:400;}.elementor .elementor-element.elementor-element-fbeebc7 > .elementor-widget-container{margin:35px 0px 0px 0px;}.elementor .elementor-element.elementor-element-001b6ce .elementor-element-populated{padding:0px 0px 0px 20px;}@media(min-width:1025px){.elementor .elementor-element.elementor-element-3cd4614{background-attachment:scroll;}}'
                )
            )
        ),
        'contact' => array(
            'title' => 'Contact',
            'content' => 'contact.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'default',
                'jnews_single_page' => array(
                    'layout' => 'right-sidebar',
                    'sidebar' => 'default-sidebar',
                    'second_sidebar' => 'default-sidebar',
                    'sticky_sidebar' => '1',
                    'show_post_featured' => '1',
                    'share_position' => 'hide',
                    'share_color' => 'share-monocrhome'
                )
            )
        ),
        'about' => array(
            'title' => 'About',
            'content' => 'about.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'default',
                'jnews_single_page' => array(
                    'layout' => 'right-sidebar',
                    'sidebar' => 'default-sidebar',
                    'second_sidebar' => 'default-sidebar',
                    'sticky_sidebar' => '1',
                    'show_post_featured' => '1',
                    'share_position' => 'hide',
                    'share_color' => 'share-monocrhome'
                )
            )
        ),
        'footer' => array(
            'title' => 'Footer',
            'content' => 'footer.txt',
            'post_type' => 'footer',
            'metabox' => array(
                '_wpb_shortcodes_custom_css' => 'vc_custom_1534734623855{padding-top: 15px !important;padding-bottom: 15px !important;}.vc_custom_1534734709364{margin-bottom: 0px !important;}',
                '_elementor_data' => 'footer.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor .elementor-element.elementor-element-091a91a .elementor-text-editor{text-align:right;}.elementor .elementor-element.elementor-element-091a91a{color:#555555;font-family:"Libre Baskerville", Sans-serif;font-size:12px;font-weight:400;}'
                )
            )
        )
    ),

    // menu location
    'menu_location' => array(
        'main-navigation' => array(
            'title' => 'Header Left',
            'location' => 'navigation'
        ),
        'mobile-navigation' => array(
            'title' => 'Mobile Navigation',
            'location' => 'mobile_navigation'
        ),
        'top-navigation' => array(
            'title' => 'Header Right',
            'location' => 'footer_navigation'
        ),
    ),

    // menu it self
    'menu' => array(

        // Left Menu
        'about' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'About Us',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:about:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'contact' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Contact',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:contact:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        // Right Menu
        'weddings' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Weddings',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:weddings:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'bridal' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Bridal',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:bridal:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'vendors' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Vendors',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:vendors:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        // Mobile Menu
        'home-mobile' => array(
            'location' => 'mobile-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Home',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:home-1:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'about-mobile' => array(
            'location' => 'header-left',
            'menu-item-data' => array(
                'menu-item-title' => 'About',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:about:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'contact-mobile' => array(
            'location' => 'header-left',
            'menu-item-data' => array(
                'menu-item-title' => 'Contact',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:contact:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'weddings-mobile' => array(
            'location' => 'header-right',
            'menu-item-data' => array(
                'menu-item-title' => 'Weddings',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:weddings:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'bridal-mobile' => array(
            'location' => 'header-right',
            'menu-item-data' => array(
                'menu-item-title' => 'Bridal',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:bridal:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'vendors-mobile' => array(
            'location' => 'header-right',
            'menu-item-data' => array(
                'menu-item-title' => 'Vendors',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:vendors:id}}',
                'menu-item-status' => 'publish'
            )
        ),
    ),

    'widget_position' => array(
        'Default Sidebar',
    ),

    'widget' => array(
        'widget.json',
    ),

    'customizer' => array(
        'style.json',
    ),

    'plugin' => array(
        'contact-form-7',
        'jnews-instagram',
        'jnews-customizer-category',
        'jnews-jsonld',
        'jnews-meta-header',
        'jnews-social-login',
        'jnews-social-share',
        'jnews-view-counter',
        'mailchimp-for-wp'
    )

);

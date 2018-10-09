<?php

return array(

    // image
    'image' => array(
        'car1' => 'http://jegtheme.com/asset/jnews/demo/motorcycle/moto1.jpg',
        'car2' => 'http://jegtheme.com/asset/jnews/demo/motorcycle/moto2.jpg',
        'car3' => 'http://jegtheme.com/asset/jnews/demo/motorcycle/moto3.jpg',
        'car4' => 'http://jegtheme.com/asset/jnews/demo/motorcycle/moto4.jpg',
        'car5' => 'http://jegtheme.com/asset/jnews/demo/motorcycle/moto5.jpg',
        'car6' => 'http://jegtheme.com/asset/jnews/demo/motorcycle/moto6.jpg',
        'car7' => 'http://jegtheme.com/asset/jnews/demo/motorcycle/moto7.jpg',
        'car8' => 'http://jegtheme.com/asset/jnews/demo/motorcycle/moto8.jpg',
        'car9' => 'http://jegtheme.com/asset/jnews/demo/motorcycle/moto9.jpg',
        'car_bg' => 'http://jegtheme.com/asset/jnews/demo/motorcycle/moto_bg.jpg',
        'logo' => 'http://jegtheme.com/asset/jnews/demo/automotive/logo1x.png',
        'logo2x' => 'http://jegtheme.com/asset/jnews/demo/automotive/logo2x.png',
        'mobile_logo' => 'http://jegtheme.com/asset/jnews/demo/automotive/logo.png',
        'mobile_logo2x' => 'http://jegtheme.com/asset/jnews/demo/automotive/logo.png',
        'sticky_logo' => 'http://jegtheme.com/asset/jnews/demo/automotive/logo.png',
        'sticky_logo2x' => 'http://jegtheme.com/asset/jnews/demo/automotive/logo.png',
        'favicon' => 'http://jegtheme.com/asset/jnews/demo/default/favicon.png',
        'ad_345x345' => 'http://jegtheme.com/asset/jnews/demo/default/ad_345x345.jpg',
        'ad_300x250' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x250.jpg',
        'ad_728x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_728x90.png',
        'ad_300x600' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x600.jpg',
        'ad_970x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_970x90.png',
        'ad_vertical' => 'http://jegtheme.com/asset/jnews/demo/gadget-review/ad_vertical.png'

    ),

    // create taxonomy
    'taxonomy' => array(
        'category' => array(

            'comparison' => array(
                'title' => 'Comparison',
                'description' => 'A wonderful serenity has taken possession of my entire soul.'
            ),
            'modification' => array(
                'title' => 'Modification',
                'description' => 'A wonderful serenity has taken possession of my entire soul.',
                'parent' => 'brand'
            ),
            'news' => array(
                'title' => 'News',
                'description' => 'A wonderful serenity has taken possession of my entire soul.',
                'parent' => 'brand'
            ),
            'review' => array(
                'title' => 'Review',
                'description' => 'A wonderful serenity has taken possession of my entire soul.',
                'parent' => 'brand'
            ),
            'test-drive' => array(
                'title' => 'Test Drive',
                'description' => 'A wonderful serenity has taken possession of my entire soul.',
                'parent' => 'brand'
            ),
            'video' => array(
                'title' => 'Video',
                'description' => 'A wonderful serenity has taken possession of my entire soul.',
                'parent' => 'brand'
            )
        ),

        'post_tag' => array(
            'audi' => array(
                'title' => 'Audi',
            ),
            'auto-show' => array(
                'title' => 'Auto Show',
            ),
            'bentley' => array(
                'title' => 'Bentley',
            ),
            'black' => array(
                'title' => 'Black',
            ),
            'classic' => array(
                'title' => 'Classic',
            ),
            'customization' => array(
                'title' => 'Customization',
            ),
            'dashboard' => array(
                'title' => 'Dashboard',
            ),
            'driving' => array(
                'title' => 'Driving',
            ),
            'ford' => array(
                'title' => 'Ford',
            ),
            'german' => array(
                'title' => 'German',
            ),
            'hands' => array(
                'title' => 'Hands',
            ),
            'honda' => array(
                'title' => 'Honda',
            ),
            'jaguar' => array(
                'title' => 'Jaguar',
            ),
            'japanese' => array(
                'title' => 'Japanese',
            ),
            'lamborghini' => array(
                'title' => 'Lamborghini',
            ),
            'lexus' => array(
                'title' => 'Lexus',
            ),
            'muscle-car' => array(
                'title' => 'Muscle Car',
            ),
            'performance' => array(
                'title' => 'Performance',
            ),
            'porsche' => array(
                'title' => 'Porsche',
            )
        )
    ),

    // post & page
    'post' => array(
        'lamborghini-grew-rapidly-during-its-first-decade' => array(
            'title' => "Lamborghini Grew Rapidly During Its First Decade",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'car1',
            'taxonomy' => array(
                'category' => 'news,test-drive',
                'post_tag' => 'audi,german,lamborghini,performance'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'Provides a set of "lightweight" components that, to the maximum degree possible, work the same on all platforms.'
            )
        ),
        '2018-ford-mustang-gt-performance-package-level-2' => array(
            'title' => "2018 Ford Mustang GT Performance Package Level 2",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'car2',
            'taxonomy' => array(
                'category' => 'modification,review',
                'post_tag' => 'auto-show,driving,honda,lexus'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'enable_review' => '1'
            )
        ),
        'proposed-automotive-tariff-would-slap-a-25-import-duty-on-classic-cars' => array(
            'title' => "Proposed Automotive Tariff Would Slap a 25% Import Duty on Classic Cars",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'car3',
            'taxonomy' => array(
                'category' => 'news',
                'post_tag' => 'auto-show,dashboard,lamborghini,lexus'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:practice:id}}')
            )
        ),
        '2018-toyota-ch-r-xle-essentials-would-been-a-better-scion' => array(
            'title' => "2018 Toyota CH-R XLE Essentials: Would Been a Better Scion",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'car4',
            'taxonomy' => array(
                'category' => 'news',
                'post_tag' => 'driving,honda,japanese,lexus'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'Yet strangely, I don’t hate this thing. The driver and passenger have plenty of room up front and the materials in this XLE Premium were very nice.'
            )
        ),
        'drag-race-audi-sq7-vs-porsche-panamera' => array(
            'title' => "Drag Race! Audi SQ7 Vs Porsche Panamera",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'car5',
            'taxonomy' => array(
                'category' => 'comparison,test-drive,video',
                'post_tag' => 'audi,ford,honda,muscle-car',
                'post_format' => 'post-format-video'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'Welcome to the most comprehensive collection of official Top Gear clips. Whether you\'re searching for a caravan challenge, Ken Block in the Hoonicorn, cars versus fighter jets, Stig power laps or the latest Chris Harris Drives, you can find all the iconic films here.',
                '_format_video_embed' => 'https://www.youtube.com/watch?v=khicKLZ1kR4'
            )
        ),
        'the-10-cheapest-new-crossovers-and-suvs-of-2018' => array(
            'title' => "The 10 Cheapest New Crossovers and SUVs of 2018",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'car6',
            'taxonomy' => array(
                'category' => 'comparison',
                'post_tag' => 'bentley,black,dashboard,jaguar'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'A low price is just about the most enticing feature a new car can have. Combine an attractive MSRP with the crossovers and SUVs taking today’s auto market by storm, and you land on an entirely irresistible concoction.'
            )
        ),
        'rear-wheel-savings-2018-audi-r8-rws-priced' => array(
            'title' => "Rear-Wheel Savings: 2018 Audi R8 RWS Priced at $141,250",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'car7',
            'taxonomy' => array(
                'category' => 'comparison,news,review',
                'post_tag' => 'auto-show,classic,hands,jaguar'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:practice:id}}'),
                'post_subtitle' => 'A low price is just about the most enticing feature a new car can have. Combine an attractive MSRP with the crossovers and SUVs taking today’s auto market by storm, and you land on an entirely irresistible concoction.'
            )
        ),
        'in-depth-interior-infotainment-cargo-space' => array(
            'title' => "In-Depth: Interior, Infotainment, Cargo Space Mustang Shelby",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'car8',
            'taxonomy' => array(
                'category' => 'comparison,review,test-drive',
                'post_tag' => 'auto-show,bentley,dashboard,muscle-car'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'enable_review' => '1'
            )
        ),
        'lexus-lc500-vs-honda-civic-type-r-top-gear-series-25' => array(
            'title' => "Lexus LC500 vs Honda Civic Type R | Top Gear: Series 25",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'car9',
            'taxonomy' => array(
                'category' => 'comparison,test-drive,video',
                'post_tag' => 'auto-show,bentley,honda,lexus',
                'post_format' => 'post-format-video'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'Player one: Lexus LC500 vs Player two: Honda Civic Type R. One lap, the winner takes it all.',
                '_format_video_embed' => 'https://www.youtube.com/watch?v=O7NHV7fVUPc'
            )
        ),
        'porsche-cayman-history-doesnt-repeat-but-it-rhymes' => array(
            'title' => "Porsche Cayman: History Doesn’t Repeat, but It Rhymes",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'car1',
            'taxonomy' => array(
                'category' => 'modification,news,test-drive',
                'post_tag' => 'bentley,customization,dashboard,driving'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Porsche Cayman: History Doesn’t Repeat, but It Rhymes'
            )
        ),
        'litte-q-coupe-audi-teases-q8-coupe' => array(
            'title' => "Litte Q Coupe: Audi Teases Q8 Coupe",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'car2',
            'taxonomy' => array(
                'category' => 'review,test-drive',
                'post_tag' => 'bentley,classic,lamborghini,muscle-car'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'A low price is just about the most enticing feature a new car can have. Combine an attractive MSRP with the crossovers and SUVs taking today’s auto market by storm, and you land on an entirely irresistible concoction.'
            )
        ),
        'jaguar-i-pace' => array(
            'title' => "Jaguar I-Pace",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'car3',
            'taxonomy' => array(
                'category' => 'comparison,review,test-drive,video',
                'post_tag' => 'bentley,black,driving,lamborghini',
                'post_format' => 'post-format-video'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'Can Jaguar really take on the mighty Tesla? Watch and learn as Top Gear Magazine’s Jack Rix tells you everything you need to know about the £60k, 394bhp, all-electric Jaguar I-Pace.',
                '_format_video_embed' => 'https://www.youtube.com/watch?v=lOqtNHuFq5k'
            )
        ),
        'power-torque-luxury-2018-bentley-continental-supersports' => array(
            'title' => "Power, Torque & Luxury! 2018 Bentley Continental Supersports",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'car4',
            'taxonomy' => array(
                'category' => 'news,test-drive,video',
                'post_tag' => 'ford,german,honda,jaguar',
                'post_format' => 'post-format-video'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'Ladies and Gentlemen, meet the Bentley Continental Supersports!',
                '_format_video_embed' => 'https://www.youtube.com/watch?v=7AFlNzMw95A',
                'enable_review' => '1'
            )
        ),
        'mazda-cx-5-anthem' => array(
            'title' => "Mazda CX-5 Anthem",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'car5',
            'taxonomy' => array(
                'category' => 'news,review,test-drive,video',
                'post_tag' => 'black,classic,driving,honda',
                'post_format' => 'post-format-video'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'The 2018 Mazda CX-5 is the product of engineer and designer working in unison, daring to reimagine the automobile as a whole.',
                '_format_video_embed' => 'https://www.youtube.com/watch?v=J69QkakzvFE',
                'enable_review' => '1'
            )
        ),
        'reasons-to-never-get-leather-seats-in-your-car' => array(
            'title' => "Reasons To Never Get Leather Seats in Your Car",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'car6',
            'taxonomy' => array(
                'category' => 'comparison,modification,news,test-drive',
                'post_tag' => 'audi,auto-show,dashboard,performance'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:practice:id}}'),
                'post_subtitle' => 'Yet strangely, I don’t hate this thing. The driver and passenger have plenty of room up front and the materials in this XLE Premium were very nice.'
            )
        ),

        // page
        'home-1' => array(
            'title' => 'Home 1',
            'content' => 'home1.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1529590291929{margin-top: -30px !important;}.vc_custom_1529665613112{background-color: #fbb731 !important;}.vc_custom_1529666424274{margin-bottom: -40px !important;padding-top: 30px !important;}.vc_custom_1529665626528{margin-bottom: 0px !important;}',
                '_wpb_post_custom_css' => '.jeg_content{overflow-x:hidden}.jeg_pl_md_1 .jeg_post_title{font-size:22px}.jnews_above_footer_ads>.ads-wrapper{display:none}.wpb_video_heading{font-size:22px;font-weight:700;line-height:1.6em;margin-top:0}',
                '_elementor_data' => 'home1.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.jeg_content{overflow-x:hidden}.jeg_pl_md_1 .jeg_post_title{font-size:22px}.jnews_above_footer_ads>.ads-wrapper{display:none}.wpb_video_heading{font-size:22px;font-weight:700;line-height:1.6em;margin-top:0}.jeg_postblock_4 .jeg_post_excerpt {display: none;}.elementor .elementor-element.elementor-element-4cc73f0{margin-top:-30px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-505030c{background-color:#fbb731;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:30px 0px 0px 0px;}.elementor .elementor-element.elementor-element-505030c > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-73542ef{text-align:center;}.elementor .elementor-element.elementor-element-73542ef.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-73542ef .elementor-heading-title{font-family:"Roboto Condensed", Sans-serif;font-size:44px;font-weight:700;}.elementor .elementor-element.elementor-element-587aa0b{text-align:center;}.elementor .elementor-element.elementor-element-587aa0b.elementor-widget-heading .elementor-heading-title{color:#53585c;}.elementor .elementor-element.elementor-element-587aa0b .elementor-heading-title{font-family:"Roboto Condensed", Sans-serif;font-size:16px;font-weight:400;}.elementor .elementor-element.elementor-element-ab73383 .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-19a6d47 .elementor-element-populated{padding:0px 0px 0px 10px;}@media(min-width:768px){.elementor .elementor-element.elementor-element-89a0c2f{width:58.333%;}.elementor .elementor-element.elementor-element-ebe31e2{width:24.997%;}}'
                )
            )
        ),
        'home-2' => array(
            'title' => 'Home 2',
            'content' => 'home2.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1529346011015{margin-bottom: -40px !important;padding-top: 30px !important;background-color: #fbb731 !important;}.vc_custom_1529566555330{margin-bottom: 40px !important;}.vc_custom_1529261364176{margin-top: 0px !important;margin-bottom: 0px !important;}',
                '_wpb_post_custom_css' => '.jeg_content{overflow-x:hidden;padding-top:0}.jeg_pl_md_1 .jeg_post_title{font-size:22px}.jnews_above_footer_ads>.ads-wrapper{display:none}.wpb_video_heading{font-size:28px;font-weight:700;line-height:1.6em;margin-top:0}',
                '_elementor_data' => 'home2.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.jeg_content{overflow-x:hidden}.jeg_pl_md_1 .jeg_post_title{font-size:22px}.jnews_above_footer_ads>.ads-wrapper{display:none}.wpb_video_heading{font-size:22px;font-weight:700;line-height:1.6em;margin-top:0}.jeg_postblock_4 .jeg_post_excerpt {display: none;}.elementor .elementor-element.elementor-element-79ff0e9{margin-top:-30px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-81ca779 .elementor-divider-separator{border-top-style:solid;border-top-width:4px;border-top-color:#ebebeb;width:100%;}.elementor .elementor-element.elementor-element-81ca779 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor .elementor-element.elementor-element-588245e .elementor-element-populated{padding:10px 0px 0px 15px;}.elementor .elementor-element.elementor-element-6b5efd1 .elementor-divider-separator{border-top-style:solid;border-top-width:4px;border-top-color:#ebebeb;width:100%;}.elementor .elementor-element.elementor-element-6b5efd1 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor .elementor-element.elementor-element-f3860f7 .elementor-divider-separator{border-top-style:solid;border-top-width:4px;border-top-color:#ebebeb;width:100%;}.elementor .elementor-element.elementor-element-f3860f7 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor .elementor-element.elementor-element-zVbXOcj{background-color:#fbb731;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:-40px;padding:30px 0px 0px 0px;}.elementor .elementor-element.elementor-element-zVbXOcj > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-cda8245.elementor-widget-heading .elementor-heading-title{color:#1c1c1c;}.elementor .elementor-element.elementor-element-cda8245 .elementor-heading-title{font-family:"Roboto Condensed", Sans-serif;font-size:44px;font-weight:700;text-transform:none;}.elementor .elementor-element.elementor-element-fd90bd1.elementor-widget-heading .elementor-heading-title{color:#53585c;}.elementor .elementor-element.elementor-element-fd90bd1 .elementor-heading-title{font-family:"Roboto Condensed", Sans-serif;font-size:16px;font-weight:400;}'
                )
            )
        ),
        'home-3' => array(
            'title' => 'Home 3',
            'content' => 'home3.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1530511083842{margin-bottom: -40px !important;padding-top: 15px !important;}.vc_custom_1530511053263{padding-left: 30px !important;}.vc_custom_1529687449350{margin-bottom: 20px !important;}.vc_custom_1529687574846{padding-top: 15px !important;padding-right: 30px !important;padding-left: 30px !important;background-color: #fbb731 !important;}.vc_custom_1530271585478{margin-top: 0px !important;}',
                'jnews_page_loop' => array(
                    'enable_page_loop' => '1',
                    'first_title' => 'News Index',
                    'header_type' => 'heading_8',
                    'layout' => 'right-sidebar',
                    'sidebar' => 'default-sidebar',
                    'second_sidebar' => 'default-sidebar',
                    'sticky_sidebar' => '1',
                    'module' => '5',
                    'excerpt_length' => '20',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'center',
                    'post_offset' => '1',
                    'exclude_category' => '{{category:review:id}}',
                    'sort_by' => 'latest',
                ),
                '_wpb_post_custom_css' => '.jeg_content{overflow-x:hidden}.jeg_pl_md_1 .jeg_post_title{font-size:22px}.jnews_above_footer_ads>.ads-wrapper{display:none}.wpb_video_heading{font-size:22px;font-weight:700;line-height:1.6em;margin-top:0}',
                '_elementor_data' => 'home3.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.jeg_content{overflow-x:hidden}.jeg_pl_md_1 .jeg_post_title{font-size:22px}.jnews_above_footer_ads>.ads-wrapper{display:none}.wpb_video_heading{font-size:22px;font-weight:700;line-height:1.6em;margin-top:0}.elementor .elementor-element.elementor-element-197622e{margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-eb8f420 > .elementor-element-populated{background-color:#fbb731;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:0px 10px 0px 10px;}.elementor .elementor-element.elementor-element-eb8f420 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-eb8f420 .elementor-element-populated{padding:25px 25px 25px 25px;}.elementor .elementor-element.elementor-element-bbdc115.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-bbdc115 .elementor-heading-title{font-family:"Roboto Condensed", Sans-serif;font-size:28px;font-weight:700;}.elementor .elementor-element.elementor-element-911b1a9 .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-384cbcb .elementor-element-populated{padding:10px 0px 0px 15px;}'
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
                    'share_color' => 'share-monocrhome',
                )
            )
        )
    ),

    // menu location
    'menu_location' => array(
        'main-navigation' => array(
            'title' => 'Main Navigation',
            'location' => 'navigation'
        ),
    ),

    // menu it self
    'menu' => array(

        // main & mobile menu
        'home' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Home',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:home-1:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'home-1' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Home Layout 1',
                'menu-item-parent-id' => '{{menu:home:id}}',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:home-1:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'home-2' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Home Layout 2',
                'menu-item-parent-id' => '{{menu:home:id}}',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:home-2:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'home-3' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Home Layout 3',
                'menu-item-parent-id' => '{{menu:home:id}}',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:home-3:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'categories' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Categories',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'review' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Review',
                'menu-item-parent-id' => '{{menu:categories:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:review:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'news' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'News',
                'menu-item-parent-id' => '{{menu:categories:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:news:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'test-drive' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Test Drive',
                'menu-item-parent-id' => '{{menu:categories:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:test-drive:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'comparison' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Comparison',
                'menu-item-parent-id' => '{{menu:categories:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:comparison:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'modification' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Modification',
                'menu-item-parent-id' => '{{menu:categories:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:modification:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'video' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Video',
                'menu-item-parent-id' => '{{menu:categories:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:video:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'brands' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Brands',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'ford' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Ford',
                'menu-item-parent-id' => '{{menu:brands:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'audi' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Audi',
                'menu-item-parent-id' => '{{menu:brands:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'bentley' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Bentley',
                'menu-item-parent-id' => '{{menu:brands:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'honda' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Honda',
                'menu-item-parent-id' => '{{menu:brands:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'jaguar' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Jaguar',
                'menu-item-parent-id' => '{{menu:brands:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'lamborghini' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Lamborghini',
                'menu-item-parent-id' => '{{menu:brands:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'lexus' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Lexus',
                'menu-item-parent-id' => '{{menu:brands:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'mazda' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Mazda',
                'menu-item-parent-id' => '{{menu:brands:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'pages' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Pages',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'article' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Article',
                'menu-item-parent-id' => '{{menu:pages:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'category' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Category',
                'menu-item-parent-id' => '{{menu:pages:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'author' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Author',
                'menu-item-parent-id' => '{{menu:pages:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
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
        )

    ),

    'widget_position' => array(
        'Adsense'
    ),

    'widget' => array(
        'widget.json',
    ),

    'customizer' => array(
        'style.json',
    ),

    'plugin' => array(
        'jnews-breadcrumb',
        'jnews-jsonld',
        'jnews-like',
        'jnews-meta-header',
        'jnews-social-login',
        'jnews-social-share',
        'jnews-view-counter'
    )
);

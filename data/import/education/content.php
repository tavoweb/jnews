<?php

return array(

    // image
    'image' => array(
        'edu1' => 'http://jegtheme.com/asset/jnews/demo/default/news1.jpg',
        'edu2' => 'http://jegtheme.com/asset/jnews/demo/default/news2.jpg',
        'edu3' => 'http://jegtheme.com/asset/jnews/demo/default/news3.jpg',
        'edu4' => 'http://jegtheme.com/asset/jnews/demo/default/news4.jpg',
        'edu5' => 'http://jegtheme.com/asset/jnews/demo/default/news5.jpg',
        'edu6' => 'http://jegtheme.com/asset/jnews/demo/default/news6.jpg',
        'edu7' => 'http://jegtheme.com/asset/jnews/demo/default/news7.jpg',
        'edu8' => 'http://jegtheme.com/asset/jnews/demo/default/news8.jpg',
        'edu9' => 'http://jegtheme.com/asset/jnews/demo/default/news9.jpg',
        'edu10' => 'http://jegtheme.com/asset/jnews/demo/default/news10.jpg',
        'logo' => 'http://jegtheme.com/asset/jnews/demo/education/logo_@1x.png',
        'logo2x' => 'http://jegtheme.com/asset/jnews/demo/education/logo_@2x.png',
        'favicon' => 'http://jegtheme.com/asset/jnews/demo/default/favicon.png',
        'cover' => 'http://jegtheme.com/asset/jnews/demo/education/cover.jpg',
        'ad_345x345' => 'http://jegtheme.com/asset/jnews/demo/default/ad_345x345.jpg',
        'ad_728x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_728x90.png',
        'ad_300x600' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x600.jpg',
        'ad_970x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_970x90.png'
    ),

    // create taxonomy
    'taxonomy' => array(
        'category' => array(
            'learning' =>
                array(
                    'title' => 'Learning',
                    'description' => 'You can add some category description here.'
                ),
            'management' =>
                array(
                    'title' => 'Management',
                    'description' => 'You can add some category description here.'
                ),
            'remedy' =>
                array(
                    'title' => 'Remedy',
                    'description' => 'You can add some category description here.'
                ),
            'stories' =>
                array(
                    'title' => 'Stories',
                    'description' => 'You can add some category description here.'
                ),
            'studying' =>
                array(
                    'title' => 'Studying',
                    'description' => 'You can add some category description here.'
                ),
            'teaching' =>
                array(
                    'title' => 'Teaching',
                    'description' => 'You can add some category description here.'
                ),

        ),
        'post_tag' => array(
            'clever' => array(
                'title' => 'Clever'
            ),
            'education' => array(
                'title' => 'Education'
            ),
            'grade' => array(
                'title' => 'Grade'
            ),
            'ideas' => array(
                'title' => 'Ideas'
            ),
            'knowledge' => array(
                'title' => 'Knowledge'
            ),
            'library' => array(
                'title' => 'Library'
            ),
            'progress' => array(
                'title' => 'Progress'
            ),
            'science' => array(
                'title' => 'Science'
            ),
        )
    ),

    // post & page
    'post' => array(
        'study-abroad-within-a-wide-range-of-subjects' => array(
            'title' => "Study Abroad Within a Wide Range of Subjects",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'edu1',
            'taxonomy' => array(
                'category' => 'remedy,studying',
                'post_tag' => 'clever,education,grade,ideas'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'the-ministry-of-education-provides-statistics' => array(
            'title' => "The Ministry of Education Provides Statistics",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'edu2',
            'taxonomy' => array(
                'category' => 'learning,management,studying',
                'post_tag' => 'clever,education,grade,ideas'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'tracking-behavior-management-visual-printable' => array(
            'title' => "Tracking Behavior Management Visual Printable",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'edu3',
            'taxonomy' => array(
                'category' => 'remedy,teaching',
                'post_tag' => 'clever,education,grade,ideas'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'new-degree-new-life-new-future' => array(
            'title' => "New Degree. New life. New future",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'edu4',
            'taxonomy' => array(
                'category' => 'management,studying,teaching',
                'post_tag' => 'clever,education,grade,ideas'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'literary-sightseeing-in-edinburgh' => array(
            'title' => "Literary Sightseeing in Edinburgh",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'edu5',
            'taxonomy' => array(
                'category' => 'learning,management,studying',
                'post_tag' => 'clever,education,grade,ideas'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'what-to-expect-and-how-to-prepare-for-your-first-days-abroad' => array(
            'title' => "What to Expect and How to Prepare for Your First Days Abroad",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'edu6',
            'taxonomy' => array(
                'category' => 'learning,stories,teaching',
                'post_tag' => 'clever,education,grade,ideas'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'why-i-chose-queen-mary' => array(
            'title' => "Why I Chose Queen Mary",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'edu7',
            'taxonomy' => array(
                'category' => 'remedy,stories,studying',
                'post_tag' => 'clever,knowledge,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'youll-be-amazed-at-the-number-of-courses-available-to-you' => array(
            'title' => "You'll be Amazed at the Number of Courses Available to You.",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'edu8',
            'taxonomy' => array(
                'category' => 'stories,studying',
                'post_tag' => 'clever,knowledge,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'dunnottar-castle-there-and-back-again' => array(
            'title' => "Dunnottar Castle: There and Back Again",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'edu9',
            'taxonomy' => array(
                'category' => 'learning,management,stories',
                'post_tag' => 'clever,knowledge,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'good-intentions-or-good-results' => array(
            'title' => "Good Intentions or Good Results?",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'edu1',
            'taxonomy' => array(
                'category' => 'learning,stories,teaching',
                'post_tag' => 'clever,knowledge,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'states-ed-tech-directors-working-to-make-student-data-more-useful-for-instruction' => array(
            'title' => "States' Ed-Tech Directors Working to Make Student Data More Useful for Instruction",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'edu2',
            'taxonomy' => array(
                'category' => 'learning,management,teaching',
                'post_tag' => 'clever,knowledge,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'school-leaders-must-focus-on-subject-specific' => array(
            'title' => "School Leaders Must Focus on Subject-Specific",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'edu3',
            'taxonomy' => array(
                'category' => 'management,stories,teaching',
                'post_tag' => 'clever,knowledge,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'are-we-doing-anything-today' => array(
            'title' => "Are We Doing Anything Today?",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'edu4',
            'taxonomy' => array(
                'category' => 'learning,management,remedy,stories',
                'post_tag' => 'science,ideas,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'high-low-tech-techniques-to-organize-lessons-track-standards' => array(
            'title' => "High & Low Tech Techniques to Organize Lessons & Track Standards",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'edu5',
            'taxonomy' => array(
                'category' => 'learning,stories,teaching',
                'post_tag' => 'science,ideas,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        '12-tips-for-great-speaking' => array(
            'title' => "12 Tips for Great Speaking",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'edu6',
            'taxonomy' => array(
                'category' => 'remedy,stories,studying,teaching',
                'post_tag' => 'science,ideas,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'everything-your-school-needs-to-know-about-ios9' => array(
            'title' => "Everything Your school Needs to Know About iOS9",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'edu7',
            'taxonomy' => array(
                'category' => 'management,remedy,studying',
                'post_tag' => 'science,ideas,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),
        'is-your-school-prepared-to-deal-with-online-extremism' => array(
            'title' => "Is Your School Prepared to Deal With Online Exam?",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'edu8',
            'taxonomy' => array(
                'category' => 'management,remedy,teaching',
                'post_tag' => 'science,ideas,grade,progress,library'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Now if you want your child to work on subject-verb agreement, you can find all the different resources we have that teach that skill on a single page, whether it’s a worksheet, game, story, activity, or exercise.'
            )
        ),


        // page
        'home-1' => array(
            'title' => 'Index',
            'content' => 'home1.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1534818891078{margin-bottom: 40px !important;padding-top: 15px !important;background-color: #033054 !important;}.vc_custom_1534818636530{border-top-width: 4px !important;padding-top: 30px !important;background-color: #f1f1f1 !important;border-top-color: #f86320 !important;border-top-style: solid !important;}.vc_custom_1534819035622{margin-bottom: 20px !important;}.vc_custom_1534818167477{margin-top: .5em !important;}',
                'jnews_page_loop' => array(
                    'enable_page_loop' => '1',
                    'first_title' => 'Latest News',
                    'header_type' => 'heading_7',
                    'layout' => 'right-sidebar',
                    'sidebar' => 'default-sidebar',
                    'second_sidebar' => 'default-sidebar',
                    'sticky_sidebar' => '1',
                    'module' => '3',
                    'excerpt_length' => '20',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'center',
                    'post_offset' => '4',
                    'posts_per_page' => '8',
                    'sort_by' => 'latest'
                ),
                '_wpb_post_custom_css' => '.jeg_content {padding-top: 0 !important;}.jeg_midbar, .jeg_midbar.dark {border-bottom: 0;}.jeg_heroblock_5 .jeg_hero_item_1 .jeg_post_title {font-size: 2.3em;}',
                '_elementor_data' => 'home1.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.jeg_content {padding-top: 0 !important;}.jeg_midbar, .jeg_midbar.dark {border-bottom: 0;}.jeg_heroblock_5 .jeg_hero_item_1 .jeg_post_title {font-size: 2.3em;}.elementor .elementor-element.elementor-element-5b3c625{background-color:#033054;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:-30px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-5b3c625 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-4f7a672{padding:30px 0px 0px 0px;}.elementor .elementor-element.elementor-element-6533921{border-style:solid;border-width:00px 0px 0px 0px;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-6533921 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-07a0c7d{background-color:#f1f1f1;border-style:solid;border-width:4px 0px 0px 0px;border-color:#f86320;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-07a0c7d > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-5796175 .elementor-spacer-inner{height:50px;}.elementor .elementor-element.elementor-element-969f142{text-align:center;}.elementor .elementor-element.elementor-element-969f142.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-969f142 .elementor-heading-title{font-family:"Arbutus Slab", Sans-serif;font-weight:400;}.elementor .elementor-element.elementor-element-969f142 > .elementor-widget-container{margin:25px 0px 25px 0px;}.elementor .elementor-element.elementor-element-af49f39{text-align:center;}.elementor .elementor-element.elementor-element-af49f39.elementor-widget-heading .elementor-heading-title{color:#555555;}.elementor .elementor-element.elementor-element-af49f39 .elementor-heading-title{font-family:"Karla", Sans-serif;font-size:16px;font-weight:400;}.elementor .elementor-element.elementor-element-af49f39 > .elementor-widget-container{margin:0px 0px 30px 0px;}.elementor .elementor-element.elementor-element-b610291 a.elementor-button, .elementor .elementor-element.elementor-element-b610291 .elementor-button{font-size:14px;font-weight:400;color:#ffffff;background-color:#3c787e;border-radius:0px 0px 0px 0px;padding:14px 20px 14px 20px;}.elementor .elementor-element.elementor-element-34f1fbc .elementor-spacer-inner{height:50px;}.elementor .elementor-element.elementor-element-MAQM7OU{margin-top:20px;margin-bottom:0px;}'
                )
            )
        ),
        'home-2' => array(
            'title' => 'Index 1',
            'content' => 'home2.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1528118579429{padding-top: 60px !important;padding-bottom: 120px !important;background-image: url(https://jnews.io/education/wp-content/uploads/sites/45/2018/06/cover.jpg?id=406) !important;}.vc_custom_1528121678127{background-color: #e0e0e0 !important;}.vc_custom_1528119264520{padding-right: 15px !important;padding-left: 15px !important;}.vc_custom_1528267549166{margin-bottom: 10px !important;}.vc_custom_1528119212134{margin-bottom: 20px !important;}.vc_custom_1528120824604{padding-right: 30px !important;}.vc_custom_1528122358302{padding-top: 30px !important;}.vc_custom_1534747156209{margin-bottom: 0px !important;}',
                'jnews_page_loop' => array(
                    'first_title' => 'Latest Post',
                    'header_type' => 'heading_6',
                    'layout' => 'right-sidebar',
                    'sidebar' => 'default-sidebar',
                    'second_sidebar' => 'default-sidebar',
                    'sticky_sidebar' => '1',
                    'module' => '3',
                    'excerpt_length' => '20',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'center',
                    'posts_per_page' => '1',
                    'sort_by' => 'latest'
                ),
                '_wpb_post_custom_css' => '.jeg_content {    padding-top: 0 !important;    padding-bottom: 0 !important;}.jeg_midbar, .jeg_midbar.dark {    border-bottom: 0;}.theiaStickySidebar .jeg_ad_module .ads-wrapper {    text-align: left;}.vc_btn3-container .vc_btn3.vc_btn3-color-blue {    font-weight: bold;    font-size: 16px;    border: 0;}.byn_container-medium {    max-width: 640px;}.byn_container-medium h2.vc_custom_heading {    font-weight: bold !important;}',
                '_elementor_data' => 'home2.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.jeg_content {padding-top: 0 !important;}.jeg_midbar, .jeg_midbar.dark {border-bottom: 0;}.jeg_heroblock_5 .jeg_hero_item_1 .jeg_post_title {font-size: 2.3em;}.elementor .elementor-element.elementor-element-5b3c625{background-color:#033054;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:-30px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-ca030c9{background-image:url("{{image:cover:url:full}}");background-position:bottom center;background-repeat:no-repeat;background-size:cover;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:-30px;margin-bottom:0px;padding:100px 0px 100px 0px;}.elementor .elementor-element.elementor-element-ca030c9 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-36b9c86.elementor-widget-heading .elementor-heading-title{color:#1c1c1c;}.elementor .elementor-element.elementor-element-36b9c86 .elementor-heading-title{font-family:"Arbutus Slab", Sans-serif;font-size:58px;font-weight:bold;}.elementor .elementor-element.elementor-element-498e150.elementor-widget-heading .elementor-heading-title{color:#1c1c1c;}.elementor .elementor-element.elementor-element-498e150 .elementor-heading-title{font-family:"Karla", Sans-serif;font-size:18px;font-weight:400;line-height:1.6em;}.elementor .elementor-element.elementor-element-735edec a.elementor-button, .elementor .elementor-element.elementor-element-735edec .elementor-button{font-size:16px;color:#ffffff;background-color:#5472d2;border-radius:0px 0px 0px 0px;padding:14px 20px 14px 20px;}.elementor .elementor-element.elementor-element-83095f0{margin-top:-10px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-f0ae4ae .elementor-element-populated{padding:30px 0px 0px 20px;}.elementor .elementor-element.elementor-element-89846b5{background-color:#e0e0e0;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-89846b5 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-2edc21b > .elementor-element-populated{margin:-10px 0px 0px 0px;}.elementor .elementor-element.elementor-element-WtZ1mc9{padding:30px 0px 0px 0px;}.elementor .elementor-element.elementor-element-KvDCTOs > .elementor-element-populated{margin:0px 0px -50px 0px;}@media(min-width:768px){.elementor .elementor-element.elementor-element-d92f19a{width:55%;}.elementor .elementor-element.elementor-element-319b7ba{width:45%;}}@media(min-width:1025px){.elementor .elementor-element.elementor-element-ca030c9{background-attachment:scroll;}}'
                )
            )
        ),
        'home-3' => array(
            'title' => 'Index 2',
            'content' => 'home3.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1528134701115{margin-bottom: -40px !important;padding-bottom: 0px !important;}.vc_custom_1528132673227{padding-left: 30px !important;}',
                'jnews_page_loop' => array(
                    'first_title' => 'Latest Post',
                    'header_type' => 'heading_6',
                    'layout' => 'right-sidebar',
                    'sidebar' => 'default-sidebar',
                    'second_sidebar' => 'default-sidebar',
                    'sticky_sidebar' => '1',
                    'module' => '3',
                    'excerpt_length' => '20',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'center',
                    'posts_per_page' => '1',
                    'sort_by' => 'latest'
                ),
                '_wpb_post_custom_css' => '.jeg_content {    padding-top: 0 !important;}.jeg_midbar, .jeg_midbar.dark {    border-bottom: 0;}.jeg_heroblock .jeg_post_title {    font-size: 24px;}.wpb_column.vc_col-sm-3 .widget_archive .widgettitle {    font-size: 16px;    text-transform: uppercase;    font-weight: bold;    margin-bottom: 15px;}',
                '_elementor_data' => 'home3.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.jeg_content {padding-top: 0 !important;}.jeg_midbar, .jeg_midbar.dark {border-bottom: 0;}.jeg_heroblock_5 .jeg_hero_item_1 .jeg_post_title {font-size: 2.3em;}.elementor .elementor-element.elementor-element-5b3c625{background-color:#033054;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:-30px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-b6fb114{margin-top:-30px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-b4d0007 .elementor-element-populated{padding:0px 30px 0px 0px;}.elementor .elementor-element.elementor-element-2d09edd .elementor-divider-separator{border-top-style:solid;border-top-width:1px;border-top-color:#e0e0e0;width:100%;}.elementor .elementor-element.elementor-element-2d09edd .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor .elementor-element.elementor-element-bdBhlVo{margin-top:0px;margin-bottom:-50px;}.elementor .elementor-element.elementor-element-69a097d .elementor-divider-separator{border-top-style:solid;border-top-width:1px;border-top-color:#eeeeee;width:100%;}.elementor .elementor-element.elementor-element-69a097d .elementor-divider{padding-top:15px;padding-bottom:15px;}'
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
        ),
        'about' => array(
            'title' => 'About Us',
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
        'top-navigation' => array(
            'title' => 'Mobile Navigation',
            'location' => 'top_navigation'
        ),
        'footer-navigation' => array(
            'title' => 'Footer Navigation',
            'location' => 'footer_navigation'
        ),
    ),

    // menu it self
    'menu' => array(

        // Main Menu
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
                'menu-item-title' => 'Index (Default)',
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
                'menu-item-title' => 'Index 1',
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
                'menu-item-title' => 'Index 2',
                'menu-item-parent-id' => '{{menu:home:id}}',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:home-3:id}}',
                'menu-item-status' => 'publish'
            )
        ),

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
                'menu-item-title' => 'Get in Touch',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:contact:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'classes' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Classes',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'management' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Management',
                'menu-item-parent-id' => '{{menu:classes:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:management:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'teaching' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Teaching',
                'menu-item-parent-id' => '{{menu:classes:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:teaching:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'stories' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Stories',
                'menu-item-parent-id' => '{{menu:classes:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:stories:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'learning' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Learning',
                'menu-item-parent-id' => '{{menu:classes:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:learning:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'studying' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Studying',
                'menu-item-parent-id' => '{{menu:classes:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:studying:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'remedy' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Remedy',
                'menu-item-parent-id' => '{{menu:classes:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:remedy:id}}',
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
        'category' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Category',
                'menu-item-parent-id' => '{{menu:pages:id}}',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:management:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'author' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Author',
                'menu-item-parent-id' => '{{menu:pages:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => 'https://jnews.io/education/author/biyanpasau/',
                'menu-item-status' => 'publish'
            )
        ),
        'article' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Article',
                'menu-item-parent-id' => '{{menu:pages:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => '{{post:what-to-expect-and-how-to-prepare-for-your-first-days-abroad:url:full}}',
                'menu-item-status' => 'publish'
            )
        ),
        'search' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Search',
                'menu-item-parent-id' => '{{menu:pages:id}}',
                'menu-item-type' => 'custom',
                'menu-item-url' => 'https://jnews.io/education/?s=The',
                'menu-item-status' => 'publish'
            )
        ),

        //Topbar Menu
        'teaching-2' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Teaching',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:teaching:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'management-2' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Management',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:management:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'studying-2' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Studying',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:studying:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'remedy-2' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Remedy',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:remedy:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'learning-2' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Learning',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:learning:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        // Footer
        'facebook' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Facebook',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'twitter' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Twitter',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'instagram' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Instagram',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),


    ),

    'widget_position' => array(
        'Default'
    ),

    'widget' => array(
        'widget.json',
    ),

    'customizer' => array(
        'style.json',
    ),

    'plugin' => array(
        'contact-form-7',
        'jnews-breadcrumb',
        'jnews-gallery',
        'jnews-jsonld',
        'jnews-meta-header',
        'jnews-social-login',
        'jnews-social-share',
        'jnews-split',
        'jnews-view-counter',
        'jnews-weather',
        'mailchimp-for-wp'
    )

);

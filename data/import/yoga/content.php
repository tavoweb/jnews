<?php

return array(

    // image
    'image' => array(
        'yoga1' => 'http://jegtheme.com/asset/jnews/demo/default/fashion1.jpg',
        'yoga2' => 'http://jegtheme.com/asset/jnews/demo/default/fashion2.jpg',
        'yoga3' => 'http://jegtheme.com/asset/jnews/demo/default/fashion3.jpg',
        'yoga4' => 'http://jegtheme.com/asset/jnews/demo/default/fashion4.jpg',
        'yoga5' => 'http://jegtheme.com/asset/jnews/demo/default/fashion5.jpg',
        'yoga6' => 'http://jegtheme.com/asset/jnews/demo/default/fashion6.jpg',
        'yoga7' => 'http://jegtheme.com/asset/jnews/demo/default/travel1.jpg',
        'yoga8' => 'http://jegtheme.com/asset/jnews/demo/default/travel2.jpg',
        'yoga9' => 'http://jegtheme.com/asset/jnews/demo/default/travel3.jpg',
        'yoga10' => 'http://jegtheme.com/asset/jnews/demo/default/travel4.jpg',
        'logo' => 'http://jegtheme.com/asset/jnews/demo/yoga/logo_yoga.png',
        'logo2x' => 'http://jegtheme.com/asset/jnews/demo/yoga/logo_yoga@2x.png',
        'mobile_logo' => 'http://jegtheme.com/asset/jnews/demo/yoga/logo_mobile_yoga.png',
        'mobile_logo2x' => 'http://jegtheme.com/asset/jnews/demo/yoga/logo_mobile_yoga2x.png',
        'footer_logo' => 'http://jegtheme.com/asset/jnews/demo/fitness/logo_footer_yoga.png',
        'footer_logo2x' => 'http://jegtheme.com/asset/jnews/demo/fitness/logo_footer_yoga@2x.png',
        'favicon' => 'http://jegtheme.com/asset/jnews/demo/default/favicon.png',
        'ad_345x345' => 'http://jegtheme.com/asset/jnews/demo/default/ad_345x345.jpg',
        'ad_728x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_728x90.png',
        'ad_300x600' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x600.jpg',
        'ad_970x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_970x90.png',
        'ad_300x250' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x250.jpg',
    ),

    // create taxonomy
    'taxonomy' => array(
        'category' => array(
            'yoga-101' =>
                array(
                    'title' => 'Yoga 101',
                    'description' => 'You can add some category description here.'
                ),
            'wisdom' =>
                array(
                    'title' => 'Wisdom',
                    'description' => 'You can add some category description here.'
                ),
            'life' =>
                array(
                    'title' => 'Life',
                    'description' => 'You can add some category description here.'
                ),
            'meditation' =>
                array(
                    'title' => 'Meditation',
                    'description' => 'You can add some category description here.'
                ),
            'practice' =>
                array(
                    'title' => 'Practice',
                    'description' => 'You can add some category description here.'
                ),
            'poses' =>
                array(
                    'title' => 'Poses',
                    'description' => 'You can add some category description here.'
                ),
        ),

        'post_tag' => array(
            'abyhasa' => array(
                'title' => 'Abyhasa',
            ),
            'daily-meditation' => array(
                'title' => 'Daily Meditation',
            ),
            'journey' => array(
                'title' => 'Journey',
            ),
            'namaste' => array(
                'title' => 'Namaste',
            ),
            'pranayama' => array(
                'title' => 'Pranayama',
            ),
            'stretches' => array(
                'title' => 'Stretches',
            ),
            'yoga-instructor' => array(
                'title' => 'Yoga Instructor',
            ),
            'yoga-music' => array(
                'title' => 'Yoga Music',
            ),
            'yoga-practice' => array(
                'title' => 'Yoga Practice',
            )
        )
    ),

    // post & page
    'post' => array(
        'yoga-exercises-for-the-eyes-how-to-improve-eyesight-naturally' => array(
            'title' => "Yoga Exercises for The Eyes: How to Improve Eyesight Naturally",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga1',
            'taxonomy' => array(
                'category' => 'poses,wisdom,yoga-101',
                'post_tag' => 'budget-travel,champions-league,istana-negara,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}'),
                'post_subtitle' => 'That’s why it’s called a practice. We have to practice a practice if it is to be of value.'
            )
        ),
        'beginners-guide-basic-tips-to-get-started-with-yoga' => array(
            'title' => "Beginner's Guide: Basic Tips to Get Started With Yoga",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga2',
            'taxonomy' => array(
                'category' => 'life,practice,wisdom',
                'post_tag' => 'bali-united,budget-travel,champions-league,chopper-bike'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'To enjoy the glow of good health, you must exercise.'
            )
        ),
        'five-reasons-why-children-need-to-learn-yoga-and-meditate' => array(
            'title' => "Five Reasons Why Children Need to Learn Yoga and Meditate",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga3',
            'taxonomy' => array(
                'category' => 'life,practice,wisdom',
                'post_tag' => '2018-league,champions-league,doctor-terawan,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}')
            )
        ),
        'mindfulness-with-yoga-powerful-exercises-for-peace-and-happiness' => array(
            'title' => "Mindfulness With Yoga: Powerful Exercises for Peace and Happiness",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga4',
            'taxonomy' => array(
                'category' => 'life,practice,yoga-101',
                'post_tag' => 'bali-united,champions-league,market-stories,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'There is always room for change, but you have to be open to that change.'
            )
        ),
        'these-yoga-poses-will-help-you-take-better-care-of-yourself' => array(
            'title' => "These Yoga Poses Will Help You Take Better Care of Yourself",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga5',
            'taxonomy' => array(
                'category' => 'life,meditation,poses',
                'post_tag' => 'bali-united,balinese-culture,champions-league,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Take care of your body. It\'s the only place you have to live.'
            )
        ),
        'here-is-how-meditation-can-reduce-stress-and-bring-health-inside-out' => array(
            'title' => "Here is How Meditation Can Reduce Stress and Bring Health Inside Out",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga6',
            'taxonomy' => array(
                'category' => 'poses,practice,wisdom',
                'post_tag' => 'bali-united,balinese-culture,doctor-terawan,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}')
            )
        ),
        'beginners-guide-step-by-step-yoga-pose-instruction-from-yoga-expert' => array(
            'title' => "Beginner's Guide: Step-by-Step Yoga Pose Instruction from Yoga Expert",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga7',
            'taxonomy' => array(
                'category' => 'life,poses,wisdom',
                'post_tag' => 'bali-united,balinese-culture,champions-league,istana-negara'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'That’s why it’s called a practice. We have to practice a practice if it is to be of value.'
            )
        ),
        'ayurvedas-10-best-flu-survival-tips-for-a-speedy-recovery' => array(
            'title' => "Ayurveda's 10 Best Flu Survival Tips for a Speedy Recovery",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga8',
            'taxonomy' => array(
                'category' => 'life,practice,yoga-101',
                'post_tag' => '2018-league,champions-league,market-stories,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'Take care of your body. It\'s the only place you have to live.'
            )
        ),
        'how-to-find-deeper-access-to-joy-start-with-a-peaceful-mind' => array(
            'title' => "How to Find Deeper Access to Joy: Start with a Peaceful Mind",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga9',
            'taxonomy' => array(
                'category' => 'meditation,practice,yoga-101',
                'post_tag' => 'bali-united,budget-travel,doctor-terawan,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'A wonderful serenity has taken possession of my entire soul.'
            )
        ),
        'benefits-of-meditation-10-reasons-why-you-should-learn-meditate' => array(
            'title' => "Benefits of Meditation: 10 Reasons Why You Should Learn Meditate",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga10',
            'taxonomy' => array(
                'category' => 'life,meditation,wisdom',
                'post_tag' => '2018-league,bali-united,budget-travel,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}')
            )
        ),
        'pranayama-the-beginners-guide-to-yoga-breathing-exercises' => array(
            'title' => "Pranayama: The Beginner’s Guide to Yoga Breathing Exercises",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga1',
            'taxonomy' => array(
                'category' => 'life,meditation,yoga-101',
                'post_tag' => '2018-league,chopper-bike,doctor-terawan,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'A wonderful serenity has taken possession of my entire soul.'
            )
        ),
        'best-new-songs-for-your-yoga-music-playlist' => array(
            'title' => "Best New Songs for Your Yoga Music Playlist",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga2',
            'taxonomy' => array(
                'category' => 'life,meditation,practice',
                'post_tag' => '2018-league,bali-united,balinese-culture,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'A wonderful serenity has taken possession of my entire soul.'
            )
        ),
        'how-mindful-meditation-practices-supports-good-parenting' => array(
            'title' => "How Mindful Meditation Practices Supports Good Parenting",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga3',
            'taxonomy' => array(
                'category' => 'practice,wisdom,yoga-101',
                'post_tag' => '2018-league,champions-league,market-stories,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}')
            )
        ),
        'the-best-yoga-moves-to-improve-shoulder-flexibility' => array(
            'title' => "The Best Yoga Moves To Improve Shoulder Flexibility",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga4',
            'taxonomy' => array(
                'category' => 'meditation,practice,yoga-101',
                'post_tag' => 'bali-united,balinese-culture,doctor-terawan,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:practice:id}}'),
                'post_subtitle' => 'Take care of your body. It\'s the only place you have to live.'
            )
        ),
        'meditation-tips-natural-ways-to-improve-concentration-and-focus' => array(
            'title' => "Meditation Tips: Natural Ways to Improve Concentration and Focus",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga5',
            'taxonomy' => array(
                'category' => 'meditation,practice,yoga-101',
                'post_tag' => '2018-league,champions-league,chopper-bike,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Take care of your body. It\'s the only place you have to live.'
            )
        ),
        'amazing-yoga-retreats-with-rice-field-view-in-ubud-you-should-visit' => array(
            'title' => "Amazing Yoga Retreats with Rice Field View in Ubud You Should Visit",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga6',
            'taxonomy' => array(
                'category' => 'life,wisdom,yoga-101',
                'post_tag' => 'bali-united,champions-league,istana-negara,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'A wonderful serenity has taken possession of my entire soul.'
            )
        ),
        'six-super-brain-yoga-exercises-to-boost-your-gray-matter' => array(
            'title' => "Six Super Brain Yoga Exercises to Boost Your Gray Matter",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga7',
            'taxonomy' => array(
                'category' => 'life,meditation,wisdom',
                'post_tag' => '2018-league,bali-united,budget-travel,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}')
            )
        ),
        'why-pranayamas-are-effective-for-emotion-regulation' => array(
            'title' => "Why Pranayamas Are Effective for Emotion Regulation",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga8',
            'taxonomy' => array(
                'category' => 'life,meditation,yoga-101',
                'post_tag' => 'doctor-terawan,istana-negara,market-stories,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'That’s why it’s called a practice. We have to practice a practice if it is to be of value.'
            )
        ),
        'yoga-is-the-journey-of-the-self-through-the-self-to-the-self' => array(
            'title' => "Yoga is the journey of the self, through the self, to the self",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga9',
            'taxonomy' => array(
                'category' => 'practice,wisdom',
                'post_tag' => 'champions-league,chopper-bike,doctor-terawan,istana-negara'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'Take care of your body. It\'s the only place you have to live.'
            )
        ),
        'open-your-heart-an-hour-yoga-playlist-for-the-anahata-chakra' => array(
            'title' => "Open Your Heart: An Hour Yoga Playlist for the Anahata Chakra",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga10',
            'taxonomy' => array(
                'category' => 'life,meditation,practice',
                'post_tag' => 'budget-travel,doctor-terawan,istana-negara,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Yoga is a light, which once lit, will never dim. The better your practice, the brighter the flame.'
            )
        ),
        'the-most-important-beginner-yoga-pose-you-could-try-at-home' => array(
            'title' => "The Most Important Beginner Yoga Pose You Could Try at Home",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga1',
            'taxonomy' => array(
                'category' => 'life,poses,wisdom',
                'post_tag' => '2018-league,bali-united,champions-league,doctor-terawan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}')
            )
        ),
        'the-most-life-changing-things-yoga-teachers-have-ever-said-to-me' => array(
            'title' => "The Most Life-Changing Things Yoga Teachers Have Ever Said to Me",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga2',
            'taxonomy' => array(
                'category' => 'poses,wisdom,yoga-101',
                'post_tag' => '2018-league,balinese-culture,champions-league,chopper-bike'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}')
            )
        ),
        'top-reasons-why-you-should-learn-and-practice-yoga' => array(
            'title' => "Top Reasons Why You Should Learn and Practice Yoga",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga3',
            'taxonomy' => array(
                'category' => 'life,meditation,practice',
                'post_tag' => '2018-league,champions-league,chopper-bike,istana-negara'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Yoga exists in the world because everything is linked.'
            )
        ),
        'five-yoga-poses-you-should-do-first-thing-in-the-morning' => array(
            'title' => "Five Yoga Poses You Should Do First Thing in the Morning",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga4',
            'taxonomy' => array(
                'category' => 'meditation,poses,practice',
                'post_tag' => 'balinese-culture,champions-league,chopper-bike,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}'),
                'post_subtitle' => 'Take care of your body. It\'s the only place you have to live.'
            )
        ),
        'the-important-things-to-know-before-planning-an-international-yoga-retreat' => array(
            'title' => "The Important Things to Know Before Planning an International Yoga Retreat",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga5',
            'taxonomy' => array(
                'category' => 'meditation,practice,yoga-101',
                'post_tag' => '2018-league,chopper-bike,doctor-terawan,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'A wonderful serenity has taken possession of my entire soul.'
            )
        ),
        'meditate-tips-how-you-can-meditate-everywhere-anytime' => array(
            'title' => "Meditate Tips: How You Can Meditate Everywhere, Anytime",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga6',
            'taxonomy' => array(
                'category' => 'poses,practice,wisdom',
                'post_tag' => 'bali-united,balinese-culture,chopper-bike,doctor-terawan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}')
            )
        ),
        'how-yoga-could-improve-your-productivity' => array(
            'title' => "How Yoga Could Improve Your Productivity",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga7',
            'taxonomy' => array(
                'category' => 'meditation,practice,yoga-101',
                'post_tag' => '2018-league,balinese-culture,national-exam,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'Yoga is a light, which once lit, will never dim. The better your practice, the brighter the flame.'
            )
        ),
        'the-future-depends-on-what-we-do-in-the-present' => array(
            'title' => "The Future Depends on What We Do in The Present",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'yoga8',
            'taxonomy' => array(
                'category' => 'life,practice,wisdom',
                'post_tag' => 'bali-united,champions-league,national-exam,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'Yoga is a light, which once lit, will never dim. The better your practice, the brighter the flame.'
            )
        ),

        // page
        'home-1' => array(
            'title' => 'Home 1',
            'content' => 'home1.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1525340422816{background-color: #f4f4f9 !important;}.vc_custom_1525335203183{padding-top: 25px !important;padding-right: 30px !important;padding-bottom: 25px !important;padding-left: 30px !important;background-color: #e4f9f3 !important;}.vc_custom_1525843895748{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 15px !important;padding-right: 20px !important;padding-bottom: 10px !important;padding-left: 20px !important;border-left-color: #eeeeee !important;border-left-style: solid !important;border-right-color: #eeeeee !important;border-right-style: solid !important;border-top-color: #eeeeee !important;border-top-style: solid !important;border-bottom-color: #eeeeee !important;border-bottom-style: solid !important;}',
                'jnews_page_loop' => array(
                    'enable_page_loop' => '1',
                    'first_title' => 'LATEST BLOG',
                    'header_type' => 'heading_7',
                    'layout' => 'no-sidebar',
                    'sidebar' => 'home',
                    'sticky_sidebar' => '1',
                    'module'    => '27',
                    'excerpt_length' => '32',
                    'content_date' => 'default',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'center',
                    'post_offset' => '1',
                    'posts_per_page' => '9',
                ),
                '_wpb_post_custom_css'=>'.jeg_main_content.mc4wp-forminput[type="text"],.jeg_main_content.mc4wp-forminput[type="email"]{border-color:#d7e4e1;}.jeg_inline_subscribeform.mc4wp-formh3{font-family:Lora;font-weight:normal;font-style:italic;}.jeg_block_heading_7.jeg_block_title,.jeg_block_heading_8.jeg_block_title{float:none;font-size:14px;letter-spacing:2px;}.jeg_block_heading_7.jeg_block_title,.jeg_block_heading_8.jeg_block_title{text-align:center;}.jeg_postblock_5.jeg_readmore{display:none;}',
                '_elementor_data' => 'home1.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.elementor .elementor-element.elementor-element-f149023{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-f149023 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-2ee655c > .elementor-element-populated{background-color:#e4f9f3;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-2ee655c > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-23a2b7a > .elementor-widget-container{padding:25px 30px 25px 30px;}.elementor .elementor-element.elementor-element-bb289a7 .elementor-spacer-inner{height:30px;}.elementor .elementor-element.elementor-element-13ca7af{background-color:#f4f4f9;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:40px 0px 40px 0px;}.elementor .elementor-element.elementor-element-13ca7af > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-ee55331 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-7925b85 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-a04e05f .elementor-spacer-inner{height:20px;}'
                )
            )
        ),
        'home-2' => array(
            'title' => 'Home 2',
            'content' => 'home2.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1534387973663{margin-bottom: 0px !important;}',
                'jnews_page_loop' => array(
                    'enable_page_loop' => '1',
                    'first_title' => '',
                    'header_type' => 'heading_7',
                    'layout' => 'right-sidebar',
                    'sidebar' => 'home-loop',
                    'sticky_sidebar' => '1',
                    'module' => '3',
                    'excerpt_length' => '20',
                    'content_date' => 'default',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'center',
                    'posts_per_page' => '8',
                ),
                '_wpb_post_custom_css'=>'.jeg_content{padding-top:0;}',
                '_elementor_data' => 'home2.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.elementor .elementor-element.elementor-element-1aa13df{margin-top:-40px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-d1e3590 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-d1e3590 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-d1e3590 .elementor-element-populated{padding:0px 0px 0px 20px;}.elementor .elementor-element.elementor-element-a22ff9e > .elementor-widget-container{padding:30px 30px 30px 30px;background-color:#e4f9f3;}'
                )
            )
        ),
        'about' => array(
            'title' => 'About',
            'content' => 'about.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wpb_shortcodes_custom_css' => '.vc_custom_1525945331881{padding-right: 12% !important;padding-left: 12% !important;}',
                '_elementor_data' => 'about.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.elementor .elementor-element.elementor-element-d9df9ff{color:#2b2d38;font-family:"Raleway", Sans-serif;font-size:16px;font-weight:normal;line-height:26px;}.elementor .elementor-element.elementor-element-5032541.elementor-column .elementor-column-wrap{align-items:center;}.elementor .elementor-element.elementor-element-b0614bd{text-align:center;}.elementor .elementor-element.elementor-element-9c04f52 .elementor-testimonial-content{color:#161925;font-family:"Lora", Sans-serif;font-size:36px;font-weight:400;font-style:italic;line-height:50px;}.elementor .elementor-element.elementor-element-9c04f52 > .elementor-widget-container{padding:0% 12% 0% 12%;}.elementor .elementor-element.elementor-element-c754791 .elementor-divider-separator{border-top-style:solid;border-top-width:1px;border-top-color:#8789c0;width:10%;}.elementor .elementor-element.elementor-element-c754791 .elementor-divider{text-align:center;padding-top:2px;padding-bottom:2px;}'
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
                    'sidebar' => 'contact',
                    'share_position' => 'hide'
                )
            )
        ),
    ),

    // menu location
    'menu_location' => array(
        'main-navigation' => array(
            'title' => 'Main Navigation',
            'location' => 'navigation'
        ),
        'footer-navigation' => array(
            'title' => 'Footer Navigation',
            'location' => 'footer_navigation'
        ),
        'top-navigation' => array(
            'title' => 'Top Navigation',
            'location' => 'top_navigation'
        ),
        'footer-link' => array(
            'title' => 'Footer Links',
            'location' => ''
        )
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
        'about' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'About',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:about:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'yoga-101' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Yoga',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:yoga-101:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'poses' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Poses',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:poses:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'wisdom' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Wisdom',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:wisdom:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'lifestyle' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Lifestyle',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:lifestyle:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'meditation' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Meditation',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:meditation:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'practice' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Practice',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:practice:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        //Top Navigation
        'home-top' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Home',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:home-1:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'about-top' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'About',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:about:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'join-us' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Join Us',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'contact-top' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Contact',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:contact:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        // Footer & Topbar Menu
        'about-footer' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'About',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'advertise' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Advertise',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'privacy-and-policy' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Privacy & Policy',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'contact-footer' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Contact',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:contact:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        // Footer Links
        'buy' => array(
            'location' => 'footer-link',
            'menu-item-data' => array(
                'menu-item-title' => 'Buy JNews',
                'menu-item-type' => 'custom',
                'menu-item-url' => 'https://themeforest.net/item/jnews-wordpress-blog-news-magazine-newspaper-theme/20566392?ref=jegtheme&license=regular&open_purchase_for_item_id=20566392',
                'menu-item-status' => 'publish'
            )
        ),
        'landing' => array(
            'location' => 'footer-link',
            'menu-item-data' => array(
                'menu-item-title' => 'Landing Page',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'main' => array(
            'location' => 'footer-link',
            'menu-item-data' => array(
                'menu-item-title' => 'Main Demo',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'support' => array(
            'location' => 'footer-link',
            'menu-item-data' => array(
                'menu-item-title' => 'Support Forum',
                'menu-item-type' => 'custom',
                'menu-item-url' => 'http://support.jegtheme.com/',
                'menu-item-status' => 'publish'
            )
        )
    ),

    'widget_position' => array(
        'Contact',
        'Archives',
        'Home - Loop'
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
        'jnews-meta-header',
        'jnews-social-share',
        'jnews-view-counter',
	    'jnews-instagram'
    )
);

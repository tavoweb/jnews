<?php

return array(

    // image
    'image' => array(
        'goverment1' => 'http://jegtheme.com/asset/jnews/demo/default/news1.jpg',
        'goverment2' => 'http://jegtheme.com/asset/jnews/demo/default/news2.jpg',
        'goverment3' => 'http://jegtheme.com/asset/jnews/demo/default/news3.jpg',
        'goverment4' => 'http://jegtheme.com/asset/jnews/demo/default/news4.jpg',
        'goverment5' => 'http://jegtheme.com/asset/jnews/demo/default/news5.jpg',
        'goverment6' => 'http://jegtheme.com/asset/jnews/demo/default/news6.jpg',
        'goverment7' => 'http://jegtheme.com/asset/jnews/demo/default/news7.jpg',
        'goverment8' => 'http://jegtheme.com/asset/jnews/demo/default/news8.jpg',
        'goverment9' => 'http://jegtheme.com/asset/jnews/demo/default/news9.jpg',
        'goverment10' => 'http://jegtheme.com/asset/jnews/demo/default/news10.jpg',

        'logo' => 'http://jegtheme.com/asset/jnews/demo/gov/gov_logo.png',
        'logo2x' => 'http://jegtheme.com/asset/jnews/demo/gov/gov_logo2x.png',

        'footer_logo' => 'http://jegtheme.com/asset/jnews/demo/gov/gov_footer.png',
        'footer_logo2x' => 'http://jegtheme.com/asset/jnews/demo/gov/gov_footer2x.png',

        'ad_300x250' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x250.jpg',
        'ad_345x345' => 'http://jegtheme.com/asset/jnews/demo/default/ad_345x345.jpg',
        'ad_728x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_728x90.png',
        'ad_300x600' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x600.jpg',
        'ad_970x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_970x90.png',
        'ad_vertical' => 'http://jegtheme.com/asset/jnews/demo/gadget-review/ad_vertical.png',

        'google-play' => 'http://jegtheme.com/asset/jnews/demo/gov/app3-home-google-play.png',
        'app-store' => 'http://jegtheme.com/asset/jnews/demo/gov/app3-home-app-store.png',
        'appbg2' => 'http://jegtheme.com/asset/jnews/demo/gov/appbg2.jpg'
    ),

    // create taxonomy
    'taxonomy' => array(
        'category' => array(
            'campaign' => array(
                'title' => 'Campaign',
                'description' => 'You can add some category description here.'
            ),
            'education' => array(
                'title' => 'Education',
                'description' => 'You can add some category description here.'
            ),
            'national' => array(
                'title' => 'National',
                'description' => 'You can add some category description here.'
            ),
            'politics' => array(
                'title' => 'Politics',
                'description' => 'You can add some category description here.'
            ),
            'social-media' => array(
                'title' => 'Social Media',
                'description' => 'You can add some category description here.'
            ),
            'travel' => array(
                'title' => 'Travel',
                'description' => 'You can add some category description here.'
            )
        ),
        'post_tag' => array(
            '2018-asian-games' => array(
                'title' => '2018 Asian Games'
            ),
            'aff-u16-final' => array(
                'title' => 'AFF U16 Final'
            ),
            'annual-speech' => array(
                'title' => 'Annual Speech'
            ),
            'commentary' => array(
                'title' => 'Commentary'
            ),
            'Editorial' => array(
                'title' => 'editorial'
            ),
            'chopper-bike' => array(
                'title' => 'Chopper Bike'
            ),
            'fake-news' => array(
                'title' => 'Fake News'
            ),
            'indonesias-2019-elections' => array(
                'title' => 'Indonesia\'s 2019 Elections'
            ),
            'lombok-earthquake' => array(
                'title' => 'Lombok Earthquake'
            ),
            'market-stories' => array(
                'title' => 'Market Stories'
            ),
            'national-exam' => array(
                'title' => 'National Exam'
            ),
            'visit-bali' => array(
                'title' => 'Visit Bali'
            ),
        )
    ),

    // post & page
    'post' => array(
        'the-government-is-taking-action-to-cleanse-balis-sea-from-drifting-litter' => array(
            'title' => "The Government is Taking Action to Cleanse Bali’s Sea from Drifting Litter",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment1',
            'taxonomy' => array(
                'category' => 'campaign,national,politics',
                'post_tag' => 'aff-u16-final,fake-news,market-stories,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}')
            )
        ),
        'president-needs-multidimensional-dialogue-on-criminal-code-bill-alliance' => array(
            'title' => "President Needs Multidimensional Dialogue On Criminal Code Bill: Alliance",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment2',
            'taxonomy' => array(
                'category' => 'campaign,education,national,politics',
                'post_tag' => '2018-asian-games,editorial,national-exam,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'The heaviest penalty for declining to rule is to be ruled by someone inferior to yourself.',
                'jnews_single_post' => array(
                    'override_template' => '1',
                    'override' => array(
                        array(
                            'template' => '3',
                            'single_blog_custom' => '',
                            'parallax' => '1',
                            'fullscreen' => '0',
                            'layout' => 'right-sidebar',
                            'sidebar' => 'default-sidebar',
                            'second_sidebar' => 'default-sidebar',
                            'sticky_sidebar' => '1',
                            'share_position' => 'bottom',
                            'share_float_style' => 'share-monocrhome',
                            'show_share_counter' => '1',
                            'show_view_counter' => '1',
                            'show_featured' => '0',
                            'show_post_meta' => '1',
                            'show_post_author' => '1',
                            'show_post_author_image' => '1',
                            'show_post_date' => '1',
                            'post_date_format' => 'default',
                            'post_date_format_custom' => 'Y/m/d',
                            'show_post_category' => '1',
                            'show_post_tag' => '1',
                            'show_prev_next_post' => '1',
                            'show_popup_post' => '1',
                            'number_popup_post' => '1',
                            'show_author_box' => '0',
                            'show_post_related' => '1',
                            'show_inline_post_related' => '0',
                        )
                    )
                )
            )
        ),
        'to-keep-kuta-conducive-this-is-the-steps-taken-by-the-government' => array(
            'title' => "To keep Kuta conducive, this is the steps taken by the government",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment3',
            'taxonomy' => array(
                'category' => 'campaign,national,politics,social-media',
                'post_tag' => 'aff-u16-final,annual-speech,commentary,editorial'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}')
            )
        ),
        'indonesia-among-top-10-destinations-for-chinese-tourists-in-2017' => array(
            'title' => "Indonesia among top 10 destinations for Chinese tourists In 2017",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment4',
            'taxonomy' => array(
                'category' => 'campaign,education,travel',
                'post_tag' => 'annual-speech,lombok-earthquake,national-exam,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Government exists to protect us from each other.'
            )
        ),
        'badung-intensified-the-program-blue-economy-for-coastal-communities' => array(
            'title' => "Badung intensified the program \"Blue Economy\" for coastal communities",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment5',
            'taxonomy' => array(
                'category' => 'campaign,national,politics',
                'post_tag' => 'aff-u16-final,indonesias-2019-elections,lombok-earthquake,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.',
                'jnews_single_post' => array(
                    'override_template' => '1',
                    'override' => array(
                        array(
                            'template' => '3',
                            'single_blog_custom' => '',
                            'parallax' => '1',
                            'fullscreen' => '0',
                            'layout' => 'right-sidebar',
                            'sidebar' => 'default-sidebar',
                            'second_sidebar' => 'default-sidebar',
                            'sticky_sidebar' => '1',
                            'share_position' => 'bottom',
                            'share_float_style' => 'share-monocrhome',
                            'show_share_counter' => '1',
                            'show_view_counter' => '1',
                            'show_featured' => '0',
                            'show_post_meta' => '1',
                            'show_post_author' => '1',
                            'show_post_author_image' => '1',
                            'show_post_date' => '1',
                            'post_date_format' => 'default',
                            'post_date_format_custom' => 'Y/m/d',
                            'show_post_category' => '1',
                            'show_post_tag' => '1',
                            'show_prev_next_post' => '1',
                            'show_popup_post' => '1',
                            'number_popup_post' => '1',
                            'show_author_box' => '0',
                            'show_post_related' => '1',
                            'show_inline_post_related' => '0',
                        )
                    )
                )
            )
        ),
        'ngurah-rai-international-airport-to-close-for-24-hours-for-nyepi' => array(
            'title' => "Ngurah Rai International Airport To Close For 24 Hours For Nyepi",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment6',
            'taxonomy' => array(
                'category' => 'education,social-media,travel',
                'post_tag' => '2018-asian-games,aff-u16-final,commentary,editorial'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}')
            )
        ),
        'nyepi-celebrations-mobile-internet-turned-off-for-balis-new-year' => array(
            'title' => "Bali's Governor encourage the development of Tourism Village in Karangasem regency",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment7',
            'taxonomy' => array(
                'category' => 'education,national,politics,travel',
                'post_tag' => 'annual-speech,indonesias-2019-elections,market-stories,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Governments have a tendency not to solve problems, only to rearrange them.'
            )
        ),
        'presidential-train-now-available-for-jakartans-traveling-to-bandung' => array(
            'title' => "Presidential Train Now Available For Jakartans Traveling To Bandung",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment8',
            'taxonomy' => array(
                'category' => 'campaign,education,social-media,travel',
                'post_tag' => 'aff-u16-final,commentary,indonesias-2019-elections,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Government exists to protect us from each other.',
                'jnews_single_post' => array(
                    'override_template' => '1',
                    'override' => array(
                        array(
                            'template' => '3',
                            'single_blog_custom' => '',
                            'parallax' => '1',
                            'fullscreen' => '0',
                            'layout' => 'right-sidebar',
                            'sidebar' => 'default-sidebar',
                            'second_sidebar' => 'default-sidebar',
                            'sticky_sidebar' => '1',
                            'share_position' => 'bottom',
                            'share_float_style' => 'share-monocrhome',
                            'show_share_counter' => '1',
                            'show_view_counter' => '1',
                            'show_featured' => '0',
                            'show_post_meta' => '1',
                            'show_post_author' => '1',
                            'show_post_author_image' => '1',
                            'show_post_date' => '1',
                            'post_date_format' => 'default',
                            'post_date_format_custom' => 'Y/m/d',
                            'show_post_category' => '1',
                            'show_post_tag' => '1',
                            'show_prev_next_post' => '1',
                            'show_popup_post' => '1',
                            'number_popup_post' => '1',
                            'show_author_box' => '0',
                            'show_post_related' => '1',
                            'show_inline_post_related' => '0',
                        )
                    )
                )
            )
        ),
        'indonesia-targets-the-first-rank-of-scientific-publications-in-asean' => array(
            'title' => "Indonesia targets the first rank of scientific publications in ASEAN",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment9',
            'taxonomy' => array(
                'category' => 'campaign,education,social-media',
                'post_tag' => 'fake-news,indonesias-2019-elections,lombok-earthquake,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'People shouldn\'t be afraid of their government. Governments should be afraid of their people.'
            )
        ),
        'indonesia-is-bringing-free-wi-fi-to-more-than-1000-villages-this-year' => array(
            'title' => "Indonesia Is Bringing Free Wi-fi To More Than 1,000 Villages This Year",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment10',
            'taxonomy' => array(
                'category' => 'campaign,education,national',
                'post_tag' => 'aff-u16-final,fake-news,market-stories,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'The best way to pay for a lovely moment is to enjoy it.'
            )
        ),
        'tourists-from-us-singapore-are-frequent-users-of-airbnb-in-south-korea' => array(
            'title' => "Tourists from US, Singapore are frequent users of Airbnb in South Korea",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment1',
            'taxonomy' => array(
                'category' => 'education,national,travel',
                'post_tag' => 'commentary,editorial,lombok-earthquake,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'these-delicious-balinese-street-foods-you-need-to-try-right-now' => array(
            'title' => "These delicious Balinese street foods you need to try right now",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment2',
            'taxonomy' => array(
                'category' => 'campaign,education,social-media,travel',
                'post_tag' => 'aff-u16-final,fake-news,lombok-earthquake,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}')
            )
        ),
        'trump-didnt-record-comey-white-house-tells-house-intel-panel' => array(
            'title' => "Thousands of peoples leaving Bali via port to skip 'Day of Silence'",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment3',
            'taxonomy' => array(
                'category' => 'education,social-media,travel',
                'post_tag' => 'fake-news,indonesias-2019-elections,lombok-earthquake,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'A wonderful serenity has taken possession of my entire soul.'
            )
        ),
        'finland-has-an-education-system-the-other-country-should-learn-from' => array(
            'title' => "Finland Has An Education System The Other Country Should Learn From",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment4',
            'taxonomy' => array(
                'category' => 'campaign,national,social-media',
                'post_tag' => '2018-asian-games,annual-speech,commentary,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'women-in-politics-urgency-of-quota-system-for-women-in-regional-elections' => array(
            'title' => "Women in politics: Urgency of quota system for women in Regional elections",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment5',
            'taxonomy' => array(
                'category' => 'national,politics,social-media',
                'post_tag' => 'aff-u16-final,editorial,indonesias-2019-elections,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Governments have a tendency not to solve problems, only to rearrange them.',
                'jnews_single_post' => array(
                    'override_template' => '1',
                    'override' => array(
                        array(
                            'template' => '3',
                            'single_blog_custom' => '',
                            'parallax' => '1',
                            'fullscreen' => '0',
                            'layout' => 'right-sidebar',
                            'sidebar' => 'default-sidebar',
                            'second_sidebar' => 'default-sidebar',
                            'sticky_sidebar' => '1',
                            'share_position' => 'bottom',
                            'share_float_style' => 'share-monocrhome',
                            'show_share_counter' => '1',
                            'show_view_counter' => '1',
                            'show_featured' => '0',
                            'show_post_meta' => '1',
                            'show_post_author' => '1',
                            'show_post_author_image' => '1',
                            'show_post_date' => '1',
                            'post_date_format' => 'default',
                            'post_date_format_custom' => 'Y/m/d',
                            'show_post_category' => '1',
                            'show_post_tag' => '1',
                            'show_prev_next_post' => '0',
                            'show_popup_post' => '1',
                            'number_popup_post' => '1',
                            'show_author_box' => '0',
                            'show_post_related' => '1',
                            'show_inline_post_related' => '0',
                        )
                    )
                )
            )
        ),
        'life-on-the-edge-at-home-in-mount-agungs-danger-zone' => array(
            'title' => "Life on the Edge: At home in Mount Agung’s Danger Zone",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment6',
            'taxonomy' => array(
                'category' => 'campaign,education,social-media,travel',
                'post_tag' => 'annual-speech,fake-news,lombok-earthquake,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'The heaviest penalty for declining to rule is to be ruled by someone inferior to yourself.'
            )
        ),
        'commentary-why-2019-indonesian-presidential-election-is-all-about-2024' => array(
            'title' => "The surprisingly disorderly history of the ID Presidential Succession Order",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment7',
            'taxonomy' => array(
                'category' => 'national,politics,social-media',
                'post_tag' => '2018-asian-games,annual-speech,indonesias-2019-elections,lombok-earthquake'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}')
            )
        ),
        'asian-games-committee-wants-house-compound-for-parking-lot' => array(
            'title' => "Asian Games committee wants House compound for parking lot",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment8',
            'taxonomy' => array(
                'category' => 'national,politics,social-media',
                'post_tag' => 'aff-u16-final,annual-speech,commentary,lombok-earthquake'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'what-you-need-to-know-about-sacred-balinese-dance-sanghyang-jaran-dance' => array(
            'title' => "Parties get time to find replacement for deceased Tegal regent incumbent",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment9',
            'taxonomy' => array(
                'category' => 'campaign,education,politics',
                'post_tag' => 'annual-speech,editorial,lombok-earthquake,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'The heaviest penalty for declining to rule is to be ruled by someone inferior to yourself.',
                'jnews_single_post' => array(
                    'override_image_size' => '1',
                    'image_override' => array(
                        array(
                            'single_post_thumbnail_size' => 'crop-715',
                            'single_post_gallery_size' => 'crop-500',
                        )
                    )
                )
            )
        ),
        'imf-world-bank-delegates-to-visit-gwk-cultural-park' => array(
            'title' => "IMF, World Bank delegates to visit GWK Cultural Park",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment10',
            'taxonomy' => array(
                'category' => 'campaign,national,travel',
                'post_tag' => '2018-asian-games,aff-u16-final,annual-speech,fake-news'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Governments have a tendency not to solve problems, only to rearrange them.'
            )
        ),
        'five-london-tower-blocks-evacuated-over-cladding-safety-fears' => array(
            'title' => "Millions of Indigenous People May Lose Voting Rights: Alliance",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment1',
            'taxonomy' => array(
                'category' => 'national,social-media,travel',
                'post_tag' => 'editorial,market-stories,national-exam,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'agriculture-minister-reluctant-to-comment-on-new-rice-import-permit' => array(
            'title' => "Agriculture minister reluctant to comment on new rice import permit",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment2',
            'taxonomy' => array(
                'category' => 'education,national,politics,social-media',
                'post_tag' => 'fake-news,lombok-earthquake,market-stories,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Self-belief and hard work will always earn you success.'
            )
        ),
        'government-tries-to-reach-toll-road-development-target' => array(
            'title' => "Government tries to reach toll road development target",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment3',
            'taxonomy' => array(
                'category' => 'campaign,national,politics',
                'post_tag' => '2018-asian-games,aff-u16-final,indonesias-2019-elections,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Governments have a tendency not to solve problems, only to rearrange them.'
            )
        ),
        'jokowi-to-issue-perppu-if-house-fails-to-revise-terror-law' => array(
            'title' => "Jokowi to issue Perppu if House fails to revise terror law",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment4',
            'taxonomy' => array(
                'category' => 'national,politics,social-media',
                'post_tag' => '2018-asian-games,aff-u16-final,editorial,fake-news'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'bogor-presidential-museum-displays-asian-games-exhibition' => array(
            'title' => "Bogor presidential museum displays Asian Games exhibition",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment5',
            'taxonomy' => array(
                'category' => 'national,politics,social-media',
                'post_tag' => '2018-asian-games,aff-u16-final,editorial,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}'),
                'post_subtitle' => 'Government exists to protect us from each other.'
            )
        ),
        'trump-may-special-relationship-gets-special-treatment-in-the-streets-of-london' => array(
            'title' => "Inflation safely within BI target range at start of Ramadhan",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment6',
            'taxonomy' => array(
                'category' => 'education,national,social-media,travel',
                'post_tag' => 'editorial,indonesias-2019-elections,lombok-earthquake,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Governments have a tendency not to solve problems, only to rearrange them.'
            )
        ),
        'antarctica-tourism-regulation-urgent-for-environment-summit' => array(
            'title' => "Antarctica tourism regulation urgent for environment: Summit",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment7',
            'taxonomy' => array(
                'category' => 'national,social-media,travel',
                'post_tag' => 'commentary,editorial,fake-news,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'of-course-this-novelty-final-fantasy-fork-is-an-oversized-sword-replica' => array(
            'title' => "Industry group seeks to enhance trade with Indonesia",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment8',
            'taxonomy' => array(
                'category' => 'education,national,politics',
                'post_tag' => '2018-asian-games,annual-speech,indonesias-2019-elections,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'surabaya-airport-named-most-punctual-in-southeast-asia' => array(
            'title' => "Surabaya airport named most punctual in Southeast Asia",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment9',
            'taxonomy' => array(
                'category' => 'campaign,politics,travel',
                'post_tag' => '2018-asian-games,aff-u16-final,commentary,lombok-earthquake'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'jakarta-incinerator-project-expected-to-start-this-year' => array(
            'title' => "Jakarta incinerator project expected to start this year",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment10',
            'taxonomy' => array(
                'category' => 'campaign,social-media,travel',
                'post_tag' => 'editorial,fake-news,indonesias-2019-elections,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.'
            )
        ),
        'obama-visits-bali-expected-to-promote-indonesian-tourism' => array(
            'title' => "Obama Visits Bali, Expected To Promote Indonesian Tourism",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment1',
            'taxonomy' => array(
                'category' => 'campaign,social-media,travel',
                'post_tag' => 'commentary,editorial,national-exam,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Self-belief and hard work will always earn you success.'
            )
        ),
        'alleged-graft-reported-in-jakarta-school-renovation-fund' => array(
            'title' => "Alleged graft reported in Jakarta school renovation fund",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment2',
            'taxonomy' => array(
                'category' => 'national,politics,social-media',
                'post_tag' => '2018-asian-games,commentary,fake-news,indonesias-2019-elections'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'The heaviest penalty for declining to rule is to be ruled by someone inferior to yourself.'
            )
        ),
        'education-investment-among-challenges-to-develop-ecotourism' => array(
            'title' => "Education, investment among challenges to develop ecotourism",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'goverment3',
            'taxonomy' => array(
                'category' => 'education,politics,travel',
                'post_tag' => 'aff-u16-final,commentary,editorial,lombok-earthquake'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}')
            )
        ),

        // page
        'home-1' => array(
            'title' => 'Home 1',
            'content' => 'home1.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1526372611051{margin-top: -30px !important;}.vc_custom_1527063714512{border-bottom-width: 1px !important;border-bottom-color: #eeeeee !important;border-bottom-style: solid !important;}.vc_custom_1527065107370{background-color: #3d3935 !important;}.vc_custom_1527064800804{border-bottom-width: 1px !important;border-bottom-color: #eeeeee !important;border-bottom-style: solid !important;}.vc_custom_1527059705257{background: #58acae url(https://jnews.io/government/wp-content/uploads/sites/42/2018/05/appbg2.jpg?id=297) !important;}.vc_custom_1526636216823{margin-top: 0px !important;margin-bottom: 10px !important;}.vc_custom_1526637066520{margin-bottom: 15px !important;}.vc_custom_1526625915621{margin-top: 0px !important;}.vc_custom_1526637233155{margin-bottom: 15px !important;}.vc_custom_1526637201208{margin-top: 0px !important;}.vc_custom_1526636186681{margin-bottom: 15px !important;}.vc_custom_1526625975159{margin-top: 0px !important;}.vc_custom_1526636193513{margin-bottom: 15px !important;}.vc_custom_1526626042772{margin-top: 0px !important;}.vc_custom_1526632729435{margin-top: 0px !important;}.vc_custom_1526632759009{margin-bottom: 10px !important;}.vc_custom_1526632774975{margin-bottom: 10px !important;}.vc_custom_1526966543446{margin-bottom: -10px !important;}.vc_custom_1526635132260{margin-top: 0px !important;margin-bottom: 15px !important;}.vc_custom_1527059233232{margin-top: 0px !important;}',
                'jnews_page_loop' => array(
                    'enable_page_loop' => '1',
                    'first_title' => 'Latest Post',
                    'header_type' => 'heading_7',
                    'layout' => 'no-sidebar',
                    'sidebar' => 'defafult-sidebar',
                    'second_sidebar' => 'defafult-sidebar',
                    'sticky_sidebar' => '1',
                    'module' => '23',
                    'excerpt_length' => '32',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'center',
                    'posts_per_page' => '9',
                    'sort_by' => 'latest',
                ),
                '_wpb_post_custom_css' => 'h2.vc_custom_heading {letter-spacing: -0.02em;}.jeg_sep_width_15 {width: 15%;}.jeg_image_inline {display: inline-block;margin-right: 30px;max-width: 40%;}',
                '_elementor_data' => 'home1.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_css' => array(
                    'time' => '1535089600',
                    'fonts' => array('Work Sans', 'Lato'),
                    'status' => 'file'
                ),
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor .elementor-element.elementor-element-a6a0ae7{margin-top:-40px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-75945d0{border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-75945d0 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-b17e4c8 .elementor-spacer-inner{height:35px;}.elementor .elementor-element.elementor-element-e6aa541{text-align:center;}.elementor .elementor-element.elementor-element-e6aa541.elementor-widget-heading .elementor-heading-title{color:#3d3935;}.elementor .elementor-element.elementor-element-e6aa541 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:31px;font-weight:700;}.elementor .elementor-element.elementor-element-a509219{text-align:center;}.elementor .elementor-element.elementor-element-a509219.elementor-widget-heading .elementor-heading-title{color:#a0a0a0;}.elementor .elementor-element.elementor-element-a509219 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:16px;font-weight:400;}.elementor .elementor-element.elementor-element-8b8ecc2 .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-fa83e05.elementor-view-stacked .elementor-icon{background-color:#f25f23;}.elementor .elementor-element.elementor-element-fa83e05.elementor-view-framed .elementor-icon, .elementor .elementor-element.elementor-element-fa83e05.elementor-view-default .elementor-icon{color:#f25f23;border-color:#f25f23;}.elementor .elementor-element.elementor-element-fa83e05.elementor-position-right .elementor-icon-box-icon{margin-left:15px;}.elementor .elementor-element.elementor-element-fa83e05.elementor-position-left .elementor-icon-box-icon{margin-right:15px;}.elementor .elementor-element.elementor-element-fa83e05.elementor-position-top .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-fa83e05 .elementor-icon i{transform:rotate(0deg);}.elementor .elementor-element.elementor-element-fa83e05 .elementor-icon-box-wrapper{text-align:left;}.elementor .elementor-element.elementor-element-fa83e05 .elementor-icon-box-content .elementor-icon-box-title{color:#3d3935;font-family:"Lato", Sans-serif;font-size:18px;}.elementor .elementor-element.elementor-element-fa83e05 .elementor-icon-box-content .elementor-icon-box-description{color:#3d3935;font-family:"Lato", Sans-serif;font-size:14px;}.elementor .elementor-element.elementor-element-9f58cd9.elementor-view-stacked .elementor-icon{background-color:#f25f23;}.elementor .elementor-element.elementor-element-9f58cd9.elementor-view-framed .elementor-icon, .elementor .elementor-element.elementor-element-9f58cd9.elementor-view-default .elementor-icon{color:#f25f23;border-color:#f25f23;}.elementor .elementor-element.elementor-element-9f58cd9.elementor-position-right .elementor-icon-box-icon{margin-left:15px;}.elementor .elementor-element.elementor-element-9f58cd9.elementor-position-left .elementor-icon-box-icon{margin-right:15px;}.elementor .elementor-element.elementor-element-9f58cd9.elementor-position-top .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-9f58cd9 .elementor-icon i{transform:rotate(0deg);}.elementor .elementor-element.elementor-element-9f58cd9 .elementor-icon-box-wrapper{text-align:left;}.elementor .elementor-element.elementor-element-9f58cd9 .elementor-icon-box-content .elementor-icon-box-title{color:#3d3935;font-family:"Lato", Sans-serif;font-size:18px;}.elementor .elementor-element.elementor-element-9f58cd9 .elementor-icon-box-content .elementor-icon-box-description{color:#3d3935;font-family:"Lato", Sans-serif;font-size:14px;}.elementor .elementor-element.elementor-element-8074972.elementor-view-stacked .elementor-icon{background-color:#f25f23;}.elementor .elementor-element.elementor-element-8074972.elementor-view-framed .elementor-icon, .elementor .elementor-element.elementor-element-8074972.elementor-view-default .elementor-icon{color:#f25f23;border-color:#f25f23;}.elementor .elementor-element.elementor-element-8074972.elementor-position-right .elementor-icon-box-icon{margin-left:15px;}.elementor .elementor-element.elementor-element-8074972.elementor-position-left .elementor-icon-box-icon{margin-right:15px;}.elementor .elementor-element.elementor-element-8074972.elementor-position-top .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-8074972 .elementor-icon i{transform:rotate(0deg);}.elementor .elementor-element.elementor-element-8074972 .elementor-icon-box-wrapper{text-align:left;}.elementor .elementor-element.elementor-element-8074972 .elementor-icon-box-content .elementor-icon-box-title{color:#3d3935;font-family:"Lato", Sans-serif;font-size:18px;}.elementor .elementor-element.elementor-element-8074972 .elementor-icon-box-content .elementor-icon-box-description{color:#3d3935;font-family:"Lato", Sans-serif;font-size:14px;}.elementor .elementor-element.elementor-element-ff243ab.elementor-view-stacked .elementor-icon{background-color:#f25f23;}.elementor .elementor-element.elementor-element-ff243ab.elementor-view-framed .elementor-icon, .elementor .elementor-element.elementor-element-ff243ab.elementor-view-default .elementor-icon{color:#f25f23;border-color:#f25f23;}.elementor .elementor-element.elementor-element-ff243ab.elementor-position-right .elementor-icon-box-icon{margin-left:15px;}.elementor .elementor-element.elementor-element-ff243ab.elementor-position-left .elementor-icon-box-icon{margin-right:15px;}.elementor .elementor-element.elementor-element-ff243ab.elementor-position-top .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-ff243ab .elementor-icon i{transform:rotate(0deg);}.elementor .elementor-element.elementor-element-ff243ab .elementor-icon-box-wrapper{text-align:left;}.elementor .elementor-element.elementor-element-ff243ab .elementor-icon-box-content .elementor-icon-box-title{color:#3d3935;font-family:"Lato", Sans-serif;font-size:18px;}.elementor .elementor-element.elementor-element-ff243ab .elementor-icon-box-content .elementor-icon-box-description{color:#3d3935;font-family:"Lato", Sans-serif;font-size:14px;}.elementor .elementor-element.elementor-element-933b767 .elementor-spacer-inner{height:40px;}.elementor .elementor-element.elementor-element-c2c9ba5 .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-068c771.elementor-widget-heading .elementor-heading-title{color:#3d3935;}.elementor .elementor-element.elementor-element-068c771 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:36px;font-weight:700;line-height:48px;}.elementor .elementor-element.elementor-element-2fb877f .elementor-divider-separator{border-top-style:solid;border-top-width:3px;border-top-color:#f25f23;width:15%;}.elementor .elementor-element.elementor-element-2fb877f .elementor-divider{padding-top:10px;padding-bottom:10px;}.elementor .elementor-element.elementor-element-560c26b .elementor-text-editor{text-align:justify;}.elementor .elementor-element.elementor-element-560c26b{color:#3d3935;font-family:"Lato", Sans-serif;}.elementor .elementor-element.elementor-element-e70df46 .elementor-divider-separator{border-top-style:solid;border-top-width:4px;border-top-color:#262626;width:100%;}.elementor .elementor-element.elementor-element-e70df46 .elementor-divider{padding-top:20px;padding-bottom:20px;}.elementor .elementor-element.elementor-element-08cdf4b .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-26c7f70{text-align:center;}.elementor .elementor-element.elementor-element-26c7f70.elementor-widget-heading .elementor-heading-title{color:#3d3935;}.elementor .elementor-element.elementor-element-26c7f70 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:31px;font-weight:700;}.elementor .elementor-element.elementor-element-5210a59{text-align:center;}.elementor .elementor-element.elementor-element-5210a59.elementor-widget-heading .elementor-heading-title{color:#a0a0a0;}.elementor .elementor-element.elementor-element-5210a59 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:16px;font-weight:400;}.elementor .elementor-element.elementor-element-7ea0708 .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-b52c3c0 .elementor-spacer-inner{height:40px;}.elementor .elementor-element.elementor-element-38bd424{background-color:#3d3935;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-38bd424 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-3ec9a68{text-align:center;}.elementor .elementor-element.elementor-element-3ec9a68.elementor-widget-heading .elementor-heading-title{color:#ffffff;}.elementor .elementor-element.elementor-element-3ec9a68 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:31px;font-weight:700;}.elementor .elementor-element.elementor-element-3ec9a68 > .elementor-widget-container{margin:40px 0px 35px 0px;}.elementor .elementor-element.elementor-element-55387a9 .elementor-spacer-inner{height:50px;}.elementor .elementor-element.elementor-element-03882ee{background-image:url("{{image:appbg2:url:full}}");background-position:center center;background-repeat:no-repeat;background-size:auto;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-03882ee > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-973a561 .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-c99eacc{text-align:left;}.elementor .elementor-element.elementor-element-c99eacc.elementor-widget-heading .elementor-heading-title{color:#ffffff;}.elementor .elementor-element.elementor-element-c99eacc .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:18px;font-weight:400;}.elementor .elementor-element.elementor-element-c99eacc > .elementor-widget-container{margin:0px 0px -20px 0px;}.elementor .elementor-element.elementor-element-b8eaaa2{text-align:left;}.elementor .elementor-element.elementor-element-b8eaaa2.elementor-widget-heading .elementor-heading-title{color:#ffffff;}.elementor .elementor-element.elementor-element-b8eaaa2 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:44px;font-weight:700;}.elementor .elementor-element.elementor-element-b8eaaa2 > .elementor-widget-container{margin:40px 0px 35px 0px;}.elementor .elementor-element.elementor-element-be40dd9{text-align:left;}.elementor .elementor-element.elementor-element-82f5aee{text-align:left;}.elementor .elementor-element.elementor-element-82f5aee .elementor-image img{filter:brightness( 100% ) contrast( 100% ) saturate( 100% ) blur( 0px );}.elementor .elementor-element.elementor-element-5649d64 .elementor-spacer-inner{height:20px;}@media(max-width:767px){.elementor .elementor-element.elementor-element-fa83e05 .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-9f58cd9 .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-8074972 .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-ff243ab .elementor-icon-box-icon{margin-bottom:15px;}}@media(min-width:768px){.elementor .elementor-element.elementor-element-92770cf{width:25%;}.elementor .elementor-element.elementor-element-c2da536{width:50%;}.elementor .elementor-element.elementor-element-a6164cc{width:24.996%;}}h2.vc_custom_heading {letter-spacing: -0.02em;}.jeg_sep_width_15 {width: 15%;}.jeg_image_inline {display: inline-block;margin-right: 30px;max-width: 40%;}'
                )
            )
        ),
        'profile' => array(
            'title' => 'Goverment Proile',
            'content' => 'profile.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1527046887117{margin-top: 15px !important;}',
                '_elementor_data' => 'profile.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor-62 .elementor-element.elementor-element-454e33b.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor-62 .elementor-element.elementor-element-454e33b .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor-62 .elementor-element.elementor-element-454e33b > .elementor-widget-container{margin:10px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor-62 .elementor-element.elementor-element-8bec48d.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor-62 .elementor-element.elementor-element-8bec48d .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor-62 .elementor-element.elementor-element-8bec48d > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor-62 .elementor-element.elementor-element-2f35f97.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor-62 .elementor-element.elementor-element-2f35f97 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor-62 .elementor-element.elementor-element-2f35f97 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor-62 .elementor-element.elementor-element-71bda60 .elementor-spacer-inner{height:10px;}.elementor-62 .elementor-element.elementor-element-3ef5b8f.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor-62 .elementor-element.elementor-element-3ef5b8f .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor-62 .elementor-element.elementor-element-3ef5b8f > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor-62 .elementor-element.elementor-element-01b96a4.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor-62 .elementor-element.elementor-element-01b96a4 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor-62 .elementor-element.elementor-element-01b96a4 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor-62 .elementor-element.elementor-element-80dc402.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor-62 .elementor-element.elementor-element-80dc402 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor-62 .elementor-element.elementor-element-80dc402 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor-62 .elementor-element.elementor-element-1cc16f5.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor-62 .elementor-element.elementor-element-1cc16f5 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor-62 .elementor-element.elementor-element-1cc16f5 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor-62 .elementor-element.elementor-element-4874c97.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor-62 .elementor-element.elementor-element-4874c97 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor-62 .elementor-element.elementor-element-4874c97 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor-62 .elementor-element.elementor-element-acd8e41.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor-62 .elementor-element.elementor-element-acd8e41 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor-62 .elementor-element.elementor-element-acd8e41 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor-62 .elementor-element.elementor-element-5552014.elementor-widget-heading .elementor-heading-title{color:#3d3935;}.elementor-62 .elementor-element.elementor-element-5552014 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:50px;font-weight:700;}.elementor-62 .elementor-element.elementor-element-5552014 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-62 .elementor-element.elementor-element-8b6ed6c{color:#3d3935;font-family:"Lato", Sans-serif;font-size:14px;font-weight:400;}.elementor-62 .elementor-element.elementor-element-8b43c0e .elementor-divider-separator{border-top-style:solid;border-top-width:4px;border-top-color:#eeeeee;width:100%;}.elementor-62 .elementor-element.elementor-element-8b43c0e .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-62 .elementor-element.elementor-element-644ca83.elementor-widget-heading .elementor-heading-title{color:#3d3935;}.elementor-62 .elementor-element.elementor-element-644ca83 .elementor-heading-title{font-family:"Work Sans", Sans-serif;}.elementor-62 .elementor-element.elementor-element-79bb1dc{color:#3d3935;font-family:"Lato", Sans-serif;font-size:14px;font-weight:400;}.elementor-62 .elementor-element.elementor-element-0cb237f .elementor-divider-separator{border-top-style:solid;border-top-width:4px;border-top-color:#eeeeee;width:100%;}.elementor-62 .elementor-element.elementor-element-0cb237f .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-62 .elementor-element.elementor-element-f790d5d.elementor-widget-heading .elementor-heading-title{color:#3d3935;}.elementor-62 .elementor-element.elementor-element-f790d5d .elementor-heading-title{font-family:"Work Sans", Sans-serif;}.elementor-62 .elementor-element.elementor-element-bea8d6a{color:#3d3935;font-family:"Lato", Sans-serif;font-size:14px;font-weight:400;}.elementor-62 .elementor-element.elementor-element-3ebd00c .elementor-spacer-inner{height:10px;}'
                )
            )
        ),
        'information-and-services' => array(
            'title' => 'Information & Services',
            'content' => 'informationservices.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1527043673143{margin-top: 15px !important;}.vc_custom_1526637066520{margin-bottom: 15px !important;}.vc_custom_1526625915621{margin-top: 0px !important;}.vc_custom_1526637233155{margin-bottom: 15px !important;}.vc_custom_1526637201208{margin-top: 0px !important;}.vc_custom_1526636186681{margin-bottom: 15px !important;}.vc_custom_1526625975159{margin-top: 0px !important;}.vc_custom_1526636193513{margin-bottom: 15px !important;}.vc_custom_1526626042772{margin-top: 0px !important;}',
                '_elementor_data' => 'informationservices.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor .elementor-element.elementor-element-454e33b.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-454e33b .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor .elementor-element.elementor-element-454e33b > .elementor-widget-container{margin:10px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor .elementor-element.elementor-element-8bec48d.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-8bec48d .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor .elementor-element.elementor-element-8bec48d > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor .elementor-element.elementor-element-2f35f97.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-2f35f97 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor .elementor-element.elementor-element-2f35f97 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor .elementor-element.elementor-element-117e69d.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-117e69d .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor .elementor-element.elementor-element-117e69d > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor .elementor-element.elementor-element-71bda60 .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-3ef5b8f.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-3ef5b8f .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor .elementor-element.elementor-element-3ef5b8f > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor .elementor-element.elementor-element-01b96a4.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-01b96a4 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor .elementor-element.elementor-element-01b96a4 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor .elementor-element.elementor-element-80dc402.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-80dc402 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor .elementor-element.elementor-element-80dc402 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor .elementor-element.elementor-element-1cc16f5.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-1cc16f5 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor .elementor-element.elementor-element-1cc16f5 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor .elementor-element.elementor-element-4874c97.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-4874c97 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor .elementor-element.elementor-element-4874c97 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor .elementor-element.elementor-element-acd8e41.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-acd8e41 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:700;}.elementor .elementor-element.elementor-element-acd8e41 > .elementor-widget-container{margin:-5px 0px 0px 0px;padding:0px 0px 10px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#eeeeee;}.elementor .elementor-element.elementor-element-5552014.elementor-widget-heading .elementor-heading-title{color:#3d3935;}.elementor .elementor-element.elementor-element-5552014 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:50px;font-weight:700;}.elementor .elementor-element.elementor-element-5552014 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-8b6ed6c{color:#3d3935;font-family:"Lato", Sans-serif;font-size:14px;font-weight:400;}.elementor .elementor-element.elementor-element-8b43c0e .elementor-divider-separator{border-top-style:solid;border-top-width:4px;border-top-color:#eeeeee;width:100%;}.elementor .elementor-element.elementor-element-8b43c0e .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor .elementor-element.elementor-element-fe8e50f.elementor-view-stacked .elementor-icon{background-color:#f25f23;}.elementor .elementor-element.elementor-element-fe8e50f.elementor-view-framed .elementor-icon, .elementor .elementor-element.elementor-element-fe8e50f.elementor-view-default .elementor-icon{color:#f25f23;border-color:#f25f23;}.elementor .elementor-element.elementor-element-fe8e50f.elementor-position-right .elementor-icon-box-icon{margin-left:15px;}.elementor .elementor-element.elementor-element-fe8e50f.elementor-position-left .elementor-icon-box-icon{margin-right:15px;}.elementor .elementor-element.elementor-element-fe8e50f.elementor-position-top .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-fe8e50f .elementor-icon{font-size:45px;}.elementor .elementor-element.elementor-element-fe8e50f .elementor-icon i{transform:rotate(0deg);}.elementor .elementor-element.elementor-element-fe8e50f .elementor-icon-box-wrapper{text-align:left;}.elementor .elementor-element.elementor-element-fe8e50f .elementor-icon-box-content .elementor-icon-box-title{color:#3d3935;font-family:"Lato", Sans-serif;font-size:18px;}.elementor .elementor-element.elementor-element-fe8e50f .elementor-icon-box-content .elementor-icon-box-description{color:#3d3935;font-family:"Lato", Sans-serif;}.elementor .elementor-element.elementor-element-be823ee.elementor-view-stacked .elementor-icon{background-color:#f25f23;}.elementor .elementor-element.elementor-element-be823ee.elementor-view-framed .elementor-icon, .elementor .elementor-element.elementor-element-be823ee.elementor-view-default .elementor-icon{color:#f25f23;border-color:#f25f23;}.elementor .elementor-element.elementor-element-be823ee.elementor-position-right .elementor-icon-box-icon{margin-left:15px;}.elementor .elementor-element.elementor-element-be823ee.elementor-position-left .elementor-icon-box-icon{margin-right:15px;}.elementor .elementor-element.elementor-element-be823ee.elementor-position-top .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-be823ee .elementor-icon{font-size:45px;}.elementor .elementor-element.elementor-element-be823ee .elementor-icon i{transform:rotate(0deg);}.elementor .elementor-element.elementor-element-be823ee .elementor-icon-box-wrapper{text-align:left;}.elementor .elementor-element.elementor-element-be823ee .elementor-icon-box-content .elementor-icon-box-title{color:#3d3935;font-family:"Lato", Sans-serif;font-size:18px;}.elementor .elementor-element.elementor-element-be823ee .elementor-icon-box-content .elementor-icon-box-description{color:#3d3935;font-family:"Lato", Sans-serif;}.elementor .elementor-element.elementor-element-5a9e723.elementor-view-stacked .elementor-icon{background-color:#f25f23;}.elementor .elementor-element.elementor-element-5a9e723.elementor-view-framed .elementor-icon, .elementor .elementor-element.elementor-element-5a9e723.elementor-view-default .elementor-icon{color:#f25f23;border-color:#f25f23;}.elementor .elementor-element.elementor-element-5a9e723.elementor-position-right .elementor-icon-box-icon{margin-left:15px;}.elementor .elementor-element.elementor-element-5a9e723.elementor-position-left .elementor-icon-box-icon{margin-right:15px;}.elementor .elementor-element.elementor-element-5a9e723.elementor-position-top .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-5a9e723 .elementor-icon{font-size:45px;}.elementor .elementor-element.elementor-element-5a9e723 .elementor-icon i{transform:rotate(0deg);}.elementor .elementor-element.elementor-element-5a9e723 .elementor-icon-box-wrapper{text-align:left;}.elementor .elementor-element.elementor-element-5a9e723 .elementor-icon-box-content .elementor-icon-box-title{color:#3d3935;font-family:"Lato", Sans-serif;font-size:18px;}.elementor .elementor-element.elementor-element-5a9e723 .elementor-icon-box-content .elementor-icon-box-description{color:#3d3935;font-family:"Lato", Sans-serif;}.elementor .elementor-element.elementor-element-9cf07bd.elementor-view-stacked .elementor-icon{background-color:#f25f23;}.elementor .elementor-element.elementor-element-9cf07bd.elementor-view-framed .elementor-icon, .elementor .elementor-element.elementor-element-9cf07bd.elementor-view-default .elementor-icon{color:#f25f23;border-color:#f25f23;}.elementor .elementor-element.elementor-element-9cf07bd.elementor-position-right .elementor-icon-box-icon{margin-left:15px;}.elementor .elementor-element.elementor-element-9cf07bd.elementor-position-left .elementor-icon-box-icon{margin-right:15px;}.elementor .elementor-element.elementor-element-9cf07bd.elementor-position-top .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-9cf07bd .elementor-icon{font-size:45px;}.elementor .elementor-element.elementor-element-9cf07bd .elementor-icon i{transform:rotate(0deg);}.elementor .elementor-element.elementor-element-9cf07bd .elementor-icon-box-wrapper{text-align:left;}.elementor .elementor-element.elementor-element-9cf07bd .elementor-icon-box-content .elementor-icon-box-title{color:#3d3935;font-family:"Lato", Sans-serif;font-size:18px;}.elementor .elementor-element.elementor-element-9cf07bd .elementor-icon-box-content .elementor-icon-box-description{color:#3d3935;font-family:"Lato", Sans-serif;}.elementor .elementor-element.elementor-element-3ebd00c .elementor-spacer-inner{height:10px;}@media(max-width:767px){.elementor .elementor-element.elementor-element-fe8e50f .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-be823ee .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-5a9e723 .elementor-icon-box-icon{margin-bottom:15px;}.elementor .elementor-element.elementor-element-9cf07bd .elementor-icon-box-icon{margin-bottom:15px;}}'
                )
            )
        ),
        'contact' => array(
            'title' => 'Contact',
            'content' => 'contact.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1527048626121{margin-top: 15px !important;}',
                '_wpb_post_custom_css' => '.jeg_vc_content input:not([type="submit"]) {width: auto;min-width: 60%;}',
                '_elementor_data' => 'contact.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor .elementor-element.elementor-element-bb97abb{color:#3d3935;font-family:"Lato", Sans-serif;}.elementor .elementor-element.elementor-element-edc816a{color:#3d3935;font-family:"Lato", Sans-serif;}.elementor .elementor-element.elementor-element-57f4be1 iframe{height:500px;pointer-events:none;}.elementor .elementor-element.elementor-element-10b5a48.elementor-widget-heading .elementor-heading-title{color:#3d3935;}.elementor .elementor-element.elementor-element-10b5a48 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:50px;font-weight:700;}.elementor .elementor-element.elementor-element-687fc5b .elementor-divider-separator{border-top-style:solid;border-top-width:4px;border-top-color:#ebebeb;width:100%;}.elementor .elementor-element.elementor-element-687fc5b .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor .elementor-element.elementor-element-7af66b2.elementor-widget-heading .elementor-heading-title{color:#3d3935;}.elementor .elementor-element.elementor-element-7af66b2 .elementor-heading-title{font-family:"Work Sans", Sans-serif;font-size:1.65em;font-weight:700;}.elementor .elementor-element.elementor-element-8617aa2{color:#3d3935;font-family:"Lato", Sans-serif;}'
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
        'footer-navigation' => array(
            'title' => 'Footer Navigation',
            'location' => 'footer_navigation'
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

        'goverment-proile' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Goverment Profile',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:profile:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        'information-services' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Information & Services',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:information-and-services:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        'national-news' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'National News',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:national:id}}',
                'menu-item-status' => 'publish',
            ),
            'metabox' => array(
                'menu_item_jnews_mega_menu' => array(
                    'type' => 'category_2',
                    'category' => '{{category:national:id}}',
                    'number' => 6,
                    'trending_tag' => '{{taxonomy:post_tag:indonesias-2019-elections:id}},{{taxonomy:post_tag:fake-news:id}},{{taxonomy:post_tag:lombok-earthquake:id}},{{taxonomy:post_tag:aff-u16-final:id}},{{taxonomy:post_tag:2018-asian-games:id}},{{taxonomy:post_tag:visit-bali:id}}',
                ),
            )

        ),

        'education' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Education',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:education:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        'contact-1' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Contact',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:contact:id}}',
                'menu-item-status' => 'publish'
            )
        ),


        // Footer & Topbar Menu
        'about' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'About',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'help' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Help',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'feedback' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Feedback',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'contact-us' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Contact',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        )
    ),

    'widget_position' => array(
        'Author',
        'Home 2'
    ),

    'widget' => array(
        'widget.json',
    ),

    'customizer' => array(
        'style.json',
    ),

    'plugin' => array(
        'jnews-breadcrumb',
        'jnews-gallery',
        'jnews-jsonld',
        'jnews-meta-header',
        'jnews-social-login',
        'jnews-social-share',
        'jnews-split',
        'jnews-view-counter',
        'jnews-weather',
    )
);

<?php

return array(

    // image
    'image' => array(
        'travel1' => 'http://jegtheme.com/asset/jnews/demo/travel/travel1.jpg',
        'travel2' => 'http://jegtheme.com/asset/jnews/demo/travel/travel2.jpg',
        'travel3' => 'http://jegtheme.com/asset/jnews/demo/travel/travel3.jpg',
        'travel4' => 'http://jegtheme.com/asset/jnews/demo/food/food5.jpg',
        'travel5' => 'http://jegtheme.com/asset/jnews/demo/travel/travel5.jpg',
        'travel6' => 'http://jegtheme.com/asset/jnews/demo/travel/travel6.jpg',
        'travel7' => 'http://jegtheme.com/asset/jnews/demo/travel/travel7.jpg',
        'travel8' => 'http://jegtheme.com/asset/jnews/demo/travel/travel8.jpg',
        'travel9' => 'http://jegtheme.com/asset/jnews/demo/travel/travel9.jpg',
        'travel10' => 'http://jegtheme.com/asset/jnews/demo/default/travel3.jpg',
        'travelbg' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/hero-bg.jpg',
        'footerbg' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/footerbg.jpg',
        'logo' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/normal-logo.png',
        'logo2x' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/logo@2x.png',
        'footer_logo' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/footer_logo.png',
        'footer_logo2x' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/footer_logo@2x.png',
        'lettering' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/lettering.png',
        'bbc' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/bbc-1.png',
        'nyt' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/nyt.png',
        'cnn' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/cnn.png',
        'natgeo' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/natgeo-1.png',
        'thp' => 'http://jegtheme.com/asset/jnews/demo/travel-blog/thp-1.png',
        'favicon' => 'http://jegtheme.com/asset/jnews/demo/default/favicon.png',
        'ad_300x250' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x250.jpg',
        'ad_345x345' => 'http://jegtheme.com/asset/jnews/demo/default/ad_345x345.jpg',
        'ad_728x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_728x90.png',
        'ad_970x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_970x90.png'
    ),

    // create taxonomy
    'taxonomy' => array(
        'category' => array(
            'destination' =>
                array(
                    'title' => 'Destination',
                    'description' => 'You can add some category description here.'
                ),
            'food-drink' =>
                array(
                    'title' => 'Food & Drink',
                    'description' => 'You can add some category description here.'
                ),
            'guides' =>
                array(
                    'title' => 'Guides',
                    'description' => 'You can add some category description here.'
                ),
            'photography' =>
                array(
                    'title' => 'Photography',
                    'description' => 'You can add some category description here.'
                ),
            'travel-tips' =>
                array(
                    'title' => 'Travel Tips',
                    'description' => 'You can add some category description here.'
                ),
        ),
        'post_tag' => array(
            'backpacker' => array(
                'title' => 'Backpacker'
            ),
            'food' => array(
                'title' => 'Food'
            ),
            'gear' => array(
                'title' => 'Gear'
            ),
            'resources' => array(
                'title' => 'Resources'
            ),
            'solo-travel' => array(
                'title' => 'Solo Travel'
            ),
            'tips' => array(
                'title' => 'Tips'
            ),
            'trip-plan' => array(
                'title' => 'Trip Plan'
            )
        )
    ),

    // post & page
    'post' => array(
        // post
        'your-guide-to-canggus-hottest-street-the-essential-batu-bolong' => array(
            'title' => "Your Guide to Canggu’s Hottest Street: The Essential Batu Bolong",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel1',
            'taxonomy' => array(
                'category' => 'photography,travel-tips',
                'post_tag' => 'backpacker,food,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'expert-tips-how-to-become-a-professional-travel-blogger' => array(
            'title' => "Expert Tips: How To Become A Professional Travel Blogger",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel2',
            'taxonomy' => array(
                'category' => 'destination,travel-tips',
                'post_tag' => 'backpacker,resources,solo-travel,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        '10-summer-safety-tips-for-water-sports-adventurers' => array(
            'title' => "10 Summer Safety Tips For Water Sports Adventurers",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel3',
            'taxonomy' => array(
                'category' => 'destination,photography,travel-tips',
                'post_tag' => 'food,gear,resources,solo-travel'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}')
            )
        ),
        '6-perfect-places-to-watch-the-sunrise-in-bali-while-you-honeymoon' => array(
            'title' => "6 Perfect places to watch the sunrise in Bali while you honeymoon",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel4',
            'taxonomy' => array(
                'category' => 'photography,travel-tips',
                'post_tag' => 'gear,solo-travel,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'these-delicious-balinese-street-foods-you-need-to-try-right-now' => array(
            'title' => "These delicious Balinese street foods you need to try right now",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel5',
            'taxonomy' => array(
                'category' => 'destination,food-drink,photography,travel-tips',
                'post_tag' => 'resources,solo-travel,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}')
            )
        ),
        'tips-choosing-the-best-accommodation-type-for-your-trip' => array(
            'title' => "Tips: Choosing the best accommodation type for your trip",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel6',
            'taxonomy' => array(
                'category' => 'destination,food-drink,travel-tips',
                'post_tag' => 'backpacker,food,resources,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}')
            )
        ),
        'celebrate-nyepi-in-true-bali-spirit-with-a-luxurious-day-of-silence' => array(
            'title' => "Celebrate Nyepi in true Bali spirit with a luxurious day of silence",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel7',
            'taxonomy' => array(
                'category' => 'destination,photography,travel-tips',
                'post_tag' => 'backpacker,resources,solo-travel,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'Not until we are lost do we begin to understand ourselves.'
            )
        ),
        'start-journey-get-lost-and-fun' => array(
            'title' => "Start Journey, Get Lost and Fun",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel8',
            'taxonomy' => array(
                'category' => 'destination,photography,travel-tips',
                'post_tag' => 'food,resources,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'Not until we are lost do we begin to understand ourselves.'
            )
        ),
        'important-things-you-should-know-for-mount-agung-hiking' => array(
            'title' => "Important things you should know for Mount Agung hiking",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel9',
            'taxonomy' => array(
                'category' => 'destination,guides,travel-tips',
                'post_tag' => 'backpacker,gear,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'get-to-know-balinise-cuisine-5-essential-foods' => array(
            'title' => "Get to Know Balinise Cuisine: 5 Essential Foods",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel10',
            'taxonomy' => array(
                'category' => 'food-drink,guides,photography,travel-tips',
                'post_tag' => 'backpacker,resources,solo-travel,tips'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'The mind can never break off from the journey.'
            )
        ),
        'this-restaurant-is-making-coffee-leaf-salad-pizza' => array(
            'title' => "This restaurant is making coffee leaf salad pizza",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel1',
            'taxonomy' => array(
                'category' => 'food-drink,photography',
                'post_tag' => 'backpacker,food,gear,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}')
            )
        ),
        'hidden-and-secluded-beach-in-bali-with-breathtaking-views' => array(
            'title' => "Hidden and Secluded Beach in Bali with Breathtaking Views",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel2',
            'taxonomy' => array(
                'category' => 'destination,photography,travel-tips',
                'post_tag' => 'backpacker,solo-travel,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}')
            )
        ),
        'exploring-mount-bromo-with-jeep' => array(
            'title' => "Exploring Mount Bromo with Jeep",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel3',
            'taxonomy' => array(
                'category' => 'destination,food-drink,travel-tips',
                'post_tag' => 'backpacker,resources,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'Far far away, behind the word mountains, far from the countries Vokalia.'
            )
        ),
        'sunday-morning-at-the-top-of-the-mountain' => array(
            'title' => "Sunday Morning at The Top of The Mountain",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel4',
            'taxonomy' => array(
                'category' => 'destination,photography,travel-tips',
                'post_tag' => 'backpacker,gear,resources,tips'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'The journey not the arrival matters.'
            )
        ),
        'uluwatu-vacation-rentals-from-10-to-consider-when-visiting-bali' => array(
            'title' => "Uluwatu Vacation Rentals from $10 to Consider When Visiting Bali",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel5',
            'taxonomy' => array(
                'category' => 'food-drink,photography,travel-tips',
                'post_tag' => 'backpacker,food,solo-travel,tips'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'One\'s destination is never a place, but always a new way of seeing things.'
            )
        ),
        '7-things-you-should-know-when-taking-a-taxi-in-seminyak' => array(
            'title' => "7 Things you should know when taking a Taxi in Seminyak",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel6',
            'taxonomy' => array(
                'category' => 'destination,photography,travel-tips',
                'post_tag' => 'gear,resources,solo-travel,tips'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}')
            )
        ),
        'going-alone-everything-you-need-to-know-about-solo-traveler' => array(
            'title' => "Going Alone: Everything You Need to Know About Solo Traveler",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel7',
            'taxonomy' => array(
                'category' => 'destination,travel-tips',
                'post_tag' => 'food,gear,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}')
            )
        ),
        '10-things-you-didnt-know-about-being-solo-traveler-in-asia' => array(
            'title' => "10 things you didn't know about being solo traveler in Asia",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel8',
            'taxonomy' => array(
                'category' => 'destination,guides',
                'post_tag' => 'backpacker,food,gear,solo-travel'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Not until we are lost do we begin to understand ourselves.'
            )
        ),
        'great-surf-spots-in-bali-from-beginner-to-pro-surfers-2' => array(
            'title' => "Great Surf Spots in Bali: From Beginner to Pro Surfers",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel9',
            'taxonomy' => array(
                'category' => 'destination,guides,travel-tips',
                'post_tag' => 'food,solo-travel,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}')
            )
        ),
        'important-rules-to-surviving-a-climb-up-mount-agung-bali' => array(
            'title' => "Important Rules to Surviving a Climb up Mount Agung Bali",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel10',
            'taxonomy' => array(
                'category' => 'destination,photography,travel-tips',
                'post_tag' => 'food,gear,resources,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}')
            )
        ),
        'lunch-at-this-cosy-cafe-and-try-the-unique-signature-drink' => array(
            'title' => "Lunch at This Cosy Cafe and Try The Unique Signature Drink",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel1',
            'taxonomy' => array(
                'category' => 'food-drink,photography,travel-tips',
                'post_tag' => 'gear,resources,solo-travel,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}')
            )
        ),
        'hostem-makes-travel-comfortable-with-a-portable-pillow-and-duvet-set' => array(
            'title' => "Hostem Makes Travel Comfortable With a Portable Pillow and Duvet Set",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel2',
            'taxonomy' => array(
                'category' => 'destination,travel-tips',
                'post_tag' => 'gear,solo-travel,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'start-making-your-travel-plans-for-next-year' => array(
            'title' => "Start making your travel plans for next year",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel3',
            'taxonomy' => array(
                'category' => 'destination,guides,travel-tips',
                'post_tag' => 'gear,resources,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}')
            )
        ),
        'top-things-must-do-must-see-must-eat-in-bali' => array(
            'title' => "Top Things: Must-Do, Must-See & Must-Eat in Bali",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel4',
            'taxonomy' => array(
                'category' => 'destination,travel-tips',
                'post_tag' => 'backpacker,food,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'Essential Bali travel tips for first-time visitors'
            )
        ),
        'late-night-restaurants-in-kuta-great-spots-that-open-past-midnight' => array(
            'title' => "Late night restaurants in Kuta: Great spots that open past midnight",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel5',
            'taxonomy' => array(
                'category' => 'food-drink,photography,travel-tips',
                'post_tag' => 'backpacker,gear,resources,tips'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}')
            )
        ),
        'preparing-stuff-for-the-summer-vibes' => array(
            'title' => "Preparing Stuff for Summer Trip",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel6',
            'taxonomy' => array(
                'category' => 'guides,photography',
                'post_tag' => 'backpacker,resources,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'The mind can never break off from the journey.'
            )
        ),
        'how-to-built-a-freelance-career-while-traveling-the-world' => array(
            'title' => "How to built a freelance career while traveling the world",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel7',
            'taxonomy' => array(
                'category' => 'travel-tips',
                'post_tag' => 'food,solo-travel,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'Essential tips for beginners.'
            )
        ),
        'traveling-with-a-second-language-is-a-life-savior' => array(
            'title' => "Traveling with a second language is a life savior",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel8',
            'taxonomy' => array(
                'category' => 'destination,guides',
                'post_tag' => 'backpacker,solo-travel,tips,trip-plan'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'bizarre-travel-plans-are-dancing-lessons-from-god' => array(
            'title' => "Bizarre Travel Plans Are Dancing Lessons From God",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel9',
            'taxonomy' => array(
                'category' => 'destination,travel-tips',
                'post_tag' => 'food,resources,solo-travel,tips'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'is-japan-the-most-overrated-travel-destination-in-the-world' => array(
            'title' => "Is Japan the Most Overrated Travel Destination in the World?",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'travel10',
            'taxonomy' => array(
                'category' => 'destination,travel-tips',
                'post_tag' => 'backpacker,food,gear,solo-travel'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}')
            )
        ),
        'travel-and-change-of-place-impart-new-vigour-to-the-mind' => array(
            'title' => "Travel and change of place impart new vigour to the mind",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'travel1',
            'taxonomy' => array(
                'category' => 'destination,photography,travel-tips',
                'post_tag' => 'food,gear,solo-travel,trip-plan'
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
                '_wpb_shortcodes_custom_css' => '.vc_custom_1532396301073{margin-top: 25px !important;}.vc_custom_1530847853009{padding-right: 60px !important;padding-left: 60px !important;}.vc_custom_1532327969462{margin-top: 0px !important;margin-bottom: 24px !important;}.vc_custom_1532397389915{margin-bottom: 30px !important;}.vc_custom_1530699570188{padding: 40px !important;background-color: #2c2119 !important;}',
                '_wpb_post_custom_css' => '.jeg_content {    padding-top: 0 !important;}.presslogo img {    opacity: .7;    transition: .25s ease-in;    -webkit-backface-visibility: hidden;}.presslogo:hover img {    opacity: 1;}.jeg_hero_bottom {    position: absolute;    bottom: 30px;    width: 100%;}',
                '_elementor_data' => 'home1.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor .elementor-element.elementor-element-faa5713{background-image:url("{{image:travelbg:url:full}}");background-position:center center;background-repeat:no-repeat;background-size:auto;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:-30px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-faa5713 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-ff57917{text-align:center;}.elementor .elementor-element.elementor-element-4fecb77 a.elementor-button, .elementor .elementor-element.elementor-element-4fecb77 .elementor-button{font-family:"Lato", Sans-serif;font-size:14px;background-color:rgba(255,255,255,0);border-radius:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-4fecb77 a.elementor-button:hover, .elementor .elementor-element.elementor-element-4fecb77 .elementor-button:hover{background-color:#e89005;border-color:#e89005;}.elementor .elementor-element.elementor-element-4fecb77 .elementor-button{border-style:solid;border-width:2px 2px 2px 2px;border-color:#ffffff;}.elementor .elementor-element.elementor-element-5fbe9ff .elementor-spacer-inner{height:40px;}.elementor .elementor-element.elementor-element-a8a599c.elementor-column .elementor-column-wrap{align-items:center;}.elementor .elementor-element.elementor-element-a8a599c > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(:last-child){margin-bottom:20px;}.elementor .elementor-element.elementor-element-a8a599c .elementor-element-populated{padding:0px 50px 0px 50px;}.elementor .elementor-element.elementor-element-485eb02.elementor-widget-heading .elementor-heading-title{color:#18120e;}.elementor .elementor-element.elementor-element-485eb02 .elementor-heading-title{font-family:"Lora", Sans-serif;font-size:38px;font-weight:700;line-height:1.2em;}.elementor .elementor-element.elementor-element-a3cec63{color:#18120e;font-family:"Lato", Sans-serif;font-size:14px;}.elementor .elementor-element.elementor-element-7f79ef6 a.elementor-button, .elementor .elementor-element.elementor-element-7f79ef6 .elementor-button{font-family:"Lato", Sans-serif;font-size:12px;background-color:#18120e;border-radius:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-1f86a88 .elementor-spacer-inner{height:20px;}.elementor .elementor-element.elementor-element-ea4de22{text-align:center;}.elementor .elementor-element.elementor-element-ea4de22.elementor-widget-heading .elementor-heading-title{color:#18120e;}.elementor .elementor-element.elementor-element-ea4de22 .elementor-heading-title{font-family:"Lora", Sans-serif;font-size:25px;font-weight:700;line-height:1.2em;}.elementor .elementor-element.elementor-element-8e3b12f .elementor-spacer-inner{height:30px;}.elementor .elementor-element.elementor-element-1b59e1d > .elementor-widget-container{padding:30px 30px 30px 30px;background-color:#2c2119;}.elementor .elementor-element.elementor-element-1bc3986 .elementor-spacer-inner{height:30px;}.elementor .elementor-element.elementor-element-5020073{text-align:center;}.elementor .elementor-element.elementor-element-5020073.elementor-widget-heading .elementor-heading-title{color:#18120e;}.elementor .elementor-element.elementor-element-5020073 .elementor-heading-title{font-family:"Lora", Sans-serif;font-size:25px;font-weight:700;line-height:1.2em;}@media(min-width:1025px){.elementor .elementor-element.elementor-element-faa5713{background-attachment:scroll;}}'
                )
            )
        ),
        'home-2' => array(
            'title' => 'Home 2',
            'content' => 'home2.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1529992564581{padding: 30px !important;background-color: #ffffff !important;}.vc_custom_1532399687269{margin-right: -7.5px !important;margin-left: -7.5px !important;}.vc_custom_1532397802856{background-color: #48433f !important;}.vc_custom_1529989118353{margin-bottom: 0px !important;}.vc_custom_1530008811403{margin-top: 0px !important;margin-bottom: 5px !important;}.vc_custom_1530008826011{margin-top: 0px !important;margin-bottom: 30px !important;}',
                'jnews_page_loop' => array(
                    'first_title' => 'Latest Post',
                    'header_type' => 'heading_6',
                    'layout' => 'right-sidebar',
                    'sidebar' => 'defafult-sidebar',
                    'second_sidebar' => 'defafult-sidebar',
                    'sticky_sidebar' => '1',
                    'module' => '3',
                    'excerpt_length' => '20',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'center',
                    'posts_per_page' => '5',
                    'sort_by' => 'latest'
                ),
                '_wpb_post_custom_css' => '.jeg_content {    padding-top: 0 !important;}/* instagram widget */.jeg_grid_thumb_widget {    overflow: hidden;    margin-bottom: -24px;    margin-right: 9px;    margin-right: calc(2.564102564102564% - 15px);}.jeg_cta .vc_btn3.vc_btn3-size-sm {    padding: 11px 22px;}.vc_btn3.vc_btn3-style-custom {    background-image: none;}',
                '_elementor_data' => 'home2.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor .elementor-element.elementor-element-6812c5a{margin-top:-40px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-5020073{text-align:center;}.elementor .elementor-element.elementor-element-5020073.elementor-widget-heading .elementor-heading-title{color:#18120e;}.elementor .elementor-element.elementor-element-5020073 .elementor-heading-title{font-family:"Lora", Sans-serif;font-size:23px;font-weight:700;line-height:1.2em;}.elementor .elementor-element.elementor-element-5020073 > .elementor-widget-container{margin:5px 0px 25px 0px;}.elementor .elementor-element.elementor-element-1b59e1d > .elementor-widget-container{padding:30px 30px 30px 30px;background-color:#ffffff;}.elementor .elementor-element.elementor-element-1bc3986 .elementor-spacer-inner{height:30px;}.elementor .elementor-element.elementor-element-97d0a61.elementor-column .elementor-column-wrap{align-items:center;}.elementor .elementor-element.elementor-element-97d0a61 > .elementor-element-populated{background-color:#48433f;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:10px 0px 30px 0px;}.elementor .elementor-element.elementor-element-97d0a61 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-97d0a61 .elementor-element-populated{padding:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-8e54563 .elementor-icon-wrapper{text-align:center;}.elementor .elementor-element.elementor-element-8e54563.elementor-view-stacked .elementor-icon{background-color:#ffffff;}.elementor .elementor-element.elementor-element-8e54563.elementor-view-framed .elementor-icon, .elementor .elementor-element.elementor-element-8e54563.elementor-view-default .elementor-icon{color:#ffffff;border-color:#ffffff;}.elementor .elementor-element.elementor-element-8e54563 .elementor-icon{font-size:30px;}.elementor .elementor-element.elementor-element-8e54563 .elementor-icon i{transform:rotate(0deg);}.elementor .elementor-element.elementor-element-8e54563 > .elementor-widget-container{margin:0px 0px -5px 0px;}.elementor .elementor-element.elementor-element-d3c988b{text-align:center;}.elementor .elementor-element.elementor-element-d3c988b.elementor-widget-heading .elementor-heading-title{color:#ffffff;}.elementor .elementor-element.elementor-element-d3c988b .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:14px;font-weight:normal;}.elementor .elementor-element.elementor-element-1e5a056{text-align:center;}.elementor .elementor-element.elementor-element-1e5a056.elementor-widget-heading .elementor-heading-title{color:rgba(255,255,255,0.6);}.elementor .elementor-element.elementor-element-1e5a056 .elementor-heading-title{font-family:"Lato", Sans-serif;font-size:12px;font-weight:normal;}.elementor .elementor-element.elementor-element-1e5a056 > .elementor-widget-container{margin:-15px 0px 30px 0px;}.elementor .elementor-element.elementor-element-9e5cc7b a.elementor-button, .elementor .elementor-element.elementor-element-9e5cc7b .elementor-button{font-family:"Lato", Sans-serif;font-size:12px;background-color:#e87714;border-radius:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-9e5cc7b > .elementor-widget-container{margin:-10px 0px 0px 0px;}@media(min-width:768px){.elementor .elementor-element.elementor-element-9a46d61{width:75%;}.elementor .elementor-element.elementor-element-97d0a61{width:25%;}}'
                )
            )
        ),
        'home-3' => array(
            'title' => 'Home 3',
            'content' => 'home3.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1532401323073{padding: 30px !important;background-color: #ffffff !important;}.vc_custom_1532401420987{margin-top: 1.5em !important;margin-bottom: 1em !important;}',
                '_elementor_data' => 'home3.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor .elementor-element.elementor-element-1b59e1d > .elementor-widget-container{padding:30px 30px 30px 30px;background-color:#ffffff;}.elementor .elementor-element.elementor-element-1bc3986 .elementor-spacer-inner{height:30px;}.elementor .elementor-element.elementor-element-5020073{text-align:center;}.elementor .elementor-element.elementor-element-5020073.elementor-widget-heading .elementor-heading-title{color:#18120e;}.elementor .elementor-element.elementor-element-5020073 .elementor-heading-title{font-family:"Lora", Sans-serif;font-size:23px;font-weight:700;line-height:1.2em;}.elementor .elementor-element.elementor-element-5020073 > .elementor-widget-container{margin:5px 0px 25px 0px;}'
                )
            )
        ),
        'contact' => array(
            'title' => 'Contact Us',
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
        'footer' => array(
            'title' => 'Footer',
            'content' => 'footer.txt',
            'post_type' => 'footer',
            'metabox' => array(
                '_elementor_data' => 'footer.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor .elementor-element.elementor-element-09a321e{background-image:url("{{image:footerbg:url:full}}");background-position:center center;background-repeat:no-repeat;background-size:cover;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;padding:80px 0px 80px 0px;}.elementor .elementor-element.elementor-element-09a321e > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-3602c2e .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-c5fefe0 .elementor-text-editor{text-align:center;}.elementor .elementor-element.elementor-element-c5fefe0{color:#53585c;}.elementor .elementor-element.elementor-element-50d47bd .elementor-spacer-inner{height:80px;}@media(min-width:1921px){.jeg_footer .footerbg {background-size: cover !important;}}.vc_custom_1530869996870{padding-top: 40px !important;padding-bottom: 120px !important;background: #ffffff url(https://jnews.io/travel-blog/wp-content/uploads/sites/43/2018/06/footerbg.jpg?id=318) !important;}.vc_custom_1530009890536{margin-bottom: 0px !important;}'
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
        ),
    ),

    // menu it self
    'menu' => array(

        // main menu
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
                'menu-item-title' => 'Home 1',
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
                'menu-item-title' => 'Home 2',
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
                'menu-item-title' => 'Home 3',
                'menu-item-parent-id' => '{{menu:home:id}}',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:home-3:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'destination' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Destination',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:destination:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'travel-tips' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Travel Ideas',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:travel-tips:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'food-drink' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Food & Drink',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:food-drink:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'photography' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Photography',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:photography:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        // footer menu
        'about' => array(
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
        'contact' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Contact Us',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:contact:id}}',
                'menu-item-status' => 'publish'
            )
        )
    ),

    'widget_position' => array(
        'Home',
        'Contact',
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
        'jnews-instagram',
        'jnews-jsonld',
        'jnews-like',
        'jnews-meta-header',
        'jnews-social-login',
        'jnews-social-share',
        'jnews-view-counter',
        'jnews-weather',
        'mailchimp-for-wp'
    )

);

<?php

return array(

    // image
    'image' => array(
        'news1' => 'http://jegtheme.com/asset/jnews/demo/default/travel1.jpg',
        'news2' => 'http://jegtheme.com/asset/jnews/demo/default/fashion2.jpg',
        'news3' => 'http://jegtheme.com/asset/jnews/demo/default/fashion3.jpg',
        'news4' => 'http://jegtheme.com/asset/jnews/demo/default/fashion4.jpg',
        'news5' => 'http://jegtheme.com/asset/jnews/demo/default/fashion5.jpg',
        'news6' => 'http://jegtheme.com/asset/jnews/demo/default/fashion6.jpg',
        'news7' => 'http://jegtheme.com/asset/jnews/demo/default/fashion1.jpg',
        'news8' => 'http://jegtheme.com/asset/jnews/demo/default/travel2.jpg',
        'news9' => 'http://jegtheme.com/asset/jnews/demo/default/travel3.jpg',
        'favicon' => 'http://jegtheme.com/asset/jnews/demo/default/favicon.png',
        'logo' => 'http://jegtheme.com/asset/jnews/demo/citynews/logo_citynews_footer.png',
        'logo2x' => 'http://jegtheme.com/asset/jnews/demo/citynews/logo_citynews_footer@2x.png',
        'mobile_logo' => 'http://jegtheme.com/asset/jnews/demo/citynews/logo_mobile.png',
        'mobile_logo2x' => 'http://jegtheme.com/asset/jnews/demo/citynews/logo_mobile@2x.png',
        'ad_300x250' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x250.jpg',
        'ad_345x345' => 'http://jegtheme.com/asset/jnews/demo/default/ad_345x345.jpg',
        'ad_728x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_728x90.png',
        'ad_300x600' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x600.jpg',
        'ad_970x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_970x90.png',
        'ad_970x250' => 'http://jegtheme.com/asset/jnews/demo/default/ad_970x250.jpg'
    ),

    // create taxonomy
    'taxonomy' => array(
        'category' => array(
            'business' =>
                array(
                    'title' => 'Business',
                    'description' => 'You can add some category description here.'
                ),
            'culture' =>
                array(
                    'title' => 'Culture',
                    'description' => 'You can add some category description here.',
                ),
            'lifestyle' =>
                array(
                    'title' => 'Lifestyle',
                    'description' => 'You can add some category description here.'
                ),
            'national' =>
                array(
                    'title' => 'National',
                    'description' => 'You can add some category description here.'
                ),
            'news' =>
                array(
                    'title' => 'News',
                    'description' => 'You can add some category description here.'
                ),
            'opinion' =>
                array(
                    'title' => 'Opinion',
                    'description' => 'You can add some category description here.'
                ),
            'politics' =>
                array(
                    'title' => 'Politics',
                    'description' => 'You can add some category description here.'
                ),
            'sports' =>
                array(
                    'title' => 'Sports',
                    'description' => 'You can add some category description here.',
                ),
            'travel' =>
                array(
                    'title' => 'Travel',
                    'description' => 'You can add some category description here.',
                ),
            'world' =>
                array(
                    'title' => 'World',
                    'description' => 'You can add some category description here.'
                ),

        ),
        'post_tag' => array(
            '2018-fifa-world-cup' => array(
                'title' => '2018 FIFA World Cup'
            ),
            '2018-league' => array(
                'title' => '2018 League'
            ),
            'asian-games-2018' => array(
                'title' => 'Asian Games 2018'
            ),
            'bali-united' => array(
                'title' => 'Bali United'
            ),
            'balinese-culture' => array(
                'title' => 'Balinese Culture'
            ),
            'budget-travel' => array(
                'title' => 'Budget Travel'
            ),
            'chopper-bike' => array(
                'title' => 'Chopper Bike'
            ),
            'istana-negara' => array(
                'title' => 'Istana Negara'
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
        'grab-tackles-jakartas-odd-even-license-plate-policy-with-special-algorithm' => array(
            'title' => "Grab tackles Jakarta’s odd-even license plate policy with special algorithm",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news1',
            'taxonomy' => array(
                'category' => 'business,national,politics,world',
                'post_tag' => '2018-league,asian-games-2018,istana-negara,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'The Jakarta city administration is currently applying an odd-even license plate policy on all major.'
            )
        ),
        'jokowi-supporters-try-to-prevent-anti-jokowi-activist-from-entering-batam' => array(
            'title' => "Jokowi supporters try to prevent anti-Jokowi activist from entering Batam",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news2',
            'taxonomy' => array(
                'category' => 'business,lifestyle,politics,world',
                'post_tag' => 'balinese-culture,budget-travel,market-stories,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'china-to-build-indonesias-longest-bridge-in-north-kalimantan' => array(
            'title' => "China To Build Indonesia’s Longest Bridge In North Kalimantan",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news3',
            'taxonomy' => array(
                'category' => 'business,news,travel,world',
                'post_tag' => 'balinese-culture,budget-travel,istana-negara,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}')
            )
        ),
        'indonesia-among-top-10-destinations-for-chinese-tourists-in-2017' => array(
            'title' => "Indonesia Among Top 10 Destinations For Chinese Tourists In 2017",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news4',
            'taxonomy' => array(
                'category' => 'business,lifestyle,news,travel',
                'post_tag' => '2018-fifa-world-cup,2018-league,asian-games-2018,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Lighten up, just enjoy life, smile more, laugh more, and don’t get so worked up about things.'
            )
        ),
        'indonesia-to-offer-infrastructure-projects-at-imf-world-bank-meeting' => array(
            'title' => "Indonesia To Offer Infrastructure Projects At IMF-World Bank Meeting",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news5',
            'taxonomy' => array(
                'category' => 'business,culture,politics,world',
                'post_tag' => 'asian-games-2018,bali-united,budget-travel,istana-negara'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'ngurah-rai-international-airport-to-close-for-24-hours-for-nyepi' => array(
            'title' => "Ngurah Rai International Airport To Close For 24 Hours For Nyepi",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news6',
            'taxonomy' => array(
                'category' => 'business,national,news,politics',
                'post_tag' => '2018-league,asian-games-2018,bali-united,budget-travel'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'Nyepi is a Balinese "Day of Silence" that is commemorated every Isakawarsa (Saka new year).'
            )
        ),
        'the-chinese-smartphone-upstarts-taking-on-apple-and-samsung' => array(
            'title' => "The Chinese smartphone upstarts taking on Apple and Samsung",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news7',
            'taxonomy' => array(
                'category' => 'business,news,opinion,world',
                'post_tag' => '2018-league,balinese-culture,istana-negara,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'The best way to pay for a lovely moment is to enjoy it.'
            )
        ),
        'presidential-train-now-available-for-jakartans-traveling-to-bandung' => array(
            'title' => "Presidential Train Now Available For Jakartans Traveling To Bandung",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news8',
            'taxonomy' => array(
                'category' => 'business,culture,lifestyle,opinion,travel',
                'post_tag' => '2018-fifa-world-cup,asian-games-2018,chopper-bike,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'a-digital-media-startup-growing-up-with-millennial-women' => array(
            'title' => "A Digital Media Startup Growing Up With Millennial Women",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news9',
            'taxonomy' => array(
                'category' => 'business,culture,lifestyle,opinion',
                'post_tag' => 'balinese-culture,istana-negara,market-stories,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'The best way to pay for a lovely moment is to enjoy it.'
            )
        ),
        'more-than-70000-homeless-after-deadly-lombok-quake' => array(
            'title' => "More than 70,000 homeless after deadly Lombok quake",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news1',
            'taxonomy' => array(
                'category' => 'national,news,world',
                'post_tag' => 'asian-games-2018,budget-travel,market-stories,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}'),
                'post_subtitle' => 'Lighten up, just enjoy life, smile more, laugh more, and don’t get so worked up about things.'
            )
        ),
        'tourists-from-singapore-are-frequent-users-of-airbnb-in-south-korea' => array(
            'title' => "Tourists from Singapore are frequent users of Airbnb in South Korea",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news2',
            'taxonomy' => array(
                'category' => 'lifestyle,national,news,travel',
                'post_tag' => 'asian-games-2018,balinese-culture,istana-negara,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'indonesias-largest-fleet-of-taxis-teams-up-to-beat-ride-hailing-apps' => array(
            'title' => "Indonesia's Largest Fleet Of Taxis Teams Up To Beat Ride-hailing Apps",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news3',
            'taxonomy' => array(
                'category' => 'business,lifestyle,opinion,politics,travel,world',
                'post_tag' => '2018-league,budget-travel,istana-negara,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}'),
                'post_subtitle' => 'The heart, like the stomach, wants a varied diet.'
            )
        ),
        'trump-didnt-record-comey-white-house-tells-house-intel-panel' => array(
            'title' => "Tour showcases shared art history of Indonesia and Singapore",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news4',
            'taxonomy' => array(
                'category' => 'culture,opinion,travel,world',
                'post_tag' => 'asian-games-2018,balinese-culture,chopper-bike,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'A wonderful serenity has taken possession of my entire soul.'
            )
        ),
        'finland-has-an-education-system-the-other-country-should-learn-from' => array(
            'title' => "Finland Has An Education System The Other Country Should Learn From",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news5',
            'taxonomy' => array(
                'category' => 'culture,national,news,opinion',
                'post_tag' => 'balinese-culture,chopper-bike,istana-negara,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'women-in-politics-urgency-of-quota-system-for-women-in-regional-elections' => array(
            'title' => "Women in Politics: Urgency of Quota System For Women In Regional Elections",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news6',
            'taxonomy' => array(
                'category' => 'national,opinion,politics',
                'post_tag' => '2018-fifa-world-cup,2018-league,asian-games-2018,chopper-bike'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'chinas-peng-banned-and-fined-for-wimbledon-corruption-attempt' => array(
            'title' => "China's Peng banned and fined for Wimbledon corruption attempt",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news7',
            'taxonomy' => array(
                'category' => 'news,opinion,sports,world',
                'post_tag' => '2018-league,budget-travel,national-exam,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'democratic-party-politician-calls-prabowo-cardboard-general' => array(
            'title' => "Democratic Party politician calls Prabowo ‘cardboard general’",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news8',
            'taxonomy' => array(
                'category' => 'national,news,opinion,politics',
                'post_tag' => 'istana-negara,market-stories,national-exam,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:poses:id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'unconventional-workouts-that-torch-fat-and-sculpt-muscle' => array(
            'title' => "Unconventional Workouts That Torch Fat And Sculpt Muscle",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news9',
            'taxonomy' => array(
                'category' => 'culture,lifestyle,sports,travel',
                'post_tag' => 'istana-negara,market-stories,national-exam,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'the-sacred-balinese-fire-horse-dance-sanghyang-jaran-dance' => array(
            'title' => "The Sacred Balinese \"Fire Horse\" Dance: Sanghyang Jaran Dance",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news1',
            'taxonomy' => array(
                'category' => 'culture,lifestyle,travel',
                'post_tag' => '2018-fifa-world-cup,balinese-culture,budget-travel,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:wisdom:id}}'),
                'post_subtitle' => 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.',
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
        'millions-of-indigenous-people-may-lose-voting-rights-alliance' => array(
            'title' => "Millions of Indigenous People May Lose Voting Rights: Alliance",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news2',
            'taxonomy' => array(
                'category' => 'news,opinion,politics,world',
                'post_tag' => 'bali-united,istana-negara,market-stories,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'crismonita-dwi-putri-ris-track-cycling-athlete-for-asian-games' => array(
            'title' => "Crismonita Dwi Putri, RI`s Track Cycling Athlete for Asian Games",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news3',
            'taxonomy' => array(
                'category' => 'lifestyle,national,sports',
                'post_tag' => 'asian-games-2018,budget-travel,istana-negara,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'president-joko-jokowi-widodo-refuses-to-sign-md3-law' => array(
            'title' => "President Joko \"Jokowi\" Widodo Refuses to Sign MD3 Law",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news4',
            'taxonomy' => array(
                'category' => 'news,opinion,politics,world',
                'post_tag' => '2018-fifa-world-cup,bali-united,istana-negara,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'The best way to pay for a lovely moment is to enjoy it.'
            )
        ),
        'garuda-operates-larger-planes-for-jakarta-palembang-route' => array(
            'title' => "Garuda operates larger planes for Jakarta-Palembang route",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news5',
            'taxonomy' => array(
                'category' => 'business,national,news,opinion',
                'post_tag' => '2018-league,budget-travel,chopper-bike,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:yoga-101:id}}')
            )
        ),
        'election-was-rigged-says-opposition-police-confirm-three-dead' => array(
            'title' => "'Election was rigged' says opposition, police confirm three dead",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news6',
            'taxonomy' => array(
                'category' => 'news,opinion,politics,world',
                'post_tag' => '2018-league,bali-united,market-stories,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'annual-open-water-swim-returns-to-western-australia-in-february' => array(
            'title' => "Annual open water swim returns to Western Australia in February",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news7',
            'taxonomy' => array(
                'category' => 'news,opinion,sports,world',
                'post_tag' => '2018-fifa-world-cup,2018-league,balinese-culture,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'google-tracks-location-data-even-when-users-turn-service-off' => array(
            'title' => "Google tracks location data even when users turn service off",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news8',
            'taxonomy' => array(
                'category' => 'politics,sports,travel',
                'post_tag' => 'balinese-culture,market-stories,national-exam,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'Self-belief and hard work will always earn you success.'
            )
        ),
        'the-benefits-of-running-that-make-you-healthier-and-happier' => array(
            'title' => "The Benefits of Running That Make You Healthier and Happier",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news9',
            'taxonomy' => array(
                'category' => 'lifestyle,opinion,travel',
                'post_tag' => 'budget-travel,chopper-bike,market-stories,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:life:id}}'),
                'post_subtitle' => 'Self-belief and hard work will always earn you success.'
            )
        ),
        'skateboarders-indonesia-ready-to-win-at-the-2018-asian-games' => array(
            'title' => "Skateboarders Indonesia Ready to Win at the 2018 Asian Games",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news1',
            'taxonomy' => array(
                'category' => 'lifestyle,national,sports',
                'post_tag' => 'asian-games-2018,budget-travel,istana-negara,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Before anything else, preparation is the key to success.'
            )
        ),
        'perfect-places-to-watch-the-sunrise-in-bali-while-you-honeymoon' => array(
            'title' => "Perfect places to watch the sunrise in Bali while you honeymoon",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news2',
            'taxonomy' => array(
                'category' => 'culture,lifestyle,travel',
                'post_tag' => '2018-league,asian-games-2018,bali-united,istana-negara'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'balis-newest-boutique-hotel-is-an-art-inspired-design-hideaway-in-ubud' => array(
            'title' => "Bali’s newest boutique hotel is an art-inspired design hideaway in Ubud",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news3',
            'taxonomy' => array(
                'category' => 'culture,lifestyle,sports,travel',
                'post_tag' => 'asian-games-2018,bali-united,market-stories,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'A wonderful serenity has taken possession of entire soul.'
            )
        ),
        'bali-united-recruit-milos-krkotic-ex-montenegro-national-team-players' => array(
            'title' => "Bali United recruit Milos Krkotic, ex-Montenegro national team players",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news4',
            'taxonomy' => array(
                'category' => 'culture,lifestyle,sports,travel',
                'post_tag' => 'bali-united,budget-travel,market-stories,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'food-truck-offers-free-food-for-earthquake-affected-tourists-in-lombok' => array(
            'title' => "Food truck offers free food for earthquake-affected tourists in Lombok",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news5',
            'taxonomy' => array(
                'category' => 'lifestyle,travel,world',
                'post_tag' => '2018-fifa-world-cup,asian-games-2018,chopper-bike,national-exam'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'the-chainsmokers-actually-make-a-great-nickelback-cover-band' => array(
            'title' => "Indonesia Urges Olympic Council of Asia to Promote 2018 Asian Games",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news6',
            'taxonomy' => array(
                'category' => 'lifestyle,national,sports',
                'post_tag' => '2018-league,asian-games-2018,budget-travel,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'jokowi-prabowo-could-buy-more-time-in-vp-selection' => array(
            'title' => "Jokowi, Prabowo could buy more time in VP selection",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news7',
            'taxonomy' => array(
                'category' => 'national,news,politics',
                'post_tag' => 'budget-travel,chopper-bike,market-stories,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Self-belief and hard work will always earn you success.'
            )
        ),
        'england-striker-vardy-signs-new-four-year-leicester-deal' => array(
            'title' => "England striker Vardy signs new four-year Leicester deal",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news8',
            'taxonomy' => array(
                'category' => 'culture,news,opinion,sports',
                'post_tag' => '2018-fifa-world-cup,asian-games-2018,bali-united,budget-travel'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'travel-insider-bengawan-solo-travel-mart-returns-for-ninth-time' => array(
            'title' => "Travel Insider: Bengawan Solo Travel Mart Returns For Ninth Time",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news9',
            'taxonomy' => array(
                'category' => 'business,culture,national',
                'post_tag' => '2018-fifa-world-cup,asian-games-2018,chopper-bike,market-stories'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category:meditation:id}}')
            )
        ),
        'what-to-look-out-for-as-the-premier-league-returns' => array(
            'title' => "What to look out for as the Premier League returns",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'news1',
            'taxonomy' => array(
                'category' => 'culture,opinion,sports',
                'post_tag' => 'chopper-bike,istana-negara,market-stories,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Victory has a thousand fathers, but defeat is an orphan.'
            )
        ),
        'nike-invented-self-lacing-sneakers-because-the-future-is-now' => array(
            'title' => "Nike Invented Self-Lacing Sneakers Because the Future Is Now",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'news2',
            'taxonomy' => array(
                'category' => 'business,culture,lifestyle,sports',
                'post_tag' => 'budget-travel,chopper-bike,istana-negara,visit-bali'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'A collection of textile samples lay spread out on the table.'
            )
        ),

        // page
        'home-1' => array(
            'title' => 'Home 1',
            'content' => 'home1.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1533614882082{margin-bottom: 30px !important;padding-top: 15px !important;padding-right: 15px !important;padding-bottom: 15px !important;padding-left: 15px !important;background-color: #ffffff !important;}.vc_custom_1533622098139{margin-bottom: 0px !important;}.vc_custom_1533615484815{margin-bottom: 30px !important;}.vc_custom_1533606432810{margin-bottom: 30px !important;}.vc_custom_1533622090031{margin-bottom: 0px !important;}',
                'jnews_page_loop' => array(
                    'first_title' => 'Latest Post',
                    'header_type' => 'heading_6',
                    'layout' => 'double-sidebar',
                    'sidebar' => 'archive-left',
                    'second_sidebar' => 'archive-right',
                    'sticky_sidebar' => '1',
                    'module' => '3',
                    'excerpt_length' => '20',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'left',
                    'show_navtext' => '1',
                    'posts_per_page' => '5',
                    'sort_by' => 'latest'
                ),
                '_wpb_post_custom_css' => '.jeg_postblock_carousel_3 .jeg_post_meta,.jeg_pl_sm .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_readmore {    display: none;}.jeg_content {padding-top: 0;}',
                'jnews_video_cache' => '',
                '_elementor_data' => 'home1.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.elementor .jeg_postblock_carousel_3.jeg_postblock {margin-bottom: 0;}.jeg_slider_type_8 .jeg_post_title {font-size: 20px;}.elementor-widget:not(:last-child) {margin-bottom: 0;}.jeg_postblock_carousel_3 .jeg_post_meta,.jeg_pl_sm .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_readmore {    display: none;}.jeg_content {padding-top: 0;}.elementor .elementor-element.elementor-element-4e0c980{margin-top:-30px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-63480ef > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-63480ef > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-027a7fa > .elementor-widget-container{margin:0px 0px 30px 0px;padding:15px 15px 15px 15px;background-color:#ffffff;}.elementor .elementor-element.elementor-element-687dafc .elementor-element-populated{padding:15px 0px 0px 0px;}.elementor .elementor-element.elementor-element-29ab241 .elementor-element-populated{padding:15px 0px 0px 0px;}'
                )
            )
        ),
        'home-2' => array(
            'title' => 'Home 2',
            'content' => 'home2.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1533632910109{padding-top: 40px !important;background-color: #000000 !important;}.vc_custom_1534129849284{margin-bottom: 0px !important;}.vc_custom_1534144240806{margin-bottom: 30px !important;}.vc_custom_1533892404712{border-top-width: 3px !important;border-top-color: #000000 !important;border-top-style: solid !important;}.vc_custom_1534322454413{margin-bottom: 30px !important;}.vc_custom_1533893414454{margin-bottom: 0px !important;}.vc_custom_1534323783613{margin-bottom: 30px !important;}',
                'jnews_page_loop' => array(
                    'first_title' => 'Latest Post',
                    'header_type' => 'heading_6',
                    'layout' => 'double-sidebar',
                    'sidebar' => 'archive-left',
                    'second_sidebar' => 'archive-right',
                    'sticky_sidebar' => '1',
                    'module' => '3',
                    'excerpt_length' => '20',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'left',
                    'show_navtext' => '1',
                    'posts_per_page' => '5',
                    'sort_by' => 'latest'
                ),
                '_wpb_post_custom_css' => '.jeg_postblock_carousel_3 .jeg_post_meta,.jeg_pl_sm .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_readmore {    display: none;}.widget .mc4wp-form {    margin-bottom: 10px;}.jeg_content {    padding-bottom:0;}',
                'jnews_video_cache' => '',
                '_elementor_data' => 'home2.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.jeg_postblock_carousel_3 .jeg_post_meta,.jeg_pl_sm .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_readmore {    display: none;}.widget .mc4wp-form {    margin-bottom: 10px;}.jeg_content {    padding-bottom:0;}.vc_custom_1533892404712{border-top-width: 3px !important;border-top-color: #000000 !important;border-top-style: solid !important;}.elementor .elementor-element.elementor-element-f2a96fd .elementor-element-populated{padding:15px 0px 0px 20px;}.elementor .elementor-element.elementor-element-2860a5f .elementor-element-populated{padding:15px 0px 0px 20px;}.elementor .elementor-element.elementor-element-432e788 > .elementor-widget-container{background-color:transparent;background-image:linear-gradient(180deg, #ffffff 0%, #ffffff 100%);border-style:solid;border-width:0px 0px 0px 0px;border-color:#000000;border-radius:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-9b76fad{background-color:#000000;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:60px 0px 0px 0px;}.elementor .elementor-element.elementor-element-9b76fad > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-b80d5af{text-align:center;}.elementor .elementor-element.elementor-element-b80d5af.elementor-widget-heading .elementor-heading-title{color:#ffffff;}.elementor .elementor-element.elementor-element-b80d5af .elementor-heading-title{font-family:"PT Serif", Sans-serif;font-size:32px;font-weight:700;}.elementor .elementor-element.elementor-element-fea4742{padding:30px 0px 0px 0px;}.elementor .elementor-element.elementor-element-f6903e5 .elementor-element-populated{padding:15px 0px 0px 20px;}.elementor .elementor-element.elementor-element-f9ee36a .elementor-element-populated{padding:15px 0px 0px 20px;}.jeg_postblock_carousel_3 .jeg_post_meta, .jeg_pl_sm .jeg_post_meta, .jeg_postblock_35 .jeg_pl_md_5 .jeg_post_meta, .jeg_postblock_35 .jeg_pl_md_5 .jeg_readmore {display: none;}'
                )
            )
        ),
        'home-3' => array(
            'title' => 'Home 3',
            'content' => 'home3.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1534230049222{margin-bottom: 30px !important;}.vc_custom_1533892404712{border-top-width: 3px !important;border-top-color: #000000 !important;border-top-style: solid !important;}.vc_custom_1534228558204{margin-bottom: 0px !important;}.vc_custom_1534144130672{margin-bottom: 30px !important;}.vc_custom_1534235512692{margin-top: 0px !important;}',
                'jnews_page_loop' => array(
                    'first_title' => 'Latest Post',
                    'header_type' => 'heading_6',
                    'layout' => 'double-sidebar',
                    'sidebar' => 'archive-left',
                    'second_sidebar' => 'archive-right',
                    'sticky_sidebar' => '1',
                    'module' => '3',
                    'excerpt_length' => '20',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'left',
                    'show_navtext' => '1',
                    'posts_per_page' => '5',
                    'sort_by' => 'latest'
                ),
                '_wpb_post_custom_css' => '.jeg_postblock_16.jeg_pb_boxed .jeg_posts {    -webkit-columns: 2 200px;    -moz-columns: 2 200px;    columns: 2 200px;    -webkit-column-gap: 20px;    -moz-column-gap: 20px;    column-gap: 20px;}.jeg_hero_style_1 .jeg_thumb a > div:before {    opacity: 0.25;}.jeg_postblock_carousel_3 .jeg_post_meta,.jeg_pl_sm .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_readmore {    display: none;}.widget .mc4wp-form {    margin-bottom: 10px;}.jeg_content {    padding-bottom:0;}',
                '_elementor_data' => 'home3.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.jeg_postblock_carousel_3 .jeg_post_meta,.jeg_pl_sm .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_post_meta,.jeg_postblock_35 .jeg_pl_md_5 .jeg_readmore {display: none;}.elementor .elementor-element.elementor-element-dc55cd7 .elementor-element-populated{padding:15px 015px 0px 0px;}.elementor .elementor-element.elementor-element-d165b51 > .elementor-widget-container{padding:20px 20px 20px 20px;background-color:#ffffff;}.elementor .elementor-element.elementor-element-0e7d26a .elementor-element-populated{padding:15px 0px 0px 15px;}.elementor .elementor-element.elementor-element-291ca05{text-align:center;}.elementor .elementor-element.elementor-element-291ca05.elementor-widget-heading .elementor-heading-title{color:#000000;}.elementor .elementor-element.elementor-element-291ca05 .elementor-heading-title{font-family:"PT Serif", Sans-serif;font-size:32px;font-weight:700;}'
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
                    'layout' => 'no-sidebar',
                )
            )
        ),
        'footer' => array(
            'title' => 'Footer',
            'content' => 'footer.txt',
            'post_type' => 'footer',
            'metabox' => array(
                '_wpb_shortcodes_custom_css' => '.vc_custom_1534217996078{padding-top: 60px !important;padding-bottom: 20px !important;background-color: #ffffff !important;}.vc_custom_1534131078981{padding-bottom: 22px !important;background-color: #ffffff !important;}.vc_custom_1534142467508{margin-bottom: 25px !important;}.vc_custom_1534138997054{margin-bottom: 0px !important;}.elementor-widget-wp-widget-categories .elementor-widget-container > ul li,.elementor-widget-wp-widget-recent-posts .elementor-widget-container > ul li a,.elementor-widget-container h5 {font-weight: 700;}.elementor-widget-wp-widget-recent-posts .elementor-widget-container > ul li {padding-bottom: 10px;}.elementor-widget-wp-widget-categories .elementor-widget-container > ul {-webkit-columns: 2;columns: 2;-webkit-column-gap: 20px;column-gap: 20px;}.elementor-widget-wp-widget-categories .elementor-widget-container > ul li {padding-bottom: 5px;}',
                '_elementor_data' => 'footer.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
                    'custom_css' => '.vc_custom_1534217996078{padding-top: 60px !important;padding-bottom: 20px !important;background-color: #ffffff !important;}.vc_custom_1534131078981{padding-bottom: 22px !important;background-color: #ffffff !important;}.vc_custom_1534142467508{margin-bottom: 25px !important;}.vc_custom_1534138997054{margin-bottom: 0px !important;}.elementor .elementor-element.elementor-element-db6e43b{background-color:#ffffff;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:10px 0px 0px 0px;}.elementor .elementor-element.elementor-element-db6e43b > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-9aaf6ec{color:#444444;}.elementor .elementor-element.elementor-element-51652d8{background-color:#ffffff;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-51652d8 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-a603672 .elementor-divider-separator{border-top-style:solid;border-top-width:1px;width:100%;}.elementor .elementor-element.elementor-element-a603672 .elementor-divider{padding-top:2px;padding-bottom:2px;}.elementor .elementor-element.elementor-element-5162f71{background-color:#ffffff;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-5162f71 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-8836d44{font-family:"Roboto", Sans-serif;font-size:12px;}.elementor-widget-wp-widget-categories .elementor-widget-container > ul li,.elementor-widget-wp-widget-recent-posts .elementor-widget-container > ul li a,.elementor-widget-container h5 {font-weight: 700;}.elementor-widget-wp-widget-recent-posts .elementor-widget-container > ul li {padding-bottom: 10px;}.elementor-widget-wp-widget-categories .elementor-widget-container > ul {-webkit-columns: 2;columns: 2;-webkit-column-gap: 20px;column-gap: 20px;}.elementor-widget-wp-widget-categories .elementor-widget-container > ul li {padding-bottom: 5px;}'
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
        'mobile-navigation' => array(
            'title' => 'Mobile Navigation',
            'location' => 'mobile_navigation'
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
                'menu-item-title' => 'Home - Layout 1',
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
                'menu-item-title' => 'Home - Layout 2',
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
                'menu-item-title' => 'Home - Layout 3',
                'menu-item-parent-id' => '{{menu:home:id}}',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:home-3:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        'news' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'News',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:world:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'politics' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Politics',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:politics:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'business' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Business',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:business:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'national' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'National',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:national:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'culture' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Culture',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:culture:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'opinion' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Opinion',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:opinion:id}}',
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
        'sports' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Sports',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:sports:id}}',
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
        'advertise' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Advertise',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'careers' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Careers',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'contact' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Contact',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:contact:id}}',
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
        'politics-mobile' => array(
            'location' => 'mobile-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Politics',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:politics:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'news-mobile' => array(
            'location' => 'mobile-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'News',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:news:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'business-mobile' => array(
            'location' => 'mobile-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Business',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:business:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'culture-mobile' => array(
            'location' => 'mobile-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Culture',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:culture:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'national-mobile' => array(
            'location' => 'mobile-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'National',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:national:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'sports-mobile' => array(
            'location' => 'mobile-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Sports',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:sports:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'lifestyle-mobile' => array(
            'location' => 'mobile-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Lifestyle',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:lifestyle:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'travel-mobile' => array(
            'location' => 'mobile-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Travel',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:travel:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'opinion-mobile' => array(
            'location' => 'mobile-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Opinion',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:opinion:id}}',
                'menu-item-status' => 'publish'
            )
        )

    ),

    'widget_position' => array(
        'Author',
        'Single Left',
        'Archive Left',
        'Archive Right',
        'Single Right',
        'Home 3'
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
        'jnews-customizer-category'
    )

);

<?php

return array(

    // image
    'image' => array(
        'school1' => 'http://jegtheme.com/asset/jnews/demo/default/news1.jpg',
        'school2' => 'http://jegtheme.com/asset/jnews/demo/default/news2.jpg',
        'school3' => 'http://jegtheme.com/asset/jnews/demo/default/news3.jpg',
        'school4' => 'http://jegtheme.com/asset/jnews/demo/default/news4.jpg',
        'school5' => 'http://jegtheme.com/asset/jnews/demo/default/news5.jpg',
        'school6' => 'http://jegtheme.com/asset/jnews/demo/default/news6.jpg',
        'school7' => 'http://jegtheme.com/asset/jnews/demo/default/news7.jpg',
        'school8' => 'http://jegtheme.com/asset/jnews/demo/default/news8.jpg',
        'school9' => 'http://jegtheme.com/asset/jnews/demo/default/news9.jpg',
        'school10' => 'http://jegtheme.com/asset/jnews/demo/default/news10.jpg',
        'program' => 'http://jegtheme.com/asset/jnews/demo/school/program.jpg',
        'education' => 'http://jegtheme.com/asset/jnews/demo/school/education.jpg',
        'event' => 'http://jegtheme.com/asset/jnews/demo/school/event.jpg',
        'about' => 'http://jegtheme.com/asset/jnews/demo/school/header-bg2-1024x683.jpg',
        'about1' => 'http://jegtheme.com/asset/jnews/demo/school/header-bg-1024x683.jpg',
        'about2' => 'http://jegtheme.com/asset/jnews/demo/school/blur3-1024x683.jpg',
        'about3' => 'http://jegtheme.com/asset/jnews/demo/school/header-bgs-1024x684.jpg',
        'logo' => 'http://jegtheme.com/asset/jnews/demo/school/SchoolNews-Logo.png',
        'logo2x' => 'http://jegtheme.com/asset/jnews/demo/school/SchoolNews-Logo@2x.png',
        'mobile-logo' => 'http://jegtheme.com/asset/jnews/demo/school/Sticky-Logo.png',
        'mobile-logo2x' => 'http://jegtheme.com/asset/jnews/demo/school/Sticky-Logo@2x.png',
        'footer-logo' => 'http://jegtheme.com/asset/jnews/demo/school/School-News-Footer-Logo-1.png',
        'footer-logo2x' => 'http://jegtheme.com/asset/jnews/demo/school/School-News-Footer-Logo@2x-1.png',
        'favicon' => 'http://jegtheme.com/asset/jnews/demo/default/favicon.png',
        'cover' => 'http://jegtheme.com/asset/jnews/demo/school/cover.jpg',
        'ad_345x345' => 'http://jegtheme.com/asset/jnews/demo/default/ad_345x345.jpg',
        'ad_728x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_728x90.png',
        'ad_300x600' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x600.jpg',
        'ad_970x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_970x90.png'
    ),

    // create taxonomy
    'taxonomy' => array(
        'category' => array(
            'community' =>
                array(
                    'title' => 'Community',
                    'description' => 'You can add some category description here.'
                ),
            'education' =>
                array(
                    'title' => 'Education',
                    'description' => 'You can add some category description here.'
                ),
            'event' =>
                array(
                    'title' => 'Event',
                    'description' => 'You can add some category description here.'
                ),
            'program' =>
                array(
                    'title' => 'Program',
                    'description' => 'You can add some category description here.'
                ),
            'technology' =>
                array(
                    'title' => 'Technology',
                    'description' => 'You can add some category description here.'
                ),

        ),
        'post_tag' => array(
            'community' => array(
                'title' => 'Community'
            ),
            'education' => array(
                'title' => 'Education'
            ),
            'graduation' => array(
                'title' => 'Graduation'
            ),
            'hot-news' => array(
                'title' => 'Hot News'
            ),
            'popular' => array(
                'title' => 'Popular'
            ),
            'science' => array(
                'title' => 'Science'
            ),
        )
    ),

    // post & page
    'post' => array(
        'free-online-courses-top-50-sites-to-get-educated-for-free' => array(
            'title' => "Free Online Courses: Top 50 Sites to Get Educated for Free",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school1',
            'taxonomy' => array(
                'category' => 'community,technology',
                'post_tag' => 'community,education,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'True terror is to wake up one morning and discover that your high school class is running the country.'
            )
        ),
        'how-an-1899-townhouse-tripled-in-size-but-kept-its-charm' => array(
            'title' => "How an 1899 Townhouse Tripled in Size But Kept Its Charm",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school2',
            'taxonomy' => array(
                'category' => 'community,technology',
                'post_tag' => 'community,graduation,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'True terror is to wake up one morning and discover that your high school class is running the country.'
            )
        ),
        '8-ways-to-hone-your-fact-checking-skills' => array(
            'title' => "8 Ways to Hone Your Fact-Checking Skills",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school3',
            'taxonomy' => array(
                'category' => 'community,technology',
                'post_tag' => 'community,education,graduation,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'I loved school so much that most of my classmates considered me a dork.'
            )
        ),
        'why-you-shouldnt-listen-to-music-while-studying' => array(
            'title' => "Why You Shouldn’t Listen to Music While Studying",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school4',
            'taxonomy' => array(
                'category' => 'community,education,technology',
                'post_tag' => 'community,graduation,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'A man who has never gone to school may steal from a freight car; but if he has a university education, he may steal the whole railroad.'
            )
        ),
        'diy-learning-how-to-create-a-personalised-syllabus-in-5-steps' => array(
            'title' => "DIY Learning: How to Create a Personalised Syllabus in 5 Steps",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school5',
            'taxonomy' => array(
                'category' => 'community,technology',
                'post_tag' => 'education,graduation,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'You can have great teachers, but if you don\'t have a good principal, you won\'t have a good school.'
            )
        ),
        'taking-a-gap-year-to-get-ahead-4-alumni-share-their-stories' => array(
            'title' => "Taking a Gap Year to Get Ahead: 4 Alumni Share Their Stories",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school6',
            'taxonomy' => array(
                'category' => 'community,technology',
                'post_tag' => 'community,education,graduation,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'I think there should be a good balance between being a good student and being able to enjoy your high school life.'
            )
        ),
        'heres-what-adaptive-technology-is-teaching-us-about-learning' => array(
            'title' => "Here’s What Adaptive Technology Is Teaching Us About Learning",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school7',
            'taxonomy' => array(
                'category' => 'community,technology',
                'post_tag' => 'education,graduation,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'I loved school so much that most of my classmates considered me a dork.'
            )
        ),
        'rules-of-the-game-how-structure-spurs-creativity' => array(
            'title' => "Rules of the Game: How Structure Spurs Creativity",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school8',
            'taxonomy' => array(
                'category' => 'community,technology',
                'post_tag' => 'education,graduation,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'I loved school so much that most of my classmates considered me a dork.'
            )
        ),
        'how-to-make-students-innovation-ready-not-just-college-ready' => array(
            'title' => "How to Make Students Innovation Ready, Not Just College Ready",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school9',
            'taxonomy' => array(
                'category' => 'community,technology',
                'post_tag' => 'community,education,graduation,hot-news'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'I wish my school days could have dragged on a little longer, or that I could go back and do it later in life.'
            )
        ),
        'heres-a-cat-eating-a-lovingly-prepared-sashimi-dinner' => array(
            'title' => "Here’s a Cat Eating a Lovingly Prepared Sashimi Dinner",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school10',
            'taxonomy' => array(
                'category' => 'event,program,technology',
                'post_tag' => 'community,education,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Education is not just about going to school and getting a degree. It\'s about widening your knowledge and absorbing the truth about life.'
            )
        ),
        'open-schools-institut-constructivism' => array(
            'title' => "Open School’s Institut Constructivism",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school1',
            'taxonomy' => array(
                'category' => 'community,technology',
                'post_tag' => 'community,education,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}')
            )
        ),
        'how-outdoor-education-can-prepare-students-for-the-future' => array(
            'title' => "How Outdoor Education Can Prepare Students For the Future",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school2',
            'taxonomy' => array(
                'category' => 'community,education,program',
                'post_tag' => 'community,education,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Human tutors will be sidelined in near future as AI takes central role in education, suggests Sir Anthony Sheldon of Wellington College'
            )
        ),
        'a-forest-guesthouse-that-sleeps-5-but-has-no-bedrooms-2' => array(
            'title' => "A Forest Guesthouse That Sleeps 5, But Has No Bedrooms",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school3',
            'taxonomy' => array(
                'category' => 'community,education,technology',
                'post_tag' => 'community,education,graduation,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Proportion of firsts has risen 26 per cent since £9,000-per-year tuition fees introduced'
            )
        ),
        'inside-a-bright-and-cheerful-renovation-in-brooklyn-2' => array(
            'title' => "Inside a Bright and Cheerful Renovation in Brooklyn",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school4',
            'taxonomy' => array(
                'category' => 'education,program',
                'post_tag' => 'community,graduation,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Human tutors will be sidelined in near future as AI takes central role in education, suggests Sir Anthony Sheldon of Wellington College'
            )
        ),
        'heres-a-first-look-at-uplands-dinner-downstairs-2' => array(
            'title' => "Here’s a First Look at Upland’s Dinner Downstairs",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school5',
            'taxonomy' => array(
                'category' => 'community,education,program',
                'post_tag' => 'community,education,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Human tutors will be sidelined in near future as AI takes central role in education, suggests Sir Anthony Sheldon of Wellington College'
            )
        ),
        'inside-a-paper-magazine-bigwigs-old-meets-new-2' => array(
            'title' => "Inside a Paper Magazine Bigwig’s Old-Meets-New",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school6',
            'taxonomy' => array(
                'category' => 'event,technology',
                'post_tag' => 'community,education,graduation,hot-news'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Proportion of firsts has risen 26 per cent since £9,000-per-year tuition fees introduced'
            )
        ),
        '12-session-beers-that-are-perfect-for-summer-guzzling-2' => array(
            'title' => "12 Session Beers That Are Perfect for Summer Guzzling",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school7',
            'taxonomy' => array(
                'category' => 'event,technology',
                'post_tag' => 'community,education,graduation,hot-news'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Proportion of firsts has risen 26 per cent since £9,000-per-year tuition fees introduced'
            )
        ),
        'claims-lecturer-reported-for-hate-speech-for-teaching-history-denied-3' => array(
            'title' => "Claims lecturer reported for ‘hate speech’ for teaching history denied",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school8',
            'taxonomy' => array(
                'category' => 'community,education,program',
                'post_tag' => 'community,graduation,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Human tutors will be sidelined in near future as AI takes central role in education, suggests Sir Anthony Sheldon of Wellington College'
            )
        ),
        'universities-to-tackle-attainment-gap-between-bame-and-white-students-2' => array(
            'title' => "Universities to tackle attainment gap between BAME and white students",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school9',
            'taxonomy' => array(
                'category' => 'event,technology',
                'post_tag' => 'community,education,graduation,hot-news'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Proportion of firsts has risen 26 per cent since £9,000-per-year tuition fees introduced'
            )
        ),
        'new-code-to-curb-university-bosses-pay-woefully-inadequate-2' => array(
            'title' => "New code to curb university bosses’ pay ‘woefully inadequate’",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school10',
            'taxonomy' => array(
                'category' => 'education,program',
                'post_tag' => 'community,education,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Human tutors will be sidelined in near future as AI takes central role in education, suggests Sir Anthony Sheldon of Wellington College'
            )
        ),
        'claims-lecturer-reported-for-hate-speech-for-teaching-history-denied-2' => array(
            'title' => "Claims lecturer reported for ‘hate speech’ for teaching history denied",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school1',
            'taxonomy' => array(
                'category' => 'event,technology',
                'post_tag' => 'education,graduation,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Proportion of firsts has risen 26 per cent since £9,000-per-year tuition fees introduced'
            )
        ),
        'headteacher-who-helped-children-cheat-in-sats-exams-is-banned-2' => array(
            'title' => "Headteacher who ‘helped children cheat in Sats exams’ is banned",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school2',
            'taxonomy' => array(
                'category' => 'event,technology',
                'post_tag' => 'education,graduation,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Proportion of firsts has risen 26 per cent since £9,000-per-year tuition fees introduced'
            )
        ),
        'school-bans-boys-from-wearing-shorts-says-wear-skirts-instead-2' => array(
            'title' => "School bans boys from wearing shorts, says wear skirts instead",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school3',
            'taxonomy' => array(
                'category' => 'education,program',
                'post_tag' => 'community,education,graduation,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Human tutors will be sidelined in near future as AI takes central role in education, suggests Sir Anthony Sheldon of Wellington College'
            )
        ),
        'ofsted-to-look-at-whether-schools-hide-unruly-students-from-inspectors-3' => array(
            'title' => "Ofsted to look at whether schools hide unruly students from inspectors",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school4',
            'taxonomy' => array(
                'category' => 'education,program',
                'post_tag' => 'community,education,graduation,hot-news'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Human tutors will be sidelined in near future as AI takes central role in education, suggests Sir Anthony Sheldon of Wellington College'
            )
        ),
        'bolton-universitys-bentley-driving-boss-pockets-66k-pay-rise-2' => array(
            'title' => "Bolton University’s bentley-driving boss pockets £66k pay rise",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school5',
            'taxonomy' => array(
                'category' => 'event,technology',
                'post_tag' => 'community,education,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Proportion of firsts has risen 26 per cent since £9,000-per-year tuition fees introduced'
            )
        ),
        'elite-universities-improve-teaching-scores-after-resubmissions-2' => array(
            'title' => "Elite universities improve teaching scores after resubmissions",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school6',
            'taxonomy' => array(
                'category' => 'community,program',
                'post_tag' => 'community,education,graduation,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Human tutors will be sidelined in near future as AI takes central role in education, suggests Sir Anthony Sheldon of Wellington College'
            )
        ),
        'ofsted-to-look-at-whether-schools-hide-unruly-students-from-inspectors-2' => array(
            'title' => "Universities that fail to improve diversity could have fees cut",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school7',
            'taxonomy' => array(
                'category' => 'event,technology',
                'post_tag' => 'community,education,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Proportion of firsts has risen 26 per cent since £9,000-per-year tuition fees introduced'
            )
        ),
        'students-generosity-has-attracted-homeless-people-oxford-suggests-2' => array(
            'title' => "Students’ generosity has attracted homeless people, Oxford suggests",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school8',
            'taxonomy' => array(
                'category' => 'event,program,technology',
                'post_tag' => 'community,education,graduation,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Human tutors will be sidelined in near future as AI takes central role in education, suggests Sir Anthony Sheldon of Wellington College'
            )
        ),
        'nhs-funding-boost-poses-severe-challenges-for-schools-expert-warns-2' => array(
            'title' => "NHS funding boost poses ‘severe challenges’ for schools, expert warns",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school9',
            'taxonomy' => array(
                'category' => 'event,technology',
                'post_tag' => 'community,education,graduation,hot-news'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Proportion of firsts has risen 26 per cent since £9,000-per-year tuition fees introduced'
            )
        ),
        'poorer-students-hit-hardest-by-shortage-of-maths-teachers-in-england' => array(
            'title' => "'Poorer students hit hardest by shortage of maths teachers in England'",
            'content' => 'post1.txt',
            'post_type' => 'post',
            'featured_image' => 'school10',
            'taxonomy' => array(
                'category' => 'event,technology',
                'post_tag' => 'community,education,graduation,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Proportion of firsts has risen 26 per cent since £9,000-per-year tuition fees introduced'
            )
        ),
        'intelligent-machines-will-replace-teachers-within-10-years' => array(
            'title' => "Intelligent machines will replace teachers 'within 10 years'",
            'content' => 'post2.txt',
            'post_type' => 'post',
            'featured_image' => 'school1',
            'taxonomy' => array(
                'category' => 'education,program',
                'post_tag' => 'community,education,hot-news,popular'
            ),
            'metabox' => array(
                'jnews_primary_category' => array('id' => '{{category::id}}'),
                'post_subtitle' => 'Human tutors will be sidelined in near future as AI takes central role in education, suggests Sir Anthony Sheldon of Wellington College'
            )
        ),

        // page
        'home-1' => array(
            'title' => 'Home',
            'content' => 'home1.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1530526090852{padding-top: 0px !important;padding-bottom: 0px !important;background-image: url(http://jnews.local/school/wp-content/uploads/sites/46/2018/06/Overlay-bg2.png?id=879) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1530239909421{background-color: #ffffff !important;}.vc_custom_1530521603548{margin-top: 0px !important;margin-bottom: 0px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: rgba(0,0,0,0.01) !important;*background-color: rgb(0,0,0) !important;}',
                'jnews_page_loop' => array(
                    'enable_page_loop' => '1',
                    'first_title' => 'Latest',
                    'second_title' => 'Post',
                    'header_type' => 'heading_6',
                    'layout' => 'left-sidebar',
                    'sidebar' => 'home-1-loop',
                    'second_sidebar' => 'default-sidebar',
                    'sticky_sidebar' => '1',
                    'module' => '14',
                    'excerpt_length' => '10',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_3',
                    'pagination_align' => 'center',
                    'sort_by' => 'latest'
                ),
                '_wpb_post_custom_css' => '.vc_cta3-container{margin-bottom:0;margin-left:0}@media screen and (min-width:1024px){.jeg_overlay_caption_container .jeg_post_title{line-height:1.3;font-size:48px}}.heading-act h1,.heading-act h3{color:#fff}@media screen and (max-width:768px){.heading-act{text-align:center}.heading-act h4:after{display:block;height:3px;width:50px;margin:25px auto 0;background:#ffb703}.heading-act h2,.heading-act h4{color:#212121!important;text-align:center}#row_activities{background-image:none!important}.jeg_vertical_playlist{padding-top:0!important}.blank-space{height:0}.btn-seemore{display:none!important}.vc_cta3-container{margin-left:auto}}@media screen and (min-width:768px){.jeg_vertical_playlist{padding-top:20px}.column-head-act{padding-top:120px}}#btn_seemore .vc_btn3.vc_btn3-size-md{padding:10px 25px;cursor:pointer;transition:.3s all ease-in-out}#btn_seemore .vc_btn3.vc_btn3-size-md:hover{background-color:#ff6d80!important}.vc_general.vc_cta3{border:0;padding:28px 0 15px}.heading-act .vc_cta3-content p{font-size:16px}',
                '_elementor_data' => 'home1.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.elementor .elementor-element.elementor-element-fcb168b{margin-top:-30px;margin-bottom:0px;}.elementor .elementor-element.elementor-element-46bb7ee .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-1e40f1c .elementor-element-populated{padding:0px 0px 0px 20px;}.elementor .elementor-element.elementor-element-ca561b2{background-image:url("{{image:education:url:full}}");background-position:center center;background-repeat:no-repeat;background-size:cover;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-ca561b2 > .elementor-background-overlay{background-color:#49008e;opacity:0.81;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-ae01cdc.elementor-column .elementor-column-wrap{align-items:center;}.elementor .elementor-element.elementor-element-534cc9e.elementor-widget-heading .elementor-heading-title{color:#ffffff;}.elementor .elementor-element.elementor-element-534cc9e .elementor-heading-title{font-family:"Istok Web", Sans-serif;font-size:22px;font-weight:400;line-height:16px;}.elementor .elementor-element.elementor-element-e08005e.elementor-widget-heading .elementor-heading-title{color:#ffffff;}.elementor .elementor-element.elementor-element-e08005e .elementor-heading-title{font-family:"Istok Web", Sans-serif;font-size:35px;font-weight:400;line-height:25px;}.elementor .elementor-element.elementor-element-1c1a736.elementor-widget-heading .elementor-heading-title{color:#ffffff;}.elementor .elementor-element.elementor-element-1c1a736 .elementor-heading-title{font-family:"Open Sans", Sans-serif;font-size:16px;font-weight:normal;line-height:25px;}.elementor .elementor-element.elementor-element-fc3646e a.elementor-button, .elementor .elementor-element.elementor-element-fc3646e .elementor-button{background-color:#ffb703;border-radius:0px 0px 0px 0px;}.elementor .elementor-element.elementor-element-a8d29ae > .elementor-element-populated{background-color:#ffffff;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor .elementor-element.elementor-element-a8d29ae > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-c6a0bc2 .elementor-spacer-inner{height:30px;}'
                )
            )
        ),
        'home-2' => array(
            'title' => 'Home 2',
            'content' => 'home2.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_elementor_data' => 'home2.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.elementor .elementor-element.elementor-element-355bcca .elementor-element-populated{padding:0px 0px 0px 20px;}'
                )
            )
        ),
        'home-3' => array(
            'title' => 'Home 3',
            'content' => 'home3.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1529998070244{border-bottom-width: 30px !important;padding-bottom: 30px !important;}',
                'jnews_page_loop' => array(
                    'enable_page_loop' => '1',
                    'first_title' => 'Latest Articles',
                    'header_type' => 'heading_6',
                    'layout' => 'right-sidebar',
                    'sidebar' => 'home-3',
                    'second_sidebar' => 'default-sidebar',
                    'sticky_sidebar' => '1',
                    'module' => '14',
                    'excerpt_length' => '20',
                    'content_date' => 'default',
                    'date_custom' => 'Y/m/d',
                    'content_pagination' => 'nav_1',
                    'pagination_align' => 'center',
                    'posts_per_page' => '13',
                    'sort_by' => 'latest'
                ),
                '_wpb_post_custom_css' => '.jeg_midbar{-webkit-box-shadow:0 -3px 12px 0 rgba(0,0,0,.37);-moz-box-shadow:0 -3px 12px 0 rgba(0,0,0,.37);box-shadow:0 -3px 12px 0 rgba(0,0,0,.37)}.register-ads{background:0 0;color:#fff;border:2px solid #fff;padding:6px 19px;font-size:13px;transition:.3s all ease-in-out}.register-ads:hover{background:#fff;color:#f08842;cursor:pointer}.vc_general.vc_cta3.vc_cta3-shape-rounded{border-radius:0}.jeg_slider_type_4 .active .jeg_slide_caption:after,.jeg_slider_type_4 .active .jeg_slide_caption:before{display:none}.owl-height{height:auto}@media screen and (max-width:768px){#row_activities3{background-image:none!important}}.owl-carousel .owl-nav div{color:#fff}.jeg_owlslider .owl-nav div{background:rgba(255,255,255,.1);border-radius:3px;box-shadow:none}.jeg_pl_lg_box .box_wrap,.jeg_pl_md_box .box_wrap{height:325px}.jeg_hero_style_2 .jeg_post_category{left:0;top:25px}.jeg_heroblock .jeg_post_category a{padding:4px 6px}',
                '_elementor_data' => 'home3.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.elementor-widget-jnews_block_12_elementor .jeg_post_excerpt {display: none;}.elementor .elementor-element.elementor-element-b577a40 .elementor-element-populated{padding:0px 0px 0px 20px;}'
                )
            )
        ),
        'about' => array(
            'title' => 'About Us',
            'content' => 'about.txt',
            'post_type' => 'page',
            'metabox' => array(
                '_wp_page_template' => 'template-builder.php',
                '_wpb_shortcodes_custom_css' => '.vc_custom_1530171304913{padding-top: 25px !important;}',
                'jnews_single_page' => array(
                    'layout' => 'no-sidebar',
                    'sidebar' => 'default-sidebar',
                    'second_sidebar' => 'default-sidebar',
                    'sticky_sidebar' => '1',
                    'show_post_featured' => '1',
                    'share_position' => 'top',
                    'share_color' => 'share-monocrhome',
                ),
                '_wpb_post_custom_css' => '.jeg_midbar{-webkit-box-shadow:0 -3px 12px 0 rgba(0,0,0,.37);-moz-box-shadow:0 -3px 12px 0 rgba(0,0,0,.37);box-shadow:0 -3px 12px 0 rgba(0,0,0,.37)}.heading-about:after{display:block;width:50px;height:3px;background:#ffb703;margin:20px 0}.contact-link{color:#212121;font-size:17px!important;text-decoration:underline}',
                '_elementor_data' => 'about.json',
                '_elementor_edit_mode' => 'builder',
                '_elementor_page_settings' => array(
	                'custom_css' => '.elementor .elementor-element.elementor-element-e059029.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-e059029 .elementor-heading-title{font-family:"Oxygen", Sans-serif;font-size:47px;font-weight:400;}.elementor .elementor-element.elementor-element-0417a15 .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-efb2d32.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-efb2d32 .elementor-heading-title{font-family:"Oxygen", Sans-serif;font-size:34px;font-weight:400;}.elementor .elementor-element.elementor-element-80e50e9 .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-2d6c420.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-2d6c420 .elementor-heading-title{font-family:"Oxygen", Sans-serif;font-size:34px;font-weight:400;}.elementor .elementor-element.elementor-element-db6fc6a .elementor-spacer-inner{height:10px;}.elementor .elementor-element.elementor-element-c91ce93.elementor-widget-heading .elementor-heading-title{color:#212121;}.elementor .elementor-element.elementor-element-c91ce93 .elementor-heading-title{font-family:"Oxygen", Sans-serif;font-size:34px;font-weight:400;}.elementor .elementor-element.elementor-element-9389856 iframe{pointer-events:none;}.elementor .elementor-element.elementor-element-4cbd13b .elementor-text-editor{text-align:center;}.elementor .elementor-element.elementor-element-c713c67 .elementor-text-editor{text-align:center;}.elementor .elementor-element.elementor-element-c713c67{color:#000000;font-size:20px;}'
                )
            )
        ),
        'footer' => array(
            'title' => 'Footer',
            'content' => 'footer.txt',
            'post_type' => 'footer',
            'metabox' => array(
	            '_wpb_post_custom_css' => '.footer_logo {display: inline-block;}.jeg_about_name {display: inline-block;padding-left: 12px;font-size: 22px;color: #fff;}.jeg_footer p {margin-bottom: 18px;}.widget_nav_menu li a {color: #fff;}.widget_nav_menu li a:hover {color: #ffb703;}.jeg_footer .widget h2{color: #ffb703;}.jeg_about p {color: #fff;}.jeg_menu_footer li a {font-size: 15px;}.vc_custom_1530844752965{padding-top: 60px !important;padding-bottom: 20px !important;background-image: url(https://jnews.io/school/wp-content/uploads/sites/48/2018/07/footer-overlay-2.jpg?id=1634) !important;}.vc_custom_1530154468177{margin-bottom: 0px !important;}',
	            '_elementor_data' => 'footer.json',
	            '_elementor_edit_mode' => 'builder',
	            '_elementor_page_settings' => array(
		            'custom_css' => '.footer_logo {display: inline-block;}.jeg_about_name {display: inline-block;padding-left: 12px;font-size: 22px;color: #fff;}.jeg_footer p {margin-bottom: 18px;}.widget_nav_menu li a {color: #fff;}.widget_nav_menu li a:hover {color: #ffb703;}.jeg_footer .widget h2{color: #ffb703;}.jeg_about p {color: #fff;}.jeg_menu_footer li a {font-size: 15px;}.vc_custom_1530844752965{padding-top: 60px !important;padding-bottom: 20px !important;background-image: url(https://jnews.io/school/wp-content/uploads/sites/48/2018/07/footer-overlay-2.jpg?id=1634) !important;}.vc_custom_1530154468177{margin-bottom: 0px !important;}.elementor .elementor-element.elementor-element-f5f0aee{background-image:url("https://jnews.dev.com/wp-content/uploads/2018/08/news5-7.jpg");background-position:center center;background-repeat:no-repeat;background-size:cover;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:40px 0px 0px 0px;}.elementor .elementor-element.elementor-element-f5f0aee > .elementor-background-overlay{background-color:#5c308f;opacity:0.94;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor .elementor-element.elementor-element-b131c5f .elementor-divider-separator{border-top-style:solid;border-top-width:1px;border-top-color:#eee;width:100%;}.elementor .elementor-element.elementor-element-b131c5f .elementor-divider{padding-top:2px;padding-bottom:2px;}.elementor .elementor-element.elementor-element-631fb2f{color:#ffffff;font-size:13px;}@media(min-width:768px){.elementor .elementor-element.elementor-element-1aaad9b{width:40%;}.elementor .elementor-element.elementor-element-93e1d96{width:20%;}.elementor .elementor-element.elementor-element-4b496d0{width:20%;}.elementor .elementor-element.elementor-element-424a4ee{width:20%;}}'
	            )
            )
        )
    ),

    // menu location
    'menu_location' => array(
        'main-navigation' => array(
            'title' => 'Navigation Menu',
            'location' => 'navigation'
        ),
        'top-navigation' => array(
            'title' => 'Topbar Menu',
            'location' => 'top_navigation'
        ),
        'footer-navigation' => array(
            'title' => 'Footer Navigation',
            'location' => 'footer_navigation'
        ),
        'sites-footer-navigation' => array(
            'title' => 'Sites-Footer Menu',
            'location' => ''
        ),
        'categories' => array(
            'title' => 'Categories',
            'location' => ''
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
        'event' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Event',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:event:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'technology' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Technology',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:technology:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'program' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Program',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:program:id}}',
                'menu-item-status' => 'publish'
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
        'community' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Community',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:community:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        //Footer Menu
        'event-3' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Event',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:event:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'technology-3' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Technology',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:technology:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'program-3' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Program',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:program:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'education-3' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Education',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:education:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'community-3' => array(
            'location' => 'footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Community',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:community:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        //Sites Footer Menu
        'about' => array(
            'location' => 'sites-footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'About Us',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:about:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'technology-2' => array(
            'location' => 'sites-footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Technology',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:technology:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'community-2' => array(
            'location' => 'sites-footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Community',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:community:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'program-2' => array(
            'location' => 'sites-footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Program',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:program:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'event-2' => array(
            'location' => 'sites-footer-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Event',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:event:id}}',
                'menu-item-status' => 'publish'
            )
        ),

        // Top Menu
        'about-2' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'About Us',
                'menu-item-type' => 'post_type',
                'menu-item-object' => 'page',
                'menu-item-object-id' => '{{post:about:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'privacy-policy' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Privacy Policy',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),
        'contact' => array(
            'location' => 'top-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Contact',
                'menu-item-type' => 'custom',
                'menu-item-url' => '#',
                'menu-item-status' => 'publish'
            )
        ),

        //categoies Menu
        'event-categories' => array(
            'location' => 'categories',
            'menu-item-data' => array(
                'menu-item-title' => 'Event',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:event:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'technology-categories' => array(
            'location' => 'categories',
            'menu-item-data' => array(
                'menu-item-title' => 'Technology',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:technology:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'program-categories' => array(
            'location' => 'categories',
            'menu-item-data' => array(
                'menu-item-title' => 'Program',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:program:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'education-categories' => array(
            'location' => 'categories',
            'menu-item-data' => array(
                'menu-item-title' => 'Education',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:education:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'community-categories' => array(
            'location' => 'categories',
            'menu-item-data' => array(
                'menu-item-title' => 'Community',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:community:id}}',
                'menu-item-status' => 'publish'
            )
        ),

    ),

    'widget_position' => array(
        'Home - Loop',
        'Home 2 - Loop',
        'Footer',
        'Author - Sidebar',
        'Home 3',
        'Home 2',
        'Home 1 - Loop',
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

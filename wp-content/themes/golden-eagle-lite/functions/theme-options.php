<?php

add_action('init', 'golden_eagle_option');
if (!function_exists('golden_eagle_option')) {

    function golden_eagle_option() {
        // VARIABLES
        $themename = 'Golden Eagle Lite Theme ';
        $shortname = "of";
        // Populate OptionsFramework option in array for use in theme
        global $of_options;
        $of_options = goldeneagle_get_option('of_options');
        // Background Defaults
        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');
        // Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories();
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }
        //Front page on/off
        $file_rename = array("on" => "On", "off" => "Off");
        // Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }
        // If using image radio buttons, define a directory path
        $imagepath = get_stylesheet_directory_uri() . '/images/';

        $options = array(
            array("name" => __("General Settings", 'golden-eagle'),
                "type" => "heading"),
            array("name" => __("Custom Logo", 'golden-eagle'),
                "desc" => __("Choose your own logo. Optimal Size: 300px Wide by 90px Height.", 'golden-eagle'),
                "id" => "goldeneagle_logo",
                "type" => "upload"),
            array("name" => __("Custom Favicon", 'golden-eagle'),
                "desc" => __("Specify a 16px x 16px image that will represent your website's favicon.", 'golden-eagle'),
                "id" => "goldeneagle_favicon",
                "type" => "upload"),
            array("name" => __("Enable Custom Front Page", 'golden-eagle'),
                "desc" => __("Overrides the WordPress <a href='" . admin_url('/options-reading.php') . "'>front page option</a>", 'golden-eagle'),
                "id" => "re_nm",
                "std" => "on",
                "type" => "radio",
                "options" => $file_rename),
            //Home Page Slider Setting
            array("name" => __("Slider Settings", 'golden_eagle'),
                "type" => "heading"),
            //First Slider
            array("name" => __("Slider Image1", 'golden_eagle'),
                "desc" => __("Choose your image for first slider. Optimal size is 950px wide and 480px height.", 'golden_eagle'),
                "id" => "goldeneagle_slideimage1",
                "std" => "",
                "type" => "upload"),
            array("name" => __("Slide 1 Link", 'golden_eagle'),
                "desc" => __("Enter yout link url for slide1", 'golden_eagle'),
                "id" => "goldeneagle_slidelink1",
                "std" => "",
                "type" => "text"),
            //Second Slider
            array("name" => __("Slider Image2", 'golden_eagle'),
                "desc" => __("Choose your image for second slider. Optimal size is 950px wide and 480px height.", 'golden_eagle'),
                "id" => "goldeneagle_slideimage2",
                "std" => "",
                "type" => "upload"),
            array("name" => __("Slide 2 Link", 'golden_eagle'),
                "desc" => __("Enter yout link url for slide2", 'golden_eagle'),
                "id" => "goldeneagle_slidelink2",
                "std" => "",
                "type" => "text"),
            //Homepage Feature Area
            array("name" => __("Homepage Feature Area", 'golden_eagle'),
                "type" => "heading"),
            //Page Heading
            array("name" => __("Main Feature Heading", 'golden_eagle'),
                "desc" => __("Enter your text for Page Heading.", 'golden_eagle'),
                "id" => "goldeneagle_page_heading",
                "std" => "",
                "type" => "textarea"),
            //Right Feature Separetor
            array("name" => __("Feature Section Starts From Here.", 'golden_eagle'),
                "type" => "saperate",
                "class" => "saperator"),
            //Right Feature Area
            array("name" => __("Homepage Feature Area First Image", 'golden_eagle'),
                "desc" => __("Choose your image for homepage feature area first image.", 'golden_eagle'),
                "id" => "goldeneagle_featureimg1",
                "std" => "",
                "type" => "upload"),
            array("name" => __("First Feature Heading", 'golden_eagle'),
                "desc" => __("Enter your text for first col heading.", 'golden_eagle'),
                "id" => "goldeneagle_firsthead",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("First Feature Description", 'golden_eagle'),
                "desc" => __("Enter your text for first col description.", 'golden_eagle'),
                "id" => "goldeneagle_firstdesc",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("First Feature Link URL", 'golden_eagle'),
                "desc" => __("Enter your link url for fourth feature section.", 'golden_eagle'),
                "id" => "goldeneagle_link1",
                "std" => "",
                "type" => "text"),
            //Second Feature Separetor
            array("name" => __("Second Feature Starts From Here.", 'golden_eagle'),
                "type" => "saperate",
                "class" => "saperator"),
            array("name" => __("Homepage Feature Area Second Image", 'golden_eagle'),
                "desc" => __("Choose your image for homepage Feature area second image.", 'golden_eagle'),
                "id" => "goldeneagle_featureimg2",
                "std" => "",
                "type" => "upload"),
            array("name" => __("Second Feature Heading", 'golden_eagle'),
                "desc" => __("Enter your text for second col heading.", 'golden_eagle'),
                "id" => "goldeneagle_secondhead",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Second Col Description", 'golden_eagle'),
                "desc" => __("Enter your text for second col description.", 'golden_eagle'),
                "id" => "goldeneagle_seconddesc",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Second Feature Link URL", 'golden_eagle'),
                "desc" => __("Enter your link url for fourth feature section.", 'golden_eagle'),
                "id" => "goldeneagle_link2",
                "std" => "",
                "type" => "text"),
            //Third Feature Separetor
            array("name" => __("Third Feature Starts From Here.", 'golden_eagle'),
                "type" => "saperate",
                "class" => "saperator"),
            array("name" => __("Homepage Third Feature  Image", 'golden_eagle'),
                "desc" => __("Choose your image for homepage Feature area third image.", 'golden_eagle'),
                "id" => "goldeneagle_featureimg3",
                "std" => "",
                "type" => "upload"),
            array("name" => __("Third Feature Heading", 'golden_eagle'),
                "desc" => __("Enter your text for second col heading.", 'golden_eagle'),
                "id" => "goldeneagle_thirdhead",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Third Feature Description", 'golden_eagle'),
                "desc" => __("Enter your text for Third Feature description.", 'golden_eagle'),
                "id" => "goldeneagle_thirddesc",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Third Feature Link URL", 'golden_eagle'),
                "desc" => __("Enter your link url for fourth feature section.", 'golden_eagle'),
                "id" => "goldeneagle_link3",
                "std" => "",
                "type" => "text"),
            //Fourth Feature Separetor
            array("name" => __("Fourth Feature Starts From Here.", 'golden_eagle'),
                "type" => "saperate",
                "class" => "saperator"),
            array("name" => __("Homepage Fourth Feature Area", 'golden_eagle'),
                "desc" => __("Choose your image for homepage Feature Area fourth image. ", 'golden_eagle'),
                "id" => "goldeneagle_featureimg4",
                "std" => "",
                "type" => "upload"),
            array("name" => __("Fourth Feature  Heading", 'golden_eagle'),
                "desc" => __("Enter your text for Fourh Feature Area heading.", 'golden_eagle'),
                "id" => "goldeneagle_fourthhead",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Fourh Feature Area Description", 'golden_eagle'),
                "desc" => __("Enter your text for first col description.", 'golden_eagle'),
                "id" => "goldeneagle_fourthdesc",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Fourth Feature Link URL", 'golden_eagle'),
                "desc" => __("Enter your link url for fourth feature section.", 'golden_eagle'),
                "id" => "goldeneagle_link4",
                "std" => "",
                "type" => "text"),
            //Home Page Bottom Setting
            array("name" => __("Home Page Bottom Settings", 'golden_eagle'),
                "type" => "heading"),
            array("name" => __("Tagline Text", 'golden_eagle'),
                "desc" => __("Enter your text Tagline Section.", 'golden_eagle'),
                "id" => "goldeneagle_tagline_text",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Feature Button Text", 'golden_eagle'),
                "desc" => __("Enter your link url for feature button section.", 'golden_eagle'),
                "id" => "goldeneagle_tagline_button",
                "std" => "",
                "type" => "text"),
            array("name" => __("Feature Button Link URL", 'golden_eagle'),
                "desc" => __("Enter your link url for feature button section.", 'golden_eagle'),
                "id" => "goldeneagle_tagline_button_link",
                "std" => "",
                "type" => "text"),
            //Bottom Feature Separetor
            array("name" => __("Bottom Feature Start From Here.", 'golden_eagle'),
                "type" => "saperate",
                "class" => "saperator"),
            array("name" => __("Bottom Left Heading", 'golden_eagle'),
                "desc" => __("Enter your text bottom left Section.", 'golden_eagle'),
                "id" => "goldeneagle_bottomleft_heading",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Bottom Left Text", 'golden_eagle'),
                "desc" => __("Enter your text bottom left Section.", 'golden_eagle'),
                "id" => "goldeneagle_bottomleft_description",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Enter Your Blog Heading", 'golden_eagle'),
                "desc" => __("Enter your text for blog heading.", 'golden_eagle'),
                "id" => "goldeneagle_bottom_blog",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Testimonial Heading", 'golden_eagle'),
                "desc" => __("Enter your text Testimonial Heading.", 'golden_eagle'),
                "id" => "goldeneagle_testimonial",
                "std" => "",
                "type" => "textarea"),
            array("name" => __("Testimonial Text", 'golden_eagle'),
                "desc" => __("Enter your text or code", 'golden_eagle'),
                "id" => "goldeneagle_testimonial_text",
                "std" => "",
                "type" => "textarea"),
//****=============================================================================****//
//****-----------This code is used for creating color styleshteet options----------****//							
//****=============================================================================****//				
            array("name" => __("Styling Options", 'golden_eagle'),
                "type" => "heading"),
            array("name" => __("Custom CSS", 'golden_eagle'),
                "desc" => __("Quickly add some CSS to your theme by adding it to this block.", 'golden_eagle'),
                "id" => "goldeneagle_customcss",
                "std" => "",
                "type" => "textarea"),
//****=============================================================================****//
//****-------------This code is used for creating social logos options-------------****//					
//****=============================================================================****//
            array("name" => __("Social Logos", 'golden_eagle'),
                "type" => "heading"),
            array("name" => "Facebook URL",
                "desc" => __("Enter your Facebook URL if you have one", 'golden_eagle'),
                "id" => "goldeneagle_facebook",
                "std" => "#",
                "type" => "text"),
            array("name" => "Twitter URL",
                "desc" => __("Enter your Twitter URL if you have one", 'golden_eagle'),
                "id" => "goldeneagle_twitter",
                "std" => "#",
                "type" => "text"),
            array("name" => "RSS Feed URL",
                "desc" => __("Enter your RSS Feed URL if you have one", 'golden_eagle'),
                "id" => "goldeneagle_rss",
                "std" => "#",
                "type" => "text"),
            array("name" => "Google+ URL",
                "desc" => __("Enter your Google+ URL if you have one", 'golden_eagle'),
                "id" => "goldeneagle_google",
                "std" => "#",
                "type" => "text"));
        goldeneagle_update_option('of_template', $options);
        goldeneagle_update_option('of_themename', $themename);
        goldeneagle_update_option('of_shortname', $shortname);
    }

}
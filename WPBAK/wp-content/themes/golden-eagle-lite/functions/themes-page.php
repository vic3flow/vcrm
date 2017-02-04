<?php

// Add scripts and stylesheet

function enqueue_styles() {

    global $themename, $themeslug, $options;
    wp_register_style($themeslug . 'storecss', get_template_directory_uri() . '/functions/theme-page-style.css');


    wp_enqueue_style($themeslug . 'storecss');
}

// Add page to the menu
function inkthemes_add_menu() {
    $page = add_theme_page('InkThemes Themes Page', 'InkThemes Themes', 'administrator', 'themes', 'inkthemes_page_init');


    add_action('admin_print_styles-' . $page, 'enqueue_styles');
}

add_action('admin_menu', 'inkthemes_add_menu');

// Create the page
function inkthemes_page_init() {
    $root = get_template_directory_uri();
    ?>

    <div id="contain">
        <div id="themesheader">
            <a href="<?php echo esc_url(INKTHEME_LINK); ?>" target="_blank">
                <img src="<?php echo $root; ?>/functions/images/inkthemes-logo.png" />
            </a>
            <br />
            <div class="menu">	   
                <a href="<?php echo esc_url(TWITTER_SHARE); ?>" class="twitter-share-button" data-url="<?php echo esc_url(INKTHEME_LINK); ?>" data-text="Check out the Professional Premium WordPress Themes at InkThemes">
                    <?php _e('Tweet', 'golden-eagle'); ?>
                </a>
                <script>
                    !function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");
                </script>
                <iframe src="http://www.facebook.com/plugins/like.php?app_id=153286811409231&href=www.inkthemes.com&send=false&layout=button_count&width=90&show_faces=false&action=like&colorscheme=light&font&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
                <g:plusone size="medium" href="<?php echo esc_url(INKTHEME_LINK); ?>"></g:plusone>
                <script type="text/javascript">
                    (function () {
                        var po = document.createElement('script');
                        po.type = 'text/javascript';
                        po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(po, s);
                    })();
                </script>
                <br/>
                <hr/>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div id="container">
            <div class="theme-image">
                <a href="<?php echo esc_url(INKTHEME_COLORWAY_THEME_LINK); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/colorway.jpg" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url(INKTHEME_COLORWAY_THEME_LINK); ?>" target="_blank"><?php _e('Colorway Theme', 'golden-eagle'); ?>
                    </a>
                </div>
                <br />
                <?php _e('The best thing about Colorway Theme is the ease with the help of which you can convert your Website in various different Niches. &ldquo;Your Clients Would Love Their Site & You Would smile in the back thinking about the Time That You Spend Building their Sites.&rdquo;', 'golden-eagle'); ?>
                <br /><br />
                <?php _e('Colorway Theme is perfect for quick and easy blogging with a clean and modern interface and tons of features. The layout does not distract from your content, which is vital for a site devoted to business & blogging.', 'golden-eagle'); ?> <br /><br />
                <div class="buy">
                    <a href="<?php echo esc_url(INKTHEME_COLORWAY_THEME_LINK); ?>" target="_blank">
                        <?php _e('Buy Colorway Theme', 'golden-eagle'); ?>
                    </a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="http://wordpress.org/extend/themes/colorway" target="_blank">
                        <?php _e('Try Colorway Lite for FREE', 'golden-eagle'); ?>
                    </a>
                </div>

            </div>

            <div class="theme-image">
                <a href="<?php echo esc_url(INKTHEME_SQUIRREL_THEME_LINK); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/squirrel-img.jpg" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url(INKTHEME_SQUIRREL_THEME_LINK); ?>" target="_blank">
                        <?php _e('Squirrel Theme', 'golden-eagle'); ?>
                    </a>
                </div>
                <br />
                <?php _e('Squirrel  is a fresh and clean multipurpose WordPress Theme, built for your corporate site or your personal blog. Squirrel is easy to set and customize so you can create a lot of different layouts according to your needs.  Squirrel  comes with  8 different color style.', 'golden-eagle'); ?>
                <br /><br />
                <?php _e('Squirrel supports half page slider so that you can show all your feature in the half portion and other half is keep fixed as it can be used for the description, Call to action button. Home page of the theme support 2 col, 3 col and full-width layout, and all the input field support HTML coding in it. It&#39;s very easy to add youtube or vimeo video on the home page itself.', 'golden-eagle'); ?>
                <br /><br />
                <div class="buy">
                    <a href="<?php echo esc_url(INKTHEME_SQUIRREL_THEME_LINK); ?>" target="_blank">
                        <?php _e('Buy Squirrel Theme', 'golden-eagle'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="http://wordpress.org/extend/themes/squirrel" target="_blank">
                        <?php _e('Try Squirrel Lite for FREE', 'golden-eagle'); ?>
                    </a>
                </div>
            </div>

            <div class="theme-image">
                <a href="<?php echo esc_url(INKTHEME_BIZWAY_THEME_LINK); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/bizway-bigthumb.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url(INKTHEME_BIZWAY_THEME_LINK); ?>" target="_blank">
                        <?php _e('BizWay Theme', 'golden-eagle'); ?>
                    </a>
                </div>
                <br />
                <?php _e('Bizway is a professional and outstanding responsive Business WordPress Theme. BizWay was built keeping the simplicity of design in mind. The whole interface of the BizWay Theme is clutter free and the place for the most important business content is provided.', 'golden-eagle'); ?> 
                <br/>
                <br/>
                <?php _e('BizWay Theme comes with 10 different Color Schemes to suit your business style. The Main Heading and sub heading are given the space on the top for creating a long lasting impression to the visitors of your website regarding what your business is all about.  ', 'golden-eagle'); ?>
                <br/>
                <br/>
                <div class="buy">
                    <a href="<?php echo esc_url(INKTHEME_BIZWAY_THEME_LINK); ?>" target="_blank">
                        <?php _e('Buy BizWay Theme', 'golden-eagle'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="http://wordpress.org/extend/themes/bizway" target="_blank">
                        <?php _e('Try BizWay Lite for FREE', 'golden-eagle'); ?>
                    </a>
                </div>
            </div>
            <br />
            <div class="theme-image">
                <a href="<?php echo esc_url(INKTHEME_ANDRINA_THEME_LINK); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/andrina.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url(INKTHEME_ANDRINA_THEME_LINK); ?>" target="_blank">
                        <?php _e('Andrina Theme', 'golden-eagle'); ?>
                    </a>
                </div>
                <br />
                <?php _e('The Andrina Theme allows the user to show his blogposts on the frontpage. Hence the main Home Page is always updated on the release of new blogposts. Hence the site is more Search Engine friendly.', 'golden-eagle'); ?>
                <br/>
                <br/>
                <?php _e('The Theme had a simple layout which attracts the Client to the Website. Also, the professional and Clean design always suites the requirements of almost any kind of business Website. Andrina Theme is very simple to built and you don&#39;t even need to be a code junkie to start using the Andrina Theme and get your website ready.', 'golden-eagle'); ?>
                <br /> <br />
                <div class="buy">
                    <a href="<?php echo esc_url(INKTHEME_ANDRINA_THEME_LINK); ?>" target="_blank">
                        <?php _e('Buy Andrina Theme', 'golden-eagle'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="http://wordpress.org/extend/themes/andrina-lite" target="_blank">
                        <?php _e('Try Andrina Lite for FREE', 'golden_eagle'); ?>
                    </a>
                </div>
            </div>
            <div class="theme-image">
                <a href="<?php echo esc_url(INKTHEME_FIGERO_THEME_LINK); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/figero-bigthumbnail.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url(INKTHEME_FIGERO_THEME_LINK); ?>" target="_blank">
                        <?php _e('Figero Theme', 'golden_eagle'); ?>
                    </a>
                </div>
                <br />
                <?php _e('Business website designs are best powered by Premium Ecommerce WordPress themes.  WordPress will become a boon if you are developing a website for your business. It will be really powerful and an affordable website design technique.  Building entrepreneurs are especially benefited from the most of this. ', 'golden_eagle'); ?>
                <br/><br/>
                <?php _e('There are several hundreds and thousands of customizable eCommerce wordpress themes available to download from various websites. Figero is one of the best eCommerce wordpress theme, It&#39;s easy to use and simple to maintain. If you want to sell your digital items using paypal, It&#39;s one of the easiest and the quickest way to go online.  Just put your few steps and you are ready to sell your item using paypal.', 'golden_eagle'); ?>
                <br /> <br />
                <div class="buy">
                    <a href="<?php echo esc_url(INKTHEME_FIGERO_THEME_LINK); ?>" target="_blank">
                        <?php _e('Buy Figero Theme', 'golden_eagle'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a target="_blank" href="http://wordpress.org/extend/themes/figero">
                        <?php _e('Try Figero Lite for FREE', 'golden_eagle'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}

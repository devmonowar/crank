<?php

/**
 * crank_scripts description
 * @return [type] [description]
 */
function crank_scripts()
{

    /**
     * all css files
     */

    wp_enqueue_style('crank-fonts', crank_fonts_url(), array(), time());
    if (is_rtl()) {
        wp_enqueue_style('bootstrap-rtl', CRANK_THEME_CSS_DIR . 'bootstrap-rtl.css', array());
    } else {
        wp_enqueue_style('bootstrap', CRANK_THEME_CSS_DIR . 'bootstrap.min.css', array());
    }
    wp_enqueue_style('animate-min', CRANK_THEME_CSS_DIR . 'animate.min.css', []);
    wp_enqueue_style('crank-custom-animate', CRANK_THEME_CSS_DIR . 'custom-animate.css', []);
    wp_enqueue_style('swiper-bundle', CRANK_THEME_CSS_DIR . 'swiper.min.css', []);
    wp_enqueue_style('font-awesome', CRANK_THEME_CSS_DIR . 'font-awesome-all.css', []);
    wp_enqueue_style('jarallax', CRANK_THEME_CSS_DIR . 'jarallax.css', []);
    wp_enqueue_style('magnific-popup', CRANK_THEME_CSS_DIR . 'jquery.magnific-popup.css', []);
    wp_enqueue_style('flaticon', CRANK_THEME_CSS_DIR . 'flaticon.css', []);
    wp_enqueue_style('owl-carousel', CRANK_THEME_CSS_DIR . 'owl.carousel.min.css', []);
    wp_enqueue_style('odometer', CRANK_THEME_CSS_DIR . 'odometer.min.css', []);
    wp_enqueue_style('owl-theme-default', CRANK_THEME_CSS_DIR . 'owl.theme.default.min.css', []);
    wp_enqueue_style('nice-select', CRANK_THEME_CSS_DIR . 'nice-select.css', []);
    wp_enqueue_style('jquery-ui', CRANK_THEME_CSS_DIR . 'jquery-ui.css', []);
    wp_enqueue_style('aos', CRANK_THEME_CSS_DIR . 'aos.css', []);

    wp_enqueue_style('module-slider', CRANK_THEME_CSS_DIR . 'module-css/slider.css', []);
    wp_enqueue_style('module-footer', CRANK_THEME_CSS_DIR . 'module-css/footer.css', []);
    wp_enqueue_style('module-counter', CRANK_THEME_CSS_DIR . 'module-css/counter.css', []);
    wp_enqueue_style('module-services', CRANK_THEME_CSS_DIR . 'module-css/services.css', []);
    wp_enqueue_style('module-about', CRANK_THEME_CSS_DIR . 'module-css/about.css', []);
    wp_enqueue_style('module-brand', CRANK_THEME_CSS_DIR . 'module-css/brand.css', []);
    wp_enqueue_style('module-gallery', CRANK_THEME_CSS_DIR . 'module-css/gallery.css', []);
    wp_enqueue_style('module-faq', CRANK_THEME_CSS_DIR . 'module-css/faq.css', []);
    wp_enqueue_style('module-testimonial', CRANK_THEME_CSS_DIR . 'module-css/testimonial.css', []);
    wp_enqueue_style('module-team', CRANK_THEME_CSS_DIR . 'module-css/team.css', []);
    wp_enqueue_style('module-contact', CRANK_THEME_CSS_DIR . 'module-css/contact.css', []);
    wp_enqueue_style('module-pricing', CRANK_THEME_CSS_DIR . 'module-css/pricing.css', []);
    wp_enqueue_style('module-blog', CRANK_THEME_CSS_DIR . 'module-css/blog.css', []);
    wp_enqueue_style('module-page-header', CRANK_THEME_CSS_DIR . 'module-css/page-header.css', []);

    wp_enqueue_style('crank-core', CRANK_THEME_CSS_DIR . 'crank-core.css', [], time());
    wp_enqueue_style('crank-unit', CRANK_THEME_CSS_DIR . 'crank-unit.css', [], time());
    wp_enqueue_style('crank-custom', CRANK_THEME_CSS_DIR . 'crank-custom.css', []);
    wp_enqueue_style('crank-style', get_stylesheet_uri());


    // all js
    wp_enqueue_script('jquery-bundle', CRANK_THEME_JS_DIR . 'jquery-3.6.0.min.js', ['jquery'], '', true);
    wp_enqueue_script('bootstrap-bundle', CRANK_THEME_JS_DIR . 'bootstrap.bundle.min.js', ['jquery'], '', true);
    wp_enqueue_script('jarallax', CRANK_THEME_JS_DIR . 'jarallax.min.js', ['jquery'], '', true);
    wp_enqueue_script('jquery-chimp', CRANK_THEME_JS_DIR . 'jquery.ajaxchimp.min.js', ['jquery'], '', true);
    wp_enqueue_script('jquery-apper', CRANK_THEME_JS_DIR . 'jquery.appear.min.js', ['jquery'], '', true);
    wp_enqueue_script('swiper-bundle', CRANK_THEME_JS_DIR . 'swiper.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-circle-progress', CRANK_THEME_JS_DIR . 'jquery.circle-progress.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-magnific-popup', CRANK_THEME_JS_DIR . 'jquery.magnific-popup.min.js', ['jquery'], '', true);
    wp_enqueue_script('isotope-pkgd', CRANK_THEME_JS_DIR . 'isotope.js', ['imagesloaded'], false, true);
    wp_enqueue_script('jquery-validate', CRANK_THEME_JS_DIR . 'jquery.validate.min.js', ['jquery'], false, true);
    wp_enqueue_script('wNumb', CRANK_THEME_JS_DIR . 'wNumb.min.js', ['jquery'], false, true);
    wp_enqueue_script('wow', CRANK_THEME_JS_DIR . 'wow.js', ['jquery'], false, true);
    wp_enqueue_script('owl-carousel', CRANK_THEME_JS_DIR . 'owl.carousel.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-ui', CRANK_THEME_JS_DIR . 'jquery-ui.js', ['jquery'], false, true);
    wp_enqueue_script('odometer-min', CRANK_THEME_JS_DIR . 'odometer.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-nice-select', CRANK_THEME_JS_DIR . 'jquery.nice-select.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-sidebar-content', CRANK_THEME_JS_DIR . 'jquery-sidebar-content.js', ['jquery'], false, true);
    wp_enqueue_script('gsap', CRANK_THEME_JS_DIR . 'gsap.js', ['jquery'], false, true);
    wp_enqueue_script('ScrollTrigger', CRANK_THEME_JS_DIR . 'ScrollTrigger.js', ['jquery'], false, true);
    wp_enqueue_script('SplitText', CRANK_THEME_JS_DIR . 'SplitText.js', ['jquery'], false, true);
    wp_enqueue_script('aos', CRANK_THEME_JS_DIR . 'aos.js', ['jquery'], false, true);
    wp_enqueue_script('crank-main', CRANK_THEME_JS_DIR . 'main.js', ['jquery'], time(), true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'crank_scripts');


/*
Register Fonts
 */
function crank_fonts_url()
{
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'crank')) {
        $font_url = 'https://fonts.googleapis.com/css2?' . urlencode('family=Jost:wght@400;500;600;700;800;900&family=Kumbh+Sans:wght@400;500;600;700;800&display=swap');
    }
    return $font_url;
}

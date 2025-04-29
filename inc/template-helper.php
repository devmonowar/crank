<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package crank
 */

function get_header_style($style)
{
    if ($style == 'header_2') {
        get_template_part('template-parts/header/header-2');
    } elseif ($style == 'header_3') {
        get_template_part('template-parts/header/header-3');
    } elseif ($style == 'header_1_onepage') {
        get_template_part('template-parts/header/header-1-onepage');
    } elseif ($style == 'header_2_onepage') {
        get_template_part('template-parts/header/header-2-onepage');
    } elseif ($style == 'header_3_onepage') {
        get_template_part('template-parts/header/header-3-onepage');
    } else {
        get_template_part('template-parts/header/header-1');
    }
}

function crank_check_header()
{
    $tp_header_tabs = function_exists('tpmeta_field') ? tpmeta_field('crank_header_tabs') : false;
    $tp_header_style_meta = function_exists('tpmeta_field') ? tpmeta_field('crank_header_style') : '';
    $elementor_header_template_meta = function_exists('tpmeta_field') ? tpmeta_field('crank_header_templates') : false;

    $crank_header_option_switch = get_theme_mod('crank_header_elementor_switch', false);
    $header_default_style_kirki = get_theme_mod('header_layout_custom', 'header_1');
    $elementor_header_templates_kirki = get_theme_mod('crank_header_templates');

    if ($tp_header_tabs == 'default') {
        if ($crank_header_option_switch) {
            if ($elementor_header_templates_kirki) {
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_templates_kirki);
            }
        } else {
            if ($header_default_style_kirki) {
                get_header_style($header_default_style_kirki);
            } else {
                get_template_part('template-parts/header/header-1');
            }
        }
    } elseif ($tp_header_tabs == 'custom') {
        if ($tp_header_style_meta) {
            get_header_style($tp_header_style_meta);
        } else {
            get_header_style($header_default_style_kirki);
        }
    } elseif ($tp_header_tabs == 'elementor') {
        if ($elementor_header_template_meta) {
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_template_meta);
        } else {
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_templates_kirki);
        }
    } else {
        if ($crank_header_option_switch) {

            if ($elementor_header_templates_kirki) {
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_templates_kirki);
            } else {
                get_template_part('template-parts/header/header-1');
            }
        } else {
            get_header_style($header_default_style_kirki);
        }
    }
}
add_action('crank_header_style', 'crank_check_header', 10);



/**
 * [crank_header_lang description]
 * @return [type] [description]
 */

function crank_header_lang_defualt()
{
    $crank_header_lang = get_theme_mod('crank_header_lang', true);
    if ($crank_header_lang): ?>

        <span class="tp-header-lang-selected-lang tp-lang-toggle"
            id="tp-header-lang-toggle"><?php print esc_html__('English', 'crank'); ?></span>

        <?php do_action('crank_language'); ?>

    <?php endif; ?>
<?php
}

/**
 * [crank_language_list description]
 * @return [type] [description]
 */
function _crank_language($mar)
{
    return $mar;
}
function crank_language_list()
{

    $mar = '';
    $languages = apply_filters('wpml_active_languages', NULL, 'orderby=id&order=desc');
    if (!empty($languages)) {
        $mar = '<ul class="tp-header-lang-list tp-lang-list">';
        foreach ($languages as $lan) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul class="tp-header-lang-list tp-lang-list tp-header-lan-list-area">';
        $mar .= '<li><a href="#">' . esc_html__('English', 'crank') . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__('Bangla', 'crank') . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__('French', 'crank') . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__('Hindi', 'crank') . '</a></li>';
        $mar .= ' </ul>';
    }
    print _crank_language($mar);
}
add_action('crank_language', 'crank_language_list');


// header logo
function crank_header_logo()
{ ?>
    <?php
    $crank_logo_on = function_exists('tpmeta_field') ? tpmeta_field('crank_en_secondary_logo') : '';
    $crank_logo = get_template_directory_uri() . '/assets/img/logo/logo-1.png';
    $crank_logo_secondary = get_template_directory_uri() . '/assets/img/logo/logo-2.png';

    $crank_site_logo = get_theme_mod('header_logo', $crank_logo);
    $crank_secondary_logo = get_theme_mod('header_secondary_logo', $crank_logo_secondary);
    ?>

    <?php if ($crank_logo_on == 'on') : ?>
        <a class="secondary-logo" href="<?php print esc_url(home_url('/')); ?>">
            <img src="<?php print esc_url($crank_secondary_logo); ?>" alt="<?php print esc_attr__('logo', 'crank'); ?>" />
        </a>
    <?php else : ?>
        <a class="standard-logo" href="<?php print esc_url(home_url('/')); ?>">
            <img src="<?php print esc_url($crank_site_logo); ?>" alt="<?php print esc_attr__('logo', 'crank'); ?>" />
        </a>
    <?php endif; ?>
<?php
}


// header logo
function crank_header_black_logo()
{ ?>
    <?php
    $crank_logo = get_template_directory_uri() . '/assets/img/logo/logo-1.png';

    $crank_black_logo = get_theme_mod('header_logo', $crank_logo);
    ?>

    <a href="<?php print esc_url(home_url('/')); ?>">
        <img src="<?php print esc_url($crank_black_logo); ?>" alt="<?php print esc_attr__('logo', 'crank'); ?>" />
    </a>
<?php
}

/**
 * [crank_header_social_profiles description]
 * @return [type] [description]
 */
function crank_header_social_profiles()
{
    $crank_topbar_fb_url = get_theme_mod('header_facebook_link', __('#', 'crank'));
    $crank_topbar_twitter_url = get_theme_mod('header_twitter_link', __('#', 'crank'));
    $crank_topbar_instagram_url = get_theme_mod('header_instagram_link', __('#', 'crank'));
    $crank_topbar_linkedin_url = get_theme_mod('header_linkedin_link', __('#', 'crank'));
    $crank_topbar_youtube_url = get_theme_mod('header_youtube_link', __('#', 'crank'));
    $crank_topbar_pintarest_url = get_theme_mod('header_pintarest_link', __('#', 'crank'));
?>
    <?php if (!empty($crank_topbar_fb_url)): ?>
        <a target="_blank" href="<?php print esc_url($crank_topbar_fb_url); ?>"><span class="icon-facebook-f"></span></a>
    <?php endif; ?>

    <?php if (!empty($crank_topbar_twitter_url)): ?>
        <a target="_blank" href="<?php print esc_url($crank_topbar_twitter_url); ?>"><span class="icon-Vector"></span></a>
    <?php endif; ?>

    <?php if (!empty($crank_topbar_instagram_url)): ?>
        <a target="_blank" href="<?php print esc_url($crank_topbar_instagram_url); ?>"><span class="icon-instagram"></span></a>
    <?php endif; ?>

    <?php if (!empty($crank_topbar_linkedin_url)): ?>
        <a target="_blank" href="<?php print esc_url($crank_topbar_linkedin_url); ?>"><span class="icon-linkedin"></span></a>
    <?php endif; ?>

    <?php if (!empty($crank_topbar_youtube_url)): ?>
        <a target="_blank" href="<?php print esc_url($crank_topbar_youtube_url); ?>"><span class="icon-youtube"></span></a>
    <?php endif; ?>

    <?php if (!empty($crank_topbar_pintarest_url)): ?>
        <a target="_blank" href="<?php print esc_url($crank_topbar_pintarest_url); ?>"><span class="icon-pintarest"></span></a>
    <?php endif; ?>





<?php
}

/**
 * [crank_header_side_info_social_profiles description]
 * @return [type] [description]
 */
function crank_header_side_info_social_profiles()
{
    $crank_topbar_fb_url = get_theme_mod('header_facebook_link', __('#', 'crank'));
    $crank_topbar_twitter_url = get_theme_mod('header_twitter_link', __('#', 'crank'));
    $crank_topbar_instagram_url = get_theme_mod('header_instagram_link', __('#', 'crank'));
    $crank_topbar_linkedin_url = get_theme_mod('header_linkedin_link', __('#', 'crank'));
    $crank_topbar_youtube_url = get_theme_mod('header_youtube_link', __('#', 'crank'));
?>

    <?php if (!empty($crank_topbar_fb_url)): ?>
        <a class="icon facebook" href="<?php print esc_url($crank_topbar_fb_url); ?>"><i class="fab fa-facebook-f"></i></a>
    <?php endif; ?>

    <?php if (!empty($crank_topbar_twitter_url)): ?>
        <a class="icon twitter" href="<?php print esc_url($crank_topbar_twitter_url); ?>"><i class="fab fa-twitter"></i></a>
    <?php endif; ?>

    <?php if (!empty($crank_topbar_instagram_url)): ?>
        <a class="icon linkedin" href="<?php echo esc_url($crank_topbar_instagram_url) ?>"><i
                class="fa-brands fa-instagram"></i></a>
    <?php endif; ?>

    <?php if (!empty($crank_topbar_linkedin_url)): ?>
        <a class="icon linkedin" href="<?php echo esc_url($crank_topbar_linkedin_url) ?>"><i
                class="fab fa-linkedin"></i></a>
    <?php endif; ?>

    <?php if (!empty($crank_topbar_youtube_url)): ?>
        <a class="icon youtube" href="<?php print esc_url($crank_topbar_youtube_url); ?>"><i class="fab fa-youtube"></i></a>
    <?php endif; ?>

<?php
}

// crank_footer_social_profiles 
function crank_footer_social_profiles()
{
    $crank_footer_fb_url = get_theme_mod('crank_footer_fb_url', __('#', 'crank'));
    $crank_footer_twitter_url = get_theme_mod('crank_footer_twitter_url', __('#', 'crank'));
    $crank_footer_instagram_url = get_theme_mod('crank_footer_instagram_url', __('#', 'crank'));
    $crank_footer_linkedin_url = get_theme_mod('crank_footer_linkedin_url', __('#', 'crank'));
    $crank_footer_youtube_url = get_theme_mod('crank_footer_youtube_url', __('#', 'crank'));
?>

    <?php if (!empty($crank_footer_fb_url)): ?>
        <a href="<?php print esc_url($crank_footer_fb_url); ?>">
            <span class="icon-facebook-f"></span>
        </a>
    <?php endif; ?>

    <?php if (!empty($crank_footer_twitter_url)): ?>
        <a href="<?php print esc_url($crank_footer_twitter_url); ?>">
            <span class="icon-Vector"></span>
        </a>
    <?php endif; ?>

    <?php if (!empty($crank_footer_instagram_url)): ?>
        <a href="<?php print esc_url($crank_footer_instagram_url); ?>">
            <span class="icon-instagram"></span>
        </a>
    <?php endif; ?>

    <?php if (!empty($crank_footer_linkedin_url)): ?>
        <a href="<?php print esc_url($crank_footer_linkedin_url); ?>">
            <span class="icon-pintarest"></span>
        </a>
    <?php endif; ?>

    <?php if (!empty($crank_footer_youtube_url)): ?>
        <a href="<?php print esc_url($crank_footer_youtube_url); ?>">
            <!-- <i class="fa-brands fa-youtube"></i> -->
        </a>
    <?php endif; ?>

<?php
}

/**
 * [crank_header_menu description]
 * @return [type] [description]
 */
function crank_header_menu()
{
?>
    <?php
    wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => 'main-menu__list',
        'container'      => '',
        'fallback_cb'    => 'crank_Navwalker_Class::fallback',
        'walker'         => new \TPCore\Widgets\crank_Navwalker_Class,
    ]);
    ?>
<?php
}


/**
 * [crank_footer_menu description]
 * @return [type] [description]
 */
function crank_onepage_menu_01()
{
    wp_nav_menu([
        'theme_location' => 'onepage-menu-menu-01',
        'menu_class'     => 'tp-onepage-menu',
        'container'      => '',
        'fallback_cb'    => 'crank_Navwalker_Class::fallback',
        'walker'         =>  new \TPCore\Widgets\crank_Navwalker_Class,
    ]);
}


/*
 * crank footer
 */
add_action('crank_footer_style', 'crank_check_footer', 10);


function get_footer_style($style)
{
    if ($style == 'footer_2') {
        get_template_part('template-parts/footer/footer-2');
    } elseif ($style == 'footer_3') {
        get_template_part('template-parts/footer/footer-3');
    } elseif ($style == 'footer_4') {
        get_template_part('template-parts/footer/footer-4');
    } else {
        get_template_part('template-parts/footer/footer-1');
    }
}

function crank_check_footer()
{
    $tp_footer_tabs = function_exists('tpmeta_field') ? tpmeta_field('crank_footer_tabs') : '';
    $crank_footer_style = function_exists('tpmeta_field') ? tpmeta_field('crank_footer_style') : NULL;
    $footer_template = function_exists('tpmeta_field') ? tpmeta_field('crank_footer_template') : false;

    $crank_footer_option_switch = get_theme_mod('crank_footer_elementor_switch', false);
    $elementor_footer_template = get_theme_mod('crank_footer_templates');
    $crank_default_footer_style = get_theme_mod('footer_layout', 'footer_1');

    if ($tp_footer_tabs == 'default') {
        if ($crank_footer_option_switch) {
            if ($elementor_footer_template) {
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_footer_template);
            }
        } else {
            if ($crank_default_footer_style) {
                get_footer_style($crank_default_footer_style);
            } else {
                get_template_part('template-parts/footer/footer-1');
            }
        }
    } elseif ($tp_footer_tabs == 'custom') {
        if ($crank_footer_style) {
            get_footer_style($crank_footer_style);
        } else {
            get_footer_style($crank_default_footer_style);
        }
    } elseif ($tp_footer_tabs == 'elementor') {
        if ($footer_template) {
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($footer_template);
        } else {
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_footer_template);
        }
    } else {
        if ($crank_footer_option_switch) {

            if ($elementor_footer_template) {
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_footer_template);
            } else {
                get_template_part('template-parts/footer/footer-1');
            }
        } else {
            get_footer_style($crank_default_footer_style);
        }
    }
}

// crank_copyright_text
function crank_copyright_text()
{
    print get_theme_mod('footer_copyright', esc_html__('© 2023 crank, All Rights Reserved. Design By Theme Pure', 'crank'));
}



/**
 *
 * pagination
 */
if (!function_exists('crank_post_pagination')) {
    function crank_post_pagination()
    {
        $pages = paginate_links(array(
            'type' => 'array',
            'prev_text' => '<i class="fa-regular fa-arrow-left"></i>',
            'next_text' => '<i class="fa-regular fa-arrow-right"></i>',
        ));

        if ($pages) {
            echo '<div class="basic-pagination"><nav><ul>';
            foreach ($pages as $page) {
                echo "<li>$page</li>";
            }
            echo '</ul></nav></div>';
        }
    }
}



// theme color
function crank_custom_color()
{
    $crank_color_1 = get_theme_mod('crank_color_1', '#00A3C3');
    $crank_color_2 = get_theme_mod('crank_color_2', '#16243E');
    $crank_gra_color_1 = get_theme_mod('crank_gra_color_1', '#004D6E');
    $crank_gra_color_2 = get_theme_mod('crank_gra_color_2', '#00ACCC');
    $crank_body = get_theme_mod('crank_body', '#333F4D');

    wp_enqueue_style('crank-custom', CRANK_THEME_CSS_DIR . 'crank-custom.css', []);

    if (!empty($crank_color_1 || $crank_color_2 || $crank_color_3 || $crank_color_4)) {
        $custom_css = '';
        $custom_css .= "html:root{
            --tp-theme-primary: " . $crank_color_1 . ";
            --tp-theme-secondary: " . $crank_color_2 . ";
            --tp-gradient-primary: linear-gradient(90deg, {$crank_gra_color_1} 0%,  {$crank_gra_color_2} 100%);
            --tp-text-1: " . $crank_body . ";
        }";

        wp_add_inline_style('crank-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'crank_custom_color');

// crank_kses_intermediate
function crank_kses_intermediate($string = '')
{
    return wp_kses($string, crank_get_allowed_html_tags('intermediate'));
}

function crank_get_allowed_html_tags($level = 'basic')
{
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}



// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function crank_kses($raw)
{

    $allowed_tags = array(
        'a'                         => array(
            'class'   => array(),
            'href'    => array(),
            'rel'  => array(),
            'title'   => array(),
            'target' => array(),
        ),
        'abbr'                      => array(
            'title' => array(),
        ),
        'b'                         => array(),
        'blockquote'                => array(
            'cite' => array(),
        ),
        'cite'                      => array(
            'title' => array(),
        ),
        'code'                      => array(),
        'del'                    => array(
            'datetime'   => array(),
            'title'      => array(),
        ),
        'dd'                     => array(),
        'div'                    => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
        ),
        'dl'                     => array(),
        'dt'                     => array(),
        'em'                     => array(),
        'h1'                     => array(),
        'h2'                     => array(),
        'h3'                     => array(),
        'h4'                     => array(),
        'h5'                     => array(),
        'h6'                     => array(),
        'i'                         => array(
            'class' => array(),
        ),
        'img'                    => array(
            'alt'  => array(),
            'class'   => array(),
            'height' => array(),
            'src'  => array(),
            'width'   => array(),
        ),
        'li'                     => array(
            'class' => array(),
        ),
        'ol'                     => array(
            'class' => array(),
        ),
        'p'                         => array(
            'class' => array(),
            'id' => array(),
        ),
        'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
        ),
        'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
        ),
        'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
        ),
        'strike'                 => array(),
        'br'                     => array(),
        'strong'                 => array(),
        'data-wow-duration'            => array(),
        'data-wow-delay'            => array(),
        'data-wallpaper-options'       => array(),
        'data-stellar-background-ratio'   => array(),
        'ul'                     => array(
            'class' => array(),
        ),
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'g'     => array('fill' => true),
        'title' => array('title' => true),
        'path'  => array('d' => true, 'fill' => true,),
    );

    if (function_exists('wp_kses')) { // WP is here
        $allowed = wp_kses($raw, $allowed_tags);
    } else {
        $allowed = $raw;
    }

    return $allowed;
}

// product single social share
function crank_product_social_share()
{
    $post_url = get_the_permalink();
?>
    <div class="tp-shop-details__social">
        <span><?php echo esc_html__('Share:', 'crank'); ?></span>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($post_url); ?>" target="_blank"><i
                class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($post_url); ?>" target="_blank"><i
                class="fa-brands fa-facebook"></i></a>
        <a href="https://twitter.com/share?url=<?php echo esc_url($post_url); ?>" target="_blank"><i
                class="fa-brands fa-twitter"></i></a>
        <a href="http://pinterest.com/pin/create/button/?url=<?php echo esc_url($post_url); ?>" target="_blank"><i
                class="fa-brands fa-pinterest-p"></i></a>
    </div>
    <?php
}

// / This code filters the Archive widget to include the post count inside the link /
add_filter('get_archives_link', 'crank_archive_count_span');
function crank_archive_count_span($links)
{
    $links = str_replace('</a>&nbsp;(', '<span > (', $links);
    $links = str_replace(')', ')</span></a> ', $links);
    return $links;
}


// / This code filters the Category widget to include the post count inside the link /
add_filter('wp_list_categories', 'crank_cat_count_span');
function crank_cat_count_span($links)
{
    $links = str_replace('</a> (', '<span> (', $links);
    $links = str_replace(')', ')</span></a>', $links);
    return $links;
}



// blog single social share
function crank_blog_social_share()
{

    $finbest_singleblog_social = get_theme_mod('crank_social_share_switch', false);

    if (!empty($finbest_singleblog_social)) : ?>

        <span><?php echo esc_html__('Share:', 'crank'); ?></span>

        <a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>" target="_blank">
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>

<?php endif;
}

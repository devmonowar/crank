<?php

/**
 * Template part for displaying footer layout three
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crank
 */

$footer_shape_switch = get_theme_mod('footer_shape_switch', false);
$footer_social_switch = get_theme_mod('footer_social_switch', false);

$footer_copyright_column = $footer_social_switch ? 'col-xl-6 col-lg-6 col-md-6 col-sm-6' : 'col-xl-12';
$footer_copyright_center = $footer_social_switch ? 'text-center text-md-start' : 'text-center';

//footer bg image & color
$crank_footer_bg_url_from_page = function_exists('tpmeta_image_field') ? tpmeta_image_field('crank_footer_bg_image') : '';

$crank_footer_bg_color_from_page = function_exists('tpmeta_field') ? tpmeta_field('crank_footer_bg_color') : '';

$footer_bg_img = get_theme_mod('footer_bg_image');
$footer_bg_color = get_theme_mod('footer_bg_color');

// bg image
$bg_img = !empty($crank_footer_bg_url_from_page['url']) ? $crank_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty($crank_footer_bg_color_from_page) ? $crank_footer_bg_color_from_page : $footer_bg_color;


// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod('footer_widget_number', 4);


for ($num = 1; $num <= $footer_widgets; $num++) {
    if (is_active_sidebar('footer-' . $num)) {
        $footer_columns++;
    }
}

switch ($footer_columns) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-6 col-md-6';
        $footer_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
        $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5 3-col-1';
        $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7 3-col-2';
        $footer_class[3] = 'col-xl-4 col-lg-6 3-col-1';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
}

?>



<footer>

    <?php if (is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3') or is_active_sidebar('footer-4')): ?>
        <!-- footer area start -->
        <div class="tp-footer-area p-relative z-index-3 fix black-bg pt-120 pb-70">
            <?php if ($footer_shape_switch) : ?>
                <div class="tp-footer-shape-1 d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/shape-1-1.png" alt="">
                </div>
                <div class="tp-footer-shape-2 d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/shape-1-3.png" alt="">
                </div>
            <?php endif; ?>

            <div class="container">
                <div class="row">
                    <?php
                    if ($footer_columns == 4) {
                        print '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">';
                        dynamic_sidebar('footer-1');
                        print '</div>';

                        print '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">';
                        dynamic_sidebar('footer-2');
                        print '</div>';

                        print '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">';
                        dynamic_sidebar('footer-3');
                        print '</div>';

                        print '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">';
                        dynamic_sidebar('footer-4');
                        print '</div>';
                    } else {
                        for ($num = 1; $num <= $footer_columns; $num++) {
                            if (!is_active_sidebar('footer-' . $num)) {
                                continue;
                            }
                            print '<div class="' . esc_attr($footer_class[$num]) . '">';
                            dynamic_sidebar('footer-' . $num);
                            print '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- footer area end -->
    <?php endif; ?>

    <!-- copy-right area start -->
    <div class="tp-copyright-area tp-copyright-space black-bg-2">
        <div class="container">
            <div class="row align-items-center">

                <div class="<?php echo esc_attr($footer_copyright_column); ?>">
                    <div class="tp-copyright-left <?php echo esc_attr($footer_copyright_center); ?>">
                        <p><?php crank_copyright_text(); ?></p>
                    </div>
                </div>

                <?php if ($footer_social_switch) : ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="tp-copyright-social text-center text-md-end">
                            <?php crank_footer_social_profiles(); ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- copy-right area end -->
</footer>



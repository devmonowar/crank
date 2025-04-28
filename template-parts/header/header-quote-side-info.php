<?php

/**
 * Template part for displaying header side information
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crank
 */



$header_side_quote_logo = get_theme_mod('header_side_quote_logo', get_template_directory_uri() . '/assets/img/logo/logo-1.png');

// Contacts Text 
$header_side_about_text = get_theme_mod('header_side_about_text', __('About Us', 'biddut'));



// header right
$header_quote_switch = get_theme_mod('header_quote_switch', false);


// Header Address Link
$header_side_mailchimp = get_theme_mod('header_side_mailchimp');


//Offcanvas About Us
$offcanvas_about_us = get_theme_mod('offcanvas_about_us', __('Web designing in a powerful way of just not an only professions. We have tendency to believe the idea that smart looking .', 'crank'));

?>


<!-- Start sidebar widget content -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">X</a>
            </div>
            <?php if (!empty($header_quote_switch)): ?>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo esc_url($header_side_quote_logo); ?>" alt="<?php echo esc_attr__('Side Logo', 'crank'); ?>">
                                </a>
                            </div>
                            <div class="content-box">

                                <?php if (!empty($header_side_about_text)): ?>
                                    <h4><?php echo esc_html($header_side_about_text); ?></h4>
                                <?php endif; ?>
                                <p><?php echo esc_html($offcanvas_about_us); ?></p>
                            </div>

                            <?php if (!empty($header_side_mailchimp)) : ?>
                                <div class="form-inner">
                                    <h4><?php echo esc_html__('Get a free quote', 'crank'); ?></h4>

                                    <?php echo do_shortcode("$header_side_mailchimp") ?>

                                </div>

                            <?php else : ?>
                                <p><?php echo esc_html('Please set your mailchimp shortcode here', 'crank'); ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- End sidebar widget content -->
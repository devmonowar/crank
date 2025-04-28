<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crank
 */

$crank_audio_url = function_exists('tpmeta_field') ? tpmeta_field('crank_post_audio') : NULL;
$categories = get_the_terms($post->ID, 'category');
$crank_blog_cat = get_theme_mod('crank_blog_cat', false);
$crank_singleblog_social = get_theme_mod('crank_singleblog_social', false);

$social_shear_col = $crank_singleblog_social ? "col-lg-7 col-md-7" : "col-xl-12 col-md-12 col-lg-12";
if (is_single()):
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item tp-postbox-item-wrapper mb-80 format-image'); ?>>
        <?php if (has_post_thumbnail()): ?>
            <div class="tp-postbox-item-thumb p-relative mb-25">
                <?php echo wp_oembed_get($crank_audio_url); ?>
            </div>
        <?php endif; ?>
        <!-- blog meta -->
        <?php get_template_part('template-parts/blog/blog-meta'); ?>

        <h3 class="tp-postbox-title2"><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <?php
        wp_link_pages([
            'before'      => '<div class="page-links">' . esc_html__('Pages:', 'crank'),
            'after'       => '</div>',
            'link_before' => '<span class="page-number">',
            'link_after'  => '</span>',
        ]);
        ?>
        <div class="tp-postbox-share-wrapper">
            <div class="row">
                <div class=" <?php echo esc_attr($social_shear_col); ?>">
                    <?php echo crank_get_tag(); ?>
                </div>
                <?php crank_blog_social_share() ?>
            </div>
        </div>
    </article>

<?php else: ?>


    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item format-image mb-30 transition-3 format-audio'); ?>>
        <?php if (!empty($crank_audio_url)) : ?>
            <div class="postbox__thumb ratio ratio-16x9">
                <?php echo wp_oembed_get($crank_audio_url); ?>
            </div>
        <?php endif; ?>

        <div class="postbox__content">

            <?php get_template_part('template-parts/blog/blog-meta'); ?>

            <h3 class="postbox__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
            </h3>

            <div class="postbox__text">
                <?php the_excerpt(); ?>
            </div>

            <!-- blog btn -->
            <?php get_template_part('template-parts/blog/blog-btn'); ?>

        </div>
    </article>

<?php
endif; ?>
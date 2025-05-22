<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crank
 */

$crank_video_url = function_exists('tpmeta_field') ? tpmeta_field('crank_post_video') : '';

$categories = get_the_terms($post->ID, 'category');
$crank_blog_cat = get_theme_mod('crank_blog_cat', false);
$crank_singleblog_social = get_theme_mod('crank_singleblog_social', false);
$social_shear_col = $crank_singleblog_social ? "col-lg-7 col-md-7" : "col-xl-12 col-md-12 col-lg-12";

if (is_single()):
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item tp-postbox-item-wrapper mb-80 format-image'); ?>>
        <?php if (has_post_thumbnail()): ?>
            <div class="tp-postbox-thumb p-relative mb-25">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                </a>
                <?php if (!empty($crank_video_url)): ?>
                    <div class="tp-postbox-thumb-btn">
                        <a class="play-btn popup-video" href="<?php echo esc_url($crank_video_url); ?>"><i
                                class="fa-solid fa-play"></i>
                        </a>
                    </div>
                <?php endif; ?>
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


    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-list__single format-video'); ?>>
        <?php if (has_post_thumbnail()) : ?>
            <div class="blog-list__img-box">

                <div class="blog-list__img">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('full'); ?>
                    </a>
                    <?php if (!empty($crank_video_url)) : ?>
                        <div class="postbox__play-btn">
                            <a class="popup-video pulse-btn" href="<?php echo esc_url($crank_video_url); ?>"><i class="fa-light fa-play"></i></a>
                        </div>
                    <?php endif; ?>
                </div>




                <!-- <ul class="blog-list__meta list-unstyled">
                    <li>
                        <p><span class="icon-calendar"></span>Nov 19, 2022</p>
                    </li>
                    <li>
                        <p><span class="icon-user-2"></span>By admin</p>
                    </li>
                </ul> -->
            </div>
        <?php endif; ?>
        <div class="blog-list__content">

            <?php get_template_part('template-parts/blog/blog-meta'); ?>

            <h3 class="blog-list__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="blog-list__btn-box">
                <?php the_excerpt(); ?>
                <!-- blog btn -->
                <?php get_template_part('template-parts/blog/blog-btn'); ?>
            </div>
        </div>
    </article>


<?php
endif; ?>
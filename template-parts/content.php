 <?php
   /**
    * Template part for displaying posts
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package crank
    */
   $categories = get_the_terms($post->ID, 'category');
   $crank_blog_cat = get_theme_mod('crank_blog_cat', false);
   $crank_singleblog_social = get_theme_mod('crank_singleblog_social', false);

   $social_shear_col = $crank_singleblog_social ? "col-xl-6 col-lg-6 col-md-6" : "col-xl-12 col-md-12 col-lg-12";

   if (is_single()) : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item transition-3 format-standard'); ?>>
       <?php if (has_post_thumbnail()): ?>
          <div class="postbox__thumb p-relative m-img">
             <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
          </div>
       <?php endif; ?>

       <div class="postbox__content mb-70">
          <div class="postbox__meta-box pb-5 d-flex justify-content-between align-items-center">
             <?php get_template_part('template-parts/blog/blog-meta'); ?>
          </div>

          <h3 class="postbox__title pb-5"><?php the_title(); ?></h3>

          <div class="postbox__text">

             <?php the_content(); ?>

             <?php if (has_tag()) : ?>
                <div class="postbox__thumb m-img p-relative">
                   <div class="postbox__details-share-wrapper">
                      <div class="row">
                         <div class="col-xl-5 col-lg-6 col-md-6">
                            <div class="postbox__details-tag tagcloud">
                               <span><?php echo esc_html__('Tag:', 'crank'); ?></span>
                               <?php
                                 $tags = get_the_tags(); // Assuming you are within the loop
                                 if ($tags) {

                                    foreach ($tags as $tag) {
                                       echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                                    }
                                 }
                                 ?>
                            </div>
                         </div>
                         <?php if (function_exists('crank_blog_social_share')) : ?>
                            <div class="col-xl-7 col-lg-6 col-md-6">
                               <div class="postbox__details-share text-lg-end">
                                  <?php crank_blog_social_share(); ?>
                               </div>
                            </div>
                         <?php endif; ?>
                      </div>
                   </div>
                </div>
             <?php endif; ?>
          </div>
       </div>
    </article>




 <?php else: ?>




    <div class="blog-list__single">
       <?php if (has_post_thumbnail()) : ?>
          <div class="blog-list__img-box">
             <div class="blog-list__img">
                <a href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail('full'); ?>
                </a>
             </div>
             <ul class="blog-list__meta list-unstyled">
                <li>
                   <p><span class="icon-calendar"></span>Nov 19, 2022</p>
                </li>
                <li>
                   <p><span class="icon-user-2"></span>By admin</p>
                </li>
             </ul>
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
    </div>




    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item format-image mb-30 transition-3 format-standard'); ?>>
       <?php if (has_post_thumbnail()) : ?>
          <div class="postbox__thumb">
             <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('full'); ?>
             </a>
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

 <?php endif; ?>
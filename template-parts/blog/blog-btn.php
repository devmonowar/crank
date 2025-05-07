<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crank
 */

$crank_blog_btn = get_theme_mod('crank_blog_btn', __('Read More', 'crank'));
$crank_blog_btn_switch = get_theme_mod('crank_blog_btn_switch', true);

?>
<?php if (!empty($crank_blog_btn_switch)): ?>

   <div class="postbox__read-more">
      <a href="<?php the_permalink(); ?>" class="thm-btn"><span><?php print esc_html($crank_blog_btn); ?></span></a>
   </div>

<?php endif; ?>
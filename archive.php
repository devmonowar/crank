<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crank
 */

get_header();

$blog_column = is_active_sidebar('blog-sidebar') ? 8 : 12;

?>

<div class="tp-postbox-area pt-120 pb-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-<?php print esc_attr($blog_column); ?> blog-post-items">
				<div class="tp-postbox-wrapper">
					<?php if (have_posts()): ?>
						<header class="page-header d-none">
							<?php
							the_archive_title('<h1 class="page-title">', '</h1>');
							the_archive_description('<div class="archive-description">', '</div>');
							?>
						</header><!-- .page-header -->
						<?php
						/* Start the Loop */
						while (have_posts()):
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part('template-parts/content', get_post_type());
						endwhile;
						?>

						<div class="tp-postbox-pagination">
							<?php crank_pagination('<i class="fas fa-angle-double-left"></i>', '<i class="fas fa-angle-double-right"></i>', '', ['class' => '']); ?>
						</div>
					<?php
					else:
						get_template_part('template-parts/content', 'none');
					endif;
					?>
				</div>
			</div>
			<?php if (is_active_sidebar('blog-sidebar')): ?>
				<div class="col-lg-4">
					<div class="blog-sidebar__wrapper">
						<?php get_sidebar(); ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php
get_footer();

<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package customizable Lite
 */
$customizable_blogily_single_breadcrumb_section = get_theme_mod('customizable_blogily_single_breadcrumb_section', '1');
$customizable_blogily_single_tags_section = get_theme_mod('customizable_blogily_single_tags_section', '1');
$customizable_blogily_authorbox_section = get_theme_mod('customizable_blogily_authorbox_section', '1');
$customizable_blogily_relatedposts_section = get_theme_mod('customizable_blogily_relatedposts_section', '1');

get_header(); ?>

<div id="page" class="container">
	<div>
		<?php
			$category_name = 'blog';
			$args = array(
				'posts_per_page' => 1, 
				'category_name' => $category_name,
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();
					?>
					<div class="post-card-hp">
						<div class="featured-thumbnail column img-thumb">
							<?php the_post_thumbnail();?>
						</div>
						<div class="column post-excerpt">
							<div class="post excerpt hp">
								<?php the_excerpt();?>
								<a href="<?php echo get_the_permalink()?>" title="<?php the_title_attribute(); ?>">Read More</a>
							</div>
						</div>
					</div>
				<?php }
				wp_reset_postdata();
			} else {
				echo 'No posts found in the "' . $category_name . '" category.';
			}
		?>
	</div>
	<div>
		<!-- Start Sidebar -->
		<?php get_sidebar(); ?>
		<!-- End Sidebar -->
	</div>
</div>

<?php get_footer(); ?>

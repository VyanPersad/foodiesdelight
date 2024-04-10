<?php
/**
 * The template for displaying archive pages.
 *
 * Used for displaying archive-type pages. These views can be further customized by
 * creating a separate template for each one.
 *
 * - author.php (Author archive)
 * - category.php (Category archive)
 * - date.php (Date archive)
 * - tag.php (Tag archive)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<?php get_header(); ?>

<div id="page" class="home-page">
	<div class="article">
		<h1 class="postsby">
		this is the recipie archive
			<span><?php the_archive_title(); ?></span>
		</h1>
		<h3><p><?php the_archive_description(); ?></p></h3>
		
		<?php if (have_posts()) :
			$customizable_blogily_full_posts = get_theme_mod('customizable_blogily_full_posts');
			
			while (have_posts()) : the_post() ?>
			
			<?php
				foodielicious_blog_archive_post();
				
			endwhile;
			//ADDED PAGINAION HERE//
			echo paginate_links();
		endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<?php
/**
 * The main template file.
 *
 * Used to display the homepage when home.php doesn't exist.
 */
?>
<?php get_header(); ?>
	<div id="page" class="home-page">
		<div class="article">
			<?php if ( have_posts() ) :
				$customizable_blogily_full_posts = get_theme_mod('customizable_blogily_full_posts');
				while ( have_posts() ) : the_post();
					foodielicious_blog_archive_post();
				endwhile;
				//customizable_blog_post_navigation();
            endif; ?>
		</div><!-- .article -->
        this is the home.php page
		<?php get_sidebar(); ?>
		</div>
		<?php get_footer(); ?>
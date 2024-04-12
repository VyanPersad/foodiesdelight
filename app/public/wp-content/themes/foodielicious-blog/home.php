<style>
.head-text{
	background: white;
	padding: 5px;
	border-radius: 2px;
	text-align: center;
	
	font-size: 2.1em;
	border-radius: 2px;
}
</style>

<?php get_header(); ?>
	<div id="page" class="home-page">

	<h2 class="head-text">Latest Posts</h2>
		<div class="article">
			<?php if ( have_posts() ) :
				$customizable_blogily_full_posts = get_theme_mod('customizable_blogily_full_posts');
				while ( have_posts() ) : the_post();
					foodielicious_blog_archive_post();
				endwhile;
				//customizable_blog_post_navigation();
            endif; ?>
		</div><!-- .article -->
		<?php get_sidebar(); ?>
		</div>
		<?php get_footer(); ?>
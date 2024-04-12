<?php
/*
Template Name: Privacy policy template
Description: A custom page template for unique layouts.
*/
?>
<?php
get_header(); ?>

<div id="page" class="single">
	<div class="content">
		<article class="article">
			<div id="content_box" >
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('g post'); ?>>
						<div class="single_page single_post clear">
							<div id="content" class="post-single-content box mark-links">
							<header>
								<h1 class="title"><?php the_title(); ?></h1>
							</header>
								<?php the_content(); ?>                                    
							</div><!--.post-content box mark-links-->
							<?php comments_template( '', true ); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</article>
		<?php get_sidebar(); ?>
		</div>
		</div>
		<?php get_footer(); ?>
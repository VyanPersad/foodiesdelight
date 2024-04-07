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
This is the archive casestudy.
<div id="page" class="single">
	<div  id="content" class="post-single-content box mark-links">
		<div class="article">
			<?php if(have_posts()) { ?>
				<? while(have_posts()) { ?>
					<?php the_post(); ?>		
					
						<h2 class="article-header">
							
							<a class="title" href="<?php the_permalink() ?>" title="<?php the_title_attribute();?>"><?php the_title()?></a>
						</h2>
						<div class="post-info">
							Posted on 
							<a href="<?php echo get_permalink()?>">
								<time class="post-date-cutomizable" datetime="<?php echo get_the_date('c')?>"><?php echo get_the_date()?> </time>
							</a>
							By 
							<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">
								<?php echo get_the_author(); ?>
							</a>
						</div>
						<div class="post-card">
							<div class=" column img-thumb">
								<?php the_post_thumbnail();?>
							</div>
							<div class="column post-excerpt">
								<div class="post excerpt ">
									<?php the_excerpt();?>
									<a href="<?php echo get_the_permalink()?>" title="<?php the_title_attribute(); ?>">Read More</a>
								</div>
							</div>
						</div>
					
				<?php } ?>
				<?php the_posts_pagination() ?>
			<?php } else { ?>
				<p>Sorry no posts match your criteria</p>
			<?php } ?>
		</div>
		<!-- Start Sidebar -->
		<?php get_sidebar(); ?>
		<!-- End Sidebar -->
	</div>
</div>

<?php get_footer(); ?>
<style> 

.author:hover{
	text-decoration: underline;
}

.head-text{
	background: white;
	padding: 5px;
	border-radius: 2px;
	text-align: center;
	
	font-size: 2.1em;
	border-radius: 2px;
}

.article{

background-color: white;

padding: 5px;
border-radius: 2px;

display: inline-block;
border-radius: 2px;
padding: 0.5em 0.2em 0.8em 0.5em;
}

</style>

<?php get_header(); ?>
	<div id="page" class="home-page">
		<h2 class="head-text">Welcome to Trinibites!</h2>
		<div class="article">
		
		<br>
		<div style="text-align:center;"><b><h3>Meet Our Chefs</h3></b></div>
		<div style="text-align:center;">
			<div>
				<?php
				$customizable_blogily_full_posts = get_theme_mod('customizable_blogily_full_posts');
					
					$args = array(
						'post_type' => 'chef', // Replace with your custom post type name
						'posts_per_page' => -1, // Fetch all posts
						'post_status' => 'publish', // Display only published posts
					);

					$the_query = new WP_Query($args);

					if ($the_query->have_posts()) {
						while ($the_query->have_posts()) {
							$the_query->the_post();
							// Display post title, content, or any other relevant information
							echo '<div style="display: inline-block; margin-right: 20px;">';
							echo  '<div style="border-inline: solid;">' . the_post_thumbnail() . '</div>';
							echo '<b><p><a class="author" href="' . get_permalink() . '">' . get_the_title() . '</a></p></b>';
							echo '</div>';
						}
						wp_reset_postdata();
					}
				?>	
			</div>
		</div>
		
		<h2 class="head-text">Today's Featured Podcast Episode!</h2>
		<br>
		<?php 
				$args = array(
					'posts_per_page' => 1, // Display only the latest post
					'post_type' => 'podcast', // Replace with your custom post type name
					'orderby' => 'date', // Order by post date
					'order' => 'DESC', // Show the most recent post first
					'post_status' => 'publish', // Display only published posts
				);
			
				$the_query = new WP_Query($args);

					if ($the_query->have_posts()) {
						while ($the_query->have_posts()) {
							$the_query->the_post();
							// Display post title, content, or any other relevant information
							echo '<h4>' . get_the_title() . '</h4>';
							echo the_content();
						}
						wp_reset_postdata();
					}
				 ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>

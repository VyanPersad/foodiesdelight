<style>
.entry-header{
    background: white;
	padding: 5px;
	border-radius: 2px;
	text-align: center;
	
	font-size: 2.1em;
	border-radius: 2px;
}

.game-image{
    max-width: 300px; /* Adjust as needed */
    height: 200px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

div .gform{
    display: block;
    text-align: center;
}

.gform{
    
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;

}

</style>

<?php
/*
Template Name: Guessing game template
Description: A custom page template for unique layouts.
*/
?>
<?php 

get_header(); ?>



<div id="page" class="single">
	<div class="content">
		<article class="article">
			<div id="content_box" >

                 <!--LINEBREAK FOR GUESSING GAME CODE-->

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                
                        <article id="post-<?php the_ID(); ?>" <?php post_class('g post'); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header><!-- .entry-header -->
                
                            <div class="entry-content">
                                <br>
                                <h2 class="entry-header">Guess the Image!</h2>
                
                                <?php
                                // Initialize variables
                                $image_directory = get_template_directory() . '/guessinggameimages';
                                $random_image = '';
                                $user_guess = '';
                                $message = '';
                
                                // Handle form submission
                                if (isset($_POST['submit-guess'])) {
                                    $user_guess = strtolower(trim($_POST['user-guess'])); // Convert to lowercase and trim whitespace
                                    $random_image = $_POST['current-image']; // Retrieve the current image filename from hidden input
                
                                    // Check if user's guess matches the image name
                                    if ($user_guess === strtolower(pathinfo($random_image, PATHINFO_FILENAME))) {
                                        $message = 'Congratulations! You guessed correctly!';
                                    } else {
                                        $message = 'Sorry, your guess is incorrect. Try again!';
                                    }
                                }
                
                                // Fetch random image if not already set
                                if (!$random_image) {
                                    $images = scandir($image_directory);
                                    $random_index = rand(2, count($images) - 1); // Exclude . and .. directories
                                    $random_image = $images[$random_index];
                                }
                                ?>
                
                                <img src="<?php echo get_template_directory_uri() . '/guessinggameimages/' . $random_image; ?>" alt="Random Image" class="game-image">
                                <div class="gform">
                                    <form id="guess-form" action="" method="post">
                                        <label for="user-guess">Enter your guess:</label>
                                       
                                        <input type="text" id="user-guess" name="user-guess" required>
                                        <input type="hidden" name="current-image" value="<?php echo $random_image; ?>"> <!-- Hidden input for current image filename -->
                                        <button type="submit" name="submit-guess">Submit Guess</button>
                                        
                                    </form>
                                    <label for="user-guess">Don't include spaces in your guesses!</label>
                                    <br>
                                    <label for="user-guess">e.g. bakeandshark</label>
                                
                                <?php if ($message) : ?>
                                    <p><?php echo $message; ?></p>
                                    <form id="play-again-form" action="" method="post">
                                        <button type="submit" name="play-again">Play Again</button>
                                    </form>
                                </div>
                                <?php endif; ?>
                            </div><!-- .entry-content -->
                
                        </article><!-- #post-<?php the_ID(); ?> -->
                
                    </main><!-- #main -->
                </div><!-- #primary -->

            <!--LINEBREAK FOR GUESSING GAME CODE-->
				
			</div>
		</article>
		<?php get_sidebar(); ?>
		</div>
		</div>
		<?php get_footer(); ?>
<style>
	.link:hover{
		text-decoration: underline;
	}
</style>

<footer id="site-footer" role="contentinfo">
	<?php if ( is_active_sidebar( 'footer-first' ) || is_active_sidebar( 'footer-second' ) || is_active_sidebar( 'footer-third' ) ) { ?>
	<div class="container">
		<div class="footer-widgets">
			<div class="footer-widget">
				<?php if ( is_active_sidebar( 'footer-first' ) ) : ?>
					<?php dynamic_sidebar( 'footer-first' ); ?>
				<?php endif; ?>
			</div>
			<div class="footer-widget">
				<?php if ( is_active_sidebar( 'footer-second' ) ) : ?>
					<?php dynamic_sidebar( 'footer-second' ); ?>
				<?php endif; ?>
			</div>
			<div class="footer-widget last">
				<?php if ( is_active_sidebar( 'footer-third' ) ) : ?>
					<?php dynamic_sidebar( 'footer-third' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php }?>
	<div class="copyrights">
		<div class="container">

        <!-- ADDED CODE FOR FOOTER REFERENCES -->
        <h3 class="headline">Explore Us</h3>
        <ul>
            <a class="link" href="<?php echo site_url('/about-us') ?>">About Us</a>
            <a class="link" href="<?php echo site_url('/cookie-policy') ?>">Cookie Policy</a>
        </ul>
			
            <div class="row" id="copyright-note">
            
				<span>
					<?php echo esc_html__('&copy; ', 'customizable-blogily') . esc_html(date_i18n(__('Y','customizable-blogily'))); ?> <?php bloginfo( 'name' ); ?>

				<!-- Delete below lines to remove copyright from footer -->
                <span class="footer-info-right">
					<?php echo esc_html__(' | Powered by ', 'customizable-blogily') ?> <a href="<?php echo esc_url('https://superbthemes.com/customizable-blogily/', 'customizable-blogily'); ?>" rel="nofollow noopener"><?php echo esc_html__('Customizable Blogily', 'customizable-blogily') ?></a>
				</span>
				
				<!-- Delete above lines to remove copyright from footer -->

				</span>
			</div>
		</div>
	</div>
</footer><!-- #site-footer -->
<?php wp_footer(); ?>

</body>
</html>

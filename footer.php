<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeChum
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<?php
				if(is_active_sidebar('footer-1')){
					dynamic_sidebar('footer-1');
				}
				if(is_active_sidebar('footer-2')){
					dynamic_sidebar('footer-2');
				}
				if(is_active_sidebar('footer-3')){
					dynamic_sidebar('footer-3');
				}
				if(is_active_sidebar('footer-4')){
					dynamic_sidebar('footer-4');
				}
				?>
			</div>
			<div class="col-md-12 text-center">
				<div class="site-info">		
					<?php 
					if(is_active_sidebar('copyright')) {
						dynamic_sidebar('copyright');
					} 
					?>					
				</div><!-- .site-info -->				
			</div>		
		</div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

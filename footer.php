<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" role="contentinfo">
			
			<div class="section-top-padding section-bottom-padding">
				<h3 class="light-blue-text">Useful Links</h3>
				<ul>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms Of Use</a></li>
				</ul>
			</div>

			<ul class="social-icons-list section-top-padding section-bottom-padding">
				<li><a href="#"><img class="social" src="<?php echo get_stylesheet_directory_uri() ?>/img/facebook.svg" alt="Facebook"></a></li>
				<li><a href="#"><img class="social" src="<?php echo get_stylesheet_directory_uri() ?>/img/github.svg" alt="Github"></a></li>
				<li><a href="#"><img class="social" src="<?php echo get_stylesheet_directory_uri() ?>/img/linkedin-in.svg" alt="Linked In"></a></li>
			</ul>

			<div class="section-top-padding section-bottom-padding">
				<h3 class="light-blue-text">Contact</h3>
				<ul>
					<li>07931748603</li>
					<li>jberkem@gmail.com</li>
				<ul>
			</div>
			
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>

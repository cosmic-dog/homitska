<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
	<footer role="contentinfo" class="footer">
		
		<nav>
			<?php 
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu(
						array(
							'theme_location'=> 'footer',
							'menu_class'    => 'footer-menu',
							'menu_id'       => 'footer-menu',
							'container'		=> '',
							'walker' 		=> new Homitska_Footer_Walker()
						)
					);	
				}
			?>

			<ul class="footer-menu">
				<li>
					<span>Feedback</span>
					<ul class="sub-menu">
						<li>
							<a href="tel:+37129146982">(+371) 291 46982</a>
						</li>
						<li>
							<a href="mailto:elga.homitska@gmail.com">elga.homitska@gmail.com</a>
						</li>

						<li class="footer-menu-social">
							<?php 
								if ( has_nav_menu( 'primary' ) ) {
									wp_nav_menu(
										array(
											'theme_location'=> 'social',
											'menu_class'    => 'social-menu',
											'container'		=> '',
											'walker' 		=> new Homitska_Social_Walker()
										)
									);	
								}
							?>
						</li>
					</ul>
				</li>
			</ul>
		</nav>

		<p class="footer-copyright">
			&copy; <?php echo date('Y') ?> Elga Homitska
		</p>

	</footer>

	<?php wp_footer(); ?>

	<!-- Homitska stuff -->
	<script src="http://homitska.com/static/elga_app/js/jquery.js"></script>
	<script src="http://homitska.com/static/elga_app/js/compressed.js"></script>
	<!-- End of Homitska stuff -->
</body>
</html>

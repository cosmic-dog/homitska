<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the footer element and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Homitska 1.0
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
		</nav>

		<p class="footer-copyright">
			&copy; <?php echo date('Y') ?> Elga Homitska
		</p>
	</footer>

	<div class="overlay"></div>
	
	<?php 
		get_template_part( 'template-parts/modals' );
		wp_footer(); 
	?>

	<!-- Homitska stuff -->
	<script src="/wp-content/themes/homitska/assets/js/main.js"></script>
	<!-- End of Homitska stuff -->
</body>
</html>

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

        <?php
            if(is_active_sidebar('sidebar-1')){
                dynamic_sidebar('sidebar-1');
            }
        ?>

		<p class="footer-copyright">
			&copy; <?php echo date('Y') ?> Elga Homitska
		</p>
	</footer>

    <div class="overlay"></div>
    
	<?php 
        if(is_active_sidebar('sidebar-modals')){
           dynamic_sidebar('sidebar-modals');
        }
        
        if(is_active_sidebar('sidebar-2')){
            dynamic_sidebar('sidebar-2');
        }

		wp_footer(); 
    ?>
</body>
</html>

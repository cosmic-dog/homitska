<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<script src="http://homitska.com/static/elga_app/js/jquery.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

		<script src="/wp-content/themes/homitska/js/wow.js"></script>
	</head>

	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<!-- Homitska header -->
		<header class="header wow fadeIn">
			<div class="header-inner">
				<div class="header-top">
					<a href="tel:+37129146982" class="header-phone wow fadeInLeft" data-wow-delay="1.4s">(+371) 291 46982</a>
					
					<!-- Social menu -->
					<div class="header_social">	
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
					</div>
					<!-- End: social menu -->

					<div class="header_lang wow fadeInDown" data-wow-delay=".9s" data-active="ru">
						<?php 
							if ( has_nav_menu( 'primary' ) ) {
								wp_nav_menu(
									array(
										'theme_location'=> 'primary-nav',
										'menu_class'    => 'header_lang-ul',
										'container'		=> '',
										'walker' 		=> new Homitska_Lang_Walker()
									)
								);	
							}
						?>
						<svg class="header_lang-arrow" viewBox="0 0 30 30">
							<g><path d="M5,13 l10,8 l10,-8"></path></g>
						</svg>
					</div>

					<a href="/" class="header_logo-link">
						<?php
							// Elga Homitska logo
							get_template_part( 'template-parts/h/logo' );
						?>
					</a>
					
					<a href="/" class="header_logo-mobile">
						<!-- <img src="/media/upload/2018/01/24/favicon.png" alt="Elga Homitska" class="header_logo-mobile-img"> -->
					</a>
					<div class="header-btn-wrap">
						<button class="trans btn-small wow fadeInRight" data-wow-delay="1.4s"><span>Связаться с нами</span></button>
					</div>
				</div>

				<nav class="header-menu">
					<?php 
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu(
								array(
									'theme_location'=> 'primary',
									'menu_class'    => 'primary-menu',
									'container'		=> '',
									'walker' 		=> new Homitska_Walker()
								)
							);	
						}
					?>

				</nav>
			</div>
		</header>
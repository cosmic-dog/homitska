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


		<!-- Homitska stuff -->
		<!-- <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700"> -->
		<link rel="stylesheet" href="http://homitska.yu/wp-content/themes/homitska/_website/compressed/compressed.css">
		<script src="http://homitska.com/static/elga_app/js/main.js"></script>

	</head>

	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<?php //get_template_part( 'template-parts/menu-search' ); ?>

	

		<!-- <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
			<span class="toggle-inner">
				<span class="toggle-icon">
					<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
				</span>
				<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
			</span>
		</button> -->

				

			<div class="header-navigation-wrapper">
				<?php if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {  ?>

						<nav class="primary-menu-wrapper" role="navigation">
							<ul class="primary-menu reset-list-style">
								<?php
									if ( has_nav_menu( 'primary' ) ) {

										// wp_nav_menu(
										// 	array(
										// 		'container'  => '',
										// 		'items_wrap' => '%3$s',
										// 		'theme_location' => 'primary',
										// 	)
										// );		
										
										// wp_nav_menu(
										// 	array(
										// 		'theme_location' => 'primary',
										// 		'menu_class'     => 'primary-menu',
										// 		'walker' 		 => new Homitska_Walker()
										// 	)
										// );	

									} 
								?>
							</ul>
						</nav>
					<?php } ?>


				

		<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				//get_template_part( 'template-parts/modal-search' );
			}
				
			// Output the menu modal.
			//get_template_part( 'template-parts/modal-menu' );
		?>


<!-- Homitska header -->
<header class="header_wrapper wow fadeIn">
	<div class="header_wrapper-inner">
		<div class="header_top-wrapper">
			<a href="tel:+37129146982" class="header_phone  wow fadeInLeft" data-wow-delay="1.4s">(+371) 291 46982</a>
			
			<div class="header_social">	
				<a class="header_social-link" target="_blank" href="https://www.facebook.com/ELGAHOMITSKA.IMAGEHOUSE/">
					<img src="/media//upload/2017/09/13/fb_x6ZZKck.png" alt="" class="header_social-img wow fadeInDown" data-wow-delay="1.1s">
				</a>
				
				<a class="header_social-link" target="_blank" href="https://www.instagram.com/elgahomitska/">
					<img src="/media//upload/2017/09/13/in_Y2stLDT.png" alt="" class="header_social-img wow fadeInDown" data-wow-delay="1.2s">
				</a>			
			</div>

			<div class="header_lang wow fadeInDown" data-wow-delay=".9s" data-active="ru">
				<ul class="header_lang-ul">
					<li class="header_lang-li">
						<span class="header_lang-li-text">RU</span></li>
					<li class="header_lang-li">
						<span class="header_lang-li-text">LV</span>
					</li>
					<li class="header_lang-li">
						<span class="header_lang-li-text">EN</span>
					</li>
				</ul>
				
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
				<img src="/media/upload/2018/01/24/favicon.png" alt="Elga Homitska" class="header_logo-mobile-img">
			</a>
			<div class="header_button-wrapper">
				<div class="button header_button wow fadeInRight clearfix popup__trigger" data-form="popup-client" data-wow-delay="1.4s">Стать клиентом</div>
			</div>
		</div>

		<nav class="menu_wrapper">
		<?php 
				wp_nav_menu(
					array(
						'theme_location'=> 'primary',
						'menu_class'    => 'primary-menu',
						'container'		=> '',
						'walker' 		=> new Homitska_Walker()
					)
				);	
		
		?>
			<!-- <a href="/wework" class="menu_link wow fadeInUp" data-wow-delay="0.3s">
				<span class="menu_link-text">услуги стилиста</span>
			</a>
			
			<a href="/portfolio" class="menu_link wow fadeInUp" data-wow-delay="0.6s">
				<span class="menu_link-text">портфолио</span>
			</a>
			
			<a href="/weteach" class="menu_link wow fadeInUp" data-wow-delay="0.9s">
				<span class="menu_link-text">учим</span>
			</a>
			
			<a href="/wewrite" class="menu_link wow fadeInUp" data-wow-delay="1.2s">
			пишем
			</a>
			
			<a href="/about" class="menu_link active wow fadeInUp" data-wow-delay="1.5s">
			О НАС
			</a> -->
			
			<!-- Mobile menu -->
			<!-- <img src="/static/elga_app/images/burger-button.jpg" class="menu_burger">
			<div class="menu_mobile">
				<a href="/" class="menu_mobile-link  wow fadeInUp animated" data-wow-delay="Nones" style="visibility: visible; animation-name: fadeInUp;">
					<span class="menu_mobile-link-text">Главная</span>
				</a>
				
				<a href="/wework" class="menu_mobile-link ">
					<span class="menu_mobile-link-text">услуги стилиста</span>
				</a>
				<img src="/static/elga_app/images/cross.png" class="menu_mobile-cross">
				
				<a href="/portfolio" class="menu_mobile-link ">
					<span class="menu_mobile-link-text">портфолио</span>
				</a>
				<img src="/static/elga_app/images/cross.png" class="menu_mobile-cross">
				
				<a href="/weteach" class="menu_mobile-link ">
					<span class="menu_mobile-link-text">учим</span>
				</a>
				<img src="/static/elga_app/images/cross.png" class="menu_mobile-cross">
				
				<a href="/wewrite" class="menu_mobile-link ">
					<span class="menu_mobile-link-text">пишем</span>
				</a>
				<img src="/static/elga_app/images/cross.png" class="menu_mobile-cross">
				
				<a href="/about" class="menu_mobile-link  active ">
					<span class="menu_mobile-link-text">О НАС</span>
				</a>
				<img src="/static/elga_app/images/cross.png" class="menu_mobile-cross">
			</div> -->
			<!-- end of Mobile menu -->
		</nav>
	</div>
</header>
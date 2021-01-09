<?php
/**
 * Header file for the Homitska theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Homitska 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="yandex-verification" content="ff146adcd29e0350">

		<?php wp_head(); ?>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-PTQ7DTL');
		</script>
		<!-- End Google Tag Manager -->
	</head>

	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTQ7DTL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<?php wp_body_open(); ?>

		<!-- Homitska header -->
		<header class="header wow fadeIn">
			<div class="header-inner">
				<div class="header-top">
					<a href="tel:+37129146982" class="header-phone wow fadeInLeft" data-wow-delay="1.4s">(+371) 291 46982</a>
										
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
					
					<?php
						get_template_part( 'template-parts/menu-button' );
					?>
					
					<div class="header_lang wow fadeInDown" data-wow-delay=".9s" data-active="ru">
						<?php     
                            if ( has_nav_menu( 'expanded' ) ) {
                                wp_nav_menu(
                                    array(
                                        'theme_location'=> 'expanded',
                                        'menu_class'    => 'header_lang-ul',
                                        'container'		=> '',
                                        'walker' 		=> new Homitska_Lang_Walker()
                                    )
                                );	
                            }
                        ?>
                        <a href="#" class="header-lang-btn">
                            <svg class="header_lang-arrow" viewBox="0 0 30 30">
                                <g><path d="M5,13 l10,8 l10,-8"></path></g>
                            </svg>
                        </a>
					</div>

					<a href="/" class="header_logo-link">
						<?php
							get_template_part( 'template-parts/logo' );
						?>
					</a>
					
					<a href="/" class="header_logo-mobile">
						<img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Elga Homitska" class="header_logo-mobile-img">
					</a>
					
					<div class="header-btn-wrap wow fadeInRight" data-wow-delay="1.4s">
						<?php
							get_template_part('template-parts/contact-button');
						?>
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

					<div class="header-btn-wrap mobile">
						<?php
							get_template_part('template-parts/contact-button');
						?>
					</div>
				</nav>
			</div>
		</header>
<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Merryweather_Maker
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'merryweather-maker'); ?></a>

		<header id="masthead" class="site-header">
			<div class="container">
				<div class="site-branding">
					<?php

					$logo = get_field("text_logo", "option");
					echo '<a href="/">';
					echo wp_get_attachment_image($logo, "medium", "", ["class" => "site-logo"]);
					echo '</a>';
					?>
				</div><!-- .site-branding -->
				<div class="navigations">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('', 'merryweather-maker'); ?>
							<div class="hamburger-line"></div>
							<div class="hamburger-line"></div>
							<div class="hamburger-line"></div>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->

					<nav class="shop-navigation">
						<a href="/cart">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/cart.svg" alt="shopping cart icon">
						</a>
						<a href="/my-account">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/account.svg" alt="account icon">
						</a>
					</nav>
				</div>
			</div>
		</header><!-- #masthead -->
<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Merryweather_Maker
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="footer-logo">
			<?php
			echo wp_get_attachment_image(get_field('footer', 'option')['logo']['id'], "medium")
			?>

		</div>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer-menu',
				'menu_id'        => 'footer-menu',
			)
		);
		?>
		<div class="bottom-row">
			<div class="copyright">
				<p>Copyright © <?= date("Y") ?> Merryweather Maker. All rights reserved.</p>
			</div>
			<div class="socials">
				<a href="<?php echo get_field('footer', 'option')['facebook_page'] ?>" target="_blank" class="social-account">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/facebook.svg" alt="">
				</a>
				<a href="<?php echo get_field('footer', 'option')['instagram_page'] ?>" target="_blank" class="social-account">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/instagram.svg" alt="">
				</a>
				<a href="<?php echo get_field('footer', 'option')['etsy_store'] ?>" target="_blank" class="social-account">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/etsy.svg" alt="">
				</a>
			</div>
			<div class="credit">
				<p>Website designed and built by <a href="https://adamhills.me" target="_blank">Adam</a></p>
			</div>
		</div>
	</div>

	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anmake_Tokyo
 */

?>

	<div class="contactButtonWrapper">
		<a href="" class="contactButton">
			CONTACT
			<picture class="contactButton__icon">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_angle.webp" type="image/webp">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_angle.png" alt="">
			</picture>
		</a>

	</div>
	<footer id="site-footer" class="footer">
		<div class="footer__area">
			<div class="footer__logo">
				<?php the_custom_logo(); ?>
			</div>
			<?php echo get_template_part('template-parts/global-sns') ?>
			<div class="footer__links">
				<?php wp_nav_menu(array(
					'theme_location' => 'primary'
				)); ?>
			</div>
			<div class="footer__copyrightWrapper">
				<small class="footer__copyright">© AnMAKE Tokyo All Rights Reserved</small>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

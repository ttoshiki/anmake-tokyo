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

	<div class="contactButton">
		<a href="">CONTACT</a>
	</div>
	<footer id="site-footer" class="footer">
		<div class="footer__area">
			<div class="footer__logo">
				<?php the_custom_logo(); ?>
			</div>
			<div class="footer__sns">
				<a href="" class="footer__snsLink"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_twitter.svg'); ?></a>
				<a href="" class="footer__snsLink"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_instagram.svg'); ?></a>
				<a href="" class="footer__snsLink"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_fb.svg'); ?></a>
			</div>
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

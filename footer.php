<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vape
 */
$about = rwmb_meta( 'footer_about', [ 'object_type' => 'setting' ], 'footer' );
?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-footer__wrap">
				<div class="footer_about"><?= wp_kses_post(wpautop($about));?></div>
				<div class="footer_menu"><?php dynamic_sidebar( 'menu_footer' )?></div>
				<div class="footer_menu"><?php dynamic_sidebar( 'footer_support' )?></div>
				<div class="footer_menu"><?php dynamic_sidebar( 'footer_contact' )?></div>
			</div>
			<div class="site-footer__inner">
				<p>Copyright © 2022 VAPEHANGHIEU.COM</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

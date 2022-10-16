<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vape
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header header">
		<div class="header-top">
			<div class="container">
				<div class="header__wrap">
					<div class="logo"><?php the_custom_logo();?></div>
					<div class="header-right">
						<?php get_template_part( 'template-parts/header/time' ); ?>
						<?php get_template_part( 'template-parts/header/cart' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="header-menu">
			<div class="container">
			<?php get_template_part( 'template-parts/header/menu' ); ?>
			</div>
		</div>
	</header><!-- #masthead -->

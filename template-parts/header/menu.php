<?php
if ( ! has_nav_menu( 'menu-1' ) ) {
	return;
}
?>

<nav id="site-navigation" class="main-navigation nav">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'container'      => false,
		)
	);
	?>
</nav>
<button class="menu-toggle header-icon" aria-controls="primary-menu" aria-expanded="false">
	<?php Vape_Icons::render( 'bar' ) ?>
</button>
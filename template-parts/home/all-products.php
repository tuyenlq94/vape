<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
	'post_type' => 'product',
	//paged' => $paged,
	'post_status' => 'publish',
	'posts_per_page' => 12,
	'update_post_term_cache' => false,
);
$query = new WP_query($args);
?>

<section class="product-home">
	<div class="container">
		<div class="product-home__top">
			<h2><?= esc_html__('Tất cả sản phẩm', 'vape' )?></h2>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'product-menu',
					'container'      => false,
				)
			);
			?>
		</div>
		<div class="product-home__wrap">
			
			<?php
			if ($query->have_posts()) :
				while ($query->have_posts()) :
					$query->the_post();
					vape_products();
				endwhile;
			endif; 
			wp_reset_postdata(); 
			?>
		</div>
		
	</div>
</section>
<?php
$tax_query[] = array(
	'taxonomy' => 'product_visibility',
	'field'    => 'name',
	'terms'    => 'featured',
	'operator' => 'IN',
);
$args = array(
	'post_type' => 'product',
	'post_status' => 'publish',
	'posts_per_page' => 10,
	'ignore_sticky_posts' => 1,
	'tax_query' => $tax_query,
);
$query = new WP_query($args);
?>
<section class="featured">
	<div class="container">
		<div class="featured__top">
			<h2 class="title"><?= esc_html__('Có thể bạn sẽ thích', 'vape') ?></h2>
		</div>
		<div class="featured__wrap">
			<?php
			if ($query->have_posts()) :
				while ($query->have_posts()) :
					$query->the_post();
					echo '<div class="featured__item">';
					vape_products();
					echo '</div>';
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<?php
$product_selling = rwmb_meta( 'product_selling' );
$args            = array(
	'post_type'   => 'product',
	'post_status' => 'publish',
	'post__in'    => $product_selling,
	// 'posts_per_page' => 10,
	// 'meta_key'       => 'total_sales',
	// 'orderby'        => 'meta_value_num',
);
$query = new WP_query( $args );
?>
<section class="best-selling">
	<div class="container">
		<div class="best-selling__top">
			<h2 class="title"><?= esc_html__( 'Vape hàng hiệu bán chạy', 'vape' ) ?></h2>
		</div>
		<div class="best-selling__wrap">
			<?php
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) :
					$query->the_post();
					echo '<div class="best-selling__item">';
					vape_products();
					echo '</div>';
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>

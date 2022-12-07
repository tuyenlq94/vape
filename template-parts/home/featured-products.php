<?php
$product_featured = rwmb_meta( 'product_featured' );

$args  = array(
	'post_type'   => 'product',
	'post_status' => 'publish',
	'post__in'    => $product_featured,
);
$query = new WP_query( $args );
?>
<section class="featured">
	<div class="container">
		<div class="featured__top">
			<h2 class="title"><?= esc_html__( 'Vape hàng hiệu gợi ý cho bạn', 'vape' ) ?></h2>
		</div>
		<div class="featured__wrap">
			<?php
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) :
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

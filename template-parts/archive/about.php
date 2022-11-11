<?php
$terms = wp_get_post_terms( $post->ID, 'product_cat', $args );
var_dump( $terms );
$about = rwmb_meta( 'description_product', [ 'object_type' => 'term' ], 19 );
?>
<section class="about-home">
	<div class="container">
		<div id="about-home__content">
			<?= wp_kses_post( wpautop( $about ) );?>
		</div>
		<button id="showBtn" class="xem_them">Xem thêm</button>
	</div>
</section>

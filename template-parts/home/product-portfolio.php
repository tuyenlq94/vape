<?php
$product_portfolio = rwmb_meta( 'product_portfolio' );
$trademark         = rwmb_meta( 'trademark' );
?>
<section class="product-portfolio">
<div class="container">
	<div class="product-portfolio__inner">
		<?php foreach ( $product_portfolio as $value ) : ?>
			<div class="product-portfolio__item">
				<a href="<?= esc_url( $value['link'] );?>">
					<div class="product-portfolio__image">
						<img src="<?= esc_url( wp_get_attachment_image_url( $value['image'], 'full', false ) ); ?>" width="60" height="60" alt="">
					</div>
					<div class="product-portfolio__content">
						<h3><?= esc_html( $value['title'] );?></h3>
						<p><?= esc_html( $value['content'] );?></p>
					</div>
				</a>
			</div>
		<?php endforeach; ?>
	</div>

</div>
</section>

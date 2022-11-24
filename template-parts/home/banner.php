<?php
$banners = rwmb_meta( 'banner_pc' );
?>
<section class="banner">
	<?php foreach ( $banners as $banner ) : ?>
		<div class="banner__inner">
			<a href="<?= esc_url( $banner['link'] ) ?>">
			<img class="banner_pc" src="<?= esc_url( wp_get_attachment_image_url( $banner['image'], 'full', false ) ); ?>" width="1920" height="454" alt="">
			<img class="banner_mb" src="<?= esc_url( wp_get_attachment_image_url( $banner['image_mb'], 'full', false ) ); ?>" width="1920" height="454" alt="">
			</a>
		</div>
	<?php endforeach; ?>
</section>

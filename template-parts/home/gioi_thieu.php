<?php 
$about = rwmb_meta( 'about_us', [ 'object_type' => 'setting' ], 'footer' );
$link_about = rwmb_meta( 'link_about', [ 'object_type' => 'setting' ], 'footer' );
$read_more = rwmb_meta( 'read_more', [ 'object_type' => 'setting' ], 'footer' );
?>
<section class="about-home">
	<div class="container">
		<?= wp_kses_post(wpautop($about));?>
		<a href="<?= esc_url($link_about);?>" class="xem_them">Xem thêm</a>
	</div>
</section>
<section class="read-more">
	<div class="container">
		<div class="read-more__wrap">
		<?= wp_kses_post(wpautop($read_more));?>
		</div>
	</div>
</section>
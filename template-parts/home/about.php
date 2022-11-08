<?php
$about = rwmb_meta( 'gioi_thieu' );
?>
<section class="about-home">
	<div class="container">
		<div id="about-home__content">
			<?= wp_kses_post( wpautop( $about ) );?>
		</div>
		<button id="showBtn" class="xem_them">Xem thêm</button>
	</div>
</section>

<?php
$read_more = rwmb_meta( 'read_more', [ 'object_type' => 'setting' ], 'footer' );
?>
<section class="read-more">
	<div class="container">
		<div class="read-more__wrap">
		<?= wp_kses_post( wpautop( $read_more ) );?>
		</div>
	</div>
</section>

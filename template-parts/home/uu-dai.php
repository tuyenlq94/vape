<?php 
$title = rwmb_meta( 'title_uu_dai', [ 'object_type' => 'setting' ], 'footer' );
$uu_dai = rwmb_meta( 'group_uu_dai', [ 'object_type' => 'setting' ], 'footer' );
?>
<section class="uu-dai">
	<div class="container">
		<h2 class="title"><?= esc_html($title)?></h2>
		<div class="uu-dai__wrap">
			<?php foreach($uu_dai as $value):?>
				<div class="uu-dai__item">
					<div class="entry-top">
						<img src="<?= esc_url(wp_get_attachment_image_url($value['image'], 'full', false)); ?>" width="70" height="70" alt="">
						<h3><?= esc_html($value['title']);?></h3>
					</div>
					<div class="entry-content">
						<?= wp_kses_post(wpautop($value['content']));?>
						<a href="<?= esc_url($value['link'])?>" class="see-more"><?= esc_html__( 'Xem chi tiết', 'vape' )?></a>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>
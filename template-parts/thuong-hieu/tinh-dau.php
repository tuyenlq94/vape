<?php
$title_vape = rwmb_meta('title_tinh_dau');
$content_vape = rwmb_meta('content_tinh_dau');
$sub_vape = rwmb_meta('sub_tinh_dau');
$vapes = rwmb_meta('group_tinh_dau');
?>
<section class="thuong-hieu">
	<div class="container">
		<div class="thuong-hieu__vape">
			<h2 class="title"><?= $title_vape;?></h2>
			<div class="entry-content"><?= wp_kses_post(wpautop($content_vape));?></div>
			<p class="sub_title"><?= esc_html($sub_vape);?></p>
			<div class="thuong-hieu__inner">
				<?php foreach( $vapes as $vape ) : ?>
					<div class="thuong-hieu__item">
						<div class="entry-thumbnail">
							<a href="<?= esc_url($vape['link'])?>">
							<img src="<?= esc_url(wp_get_attachment_image_url($vape['image'], 'full', false)); ?>" width="1920" height="454" alt="">
							</a>
						</div>
						<h3 class="entry-title"><a href="<?= esc_url($vape['link']);?>"><?= esc_html($vape['title']);?></a></h3>
						<p class="sub"><?= esc_html($vape['sub_title']);?></p>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</section>
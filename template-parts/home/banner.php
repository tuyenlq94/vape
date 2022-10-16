<?php
$banners = rwmb_meta('banner_pc');
?>
<section class="banner">
	<?php foreach ($banners as $banner) : ?>
		<div class="banner__inner">
			<img src="<?= esc_url(wp_get_attachment_image_url($banner['image'], 'full', false)); ?>" width="1920" height="454" alt="">
			<div class="banner__wrap">
				<div class="container">
					<div class="banner__content">
						<h4><?= esc_html($banner['sub_title']); ?></h4>
						<h2><?= esc_html($banner['title']); ?></h2>
						<div class="entry-content"><?= wp_kses_post(wpautop($banner['content'])); ?></div>
						<a href="<?= esc_url($banner['link']) ?>" class="buy-now">Mua luôn</a>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</section>
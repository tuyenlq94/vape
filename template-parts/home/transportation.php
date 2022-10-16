<?php
$transportations = rwmb_meta('giao_van_group');
?>
<section class="transportation">
	<div class="container">
		<div class="transportation__wrap">
			<?php foreach ($transportations as $transportation) : ?>
				<div class="transportation__item">
					<img src="<?= esc_url(wp_get_attachment_image_url($transportation['image'], 'full', false)); ?>" width="45" height="45" alt="">
					<div class="transportation__content">
						<h3><?= esc_html($transportation['title']); ?></h3>
						<p><?= esc_html($transportation['content']); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
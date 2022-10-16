<?php
$product_portfolio = rwmb_meta('product_portfolio');
$trademark = rwmb_meta('trademark');
?>
<section class="product-portfolio">
<div class="container">
	<ul class="tabs update-show" id="tab">
		<li class="tab-link current" data-tab="tab_1">Danh Mục Nổi Bật</li>
		<li class="tab-link" data-tab="tab_2">Thương Hiệu Nổi Bật</li>
	</ul>
	<div id="tab-content">
		<div id="tab_1" class="tab-content current">
			<div class="product-portfolio__inner">
				<?php foreach ($product_portfolio as $value) : ?>
					<div class="product-portfolio__item">
						<div class="product-portfolio__image">
							<img src="<?= esc_url(wp_get_attachment_image_url($value['image'], 'full', false)); ?>" width="60" height="60" alt="">
						</div>
						<div class="product-portfolio__content">
							<h3><?= esc_html($value['title']);?></h3>
							<p><?= esc_html($value['content']);?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div id="tab_2" class="tab-content ">
			<div class="product-portfolio__trademark">
				<?php foreach ($trademark as $value) : ?>
					<div class="trademark__item">
						<div class="trademark__image">
							<img src="<?= esc_url(wp_get_attachment_image_url($value['image'], 'full', false)); ?>" width="160" height="160" alt="">
						</div>
						<div class="trademark__content">
							<h3><?= esc_html($value['title']);?></h3>
							<p><?= esc_html($value['content']);?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
</section>
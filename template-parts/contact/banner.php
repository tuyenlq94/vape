<?php
$form = rwmb_meta('form');
$contact = rwmb_meta('form_contact');
$soical = rwmb_meta('soical');
$maps = rwmb_meta('maps');
?>
<section class="contact">
	<div class="container">
		<div class="thuong-hieu__breadcrumb">
			<?= do_shortcode( '[wpseo_breadcrumb]' ); ?>
		</div>
		<div class="contact__thumbnail" style="background-image: url(<?php the_post_thumbnail_url();?>);">
			<h1 class="title"><?php the_title();?></h1>
		</div>
		<div class="contact__wrap">
			<div class="contact__form">
				<?= wp_kses_post($form); ?>
				<?= do_shortcode($contact ); ?>
			</div>
			<div class="contact__content">
				<?php the_content(); ?>
				<?= $soical; ?>
				<?= $maps; ?>
			</div>
		</div>
	</div>
</section>
<?php 
$title = rwmb_meta( 'title_news', [ 'object_type' => 'setting' ], 'footer' );
$news = rwmb_meta( 'news', [ 'object_type' => 'setting' ], 'footer' );
$args = [
	'post_type'	=> 'post',
	'cat' => $news->term_id,
	'posts_per_page' => 4,
];
$the_query = new WP_Query( $args );
?>
<section class="news">
	<div class="container">
		<h2 class="title"><?= esc_html($title);?></h2>
		<div class="news__wrap">
			<?php
			if($the_query->have_posts()) :
				while($the_query->have_posts()) :
					$the_query->the_post();
					vape_news_post();
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
		<a href="<?= get_category_link( $news->term_id )?>" class="see-blog">Xem thêm <?php Vape_Icons::render('arrow-next')?></a>
	</div>
</section>